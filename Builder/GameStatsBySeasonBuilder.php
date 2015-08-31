<?php

namespace FantasyPro\DataBundle\Builder;

use FantasyPro\DataBundle\Entity\GameStatsBySeason;
use FantasyPro\DataBundle\Helpers\DateHelper;

class GameStatsBySeasonBuilder
{
    /**
     * @var DateHelper $dateHelper
     */
    private $dateHelper;

    public function __construct( DateHelper $dateHelper )
    {
        $this->dateHelper = $dateHelper;
    }

    public function buildGameStatsBySeason( $currentGameStatsBySeason = null, $gameStatsBySeason )
    {
        if ( ! $currentGameStatsBySeason) { // check if we already have the game stored
            $currentGameStatsBySeason = new GameStatsBySeason();
        }
        $currentGameStatsBySeason->setAwayAssistedTackles( $gameStatsBySeason['AwayAssistedTackles'] );
        $currentGameStatsBySeason->setAwayBlockedKickReturnTouchdowns(
            $gameStatsBySeason['AwayBlockedKickReturnTouchdowns']
        );
        $currentGameStatsBySeason->setAwayBlockedKickReturnYards( $gameStatsBySeason['AwayBlockedKickReturnYards'] );
        $currentGameStatsBySeason->setAwayBlockedKicks( $gameStatsBySeason['AwayBlockedKicks'] );
        $currentGameStatsBySeason->setAwayCompletionPercentage( $gameStatsBySeason['AwayCompletionPercentage'] );
        $currentGameStatsBySeason->setAwayExtraPointKickingAttempts(
            $gameStatsBySeason['AwayExtraPointKickingAttempts']
        );
        $currentGameStatsBySeason->setAwayExtraPointKickingConversions(
            $gameStatsBySeason['AwayExtraPointKickingConversions']
        );
        $currentGameStatsBySeason->setAwayExtraPointPassingAttempts(
            $gameStatsBySeason['AwayExtraPointPassingAttempts']
        );
        $currentGameStatsBySeason->setAwayExtraPointPassingConversions(
            $gameStatsBySeason['AwayExtraPointPassingConversions']
        );
        $currentGameStatsBySeason->setAwayExtraPointRushingAttempts(
            $gameStatsBySeason['AwayExtraPointRushingAttempts']
        );
        $currentGameStatsBySeason->setAwayExtraPointRushingConversions(
            $gameStatsBySeason['AwayExtraPointRushingConversions']
        );
        $currentGameStatsBySeason->setAwayExtraPointsHadBlocked( $gameStatsBySeason['AwayExtraPointsHadBlocked'] );
        $currentGameStatsBySeason->setAwayFieldGoalAttempts( $gameStatsBySeason['AwayFieldGoalAttempts'] );
        $currentGameStatsBySeason->setAwayFieldGoalReturnTouchdowns(
            $gameStatsBySeason['AwayFieldGoalReturnTouchdowns']
        );
        $currentGameStatsBySeason->setAwayFieldGoalReturnYards( $gameStatsBySeason['AwayFieldGoalReturnYards'] );
        $currentGameStatsBySeason->setAwayFieldGoalsHadBlocked( $gameStatsBySeason['AwayFieldGoalsHadBlocked'] );
        $currentGameStatsBySeason->setAwayFieldGoalsMade( $gameStatsBySeason['AwayFieldGoalsMade'] );
        $currentGameStatsBySeason->setAwayFirstDowns( $gameStatsBySeason['AwayFirstDowns'] );
        $currentGameStatsBySeason->setAwayFirstDownsByPassing( $gameStatsBySeason['AwayFirstDownsByPassing'] );
        $currentGameStatsBySeason->setAwayFirstDownsByPenalty( $gameStatsBySeason['AwayFirstDownsByPenalty'] );
        $currentGameStatsBySeason->setAwayFirstDownsByRushing( $gameStatsBySeason['AwayFirstDownsByRushing'] );
        $currentGameStatsBySeason->setAwayFourthDownAttempts( $gameStatsBySeason['AwayFourthDownAttempts'] );
        $currentGameStatsBySeason->setAwayFourthDownConversions( $gameStatsBySeason['AwayFourthDownConversions'] );
        $currentGameStatsBySeason->setAwayFourthDownPercentage( $gameStatsBySeason['AwayFourthDownPercentage'] );
        $currentGameStatsBySeason->setAwayFumbleReturnTouchdowns( $gameStatsBySeason['AwayFumbleReturnTouchdowns'] );
        $currentGameStatsBySeason->setAwayFumbleReturnYards( $gameStatsBySeason['AwayFumbleReturnYards'] );
        $currentGameStatsBySeason->setAwayFumbles( $gameStatsBySeason['AwayFumbles'] );
        $currentGameStatsBySeason->setAwayFumblesForced( $gameStatsBySeason['AwayFumblesForced'] );
        $currentGameStatsBySeason->setAwayFumblesLost( $gameStatsBySeason['AwayFumblesLost'] );
        $currentGameStatsBySeason->setAwayFumblesRecovered( $gameStatsBySeason['AwayFumblesRecovered'] );
        $currentGameStatsBySeason->setAwayGiveaways( $gameStatsBySeason['AwayGiveaways'] );
        $currentGameStatsBySeason->setAwayGoalToGoAttempts( $gameStatsBySeason['AwayGoalToGoAttempts'] );
        $currentGameStatsBySeason->setAwayGoalToGoConversions( $gameStatsBySeason['AwayGoalToGoConversions'] );
        $currentGameStatsBySeason->setAwayInterceptionReturnTouchdowns(
            $gameStatsBySeason['AwayInterceptionReturnTouchdowns']
        );
        $currentGameStatsBySeason->setAwayInterceptionReturnYards( $gameStatsBySeason['AwayInterceptionReturnYards'] );
        $currentGameStatsBySeason->setAwayInterceptionReturns( $gameStatsBySeason['AwayInterceptionReturns'] );
        $currentGameStatsBySeason->setAwayKickReturnLong( $gameStatsBySeason['AwayKickReturnLong'] );
        $currentGameStatsBySeason->setAwayKickReturnTouchdowns( $gameStatsBySeason['AwayKickReturnTouchdowns'] );
        $currentGameStatsBySeason->setAwayKickReturnYards( $gameStatsBySeason['AwayKickReturnYards'] );
        $currentGameStatsBySeason->setAwayKickReturns( $gameStatsBySeason['AwayKickReturns'] );
        $currentGameStatsBySeason->setAwayKickoffTouchbacks( $gameStatsBySeason['AwayKickoffTouchbacks'] );
        $currentGameStatsBySeason->setAwayKickoffs( $gameStatsBySeason['AwayKickoffs'] );
        $currentGameStatsBySeason->setAwayKickoffsInEndZone( $gameStatsBySeason['AwayKickoffsInEndZone'] );
        $currentGameStatsBySeason->setAwayOffensivePlays( $gameStatsBySeason['AwayOffensivePlays'] );
        $currentGameStatsBySeason->setAwayOffensiveYards( $gameStatsBySeason['AwayOffensiveYards'] );
        $currentGameStatsBySeason->setAwayOffensiveYardsPerPlay( $gameStatsBySeason['AwayOffensiveYardsPerPlay'] );
        $currentGameStatsBySeason->setAwayPasserRating( $gameStatsBySeason['AwayPasserRating'] );
        $currentGameStatsBySeason->setAwayPassesDefended( $gameStatsBySeason['AwayPassesDefended'] );
        $currentGameStatsBySeason->setAwayPassingAttempts( $gameStatsBySeason['AwayPassingAttempts'] );
        $currentGameStatsBySeason->setAwayPassingCompletions( $gameStatsBySeason['AwayPassingCompletions'] );
        $currentGameStatsBySeason->setAwayPassingInterceptions( $gameStatsBySeason['AwayPassingInterceptions'] );
        $currentGameStatsBySeason->setAwayPassingTouchdowns( $gameStatsBySeason['AwayPassingTouchdowns'] );
        $currentGameStatsBySeason->setAwayPassingYards( $gameStatsBySeason['AwayPassingYards'] );
        $currentGameStatsBySeason->setAwayPassingYardsPerAttempt( $gameStatsBySeason['AwayPassingYardsPerAttempt'] );
        $currentGameStatsBySeason->setAwayPassingYardsPerCompletion(
            $gameStatsBySeason['AwayPassingYardsPerCompletion']
        );
        $currentGameStatsBySeason->setAwayPenalties( $gameStatsBySeason['AwayPenalties'] );
        $currentGameStatsBySeason->setAwayPenaltyYards( $gameStatsBySeason['AwayPenaltyYards'] );
        $currentGameStatsBySeason->setAwayPuntAverage( $gameStatsBySeason['AwayPuntAverage'] );
        $currentGameStatsBySeason->setAwayPuntNetAverage( $gameStatsBySeason['AwayPuntNetAverage'] );
        $currentGameStatsBySeason->setAwayPuntNetYards( $gameStatsBySeason['AwayPuntNetYards'] );
        $currentGameStatsBySeason->setAwayPuntReturnLong( $gameStatsBySeason['AwayPuntReturnLong'] );
        $currentGameStatsBySeason->setAwayPuntReturnTouchdowns( $gameStatsBySeason['AwayPuntReturnTouchdowns'] );
        $currentGameStatsBySeason->setAwayPuntReturnYards( $gameStatsBySeason['AwayPuntReturnYards'] );
        $currentGameStatsBySeason->setAwayPuntReturns( $gameStatsBySeason['AwayPuntReturns'] );
        $currentGameStatsBySeason->setAwayPuntYards( $gameStatsBySeason['AwayPuntYards'] );
        $currentGameStatsBySeason->setAwayPunts( $gameStatsBySeason['AwayPunts'] );
        $currentGameStatsBySeason->setAwayPuntsHadBlocked( $gameStatsBySeason['AwayPuntsHadBlocked'] );
        $currentGameStatsBySeason->setAwayQuarterbackHits( $gameStatsBySeason['AwayQuarterbackHits'] );
        $currentGameStatsBySeason->setAwayRedZoneAttempts( $gameStatsBySeason['AwayRedZoneAttempts'] );
        $currentGameStatsBySeason->setAwayRedZoneConversions( $gameStatsBySeason['AwayRedZoneConversions'] );
        $currentGameStatsBySeason->setAwayReturnYards( $gameStatsBySeason['AwayReturnYards'] );
        $currentGameStatsBySeason->setAwayRushingAttempts( $gameStatsBySeason['AwayRushingAttempts'] );
        $currentGameStatsBySeason->setAwayRushingTouchdowns( $gameStatsBySeason['AwayRushingTouchdowns'] );
        $currentGameStatsBySeason->setAwayRushingYards( $gameStatsBySeason['AwayRushingYards'] );
        $currentGameStatsBySeason->setAwayRushingYardsPerAttempt( $gameStatsBySeason['AwayRushingYardsPerAttempt'] );
        $currentGameStatsBySeason->setAwaySackYards( $gameStatsBySeason['AwaySackYards'] );
        $currentGameStatsBySeason->setAwaySacks( $gameStatsBySeason['AwaySacks'] );
        $currentGameStatsBySeason->setAwaySafeties( $gameStatsBySeason['AwaySafeties'] );
        $currentGameStatsBySeason->setAwayScore( $gameStatsBySeason['AwayScore'] );
        $currentGameStatsBySeason->setAwayScoreOvertime( $gameStatsBySeason['AwayScoreOvertime'] );
        $currentGameStatsBySeason->setAwayScoreQuarter1( $gameStatsBySeason['AwayScoreQuarter1'] );
        $currentGameStatsBySeason->setAwayScoreQuarter2( $gameStatsBySeason['AwayScoreQuarter2'] );
        $currentGameStatsBySeason->setAwayScoreQuarter3( $gameStatsBySeason['AwayScoreQuarter3'] );
        $currentGameStatsBySeason->setAwayScoreQuarter4( $gameStatsBySeason['AwayScoreQuarter4'] );
        $currentGameStatsBySeason->setAwaySoloTackles( $gameStatsBySeason['AwaySoloTackles'] );
        $currentGameStatsBySeason->setAwayTacklesForLoss( $gameStatsBySeason['AwayTacklesForLoss'] );
        $currentGameStatsBySeason->setAwayTakeaways( $gameStatsBySeason['AwayTakeaways'] );
        $currentGameStatsBySeason->setAwayTeam( $gameStatsBySeason['AwayTeam'] );
        $currentGameStatsBySeason->setAwayThirdDownAttempts( $gameStatsBySeason['AwayThirdDownAttempts'] );
        $currentGameStatsBySeason->setAwayThirdDownConversions( $gameStatsBySeason['AwayThirdDownConversions'] );
        $currentGameStatsBySeason->setAwayThirdDownPercentage( $gameStatsBySeason['AwayThirdDownPercentage'] );
        $currentGameStatsBySeason->setAwayTimeOfPossession( $gameStatsBySeason['AwayTimeOfPossession'] );
        $currentGameStatsBySeason->setAwayTimesSacked( $gameStatsBySeason['AwayTimesSacked'] );
        $currentGameStatsBySeason->setAwayTimesSackedYards( $gameStatsBySeason['AwayTimesSackedYards'] );
        $currentGameStatsBySeason->setAwayTouchdowns( $gameStatsBySeason['AwayTouchdowns'] );
        $currentGameStatsBySeason->setAwayTurnoverDifferential( $gameStatsBySeason['AwayTurnoverDifferential'] );
        $currentGameStatsBySeason->setDate( $this->dateHelper->parseDate( $gameStatsBySeason['Date'] ) );
        $currentGameStatsBySeason->setGameID( $gameStatsBySeason['GameID'] );
        $currentGameStatsBySeason->setGameKey( $gameStatsBySeason['GameKey'] );
        $currentGameStatsBySeason->setHomeAssistedTackles( $gameStatsBySeason['HomeAssistedTackles'] );
        $currentGameStatsBySeason->setHomeBlockedKickReturnTouchdowns(
            $gameStatsBySeason['HomeBlockedKickReturnTouchdowns']
        );
        $currentGameStatsBySeason->setHomeBlockedKickReturnYards( $gameStatsBySeason['HomeBlockedKickReturnYards'] );
        $currentGameStatsBySeason->setHomeBlockedKicks( $gameStatsBySeason['HomeBlockedKicks'] );
        $currentGameStatsBySeason->setHomeCompletionPercentage( $gameStatsBySeason['HomeCompletionPercentage'] );
        $currentGameStatsBySeason->setHomeExtraPointKickingAttempts(
            $gameStatsBySeason['HomeExtraPointKickingAttempts']
        );
        $currentGameStatsBySeason->setHomeExtraPointKickingConversions(
            $gameStatsBySeason['HomeExtraPointKickingConversions']
        );
        $currentGameStatsBySeason->setHomeExtraPointPassingAttempts(
            $gameStatsBySeason['HomeExtraPointPassingAttempts']
        );
        $currentGameStatsBySeason->setHomeExtraPointPassingConversions(
            $gameStatsBySeason['HomeExtraPointPassingConversions']
        );
        $currentGameStatsBySeason->setHomeExtraPointRushingAttempts(
            $gameStatsBySeason['HomeExtraPointRushingAttempts']
        );
        $currentGameStatsBySeason->setHomeExtraPointRushingConversions(
            $gameStatsBySeason['HomeExtraPointRushingConversions']
        );
        $currentGameStatsBySeason->setHomeExtraPointsHadBlocked( $gameStatsBySeason['HomeExtraPointsHadBlocked'] );
        $currentGameStatsBySeason->setHomeFieldGoalAttempts( $gameStatsBySeason['HomeFieldGoalAttempts'] );
        $currentGameStatsBySeason->setHomeFieldGoalReturnTouchdowns(
            $gameStatsBySeason['HomeFieldGoalReturnTouchdowns']
        );
        $currentGameStatsBySeason->setHomeFieldGoalReturnYards( $gameStatsBySeason['HomeFieldGoalReturnYards'] );
        $currentGameStatsBySeason->setHomeFieldGoalsHadBlocked( $gameStatsBySeason['HomeFieldGoalsHadBlocked'] );
        $currentGameStatsBySeason->setHomeFieldGoalsMade( $gameStatsBySeason['HomeFieldGoalsMade'] );
        $currentGameStatsBySeason->setHomeFirstDowns( $gameStatsBySeason['HomeFirstDowns'] );
        $currentGameStatsBySeason->setHomeFirstDownsByPassing( $gameStatsBySeason['HomeFirstDownsByPassing'] );
        $currentGameStatsBySeason->setHomeFirstDownsByPenalty( $gameStatsBySeason['HomeFirstDownsByPenalty'] );
        $currentGameStatsBySeason->setHomeFirstDownsByRushing( $gameStatsBySeason['HomeFirstDownsByRushing'] );
        $currentGameStatsBySeason->setHomeFourthDownAttempts( $gameStatsBySeason['HomeFourthDownAttempts'] );
        $currentGameStatsBySeason->setHomeFourthDownConversions( $gameStatsBySeason['HomeFourthDownConversions'] );
        $currentGameStatsBySeason->setHomeFourthDownPercentage( $gameStatsBySeason['HomeFourthDownPercentage'] );
        $currentGameStatsBySeason->setHomeFumbleReturnTouchdowns( $gameStatsBySeason['HomeFumbleReturnTouchdowns'] );
        $currentGameStatsBySeason->setHomeFumbleReturnYards( $gameStatsBySeason['HomeFumbleReturnYards'] );
        $currentGameStatsBySeason->setHomeFumbles( $gameStatsBySeason['HomeFumbles'] );
        $currentGameStatsBySeason->setHomeFumblesForced( $gameStatsBySeason['HomeFumblesForced'] );
        $currentGameStatsBySeason->setHomeFumblesLost( $gameStatsBySeason['HomeFumblesLost'] );
        $currentGameStatsBySeason->setHomeFumblesRecovered( $gameStatsBySeason['HomeFumblesRecovered'] );
        $currentGameStatsBySeason->setHomeGiveaways( $gameStatsBySeason['HomeGiveaways'] );
        $currentGameStatsBySeason->setHomeGoalToGoAttempts( $gameStatsBySeason['HomeGoalToGoAttempts'] );
        $currentGameStatsBySeason->setHomeGoalToGoConversions( $gameStatsBySeason['HomeGoalToGoConversions'] );
        $currentGameStatsBySeason->setHomeInterceptionReturnTouchdowns(
            $gameStatsBySeason['HomeInterceptionReturnTouchdowns']
        );
        $currentGameStatsBySeason->setHomeInterceptionReturnYards( $gameStatsBySeason['HomeInterceptionReturnYards'] );
        $currentGameStatsBySeason->setHomeInterceptionReturns( $gameStatsBySeason['HomeInterceptionReturns'] );
        $currentGameStatsBySeason->setHomeKickReturnLong( $gameStatsBySeason['HomeKickReturnLong'] );
        $currentGameStatsBySeason->setHomeKickReturnTouchdowns( $gameStatsBySeason['HomeKickReturnTouchdowns'] );
        $currentGameStatsBySeason->setHomeKickReturnYards( $gameStatsBySeason['HomeKickReturnYards'] );
        $currentGameStatsBySeason->setHomeKickReturns( $gameStatsBySeason['HomeKickReturns'] );
        $currentGameStatsBySeason->setHomeKickoffTouchbacks( $gameStatsBySeason['HomeKickoffTouchbacks'] );
        $currentGameStatsBySeason->setHomeKickoffs( $gameStatsBySeason['HomeKickoffs'] );
        $currentGameStatsBySeason->setHomeKickoffsInEndZone( $gameStatsBySeason['HomeKickoffsInEndZone'] );
        $currentGameStatsBySeason->setHomeOffensivePlays( $gameStatsBySeason['HomeOffensivePlays'] );
        $currentGameStatsBySeason->setHomeOffensiveYards( $gameStatsBySeason['HomeOffensiveYards'] );
        $currentGameStatsBySeason->setHomeOffensiveYardsPerPlay( $gameStatsBySeason['HomeOffensiveYardsPerPlay'] );
        $currentGameStatsBySeason->setHomePasserRating( $gameStatsBySeason['HomePasserRating'] );
        $currentGameStatsBySeason->setHomePassesDefended( $gameStatsBySeason['HomePassesDefended'] );
        $currentGameStatsBySeason->setHomePassingAttempts( $gameStatsBySeason['HomePassingAttempts'] );
        $currentGameStatsBySeason->setHomePassingCompletions( $gameStatsBySeason['HomePassingCompletions'] );
        $currentGameStatsBySeason->setHomePassingInterceptions( $gameStatsBySeason['HomePassingInterceptions'] );
        $currentGameStatsBySeason->setHomePassingTouchdowns( $gameStatsBySeason['HomePassingTouchdowns'] );
        $currentGameStatsBySeason->setHomePassingYards( $gameStatsBySeason['HomePassingYards'] );
        $currentGameStatsBySeason->setHomePassingYardsPerAttempt( $gameStatsBySeason['HomePassingYardsPerAttempt'] );
        $currentGameStatsBySeason->setHomePassingYardsPerCompletion(
            $gameStatsBySeason['HomePassingYardsPerCompletion']
        );
        $currentGameStatsBySeason->setHomePenalties( $gameStatsBySeason['HomePenalties'] );
        $currentGameStatsBySeason->setHomePenaltyYards( $gameStatsBySeason['HomePenaltyYards'] );
        $currentGameStatsBySeason->setHomePuntAverage( $gameStatsBySeason['HomePuntAverage'] );
        $currentGameStatsBySeason->setHomePuntNetAverage( $gameStatsBySeason['HomePuntNetAverage'] );
        $currentGameStatsBySeason->setHomePuntNetYards( $gameStatsBySeason['HomePuntNetYards'] );
        $currentGameStatsBySeason->setHomePuntReturnLong( $gameStatsBySeason['HomePuntReturnLong'] );
        $currentGameStatsBySeason->setHomePuntReturnTouchdowns( $gameStatsBySeason['HomePuntReturnTouchdowns'] );
        $currentGameStatsBySeason->setHomePuntReturnYards( $gameStatsBySeason['HomePuntReturnYards'] );
        $currentGameStatsBySeason->setHomePuntReturns( $gameStatsBySeason['HomePuntReturns'] );
        $currentGameStatsBySeason->setHomePuntYards( $gameStatsBySeason['HomePuntYards'] );
        $currentGameStatsBySeason->setHomePunts( $gameStatsBySeason['HomePunts'] );
        $currentGameStatsBySeason->setHomePuntsHadBlocked( $gameStatsBySeason['HomePuntsHadBlocked'] );
        $currentGameStatsBySeason->setHomeQuarterbackHits( $gameStatsBySeason['HomeQuarterbackHits'] );
        $currentGameStatsBySeason->setHomeRedZoneAttempts( $gameStatsBySeason['HomeRedZoneAttempts'] );
        $currentGameStatsBySeason->setHomeRedZoneConversions( $gameStatsBySeason['HomeRedZoneConversions'] );
        $currentGameStatsBySeason->setHomeReturnYards( $gameStatsBySeason['HomeReturnYards'] );
        $currentGameStatsBySeason->setHomeRushingAttempts( $gameStatsBySeason['HomeRushingAttempts'] );
        $currentGameStatsBySeason->setHomeRushingTouchdowns( $gameStatsBySeason['HomeRushingTouchdowns'] );
        $currentGameStatsBySeason->setHomeRushingYards( $gameStatsBySeason['HomeRushingYards'] );
        $currentGameStatsBySeason->setHomeRushingYardsPerAttempt( $gameStatsBySeason['HomeRushingYardsPerAttempt'] );
        $currentGameStatsBySeason->setHomeSackYards( $gameStatsBySeason['HomeSackYards'] );
        $currentGameStatsBySeason->setHomeSacks( $gameStatsBySeason['HomeSacks'] );
        $currentGameStatsBySeason->setHomeSafeties( $gameStatsBySeason['HomeSafeties'] );
        $currentGameStatsBySeason->setHomeScore( $gameStatsBySeason['HomeScore'] );
        $currentGameStatsBySeason->setHomeScoreOvertime( $gameStatsBySeason['HomeScoreOvertime'] );
        $currentGameStatsBySeason->setHomeScoreQuarter1( $gameStatsBySeason['HomeScoreQuarter1'] );
        $currentGameStatsBySeason->setHomeScoreQuarter2( $gameStatsBySeason['HomeScoreQuarter2'] );
        $currentGameStatsBySeason->setHomeScoreQuarter3( $gameStatsBySeason['HomeScoreQuarter3'] );
        $currentGameStatsBySeason->setHomeScoreQuarter4( $gameStatsBySeason['HomeScoreQuarter4'] );
        $currentGameStatsBySeason->setHomeSoloTackles( $gameStatsBySeason['HomeSoloTackles'] );
        $currentGameStatsBySeason->setHomeTacklesForLoss( $gameStatsBySeason['HomeTacklesForLoss'] );
        $currentGameStatsBySeason->setHomeTakeaways( $gameStatsBySeason['HomeTakeaways'] );
        $currentGameStatsBySeason->setHomeTeam( $gameStatsBySeason['HomeTeam'] );
        $currentGameStatsBySeason->setHomeThirdDownAttempts( $gameStatsBySeason['HomeThirdDownAttempts'] );
        $currentGameStatsBySeason->setHomeThirdDownConversions( $gameStatsBySeason['HomeThirdDownConversions'] );
        $currentGameStatsBySeason->setHomeThirdDownPercentage( $gameStatsBySeason['HomeThirdDownPercentage'] );
        $currentGameStatsBySeason->setHomeTimeOfPossession( $gameStatsBySeason['HomeTimeOfPossession'] );
        $currentGameStatsBySeason->setHomeTimesSacked( $gameStatsBySeason['HomeTimesSacked'] );
        $currentGameStatsBySeason->setHomeTimesSackedYards( $gameStatsBySeason['HomeTimesSackedYards'] );
        $currentGameStatsBySeason->setHomeTouchdowns( $gameStatsBySeason['HomeTouchdowns'] );
        $currentGameStatsBySeason->setHomeTurnoverDifferential( $gameStatsBySeason['HomeTurnoverDifferential'] );
        $currentGameStatsBySeason->setHumidity( $gameStatsBySeason['Humidity'] );
        $currentGameStatsBySeason->setIsGameOver( $gameStatsBySeason['IsGameOver'] );
        $currentGameStatsBySeason->setOverUnder( $gameStatsBySeason['OverUnder'] );
        $currentGameStatsBySeason->setPlayingSurface( $gameStatsBySeason['PlayingSurface'] );
        $currentGameStatsBySeason->setPointSpread( $gameStatsBySeason['PointSpread'] );
        $currentGameStatsBySeason->setSeason( $gameStatsBySeason['Season'] );
        $currentGameStatsBySeason->setSeasonType( $gameStatsBySeason['SeasonType'] );
        $currentGameStatsBySeason->setStadium( $gameStatsBySeason['Stadium'] );
        $currentGameStatsBySeason->setStadiumID( $gameStatsBySeason['StadiumID'] );
        $currentGameStatsBySeason->setTemperature( $gameStatsBySeason['Temperature'] );
        $currentGameStatsBySeason->setTotalScore( $gameStatsBySeason['TotalScore'] );
        $currentGameStatsBySeason->setWeek( $gameStatsBySeason['Week'] );
        $currentGameStatsBySeason->setWindSpeed( $gameStatsBySeason['WindSpeed'] );

        return $currentGameStatsBySeason;
    }
}