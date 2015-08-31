<?php

namespace FantasyPro\DataBundle\Builder;

use FantasyPro\DataBundle\Entity\PlayerGame;
use FantasyPro\DataBundle\Helpers\DateHelper;

class PlayerGameBuilder
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

        $currentPlayerGame->setCustomD365FantasyPoints( $playerGame['CustomD365FantasyPoints'] );
        $currentPlayerGame->setGameKey( $playerGame['GameKey'] );
        $currentPlayerGame->setPlayerID( $playerGame['PlayerID'] );
        $currentPlayerGame->setSeasonType( $playerGame['SeasonType'] );
        $currentPlayerGame->setSeason( $playerGame['Season'] );
        $currentPlayerGame->setGameDate( $playerGame['GameDate'] );
        $currentPlayerGame->setWeek( $playerGame['Week'] );
        $currentPlayerGame->setTeam( $playerGame['Team'] );
        $currentPlayerGame->setOpponent( $playerGame['Opponent'] );
        $currentPlayerGame->setHomeOrAway( $playerGame['HomeOrAway'] );
        $currentPlayerGame->setNumber( $playerGame['Number'] );
        $currentPlayerGame->setName( $playerGame['Name'] );
        $currentPlayerGame->setPosition( $playerGame['Position'] );
        $currentPlayerGame->setPositionCategory( $playerGame['PositionCategory'] );
        $currentPlayerGame->setActivated( $playerGame['Activated'] );
        $currentPlayerGame->setPlayed( $playerGame['Played'] );
        $currentPlayerGame->setStarted( $playerGame['Started'] );
        $currentPlayerGame->setPassingAttempts( $playerGame['PassingAttempts'] );
        $currentPlayerGame->setPassingCompletions( $playerGame['PassingCompletions'] );
        $currentPlayerGame->setPassingYards( $playerGame['PassingYards'] );
        $currentPlayerGame->setPassingCompletionPercentage( $playerGame['PassingCompletionPercentage'] );
        $currentPlayerGame->setPassingYardsPerAttempt( $playerGame['PassingYardsPerAttempt'] );
        $currentPlayerGame->setPassingYardsPerCompletion( $playerGame['PassingYardsPerCompletion'] );
        $currentPlayerGame->setPassingTouchdowns( $playerGame['PassingTouchdowns'] );
        $currentPlayerGame->setPassingInterceptions( $playerGame['PassingInterceptions'] );
        $currentPlayerGame->setPassingRating( $playerGame['PassingRating'] );
        $currentPlayerGame->setPassingLong( $playerGame['PassingLong'] );
        $currentPlayerGame->setPassingSacks( $playerGame['PassingSacks'] );
        $currentPlayerGame->setPassingSackYards( $playerGame['PassingSackYards'] );
        $currentPlayerGame->setRushingAttempts( $playerGame['RushingAttempts'] );
        $currentPlayerGame->setRushingYards( $playerGame['RushingYards'] );
        $currentPlayerGame->setRushingYardsPerAttempt( $playerGame['RushingYardsPerAttempt'] );
        $currentPlayerGame->setRushingTouchdowns( $playerGame['RushingTouchdowns'] );
        $currentPlayerGame->setRushingLong( $playerGame['RushingLong'] );
        $currentPlayerGame->setReceivingTargets( $playerGame['ReceivingTargets'] );
        $currentPlayerGame->setReceptions( $playerGame['Receptions'] );
        $currentPlayerGame->setReceivingYards( $playerGame['ReceivingYards'] );
        $currentPlayerGame->setReceivingYardsPerReception( $playerGame['ReceivingYardsPerReception'] );
        $currentPlayerGame->setReceivingTouchdowns( $playerGame['ReceivingTouchdowns'] );
        $currentPlayerGame->setReceivingLong( $playerGame['ReceivingLong'] );
        $currentPlayerGame->setFumbles( $playerGame['Fumbles'] );
        $currentPlayerGame->setFumblesLost( $playerGame['FumblesLost'] );
        $currentPlayerGame->setPuntReturns( $playerGame['PuntReturns'] );
        $currentPlayerGame->setPuntReturnYards( $playerGame['PuntReturnYards'] );
        $currentPlayerGame->setPuntReturnYardsPerAttempt( $playerGame['PuntReturnYardsPerAttempt'] );
        $currentPlayerGame->setPuntReturnTouchdowns( $playerGame['PuntReturnTouchdowns'] );
        $currentPlayerGame->setPuntReturnLong( $playerGame['PuntReturnLong'] );
        $currentPlayerGame->setKickReturns( $playerGame['KickReturns'] );
        $currentPlayerGame->setKickReturnYards( $playerGame['KickReturnYards'] );
        $currentPlayerGame->setKickReturnYardsPerAttempt( $playerGame['KickReturnYardsPerAttempt'] );
        $currentPlayerGame->setKickReturnTouchdowns( $playerGame['KickReturnTouchdowns'] );
        $currentPlayerGame->setKickReturnLong( $playerGame['KickReturnLong'] );
        $currentPlayerGame->setSoloTackles( $playerGame['SoloTackles'] );
        $currentPlayerGame->setAssistedTackles( $playerGame['AssistedTackles'] );
        $currentPlayerGame->setTacklesForLoss( $playerGame['TacklesForLoss'] );
        $currentPlayerGame->setSacks( $playerGame['Sacks'] );
        $currentPlayerGame->setSackYards( $playerGame['SackYards'] );
        $currentPlayerGame->setQuarterbackHits( $playerGame['QuarterbackHits'] );
        $currentPlayerGame->setPassesDefended( $playerGame['PassesDefended'] );
        $currentPlayerGame->setFumblesForced( $playerGame['FumblesForced'] );
        $currentPlayerGame->setFumblesRecovered( $playerGame['FumblesRecovered'] );
        $currentPlayerGame->setFumbleReturnYards( $playerGame['FumbleReturnYards'] );
        $currentPlayerGame->setFumbleReturnTouchdowns( $playerGame['FumbleReturnTouchdowns'] );
        $currentPlayerGame->setInterceptions( $playerGame['Interceptions'] );
        $currentPlayerGame->setInterceptionReturnYards( $playerGame['InterceptionReturnYards'] );
        $currentPlayerGame->setInterceptionReturnTouchdowns( $playerGame['InterceptionReturnTouchdowns'] );
        $currentPlayerGame->setBlockedKicks( $playerGame['BlockedKicks'] );
        $currentPlayerGame->setSpecialTeamsSoloTackles( $playerGame['SpecialTeamsSoloTackles'] );
        $currentPlayerGame->setSpecialTeamsAssistedTackles( $playerGame['SpecialTeamsAssistedTackles'] );
        $currentPlayerGame->setMiscSoloTackles( $playerGame['MiscSoloTackles'] );
        $currentPlayerGame->setMiscAssistedTackles( $playerGame['MiscAssistedTackles'] );
        $currentPlayerGame->setPunts( $playerGame['Punts'] );
        $currentPlayerGame->setPuntYards( $playerGame['PuntYards'] );
        $currentPlayerGame->setPuntAverage( $playerGame['PuntAverage'] );
        $currentPlayerGame->setFieldGoalsAttempted( $playerGame['FieldGoalsAttempted'] );
        $currentPlayerGame->setFieldGoalsMade( $playerGame['FieldGoalsMade'] );
        $currentPlayerGame->setFieldGoalsLongestMade( $playerGame['FieldGoalsLongestMade'] );
        $currentPlayerGame->setExtraPointsMade( $playerGame['ExtraPointsMade'] );
        $currentPlayerGame->setTwoPointConversionPasses( $playerGame['TwoPointConversionPasses'] );
        $currentPlayerGame->setTwoPointConversionRuns( $playerGame['TwoPointConversionRuns'] );
        $currentPlayerGame->setTwoPointConversionReceptions( $playerGame['TwoPointConversionReceptions'] );
        $currentPlayerGame->setFantasyPoints( $playerGame['FantasyPoints'] );
        $currentPlayerGame->setFantasyPointsPPR( $playerGame['FantasyPointsPPR'] );
        $currentPlayerGame->setReceptionPercentage( $playerGame['ReceptionPercentage'] );
        $currentPlayerGame->setReceivingYardsPerTarget( $playerGame['ReceivingYardsPerTarget'] );
        $currentPlayerGame->setTackles( $playerGame['Tackles'] );
        $currentPlayerGame->setOffensiveTouchdowns( $playerGame['OffensiveTouchdowns'] );
        $currentPlayerGame->setDefensiveTouchdowns( $playerGame['DefensiveTouchdowns'] );
        $currentPlayerGame->setSpecialTeamsTouchdowns( $playerGame['SpecialTeamsTouchdowns'] );
        $currentPlayerGame->setTouchdowns( $playerGame['Touchdowns'] );
        $currentPlayerGame->setFantasyPosition( $playerGame['FantasyPosition'] );
        $currentPlayerGame->setFieldGoalPercentage( $playerGame['FieldGoalPercentage'] );
        $currentPlayerGame->setPlayerGameID( $playerGame['GameKey'].$playerGame['PlayerID'] );
        $currentPlayerGame->setFumblesOwnRecoveries( $playerGame['FumblesOwnRecoveries'] );
        $currentPlayerGame->setFumblesOutOfBounds( $playerGame['FumblesOutOfBounds'] );
        $currentPlayerGame->setKickReturnFairCatches( $playerGame['KickReturnFairCatches'] );
        $currentPlayerGame->setPuntReturnFairCatches( $playerGame['PuntReturnFairCatches'] );
        $currentPlayerGame->setPuntTouchbacks( $playerGame['PuntTouchbacks'] );
        $currentPlayerGame->setPuntInside20( $playerGame['PuntInside20'] );
        $currentPlayerGame->setPuntNetAverage( $playerGame['PuntNetAverage'] );
        $currentPlayerGame->setExtraPointsAttempted( $playerGame['ExtraPointsAttempted'] );
        $currentPlayerGame->setBlockedKickReturnTouchdowns( $playerGame['BlockedKickReturnTouchdowns'] );
        $currentPlayerGame->setFieldGoalReturnTouchdowns( $playerGame['FieldGoalReturnTouchdowns'] );
        $currentPlayerGame->setSafeties( $playerGame['Safeties'] );
        $currentPlayerGame->setFieldGoalsHadBlocked( $playerGame['FieldGoalsHadBlocked'] );
        $currentPlayerGame->setPuntsHadBlocked( $playerGame['PuntsHadBlocked'] );
        $currentPlayerGame->setExtraPointsHadBlocked( $playerGame['ExtraPointsHadBlocked'] );
        $currentPlayerGame->setPuntLong( $playerGame['PuntLong'] );
        $currentPlayerGame->setBlockedKickReturnYards( $playerGame['BlockedKickReturnYards'] );
        $currentPlayerGame->setFieldGoalReturnYards( $playerGame['FieldGoalReturnYards'] );
        $currentPlayerGame->setPuntNetYards( $playerGame['PuntNetYards'] );
        $currentPlayerGame->setSpecialTeamsFumblesForced( $playerGame['SpecialTeamsFumblesForced'] );
        $currentPlayerGame->setSpecialTeamsFumblesRecovered( $playerGame['SpecialTeamsFumblesRecovered'] );
        $currentPlayerGame->setMiscFumblesForced( $playerGame['MiscFumblesForced'] );
        $currentPlayerGame->setMiscFumblesRecovered( $playerGame['MiscFumblesRecovered'] );
        $currentPlayerGame->setShortName( $playerGame['ShortName'] );
        $currentPlayerGame->setPlayingSurface( $playerGame['PlayingSurface'] );
        $currentPlayerGame->setIsGameOver( $playerGame['IsGameOver'] );
        $currentPlayerGame->setSafetiesAllowed( $playerGame['SafetiesAllowed'] );
        $currentPlayerGame->setStadium( $playerGame['Stadium'] );
        $currentPlayerGame->setTemperature( $playerGame['Temperature'] );
        $currentPlayerGame->setHumidity( $playerGame['Humidity'] );
        $currentPlayerGame->setWindSpeed( $playerGame['WindSpeed'] );
        $currentPlayerGame->setFanDuelSalary( $playerGame['FanDuelSalary'] );
        $currentPlayerGame->setDraftKingsSalary( $playerGame['DraftKingsSalary'] );
        $currentPlayerGame->setFantasyDataSalary( $playerGame['FantasyDataSalary'] );
        $currentPlayerGame->setOffensiveSnapsPlayed( $playerGame['OffensiveSnapsPlayed'] );
        $currentPlayerGame->setDefensiveSnapsPlayed( $playerGame['DefensiveSnapsPlayed'] );
        $currentPlayerGame->setSpecialTeamsSnapsPlayed( $playerGame['SpecialTeamsSnapsPlayed'] );
        $currentPlayerGame->setOffensiveTeamSnaps( $playerGame['OffensiveTeamSnaps'] );
        $currentPlayerGame->setDefensiveTeamSnaps( $playerGame['DefensiveTeamSnaps'] );
        $currentPlayerGame->setSpecialTeamsTeamSnaps( $playerGame['SpecialTeamsTeamSnaps'] );
        $currentPlayerGame->setVictivSalary( $playerGame['VictivSalary'] );

        return $currentPlayerGame;
    }

}