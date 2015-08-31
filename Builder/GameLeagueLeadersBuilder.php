<?php

namespace FantasyPro\DataBundle\Builder;

use FantasyPro\DataBundle\Entity\GameLeagueLeaders;
use FantasyPro\DataBundle\Helpers\DateHelper;

class GameLeagueLeadersBuilder
{
    /**
     * @var DateHelper $dateHelper
     */
    private $dateHelper;

    public function __construct( DateHelper $dateHelper )
    {
        $this->dateHelper = $dateHelper;
    }

    public function buildGameLeagueLeaders( $currentGameLeagueLeaders = null, $gameLeagueLeaders )
    {
        if ( ! $currentGameLeagueLeaders) { // check if we already have the schedule stored
            $currentGameLeagueLeaders = new GameLeagueLeaders();
        }
        $currentGameLeagueLeaders->setCustomD365FantasyPoints( $gameLeagueLeaders['CustomD365FantasyPoints'] );
        $currentGameLeagueLeaders->setGameKey( $gameLeagueLeaders['GameKey'] );
        $currentGameLeagueLeaders->setPlayerID( $gameLeagueLeaders['PlayerID'] );
        $currentGameLeagueLeaders->setSeasonType( $gameLeagueLeaders['SeasonType'] );
        $currentGameLeagueLeaders->setSeason( $gameLeagueLeaders['Season'] );
        $currentGameLeagueLeaders->setGameDate( $this->dateHelper->parseDate( $gameLeagueLeaders['GameDate'] ) );
        $currentGameLeagueLeaders->setWeek( $gameLeagueLeaders['Week'] );
        $currentGameLeagueLeaders->setTeam( $gameLeagueLeaders['Team'] );
        $currentGameLeagueLeaders->setOpponent( $gameLeagueLeaders['Opponent'] );
        $currentGameLeagueLeaders->setHomeOrAway( $gameLeagueLeaders['HomeOrAway'] );
        $currentGameLeagueLeaders->setNumber( $gameLeagueLeaders['Number'] );
        $currentGameLeagueLeaders->setName( $gameLeagueLeaders['Name'] );
        $currentGameLeagueLeaders->setPosition( $gameLeagueLeaders['Position'] );
        $currentGameLeagueLeaders->setPositionCategory( $gameLeagueLeaders['PositionCategory'] );
        $currentGameLeagueLeaders->setActivated( $gameLeagueLeaders['Activated'] );
        $currentGameLeagueLeaders->setPlayed( $gameLeagueLeaders['Played'] );
        $currentGameLeagueLeaders->setStarted( $gameLeagueLeaders['Started'] );
        $currentGameLeagueLeaders->setPassingAttempts( $gameLeagueLeaders['PassingAttempts'] );
        $currentGameLeagueLeaders->setPassingCompletions( $gameLeagueLeaders['PassingCompletions'] );
        $currentGameLeagueLeaders->setPassingYards( $gameLeagueLeaders['PassingYards'] );
        $currentGameLeagueLeaders->setPassingCompletionPercentage( $gameLeagueLeaders['PassingCompletionPercentage'] );
        $currentGameLeagueLeaders->setPassingYardsPerAttempt( $gameLeagueLeaders['PassingYardsPerAttempt'] );
        $currentGameLeagueLeaders->setPassingYardsPerCompletion( $gameLeagueLeaders['PassingYardsPerCompletion'] );
        $currentGameLeagueLeaders->setPassingTouchdowns( $gameLeagueLeaders['PassingTouchdowns'] );
        $currentGameLeagueLeaders->setPassingInterceptions( $gameLeagueLeaders['PassingInterceptions'] );
        $currentGameLeagueLeaders->setPassingRating( $gameLeagueLeaders['PassingRating'] );
        $currentGameLeagueLeaders->setPassingLong( $gameLeagueLeaders['PassingLong'] );
        $currentGameLeagueLeaders->setPassingSacks( $gameLeagueLeaders['PassingSacks'] );
        $currentGameLeagueLeaders->setPassingSackYards( $gameLeagueLeaders['PassingSackYards'] );
        $currentGameLeagueLeaders->setRushingAttempts( $gameLeagueLeaders['RushingAttempts'] );
        $currentGameLeagueLeaders->setRushingYards( $gameLeagueLeaders['RushingYards'] );
        $currentGameLeagueLeaders->setRushingYardsPerAttempt( $gameLeagueLeaders['RushingYardsPerAttempt'] );
        $currentGameLeagueLeaders->setRushingTouchdowns( $gameLeagueLeaders['RushingTouchdowns'] );
        $currentGameLeagueLeaders->setRushingLong( $gameLeagueLeaders['RushingLong'] );
        $currentGameLeagueLeaders->setReceivingTargets( $gameLeagueLeaders['ReceivingTargets'] );
        $currentGameLeagueLeaders->setReceptions( $gameLeagueLeaders['Receptions'] );
        $currentGameLeagueLeaders->setReceivingYards( $gameLeagueLeaders['ReceivingYards'] );
        $currentGameLeagueLeaders->setReceivingYardsPerReception( $gameLeagueLeaders['ReceivingYardsPerReception'] );
        $currentGameLeagueLeaders->setReceivingTouchdowns( $gameLeagueLeaders['ReceivingTouchdowns'] );
        $currentGameLeagueLeaders->setReceivingLong( $gameLeagueLeaders['ReceivingLong'] );
        $currentGameLeagueLeaders->setFumbles( $gameLeagueLeaders['Fumbles'] );
        $currentGameLeagueLeaders->setFumblesLost( $gameLeagueLeaders['FumblesLost'] );
        $currentGameLeagueLeaders->setPuntReturns( $gameLeagueLeaders['PuntReturns'] );
        $currentGameLeagueLeaders->setPuntReturnYards( $gameLeagueLeaders['PuntReturnYards'] );
        $currentGameLeagueLeaders->setPuntReturnYardsPerAttempt( $gameLeagueLeaders['PuntReturnYardsPerAttempt'] );
        $currentGameLeagueLeaders->setPuntReturnTouchdowns( $gameLeagueLeaders['PuntReturnTouchdowns'] );
        $currentGameLeagueLeaders->setPuntReturnLong( $gameLeagueLeaders['PuntReturnLong'] );
        $currentGameLeagueLeaders->setKickReturns( $gameLeagueLeaders['KickReturns'] );
        $currentGameLeagueLeaders->setKickReturnYards( $gameLeagueLeaders['KickReturnYards'] );
        $currentGameLeagueLeaders->setKickReturnYardsPerAttempt( $gameLeagueLeaders['KickReturnYardsPerAttempt'] );
        $currentGameLeagueLeaders->setKickReturnTouchdowns( $gameLeagueLeaders['KickReturnTouchdowns'] );
        $currentGameLeagueLeaders->setKickReturnLong( $gameLeagueLeaders['KickReturnLong'] );
        $currentGameLeagueLeaders->setSoloTackles( $gameLeagueLeaders['SoloTackles'] );
        $currentGameLeagueLeaders->setAssistedTackles( $gameLeagueLeaders['AssistedTackles'] );
        $currentGameLeagueLeaders->setTacklesForLoss( $gameLeagueLeaders['TacklesForLoss'] );
        $currentGameLeagueLeaders->setSacks( $gameLeagueLeaders['Sacks'] );
        $currentGameLeagueLeaders->setSackYards( $gameLeagueLeaders['SackYards'] );
        $currentGameLeagueLeaders->setQuarterbackHits( $gameLeagueLeaders['QuarterbackHits'] );
        $currentGameLeagueLeaders->setPassesDefended( $gameLeagueLeaders['PassesDefended'] );
        $currentGameLeagueLeaders->setFumblesForced( $gameLeagueLeaders['FumblesForced'] );
        $currentGameLeagueLeaders->setFumblesRecovered( $gameLeagueLeaders['FumblesRecovered'] );
        $currentGameLeagueLeaders->setFumbleReturnYards( $gameLeagueLeaders['FumbleReturnYards'] );
        $currentGameLeagueLeaders->setFumbleReturnTouchdowns( $gameLeagueLeaders['FumbleReturnTouchdowns'] );
        $currentGameLeagueLeaders->setInterceptions( $gameLeagueLeaders['Interceptions'] );
        $currentGameLeagueLeaders->setInterceptionReturnYards( $gameLeagueLeaders['InterceptionReturnYards'] );
        $currentGameLeagueLeaders->setInterceptionReturnTouchdowns(
            $gameLeagueLeaders['InterceptionReturnTouchdowns']
        );
        $currentGameLeagueLeaders->setBlockedKicks( $gameLeagueLeaders['BlockedKicks'] );
        $currentGameLeagueLeaders->setSpecialTeamsSoloTackles( $gameLeagueLeaders['SpecialTeamsSoloTackles'] );
        $currentGameLeagueLeaders->setSpecialTeamsAssistedTackles( $gameLeagueLeaders['SpecialTeamsAssistedTackles'] );
        $currentGameLeagueLeaders->setMiscSoloTackles( $gameLeagueLeaders['MiscSoloTackles'] );
        $currentGameLeagueLeaders->setMiscAssistedTackles( $gameLeagueLeaders['MiscAssistedTackles'] );
        $currentGameLeagueLeaders->setPunts( $gameLeagueLeaders['Punts'] );
        $currentGameLeagueLeaders->setPuntYards( $gameLeagueLeaders['PuntYards'] );
        $currentGameLeagueLeaders->setPuntAverage( $gameLeagueLeaders['PuntAverage'] );
        $currentGameLeagueLeaders->setFieldGoalsAttempted( $gameLeagueLeaders['FieldGoalsAttempted'] );
        $currentGameLeagueLeaders->setFieldGoalsMade( $gameLeagueLeaders['FieldGoalsMade'] );
        $currentGameLeagueLeaders->setFieldGoalsLongestMade( $gameLeagueLeaders['FieldGoalsLongestMade'] );
        $currentGameLeagueLeaders->setExtraPointsMade( $gameLeagueLeaders['ExtraPointsMade'] );
        $currentGameLeagueLeaders->setTwoPointConversionPasses( $gameLeagueLeaders['TwoPointConversionPasses'] );
        $currentGameLeagueLeaders->setTwoPointConversionRuns( $gameLeagueLeaders['TwoPointConversionRuns'] );
        $currentGameLeagueLeaders->setTwoPointConversionReceptions(
            $gameLeagueLeaders['TwoPointConversionReceptions']
        );
        $currentGameLeagueLeaders->setFantasyPoints( $gameLeagueLeaders['FantasyPoints'] );
        $currentGameLeagueLeaders->setFantasyPointsPPR( $gameLeagueLeaders['FantasyPointsPPR'] );
        $currentGameLeagueLeaders->setReceptionPercentage( $gameLeagueLeaders['ReceptionPercentage'] );
        $currentGameLeagueLeaders->setReceivingYardsPerTarget( $gameLeagueLeaders['ReceivingYardsPerTarget'] );
        $currentGameLeagueLeaders->setTackles( $gameLeagueLeaders['Tackles'] );
        $currentGameLeagueLeaders->setOffensiveTouchdowns( $gameLeagueLeaders['OffensiveTouchdowns'] );
        $currentGameLeagueLeaders->setDefensiveTouchdowns( $gameLeagueLeaders['DefensiveTouchdowns'] );
        $currentGameLeagueLeaders->setSpecialTeamsTouchdowns( $gameLeagueLeaders['SpecialTeamsTouchdowns'] );
        $currentGameLeagueLeaders->setTouchdowns( $gameLeagueLeaders['Touchdowns'] );
        $currentGameLeagueLeaders->setFantasyPosition( $gameLeagueLeaders['FantasyPosition'] );
        $currentGameLeagueLeaders->setFieldGoalPercentage( $gameLeagueLeaders['FieldGoalPercentage'] );
        $currentGameLeagueLeaders->setPlayerGameID( $gameLeagueLeaders['PlayerGameID'] );
        $currentGameLeagueLeaders->setFumblesOwnRecoveries( $gameLeagueLeaders['FumblesOwnRecoveries'] );
        $currentGameLeagueLeaders->setFumblesOutOfBounds( $gameLeagueLeaders['FumblesOutOfBounds'] );
        $currentGameLeagueLeaders->setKickReturnFairCatches( $gameLeagueLeaders['KickReturnFairCatches'] );
        $currentGameLeagueLeaders->setPuntReturnFairCatches( $gameLeagueLeaders['PuntReturnFairCatches'] );
        $currentGameLeagueLeaders->setPuntTouchbacks( $gameLeagueLeaders['PuntTouchbacks'] );
        $currentGameLeagueLeaders->setPuntInside20( $gameLeagueLeaders['PuntInside20'] );
        $currentGameLeagueLeaders->setPuntNetAverage( $gameLeagueLeaders['PuntNetAverage'] );
        $currentGameLeagueLeaders->setExtraPointsAttempted( $gameLeagueLeaders['ExtraPointsAttempted'] );
        $currentGameLeagueLeaders->setBlockedKickReturnTouchdowns( $gameLeagueLeaders['BlockedKickReturnTouchdowns'] );
        $currentGameLeagueLeaders->setFieldGoalReturnTouchdowns( $gameLeagueLeaders['FieldGoalReturnTouchdowns'] );
        $currentGameLeagueLeaders->setSafeties( $gameLeagueLeaders['Safeties'] );
        $currentGameLeagueLeaders->setFieldGoalsHadBlocked( $gameLeagueLeaders['FieldGoalsHadBlocked'] );
        $currentGameLeagueLeaders->setPuntsHadBlocked( $gameLeagueLeaders['PuntsHadBlocked'] );
        $currentGameLeagueLeaders->setExtraPointsHadBlocked( $gameLeagueLeaders['ExtraPointsHadBlocked'] );
        $currentGameLeagueLeaders->setPuntLong( $gameLeagueLeaders['PuntLong'] );
        $currentGameLeagueLeaders->setBlockedKickReturnYards( $gameLeagueLeaders['BlockedKickReturnYards'] );
        $currentGameLeagueLeaders->setFieldGoalReturnYards( $gameLeagueLeaders['FieldGoalReturnYards'] );
        $currentGameLeagueLeaders->setPuntNetYards( $gameLeagueLeaders['PuntNetYards'] );
        $currentGameLeagueLeaders->setSpecialTeamsFumblesForced( $gameLeagueLeaders['SpecialTeamsFumblesForced'] );
        $currentGameLeagueLeaders->setSpecialTeamsFumblesRecovered(
            $gameLeagueLeaders['SpecialTeamsFumblesRecovered']
        );
        $currentGameLeagueLeaders->setMiscFumblesForced( $gameLeagueLeaders['MiscFumblesForced'] );
        $currentGameLeagueLeaders->setMiscFumblesRecovered( $gameLeagueLeaders['MiscFumblesRecovered'] );
        $currentGameLeagueLeaders->setShortName( $gameLeagueLeaders['ShortName'] );
        $currentGameLeagueLeaders->setPlayingSurface( $gameLeagueLeaders['PlayingSurface'] );
        $currentGameLeagueLeaders->setIsGameOver( $gameLeagueLeaders['IsGameOver'] );
        $currentGameLeagueLeaders->setSafetiesAllowed( $gameLeagueLeaders['SafetiesAllowed'] );
        $currentGameLeagueLeaders->setStadium( $gameLeagueLeaders['Stadium'] );
        $currentGameLeagueLeaders->setTemperature( $gameLeagueLeaders['Temperature'] );
        $currentGameLeagueLeaders->setHumidity( $gameLeagueLeaders['Humidity'] );
        $currentGameLeagueLeaders->setWindSpeed( $gameLeagueLeaders['WindSpeed'] );
        $currentGameLeagueLeaders->setFanDuelSalary( $gameLeagueLeaders['FanDuelSalary'] );
        $currentGameLeagueLeaders->setDraftKingsSalary( $gameLeagueLeaders['DraftKingsSalary'] );
        $currentGameLeagueLeaders->setFantasyDataSalary( $gameLeagueLeaders['FantasyDataSalary'] );
        $currentGameLeagueLeaders->setOffensiveSnapsPlayed( $gameLeagueLeaders['OffensiveSnapsPlayed'] );
        $currentGameLeagueLeaders->setDefensiveSnapsPlayed( $gameLeagueLeaders['DefensiveSnapsPlayed'] );
        $currentGameLeagueLeaders->setSpecialTeamsSnapsPlayed( $gameLeagueLeaders['SpecialTeamsSnapsPlayed'] );
        $currentGameLeagueLeaders->setOffensiveTeamSnaps( $gameLeagueLeaders['OffensiveTeamSnaps'] );
        $currentGameLeagueLeaders->setDefensiveTeamSnaps( $gameLeagueLeaders['DefensiveTeamSnaps'] );
        $currentGameLeagueLeaders->setSpecialTeamsTeamSnaps( $gameLeagueLeaders['SpecialTeamsTeamSnaps'] );
        $currentGameLeagueLeaders->setVictivSalary( $gameLeagueLeaders['VictivSalary'] );

        return $currentGameLeagueLeaders;
    }
}