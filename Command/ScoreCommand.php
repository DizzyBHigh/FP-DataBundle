<?php

namespace FantasyPro\DataBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Question\Question;

class ScoreCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName( 'fetch_data:scores' )
            ->setDescription( 'Pulls score stats by season or season and week then updates/Inserts to database' )
            ->addOption(
                'season',
                null,
                InputOption::VALUE_REQUIRED,
                "Season: current (default), e.g 2006, 2007",
                'current'
            )->addOption(
                'seasonType',
                null,
                InputOption::VALUE_OPTIONAL,
                "Season Type: e.g REG (default), PRE, POST ",
                "REG"
            )
            ->addOption(
                'week',
                null,
                InputOption::VALUE_REQUIRED,
                "Week: none (default), current,  1 , 2",
                'none'
            )
            ->setHelp(
                <<<EOT
                The <info>fetch_data:scores</info> command pulls all scores for the season and week entered, if no week is specified, data for the whole season is pulled.
EOT
            );
    }

    protected function execute( InputInterface $input, OutputInterface $output )
    {
        $container = $this->getContainer();

        // get the data fetcher
        $fetcher = $container->get( 'data_fetcher' );

        $season     = $input->getOption( 'season' );
        $seasonType = $input->getOption( 'seasonType' );
        $week       = $input->getOption( 'week' );

        $thisCommand = "fetch_data:scores --season=".$season."--seasonType=".$seasonType." --week=".$week;

        if ($season == 'current') {
            $season     = $fetcher->currentSeason();
            $fullSeason = $season.$seasonType;
        } else {
            $fullSeason = $season.$seasonType;
        }

        if ($week == 'current') {
            $week = $fetcher->currentWeek();
        }

        if ($week == 'none') {
            $scores = $fetcher->scoresBySeason( $fullSeason );
        } else {
            $scores = $fetcher->scoresByWeek( $fullSeason, $week );
        }

        $taskMessage = "Running Command: ".$thisCommand;

        $scoreCount    = $scores->count();
        $scoreProgress = new ProgressBar( $output, $scoreCount );
        $scoreProgress->setFormat(
            "%message%\n Score %current% of %max% [%bar%] %percent:3s%% %elapsed:6s%"
        );

        $scoreProgress->setMessage( $taskMessage );
        $scoreProgress->setBarCharacter( '<comment>=</comment>' );
        // the unfinished part of the bar
        $scoreProgress->setEmptyBarCharacter( ' ' );
        // the progress character
        $scoreProgress->setProgressCharacter( '>' );

        $scoreProgress->start();

        foreach ($scores as $score) {
            $container->get( 'score_persister' )->Persist( $score );
            $scoreProgress->setMessage(
                $taskMessage." - ".$score['HomeTeam']." ".$score['HomeScore']." vs ".$score['AwayTeam']." ".$score['AwayScore']
            );
            $scoreProgress->advance();
        }
        $scoreProgress->setMessage( "Completed Command: ".$thisCommand." (processed ".$scoreCount." Scores)" );
        $scoreProgress->finish();

    }
}