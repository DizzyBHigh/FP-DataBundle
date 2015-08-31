<?php

namespace FantasyPro\DataBundle\Command;

use Prophecy\Argument;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\ProgressBar;

class TeamGameStatsCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName( 'fetch_data:teamGameStats' )
            ->setDescription( 'Pulls TeamGameStats and updates/Inserts to database' )
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
                'Week: none (default), current, Preseason (0 to 4), Regular Season (1 to 17), Postseason (1 to 4)',
                'none'
            );
    }

    protected function execute( InputInterface $input, OutputInterface $output )
    {
        $container = $this->getContainer();

        $fetcher = $container->get( 'data_fetcher' );

        $season     = $input->getOption( 'season' );
        $seasonType = $input->getOption( 'seasonType' );
        $week       = $input->getOption( 'week' );

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

        if ($week == 'none') {
            $gameStats = $fetcher->teamSeasonStats( $fullSeason );
            $fetchType = "TeamGameStatsBySeason";
        } else {
            $gameStats = $fetcher->teamGameStats( $fullSeason, $week );
            $fetchType = "TeamGameStatsByWeek";
        }

        $thisCommand = "fetch_data:teamGameStats --season=".$season." --seasonType=".$seasonType." --week=".$week;
        $taskMessage = "Running Command: ".$thisCommand;

        $gameStatsProgress = new ProgressBar( $output, $gameStats->count() );
        $gameStatsProgress->setFormat(
            "%message%\n ".$fetchType." %current% of %max% [%bar%] %percent:3s%% %elapsed:6s%"
        );
        $gameStatsProgress->setMessage( $taskMessage );
        $gameStatsProgress->setBarCharacter( "<comment>=</comment>" );
        // the unfinished part of the bar
        $gameStatsProgress->setEmptyBarCharacter( ' ' );
        // the progress character
        $gameStatsProgress->setProgressCharacter( '>' );
        $gameStatsProgress->start();
        $gameStatsProgress->setMessage(
            "Processing ".$thisCommand
        );
        if ($gameStats->count() > 0) {
            foreach ($gameStats as $gameStat) {
                if ($week == 'none') {
                    $container->get( 'teamseasonstats_persister' )->Persist( $gameStat );
                } else {
                    $container->get( 'teamgamestats_persister' )->Persist( $gameStat );
                }
                $gameStatsProgress->advance();
            }
        }
        $gameStatsProgress->setMessage(
            "Completed Command:".$thisCommand." ( Processed ".$gameStats->count().")"
        );
        $gameStatsProgress->finish();
    }
}