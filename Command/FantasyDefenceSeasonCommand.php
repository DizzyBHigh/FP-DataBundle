<?php

namespace FantasyPro\DataBundle\Command;

use Prophecy\Argument;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\ProgressBar;

class FantasyDefenceSeasonCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName( 'fetch_data:fantasyDefenceSeason' )
            ->setDescription( 'Pulls FantasyDefence Data and updates/Inserts to database' )
            ->addOption(
                'statType',
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
            );
    }

    protected function execute( InputInterface $input, OutputInterface $output )
    {
        $container = $this->getContainer();

        $fetcher = $container->get( 'data_fetcher' );

        $statType            = $input->getOption( 'statType' );
        $season              = $input->getOption( 'season' );
        $seasonType          = $input->getOption( 'seasonType' );
        $fantasyDefenceStats = null;
        //set Up the season
        if ($season == 'current') {
            $season     = $fetcher->currentSeason();
            $fullSeason = $season.$seasonType;
        } else {
            $fullSeason = $season.$seasonType;
        }
        $thisCommand = "fetch_data:fantasyDefenceSeason --statType=".$statType." --season=".$season." --seasonType=".$seasonType;

        // get stats depending on type
        if ($statType == 'normal') {
            $fantasyDefenceStats = $fetcher->fantasyDefenceBySeason( $fullSeason );
        }
        if ($statType == 'projected') {
            $fantasyDefenceStats = $fetcher->fantasyDefenceProjectionsBySeason( $fullSeason );
        }

        $taskMessage = "Running Command: ".$thisCommand;

        $fantasyDefenceStatsProgress = new ProgressBar( $output, $fantasyDefenceStats->count() );
        $fantasyDefenceStatsProgress->setFormat(
            "%message%\n FantasyDefence (".$statType.") %current% of %max% [%bar%] %percent:3s%% %elapsed:6s%"
        );
        $fantasyDefenceStatsProgress->setMessage( $taskMessage );
        $fantasyDefenceStatsProgress->setBarCharacter( "<comment>=</comment>" );
        // the unfinished part of the bar
        $fantasyDefenceStatsProgress->setEmptyBarCharacter( ' ' );
        // the progress character
        $fantasyDefenceStatsProgress->setProgressCharacter( '>' );
        $fantasyDefenceStatsProgress->start();

        foreach ($fantasyDefenceStats as $fantasyDefenceStat) {
            if ($statType == 'normal') {
                $container->get( 'fantasyDefenceSeason_persister' )->Persist( $fantasyDefenceStat );
            }
            if ($statType == 'projected') {
                $container->get( 'fantasyDefenceProjectionsBySeason_persister' )->Persist( $fantasyDefenceStat );
            }
            $fantasyDefenceStatsProgress->advance();
        }
        $fantasyDefenceStatsProgress->setMessage(
            "Completed: ".$thisCommand." (".$fantasyDefenceStats->count()." FantastyDefenceStats Processed)"
        );
        $fantasyDefenceStatsProgress->finish();
    }
}