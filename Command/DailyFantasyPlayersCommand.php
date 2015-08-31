<?php

namespace FantasyPro\DataBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\ProgressBar;

class DailyFantasyPlayersCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName( 'fetch_data:dailyFantasyPlayers' )
            ->setDescription( 'Pulls DailyFantasyPlayers and updates/Inserts to database' )
            ->addOption(
                'date',
                null,
                InputOption::VALUE_REQUIRED,
                "The date of the contest for which you're pulling players: today (default), e.g 2014-SEP-21",
                "today"
            );
    }

    protected function execute( InputInterface $input, OutputInterface $output )
    {
        $container = $this->getContainer();

        // get the data fetcher
        $fetcher     = $container->get( 'data_fetcher' );
        $dateHelper  = $container->get( 'date_helper' );
        $date        = $input->getOption( 'date' );
        $playerCount = 0;

        if ($date == 'today') {
            $criteria    = $dateHelper->apiTodayDate();
            $thisCommand = "fetch_data:dailyFantasyPlayers --date=".$date." (".$criteria.")";
        } else {
            $criteria    = $date;
            $thisCommand = "fetch_data:dailyFantasyPlayers --date=".$date;
        }

        $taskMessage = "Running Command: ".$thisCommand;

        $dailyFantasyPlayers = $fetcher->dailyFantasyPlayers( $criteria );

        $DailyFantasyPlayerProgress = new ProgressBar( $output, $dailyFantasyPlayers->count() );
        $DailyFantasyPlayerProgress->setFormat(
            "%message%\n DailyFantasyPlayer %current% of %max% [%bar%] %percent:3s%% \n%elapsed:6s%/n"
        );
        $DailyFantasyPlayerProgress->setMessage( $taskMessage );
        $DailyFantasyPlayerProgress->setBarCharacter( "<comment>=</comment>" );
        // the unfinished part of the bar
        $DailyFantasyPlayerProgress->setEmptyBarCharacter( ' ' );
        // the progress character
        $DailyFantasyPlayerProgress->setProgressCharacter( '>' );
        $DailyFantasyPlayerProgress->start();

        foreach ($dailyFantasyPlayers as $DailyFantasyPlayer) {
            $container->get( 'dailyFantasyPlayer_persister' )->Persist( $DailyFantasyPlayer );
            $playerCount++;
            $DailyFantasyPlayerProgress->setMessage(
                $taskMessage."  - Processing Player: ".$DailyFantasyPlayer['Name']

            );
            $DailyFantasyPlayerProgress->advance();
        }
        $DailyFantasyPlayerProgress->setMessage(
            "Completed Command: fetch_data:dailyFantasyPlayers Date - ".$criteria." ( Processed ".$playerCount." DailyFantasyPlayers )"
        );
        $DailyFantasyPlayerProgress->finish();
    }
}