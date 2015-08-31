<?php

namespace FantasyPro\DataBundle\Builder;

use FantasyPro\DataBundle\Entity\Player;
use FantasyPro\DataBundle\Helpers\DateHelper;

class PlayerBuilder
{
    /**
     * @var DateHelper $dateHelper
     */
    private $dateHelper;

    public function __construct( DateHelper $dateHelper )
    {
        $this->dateHelper = $dateHelper;
    }

    public function buildPlayer( $currentPlayer = null, $player )
    {
        if ( ! $currentPlayer) {
            $currentPlayer = new Player();
        }

        // set the new values for the player
        $currentPlayer->setPlayerID( $player['PlayerID'] );
        $currentPlayer->setTeam( $player['Team'] );
        $currentPlayer->setNumber( $player['Number'] );
        $currentPlayer->setFirstName( $player['FirstName'] );
        $currentPlayer->setLastName( $player['LastName'] );
        $currentPlayer->setPosition( $player['Position'] );
        $currentPlayer->setStatus( $player['Status'] );
        $currentPlayer->setHeight( $player['Height'] );
        $currentPlayer->setWeight( $player['Weight'] );
        $currentPlayer->setBirthDate( $this->dateHelper->parseDate( $player['BirthDate'] ) );
        $currentPlayer->setCollege( $player['College'] );
        $currentPlayer->setExperience( $player['Experience'] );
        $currentPlayer->setFantasyPosition( $player['FantasyPosition'] );
        $currentPlayer->setActive( $player['Active'] );
        $currentPlayer->setPositionCategory( $player['PositionCategory'] );
        $currentPlayer->setName( $player['Name'] );
        $currentPlayer->setAge( $player['Age'] );
        $currentPlayer->setExperienceString( $player['ExperienceString'] );
        $currentPlayer->setBirthDateString( $player['BirthDateString'] );
        $currentPlayer->setPhotoUrl( $player['PhotoUrl'] );
        $currentPlayer->setByeWeek( $player['ByeWeek'] );
        $currentPlayer->setUpcomingGameOpponent( $player['UpcomingGameOpponent'] );
        $currentPlayer->setUpcomingGameWeek( $player['UpcomingGameWeek'] );
        $currentPlayer->setShortName( $player['ShortName'] );
        $currentPlayer->setAverageDraftPosition( $player['AverageDraftPosition'] );
        $currentPlayer->setDepthPositionCategory( $player['DepthPositionCategory'] );
        $currentPlayer->setDepthPosition( $player['DepthPosition'] );
        $currentPlayer->setDepthOrder( $player['DepthOrder'] );
        $currentPlayer->setDepthDisplayOrder( $player['DepthDisplayOrder'] );
        $currentPlayer->setCurrentTeam( $player['CurrentTeam'] );
        $currentPlayer->setCollegeDraftTeam( $player['CollegeDraftTeam'] );
        $currentPlayer->setCollegeDraftYear( $player['CollegeDraftYear'] );
        $currentPlayer->setCollegeDraftRound( $player['CollegeDraftRound'] );
        $currentPlayer->setCollegeDraftPick( $player['CollegeDraftPick'] );
        $currentPlayer->setIsUndraftedFreeAgent( $player['IsUndraftedFreeAgent'] );
        $currentPlayer->setHeightFeet( $player['HeightFeet'] );
        $currentPlayer->setHeightInches( $player['HeightInches'] );
        $currentPlayer->setUpcomingOpponentRank( $player['UpcomingOpponentRank'] );
        $currentPlayer->setUpcomingOpponentPositionRank( $player['UpcomingOpponentPositionRank'] );
        $currentPlayer->setCurrentStatus( $player['CurrentStatus'] );
        $currentPlayer->setUpcomingSalary( $player['UpcomingSalary'] );

        return $currentPlayer;
    }

}