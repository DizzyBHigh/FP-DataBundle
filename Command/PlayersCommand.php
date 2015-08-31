<?php

namespace FantasyPro\DataBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\ProgressBar;

class PlayersCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName( 'fetch_data:players' )
            ->setDescription( 'Pulls Players and updates/Inserts to database' )
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
            );;
    }

    protected function execute( InputInterface $input, OutputInterface $output )
    {
        $container   = $this->getContainer();
        $player      = $input->getOption( 'player' );
        $team        = $input->getOption( 'team' );
        $thisCommand = "data:fetcher:players --player=".$player." --team=".$team;

        $playersActiveCount = 0;
        $playersFreeCount   = 0;
        $totalCount         = 0;
        $newsCount          = 0;
        $playerSeasonCount  = 0;
        $scoreCount         = 0;
        $InjuryCount        = 0;
        // get the data fetcher
        $fetcher = $container->get( 'data_fetcher' );

        $player     = $input->getOption( 'player' );
        $team       = $input->getOption( 'team' );
        $playerData = array();
        if ($player == 'none' && $team == 'none') {
            $playersFree              = $fetcher->freeAgents();
            $playersFreeCount         = $playersFree->count();
            $playerData['FreeAgents'] = $playersFree;

            $playersActive               = $fetcher->players();
            $playersActiveCount          = $playersActive->count();
            $playerData['ActivePlayers'] = $playersActive;
            $totalCount                  = $playersActiveCount + $playersActiveCount;
        } else {
            if ($player != 'none') {
                $playerByID           = $fetcher->playerByID( $player );
                $playerData['Player'] = $playerByID;
                $totalCount           = $playerByID->count();
            }
            if ($team != 'none') {
                $playersTeam               = $fetcher->playersByTeam( $team );
                $playerData['TeamPlayers'] = $playersTeam;
                $totalCount                = $playersTeam->count();
            }
        }

        $taskMessage    = "Running Command: ".$thisCommand;
        $playerProgress = new ProgressBar( $output, $totalCount );
        $playerProgress->setFormat(
            "%message%\n Player %current% of %max% [%bar%] %percent:3s%% \n%elapsed:6s%\n"
        );
        $playerProgress->setMessage( $taskMessage );
        $playerProgress->setBarCharacter( "<comment>=</comment>" );
        // the unfinished part of the bar
        $playerProgress->setEmptyBarCharacter( ' ' );
        // the progress character
        $playerProgress->setProgressCharacter( '>' );
        $playerProgress->start();

        foreach ($playerData as $key => $players) {
            if ($key == 'ActivePlayers') {
                foreach ($players as $currentPlayer) {
                    $playerProgress->setMessage(
                        "Running Command: ".$thisCommand." - Processing ".$key." - ".$currentPlayer['FirstName']." ".$currentPlayer['LastName']
                    );

                    $container->get( 'player_persister' )->Persist( $currentPlayer );
                    $playerProgress->advance();
                }
            } else {
                foreach ($players as $currentPlayer) {
                    $playerProgress->setMessage(
                        "Running Command: ".$thisCommand." - Processing ".$key." - ".$currentPlayer['FirstName']." ".$currentPlayer['LastName']
                    );

                    // handle News
                    $faNews      = $currentPlayer['LatestNews'];
                    $faNewsCount = sizeof( $faNews );
                    if ($faNewsCount > 0) {
                        foreach ($faNews as $currentNews) {
                            $container->get( 'news_persister' )->Persist( $currentNews );
                            $newsCount++;
                            $playerProgress->setMessage(
                                "Running Command ".$thisCommand." ".$key." - Processing News Feed".$currentNews['Title']." - ".$currentPlayer['FirstName']." ".$currentPlayer['LastName']
                            );
                        }
                    }

                    // handle Injurys
                    if (is_array( $currentPlayer['InjuryStatus'] ) == true) {
                        $faInjury = $currentPlayer['InjuryStatus'];

                        if (count( $faInjury ) == count( $faInjury, COUNT_RECURSIVE )) {
                            $container->get( 'injury_persister' )->Persist( $faInjury );
                            $InjuryCount++;
                            $playerProgress->setMessage(
                                "Running Command ".$thisCommand." ".$key." - Processing Injurys ".$faInjury['BodyPart']." - ".$currentPlayer['FirstName']." ".$currentPlayer['LastName']
                            );
                        } else {
                            // array is multidimensional
                            foreach ($faInjury as $currentInjury) {
                                $InjuryCount++;
                                $playerProgress->setMessage(
                                    "Running Command ".$thisCommand." ".$key." - Processing Injurys ".$currentInjury['BodyPart']." - ".$currentPlayer['FirstName']." ".$currentPlayer['LastName']
                                );
                            }
                        }
                    }


                    // handle PlayerSeason
                    $faPlayerSeason      = $currentPlayer['PlayerSeason'];
                    $faPlayerSeasonCount = sizeof( $faPlayerSeason );
                    if ($faPlayerSeasonCount > 0) {

                        $container->get( 'playerSeason_persister' )->Persist( $faPlayerSeason );
                        $playerSeasonCount++;
                        $playerProgress->setMessage(
                            "Running Command ".$thisCommand." ".$key." - Processing PlayerSeason ".$faPlayerSeason['Name']
                        );
                        // handle ScoringDetails
                        $psScoringDetails      = $faPlayerSeason['ScoringDetails'];
                        $psScoringDetailsCount = sizeof( $psScoringDetails );
                        if ($psScoringDetailsCount > 0) {
                            foreach ($psScoringDetails as $scoringDetail) {
                                $container->get( 'scoringdetail_persister' )->Persist( $scoringDetail );
                                $scoreCount++;
                                $playerProgress->setMessage(
                                    "Running Command ".$thisCommand." ".$key." - Processing ScoringDetails ".$faPlayerSeason['Name']
                                );
                            }

                        }
                    }
                    $container->get( 'player_persister' )->Persist( $currentPlayer );
                    $playerProgress->advance();
                }
            }
        }
        if ($player == 'none' && $team == 'none') {
            $playerProgress->setMessage(
                "Completed Command: ".$thisCommand." Processed".$totalCount." players (".$playersFreeCount." FreeAgents, ".$playersActiveCount." Active, ".$newsCount." NewsItems, ".$playerSeasonCount." PlayerSeasons, ".$scoreCount." ScoringDetails, ".$InjuryCount." Injuries)"
            );
        } else {
            $playerProgress->setMessage(
                "Completed Command: ".$thisCommand." Processed".$totalCount." players (".$newsCount." NewsItems, ".$playerSeasonCount." PlayerSeasons, ".$scoreCount." ScoringDetails, ".$InjuryCount." Injuries)"
            );
        }
        $playerProgress->finish();
    }
}