<?php

namespace FantasyPro\DataBundle\Command;

use Prophecy\Argument;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\ProgressBar;

class FantasyDefenceGameCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName( 'fetch_data:fantasyDefenceGame' )
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
            )
            ->addOption(
                'week',
                null,
                InputOption::VALUE_REQUIRED,
                'Week: current(default), Preseason (0 to 4), Regular Season (1 to 17), Postseason (1 to 4)',
                'current'
            );
    }

    protected function execute( InputInterface $input, OutputInterface $output )
    {
        $container = $this->getContainer();

        $fetcher = $container->get( 'data_fetcher' );

        $statType   = $input->getOption( 'statType' );
        $season     = $input->getOption( 'season' );
        $seasonType = $input->getOption( 'seasonType' );
        $week       = $input->getOption( 'week' );

        $fantasyDefenceStats = null;
        //set Up the season
        if ($season == 'current') {
            $season     = $fetcher->currentSeason();
            $fullSeason = $season.$seasonType;
        } else {
            $fullSeason = $season.$seasonType;
        }
        //set Up the week
        if ($week == 'current') {
            $week = $fetcher->currentWeek();
        }

        $thisCommand = "fetch_data:fantasyDefenceGame --statType=".$statType." --season=".$season." --seasonType=".$seasonType." --week=".$week;

        // get stats depending on type
        if ($statType == 'normal') {
            $fantasyDefenceStats = $fetcher->fantasyDefenceByGame( $fullSeason, $week );
        }
        if ($statType == 'projected') {
            $fantasyDefenceStats = $fetcher->fantasyDefenceProjectionsByGame( $fullSeason, $week );
        }

        $taskMessage = "Running Command: ".$thisCommand;

        $fantasyDefenceStatsProgress = new ProgressBar( $output, $fantasyDefenceStats->count() );
        $fantasyDefenceStatsProgress->setFormat(
            "%message%\n FantasyDefenceGame (".$statType.") %current% of %max% [%bar%] %percent:3s%% %elapsed:6s%"
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
                $container->get( 'fantasydefencegame_persister' )->Persist( $fantasyDefenceStat );
            }
            if ($statType == 'projected') {
                $container->get( 'fantasyDefenceProjectionsByGame_persister' )->Persist( $fantasyDefenceStat );
            }
            $fantasyDefenceStatsProgress->advance();
        }
        $fantasyDefenceStatsProgress->setMessage(
            "Completed: ".$thisCommand." (".$fantasyDefenceStats->count()." FantastyDefenceStats Processed)"
        );
        $fantasyDefenceStatsProgress->finish();
    }
}