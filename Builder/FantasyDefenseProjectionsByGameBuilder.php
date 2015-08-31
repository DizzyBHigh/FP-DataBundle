<?php

namespace FantasyPro\DataBundle\Builder;

use FantasyPro\DataBundle\Entity\FantasyDefenseProjectionsByGame;
use FantasyPro\DataBundle\Helpers\DateHelper;

class FantasyDefenseProjectionsByGameBuilder
{
    /**
     * @var DateHelper $dateHelper
     */
    private $dateHelper;

    public function __construct( DateHelper $dateHelper )
    {
        $this->dateHelper = $dateHelper;
    }

    public function buildFantasyDefenseProjectionsByGame( $currentDefense = null, $defense )
    {
        if ( ! $currentDefense) {
            $currentDefense = new FantasyDefenseProjectionsByGame();
        }

        // set the new values for the player
        $currentDefense->setGameKey( $defense['GameKey'] );
        $currentDefense->setSeasonType( $defense['SeasonType'] );
        $currentDefense->setSeason( $defense['Season'] );
        $currentDefense->setWeek( $defense['Week'] );
        $currentDefense->setDate( $this->dateHelper->parseDate( $defense['Date'] ) );
        $currentDefense->setTeam( $defense['Team'] );
        $currentDefense->setOpponent( $defense['Opponent'] );
        $currentDefense->setPointsAllowed( $defense['PointsAllowed'] );
        $currentDefense->setTouchdownsScored( $defense['TouchdownsScored'] );
        $currentDefense->setSoloTackles( $defense['SoloTackles'] );
        $currentDefense->setAssistedTackles( $defense['AssistedTackles'] );
        $currentDefense->setSacks( $defense['Sacks'] );
        $currentDefense->setSackYards( $defense['SackYards'] );
        $currentDefense->setPassesDefended( $defense['PassesDefended'] );
        $currentDefense->setFumblesForced( $defense['FumblesForced'] );
        $currentDefense->setFumblesRecovered( $defense['FumblesRecovered'] );
        $currentDefense->setFumbleReturnYards( $defense['FumbleReturnYards'] );
        $currentDefense->setFumbleReturnTouchdowns( $defense['FumbleReturnTouchdowns'] );
        $currentDefense->setInterceptions( $defense['Interceptions'] );
        $currentDefense->setInterceptionReturnYards( $defense['InterceptionReturnYards'] );
        $currentDefense->setInterceptionReturnTouchdowns( $defense['InterceptionReturnTouchdowns'] );
        $currentDefense->setBlockedKicks( $defense['BlockedKicks'] );
        $currentDefense->setSafeties( $defense['Safeties'] );
        $currentDefense->setPuntReturns( $defense['PuntReturns'] );
        $currentDefense->setPuntReturnYards( $defense['PuntReturnYards'] );
        $currentDefense->setPuntReturnTouchdowns( $defense['PuntReturnTouchdowns'] );
        $currentDefense->setPuntReturnLong( $defense['PuntReturnLong'] );
        $currentDefense->setKickReturns( $defense['KickReturns'] );
        $currentDefense->setKickReturnYards( $defense['KickReturnYards'] );
        $currentDefense->setKickReturnTouchdowns( $defense['KickReturnTouchdowns'] );
        $currentDefense->setKickReturnLong( $defense['KickReturnLong'] );
        $currentDefense->setBlockedKickReturnTouchdowns( $defense['BlockedKickReturnTouchdowns'] );
        $currentDefense->setFieldGoalReturnTouchdowns( $defense['FieldGoalReturnTouchdowns'] );
        $currentDefense->setFantasyPointsAllowed( $defense['FantasyPointsAllowed'] );
        $currentDefense->setQuarterbackFantasyPointsAllowed( $defense['QuarterbackFantasyPointsAllowed'] );
        $currentDefense->setRunningbackFantasyPointsAllowed( $defense['RunningbackFantasyPointsAllowed'] );
        $currentDefense->setWideReceiverFantasyPointsAllowed( $defense['WideReceiverFantasyPointsAllowed'] );
        $currentDefense->setTightEndFantasyPointsAllowed( $defense['TightEndFantasyPointsAllowed'] );
        $currentDefense->setKickerFantasyPointsAllowed( $defense['KickerFantasyPointsAllowed'] );
        $currentDefense->setBlockedKickReturnYards( $defense['BlockedKickReturnYards'] );
        $currentDefense->setFieldGoalReturnYards( $defense['FieldGoalReturnYards'] );
        $currentDefense->setQuarterbackHits( $defense['QuarterbackHits'] );
        $currentDefense->setTacklesForLoss( $defense['TacklesForLoss'] );
        $currentDefense->setDefensiveTouchdowns( $defense['DefensiveTouchdowns'] );
        $currentDefense->setSpecialTeamsTouchdowns( $defense['SpecialTeamsTouchdowns'] );
        $currentDefense->setIsGameOver( $defense['IsGameOver'] );
        $currentDefense->setFantasyPoints( $defense['FantasyPoints'] );
        $currentDefense->setStadium( $defense['Stadium'] );
        $currentDefense->setTemperature( $defense['Temperature'] );
        $currentDefense->setHumidity( $defense['Humidity'] );
        $currentDefense->setWindSpeed( $defense['WindSpeed'] );
        $currentDefense->setThirdDownAttempts( $defense['ThirdDownAttempts'] );
        $currentDefense->setThirdDownConversions( $defense['ThirdDownConversions'] );
        $currentDefense->setFourthDownAttempts( $defense['FourthDownAttempts'] );
        $currentDefense->setFourthDownConversions( $defense['FourthDownConversions'] );
        $currentDefense->setPointsAllowedByDefenseSpecialTeams( $defense['PointsAllowedByDefenseSpecialTeams'] );
        $currentDefense->setFanDuelSalary( $defense['FanDuelSalary'] );
        $currentDefense->setDraftKingsSalary( $defense['DraftKingsSalary'] );
        $currentDefense->setFantasyDataSalary( $defense['FantasyDataSalary'] );
        $currentDefense->setVictivSalary( $defense['VictivSalary'] );

        return $currentDefense;
    }

}