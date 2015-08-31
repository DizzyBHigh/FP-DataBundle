<?php

namespace FantasyPro\DataBundle\Command;

use Prophecy\Argument;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\ProgressBar;

class PlayerGameStatsCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName( 'fetch_data:playerGameStats' )
            ->setDescription( 'Pulls SeasonLeagueLeaders and updates/Inserts to database' )
            ->addOption(
                'type',
                null,
                InputOption::VALUE_REQUIRED,
                'Type of stats to get: normal (default), projected',
                'normal'
            )
            ->addOption(
                'season',
                null,
                InputOption::VALUE_REQUIRED,
                'Season: current (default) or by year e.g 2014',
                'current'
            )
            ->addOption(
                'seasonType',
                null,
                InputOption::VALUE_OPTIONAL,
                "SeasonType: REG (default), PRE, POST, OFF",
                "REG"
            )
            ->addOption(
                'week',
                null,
                InputOption::VALUE_REQUIRED,
                'Week: current(default), Preseason (0 to 4), Regular Season (1 to 17), Postseason (1 to 4)',
                'current'
            )
            ->addOption(
                'player',
                null,
                InputOption::VALUE_REQUIRED,
                'player: none (default), playerID e.g 10974',
                'none'
            )
            ->addOption(
                'team',
                null,
                InputOption::VALUE_REQUIRED,
                'team: none (default), Team e.g WAS',
                'none'
            );
    }

    protected function execute( InputInterface $input, OutputInterface $output )
    {
        $container = $this->getContainer();

        $fetcher = $container->get( 'data_fetcher' );

        $type            = $input->getOption( 'type' );
        $season          = $input->getOption( 'season' );
        $seasonType      = $input->getOption( 'seasonType' );
        $week            = $input->getOption( 'week' );
        $player          = $input->getOption( 'player' );
        $team            = $input->getOption( 'team' );
        $playerGameStats = '';

        // set the seaon to fetch
        if ($season == 'current') {
            $newSeason  = $fetcher->currentSeason();
            $fullSeason = $newSeason.$seasonType;
        } else {
            $fullSeason = $season.$seasonType;
        }
        // set the week to fetch
        if ($week == 'current') {
            $week = $fetcher->currentWeek();
        }

        //var_dump($fullSeason, $week);die();
        if ($type == 'normal') {

            if ($team == 'none' && $player == 'none') {
                $playerGameStats = $fetcher->playerGameStatsByWeek( $fullSeason, $week );
                $fetchType       = 'playerGameStatsByWeek';
            }
            if ($player != 'none') {
                $playerGameStats = $fetcher->playerGameStatsByPlayerID( $fullSeason, $week, $player );
                $fetchType       = 'playerGameStatsByPlayerID';
            }
            if ($team != 'none') {
                $playerGameStats = $fetcher->playerGameStatsByTeam( $fullSeason, $week, $team );
                $fetchType       = 'playerGameStatsByTeam';
            }

        } else {

            if ($team == 'none' && $player == 'none') {
                $playerGameStats = $fetcher->playerGameProjectionStatsByWeek( $fullSeason, $week );
                $fetchType       = 'playerGameProjectedStatsByWeek';
            }
            if ($player != 'none') {
                $playerGameStats = $fetcher->playerGameProjectionStatsByPlayerID( $fullSeason, $week, $player );
                $fetchType       = 'playerGameProjectedStatsByPlayerID';
            }
            if ($team != 'none') {
                $playerGameStats = $fetcher->playerGameProjectionStatsByTeam( $fullSeason, $week, $team );
                $fetchType       = 'playerGameProjectedStatsByTeam';
            }

        }
        $thisCommand = "fetch_data:playerGameStats --type=".$type." --season=".$season." --seasonType=".$seasonType." --week=".$week." --player=".$player." --team=".$team;

        $taskMessage = "Running Command: ".$thisCommand;

//var_dump($playerGameStats);die();

        $playerGameProgress = new ProgressBar( $output, $playerGameStats->count() );
        $playerGameProgress->setFormat(
            "%message%\n ".$fetchType." %current% of %max% [%bar%] %percent:3s%% %elapsed:6s%"
        );
        $playerGameProgress->setMessage( $taskMessage );
        $playerGameProgress->setBarCharacter( "<comment>=</comment>" );
        // the unfinished part of the bar
        $playerGameProgress->setEmptyBarCharacter( ' ' );
        // the progress character
        $playerGameProgress->setProgressCharacter( '>' );
        $playerGameProgress->start();

        //set up a count for scoringdetails
        $scoreCount = 0;
        foreach ($playerGameStats as $playerGameStat) {
            $playerGameProgress->setMessage(
                "Processing ".$thisCommand." - ".$playerGameStat['Name'].", ".$playerGameStat['Position']
            );
            if ($type == 'none') {
                $container->get( 'playergame_persister' )->Persist( $playerGameStat );
            }
            if ($type == 'projected') {
                $container->get( 'playergameprojectedstats_persister' )->Persist( $playerGameStat );
            }
            //SeasonLeagueLeaders data may also contains ScoringDetials
            if (array_key_exists( 'ScoringDetails', $playerGameStat )) {
                $scoringDetails = $playerGameStat['ScoringDetails'];

                if (sizeof( $scoringDetails ) > 0) {
                    foreach ($scoringDetails as $scoringDetail) {
                        $playerGameProgress->setMessage(
                            "Processing ".$thisCommand." -  ".$playerGameStat['Name'].", ".$playerGameStat['Position']." Scoring Details"
                        );
                        $container->get( 'scoringdetail_persister' )->Persist( $scoringDetail );
                        $scoreCount++;
                    }
                }
            }
            $playerGameProgress->advance();
        }
        $playerGameProgress->setMessage(
            "Completed Command:".$thisCommand." ( Processed ".$playerGameStats->count(
            )." ".$fetchType." and ".$scoreCount." scores)"
        );
        $playerGameProgress->finish();
    }
}