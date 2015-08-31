<?php

namespace FantasyPro\DataBundle\Builder;

use FantasyPro\DataBundle\Entity\TeamGameStats;
use FantasyPro\DataBundle\Helpers\DateHelper;

class TeamGameStatsBuilder
{
    /**
     * @var DateHelper $dateHelper
     */
    private $dateHelper;

    public function __construct( DateHelper $dateHelper )
    {
        $this->dateHelper = $dateHelper;
    }

    public function buildTeamGameStats( $currentTeamGameStats = null, $teamGameStats )
    {
        if ( ! $currentTeamGameStats) { // check if we already have the schedule stored
            $currentTeamGameStats = new TeamGameStats();
        }

        $currentTeamGameStats->setGameKey( $teamGameStats['GameKey'] );
        $currentTeamGameStats->setDate( $this->dateHelper->parseDate( $teamGameStats['Date'] ) );
        $currentTeamGameStats->setSeasonType( $teamGameStats['SeasonType'] );
        $currentTeamGameStats->setSeason( $teamGameStats['Season'] );
        $currentTeamGameStats->setWeek( $teamGameStats['Week'] );
        $currentTeamGameStats->setTeam( $teamGameStats['Team'] );
        $currentTeamGameStats->setOpponent( $teamGameStats['Opponent'] );
        $currentTeamGameStats->setHomeOrAway( $teamGameStats['HomeOrAway'] );
        $currentTeamGameStats->setScore( $teamGameStats['Score'] );
        $currentTeamGameStats->setOpponentScore( $teamGameStats['OpponentScore'] );
        $currentTeamGameStats->setTotalScore( $teamGameStats['TotalScore'] );
        $currentTeamGameStats->setStadium( $teamGameStats['Stadium'] );
        $currentTeamGameStats->setPlayingSurface( $teamGameStats['PlayingSurface'] );
        $currentTeamGameStats->setTemperature( $teamGameStats['Temperature'] );
        $currentTeamGameStats->setHumidity( $teamGameStats['Humidity'] );
        $currentTeamGameStats->setWindSpeed( $teamGameStats['WindSpeed'] );
        $currentTeamGameStats->setOverUnder( $teamGameStats['OverUnder'] );
        $currentTeamGameStats->setPointSpread( $teamGameStats['PointSpread'] );
        $currentTeamGameStats->setScoreQuarter1( $teamGameStats['ScoreQuarter1'] );
        $currentTeamGameStats->setScoreQuarter2( $teamGameStats['ScoreQuarter2'] );
        $currentTeamGameStats->setScoreQuarter3( $teamGameStats['ScoreQuarter3'] );
        $currentTeamGameStats->setScoreQuarter4( $teamGameStats['ScoreQuarter4'] );
        $currentTeamGameStats->setScoreOvertime( $teamGameStats['ScoreOvertime'] );
        $currentTeamGameStats->setTimeOfPossessionMinutes( $teamGameStats['TimeOfPossessionMinutes'] );
        $currentTeamGameStats->setTimeOfPossessionSeconds( $teamGameStats['TimeOfPossessionSeconds'] );
        $currentTeamGameStats->setTimeOfPossession( $teamGameStats['TimeOfPossession'] );
        $currentTeamGameStats->setFirstDowns( $teamGameStats['FirstDowns'] );
        $currentTeamGameStats->setFirstDownsByRushing( $teamGameStats['FirstDownsByRushing'] );
        $currentTeamGameStats->setFirstDownsByPassing( $teamGameStats['FirstDownsByPassing'] );
        $currentTeamGameStats->setFirstDownsByPenalty( $teamGameStats['FirstDownsByPenalty'] );
        $currentTeamGameStats->setOffensivePlays( $teamGameStats['OffensivePlays'] );
        $currentTeamGameStats->setOffensiveYards( $teamGameStats['OffensiveYards'] );
        $currentTeamGameStats->setOffensiveYardsPerPlay( $teamGameStats['OffensiveYardsPerPlay'] );
        $currentTeamGameStats->setTouchdowns( $teamGameStats['Touchdowns'] );
        $currentTeamGameStats->setRushingAttempts( $teamGameStats['RushingAttempts'] );
        $currentTeamGameStats->setRushingYards( $teamGameStats['RushingYards'] );
        $currentTeamGameStats->setRushingYardsPerAttempt( $teamGameStats['RushingYardsPerAttempt'] );
        $currentTeamGameStats->setRushingTouchdowns( $teamGameStats['RushingTouchdowns'] );
        $currentTeamGameStats->setPassingAttempts( $teamGameStats['PassingAttempts'] );
        $currentTeamGameStats->setPassingCompletions( $teamGameStats['PassingCompletions'] );
        $currentTeamGameStats->setPassingYards( $teamGameStats['PassingYards'] );
        $currentTeamGameStats->setPassingTouchdowns( $teamGameStats['PassingTouchdowns'] );
        $currentTeamGameStats->setPassingInterceptions( $teamGameStats['PassingInterceptions'] );
        $currentTeamGameStats->setPassingYardsPerAttempt( $teamGameStats['PassingYardsPerAttempt'] );
        $currentTeamGameStats->setPassingYardsPerCompletion( $teamGameStats['PassingYardsPerCompletion'] );
        $currentTeamGameStats->setCompletionPercentage( $teamGameStats['CompletionPercentage'] );
        $currentTeamGameStats->setPasserRating( $teamGameStats['PasserRating'] );
        $currentTeamGameStats->setThirdDownAttempts( $teamGameStats['ThirdDownAttempts'] );
        $currentTeamGameStats->setThirdDownConversions( $teamGameStats['ThirdDownConversions'] );
        $currentTeamGameStats->setThirdDownPercentage( $teamGameStats['ThirdDownPercentage'] );
        $currentTeamGameStats->setFourthDownAttempts( $teamGameStats['FourthDownAttempts'] );
        $currentTeamGameStats->setFourthDownConversions( $teamGameStats['FourthDownConversions'] );
        $currentTeamGameStats->setFourthDownPercentage( $teamGameStats['FourthDownPercentage'] );
        $currentTeamGameStats->setRedZoneAttempts( $teamGameStats['RedZoneAttempts'] );
        $currentTeamGameStats->setRedZoneConversions( $teamGameStats['RedZoneConversions'] );
        $currentTeamGameStats->setGoalToGoAttempts( $teamGameStats['GoalToGoAttempts'] );
        $currentTeamGameStats->setGoalToGoConversions( $teamGameStats['GoalToGoConversions'] );
        $currentTeamGameStats->setReturnYards( $teamGameStats['ReturnYards'] );
        $currentTeamGameStats->setPenalties( $teamGameStats['Penalties'] );
        $currentTeamGameStats->setPenaltyYards( $teamGameStats['PenaltyYards'] );
        $currentTeamGameStats->setFumbles( $teamGameStats['Fumbles'] );
        $currentTeamGameStats->setFumblesLost( $teamGameStats['FumblesLost'] );
        $currentTeamGameStats->setTimesSacked( $teamGameStats['TimesSacked'] );
        $currentTeamGameStats->setTimesSackedYards( $teamGameStats['TimesSackedYards'] );
        $currentTeamGameStats->setQuarterbackHits( $teamGameStats['QuarterbackHits'] );
        $currentTeamGameStats->setTacklesForLoss( $teamGameStats['TacklesForLoss'] );
        $currentTeamGameStats->setSafeties( $teamGameStats['Safeties'] );
        $currentTeamGameStats->setPunts( $teamGameStats['Punts'] );
        $currentTeamGameStats->setPuntYards( $teamGameStats['PuntYards'] );
        $currentTeamGameStats->setPuntAverage( $teamGameStats['PuntAverage'] );
        $currentTeamGameStats->setGiveaways( $teamGameStats['Giveaways'] );
        $currentTeamGameStats->setTakeaways( $teamGameStats['Takeaways'] );
        $currentTeamGameStats->setTurnoverDifferential( $teamGameStats['TurnoverDifferential'] );
        $currentTeamGameStats->setOpponentScoreQuarter1( $teamGameStats['OpponentScoreQuarter1'] );
        $currentTeamGameStats->setOpponentScoreQuarter2( $teamGameStats['OpponentScoreQuarter2'] );
        $currentTeamGameStats->setOpponentScoreQuarter3( $teamGameStats['OpponentScoreQuarter3'] );
        $currentTeamGameStats->setOpponentScoreQuarter4( $teamGameStats['OpponentScoreQuarter4'] );
        $currentTeamGameStats->setOpponentScoreOvertime( $teamGameStats['OpponentScoreOvertime'] );
        $currentTeamGameStats->setOpponentTimeOfPossessionMinutes( $teamGameStats['OpponentTimeOfPossessionMinutes'] );
        $currentTeamGameStats->setOpponentTimeOfPossessionSeconds( $teamGameStats['OpponentTimeOfPossessionSeconds'] );
        $currentTeamGameStats->setOpponentTimeOfPossession( $teamGameStats['OpponentTimeOfPossession'] );
        $currentTeamGameStats->setOpponentFirstDowns( $teamGameStats['OpponentFirstDowns'] );
        $currentTeamGameStats->setOpponentFirstDownsByRushing( $teamGameStats['OpponentFirstDownsByRushing'] );
        $currentTeamGameStats->setOpponentFirstDownsByPassing( $teamGameStats['OpponentFirstDownsByPassing'] );
        $currentTeamGameStats->setOpponentFirstDownsByPenalty( $teamGameStats['OpponentFirstDownsByPenalty'] );
        $currentTeamGameStats->setOpponentOffensivePlays( $teamGameStats['OpponentOffensivePlays'] );
        $currentTeamGameStats->setOpponentOffensiveYards( $teamGameStats['OpponentOffensiveYards'] );
        $currentTeamGameStats->setOpponentOffensiveYardsPerPlay( $teamGameStats['OpponentOffensiveYardsPerPlay'] );
        $currentTeamGameStats->setOpponentTouchdowns( $teamGameStats['OpponentTouchdowns'] );
        $currentTeamGameStats->setOpponentRushingAttempts( $teamGameStats['OpponentRushingAttempts'] );
        $currentTeamGameStats->setOpponentRushingYards( $teamGameStats['OpponentRushingYards'] );
        $currentTeamGameStats->setOpponentRushingYardsPerAttempt( $teamGameStats['OpponentRushingYardsPerAttempt'] );
        $currentTeamGameStats->setOpponentRushingTouchdowns( $teamGameStats['OpponentRushingTouchdowns'] );
        $currentTeamGameStats->setOpponentPassingAttempts( $teamGameStats['OpponentPassingAttempts'] );
        $currentTeamGameStats->setOpponentPassingCompletions( $teamGameStats['OpponentPassingCompletions'] );
        $currentTeamGameStats->setOpponentPassingYards( $teamGameStats['OpponentPassingYards'] );
        $currentTeamGameStats->setOpponentPassingTouchdowns( $teamGameStats['OpponentPassingTouchdowns'] );
        $currentTeamGameStats->setOpponentPassingInterceptions( $teamGameStats['OpponentPassingInterceptions'] );
        $currentTeamGameStats->setOpponentPassingYardsPerAttempt( $teamGameStats['OpponentPassingYardsPerAttempt'] );
        $currentTeamGameStats->setOpponentPassingYardsPerCompletion(
            $teamGameStats['OpponentPassingYardsPerCompletion']
        );
        $currentTeamGameStats->setOpponentCompletionPercentage( $teamGameStats['OpponentCompletionPercentage'] );
        $currentTeamGameStats->setOpponentPasserRating( $teamGameStats['OpponentPasserRating'] );
        $currentTeamGameStats->setOpponentThirdDownAttempts( $teamGameStats['OpponentThirdDownAttempts'] );
        $currentTeamGameStats->setOpponentThirdDownConversions( $teamGameStats['OpponentThirdDownConversions'] );
        $currentTeamGameStats->setOpponentThirdDownPercentage( $teamGameStats['OpponentThirdDownPercentage'] );
        $currentTeamGameStats->setOpponentFourthDownAttempts( $teamGameStats['OpponentFourthDownAttempts'] );
        $currentTeamGameStats->setOpponentFourthDownConversions( $teamGameStats['OpponentFourthDownConversions'] );
        $currentTeamGameStats->setOpponentFourthDownPercentage( $teamGameStats['OpponentFourthDownPercentage'] );
        $currentTeamGameStats->setOpponentRedZoneAttempts( $teamGameStats['OpponentRedZoneAttempts'] );
        $currentTeamGameStats->setOpponentRedZoneConversions( $teamGameStats['OpponentRedZoneConversions'] );
        $currentTeamGameStats->setOpponentGoalToGoAttempts( $teamGameStats['OpponentGoalToGoAttempts'] );
        $currentTeamGameStats->setOpponentGoalToGoConversions( $teamGameStats['OpponentGoalToGoConversions'] );
        $currentTeamGameStats->setOpponentReturnYards( $teamGameStats['OpponentReturnYards'] );
        $currentTeamGameStats->setOpponentPenalties( $teamGameStats['OpponentPenalties'] );
        $currentTeamGameStats->setOpponentPenaltyYards( $teamGameStats['OpponentPenaltyYards'] );
        $currentTeamGameStats->setOpponentFumbles( $teamGameStats['OpponentFumbles'] );
        $currentTeamGameStats->setOpponentFumblesLost( $teamGameStats['OpponentFumblesLost'] );
        $currentTeamGameStats->setOpponentTimesSacked( $teamGameStats['OpponentTimesSacked'] );
        $currentTeamGameStats->setOpponentTimesSackedYards( $teamGameStats['OpponentTimesSackedYards'] );
        $currentTeamGameStats->setOpponentQuarterbackHits( $teamGameStats['OpponentQuarterbackHits'] );
        $currentTeamGameStats->setOpponentTacklesForLoss( $teamGameStats['OpponentTacklesForLoss'] );
        $currentTeamGameStats->setOpponentSafeties( $teamGameStats['OpponentSafeties'] );
        $currentTeamGameStats->setOpponentPunts( $teamGameStats['OpponentPunts'] );
        $currentTeamGameStats->setOpponentPuntYards( $teamGameStats['OpponentPuntYards'] );
        $currentTeamGameStats->setOpponentPuntAverage( $teamGameStats['OpponentPuntAverage'] );
        $currentTeamGameStats->setOpponentGiveaways( $teamGameStats['OpponentGiveaways'] );
        $currentTeamGameStats->setOpponentTakeaways( $teamGameStats['OpponentTakeaways'] );
        $currentTeamGameStats->setOpponentTurnoverDifferential( $teamGameStats['OpponentTurnoverDifferential'] );
        $currentTeamGameStats->setRedZonePercentage( $teamGameStats['RedZonePercentage'] );
        $currentTeamGameStats->setGoalToGoPercentage( $teamGameStats['GoalToGoPercentage'] );
        $currentTeamGameStats->setQuarterbackHitsDifferential( $teamGameStats['QuarterbackHitsDifferential'] );
        $currentTeamGameStats->setTacklesForLossDifferential( $teamGameStats['TacklesForLossDifferential'] );
        $currentTeamGameStats->setQuarterbackSacksDifferential( $teamGameStats['QuarterbackSacksDifferential'] );
        $currentTeamGameStats->setTacklesForLossPercentage( $teamGameStats['TacklesForLossPercentage'] );
        $currentTeamGameStats->setQuarterbackHitsPercentage( $teamGameStats['QuarterbackHitsPercentage'] );
        $currentTeamGameStats->setTimesSackedPercentage( $teamGameStats['TimesSackedPercentage'] );
        $currentTeamGameStats->setOpponentRedZonePercentage( $teamGameStats['OpponentRedZonePercentage'] );
        $currentTeamGameStats->setOpponentGoalToGoPercentage( $teamGameStats['OpponentGoalToGoPercentage'] );
        $currentTeamGameStats->setOpponentQuarterbackHitsDifferential(
            $teamGameStats['OpponentQuarterbackHitsDifferential']
        );
        $currentTeamGameStats->setOpponentTacklesForLossDifferential(
            $teamGameStats['OpponentTacklesForLossDifferential']
        );
        $currentTeamGameStats->setOpponentQuarterbackSacksDifferential(
            $teamGameStats['OpponentQuarterbackSacksDifferential']
        );
        $currentTeamGameStats->setOpponentTacklesForLossPercentage(
            $teamGameStats['OpponentTacklesForLossPercentage']
        );
        $currentTeamGameStats->setOpponentQuarterbackHitsPercentage(
            $teamGameStats['OpponentQuarterbackHitsPercentage']
        );
        $currentTeamGameStats->setOpponentTimesSackedPercentage( $teamGameStats['OpponentTimesSackedPercentage'] );
        $currentTeamGameStats->setKickoffs( $teamGameStats['Kickoffs'] );
        $currentTeamGameStats->setKickoffsInEndZone( $teamGameStats['KickoffsInEndZone'] );
        $currentTeamGameStats->setKickoffTouchbacks( $teamGameStats['KickoffTouchbacks'] );
        $currentTeamGameStats->setPuntsHadBlocked( $teamGameStats['PuntsHadBlocked'] );
        $currentTeamGameStats->setPuntNetAverage( $teamGameStats['PuntNetAverage'] );
        $currentTeamGameStats->setExtraPointKickingAttempts( $teamGameStats['ExtraPointKickingAttempts'] );
        $currentTeamGameStats->setExtraPointKickingConversions( $teamGameStats['ExtraPointKickingConversions'] );
        $currentTeamGameStats->setExtraPointsHadBlocked( $teamGameStats['ExtraPointsHadBlocked'] );
        $currentTeamGameStats->setExtraPointPassingAttempts( $teamGameStats['ExtraPointPassingAttempts'] );
        $currentTeamGameStats->setExtraPointPassingConversions( $teamGameStats['ExtraPointPassingConversions'] );
        $currentTeamGameStats->setExtraPointRushingAttempts( $teamGameStats['ExtraPointRushingAttempts'] );
        $currentTeamGameStats->setExtraPointRushingConversions( $teamGameStats['ExtraPointRushingConversions'] );
        $currentTeamGameStats->setFieldGoalAttempts( $teamGameStats['FieldGoalAttempts'] );
        $currentTeamGameStats->setFieldGoalsMade( $teamGameStats['FieldGoalsMade'] );
        $currentTeamGameStats->setFieldGoalsHadBlocked( $teamGameStats['FieldGoalsHadBlocked'] );
        $currentTeamGameStats->setPuntReturns( $teamGameStats['PuntReturns'] );
        $currentTeamGameStats->setPuntReturnYards( $teamGameStats['PuntReturnYards'] );
        $currentTeamGameStats->setKickReturns( $teamGameStats['KickReturns'] );
        $currentTeamGameStats->setKickReturnYards( $teamGameStats['KickReturnYards'] );
        $currentTeamGameStats->setInterceptionReturns( $teamGameStats['InterceptionReturns'] );
        $currentTeamGameStats->setInterceptionReturnYards( $teamGameStats['InterceptionReturnYards'] );
        $currentTeamGameStats->setOpponentKickoffs( $teamGameStats['OpponentKickoffs'] );
        $currentTeamGameStats->setOpponentKickoffsInEndZone( $teamGameStats['OpponentKickoffsInEndZone'] );
        $currentTeamGameStats->setOpponentKickoffTouchbacks( $teamGameStats['OpponentKickoffTouchbacks'] );
        $currentTeamGameStats->setOpponentPuntsHadBlocked( $teamGameStats['OpponentPuntsHadBlocked'] );
        $currentTeamGameStats->setOpponentPuntNetAverage( $teamGameStats['OpponentPuntNetAverage'] );
        $currentTeamGameStats->setOpponentExtraPointKickingAttempts(
            $teamGameStats['OpponentExtraPointKickingAttempts']
        );
        $currentTeamGameStats->setOpponentExtraPointKickingConversions(
            $teamGameStats['OpponentExtraPointKickingConversions']
        );
        $currentTeamGameStats->setOpponentExtraPointsHadBlocked( $teamGameStats['OpponentExtraPointsHadBlocked'] );
        $currentTeamGameStats->setOpponentExtraPointPassingAttempts(
            $teamGameStats['OpponentExtraPointPassingAttempts']
        );
        $currentTeamGameStats->setOpponentExtraPointPassingConversions(
            $teamGameStats['OpponentExtraPointPassingConversions']
        );
        $currentTeamGameStats->setOpponentExtraPointRushingAttempts(
            $teamGameStats['OpponentExtraPointRushingAttempts']
        );
        $currentTeamGameStats->setOpponentExtraPointRushingConversions(
            $teamGameStats['OpponentExtraPointRushingConversions']
        );
        $currentTeamGameStats->setOpponentFieldGoalAttempts( $teamGameStats['OpponentFieldGoalAttempts'] );
        $currentTeamGameStats->setOpponentFieldGoalsMade( $teamGameStats['OpponentFieldGoalsMade'] );
        $currentTeamGameStats->setOpponentFieldGoalsHadBlocked( $teamGameStats['OpponentFieldGoalsHadBlocked'] );
        $currentTeamGameStats->setOpponentPuntReturns( $teamGameStats['OpponentPuntReturns'] );
        $currentTeamGameStats->setOpponentPuntReturnYards( $teamGameStats['OpponentPuntReturnYards'] );
        $currentTeamGameStats->setOpponentKickReturns( $teamGameStats['OpponentKickReturns'] );
        $currentTeamGameStats->setOpponentKickReturnYards( $teamGameStats['OpponentKickReturnYards'] );
        $currentTeamGameStats->setOpponentInterceptionReturns( $teamGameStats['OpponentInterceptionReturns'] );
        $currentTeamGameStats->setOpponentInterceptionReturnYards( $teamGameStats['OpponentInterceptionReturnYards'] );
        $currentTeamGameStats->setSoloTackles( $teamGameStats['SoloTackles'] );
        $currentTeamGameStats->setAssistedTackles( $teamGameStats['AssistedTackles'] );
        $currentTeamGameStats->setSacks( $teamGameStats['Sacks'] );
        $currentTeamGameStats->setSackYards( $teamGameStats['SackYards'] );
        $currentTeamGameStats->setPassesDefended( $teamGameStats['PassesDefended'] );
        $currentTeamGameStats->setFumblesForced( $teamGameStats['FumblesForced'] );
        $currentTeamGameStats->setFumblesRecovered( $teamGameStats['FumblesRecovered'] );
        $currentTeamGameStats->setFumbleReturnYards( $teamGameStats['FumbleReturnYards'] );
        $currentTeamGameStats->setFumbleReturnTouchdowns( $teamGameStats['FumbleReturnTouchdowns'] );
        $currentTeamGameStats->setInterceptionReturnTouchdowns( $teamGameStats['InterceptionReturnTouchdowns'] );
        $currentTeamGameStats->setBlockedKicks( $teamGameStats['BlockedKicks'] );
        $currentTeamGameStats->setPuntReturnTouchdowns( $teamGameStats['PuntReturnTouchdowns'] );
        $currentTeamGameStats->setPuntReturnLong( $teamGameStats['PuntReturnLong'] );
        $currentTeamGameStats->setKickReturnTouchdowns( $teamGameStats['KickReturnTouchdowns'] );
        $currentTeamGameStats->setKickReturnLong( $teamGameStats['KickReturnLong'] );
        $currentTeamGameStats->setBlockedKickReturnYards( $teamGameStats['BlockedKickReturnYards'] );
        $currentTeamGameStats->setBlockedKickReturnTouchdowns( $teamGameStats['BlockedKickReturnTouchdowns'] );
        $currentTeamGameStats->setFieldGoalReturnYards( $teamGameStats['FieldGoalReturnYards'] );
        $currentTeamGameStats->setFieldGoalReturnTouchdowns( $teamGameStats['FieldGoalReturnTouchdowns'] );
        $currentTeamGameStats->setPuntNetYards( $teamGameStats['PuntNetYards'] );
        $currentTeamGameStats->setOpponentSoloTackles( $teamGameStats['OpponentSoloTackles'] );
        $currentTeamGameStats->setOpponentAssistedTackles( $teamGameStats['OpponentAssistedTackles'] );
        $currentTeamGameStats->setOpponentSacks( $teamGameStats['OpponentSacks'] );
        $currentTeamGameStats->setOpponentSackYards( $teamGameStats['OpponentSackYards'] );
        $currentTeamGameStats->setOpponentPassesDefended( $teamGameStats['OpponentPassesDefended'] );
        $currentTeamGameStats->setOpponentFumblesForced( $teamGameStats['OpponentFumblesForced'] );
        $currentTeamGameStats->setOpponentFumblesRecovered( $teamGameStats['OpponentFumblesRecovered'] );
        $currentTeamGameStats->setOpponentFumbleReturnYards( $teamGameStats['OpponentFumbleReturnYards'] );
        $currentTeamGameStats->setOpponentFumbleReturnTouchdowns( $teamGameStats['OpponentFumbleReturnTouchdowns'] );
        $currentTeamGameStats->setOpponentInterceptionReturnTouchdowns(
            $teamGameStats['OpponentInterceptionReturnTouchdowns']
        );
        $currentTeamGameStats->setOpponentBlockedKicks( $teamGameStats['OpponentBlockedKicks'] );
        $currentTeamGameStats->setOpponentPuntReturnTouchdowns( $teamGameStats['OpponentPuntReturnTouchdowns'] );
        $currentTeamGameStats->setOpponentPuntReturnLong( $teamGameStats['OpponentPuntReturnLong'] );
        $currentTeamGameStats->setOpponentKickReturnTouchdowns( $teamGameStats['OpponentKickReturnTouchdowns'] );
        $currentTeamGameStats->setOpponentKickReturnLong( $teamGameStats['OpponentKickReturnLong'] );
        $currentTeamGameStats->setOpponentBlockedKickReturnYards( $teamGameStats['OpponentBlockedKickReturnYards'] );
        $currentTeamGameStats->setOpponentBlockedKickReturnTouchdowns(
            $teamGameStats['OpponentBlockedKickReturnTouchdowns']
        );
        $currentTeamGameStats->setOpponentFieldGoalReturnYards( $teamGameStats['OpponentFieldGoalReturnYards'] );
        $currentTeamGameStats->setOpponentFieldGoalReturnTouchdowns(
            $teamGameStats['OpponentFieldGoalReturnTouchdowns']
        );
        $currentTeamGameStats->setOpponentPuntNetYards( $teamGameStats['OpponentPuntNetYards'] );
        $currentTeamGameStats->setIsGameOver( $teamGameStats['IsGameOver'] );
        $currentTeamGameStats->setTeamName( $teamGameStats['TeamName'] );
        $currentTeamGameStats->setDayOfWeek( $teamGameStats['DayOfWeek'] );
        $currentTeamGameStats->setPassingDropbacks( $teamGameStats['PassingDropbacks'] );
        $currentTeamGameStats->setOpponentPassingDropbacks( $teamGameStats['OpponentPassingDropbacks'] );
        $currentTeamGameStats->setTeamGameID( $teamGameStats['TeamGameID'] );
        $currentTeamGameStats->setTwoPointConversionReturns( $teamGameStats['TwoPointConversionReturns'] );
        $currentTeamGameStats->setOpponentTwoPointConversionReturns(
            $teamGameStats['OpponentTwoPointConversionReturns']
        );

        return $currentTeamGameStats;
    }
}