<?php

namespace FantasyPro\DataBundle\Builder;

use FantasyPro\DataBundle\Entity\PlayerGameProjectedStats;
use FantasyPro\DataBundle\Helpers\DateHelper;

class PlayerGameProjectedStatsBuilder
{
    /**
     * @var DateHelper $dateHelper
     */
    private $dateHelper;

    public function __construct( DateHelper $dateHelper )
    {
        $this->dateHelper = $dateHelper;
    }

    public function buildPlayerGameProjectedStats( $currentPlayerGameProjectedStats = null, $playerGame )
    {
        if ( ! $currentPlayerGameProjectedStats) { // check we have an entity
            $currentPlayerGameProjectedStats = new PlayerGameProjectedStats();
        }

        $currentPlayerGameProjectedStats->setCustomD365FantasyPoints( $playerGame['CustomD365FantasyPoints'] );
        $currentPlayerGameProjectedStats->setGameKey( $playerGame['GameKey'] );
        $currentPlayerGameProjectedStats->setPlayerID( $playerGame['PlayerID'] );
        $currentPlayerGameProjectedStats->setSeasonType( $playerGame['SeasonType'] );
        $currentPlayerGameProjectedStats->setSeason( $playerGame['Season'] );
        $currentPlayerGameProjectedStats->setGameDate( $this->dateHelper->parseDate( $playerGame['GameDate'] ) );
        $currentPlayerGameProjectedStats->setWeek( $playerGame['Week'] );
        $currentPlayerGameProjectedStats->setTeam( $playerGame['Team'] );
        $currentPlayerGameProjectedStats->setOpponent( $playerGame['Opponent'] );
        $currentPlayerGameProjectedStats->setHomeOrAway( $playerGame['HomeOrAway'] );
        $currentPlayerGameProjectedStats->setNumber( $playerGame['Number'] );
        $currentPlayerGameProjectedStats->setName( $playerGame['Name'] );
        $currentPlayerGameProjectedStats->setPosition( $playerGame['Position'] );
        $currentPlayerGameProjectedStats->setPositionCategory( $playerGame['PositionCategory'] );
        $currentPlayerGameProjectedStats->setActivated( $playerGame['Activated'] );
        $currentPlayerGameProjectedStats->setPlayed( $playerGame['Played'] );
        $currentPlayerGameProjectedStats->setStarted( $playerGame['Started'] );
        $currentPlayerGameProjectedStats->setPassingAttempts( $playerGame['PassingAttempts'] );
        $currentPlayerGameProjectedStats->setPassingCompletions( $playerGame['PassingCompletions'] );
        $currentPlayerGameProjectedStats->setPassingYards( $playerGame['PassingYards'] );
        $currentPlayerGameProjectedStats->setPassingCompletionPercentage( $playerGame['PassingCompletionPercentage'] );
        $currentPlayerGameProjectedStats->setPassingYardsPerAttempt( $playerGame['PassingYardsPerAttempt'] );
        $currentPlayerGameProjectedStats->setPassingYardsPerCompletion( $playerGame['PassingYardsPerCompletion'] );
        $currentPlayerGameProjectedStats->setPassingTouchdowns( $playerGame['PassingTouchdowns'] );
        $currentPlayerGameProjectedStats->setPassingInterceptions( $playerGame['PassingInterceptions'] );
        $currentPlayerGameProjectedStats->setPassingRating( $playerGame['PassingRating'] );
        $currentPlayerGameProjectedStats->setPassingLong( $playerGame['PassingLong'] );
        $currentPlayerGameProjectedStats->setPassingSacks( $playerGame['PassingSacks'] );
        $currentPlayerGameProjectedStats->setPassingSackYards( $playerGame['PassingSackYards'] );
        $currentPlayerGameProjectedStats->setRushingAttempts( $playerGame['RushingAttempts'] );
        $currentPlayerGameProjectedStats->setRushingYards( $playerGame['RushingYards'] );
        $currentPlayerGameProjectedStats->setRushingYardsPerAttempt( $playerGame['RushingYardsPerAttempt'] );
        $currentPlayerGameProjectedStats->setRushingTouchdowns( $playerGame['RushingTouchdowns'] );
        $currentPlayerGameProjectedStats->setRushingLong( $playerGame['RushingLong'] );
        $currentPlayerGameProjectedStats->setReceivingTargets( $playerGame['ReceivingTargets'] );
        $currentPlayerGameProjectedStats->setReceptions( $playerGame['Receptions'] );
        $currentPlayerGameProjectedStats->setReceivingYards( $playerGame['ReceivingYards'] );
        $currentPlayerGameProjectedStats->setReceivingYardsPerReception( $playerGame['ReceivingYardsPerReception'] );
        $currentPlayerGameProjectedStats->setReceivingTouchdowns( $playerGame['ReceivingTouchdowns'] );
        $currentPlayerGameProjectedStats->setReceivingLong( $playerGame['ReceivingLong'] );
        $currentPlayerGameProjectedStats->setFumbles( $playerGame['Fumbles'] );
        $currentPlayerGameProjectedStats->setFumblesLost( $playerGame['FumblesLost'] );
        $currentPlayerGameProjectedStats->setPuntReturns( $playerGame['PuntReturns'] );
        $currentPlayerGameProjectedStats->setPuntReturnYards( $playerGame['PuntReturnYards'] );
        $currentPlayerGameProjectedStats->setPuntReturnYardsPerAttempt( $playerGame['PuntReturnYardsPerAttempt'] );
        $currentPlayerGameProjectedStats->setPuntReturnTouchdowns( $playerGame['PuntReturnTouchdowns'] );
        $currentPlayerGameProjectedStats->setPuntReturnLong( $playerGame['PuntReturnLong'] );
        $currentPlayerGameProjectedStats->setKickReturns( $playerGame['KickReturns'] );
        $currentPlayerGameProjectedStats->setKickReturnYards( $playerGame['KickReturnYards'] );
        $currentPlayerGameProjectedStats->setKickReturnYardsPerAttempt( $playerGame['KickReturnYardsPerAttempt'] );
        $currentPlayerGameProjectedStats->setKickReturnTouchdowns( $playerGame['KickReturnTouchdowns'] );
        $currentPlayerGameProjectedStats->setKickReturnLong( $playerGame['KickReturnLong'] );
        $currentPlayerGameProjectedStats->setSoloTackles( $playerGame['SoloTackles'] );
        $currentPlayerGameProjectedStats->setAssistedTackles( $playerGame['AssistedTackles'] );
        $currentPlayerGameProjectedStats->setTacklesForLoss( $playerGame['TacklesForLoss'] );
        $currentPlayerGameProjectedStats->setSacks( $playerGame['Sacks'] );
        $currentPlayerGameProjectedStats->setSackYards( $playerGame['SackYards'] );
        $currentPlayerGameProjectedStats->setQuarterbackHits( $playerGame['QuarterbackHits'] );
        $currentPlayerGameProjectedStats->setPassesDefended( $playerGame['PassesDefended'] );
        $currentPlayerGameProjectedStats->setFumblesForced( $playerGame['FumblesForced'] );
        $currentPlayerGameProjectedStats->setFumblesRecovered( $playerGame['FumblesRecovered'] );
        $currentPlayerGameProjectedStats->setFumbleReturnYards( $playerGame['FumbleReturnYards'] );
        $currentPlayerGameProjectedStats->setFumbleReturnTouchdowns( $playerGame['FumbleReturnTouchdowns'] );
        $currentPlayerGameProjectedStats->setInterceptions( $playerGame['Interceptions'] );
        $currentPlayerGameProjectedStats->setInterceptionReturnYards( $playerGame['InterceptionReturnYards'] );
        $currentPlayerGameProjectedStats->setInterceptionReturnTouchdowns(
            $playerGame['InterceptionReturnTouchdowns']
        );
        $currentPlayerGameProjectedStats->setBlockedKicks( $playerGame['BlockedKicks'] );
        $currentPlayerGameProjectedStats->setSpecialTeamsSoloTackles( $playerGame['SpecialTeamsSoloTackles'] );
        $currentPlayerGameProjectedStats->setSpecialTeamsAssistedTackles( $playerGame['SpecialTeamsAssistedTackles'] );
        $currentPlayerGameProjectedStats->setMiscSoloTackles( $playerGame['MiscSoloTackles'] );
        $currentPlayerGameProjectedStats->setMiscAssistedTackles( $playerGame['MiscAssistedTackles'] );
        $currentPlayerGameProjectedStats->setPunts( $playerGame['Punts'] );
        $currentPlayerGameProjectedStats->setPuntYards( $playerGame['PuntYards'] );
        $currentPlayerGameProjectedStats->setPuntAverage( $playerGame['PuntAverage'] );
        $currentPlayerGameProjectedStats->setFieldGoalsAttempted( $playerGame['FieldGoalsAttempted'] );
        $currentPlayerGameProjectedStats->setFieldGoalsMade( $playerGame['FieldGoalsMade'] );
        $currentPlayerGameProjectedStats->setFieldGoalsLongestMade( $playerGame['FieldGoalsLongestMade'] );
        $currentPlayerGameProjectedStats->setExtraPointsMade( $playerGame['ExtraPointsMade'] );
        $currentPlayerGameProjectedStats->setTwoPointConversionPasses( $playerGame['TwoPointConversionPasses'] );
        $currentPlayerGameProjectedStats->setTwoPointConversionRuns( $playerGame['TwoPointConversionRuns'] );
        $currentPlayerGameProjectedStats->setTwoPointConversionReceptions(
            $playerGame['TwoPointConversionReceptions']
        );
        $currentPlayerGameProjectedStats->setFantasyPoints( $playerGame['FantasyPoints'] );
        $currentPlayerGameProjectedStats->setFantasyPointsPPR( $playerGame['FantasyPointsPPR'] );
        $currentPlayerGameProjectedStats->setReceptionPercentage( $playerGame['ReceptionPercentage'] );
        $currentPlayerGameProjectedStats->setReceivingYardsPerTarget( $playerGame['ReceivingYardsPerTarget'] );
        $currentPlayerGameProjectedStats->setTackles( $playerGame['Tackles'] );
        $currentPlayerGameProjectedStats->setOffensiveTouchdowns( $playerGame['OffensiveTouchdowns'] );
        $currentPlayerGameProjectedStats->setDefensiveTouchdowns( $playerGame['DefensiveTouchdowns'] );
        $currentPlayerGameProjectedStats->setSpecialTeamsTouchdowns( $playerGame['SpecialTeamsTouchdowns'] );
        $currentPlayerGameProjectedStats->setTouchdowns( $playerGame['Touchdowns'] );
        $currentPlayerGameProjectedStats->setFantasyPosition( $playerGame['FantasyPosition'] );
        $currentPlayerGameProjectedStats->setFieldGoalPercentage( $playerGame['FieldGoalPercentage'] );
        $currentPlayerGameProjectedStats->setPlayerGameID( $playerGame['PlayerGameID'] );
        $currentPlayerGameProjectedStats->setFumblesOwnRecoveries( $playerGame['FumblesOwnRecoveries'] );
        $currentPlayerGameProjectedStats->setFumblesOutOfBounds( $playerGame['FumblesOutOfBounds'] );
        $currentPlayerGameProjectedStats->setKickReturnFairCatches( $playerGame['KickReturnFairCatches'] );
        $currentPlayerGameProjectedStats->setPuntReturnFairCatches( $playerGame['PuntReturnFairCatches'] );
        $currentPlayerGameProjectedStats->setPuntTouchbacks( $playerGame['PuntTouchbacks'] );
        $currentPlayerGameProjectedStats->setPuntInside20( $playerGame['PuntInside20'] );
        $currentPlayerGameProjectedStats->setPuntNetAverage( $playerGame['PuntNetAverage'] );
        $currentPlayerGameProjectedStats->setExtraPointsAttempted( $playerGame['ExtraPointsAttempted'] );
        $currentPlayerGameProjectedStats->setBlockedKickReturnTouchdowns( $playerGame['BlockedKickReturnTouchdowns'] );
        $currentPlayerGameProjectedStats->setFieldGoalReturnTouchdowns( $playerGame['FieldGoalReturnTouchdowns'] );
        $currentPlayerGameProjectedStats->setSafeties( $playerGame['Safeties'] );
        $currentPlayerGameProjectedStats->setFieldGoalsHadBlocked( $playerGame['FieldGoalsHadBlocked'] );
        $currentPlayerGameProjectedStats->setPuntsHadBlocked( $playerGame['PuntsHadBlocked'] );
        $currentPlayerGameProjectedStats->setExtraPointsHadBlocked( $playerGame['ExtraPointsHadBlocked'] );
        $currentPlayerGameProjectedStats->setPuntLong( $playerGame['PuntLong'] );
        $currentPlayerGameProjectedStats->setBlockedKickReturnYards( $playerGame['BlockedKickReturnYards'] );
        $currentPlayerGameProjectedStats->setFieldGoalReturnYards( $playerGame['FieldGoalReturnYards'] );
        $currentPlayerGameProjectedStats->setPuntNetYards( $playerGame['PuntNetYards'] );
        $currentPlayerGameProjectedStats->setSpecialTeamsFumblesForced( $playerGame['SpecialTeamsFumblesForced'] );
        $currentPlayerGameProjectedStats->setSpecialTeamsFumblesRecovered(
            $playerGame['SpecialTeamsFumblesRecovered']
        );
        $currentPlayerGameProjectedStats->setMiscFumblesForced( $playerGame['MiscFumblesForced'] );
        $currentPlayerGameProjectedStats->setMiscFumblesRecovered( $playerGame['MiscFumblesRecovered'] );
        $currentPlayerGameProjectedStats->setShortName( $playerGame['ShortName'] );
        $currentPlayerGameProjectedStats->setPlayingSurface( $playerGame['PlayingSurface'] );
        $currentPlayerGameProjectedStats->setIsGameOver( $playerGame['IsGameOver'] );
        $currentPlayerGameProjectedStats->setSafetiesAllowed( $playerGame['SafetiesAllowed'] );
        $currentPlayerGameProjectedStats->setStadium( $playerGame['Stadium'] );
        $currentPlayerGameProjectedStats->setTemperature( $playerGame['Temperature'] );
        $currentPlayerGameProjectedStats->setHumidity( $playerGame['Humidity'] );
        $currentPlayerGameProjectedStats->setWindSpeed( $playerGame['WindSpeed'] );
        $currentPlayerGameProjectedStats->setFanDuelSalary( $playerGame['FanDuelSalary'] );
        $currentPlayerGameProjectedStats->setDraftKingsSalary( $playerGame['DraftKingsSalary'] );
        $currentPlayerGameProjectedStats->setFantasyDataSalary( $playerGame['FantasyDataSalary'] );
        $currentPlayerGameProjectedStats->setOffensiveSnapsPlayed( $playerGame['OffensiveSnapsPlayed'] );
        $currentPlayerGameProjectedStats->setDefensiveSnapsPlayed( $playerGame['DefensiveSnapsPlayed'] );
        $currentPlayerGameProjectedStats->setSpecialTeamsSnapsPlayed( $playerGame['SpecialTeamsSnapsPlayed'] );
        $currentPlayerGameProjectedStats->setOffensiveTeamSnaps( $playerGame['OffensiveTeamSnaps'] );
        $currentPlayerGameProjectedStats->setDefensiveTeamSnaps( $playerGame['DefensiveTeamSnaps'] );
        $currentPlayerGameProjectedStats->setSpecialTeamsTeamSnaps( $playerGame['SpecialTeamsTeamSnaps'] );
        $currentPlayerGameProjectedStats->setVictivSalary( $playerGame['VictivSalary'] );

        return $currentPlayerGameProjectedStats;
    }

}