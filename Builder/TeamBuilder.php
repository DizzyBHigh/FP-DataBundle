<?php

namespace FantasyPro\DataBundle\Builder;

use FantasyPro\DataBundle\Entity\Team;

class TeamBuilder
{
    public function buildTeam( $currentTeam = null, $team )
    {
        if ( ! $currentTeam) {
            $currentTeam = new Team();
        }
        $currentTeam->setTeamKey( $team['Key'] );
        $currentTeam->setTeamID( $team['TeamID'] );
        $currentTeam->setPlayerID( $team['PlayerID'] );
        $currentTeam->setCity( $team['City'] );
        $currentTeam->setName( $team['Name'] );
        $currentTeam->setConference( $team['Conference'] );
        $currentTeam->setDivision( $team['Division'] );
        $currentTeam->setFullName( $team['FullName'] );
        $currentTeam->setStadiumID( $team['StadiumID'] );
        $currentTeam->setByeWeek( $team['ByeWeek'] );
        $currentTeam->setAverageDraftPosition( $team['AverageDraftPosition'] );
        $currentTeam->setAverageDraftPositionPPR( $team['AverageDraftPositionPPR'] );
        $currentTeam->setHeadCoach( $team['HeadCoach'] );
        $currentTeam->setOffensiveCoordinator( $team['OffensiveCoordinator'] );
        $currentTeam->setDefensiveCoordinator( $team['DefensiveCoordinator'] );
        $currentTeam->setSpecialTeamsCoach( $team['SpecialTeamsCoach'] );
        $currentTeam->setOffensiveScheme( $team['OffensiveScheme'] );
        $currentTeam->setDefensiveScheme( $team['DefensiveScheme'] );
        $currentTeam->setUpcomingSalary( $team['UpcomingSalary'] );
        $currentTeam->setUpcomingOpponentRank( $team['UpcomingOpponentRank'] );
        $currentTeam->setUpcomingOpponentPositionRank( $team['UpcomingOpponentPositionRank'] );

        return $currentTeam;
    }
}