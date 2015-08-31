<?php

namespace FantasyPro\DataBundle\Builder;

use FantasyPro\DataBundle\Entity\FantasyDefenseProjectionsBySeason;
use FantasyPro\DataBundle\Helpers\DateHelper;

class FantasyDefenseProjectionsBySeasonBuilder
{
    /**
     * @var DateHelper $dateHelper
     */
    private $dateHelper;

    public function __construct( DateHelper $dateHelper )
    {
        $this->dateHelper = $dateHelper;
    }

    public function buildFantasyDefenseProjectionsBySeason( $currentFantasyDefenceSeason = null, $fantasydefenceseason )
    {
        if ( ! $currentFantasyDefenceSeason) {
            $currentFantasyDefenceSeason = new FantasyDefenseProjectionsBySeason();
        }

        // set the new values for the player
        $currentFantasyDefenceSeason->setSeasonType( $fantasydefenceseason['SeasonType'] );
        $currentFantasyDefenceSeason->setSeason( $fantasydefenceseason['Season'] );
        $currentFantasyDefenceSeason->setTeam( $fantasydefenceseason['Team'] );
        $currentFantasyDefenceSeason->setPointsAllowed( $fantasydefenceseason['PointsAllowed'] );
        $currentFantasyDefenceSeason->setTouchdownsScored( $fantasydefenceseason['TouchdownsScored'] );
        $currentFantasyDefenceSeason->setSoloTackles( $fantasydefenceseason['SoloTackles'] );
        $currentFantasyDefenceSeason->setAssistedTackles( $fantasydefenceseason['AssistedTackles'] );
        $currentFantasyDefenceSeason->setSacks( $fantasydefenceseason['Sacks'] );
        $currentFantasyDefenceSeason->setSackYards( $fantasydefenceseason['SackYards'] );
        $currentFantasyDefenceSeason->setPassesDefended( $fantasydefenceseason['PassesDefended'] );
        $currentFantasyDefenceSeason->setFumblesForced( $fantasydefenceseason['FumblesForced'] );
        $currentFantasyDefenceSeason->setFumblesRecovered( $fantasydefenceseason['FumblesRecovered'] );
        $currentFantasyDefenceSeason->setFumbleReturnYards( $fantasydefenceseason['FumbleReturnYards'] );
        $currentFantasyDefenceSeason->setFumbleReturnTouchdowns( $fantasydefenceseason['FumbleReturnTouchdowns'] );
        $currentFantasyDefenceSeason->setInterceptions( $fantasydefenceseason['Interceptions'] );
        $currentFantasyDefenceSeason->setInterceptionReturnYards( $fantasydefenceseason['InterceptionReturnYards'] );
        $currentFantasyDefenceSeason->setInterceptionReturnTouchdowns(
            $fantasydefenceseason['InterceptionReturnTouchdowns']
        );
        $currentFantasyDefenceSeason->setBlockedKicks( $fantasydefenceseason['BlockedKicks'] );
        $currentFantasyDefenceSeason->setSafeties( $fantasydefenceseason['Safeties'] );
        $currentFantasyDefenceSeason->setPuntReturns( $fantasydefenceseason['PuntReturns'] );
        $currentFantasyDefenceSeason->setPuntReturnYards( $fantasydefenceseason['PuntReturnYards'] );
        $currentFantasyDefenceSeason->setPuntReturnTouchdowns( $fantasydefenceseason['PuntReturnTouchdowns'] );
        $currentFantasyDefenceSeason->setPuntReturnLong( $fantasydefenceseason['PuntReturnLong'] );
        $currentFantasyDefenceSeason->setKickReturns( $fantasydefenceseason['KickReturns'] );
        $currentFantasyDefenceSeason->setKickReturnYards( $fantasydefenceseason['KickReturnYards'] );
        $currentFantasyDefenceSeason->setKickReturnTouchdowns( $fantasydefenceseason['KickReturnTouchdowns'] );
        $currentFantasyDefenceSeason->setKickReturnLong( $fantasydefenceseason['KickReturnLong'] );
        $currentFantasyDefenceSeason->setBlockedKickReturnTouchdowns(
            $fantasydefenceseason['BlockedKickReturnTouchdowns']
        );
        $currentFantasyDefenceSeason->setFieldGoalReturnTouchdowns(
            $fantasydefenceseason['FieldGoalReturnTouchdowns']
        );
        $currentFantasyDefenceSeason->setFantasyPointsAllowed( $fantasydefenceseason['FantasyPointsAllowed'] );
        $currentFantasyDefenceSeason->setQuarterbackFantasyPointsAllowed(
            $fantasydefenceseason['QuarterbackFantasyPointsAllowed']
        );
        $currentFantasyDefenceSeason->setRunningbackFantasyPointsAllowed(
            $fantasydefenceseason['RunningbackFantasyPointsAllowed']
        );
        $currentFantasyDefenceSeason->setWideReceiverFantasyPointsAllowed(
            $fantasydefenceseason['WideReceiverFantasyPointsAllowed']
        );
        $currentFantasyDefenceSeason->setTightEndFantasyPointsAllowed(
            $fantasydefenceseason['TightEndFantasyPointsAllowed']
        );
        $currentFantasyDefenceSeason->setKickerFantasyPointsAllowed(
            $fantasydefenceseason['KickerFantasyPointsAllowed']
        );
        $currentFantasyDefenceSeason->setGames( $fantasydefenceseason['Games'] );
        $currentFantasyDefenceSeason->setBlockedKickReturnYards( $fantasydefenceseason['BlockedKickReturnYards'] );
        $currentFantasyDefenceSeason->setFieldGoalReturnYards( $fantasydefenceseason['FieldGoalReturnYards'] );
        $currentFantasyDefenceSeason->setQuarterbackHits( $fantasydefenceseason['QuarterbackHits'] );
        $currentFantasyDefenceSeason->setTacklesForLoss( $fantasydefenceseason['TacklesForLoss'] );
        $currentFantasyDefenceSeason->setDefensiveTouchdowns( $fantasydefenceseason['DefensiveTouchdowns'] );
        $currentFantasyDefenceSeason->setSpecialTeamsTouchdowns( $fantasydefenceseason['SpecialTeamsTouchdowns'] );
        $currentFantasyDefenceSeason->setFantasyPoints( $fantasydefenceseason['FantasyPoints'] );
        $currentFantasyDefenceSeason->setTemperature( $fantasydefenceseason['Temperature'] );
        $currentFantasyDefenceSeason->setHumidity( $fantasydefenceseason['Humidity'] );
        $currentFantasyDefenceSeason->setWindSpeed( $fantasydefenceseason['WindSpeed'] );
        $currentFantasyDefenceSeason->setThirdDownAttempts( $fantasydefenceseason['ThirdDownAttempts'] );
        $currentFantasyDefenceSeason->setThirdDownConversions( $fantasydefenceseason['ThirdDownConversions'] );
        $currentFantasyDefenceSeason->setFourthDownAttempts( $fantasydefenceseason['FourthDownAttempts'] );
        $currentFantasyDefenceSeason->setFourthDownConversions( $fantasydefenceseason['FourthDownConversions'] );
        $currentFantasyDefenceSeason->setPointsAllowedByDefenseSpecialTeams(
            $fantasydefenceseason['PointsAllowedByDefenseSpecialTeams']
        );
        $currentFantasyDefenceSeason->setAuctionValue( $fantasydefenceseason['AuctionValue'] );
        $currentFantasyDefenceSeason->setAuctionValuePPR( $fantasydefenceseason['AuctionValuePPR'] );

        return $currentFantasyDefenceSeason;
    }

}