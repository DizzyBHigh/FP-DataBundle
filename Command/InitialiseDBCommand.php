<?php

namespace FantasyPro\DataBundle\Command;


use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\StringInput;

class InitialiseDBCommand extends ContainerAwareCommand
{
    private $output;

    protected function configure()
    {
        $this
            ->setName( 'fetch_data:initdata' )
            ->setDescription( 'Populates Database with all exisiting data at FantasyData.com ' )
            ->addOption(
                'season',
                null,
                InputOption::VALUE_REQUIRED,
                'Season: all (default), current or by year e.g 2014',
                'all'
            );

    }

    protected function execute( InputInterface $input, OutputInterface $output )
    {
        $output->writeln( '<comment>Initialising Database...</comment>' );
        $this->output = $output;
        $container    = $this->getContainer();
        $em           = $container->get( 'doctrine.orm.fantasydata_entity_manager' );
        $seasonHelper = $container->get( 'season_helper' );

        $fetcher = $container->get( 'data_fetcher' );
        // First set call the timeframe Command so we have the timeframes in the database.
        $timeFrameCommand = 'fetch_data:timeframes --type=all';
        $this->runCommand($timeFrameCommand);

        // now we have the timeframes in the db we retrive all the timeframes so we can loop through them and fetch the other data.
        $season = $season = $input->getOption( 'season' );

        if ($season == 'current') {
            $season = $fetcher->currentSeason();
        }
        if ($season == 'all') {
            $timeFrames = $em->getRepository( 'DataBundle:TimeFrame' )->findAll();
        } else {
            $timeFrames = $em->getRepository( 'DataBundle:TimeFrame' )->findBy( array( 'season' => $season ) );
        }

        $commandArray   = array();
        $consoleCommand = 'fetch_data:';
        //Players does not need season seasonType etc
        $players = $consoleCommand.'players';
        array_push($commandArray, $players);

        //Stadiums does not need season seasonType etc
        $stadiums = $consoleCommand.'stadiums';
        array_push($commandArray, $stadiums);
        $lastSeason  = 0;
        $currentWeek = -1;
        foreach ($timeFrames as $timeframe) {
            if ($timeframe->getWeek() != 0) {
                $season         = '--season='.$timeframe->getSeason();
                $seasonTypeNum  = $timeframe->getSeasonType();
                $seasonTypeText = $seasonHelper->convertSeasonTypeNum( $seasonTypeNum );
                $seasonType = '--seasonType='.$seasonTypeText;
                $week       = '--week='.$timeframe->getWeek();

                if ($seasonTypeNum != 4) {
                    $output->writeln(
                        '<comment>Generating Commands for: Season '.$season.$seasonType.' Week '.$week.'</comment>'
                    );
                    // Game Stats By week
                    $gameStatsByWeek = $consoleCommand.'gameStats '.$season.' '.$seasonType.' '.$week;
                    array_push( $commandArray, $gameStatsByWeek );

                    // Injurys By Week
                    $injury = $consoleCommand.'injury '.$season.' '.$seasonType.' '.$week;
                    array_push( $commandArray, $injury );

                    // GameLeagueLeaders
                    $gameLeagueLeaders = $consoleCommand.'gameLeagueLeaders '.$season.' '.$seasonType.' '.$week;
                    array_push( $commandArray, $gameLeagueLeaders );

                    //PlayerGameStats
                    $playerGameStats          = $consoleCommand.'playerGameStats --type=normal '.$season.' '.$seasonType.' '.$week;
                    $playerGameStatsProjected = $consoleCommand.'playerGameStats --type=projected '.$season.' '.$seasonType.' '.$week;
                    array_push( $commandArray, $playerGameStats );
                    array_push( $commandArray, $playerGameStatsProjected );

                    //Scores
                    $scores = $consoleCommand.'scores '.$season.' '.$seasonType.' '.$week;
                    array_push( $commandArray, $scores );

                    //we only need to pull this data once per season
                    if ($timeframe->getSeason().$timeframe->getSeasonType() != $lastSeason) {
                        //Byes
                        $byes = $consoleCommand.'byes '.$season.' '.$seasonType;
                        array_push( $commandArray, $byes );

                        //Schedules
                        $schedules = $consoleCommand.'schedules '.$season.' '.$seasonType;
                        array_push( $commandArray, $schedules );

                        //fantasy Defense Game
                        $fantasydefenceGame = $consoleCommand.'fantasyDefenceGame '.$season.' '.$seasonType;
                        array_push( $commandArray, $fantasydefenceGame );

                        //fantasy Defense Game (Projected)
                        $fantasydefenceGameProj = $consoleCommand.'fantasyDefenceGame '.$season.' '.$seasonType.' --statType=projected';
                        array_push( $commandArray, $fantasydefenceGameProj );

                        // Game Stats By season
                        $gameStatsBySeason = $consoleCommand.'gameStats '.$season.' '.$seasonType;
                        array_push( $commandArray, $gameStatsBySeason );

                        //fantasy Defense Season
                        $fantasydefenceSeason = $consoleCommand.'fantasyDefenceSeason --statType=normal '.$season.' '.$seasonType;
                        array_push( $commandArray, $fantasydefenceSeason );

                        //fantasy Defense Season (projected)
                        $fantasydefenceSeasonProj = $consoleCommand.'fantasyDefenceSeason --statType=projected '.$season.' '.$seasonType;
                        array_push( $commandArray, $fantasydefenceSeasonProj );

                        // SeasonLeagueLeaders
                        $gameLeagueLeaders = $consoleCommand.'gameLeagueLeaders '.$season.' '.$seasonType;
                        array_push( $commandArray, $gameLeagueLeaders );

                        //PlayerSeasonStats
                        $playerSeasonStats          = $consoleCommand.'playerSeasonStats --type=normal '.$season.' '.$seasonType;
                        $playerSeasonStatsProjected = $consoleCommand.'playerSeasonStats --type=projected '.$season.' '.$seasonType;
                        array_push( $commandArray, $playerSeasonStats );
                        array_push( $commandArray, $playerSeasonStatsProjected );

                        //standings
                        $standings = $consoleCommand.'standings '.$season;
                        array_push( $commandArray, $standings );

                        //Teams
                        $teams = $consoleCommand.'teams '.$season;
                        array_push( $commandArray, $teams );
                        $lastSeason = $timeframe->getSeason().$timeframe->getSeasonType();

                        //$dailyFantasyPlayers = $consoleCommand.'dailyFantasyPlayers';
                        //array_push($commandArray, $dailyFantasyPlayers);
                    }
                }

            }
        }

        $commandCount = count( $commandArray );
        $output->writeln( '<comment>Starting run of '.$commandCount.' Commands </comment>' );
        $output->writeln( '<comment>...</comment>' );
        $output->writeln( '<comment>...</comment>' );

        foreach ($commandArray as $command) {
            $this->runCommand( $command );
        }
        
        $output->writeln( '<comment>Finished!</comment>' );
    }

    private function runCommand( $string )
    {
        // Split namespace and arguments
        $namespace = explode( ' ', $string )[0];

        // Set input
        $command = $this->getApplication()->find( $namespace );
        //var_dump($command->getSynopsis());die();
        $input = new StringInput( $string );

        // Send all output to the console
        $returnCode = $command->run( $input, $this->output );

        return $returnCode != 0;
    }

}