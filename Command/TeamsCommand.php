<?php


namespace FantasyPro\DataBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class TeamsCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName( 'fetch_data:teams' )
            ->setDescription(
                'Pulls Team Data and updates/Inserts Teams'
            )
            ->addOption(
                'season',
                null,
                InputOption::VALUE_REQUIRED,
                'Season: current (default), active, by year e.g 2014',
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

        $season     = $input->getOption( 'season' );
        $seasonType = $input->getOption( 'seasonType' );

        if ($season == 'active') {
            $fullSeason  = $season;
            $thisCommand = "fetch_data:teams (active Teams)";
        } elseif ($season == 'current') {
            $currentSeason = $fetcher->currentSeason();
            $fullSeason    = $currentSeason.$seasonType;

            $thisCommand = "fetch_data:teams (".$season." - ".$fullSeason.")";
        } else {
            $fullSeason  = $season.$seasonType;
            $thisCommand = "fetch_data:teams (".$fullSeason.")";
        }
        $teamData = $fetcher->Teams( $fullSeason );

        $taskMessage  = "Running Command: ".$thisCommand;
        $teamProgress = new ProgressBar( $output, $teamData->count() );
        $teamProgress->setFormat(
            "%message%\n Team %current% of %max% [%bar%] %percent:3s%% \n%elapsed:6s%/n"
        );
        $teamProgress->setMessage( $taskMessage );
        $teamProgress->setBarCharacter( "<comment>=</comment>" );
        // the unfinished part of the bar
        $teamProgress->setEmptyBarCharacter( ' ' );
        // the progress character
        $teamProgress->setProgressCharacter( '>' );
        $teamProgress->start();

        $stadiumCount = 0;
        // loop through teams
        foreach ($teamData as $team) {
            $teamProgress->setMessage(
                "Processing ".$thisCommand." - ".$team['FullName']
            );
            //persist the team
            $container->get( 'team_persister' )->Persist( $team );
            //process teams Stadium
            $stadium = $team['StadiumDetails'];

            $container->get( 'stadium_persister' )->Persist( $stadium );
            $stadiumCount++;
            $teamProgress->setMessage(
                "Processing ".$thisCommand." - ".$team['FullName']." Stadium"
            );

            $teamProgress->advance();
        }
        $teamProgress->setMessage(
            "Completed Command:".$thisCommand." ( Processed ".$teamData->count(
            )." Teams and ".$stadiumCount." Stadiums )"
        );
        $teamProgress->finish();

    }
}