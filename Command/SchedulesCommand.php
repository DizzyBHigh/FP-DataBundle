<?php

namespace FantasyPro\DataBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\ProgressBar;

class SchedulesCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName( 'fetch_data:schedules' )
            ->setDescription( 'Pulls Schedules and updates/Inserts to database' )
            ->addOption(
                'season',
                null,
                InputOption::VALUE_OPTIONAL,
                "What Season you would like to pull scores for e.g 2014, 2007",
                "current"
            )
            ->addOption(
                'seasonType',
                null,
                InputOption::VALUE_OPTIONAL,
                "SeasonType: REG, POST, PRE",
                "REG"
            );
    }

    protected function execute( InputInterface $input, OutputInterface $output )
    {
        $container = $this->getContainer();

        // get the data fetcher
        $fetcher = $container->get( 'data_fetcher' );

        $season      = $input->getOption( 'season' );
        $seasonType  = $input->getOption( 'seasonType' );
        $thisCommand = "fetch_data:schedules --season=".$season." seasonType=".$seasonType;

        if ($season == 'current') {
            $season      = $fetcher->currentSeason();
            $criteria    = $season.$seasonType;
            $taskMessage = "Running Command: ".$thisCommand." (".$criteria.")";
        } else {
            $criteria    = $season.$seasonType;
            $taskMessage = "Running Command: ".$thisCommand." (".$criteria.")";
        }

        $schedules = $fetcher->schedules( $criteria );

        $scheduleProgress = new ProgressBar( $output, $schedules->count() );
        $scheduleProgress->setFormat(
            "%message%\n Schedule %current% of %max% [%bar%] %percent:3s%% \n%elapsed:6s%/n"
        );
        $scheduleProgress->setMessage( $taskMessage );
        $scheduleProgress->setBarCharacter( "<comment>=</comment>" );
        // the unfinished part of the bar
        $scheduleProgress->setEmptyBarCharacter( ' ' );
        // the progress character
        $scheduleProgress->setProgressCharacter( '>' );
        $scheduleProgress->start();

        foreach ($schedules as $schedule) {
            $scheduleProgress->setMessage(
                "Processing ".$thisCommand." (".$criteria.") - Team: ".$schedule['HomeTeam']." vs ".$schedule['AwayTeam']
            );
            $container->get( 'schedule_persister' )->Persist( $schedule );

            $scheduleProgress->advance();
        }
        $scheduleProgress->setMessage(
            "Completed Command: ".$thisCommand." (".$criteria."), ( Processed ".$schedules->count()." Schedules )"
        );
        $scheduleProgress->finish();
    }
}