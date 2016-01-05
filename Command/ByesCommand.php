<?php

namespace FantasyPro\DataBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\ProgressBar;

class ByesCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName( 'fetch_data:byes' )
            ->setDescription( 'Pulls Byes and updates/Inserts to database' )
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

        // get the data fetcher
        $fetcher = $container->get( 'data_fetcher' );

        /**
         * Get The byes from the api
         * Arguments for byes specified Season e.g 2013 (leave blank for currentseason)
         */
        $season     = $input->getOption( 'season' );
        $seasonType = $input->getOption( 'seasonType' );

        // set the seaon to fetch
        if ($season == 'current') {
            $newSeason  = $fetcher->currentSeason();
            $fullSeason = $newSeason.$seasonType;
        } else {
            $fullSeason = $season.$seasonType;
        }
        $thisCommand = "fetch_data:injury --season=".$season." --seasonType=".$seasonType;

        $taskMessage = "Running Command: ".$thisCommand;

        $byes = $fetcher->byes( $fullSeason );

        $ByeProgress = new ProgressBar( $output, $byes->count() );
        $ByeProgress->setFormat(
            "%message%\n Bye %current% of %max% [%bar%] %percent:3s%% %elapsed:6s%"
        );
        $ByeProgress->setMessage( $taskMessage );
        $ByeProgress->setBarCharacter( "<comment>=</comment>" );
        // the unfinished part of the bar
        $ByeProgress->setEmptyBarCharacter( ' ' );
        // the progress character
        $ByeProgress->setProgressCharacter( '>' );
        $ByeProgress->start();

        foreach ($byes as $Bye) {
            $ByeProgress->setMessage(
                $thisCommand." ".$Bye['Team']
            );
            $container->get( 'bye_persister' )->Persist( $Bye );

            $ByeProgress->advance();
        }
        $ByeProgress->setMessage(
            "Completed Command: ".$thisCommand." (Processed ".$byes->count()." Byes)"
        );
        $ByeProgress->finish();
    }
}