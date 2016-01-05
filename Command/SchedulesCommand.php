<?php

namespace FantasyPro\DataBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Input\StringInput;

class SchedulesCommand extends ContainerAwareCommand
{

    private $output;

    protected function configure()
    {
        $this
            ->setName( 'fetch_data:schedules' )
            ->setDescription( 'Pulls Schedules and updates/Inserts to database' )
            ->addOption(
                'season',
                null,
                InputOption::VALUE_OPTIONAL,
                "What Season you would like to pull schedules for e.g 2014, 2007",
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
        $this->output = $output;
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
            "%message%\n Schedule %current% of %max% [%bar%] %percent:3s%% %elapsed:6s%"
        );
        $scheduleProgress->setMessage( $taskMessage );
        $scheduleProgress->setBarCharacter( "<comment>=</comment>" );
        // the unfinished part of the bar
        $scheduleProgress->setEmptyBarCharacter( ' ' );
        // the progress character
        $scheduleProgress->setProgressCharacter( '>' );
        $scheduleProgress->start();
        $lastDFPDate = '';
        foreach ($schedules as $schedule) {
            $scheduleProgress->setMessage(
                "Processing ".$thisCommand." (".$criteria.") - Team: ".$schedule['HomeTeam']." vs ".$schedule['AwayTeam']
            );
            $container->get( 'schedule_persister' )->Persist( $schedule );

            $scheduleDate = $schedule['Date'];
            $dfpDate = $this->getContainer()->get('date_helper')->parseDateForDFP($scheduleDate);
            if($dfpDate !== $lastDFPDate && $dfpDate !== null){
                $this->runCommand('fetch_data:dailyFantasyPlayers --date='.$dfpDate);

            }
            $lastDFPDate = $dfpDate;
            $scheduleProgress->advance();
        }
        $scheduleProgress->setMessage(
            "Completed Command: ".$thisCommand." (".$criteria."), ( Processed ".$schedules->count()." Schedules )"
        );
        $scheduleProgress->finish();
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