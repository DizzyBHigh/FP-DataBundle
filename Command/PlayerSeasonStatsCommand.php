<?php

namespace FantasyPro\DataBundle\Command;

use Prophecy\Argument;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\ProgressBar;

class PlayerSeasonStatsCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName( 'fetch_data:playerSeasonStats' )
            ->setDescription( 'Pulls PlayerSeasonStats and updates/Inserts to database' )
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
                InputOption::VALUE_REQUIRED,
                'SeasonType: e.g REG (default), PRE, POST, OFF',
                'REG'
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

        if ($type == 'normal') {

            if ($team == 'none' && $player == 'none') {
                $playerSeasonStats = $fetcher->playerSeasonStats( $fullSeason );
                $fetchType         = 'playerSeasonStats';
            }
            if ($player != 'none') {
                $playerSeasonStats = $fetcher->playerSeasonStatsByPlayerID( $fullSeason, $player );
                $fetchType         = 'playerSeasonStatsByPlayerID';
            }
            if ($team != 'none') {
                $playerSeasonStats = $fetcher->playerSeasonStatsByTeam( $fullSeason, $team );
                $fetchType         = 'playerSeasonStatsByTeam';
            }

        } else {

            if ($team == 'none' && $player == 'none') {
                $playerSeasonStats = $fetcher->playerSeasonProjectionStats( $fullSeason );
                $fetchType         = 'playerSeasonProjectionStats';
            }
            if ($player != 'none') {
                $playerSeasonStats = $fetcher->playerSeasonProjectionStatsByPlayerID( $fullSeason, $player );
                $fetchType         = 'playerSeasonProjectionStatsByPlayerID';
            }
            if ($team != 'none') {
                $playerSeasonStats = $fetcher->playerSeasonProjectionStatsByTeam( $fullSeason, $team );
                $fetchType         = 'playerSeasonProjectionStatsByTeam';
            }

        }
        $thisCommand = "fetch_data:playerSeasonStats --season=".$season." --seasonType=".$seasonType." type--".$type." player--".$player." team--".$team;

        $taskMessage = "Running Command: ".$thisCommand;

//var_dump($playerGameStats);die();

        $playerSeasonProgress = new ProgressBar( $output, $playerSeasonStats->count() );
        $playerSeasonProgress->setFormat(
            "%message%\n ".$fetchType." %current% of %max% [%bar%] %percent:3s%% \n%elapsed:6s%/n"
        );
        $playerSeasonProgress->setMessage( $taskMessage );
        $playerSeasonProgress->setBarCharacter( "<comment>=</comment>" );
        // the unfinished part of the bar
        $playerSeasonProgress->setEmptyBarCharacter( ' ' );
        // the progress character
        $playerSeasonProgress->setProgressCharacter( '>' );
        $playerSeasonProgress->start();

        //set up a count for scoringdetails
        $scoreCount = 0;
        foreach ($playerSeasonStats as $playerSeasonStat) {
            $playerSeasonProgress->setMessage(
                "Processing ".$thisCommand." - ".$playerSeasonStat['Name'].", ".$playerSeasonStat['Position']
            );
            if ($type == 'none') {
                $container->get( 'playerseason_persister' )->Persist( $playerSeasonStat );
            }
            if ($type == 'projected') {
                $container->get( 'playerSeasonProjected_persister' )->Persist( $playerSeasonStat );
            }
            //SeasonLeagueLeaders data may also contains ScoringDetials
            if (array_key_exists( 'ScoringDetails', $playerSeasonStat )) {
                $scoringDetails = $playerSeasonStat['ScoringDetails'];

                if (sizeof( $scoringDetails ) > 0) {
                    foreach ($scoringDetails as $scoringDetail) {
                        $playerSeasonProgress->setMessage(
                            "Processing ".$thisCommand." -  ".$playerSeasonStat['Name'].", ".$playerSeasonStat['Position']." Scoring Details"
                        );
                        $container->get( 'scoringdetail_persister' )->Persist( $scoringDetail );
                        $scoreCount++;
                    }
                }
            }
            $playerSeasonProgress->advance();
        }
        $playerSeasonProgress->setMessage(
            "Completed Command:".$thisCommand." ( Processed ".$playerSeasonStats->count(
            )." ".$fetchType." and ".$scoreCount." scores)"
        );
        $playerSeasonProgress->finish();
    }
}