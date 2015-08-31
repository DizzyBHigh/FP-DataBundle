<?php

namespace FantasyPro\DataBundle\Command;

use Prophecy\Argument;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\ProgressBar;

class InjuryCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName( 'fetch_data:injury' )
            ->setDescription( 'Pulls Injurys and updates/Inserts to database' )
            ->addOption(
                'season',
                null,
                InputOption::VALUE_REQUIRED,
                "current or year e.g 2014",
                "current"
            )
            ->addOption(
                'seasonType',
                null,
                InputOption::VALUE_REQUIRED,
                "Season Type REG, PRE, POST ",
                "REG"
            )
            ->addOption(
                'week',
                null,
                InputOption::VALUE_REQUIRED,
                "Valid values are as follows: current(default), Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.",
                "current"
            )
            ->addOption(
                'team',
                null,
                InputOption::VALUE_REQUIRED,
                "Abbreviation of team e.g WAS ",
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
        $team       = $input->getOption( 'team' );

        if ($season == 'current') {
            $season     = $fetcher->currentSeason();
            $fullSeason = $season.$seasonType;
        } else {
            $fullSeason = $season;
        }

        if ($week == 'current') {
            $week = $fetcher->currentWeek();
        }

        if ($team == 'none') {
            $thisCommand = "fetch_data:injury ".$season." ".$seasonType." ".$week;
            $taskMessage = "Running Command: ".$thisCommand;
            $injuries    = $fetcher->injuries( $fullSeason, $seasonType, $week );
        } else {
            $thisCommand = "fetch_data:injury ".$season." ".$seasonType." ".$week." ".$team;
            $taskMessage = "Running Command: ".$thisCommand;
            $injuries    = $fetcher->injuriesByTeam( $fullSeason, $seasonType, $week, $team );
        }

        $InjuryProgress = new ProgressBar( $output, $injuries->count() );
        $InjuryProgress->setFormat(
            "%message%\n Injury %current% of %max% [%bar%] %percent:3s%% %elapsed:6s%"
        );
        $InjuryProgress->setMessage( $taskMessage );
        $InjuryProgress->setBarCharacter( "<comment>=</comment>" );
        // the unfinished part of the bar
        $InjuryProgress->setEmptyBarCharacter( ' ' );
        // the progress character
        $InjuryProgress->setProgressCharacter( '>' );
        $InjuryProgress->start();

        foreach ($injuries as $injury) {
            $InjuryProgress->setMessage(
                "Processing ".$thisCommand." - ".$injury['Name'].", ".$injury['Status']
            );
            $container->get( 'injury_persister' )->Persist( $injury );
            $InjuryProgress->advance();
        }
        $InjuryProgress->setMessage(
            "Completed Command:".$thisCommand." ( Processed ".$injuries->count()." Injuries )"
        );
        $InjuryProgress->finish();
    }
}