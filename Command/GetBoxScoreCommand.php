<?php

namespace FantasyPro\DataBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Question\Question;

class GetBoxScoreCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName( 'fetch_data:boxscores' )
            ->setDescription( 'Pulls boxScore stats by season or season and week then updates/Inserts to database' )
            ->addOption(
                'type',
                null,
                InputOption::VALUE_REQUIRED,
                'BoxScore Data to Retrive: current (default), final, active, delta, recent, live',
                'current'
            )
            ->addOption(
                'week',
                null,
                InputOption::VALUE_REQUIRED,
                'Which Week would you like to pull box data from? (leave blank for current Week)',
                'current'
            )
            ->addOption(
                'team',
                null,
                InputOption::VALUE_REQUIRED,
                'HomeTeam: none (default), e.g WAS, NE etc)',
                'none'
            )
            ->addOption(
                'minutes',
                null,
                InputOption::VALUE_REQUIRED,
                'Minutes: 60 (default), number of minutes e.g 10, 20,30 etc',
                '60'
            )
            ->addOption(
                'season',
                null,
                InputOption::VALUE_REQUIRED,
                'Season: current (default), e.g 2014, 2015',
                'current'
            )
            ->addOption(
                'seasonType',
                null,
                InputOption::VALUE_OPTIONAL,
                "SeasonType: REG (default), PRE, POST, OFF",
                "REG"
            );
    }

    protected function execute( InputInterface $input, OutputInterface $output )
    {
        $container = $this->getContainer();

        // get the data fetcher
        $fetcher = $container->get( 'data_fetcher' );

        $type       = $input->getOption( 'type' );
        $season     = $input->getOption( 'season' );
        $seasonType = $input->getOption( 'seasonType' );
        $week       = $input->getOption( 'week' );
        $minutes    = $input->getOption( 'minutes' );
        $team       = $input->getOption( 'team' );

        $thisCommand = "fetch_data:boxscores --type=".$type." --season=".$season." --seasonType=".$seasonType." --week=".$week." --team=".$team;

        if ($season == 'current') {
            $season     = $fetcher->currentSeason();
            $fullSeason = $season.$seasonType;
        } else {
            $fullSeason = $season.$seasonType;
        }

        if ($week == 'current') {
            $week = $fetcher->currentWeek();
        }


        switch ($type) {
            case 'current':
                if ($team != 'none') {
                    $boxScores = $fetcher->boxScore( $fullSeason, $week, $team );
                } else {
                    $boxScores = $fetcher->boxScores( $fullSeason, $week );
                }
                break;
            case 'final':
                $boxScores = $fetcher->finalBoxScores();
                break;
            case 'active':
                $boxScores = $fetcher->activeBoxScores();
                break;
            case 'delta':
                $boxScores = $fetcher->boxScoresDelta( $fullSeason, $week, $minutes );
                break;
            case 'recent':
                $boxScores = $fetcher->recentlyUpdatedBoxScores( $minutes );
                break;
            case 'live':
                //todo: need to check what data is returned when games are in progress (default to active boxscores for now)
                $boxScores = $fetcher->activeBoxScores();
                break;
        }

        $boxScoreCount = $boxScores->count();

        $boxScoreProgress = new ProgressBar( $output, $boxScoreCount );
        $boxScoreProgress->setFormat(
            "%message%\n BoxScores: %current% of %max% [%bar%] %percent:3s%% \n%elapsed:6s%/n"
        );

        $boxScoreProgress->setMessage( "Running Command: ".$thisCommand );
        $boxScoreProgress->setBarCharacter( '<comment>=</comment>' );
        // the unfinished part of the bar
        $boxScoreProgress->setEmptyBarCharacter( ' ' );
        // the progress character
        $boxScoreProgress->setProgressCharacter( '>' );

        $boxScoreProgress->start();

        //set up an array to hold our compiled playerGame data
        $playerGames = array();

        foreach ($boxScores as $boxScore) {
            $boxDetailProgress = new ProgressBar( $output, 21 );
            $boxDetailProgress->setFormat(
                "%message%  %current% of %max% [%bar%]%percent:3s%% complete time taken: %elapsed:6s% Memory Used: %memory:6s% "
            );
            //print("\n");
            $boxDetailProgress->setMessage( "GameFeed " );
            $boxDetailProgress->setBarCharacter( '<comment>=</comment>' );
            // the unfinished part of the bar
            $boxDetailProgress->setEmptyBarCharacter( ' ' );
            // the progress character
            $boxDetailProgress->setProgressCharacter( '>' );
            $boxDetailProgress->start();

            $game               = $boxScore['Game'];
            $score              = $boxScore['Score'];
            $scoringPlays       = $boxScore['ScoringPlays'];
            $scoringDetails     = $boxScore['ScoringDetails'];
            $awayFantasyDefense = $boxScore['AwayFantasyDefense'];
            $homeFantasyDefense = $boxScore['HomeFantasyDefense'];

            //PlayerGame Data Away
            $awayDefense         = $boxScore['AwayDefense'];
            $awayKickPuntReturns = $boxScore['AwayKickPuntReturns'];
            $awayKicking         = $boxScore['AwayKicking'];
            $awayPassing         = $boxScore['AwayPassing'];
            $awayPunting         = $boxScore['AwayPunting'];
            $awayReceiving       = $boxScore['AwayReceiving'];
            $awayRushing         = $boxScore['AwayRushing'];
            //PlayerGame Data Home
            $homeDefense         = $boxScore['HomeDefense'];
            $homeKickPuntReturns = $boxScore['HomeKickPuntReturns'];
            $homeKicking         = $boxScore['HomeKicking'];
            $homePassing         = $boxScore['HomePassing'];
            $homePunting         = $boxScore['HomePunting'];
            $homeReceiving       = $boxScore['HomeReceiving'];
            $homeRushing         = $boxScore['HomeRushing'];

            // add the game to the database
            $boxDetailProgress->setMessage(
                "Processing GameStats "
            );
            $container->get( 'gameStatsByWeek_persister' )->Persist( $game );
            $boxDetailProgress->advance();

            // add the scores to the database
            $boxDetailProgress->setMessage(
                "Processing Scores "
            );
            $container->get( 'score_persister' )->Persist( $score );
            $boxDetailProgress->advance();


            // add the scoring plays to the database
            $boxDetailProgress->setMessage(
                "Processing ScoringPlays "
            );
            foreach ($scoringPlays as $scoringPlay) {
                $container->get( 'scoringplay_persister' )->Persist( $scoringPlay );
            }
            $boxDetailProgress->advance();

            // add the scoring details to the database
            $boxDetailProgress->setMessage(
                "Processing ScoringDetails "
            );

            foreach ($scoringDetails as $scoringDetail) {
                $container->get( 'scoringdetail_persister' )->Persist( $scoringDetail );
            }
            $boxDetailProgress->advance();

            // add the awayFantasyDefense details to the database
            $boxDetailProgress->setMessage(
                "Processing AwayFantasyDefence "
            );
            $container->get( 'fantasydefencegame_persister' )->Persist( $awayFantasyDefense );
            $boxDetailProgress->advance();

            $boxDetailProgress->setMessage(
                "Processing HomeFantasyDefence "
            );
            $container->get( 'fantasydefencegame_persister' )->Persist( $homeFantasyDefense );
            $boxDetailProgress->advance();
            //working till here!!!
            //Time to process PlayerGame data
            //set up an array to hold this PlayerGame
            $playerGame = array();

            //add base data from the game (Required Fields for PlayerGame Entity)
            $playerGame = $this->setBoxPlayerGameBase( $playerGame, $game );

            //now we have base data for our playergame process the playerGame data
            //awayDefence
            $boxDetailProgress->setMessage(
                "Processing Away PlayerGames "
            );
            foreach ($awayDefense as $currentDefense) {
                //get the baseData for PlayerGame
                $thisPlayerGame = $playerGame;
                $thisPlayerGame = $this->setBoxPlayer( $thisPlayerGame, $currentDefense );

                $thisPlayerGame = $this->setBoxDefense( $thisPlayerGame, $currentDefense );
                array_push( $playerGames, $thisPlayerGame );

            }
            $boxDetailProgress->advance();
            //awayKickPuntReturns

            foreach ($awayKickPuntReturns as $currentKickPuntReturns) {
                //get the baseData for PlayerGame
                $thisPlayerGame = $playerGame;
                $thisPlayerGame = $this->setBoxPlayer( $thisPlayerGame, $currentKickPuntReturns );
                $thisPlayerGame = $this->setBoxKickPuntReturns( $thisPlayerGame, $currentKickPuntReturns );
                array_push( $playerGames, $thisPlayerGame );
            }
            $boxDetailProgress->advance();
            //awayKicking
            foreach ($awayKicking as $currentKicking) {
                $thisPlayerGame = $playerGame;
                $thisPlayerGame = $this->setBoxPlayer( $thisPlayerGame, $currentKicking );
                $thisPlayerGame = $this->setBoxKicking( $thisPlayerGame, $currentKicking );
                array_push( $playerGames, $thisPlayerGame );
            }
            $boxDetailProgress->advance();
            //awayPassing
            foreach ($awayPassing as $currentPassing) {
                $thisPlayerGame = $playerGame;
                $thisPlayerGame = $this->setBoxPlayer( $thisPlayerGame, $currentPassing );
                $thisPlayerGame = $this->setBoxPassing( $thisPlayerGame, $currentPassing );
                array_push( $playerGames, $thisPlayerGame );
            }
            $boxDetailProgress->advance();
            //awayPunting

            foreach ($awayPunting as $currentPunting) {
                $thisPlayerGame = $playerGame;
                $thisPlayerGame = $this->setBoxPlayer( $thisPlayerGame, $currentPunting );
                $thisPlayerGame = $this->setBoxPunting( $thisPlayerGame, $currentPunting );
                array_push( $playerGames, $thisPlayerGame );
            }
            $boxDetailProgress->advance();

            //awayReceiving

            foreach ($awayReceiving as $currentReceiving) {
                $thisPlayerGame = $playerGame;
                $thisPlayerGame = $this->setBoxPlayer( $thisPlayerGame, $currentReceiving );
                $thisPlayerGame = $this->setBoxReceiving( $thisPlayerGame, $currentReceiving );
                array_push( $playerGames, $thisPlayerGame );
            }
            $boxDetailProgress->advance();

            //awayRushing

            foreach ($awayRushing as $currentRushing) {
                $thisPlayerGame = $playerGame;
                $thisPlayerGame = $this->setBoxPlayer( $thisPlayerGame, $currentRushing );
                $thisPlayerGame = $this->setBoxRushing( $thisPlayerGame, $currentRushing );
                array_push( $playerGames, $thisPlayerGame );
            }
            $boxDetailProgress->advance();

            //homeDefence
            $boxDetailProgress->setMessage(
                "Processing Home PlayerGames "
            );
            foreach ($homeDefense as $currentDefense) {
                //get the baseData for PlayerGame
                $thisPlayerGame = $playerGame;
                $thisPlayerGame = $this->setBoxPlayer( $thisPlayerGame, $currentDefense );
                $thisPlayerGame = $this->setBoxDefense( $thisPlayerGame, $currentDefense );
                array_push( $playerGames, $thisPlayerGame );

            }
            $boxDetailProgress->advance();

            //homeKickPuntReturns
            foreach ($homeKickPuntReturns as $currentKickPuntReturns) {
                //get the baseData for PlayerGame
                $thisPlayerGame = $playerGame;
                $thisPlayerGame = $this->setBoxPlayer( $thisPlayerGame, $currentKickPuntReturns );
                $thisPlayerGame = $this->setBoxKickPuntReturns( $thisPlayerGame, $currentKickPuntReturns );
                array_push( $playerGames, $thisPlayerGame );
            }
            $boxDetailProgress->advance();

            //homeKicking
            foreach ($homeKicking as $currentKicking) {
                $thisPlayerGame = $playerGame;
                $thisPlayerGame = $this->setBoxPlayer( $thisPlayerGame, $currentKicking );
                $thisPlayerGame = $this->setBoxKicking( $thisPlayerGame, $currentKicking );
                array_push( $playerGames, $thisPlayerGame );
            }
            $boxDetailProgress->advance();

            //homePassing
            foreach ($homePassing as $currentPassing) {
                $thisPlayerGame = $playerGame;
                $thisPlayerGame = $this->setBoxPlayer( $thisPlayerGame, $currentPassing );
                $thisPlayerGame = $this->setBoxPassing( $thisPlayerGame, $currentPassing );
                array_push( $playerGames, $thisPlayerGame );
            }
            $boxDetailProgress->advance();


            //homePunting
            foreach ($homePunting as $currentPunting) {
                $thisPlayerGame = $playerGame;
                $thisPlayerGame = $this->setBoxPlayer( $thisPlayerGame, $currentPunting );
                $thisPlayerGame = $this->setBoxPunting( $thisPlayerGame, $currentPunting );
                array_push( $playerGames, $thisPlayerGame );
            }
            $boxDetailProgress->advance();

            //homeReceiving
            foreach ($homeReceiving as $currentReceiving) {
                $thisPlayerGame = $playerGame;
                $thisPlayerGame = $this->setBoxPlayer( $thisPlayerGame, $currentReceiving );
                $thisPlayerGame = $this->setBoxReceiving( $thisPlayerGame, $currentReceiving );
                array_push( $playerGames, $thisPlayerGame );
            }
            $boxDetailProgress->advance();
            //homeRushing
            foreach ($homeRushing as $currentRushing) {

                $thisPlayerGame = $playerGame;
                $thisPlayerGame = $this->setBoxPlayer( $thisPlayerGame, $currentRushing );
                $thisPlayerGame = $this->setBoxRushing( $thisPlayerGame, $currentRushing );
                array_push( $playerGames, $thisPlayerGame );
            }
            $boxDetailProgress->setMessage(
                "Saving PlayerGames "
            );
            $boxDetailProgress->advance();

            foreach ($playerGames as $currentPlayerGame) {
                $container->get( 'boxplayergame_persister' )->Persist( $currentPlayerGame );
            }
            $boxDetailProgress->advance();
            $boxDetailProgress->finish();
            // up one line
            $output->write( "\033[1A" );
            usleep( 100000 );
            $boxScoreProgress->advance();
            print( "\n" );
        }
        $boxScoreProgress->setMessage( "Completed Command: ".$thisCommand );
        $boxScoreProgress->finish();


    }

    protected function setBoxPlayerGameBase( $playerGame, $game )
    {
        $playerGame['GameKey']    = $game['GameKey'];
        $playerGame['GameDate']   = $game['Date'];
        $playerGame['Season']     = $game['Season'];
        $playerGame['SeasonType'] = $game['SeasonType'];
        $playerGame['Week']       = $game['Week'];


        return $playerGame;
    }

    protected function setBoxPlayer( $playerGame, $data )
    {
        $playerGame['FantasyPoints']    = $data['FantasyPoints'];
        $playerGame['FantasyPosition']  = $data['FantasyPosition'];
        $playerGame['Name']             = $data['Name'];
        $playerGame['Number']           = $data['Number'];
        $playerGame['PlayerID']         = $data['PlayerID'];
        $playerGame['Position']         = $data['Position'];
        $playerGame['PositionCategory'] = $data['PositionCategory'];
        $playerGame['ShortName']        = $data['ShortName'];
        $playerGame['Team']             = $data['Team'];

        return $playerGame;
    }

    protected function setBoxDefense( $playerGame, $defense )
    {
        $playerGame['AssistedTackles']              = $defense['AssistedTackles'];
        $playerGame['FumblesForced']                = $defense['FumblesForced'];
        $playerGame['FumblesRecovered']             = $defense['FumblesRecovered'];
        $playerGame['InterceptionReturnTouchdowns'] = $defense['InterceptionReturnTouchdowns'];
        $playerGame['InterceptionReturnYards']      = $defense['InterceptionReturnYards'];
        $playerGame['Interceptions']                = $defense['Interceptions'];
        $playerGame['PassesDefended']               = $defense['PassesDefended'];
        $playerGame['SackYards']                    = $defense['SackYards'];
        $playerGame['Sacks']                        = $defense['Sacks'];
        $playerGame['SoloTackles']                  = $defense['SoloTackles'];
        $playerGame['Tackles']                      = $defense['Tackles'];

        return $playerGame;
    }

    protected function setBoxRushing( $playerGame, $rush )
    {
        $playerGame['FumblesLost']            = $rush['FumblesLost'];
        $playerGame['RushingAttempts']        = $rush['RushingAttempts'];
        $playerGame['RushingLong']            = $rush['RushingLong'];
        $playerGame['RushingTouchdowns']      = $rush['RushingTouchdowns'];
        $playerGame['RushingYards']           = $rush['RushingYards'];
        $playerGame['RushingYardsPerAttempt'] = $rush['RushingYardsPerAttempt'];
        $playerGame['TwoPointConversionRuns'] = $rush['TwoPointConversionRuns'];

        return $playerGame;
    }

    protected function setBoxPassing( $playerGame, $pass )
    {
        $playerGame['PassingAttempts']             = $pass['PassingAttempts'];
        $playerGame['PassingCompletionPercentage'] = $pass['PassingCompletionPercentage'];
        $playerGame['PassingCompletions']          = $pass['PassingCompletions'];
        $playerGame['PassingInterceptions']        = $pass['PassingInterceptions'];
        $playerGame['PassingLong']                 = $pass['PassingLong'];
        $playerGame['PassingRating']               = $pass['PassingRating'];
        $playerGame['PassingSackYards']            = $pass['PassingSackYards'];
        $playerGame['PassingSacks']                = $pass['PassingSacks'];
        $playerGame['PassingTouchdowns']           = $pass['PassingTouchdowns'];
        $playerGame['PassingYards']                = $pass['PassingYards'];
        $playerGame['PassingYardsPerAttempt']      = $pass['PassingYardsPerAttempt'];
        $playerGame['PassingYardsPerCompletion']   = $pass['PassingYardsPerCompletion'];
        $playerGame['TwoPointConversionPasses']    = $pass['TwoPointConversionPasses'];

        return $playerGame;
    }

    protected function setBoxKicking( $playerGame, $kick )
    {
        $playerGame['ExtraPointsAttempted']  = $kick['ExtraPointsAttempted'];
        $playerGame['ExtraPointsMade']       = $kick['ExtraPointsMade'];
        $playerGame['FieldGoalPercentage']   = $kick['FieldGoalPercentage'];
        $playerGame['FieldGoalsAttempted']   = $kick['FieldGoalsAttempted'];
        $playerGame['FieldGoalsLongestMade'] = $kick['FieldGoalsLongestMade'];
        $playerGame['FieldGoalsMade']        = $kick['FieldGoalsMade'];

        return $playerGame;
    }

    protected function setBoxReceiving( $playerGame, $receive )
    {
        $playerGame['FumblesLost']                  = $receive['FumblesLost'];
        $playerGame['ReceivingLong']                = $receive['ReceivingLong'];
        $playerGame['ReceivingTargets']             = $receive['ReceivingTargets'];
        $playerGame['ReceivingTouchdowns']          = $receive['ReceivingTouchdowns'];
        $playerGame['ReceivingYards']               = $receive['ReceivingYards'];
        $playerGame['ReceivingYardsPerReception']   = $receive['ReceivingYardsPerReception'];
        $playerGame['ReceivingYardsPerTarget']      = $receive['ReceivingYardsPerTarget'];
        $playerGame['ReceptionPercentage']          = $receive['ReceptionPercentage'];
        $playerGame['Receptions']                   = $receive['Receptions'];
        $playerGame['TwoPointConversionReceptions'] = $receive['TwoPointConversionReceptions'];

        return $playerGame;
    }

    protected function setBoxKickPuntReturns( $playerGame, $kpr )
    {

        $playerGame['KickReturnLong']            = $kpr['KickReturnLong'];
        $playerGame['KickReturnTouchdowns']      = $kpr['KickReturnTouchdowns'];
        $playerGame['KickReturnYards']           = $kpr['KickReturnYards'];
        $playerGame['KickReturnYardsPerAttempt'] = $kpr['KickReturnYardsPerAttempt'];
        $playerGame['KickReturns']               = $kpr['KickReturns'];
        $playerGame['PuntReturnLong']            = $kpr['PuntReturnLong'];
        $playerGame['PuntReturnTouchdowns']      = $kpr['PuntReturnTouchdowns'];
        $playerGame['PuntReturnYards']           = $kpr['PuntReturnYards'];
        $playerGame['PuntReturnYardsPerAttempt'] = $kpr['PuntReturnYardsPerAttempt'];
        $playerGame['PuntReturns']               = $kpr['PuntReturns'];

        return $playerGame;
    }

    protected function setBoxPunting( $playerGame, $punt )
    {

        $playerGame['PuntAverage']    = $punt['PuntAverage'];
        $playerGame['PuntInside20']   = $punt['PuntInside20'];
        $playerGame['PuntTouchbacks'] = $punt['PuntTouchbacks'];
        $playerGame['PuntYards']      = $punt['PuntYards'];
        $playerGame['Punts']          = $punt['Punts'];

        return $playerGame;
    }

    protected function count_r( $array, $i = 0 )
    {
        foreach ($array as $k) {
            $i++;
            if (is_array( $k )) {
                $i += $this->count_r( $k );
            }
        }

        return $i;
    }

}