<?php

namespace FantasyPro\DataBundle\Builder;

use FantasyPro\DataBundle\Entity\TeamSeasonStats;

class TeamSeasonStatsBuilder
{

    public function buildTeamSeasonStats( $currentTeamSeasonStats = null, $teamSeasonStats )
    {
        if ( ! $currentTeamSeasonStats) { // check if we already have the schedule stored
            $currentTeamSeasonStats = new TeamSeasonStats();
        }
        $currentTeamSeasonStats->setSeasonType( $teamSeasonStats['SeasonType'] );
        $currentTeamSeasonStats->setSeason( $teamSeasonStats['Season'] );
        $currentTeamSeasonStats->setTeam( $teamSeasonStats['Team'] );
        $currentTeamSeasonStats->setScore( $teamSeasonStats['Score'] );
        $currentTeamSeasonStats->setOpponentScore( $teamSeasonStats['OpponentScore'] );
        $currentTeamSeasonStats->setTotalScore( $teamSeasonStats['TotalScore'] );
        $currentTeamSeasonStats->setTemperature( $teamSeasonStats['Temperature'] );
        $currentTeamSeasonStats->setHumidity( $teamSeasonStats['Humidity'] );
        $currentTeamSeasonStats->setWindSpeed( $teamSeasonStats['WindSpeed'] );
        $currentTeamSeasonStats->setOverUnder( $teamSeasonStats['OverUnder'] );
        $currentTeamSeasonStats->setPointSpread( $teamSeasonStats['PointSpread'] );
        $currentTeamSeasonStats->setScoreQuarter1( $teamSeasonStats['ScoreQuarter1'] );
        $currentTeamSeasonStats->setScoreQuarter2( $teamSeasonStats['ScoreQuarter2'] );
        $currentTeamSeasonStats->setScoreQuarter3( $teamSeasonStats['ScoreQuarter3'] );
        $currentTeamSeasonStats->setScoreQuarter4( $teamSeasonStats['ScoreQuarter4'] );
        $currentTeamSeasonStats->setScoreOvertime( $teamSeasonStats['ScoreOvertime'] );
        $currentTeamSeasonStats->setTimeOfPossession( $teamSeasonStats['TimeOfPossession'] );
        $currentTeamSeasonStats->setFirstDowns( $teamSeasonStats['FirstDowns'] );
        $currentTeamSeasonStats->setFirstDownsByRushing( $teamSeasonStats['FirstDownsByRushing'] );
        $currentTeamSeasonStats->setFirstDownsByPassing( $teamSeasonStats['FirstDownsByPassing'] );
        $currentTeamSeasonStats->setFirstDownsByPenalty( $teamSeasonStats['FirstDownsByPenalty'] );
        $currentTeamSeasonStats->setOffensivePlays( $teamSeasonStats['OffensivePlays'] );
        $currentTeamSeasonStats->setOffensiveYards( $teamSeasonStats['OffensiveYards'] );
        $currentTeamSeasonStats->setOffensiveYardsPerPlay( $teamSeasonStats['OffensiveYardsPerPlay'] );
        $currentTeamSeasonStats->setTouchdowns( $teamSeasonStats['Touchdowns'] );
        $currentTeamSeasonStats->setRushingAttempts( $teamSeasonStats['RushingAttempts'] );
        $currentTeamSeasonStats->setRushingYards( $teamSeasonStats['RushingYards'] );
        $currentTeamSeasonStats->setRushingYardsPerAttempt( $teamSeasonStats['RushingYardsPerAttempt'] );
        $currentTeamSeasonStats->setRushingTouchdowns( $teamSeasonStats['RushingTouchdowns'] );
        $currentTeamSeasonStats->setPassingAttempts( $teamSeasonStats['PassingAttempts'] );
        $currentTeamSeasonStats->setPassingCompletions( $teamSeasonStats['PassingCompletions'] );
        $currentTeamSeasonStats->setPassingYards( $teamSeasonStats['PassingYards'] );
        $currentTeamSeasonStats->setPassingTouchdowns( $teamSeasonStats['PassingTouchdowns'] );
        $currentTeamSeasonStats->setPassingInterceptions( $teamSeasonStats['PassingInterceptions'] );
        $currentTeamSeasonStats->setPassingYardsPerAttempt( $teamSeasonStats['PassingYardsPerAttempt'] );
        $currentTeamSeasonStats->setPassingYardsPerCompletion( $teamSeasonStats['PassingYardsPerCompletion'] );
        $currentTeamSeasonStats->setCompletionPercentage( $teamSeasonStats['CompletionPercentage'] );
        $currentTeamSeasonStats->setPasserRating( $teamSeasonStats['PasserRating'] );
        $currentTeamSeasonStats->setThirdDownAttempts( $teamSeasonStats['ThirdDownAttempts'] );
        $currentTeamSeasonStats->setThirdDownConversions( $teamSeasonStats['ThirdDownConversions'] );
        $currentTeamSeasonStats->setThirdDownPercentage( $teamSeasonStats['ThirdDownPercentage'] );
        $currentTeamSeasonStats->setFourthDownAttempts( $teamSeasonStats['FourthDownAttempts'] );
        $currentTeamSeasonStats->setFourthDownConversions( $teamSeasonStats['FourthDownConversions'] );
        $currentTeamSeasonStats->setFourthDownPercentage( $teamSeasonStats['FourthDownPercentage'] );
        $currentTeamSeasonStats->setRedZoneAttempts( $teamSeasonStats['RedZoneAttempts'] );
        $currentTeamSeasonStats->setRedZoneConversions( $teamSeasonStats['RedZoneConversions'] );
        $currentTeamSeasonStats->setGoalToGoAttempts( $teamSeasonStats['GoalToGoAttempts'] );
        $currentTeamSeasonStats->setGoalToGoConversions( $teamSeasonStats['GoalToGoConversions'] );
        $currentTeamSeasonStats->setReturnYards( $teamSeasonStats['ReturnYards'] );
        $currentTeamSeasonStats->setPenalties( $teamSeasonStats['Penalties'] );
        $currentTeamSeasonStats->setPenaltyYards( $teamSeasonStats['PenaltyYards'] );
        $currentTeamSeasonStats->setFumbles( $teamSeasonStats['Fumbles'] );
        $currentTeamSeasonStats->setFumblesLost( $teamSeasonStats['FumblesLost'] );
        $currentTeamSeasonStats->setTimesSacked( $teamSeasonStats['TimesSacked'] );
        $currentTeamSeasonStats->setTimesSackedYards( $teamSeasonStats['TimesSackedYards'] );
        $currentTeamSeasonStats->setQuarterbackHits( $teamSeasonStats['QuarterbackHits'] );
        $currentTeamSeasonStats->setTacklesForLoss( $teamSeasonStats['TacklesForLoss'] );
        $currentTeamSeasonStats->setSafeties( $teamSeasonStats['Safeties'] );
        $currentTeamSeasonStats->setPunts( $teamSeasonStats['Punts'] );
        $currentTeamSeasonStats->setPuntYards( $teamSeasonStats['PuntYards'] );
        $currentTeamSeasonStats->setPuntAverage( $teamSeasonStats['PuntAverage'] );
        $currentTeamSeasonStats->setGiveaways( $teamSeasonStats['Giveaways'] );
        $currentTeamSeasonStats->setTakeaways( $teamSeasonStats['Takeaways'] );
        $currentTeamSeasonStats->setTurnoverDifferential( $teamSeasonStats['TurnoverDifferential'] );
        $currentTeamSeasonStats->setOpponentScoreQuarter1( $teamSeasonStats['OpponentScoreQuarter1'] );
        $currentTeamSeasonStats->setOpponentScoreQuarter2( $teamSeasonStats['OpponentScoreQuarter2'] );
        $currentTeamSeasonStats->setOpponentScoreQuarter3( $teamSeasonStats['OpponentScoreQuarter3'] );
        $currentTeamSeasonStats->setOpponentScoreQuarter4( $teamSeasonStats['OpponentScoreQuarter4'] );
        $currentTeamSeasonStats->setOpponentScoreOvertime( $teamSeasonStats['OpponentScoreOvertime'] );
        $currentTeamSeasonStats->setOpponentTimeOfPossession( $teamSeasonStats['OpponentTimeOfPossession'] );
        $currentTeamSeasonStats->setOpponentFirstDowns( $teamSeasonStats['OpponentFirstDowns'] );
        $currentTeamSeasonStats->setOpponentFirstDownsByRushing( $teamSeasonStats['OpponentFirstDownsByRushing'] );
        $currentTeamSeasonStats->setOpponentFirstDownsByPassing( $teamSeasonStats['OpponentFirstDownsByPassing'] );
        $currentTeamSeasonStats->setOpponentFirstDownsByPenalty( $teamSeasonStats['OpponentFirstDownsByPenalty'] );
        $currentTeamSeasonStats->setOpponentOffensivePlays( $teamSeasonStats['OpponentOffensivePlays'] );
        $currentTeamSeasonStats->setOpponentOffensiveYards( $teamSeasonStats['OpponentOffensiveYards'] );
        $currentTeamSeasonStats->setOpponentOffensiveYardsPerPlay( $teamSeasonStats['OpponentOffensiveYardsPerPlay'] );
        $currentTeamSeasonStats->setOpponentTouchdowns( $teamSeasonStats['OpponentTouchdowns'] );
        $currentTeamSeasonStats->setOpponentRushingAttempts( $teamSeasonStats['OpponentRushingAttempts'] );
        $currentTeamSeasonStats->setOpponentRushingYards( $teamSeasonStats['OpponentRushingYards'] );
        $currentTeamSeasonStats->setOpponentRushingYardsPerAttempt(
            $teamSeasonStats['OpponentRushingYardsPerAttempt']
        );
        $currentTeamSeasonStats->setOpponentRushingTouchdowns( $teamSeasonStats['OpponentRushingTouchdowns'] );
        $currentTeamSeasonStats->setOpponentPassingAttempts( $teamSeasonStats['OpponentPassingAttempts'] );
        $currentTeamSeasonStats->setOpponentPassingCompletions( $teamSeasonStats['OpponentPassingCompletions'] );
        $currentTeamSeasonStats->setOpponentPassingYards( $teamSeasonStats['OpponentPassingYards'] );
        $currentTeamSeasonStats->setOpponentPassingTouchdowns( $teamSeasonStats['OpponentPassingTouchdowns'] );
        $currentTeamSeasonStats->setOpponentPassingInterceptions( $teamSeasonStats['OpponentPassingInterceptions'] );
        $currentTeamSeasonStats->setOpponentPassingYardsPerAttempt(
            $teamSeasonStats['OpponentPassingYardsPerAttempt']
        );
        $currentTeamSeasonStats->setOpponentPassingYardsPerCompletion(
            $teamSeasonStats['OpponentPassingYardsPerCompletion']
        );
        $currentTeamSeasonStats->setOpponentCompletionPercentage( $teamSeasonStats['OpponentCompletionPercentage'] );
        $currentTeamSeasonStats->setOpponentPasserRating( $teamSeasonStats['OpponentPasserRating'] );
        $currentTeamSeasonStats->setOpponentThirdDownAttempts( $teamSeasonStats['OpponentThirdDownAttempts'] );
        $currentTeamSeasonStats->setOpponentThirdDownConversions( $teamSeasonStats['OpponentThirdDownConversions'] );
        $currentTeamSeasonStats->setOpponentThirdDownPercentage( $teamSeasonStats['OpponentThirdDownPercentage'] );
        $currentTeamSeasonStats->setOpponentFourthDownAttempts( $teamSeasonStats['OpponentFourthDownAttempts'] );
        $currentTeamSeasonStats->setOpponentFourthDownConversions( $teamSeasonStats['OpponentFourthDownConversions'] );
        $currentTeamSeasonStats->setOpponentFourthDownPercentage( $teamSeasonStats['OpponentFourthDownPercentage'] );
        $currentTeamSeasonStats->setOpponentRedZoneAttempts( $teamSeasonStats['OpponentRedZoneAttempts'] );
        $currentTeamSeasonStats->setOpponentRedZoneConversions( $teamSeasonStats['OpponentRedZoneConversions'] );
        $currentTeamSeasonStats->setOpponentGoalToGoAttempts( $teamSeasonStats['OpponentGoalToGoAttempts'] );
        $currentTeamSeasonStats->setOpponentGoalToGoConversions( $teamSeasonStats['OpponentGoalToGoConversions'] );
        $currentTeamSeasonStats->setOpponentReturnYards( $teamSeasonStats['OpponentReturnYards'] );
        $currentTeamSeasonStats->setOpponentPenalties( $teamSeasonStats['OpponentPenalties'] );
        $currentTeamSeasonStats->setOpponentPenaltyYards( $teamSeasonStats['OpponentPenaltyYards'] );
        $currentTeamSeasonStats->setOpponentFumbles( $teamSeasonStats['OpponentFumbles'] );
        $currentTeamSeasonStats->setOpponentFumblesLost( $teamSeasonStats['OpponentFumblesLost'] );
        $currentTeamSeasonStats->setOpponentTimesSacked( $teamSeasonStats['OpponentTimesSacked'] );
        $currentTeamSeasonStats->setOpponentTimesSackedYards( $teamSeasonStats['OpponentTimesSackedYards'] );
        $currentTeamSeasonStats->setOpponentQuarterbackHits( $teamSeasonStats['OpponentQuarterbackHits'] );
        $currentTeamSeasonStats->setOpponentTacklesForLoss( $teamSeasonStats['OpponentTacklesForLoss'] );
        $currentTeamSeasonStats->setOpponentSafeties( $teamSeasonStats['OpponentSafeties'] );
        $currentTeamSeasonStats->setOpponentPunts( $teamSeasonStats['OpponentPunts'] );
        $currentTeamSeasonStats->setOpponentPuntYards( $teamSeasonStats['OpponentPuntYards'] );
        $currentTeamSeasonStats->setOpponentPuntAverage( $teamSeasonStats['OpponentPuntAverage'] );
        $currentTeamSeasonStats->setOpponentGiveaways( $teamSeasonStats['OpponentGiveaways'] );
        $currentTeamSeasonStats->setOpponentTakeaways( $teamSeasonStats['OpponentTakeaways'] );
        $currentTeamSeasonStats->setOpponentTurnoverDifferential( $teamSeasonStats['OpponentTurnoverDifferential'] );
        $currentTeamSeasonStats->setRedZonePercentage( $teamSeasonStats['RedZonePercentage'] );
        $currentTeamSeasonStats->setGoalToGoPercentage( $teamSeasonStats['GoalToGoPercentage'] );
        $currentTeamSeasonStats->setQuarterbackHitsDifferential( $teamSeasonStats['QuarterbackHitsDifferential'] );
        $currentTeamSeasonStats->setTacklesForLossDifferential( $teamSeasonStats['TacklesForLossDifferential'] );
        $currentTeamSeasonStats->setQuarterbackSacksDifferential( $teamSeasonStats['QuarterbackSacksDifferential'] );
        $currentTeamSeasonStats->setTacklesForLossPercentage( $teamSeasonStats['TacklesForLossPercentage'] );
        $currentTeamSeasonStats->setQuarterbackHitsPercentage( $teamSeasonStats['QuarterbackHitsPercentage'] );
        $currentTeamSeasonStats->setTimesSackedPercentage( $teamSeasonStats['TimesSackedPercentage'] );
        $currentTeamSeasonStats->setOpponentRedZonePercentage( $teamSeasonStats['OpponentRedZonePercentage'] );
        $currentTeamSeasonStats->setOpponentGoalToGoPercentage( $teamSeasonStats['OpponentGoalToGoPercentage'] );
        $currentTeamSeasonStats->setOpponentQuarterbackHitsDifferential(
            $teamSeasonStats['OpponentQuarterbackHitsDifferential']
        );
        $currentTeamSeasonStats->setOpponentTacklesForLossDifferential(
            $teamSeasonStats['OpponentTacklesForLossDifferential']
        );
        $currentTeamSeasonStats->setOpponentQuarterbackSacksDifferential(
            $teamSeasonStats['OpponentQuarterbackSacksDifferential']
        );
        $currentTeamSeasonStats->setOpponentTacklesForLossPercentage(
            $teamSeasonStats['OpponentTacklesForLossPercentage']
        );
        $currentTeamSeasonStats->setOpponentQuarterbackHitsPercentage(
            $teamSeasonStats['OpponentQuarterbackHitsPercentage']
        );
        $currentTeamSeasonStats->setOpponentTimesSackedPercentage( $teamSeasonStats['OpponentTimesSackedPercentage'] );
        $currentTeamSeasonStats->setKickoffs( $teamSeasonStats['Kickoffs'] );
        $currentTeamSeasonStats->setKickoffsInEndZone( $teamSeasonStats['KickoffsInEndZone'] );
        $currentTeamSeasonStats->setKickoffTouchbacks( $teamSeasonStats['KickoffTouchbacks'] );
        $currentTeamSeasonStats->setPuntsHadBlocked( $teamSeasonStats['PuntsHadBlocked'] );
        $currentTeamSeasonStats->setPuntNetAverage( $teamSeasonStats['PuntNetAverage'] );
        $currentTeamSeasonStats->setExtraPointKickingAttempts( $teamSeasonStats['ExtraPointKickingAttempts'] );
        $currentTeamSeasonStats->setExtraPointKickingConversions( $teamSeasonStats['ExtraPointKickingConversions'] );
        $currentTeamSeasonStats->setExtraPointsHadBlocked( $teamSeasonStats['ExtraPointsHadBlocked'] );
        $currentTeamSeasonStats->setExtraPointPassingAttempts( $teamSeasonStats['ExtraPointPassingAttempts'] );
        $currentTeamSeasonStats->setExtraPointPassingConversions( $teamSeasonStats['ExtraPointPassingConversions'] );
        $currentTeamSeasonStats->setExtraPointRushingAttempts( $teamSeasonStats['ExtraPointRushingAttempts'] );
        $currentTeamSeasonStats->setExtraPointRushingConversions( $teamSeasonStats['ExtraPointRushingConversions'] );
        $currentTeamSeasonStats->setFieldGoalAttempts( $teamSeasonStats['FieldGoalAttempts'] );
        $currentTeamSeasonStats->setFieldGoalsMade( $teamSeasonStats['FieldGoalsMade'] );
        $currentTeamSeasonStats->setFieldGoalsHadBlocked( $teamSeasonStats['FieldGoalsHadBlocked'] );
        $currentTeamSeasonStats->setPuntReturns( $teamSeasonStats['PuntReturns'] );
        $currentTeamSeasonStats->setPuntReturnYards( $teamSeasonStats['PuntReturnYards'] );
        $currentTeamSeasonStats->setKickReturns( $teamSeasonStats['KickReturns'] );
        $currentTeamSeasonStats->setKickReturnYards( $teamSeasonStats['KickReturnYards'] );
        $currentTeamSeasonStats->setInterceptionReturns( $teamSeasonStats['InterceptionReturns'] );
        $currentTeamSeasonStats->setInterceptionReturnYards( $teamSeasonStats['InterceptionReturnYards'] );
        $currentTeamSeasonStats->setOpponentKickoffs( $teamSeasonStats['OpponentKickoffs'] );
        $currentTeamSeasonStats->setOpponentKickoffsInEndZone( $teamSeasonStats['OpponentKickoffsInEndZone'] );
        $currentTeamSeasonStats->setOpponentKickoffTouchbacks( $teamSeasonStats['OpponentKickoffTouchbacks'] );
        $currentTeamSeasonStats->setOpponentPuntsHadBlocked( $teamSeasonStats['OpponentPuntsHadBlocked'] );
        $currentTeamSeasonStats->setOpponentPuntNetAverage( $teamSeasonStats['OpponentPuntNetAverage'] );
        $currentTeamSeasonStats->setOpponentExtraPointKickingAttempts(
            $teamSeasonStats['OpponentExtraPointKickingAttempts']
        );
        $currentTeamSeasonStats->setOpponentExtraPointKickingConversions(
            $teamSeasonStats['OpponentExtraPointKickingConversions']
        );
        $currentTeamSeasonStats->setOpponentExtraPointsHadBlocked( $teamSeasonStats['OpponentExtraPointsHadBlocked'] );
        $currentTeamSeasonStats->setOpponentExtraPointPassingAttempts(
            $teamSeasonStats['OpponentExtraPointPassingAttempts']
        );
        $currentTeamSeasonStats->setOpponentExtraPointPassingConversions(
            $teamSeasonStats['OpponentExtraPointPassingConversions']
        );
        $currentTeamSeasonStats->setOpponentExtraPointRushingAttempts(
            $teamSeasonStats['OpponentExtraPointRushingAttempts']
        );
        $currentTeamSeasonStats->setOpponentExtraPointRushingConversions(
            $teamSeasonStats['OpponentExtraPointRushingConversions']
        );
        $currentTeamSeasonStats->setOpponentFieldGoalAttempts( $teamSeasonStats['OpponentFieldGoalAttempts'] );
        $currentTeamSeasonStats->setOpponentFieldGoalsMade( $teamSeasonStats['OpponentFieldGoalsMade'] );
        $currentTeamSeasonStats->setOpponentFieldGoalsHadBlocked( $teamSeasonStats['OpponentFieldGoalsHadBlocked'] );
        $currentTeamSeasonStats->setOpponentPuntReturns( $teamSeasonStats['OpponentPuntReturns'] );
        $currentTeamSeasonStats->setOpponentPuntReturnYards( $teamSeasonStats['OpponentPuntReturnYards'] );
        $currentTeamSeasonStats->setOpponentKickReturns( $teamSeasonStats['OpponentKickReturns'] );
        $currentTeamSeasonStats->setOpponentKickReturnYards( $teamSeasonStats['OpponentKickReturnYards'] );
        $currentTeamSeasonStats->setOpponentInterceptionReturns( $teamSeasonStats['OpponentInterceptionReturns'] );
        $currentTeamSeasonStats->setOpponentInterceptionReturnYards(
            $teamSeasonStats['OpponentInterceptionReturnYards']
        );
        $currentTeamSeasonStats->setSoloTackles( $teamSeasonStats['SoloTackles'] );
        $currentTeamSeasonStats->setAssistedTackles( $teamSeasonStats['AssistedTackles'] );
        $currentTeamSeasonStats->setSacks( $teamSeasonStats['Sacks'] );
        $currentTeamSeasonStats->setSackYards( $teamSeasonStats['SackYards'] );
        $currentTeamSeasonStats->setPassesDefended( $teamSeasonStats['PassesDefended'] );
        $currentTeamSeasonStats->setFumblesForced( $teamSeasonStats['FumblesForced'] );
        $currentTeamSeasonStats->setFumblesRecovered( $teamSeasonStats['FumblesRecovered'] );
        $currentTeamSeasonStats->setFumbleReturnYards( $teamSeasonStats['FumbleReturnYards'] );
        $currentTeamSeasonStats->setFumbleReturnTouchdowns( $teamSeasonStats['FumbleReturnTouchdowns'] );
        $currentTeamSeasonStats->setInterceptionReturnTouchdowns( $teamSeasonStats['InterceptionReturnTouchdowns'] );
        $currentTeamSeasonStats->setBlockedKicks( $teamSeasonStats['BlockedKicks'] );
        $currentTeamSeasonStats->setPuntReturnTouchdowns( $teamSeasonStats['PuntReturnTouchdowns'] );
        $currentTeamSeasonStats->setPuntReturnLong( $teamSeasonStats['PuntReturnLong'] );
        $currentTeamSeasonStats->setKickReturnTouchdowns( $teamSeasonStats['KickReturnTouchdowns'] );
        $currentTeamSeasonStats->setKickReturnLong( $teamSeasonStats['KickReturnLong'] );
        $currentTeamSeasonStats->setBlockedKickReturnYards( $teamSeasonStats['BlockedKickReturnYards'] );
        $currentTeamSeasonStats->setBlockedKickReturnTouchdowns( $teamSeasonStats['BlockedKickReturnTouchdowns'] );
        $currentTeamSeasonStats->setFieldGoalReturnYards( $teamSeasonStats['FieldGoalReturnYards'] );
        $currentTeamSeasonStats->setFieldGoalReturnTouchdowns( $teamSeasonStats['FieldGoalReturnTouchdowns'] );
        $currentTeamSeasonStats->setPuntNetYards( $teamSeasonStats['PuntNetYards'] );
        $currentTeamSeasonStats->setOpponentSoloTackles( $teamSeasonStats['OpponentSoloTackles'] );
        $currentTeamSeasonStats->setOpponentAssistedTackles( $teamSeasonStats['OpponentAssistedTackles'] );
        $currentTeamSeasonStats->setOpponentSacks( $teamSeasonStats['OpponentSacks'] );
        $currentTeamSeasonStats->setOpponentSackYards( $teamSeasonStats['OpponentSackYards'] );
        $currentTeamSeasonStats->setOpponentPassesDefended( $teamSeasonStats['OpponentPassesDefended'] );
        $currentTeamSeasonStats->setOpponentFumblesForced( $teamSeasonStats['OpponentFumblesForced'] );
        $currentTeamSeasonStats->setOpponentFumblesRecovered( $teamSeasonStats['OpponentFumblesRecovered'] );
        $currentTeamSeasonStats->setOpponentFumbleReturnYards( $teamSeasonStats['OpponentFumbleReturnYards'] );
        $currentTeamSeasonStats->setOpponentFumbleReturnTouchdowns(
            $teamSeasonStats['OpponentFumbleReturnTouchdowns']
        );
        $currentTeamSeasonStats->setOpponentInterceptionReturnTouchdowns(
            $teamSeasonStats['OpponentInterceptionReturnTouchdowns']
        );
        $currentTeamSeasonStats->setOpponentBlockedKicks( $teamSeasonStats['OpponentBlockedKicks'] );
        $currentTeamSeasonStats->setOpponentPuntReturnTouchdowns( $teamSeasonStats['OpponentPuntReturnTouchdowns'] );
        $currentTeamSeasonStats->setOpponentPuntReturnLong( $teamSeasonStats['OpponentPuntReturnLong'] );
        $currentTeamSeasonStats->setOpponentKickReturnTouchdowns( $teamSeasonStats['OpponentKickReturnTouchdowns'] );
        $currentTeamSeasonStats->setOpponentKickReturnLong( $teamSeasonStats['OpponentKickReturnLong'] );
        $currentTeamSeasonStats->setOpponentBlockedKickReturnYards(
            $teamSeasonStats['OpponentBlockedKickReturnYards']
        );
        $currentTeamSeasonStats->setOpponentBlockedKickReturnTouchdowns(
            $teamSeasonStats['OpponentBlockedKickReturnTouchdowns']
        );
        $currentTeamSeasonStats->setOpponentFieldGoalReturnYards( $teamSeasonStats['OpponentFieldGoalReturnYards'] );
        $currentTeamSeasonStats->setOpponentFieldGoalReturnTouchdowns(
            $teamSeasonStats['OpponentFieldGoalReturnTouchdowns']
        );
        $currentTeamSeasonStats->setOpponentPuntNetYards( $teamSeasonStats['OpponentPuntNetYards'] );
        $currentTeamSeasonStats->setTeamName( $teamSeasonStats['TeamName'] );
        $currentTeamSeasonStats->setGames( $teamSeasonStats['Games'] );
        $currentTeamSeasonStats->setPassingDropbacks( $teamSeasonStats['PassingDropbacks'] );
        $currentTeamSeasonStats->setOpponentPassingDropbacks( $teamSeasonStats['OpponentPassingDropbacks'] );
        $currentTeamSeasonStats->setTeamSeasonID( $teamSeasonStats['TeamSeasonID'] );
        $currentTeamSeasonStats->setTwoPointConversionReturns( $teamSeasonStats['TwoPointConversionReturns'] );
        $currentTeamSeasonStats->setOpponentTwoPointConversionReturns(
            $teamSeasonStats['OpponentTwoPointConversionReturns']
        );

        return $currentTeamSeasonStats;
    }
}