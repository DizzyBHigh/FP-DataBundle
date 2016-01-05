<?php


namespace FantasyPro\DataBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use DateTime;

class StadiumsCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName( 'fetch_data:stadiums' )
            ->setDescription( 'Pulls Stadium Data and updates/Inserts to database' );

    }

    protected function execute( InputInterface $input, OutputInterface $output )
    {
        $container = $this->getContainer();

        // get the data fetcher
        $fetcher = $container->get( 'data_fetcher' );
        //get stadium

        $stadiums = $fetcher->Stadiums();

        $thisCommand = "fetch_data:stadium ";
        $taskMessage = "Running Command: ".$thisCommand;

        $stadiumProgress = new ProgressBar( $output, $stadiums->count() );
        $stadiumProgress->setFormat(
            "%message%\n stadium %current% of %max% [%bar%] %percent:3s%% %elapsed:6s%"
        );
        $stadiumProgress->setMessage( $taskMessage );
        $stadiumProgress->setBarCharacter( "<comment>=</comment>" );
        // the unfinished part of the bar
        $stadiumProgress->setEmptyBarCharacter( ' ' );
        // the progress character
        $stadiumProgress->setProgressCharacter( '>' );
        $stadiumProgress->start();

        // loop through stadiums
        foreach ($stadiums as $stadium) {
            //persist the stadium
            $stadiumProgress->setMessage(
                "Processing ".$thisCommand." - ".$stadium['Name']
            );
            $container->get( 'stadium_persister' )->Persist( $stadium );
            $stadiumProgress->advance();
        }
        $stadiumProgress->setMessage(
            "Completed Command:".$thisCommand." ( Processed ".$stadiums->count()." Stadiums )"
        );
        $stadiumProgress->finish();


    }
}