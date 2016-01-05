<?php

namespace FantasyPro\DataBundle\Command;

use Prophecy\Argument;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\ProgressBar;

class NewsCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName( 'fetch_data:news' )
            ->setDescription(
                'Pulls Recent News (if a specific player and/or team is set that news is pulled aswell) updates/Inserts to database'
            )
            ->addOption(
                'player',
                null,
                InputOption::VALUE_REQUIRED,
                'player: none (default), playerID e.g 10974',
                'none'
            )
            ->addOption(
                'team',
                null,
                InputOption::VALUE_REQUIRED,
                'team: none (default), Team e.g WAS',
                'none'
            );
    }

    protected function execute( InputInterface $input, OutputInterface $output )
    {
        $container = $this->getContainer();

        $fetcher         = $container->get( 'data_fetcher' );
        $playerNewsCount = 0;
        $recentNewsCount = 0;
        $teamNewsCount   = 0;
        $player          = $input->getOption( 'player' );
        $team            = $input->getOption( 'team' );


        $recentNews      = $fetcher->news();
        $recentNewsCount = $recentNews->count();

        if ($team != 'none') {
            $teamNews      = $fetcher->newsByTeam( $team );
            $teamNewsCount = $teamNews->count();
        }
        if ($player != 'none') {
            $playerNews      = $fetcher->newsByPlayerID( $player );
            $playerNewsCount = $playerNews->count();
        }
        $totalNewsCount = $recentNewsCount + $teamNewsCount + $playerNewsCount;

        $thisCommand = "fetch_data:news --team=".$team." --player=".$player;

        $taskMessage = "Running Command: ".$thisCommand;


        $newsProgress = new ProgressBar( $output, $totalNewsCount );
        $newsProgress->setFormat(
            "%message%\n News %current% of %max% [%bar%] %percent:3s%% %elapsed:6s%"
        );
        $newsProgress->setMessage( $taskMessage );
        $newsProgress->setBarCharacter( "<comment>=</comment>" );
        // the unfinished part of the bar
        $newsProgress->setEmptyBarCharacter( ' ' );
        // the progress character
        $newsProgress->setProgressCharacter( '>' );
        $newsProgress->start();

        if ($recentNewsCount != 0) {
            foreach ($recentNews as $news) {
                $container->get( 'news_persister' )->Persist( $news );
                $newsProgress->advance();
            }
        }
        if ($teamNewsCount != 0) {
            foreach ($teamNews as $news) {
                $container->get( 'news_persister' )->Persist( $news );
                $newsProgress->advance();
            }
        }
        if ($playerNewsCount != 0) {
            foreach ($playerNews as $news) {
                $container->get( 'news_persister' )->Persist( $news );
                $newsProgress->advance();
            }
        }


        $newsProgress->setMessage(
            "Completed Command:".$thisCommand." ( Processed ".$totalNewsCount." News items)"
        );
        $newsProgress->finish();
    }
}