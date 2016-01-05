<?php

namespace FantasyPro\DataBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\ProgressBar;

class FantasyPlayersCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName( 'fetch_data:fantasyPlayers' )
            ->setDescription( 'Pulls FantasyPlayers and updates/Inserts to database' );
    }

    protected function execute( InputInterface $input, OutputInterface $output )
    {
        $container = $this->getContainer();
        // get the data fetcher
        $fetcher     = $container->get('data_fetcher');
        $fantasyPlayerCount = 0;

        $thisCommand = "fetch_data:fantasyPlayers ";

        $taskMessage = "Running Command: ".$thisCommand;

        $fantasyPlayers = $fetcher->FantasyPlayersByADP();

        $fantasyPlayerProgress = new ProgressBar( $output, $fantasyPlayers->count() );
        $fantasyPlayerProgress->setFormat(
            "%message%\n FantasyPlayer %current% of %max% [%bar%] %percent:3s%% %elapsed:6s%"
        );
        $fantasyPlayerProgress->setMessage( $taskMessage );
        $fantasyPlayerProgress->setBarCharacter( "<comment>=</comment>" );
        // the unfinished part of the bar
        $fantasyPlayerProgress->setEmptyBarCharacter( ' ' );
        // the progress character
        $fantasyPlayerProgress->setProgressCharacter( '>' );
        $fantasyPlayerProgress->start();

        foreach ($fantasyPlayers as $fantasyPlayer) {
            $container->get( 'fantasyPlayer_persister' )->Persist( $fantasyPlayer );
            $fantasyPlayerCount++;
            $fantasyPlayerProgress->setMessage(
                $taskMessage."  - Processing FantasyPlayer: ".$fantasyPlayer['Name']

            );
            $fantasyPlayerProgress->advance();
        }
        $fantasyPlayerProgress->setMessage(
            "Completed Command: fetch_data:fantasyPlayers ( Processed ".$fantasyPlayerCount." fantasyPlayers )"
        );
        $fantasyPlayerProgress->finish();
    }
}