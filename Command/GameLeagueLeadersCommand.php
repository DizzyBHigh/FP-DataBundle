<?php

namespace FantasyPro\DataBundle\Command;

use Prophecy\Argument;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\ProgressBar;

class GameLeagueLeadersCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName( 'fetch_data:gameLeagueLeaders' )
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
                'week',
                null,
                InputOption::VALUE_OPTIONAL,
                "Valid values are as follows: current(default), Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.",
                "current"
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
        $week       = $input->getOption( 'week' );
        $position   = $input->getOption( 'position' );
        $sortColumn = $input->getOption( 'sortColumn' );

        if ($season == 'current') {
            $season     = $fetcher->currentSeason();
            $fullSeason = $season.$seasonType;
        } else {
            $fullSeason = $season.$seasonType;
        }

        if ($week == 'current') {
            $week = $fetcher->currentWeek();
        }
        $thisCommand = "fetch_data:gameLeagueLeaders --season=".$season." --seasonType=".$seasonType." --week=".$week." --position=".$position." sortColumn=".$sortColumn;
        $taskMessage = "Running Command: ".$thisCommand;

        $leagueLeaders        = $fetcher->gameLeagueLeadersByWeek( $fullSeason, $week, $position, $sortColumn );
        $leagueLeaderProgress = new ProgressBar( $output, $leagueLeaders->count() );
        $leagueLeaderProgress->setFormat(
            "%message%\n GameLeagueLeaders %current% of %max% [%bar%] %percent:3s%% %elapsed:6s%"
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
            $container->get( 'gameLeagueLeaders_persister' )->Persist( $leagueLeader );
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
            )." GameLeagueLeaders and ".$scoreCount." scores)"
        );
        $leagueLeaderProgress->finish();
    }
}