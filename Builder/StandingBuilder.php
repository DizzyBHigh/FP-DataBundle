<?php

namespace FantasyPro\DataBundle\Builder;

use FantasyPro\DataBundle\Entity\Standing;

class StandingBuilder
{

    public function buildStanding( $currentStanding = null, $standing )
    {
        if ( ! $currentStanding) { // check if we already have the schedule stored
            $currentStanding = new Standing();
        }
        $currentStanding->setConference( $standing['Conference'] );
        $currentStanding->setConferenceLosses( $standing['ConferenceLosses'] );
        $currentStanding->setConferenceWins( $standing['ConferenceWins'] );
        $currentStanding->setDivision( $standing['Division'] );
        $currentStanding->setDivisionLosses( $standing['DivisionLosses'] );
        $currentStanding->setDivisionWins( $standing['DivisionWins'] );
        $currentStanding->setLosses( $standing['Losses'] );
        $currentStanding->setName( $standing['Name'] );
        $currentStanding->setNetPoints( $standing['NetPoints'] );
        $currentStanding->setPercentage( $standing['Percentage'] );
        $currentStanding->setPointsAgainst( $standing['PointsAgainst'] );
        $currentStanding->setPointsFor( $standing['PointsFor'] );
        $currentStanding->setSeason( $standing['Season'] );
        $currentStanding->setSeasonType( $standing['SeasonType'] );
        $currentStanding->setTeam( $standing['Team'] );
        $currentStanding->setTies( $standing['Ties'] );
        $currentStanding->setTouchdowns( $standing['Touchdowns'] );
        $currentStanding->setWins( $standing['Wins'] );

        return $currentStanding;
    }
}