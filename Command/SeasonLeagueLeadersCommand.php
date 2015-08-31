<?php

namespace FantasyPro\DataBundle\Command;

use Prophecy\Argument;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\ProgressBar;

class SeasonLeagueLeadersCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName( 'fetch_data:seasonLeagueLeaders' )
            ->setDescription( 'Pulls Game LeagueLeaders and updates/Inserts to database' )
            ->addOption(
                'season',
                null,
                InputOPTION::VALUE_OPTIONAL,
                "current (default) or by year e.g 2014",
                "current"
            )
            ->addOption(
                'seasonType',
                null,
                InputOption::VALUE_OPTIONAL,
                "Season Type: e.g REG (default), PRE, POST ",
                "REG"
            )
            ->addOption(
                'position',
                null,
                InputOption::VALUE_OPTIONAL,
                "Valid values are as follows: ALL (default), OFFENSE, QB, RB, WR, TE, DEFENCE, DL, LB, DB ",
                "ALL"
            )
            ->addOption(
                'sortColumn',
                null,
                InputOption::VALUE_OPTIONAL,
                "Column to sort by e.g FantasyPoints (default), PassingYards, RushingYards, Receptions, Sacks, Interceptions, Touchdowns ",
                'FantasyPoints'
            );

    }

    protected function execute( InputInterface $input, OutputInterface $output )
    {
        $container = $this->getContainer();

        $fetcher = $container->get( 'data_fetcher' );

        $season     = $input->getOption( 'season' );
        $seasonType = $input->getOption( 'seasonType' );
        $position   = $input->getOption( 'position' );
        $sortColumn = $input->getOption( 'sortColumn' );

        if ($season == 'current') {
            $season     = $fetcher->currentSeason();
            $fullSeason = $season.$seasonType;
        } else {
            $fullSeason = $season.$seasonType;
        }

        $thisCommand = "fetch_data:seasonLeagueLeaders --season=".$season." --seasonType=".$seasonType." --position=".$position." sortColumn=".$sortColumn;
        $taskMessage = "Running Command: ".$thisCommand;

        $leagueLeaders        = $fetcher->seasonLeagueLeaders( $fullSeason, $position, $sortColumn );
        $leagueLeaderProgress = new ProgressBar( $output, $leagueLeaders->count() );
        $leagueLeaderProgress->setFormat(
            "%message%\n SeasonLeagueLeaders %current% of %max% [%bar%] %percent:3s%% %elapsed:6s%"
        );
        $leagueLeaderProgress->setMessage( $taskMessage );
        $leagueLeaderProgress->setBarCharacter( "<comment>=</comment>" );
        // the unfinished part of the bar
        $leagueLeaderProgress->setEmptyBarCharacter( ' ' );
        // the progress character
        $leagueLeaderProgress->setProgressCharacter( '>' );
        $leagueLeaderProgress->start();

        //set up a count for scoringdetails
        $scoreCount = 0;
        foreach ($leagueLeaders as $leagueLeader) {
            $leagueLeaderProgress->setMessage(
                "Processing ".$thisCommand." - ".$leagueLeader['Name'].", ".$leagueLeader['Position']
            );
            $container->get( 'seasonLeagueLeaders_persister' )->Persist( $leagueLeader );
            //leagueLeaders data may also contains ScoringDetials
            if (array_key_exists( 'ScoringDetails', $leagueLeader )) {
                $scoringDetails = $leagueLeader['ScoringDetails'];

                if (sizeof( $scoringDetails ) > 0) {
                    foreach ($scoringDetails as $scoringDetail) {
                        $leagueLeaderProgress->setMessage(
                            "Processing ".$thisCommand." -  ".$leagueLeader['Name'].", ".$leagueLeader['Position']." Scoring Details"
                        );
                        $container->get( 'scoringdetail_persister' )->Persist( $scoringDetail );
                        $scoreCount++;
                    }
                }
            }
            $leagueLeaderProgress->advance();
        }
        $leagueLeaderProgress->setMessage(
            "Completed Command:".$thisCommand." ( Processed ".$leagueLeaders->count(
            )." SeasonLeagueLeaders and ".$scoreCount." scores)"
        );
        $leagueLeaderProgress->finish();
    }
}