<?php

namespace FantasyPro\DataBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\ProgressBar;

class TimeFramesCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName( 'fetch_data:timeframes' )
            ->setDescription( 'Pulls Timeframes and updates/Inserts to database' )
            ->addOption(
                'type',
                null,
                InputOption::VALUE_OPTIONAL,
                "Type: current (default), all, upcoming, completed, recent",
                'all'
            );
    }

    protected function execute( InputInterface $input, OutputInterface $output )
    {
        $container = $this->getContainer();

        $chosenType  = $input->getOption( 'type' );
        $thisCommand = "data_fetcher:timeframes --type=".$chosenType;

        // get the data fetcher
        $fetcher = $container->get( 'data_fetcher' );

        /**
         * Get The timeframes from the api
         * Arguments for timeframes 'current', 'all', specified year e.g 2013,
         */

        $taskMessage = "Running Command: ".$thisCommand;

        $timeframes = $fetcher->timeframes( $chosenType );

        $timeframeProgress = new ProgressBar( $output, $timeframes->count() );
        $timeframeProgress->setFormat(
            "%message%\n Timeframe %current% of %max% [%bar%] %percent:3s%% %elapsed:6s%"
        );
        $timeframeProgress->setMessage( $taskMessage );
        $timeframeProgress->setBarCharacter( "<comment>=</comment>" );
        // the unfinished part of the bar
        $timeframeProgress->setEmptyBarCharacter( ' ' );
        // the progress character
        $timeframeProgress->setProgressCharacter( '>' );
        $timeframeProgress->start();

        foreach ($timeframes as $timeframe) {
            //persist the timeframe
            $timeframeProgress->setMessage(
                $thisCommand." ".$timeframe['Season']." ".$timeframe['Name']
            );
            $container->get( 'timeframe_persister' )->Persist( $timeframe );

            $timeframeProgress->advance();
        }

        $timeframeProgress->setMessage(
            "Completed Command: ".$thisCommand." (Processed ".$timeframes->count()." Timeframes)"
        );
        $timeframeProgress->finish();
    }
}