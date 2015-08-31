<?php

namespace FantasyPro\DataBundle\Builder;

use FantasyPro\DataBundle\Entity\PlayerGame;
use FantasyPro\DataBundle\Helpers\DateHelper;

class BoxPlayerGameBuilder
{
    /**
     * @var DateHelper $dateHelper
     */
    private $dateHelper;

    public function __construct( DateHelper $dateHelper )
    {
        $this->dateHelper = $dateHelper;
    }

    public function buildPlayerGame( $currentPlayerGame = null, $playerGame )
    {
        if ( ! $currentPlayerGame) { // check we have an entity
            $currentPlayerGame = new PlayerGame();
        }

        //required
        $currentPlayerGame->setGameKey( $playerGame['GameKey'] );

        $currentPlayerGame->setPlayerID( $playerGame['PlayerID'] );

        $currentPlayerGame->setPlayerGameID( $playerGame['GameKey'].$playerGame['PlayerID'] );

        $currentPlayerGame->setSeasonType( $playerGame['SeasonType'] );

        $currentPlayerGame->setSeason( $playerGame['Season'] );

        $currentPlayerGame->setGameDate( $this->dateHelper->parseDate( $playerGame['GameDate'] ) );


        if (isset( $playerGame['Week'] )) {
            $currentPlayerGame->setWeek( $playerGame['Week'] );

        }
        if (isset( $playerGame['Team'] )) {
            $currentPlayerGame->setTeam( $playerGame['Team'] );

        }
        if (isset( $playerGame['Opponent'] )) {
            $currentPlayerGame->setOpponent( $playerGame['Opponent'] );

        }
        if (isset( $playerGame['HomeOrAway'] )) {
            $currentPlayerGame->setHomeOrAway( $playerGame['HomeOrAway'] );

        }
        if (isset( $playerGame['Number'] )) {
            $currentPlayerGame->setNumber( $playerGame['Number'] );

        }
        if (isset( $playerGame['Name'] )) {
            $currentPlayerGame->setName( $playerGame['Name'] );

        }
        if (isset( $playerGame['Position'] )) {
            $currentPlayerGame->setPosition( $playerGame['Position'] );

        }
        if (isset( $playerGame['PositionCategory'] )) {
            $currentPlayerGame->setPositionCategory( $playerGame['PositionCategory'] );

        }
        if (isset( $playerGame['Activated'] )) {
            $currentPlayerGame->setActivated( $playerGame['Activated'] );

        }
        if (isset( $playerGame['Played'] )) {
            $currentPlayerGame->setPlayed( $playerGame['Played'] );

        }
        if (isset( $playerGame['Started'] )) {
            $currentPlayerGame->setStarted( $playerGame['Started'] );

        }
        if (isset( $playerGame['PassingAttempts'] )) {
            $currentPlayerGame->setPassingAttempts( $playerGame['PassingAttempts'] );

        }
        if (isset( $playerGame['PassingCompletions'] )) {
            $currentPlayerGame->setPassingCompletions( $playerGame['PassingCompletions'] );

        }
        if (isset( $playerGame['PassingYards'] )) {
            $currentPlayerGame->setPassingYards( $playerGame['PassingYards'] );

        }
        if (isset( $playerGame['PassingCompletionPercentage'] )) {
            $currentPlayerGame->setPassingCompletionPercentage( $playerGame['PassingCompletionPercentage'] );

        }
        if (isset( $playerGame['PassingYardsPerAttempt'] )) {
            $currentPlayerGame->setPassingYardsPerAttempt( $playerGame['PassingYardsPerAttempt'] );

        }
        if (isset( $playerGame['PassingYardsPerCompletion'] )) {
            $currentPlayerGame->setPassingYardsPerCompletion( $playerGame['PassingYardsPerCompletion'] );

        }
        if (isset( $playerGame['PassingTouchdowns'] )) {
            $currentPlayerGame->setPassingTouchdowns( $playerGame['PassingTouchdowns'] );

        }
        if (isset( $playerGame['PassingInterceptions'] )) {
            $currentPlayerGame->setPassingInterceptions( $playerGame['PassingInterceptions'] );

        }
        if (isset( $playerGame['PassingRating'] )) {
            $currentPlayerGame->setPassingRating( $playerGame['PassingRating'] );

        }
        if (isset( $playerGame['PassingLong'] )) {
            $currentPlayerGame->setPassingLong( $playerGame['PassingLong'] );

        }
        if (isset( $playerGame['PassingSacks'] )) {
            $currentPlayerGame->setPassingSacks( $playerGame['PassingSacks'] );

        }
        if (isset( $playerGame['PassingSackYards'] )) {
            $currentPlayerGame->setPassingSackYards( $playerGame['PassingSackYards'] );

        }
        if (isset( $playerGame['RushingAttempts'] )) {
            $currentPlayerGame->setRushingAttempts( $playerGame['RushingAttempts'] );

        }
        if (isset( $playerGame['RushingYards'] )) {
            $currentPlayerGame->setRushingYards( $playerGame['RushingYards'] );

        }
        if (isset( $playerGame['RushingYardsPerAttempt'] )) {
            $currentPlayerGame->setRushingYardsPerAttempt( $playerGame['RushingYardsPerAttempt'] );

        }
        if (isset( $playerGame['RushingTouchdowns'] )) {
            $currentPlayerGame->setRushingTouchdowns( $playerGame['RushingTouchdowns'] );

        }
        if (isset( $playerGame['RushingLong'] )) {
            $currentPlayerGame->setRushingLong( $playerGame['RushingLong'] );

        }
        if (isset( $playerGame['ReceivingTargets'] )) {
            $currentPlayerGame->setReceivingTargets( $playerGame['ReceivingTargets'] );

        }
        if (isset( $playerGame['Receptions'] )) {
            $currentPlayerGame->setReceptions( $playerGame['Receptions'] );

        }
        if (isset( $playerGame['ReceivingYards'] )) {
            $currentPlayerGame->setReceivingYards( $playerGame['ReceivingYards'] );

        }
        if (isset( $playerGame['ReceivingYardsPerReception'] )) {
            $currentPlayerGame->setReceivingYardsPerReception( $playerGame['ReceivingYardsPerReception'] );

        }
        if (isset( $playerGame['ReceivingTouchdowns'] )) {
            $currentPlayerGame->setReceivingTouchdowns( $playerGame['ReceivingTouchdowns'] );

        }
        if (isset( $playerGame['ReceivingLong'] )) {
            $currentPlayerGame->setReceivingLong( $playerGame['ReceivingLong'] );

        }
        if (isset( $playerGame['Fumbles'] )) {
            $currentPlayerGame->setFumbles( $playerGame['Fumbles'] );

        }
        if (isset( $playerGame['FumblesLost'] )) {
            $currentPlayerGame->setFumblesLost( $playerGame['FumblesLost'] );

        }
        if (isset( $playerGame['PuntReturns'] )) {
            $currentPlayerGame->setPuntReturns( $playerGame['PuntReturns'] );

        }
        if (isset( $playerGame['PuntReturnYards'] )) {
            $currentPlayerGame->setPuntReturnYards( $playerGame['PuntReturnYards'] );

        }
        if (isset( $playerGame['PuntReturnYardsPerAttempt'] )) {
            $currentPlayerGame->setPuntReturnYardsPerAttempt( $playerGame['PuntReturnYardsPerAttempt'] );

        }
        if (isset( $playerGame['PuntReturnTouchdowns'] )) {
            $currentPlayerGame->setPuntReturnTouchdowns( $playerGame['PuntReturnTouchdowns'] );

        }
        if (isset( $playerGame['PuntReturnLong'] )) {
            $currentPlayerGame->setPuntReturnLong( $playerGame['PuntReturnLong'] );

        }
        if (isset( $playerGame['KickReturns'] )) {
            $currentPlayerGame->setKickReturns( $playerGame['KickReturns'] );

        }
        if (isset( $playerGame['KickReturnYards'] )) {
            $currentPlayerGame->setKickReturnYards( $playerGame['KickReturnYards'] );

        }
        if (isset( $playerGame['KickReturnYardsPerAttempt'] )) {
            $currentPlayerGame->setKickReturnYardsPerAttempt( $playerGame['KickReturnYardsPerAttempt'] );

        }
        if (isset( $playerGame['KickReturnTouchdowns'] )) {
            $currentPlayerGame->setKickReturnTouchdowns( $playerGame['KickReturnTouchdowns'] );

        }
        if (isset( $playerGame['KickReturnLong'] )) {
            $currentPlayerGame->setKickReturnLong( $playerGame['KickReturnLong'] );

        }
        if (isset( $playerGame['SoloTackles'] )) {
            $currentPlayerGame->setSoloTackles( $playerGame['SoloTackles'] );

        }
        if (isset( $playerGame['AssistedTackles'] )) {
            $currentPlayerGame->setAssistedTackles( $playerGame['AssistedTackles'] );

        }
        if (isset( $playerGame['TacklesForLoss'] )) {
            $currentPlayerGame->setTacklesForLoss( $playerGame['TacklesForLoss'] );

        }
        if (isset( $playerGame['Sacks'] )) {
            $currentPlayerGame->setSacks( $playerGame['Sacks'] );

        }
        if (isset( $playerGame['SackYards'] )) {
            $currentPlayerGame->setSackYards( $playerGame['SackYards'] );

        }
        if (isset( $playerGame['QuarterbackHits'] )) {
            $currentPlayerGame->setQuarterbackHits( $playerGame['QuarterbackHits'] );

        }
        if (isset( $playerGame['PassesDefended'] )) {
            $currentPlayerGame->setPassesDefended( $playerGame['PassesDefended'] );

        }
        if (isset( $playerGame['FumblesForced'] )) {
            $currentPlayerGame->setFumblesForced( $playerGame['FumblesForced'] );

        }
        if (isset( $playerGame['FumblesRecovered'] )) {
            $currentPlayerGame->setFumblesRecovered( $playerGame['FumblesRecovered'] );

        }
        if (isset( $playerGame['FumbleReturnYards'] )) {
            $currentPlayerGame->setFumbleReturnYards( $playerGame['FumbleReturnYards'] );

        }
        if (isset( $playerGame['FumbleReturnTouchdowns'] )) {
            $currentPlayerGame->setFumbleReturnTouchdowns( $playerGame['FumbleReturnTouchdowns'] );

        }
        if (isset( $playerGame['Interceptions'] )) {
            $currentPlayerGame->setInterceptions( $playerGame['Interceptions'] );

        }
        if (isset( $playerGame['InterceptionReturnYards'] )) {
            $currentPlayerGame->setInterceptionReturnYards( $playerGame['InterceptionReturnYards'] );

        }
        if (isset( $playerGame['InterceptionReturnTouchdowns'] )) {
            $currentPlayerGame->setInterceptionReturnTouchdowns( $playerGame['InterceptionReturnTouchdowns'] );

        }
        if (isset( $playerGame['BlockedKicks'] )) {
            $currentPlayerGame->setBlockedKicks( $playerGame['BlockedKicks'] );

        }
        if (isset( $playerGame['SpecialTeamsSoloTackles'] )) {
            $currentPlayerGame->setSpecialTeamsSoloTackles( $playerGame['SpecialTeamsSoloTackles'] );

        }
        if (isset( $playerGame['SpecialTeamsAssistedTackles'] )) {
            $currentPlayerGame->setSpecialTeamsAssistedTackles( $playerGame['SpecialTeamsAssistedTackles'] );

        }
        if (isset( $playerGame['MiscSoloTackles'] )) {
            $currentPlayerGame->setMiscSoloTackles( $playerGame['MiscSoloTackles'] );

        }
        if (isset( $playerGame['MiscAssistedTackles'] )) {
            $currentPlayerGame->setMiscAssistedTackles( $playerGame['MiscAssistedTackles'] );

        }
        if (isset( $playerGame['Punts'] )) {
            $currentPlayerGame->setPunts( $playerGame['Punts'] );

        }
        if (isset( $playerGame['PuntYards'] )) {
            $currentPlayerGame->setPuntYards( $playerGame['PuntYards'] );

        }
        if (isset( $playerGame['PuntAverage'] )) {
            $currentPlayerGame->setPuntAverage( $playerGame['PuntAverage'] );

        }
        if (isset( $playerGame['FieldGoalsAttempted'] )) {
            $currentPlayerGame->setFieldGoalsAttempted( $playerGame['FieldGoalsAttempted'] );

        }
        if (isset( $playerGame['FieldGoalsMade'] )) {
            $currentPlayerGame->setFieldGoalsMade( $playerGame['FieldGoalsMade'] );

        }
        if (isset( $playerGame['FieldGoalsLongestMade'] )) {
            $currentPlayerGame->setFieldGoalsLongestMade( $playerGame['FieldGoalsLongestMade'] );

        }
        if (isset( $playerGame['ExtraPointsMade'] )) {
            $currentPlayerGame->setExtraPointsMade( $playerGame['ExtraPointsMade'] );

        }
        if (isset( $playerGame['TwoPointConversionPasses'] )) {
            $currentPlayerGame->setTwoPointConversionPasses( $playerGame['TwoPointConversionPasses'] );

        }
        if (isset( $playerGame['TwoPointConversionRuns'] )) {
            $currentPlayerGame->setTwoPointConversionRuns( $playerGame['TwoPointConversionRuns'] );

        }
        if (isset( $playerGame['TwoPointConversionReceptions'] )) {
            $currentPlayerGame->setTwoPointConversionReceptions( $playerGame['TwoPointConversionReceptions'] );

        }
        if (isset( $playerGame['FantasyPoints'] )) {
            $currentPlayerGame->setFantasyPoints( $playerGame['FantasyPoints'] );

        }
        if (isset( $playerGame['FantasyPointsPPR'] )) {
            $currentPlayerGame->setFantasyPointsPPR( $playerGame['FantasyPointsPPR'] );

        }
        if (isset( $playerGame['ReceptionPercentage'] )) {
            $currentPlayerGame->setReceptionPercentage( $playerGame['ReceptionPercentage'] );

        }
        if (isset( $playerGame['ReceivingYardsPerTarget'] )) {
            $currentPlayerGame->setReceivingYardsPerTarget( $playerGame['ReceivingYardsPerTarget'] );

        }
        if (isset( $playerGame['Tackles'] )) {
            $currentPlayerGame->setTackles( $playerGame['Tackles'] );

        }
        if (isset( $playerGame['OffensiveTouchdowns'] )) {
            $currentPlayerGame->setOffensiveTouchdowns( $playerGame['OffensiveTouchdowns'] );

        }
        if (isset( $playerGame['DefensiveTouchdowns'] )) {
            $currentPlayerGame->setDefensiveTouchdowns( $playerGame['DefensiveTouchdowns'] );

        }
        if (isset( $playerGame['SpecialTeamsTouchdowns'] )) {
            $currentPlayerGame->setSpecialTeamsTouchdowns( $playerGame['SpecialTeamsTouchdowns'] );

        }
        if (isset( $playerGame['Touchdowns'] )) {
            $currentPlayerGame->setTouchdowns( $playerGame['Touchdowns'] );

        }
        if (isset( $playerGame['FantasyPosition'] )) {
            $currentPlayerGame->setFantasyPosition( $playerGame['FantasyPosition'] );

        }
        if (isset( $playerGame['FieldGoalPercentage'] )) {
            $currentPlayerGame->setFieldGoalPercentage( $playerGame['FieldGoalPercentage'] );

        }

        if (isset( $playerGame['FumblesOwnRecoveries'] )) {
            $currentPlayerGame->setFumblesOwnRecoveries( $playerGame['FumblesOwnRecoveries'] );

        }
        if (isset( $playerGame['FumblesOutOfBounds'] )) {
            $currentPlayerGame->setFumblesOutOfBounds( $playerGame['FumblesOutOfBounds'] );

        }
        if (isset( $playerGame['KickReturnFairCatches'] )) {
            $currentPlayerGame->setKickReturnFairCatches( $playerGame['KickReturnFairCatches'] );

        }
        if (isset( $playerGame['PuntReturnFairCatches'] )) {
            $currentPlayerGame->setPuntReturnFairCatches( $playerGame['PuntReturnFairCatches'] );

        }
        if (isset( $playerGame['PuntTouchbacks'] )) {
            $currentPlayerGame->setPuntTouchbacks( $playerGame['PuntTouchbacks'] );

        }
        if (isset( $playerGame['PuntInside20'] )) {
            $currentPlayerGame->setPuntInside20( $playerGame['PuntInside20'] );

        }
        if (isset( $playerGame['PuntNetAverage'] )) {
            $currentPlayerGame->setPuntNetAverage( $playerGame['PuntNetAverage'] );

        }
        if (isset( $playerGame['ExtraPointsAttempted'] )) {
            $currentPlayerGame->setExtraPointsAttempted( $playerGame['ExtraPointsAttempted'] );

        }
        if (isset( $playerGame['BlockedKickReturnTouchdowns'] )) {
            $currentPlayerGame->setBlockedKickReturnTouchdowns( $playerGame['BlockedKickReturnTouchdowns'] );

        }
        if (isset( $playerGame['FieldGoalReturnTouchdowns'] )) {
            $currentPlayerGame->setFieldGoalReturnTouchdowns( $playerGame['FieldGoalReturnTouchdowns'] );

        }
        if (isset( $playerGame['Safeties'] )) {
            $currentPlayerGame->setSafeties( $playerGame['Safeties'] );

        }
        if (isset( $playerGame['FieldGoalsHadBlocked'] )) {
            $currentPlayerGame->setFieldGoalsHadBlocked( $playerGame['FieldGoalsHadBlocked'] );

        }
        if (isset( $playerGame['PuntsHadBlocked'] )) {
            $currentPlayerGame->setPuntsHadBlocked( $playerGame['PuntsHadBlocked'] );

        }
        if (isset( $playerGame['ExtraPointsHadBlocked'] )) {
            $currentPlayerGame->setExtraPointsHadBlocked( $playerGame['ExtraPointsHadBlocked'] );

        }
        if (isset( $playerGame['PuntLong'] )) {
            $currentPlayerGame->setPuntLong( $playerGame['PuntLong'] );

        }
        if (isset( $playerGame['BlockedKickReturnYards'] )) {
            $currentPlayerGame->setBlockedKickReturnYards( $playerGame['BlockedKickReturnYards'] );

        }
        if (isset( $playerGame['FieldGoalReturnYards'] )) {
            $currentPlayerGame->setFieldGoalReturnYards( $playerGame['FieldGoalReturnYards'] );

        }
        if (isset( $playerGame['PuntNetYards'] )) {
            $currentPlayerGame->setPuntNetYards( $playerGame['PuntNetYards'] );

        }
        if (isset( $playerGame['SpecialTeamsFumblesForced'] )) {
            $currentPlayerGame->setSpecialTeamsFumblesForced( $playerGame['SpecialTeamsFumblesForced'] );

        }
        if (isset( $playerGame['SpecialTeamsFumblesRecovered'] )) {
            $currentPlayerGame->setSpecialTeamsFumblesRecovered( $playerGame['SpecialTeamsFumblesRecovered'] );

        }
        if (isset( $playerGame['MiscFumblesForced'] )) {
            $currentPlayerGame->setMiscFumblesForced( $playerGame['MiscFumblesForced'] );

        }
        if (isset( $playerGame['MiscFumblesRecovered'] )) {
            $currentPlayerGame->setMiscFumblesRecovered( $playerGame['MiscFumblesRecovered'] );

        }
        if (isset( $playerGame['ShortName'] )) {
            $currentPlayerGame->setShortName( $playerGame['ShortName'] );

        }
        if (isset( $playerGame['PlayingSurface'] )) {
            $currentPlayerGame->setPlayingSurface( $playerGame['PlayingSurface'] );

        }
        if (isset( $playerGame['IsGameOver'] )) {
            $currentPlayerGame->setIsGameOver( $playerGame['IsGameOver'] );

        }
        if (isset( $playerGame['SafetiesAllowed'] )) {
            $currentPlayerGame->setSafetiesAllowed( $playerGame['SafetiesAllowed'] );

        }
        if (isset( $playerGame['Stadium'] )) {
            $currentPlayerGame->setStadium( $playerGame['Stadium'] );

        }
        if (isset( $playerGame['Temperature'] )) {
            $currentPlayerGame->setTemperature( $playerGame['Temperature'] );

        }
        if (isset( $playerGame['Humidity'] )) {
            $currentPlayerGame->setHumidity( $playerGame['Humidity'] );

        }
        if (isset( $playerGame['WindSpeed'] )) {
            $currentPlayerGame->setWindSpeed( $playerGame['WindSpeed'] );

        }
        if (isset( $playerGame['FanDuelSalary'] )) {
            $currentPlayerGame->setFanDuelSalary( $playerGame['FanDuelSalary'] );

        }
        if (isset( $playerGame['DraftKingsSalary'] )) {
            $currentPlayerGame->setDraftKingsSalary( $playerGame['DraftKingsSalary'] );

        }
        if (isset( $playerGame['FantasyDataSalary'] )) {
            $currentPlayerGame->setFantasyDataSalary( $playerGame['FantasyDataSalary'] );

        }
        if (isset( $playerGame['OffensiveSnapsPlayed'] )) {
            $currentPlayerGame->setOffensiveSnapsPlayed( $playerGame['OffensiveSnapsPlayed'] );

        }
        if (isset( $playerGame['DefensiveSnapsPlayed'] )) {
            $currentPlayerGame->setDefensiveSnapsPlayed( $playerGame['DefensiveSnapsPlayed'] );

        }
        if (isset( $playerGame['SpecialTeamsSnapsPlayed'] )) {
            $currentPlayerGame->setSpecialTeamsSnapsPlayed( $playerGame['SpecialTeamsSnapsPlayed'] );

        }
        if (isset( $playerGame['OffensiveTeamSnaps'] )) {
            $currentPlayerGame->setOffensiveTeamSnaps( $playerGame['OffensiveTeamSnaps'] );

        }
        if (isset( $playerGame['DefensiveTeamSnaps'] )) {
            $currentPlayerGame->setDefensiveTeamSnaps( $playerGame['DefensiveTeamSnaps'] );
        }
        if (isset( $playerGame['SpecialTeamsTeamSnaps'] )) {
            $currentPlayerGame->setSpecialTeamsTeamSnaps( $playerGame['SpecialTeamsTeamSnaps'] );
        }
        if (isset( $playerGame['VictivSalary'] )) {
            $currentPlayerGame->setVictivSalary( $playerGame['VictivSalary'] );
        }

        if (isset( $playerGame['CustomD365FantasyPoints'] )) {
            $currentPlayerGame->setCustomD365FantasyPoints( $playerGame['CustomD365FantasyPoints'] );
        }

        return $currentPlayerGame;
    }

}