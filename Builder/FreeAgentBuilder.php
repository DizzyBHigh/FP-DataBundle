<?php

namespace FantasyPro\DataBundle\Builder;

use FantasyPro\DataBundle\Entity\FreeAgent;
use FantasyPro\DataBundle\Helpers\DateHelper;

class FreeAgentBuilder
{

    /**
     * @var DateHelper $dateHelper
     */
    private $dateHelper;

    public function __construct( DateHelper $dateHelper )
    {
        $this->dateHelper = $dateHelper;
    }

    public function buildFreeAgent( $currentFreeAgent = null, $freeAgent )
    {
        if ( ! $currentFreeAgent) { // check if we already have the freeAgent stored
            $currentFreeAgent = new FreeAgent();
        }
        $currentFreeAgent->setPlayerID( $freeAgent['PlayerID'] );
        $currentFreeAgent->setTeam( $freeAgent['Team'] );
        $currentFreeAgent->setNumber( $freeAgent['Number'] );
        $currentFreeAgent->setFirstName( $freeAgent['FirstName'] );
        $currentFreeAgent->setLastName( $freeAgent['LastName'] );
        $currentFreeAgent->setPosition( $freeAgent['Position'] );
        $currentFreeAgent->setStatus( $freeAgent['Status'] );
        $currentFreeAgent->setHeight( $freeAgent['Height'] );
        $currentFreeAgent->setWeight( $freeAgent['Weight'] );
        $currentFreeAgent->setBirthDate( $this->dateHelper->parseDate( $freeAgent['BirthDate'] ) );
        $currentFreeAgent->setCollege( $freeAgent['College'] );
        $currentFreeAgent->setExperience( $freeAgent['Experience'] );
        $currentFreeAgent->setFantasyPosition( $freeAgent['FantasyPosition'] );
        $currentFreeAgent->setActive( $freeAgent['Active'] );
        $currentFreeAgent->setPositionCategory( $freeAgent['PositionCategory'] );
        $currentFreeAgent->setName( $freeAgent['Name'] );
        $currentFreeAgent->setAge( $freeAgent['Age'] );
        $currentFreeAgent->setExperienceString( $freeAgent['ExperienceString'] );
        $currentFreeAgent->setBirthDateString( $freeAgent['BirthDateString'] );
        $currentFreeAgent->setPhotoUrl( $freeAgent['PhotoUrl'] );
        $currentFreeAgent->setByeWeek( $freeAgent['ByeWeek'] );
        $currentFreeAgent->setUpcomingGameOpponent( $freeAgent['UpcomingGameOpponent'] );
        $currentFreeAgent->setUpcomingGameWeek( $freeAgent['UpcomingGameWeek'] );
        $currentFreeAgent->setShortName( $freeAgent['ShortName'] );
        $currentFreeAgent->setAverageDraftPosition( $freeAgent['AverageDraftPosition'] );
        $currentFreeAgent->setDepthPositionCategory( $freeAgent['DepthPositionCategory'] );
        $currentFreeAgent->setDepthPosition( $freeAgent['DepthPosition'] );
        $currentFreeAgent->setDepthOrder( $freeAgent['DepthOrder'] );
        $currentFreeAgent->setDepthDisplayOrder( $freeAgent['DepthDisplayOrder'] );
        $currentFreeAgent->setCurrentTeam( $freeAgent['CurrentTeam'] );
        $currentFreeAgent->setCollegeDraftTeam( $freeAgent['CollegeDraftTeam'] );
        $currentFreeAgent->setCollegeDraftYear( $freeAgent['CollegeDraftYear'] );
        $currentFreeAgent->setCollegeDraftRound( $freeAgent['CollegeDraftRound'] );
        $currentFreeAgent->setCollegeDraftPick( $freeAgent['CollegeDraftPick'] );
        $currentFreeAgent->setIsUndraftedFreeAgent( $freeAgent['IsUndraftedFreeAgent'] );
        $currentFreeAgent->setHeightFeet( $freeAgent['HeightFeet'] );
        $currentFreeAgent->setHeightInches( $freeAgent['HeightInches'] );
        $currentFreeAgent->setUpcomingOpponentRank( $freeAgent['UpcomingOpponentRank'] );
        $currentFreeAgent->setUpcomingOpponentPositionRank( $freeAgent['UpcomingOpponentPositionRank'] );
        $currentFreeAgent->setCurrentStatus( $freeAgent['CurrentStatus'] );
        $currentFreeAgent->setUpcomingSalary( $freeAgent['UpcomingSalary'] );
        $currentFreeAgent->setInjuryStatus( $freeAgent['InjuryStatus'] );

        return $currentFreeAgent;
    }
}