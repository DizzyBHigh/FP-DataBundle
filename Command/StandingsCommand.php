<?php

namespace FantasyPro\DataBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\ProgressBar;

class StandingsCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName( 'fetch_data:standings' )
            ->setDescription( 'Pulls Standings and updates/Inserts to database' )
            ->addOption(
                'season',
                null,
                InputOption::VALUE_REQUIRED,
                "What Season you would like to pull scores for e.g 2014, 2007",
                "current"
            )
            ->addOption(
                'seasonType',
                null,
                InputOption::VALUE_REQUIRED,
                "SeasonType: REG, POST, PRE",
                "REG"
            );
    }

    protected function execute( InputInterface $input, OutputInterface $output )
    {
        $container = $this->getContainer();

        // get the data fetcher
        $fetcher = $container->get( 'data_fetcher' );

        $season     = $input->getOption( 'season' );
        $seasonType = $input->getOption( 'seasonType' );

        $thisCommand = "fetch_data:standings --season=".$season." --seasonType=".$seasonType;
        if ($season == 'current') {
            $season      = $fetcher->currentSeason();
            $criteria    = $season.$seasonType;
            $taskMessage = "Running Command: ".$thisCommand." (".$criteria.")";
        } else {
            $criteria    = $season.$seasonType;
            $taskMessage = "Running Command: ".$thisCommand." (".$criteria.")";
        }

        $standings = $fetcher->standings( $criteria );

        $standingProgress = new ProgressBar( $output, $standings->count() );
        $standingProgress->setFormat(
            "%message%\n Standing %current% of %max% [%bar%] %percent:3s%% \n%elapsed:6s%/n"
        );
        $standingProgress->setMessage( $taskMessage );
        $standingProgress->setBarCharacter( "<comment>=</comment>" );
        // the unfinished part of the bar
        $standingProgress->setEmptyBarCharacter( ' ' );
        // the progress character
        $standingProgress->setProgressCharacter( '>' );
        $standingProgress->start();

        foreach ($standings as $standing) {
            $standingProgress->setMessage(
                "Processing ".$thisCommand." - ".$standing['Team']
            );
            $container->get( 'standing_persister' )->Persist( $standing );

            $standingProgress->advance();
        }
        $standingProgress->setMessage(
            "Completed Command: ".$thisCommand." (".$criteria.") ( Processed ".$standings->count()." Standings )"
        );
        $standingProgress->finish();
    }
}