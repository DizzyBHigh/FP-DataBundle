<?php

namespace FantasyPro\DataBundle\Builder;

use FantasyPro\DataBundle\Entity\GameStatsByWeek;
use FantasyPro\DataBundle\Helpers\DateHelper;

class GameStatsByWeekBuilder
{
    /**
     * @var DateHelper $dateHelper
     */
    private $dateHelper;

    public function __construct( DateHelper $dateHelper )
    {
        $this->dateHelper = $dateHelper;
    }

    public function buildGameStatsByWeek( $currentGameStatsByWeek = null, $gameStatsByWeek )
    {
        if ( ! $currentGameStatsByWeek) { // check if we already have the game stored
            $currentGameStatsByWeek = new GameStatsByWeek();
        }

        //var_dump($gameStatsByWeek['GameKey']);die();
        $currentGameStatsByWeek->setGameKey( $gameStatsByWeek['GameKey'] );
        $currentGameStatsByWeek->setDate( $this->dateHelper->parseDate( $gameStatsByWeek['Date'] ) );
        $currentGameStatsByWeek->setSeasonType( $gameStatsByWeek['SeasonType'] );
        $currentGameStatsByWeek->setSeason( $gameStatsByWeek['Season'] );
        $currentGameStatsByWeek->setWeek( $gameStatsByWeek['Week'] );
        $currentGameStatsByWeek->setStadium( $gameStatsByWeek['Stadium'] );
        $currentGameStatsByWeek->setPlayingSurface( $gameStatsByWeek['PlayingSurface'] );
        $currentGameStatsByWeek->setTemperature( $gameStatsByWeek['Temperature'] );
        $currentGameStatsByWeek->setHumidity( $gameStatsByWeek['Humidity'] );
        $currentGameStatsByWeek->setWindSpeed( $gameStatsByWeek['WindSpeed'] );
        $currentGameStatsByWeek->setAwayTeam( $gameStatsByWeek['AwayTeam'] );
        $currentGameStatsByWeek->setHomeTeam( $gameStatsByWeek['HomeTeam'] );
        $currentGameStatsByWeek->setAwayScore( $gameStatsByWeek['AwayScore'] );
        $currentGameStatsByWeek->setHomeScore( $gameStatsByWeek['HomeScore'] );
        $currentGameStatsByWeek->setTotalScore( $gameStatsByWeek['TotalScore'] );
        $currentGameStatsByWeek->setOverUnder( $gameStatsByWeek['OverUnder'] );
        $currentGameStatsByWeek->setPointSpread( $gameStatsByWeek['PointSpread'] );
        $currentGameStatsByWeek->setAwayScoreQuarter1( $gameStatsByWeek['AwayScoreQuarter1'] );
        $currentGameStatsByWeek->setAwayScoreQuarter2( $gameStatsByWeek['AwayScoreQuarter2'] );
        $currentGameStatsByWeek->setAwayScoreQuarter3( $gameStatsByWeek['AwayScoreQuarter3'] );
        $currentGameStatsByWeek->setAwayScoreQuarter4( $gameStatsByWeek['AwayScoreQuarter4'] );
        $currentGameStatsByWeek->setAwayScoreOvertime( $gameStatsByWeek['AwayScoreOvertime'] );
        $currentGameStatsByWeek->setHomeScoreQuarter1( $gameStatsByWeek['HomeScoreQuarter1'] );
        $currentGameStatsByWeek->setHomeScoreQuarter2( $gameStatsByWeek['HomeScoreQuarter2'] );
        $currentGameStatsByWeek->setHomeScoreQuarter3( $gameStatsByWeek['HomeScoreQuarter3'] );
        $currentGameStatsByWeek->setHomeScoreQuarter4( $gameStatsByWeek['HomeScoreQuarter4'] );
        $currentGameStatsByWeek->setHomeScoreOvertime( $gameStatsByWeek['HomeScoreOvertime'] );
        $currentGameStatsByWeek->setAwayTimeOfPossession( $gameStatsByWeek['AwayTimeOfPossession'] );
        $currentGameStatsByWeek->setHomeTimeOfPossession( $gameStatsByWeek['HomeTimeOfPossession'] );
        $currentGameStatsByWeek->setAwayFirstDowns( $gameStatsByWeek['AwayFirstDowns'] );
        $currentGameStatsByWeek->setHomeFirstDowns( $gameStatsByWeek['HomeFirstDowns'] );
        $currentGameStatsByWeek->setAwayFirstDownsByRushing( $gameStatsByWeek['AwayFirstDownsByRushing'] );
        $currentGameStatsByWeek->setHomeFirstDownsByRushing( $gameStatsByWeek['HomeFirstDownsByRushing'] );
        $currentGameStatsByWeek->setAwayFirstDownsByPassing( $gameStatsByWeek['AwayFirstDownsByPassing'] );
        $currentGameStatsByWeek->setHomeFirstDownsByPassing( $gameStatsByWeek['HomeFirstDownsByPassing'] );
        $currentGameStatsByWeek->setAwayFirstDownsByPenalty( $gameStatsByWeek['AwayFirstDownsByPenalty'] );
        $currentGameStatsByWeek->setHomeFirstDownsByPenalty( $gameStatsByWeek['HomeFirstDownsByPenalty'] );
        $currentGameStatsByWeek->setAwayOffensivePlays( $gameStatsByWeek['AwayOffensivePlays'] );
        $currentGameStatsByWeek->setHomeOffensivePlays( $gameStatsByWeek['HomeOffensivePlays'] );
        $currentGameStatsByWeek->setAwayOffensiveYards( $gameStatsByWeek['AwayOffensiveYards'] );
        $currentGameStatsByWeek->setHomeOffensiveYards( $gameStatsByWeek['HomeOffensiveYards'] );
        $currentGameStatsByWeek->setAwayOffensiveYardsPerPlay( $gameStatsByWeek['AwayOffensiveYardsPerPlay'] );
        $currentGameStatsByWeek->setHomeOffensiveYardsPerPlay( $gameStatsByWeek['HomeOffensiveYardsPerPlay'] );
        $currentGameStatsByWeek->setAwayTouchdowns( $gameStatsByWeek['AwayTouchdowns'] );
        $currentGameStatsByWeek->setHomeTouchdowns( $gameStatsByWeek['HomeTouchdowns'] );
        $currentGameStatsByWeek->setAwayRushingAttempts( $gameStatsByWeek['AwayRushingAttempts'] );
        $currentGameStatsByWeek->setHomeRushingAttempts( $gameStatsByWeek['HomeRushingAttempts'] );
        $currentGameStatsByWeek->setAwayRushingYards( $gameStatsByWeek['AwayRushingYards'] );
        $currentGameStatsByWeek->setHomeRushingYards( $gameStatsByWeek['HomeRushingYards'] );
        $currentGameStatsByWeek->setAwayRushingYardsPerAttempt( $gameStatsByWeek['AwayRushingYardsPerAttempt'] );
        $currentGameStatsByWeek->setHomeRushingYardsPerAttempt( $gameStatsByWeek['HomeRushingYardsPerAttempt'] );
        $currentGameStatsByWeek->setAwayRushingTouchdowns( $gameStatsByWeek['AwayRushingTouchdowns'] );
        $currentGameStatsByWeek->setHomeRushingTouchdowns( $gameStatsByWeek['HomeRushingTouchdowns'] );
        $currentGameStatsByWeek->setAwayPassingAttempts( $gameStatsByWeek['AwayPassingAttempts'] );
        $currentGameStatsByWeek->setHomePassingAttempts( $gameStatsByWeek['HomePassingAttempts'] );
        $currentGameStatsByWeek->setAwayPassingCompletions( $gameStatsByWeek['AwayPassingCompletions'] );
        $currentGameStatsByWeek->setHomePassingCompletions( $gameStatsByWeek['HomePassingCompletions'] );
        $currentGameStatsByWeek->setAwayPassingYards( $gameStatsByWeek['AwayPassingYards'] );
        $currentGameStatsByWeek->setHomePassingYards( $gameStatsByWeek['HomePassingYards'] );
        $currentGameStatsByWeek->setAwayPassingTouchdowns( $gameStatsByWeek['AwayPassingTouchdowns'] );
        $currentGameStatsByWeek->setHomePassingTouchdowns( $gameStatsByWeek['HomePassingTouchdowns'] );
        $currentGameStatsByWeek->setAwayPassingInterceptions( $gameStatsByWeek['AwayPassingInterceptions'] );
        $currentGameStatsByWeek->setHomePassingInterceptions( $gameStatsByWeek['HomePassingInterceptions'] );
        $currentGameStatsByWeek->setAwayPassingYardsPerAttempt( $gameStatsByWeek['AwayPassingYardsPerAttempt'] );
        $currentGameStatsByWeek->setHomePassingYardsPerAttempt( $gameStatsByWeek['HomePassingYardsPerAttempt'] );
        $currentGameStatsByWeek->setAwayPassingYardsPerCompletion( $gameStatsByWeek['AwayPassingYardsPerCompletion'] );
        $currentGameStatsByWeek->setHomePassingYardsPerCompletion( $gameStatsByWeek['HomePassingYardsPerCompletion'] );
        $currentGameStatsByWeek->setAwayCompletionPercentage( $gameStatsByWeek['AwayCompletionPercentage'] );
        $currentGameStatsByWeek->setHomeCompletionPercentage( $gameStatsByWeek['HomeCompletionPercentage'] );
        $currentGameStatsByWeek->setAwayPasserRating( $gameStatsByWeek['AwayPasserRating'] );
        $currentGameStatsByWeek->setHomePasserRating( $gameStatsByWeek['HomePasserRating'] );
        $currentGameStatsByWeek->setAwayThirdDownAttempts( $gameStatsByWeek['AwayThirdDownAttempts'] );
        $currentGameStatsByWeek->setHomeThirdDownAttempts( $gameStatsByWeek['HomeThirdDownAttempts'] );
        $currentGameStatsByWeek->setAwayThirdDownConversions( $gameStatsByWeek['AwayThirdDownConversions'] );
        $currentGameStatsByWeek->setHomeThirdDownConversions( $gameStatsByWeek['HomeThirdDownConversions'] );
        $currentGameStatsByWeek->setAwayThirdDownPercentage( $gameStatsByWeek['AwayThirdDownPercentage'] );
        $currentGameStatsByWeek->setHomeThirdDownPercentage( $gameStatsByWeek['HomeThirdDownPercentage'] );
        $currentGameStatsByWeek->setAwayFourthDownAttempts( $gameStatsByWeek['AwayFourthDownAttempts'] );
        $currentGameStatsByWeek->setHomeFourthDownAttempts( $gameStatsByWeek['HomeFourthDownAttempts'] );
        $currentGameStatsByWeek->setAwayFourthDownConversions( $gameStatsByWeek['AwayFourthDownConversions'] );
        $currentGameStatsByWeek->setHomeFourthDownConversions( $gameStatsByWeek['HomeFourthDownConversions'] );
        $currentGameStatsByWeek->setAwayFourthDownPercentage( $gameStatsByWeek['AwayFourthDownPercentage'] );
        $currentGameStatsByWeek->setHomeFourthDownPercentage( $gameStatsByWeek['HomeFourthDownPercentage'] );
        $currentGameStatsByWeek->setAwayRedZoneAttempts( $gameStatsByWeek['AwayRedZoneAttempts'] );
        $currentGameStatsByWeek->setHomeRedZoneAttempts( $gameStatsByWeek['HomeRedZoneAttempts'] );
        $currentGameStatsByWeek->setAwayRedZoneConversions( $gameStatsByWeek['AwayRedZoneConversions'] );
        $currentGameStatsByWeek->setHomeRedZoneConversions( $gameStatsByWeek['HomeRedZoneConversions'] );
        $currentGameStatsByWeek->setAwayGoalToGoAttempts( $gameStatsByWeek['AwayGoalToGoAttempts'] );
        $currentGameStatsByWeek->setHomeGoalToGoAttempts( $gameStatsByWeek['HomeGoalToGoAttempts'] );
        $currentGameStatsByWeek->setAwayGoalToGoConversions( $gameStatsByWeek['AwayGoalToGoConversions'] );
        $currentGameStatsByWeek->setHomeGoalToGoConversions( $gameStatsByWeek['HomeGoalToGoConversions'] );
        $currentGameStatsByWeek->setAwayReturnYards( $gameStatsByWeek['AwayReturnYards'] );
        $currentGameStatsByWeek->setHomeReturnYards( $gameStatsByWeek['HomeReturnYards'] );
        $currentGameStatsByWeek->setAwayPenalties( $gameStatsByWeek['AwayPenalties'] );
        $currentGameStatsByWeek->setHomePenalties( $gameStatsByWeek['HomePenalties'] );
        $currentGameStatsByWeek->setAwayPenaltyYards( $gameStatsByWeek['AwayPenaltyYards'] );
        $currentGameStatsByWeek->setHomePenaltyYards( $gameStatsByWeek['HomePenaltyYards'] );
        $currentGameStatsByWeek->setAwayFumbles( $gameStatsByWeek['AwayFumbles'] );
        $currentGameStatsByWeek->setHomeFumbles( $gameStatsByWeek['HomeFumbles'] );
        $currentGameStatsByWeek->setAwayFumblesLost( $gameStatsByWeek['AwayFumblesLost'] );
        $currentGameStatsByWeek->setHomeFumblesLost( $gameStatsByWeek['HomeFumblesLost'] );
        $currentGameStatsByWeek->setAwayTimesSacked( $gameStatsByWeek['AwayTimesSacked'] );
        $currentGameStatsByWeek->setHomeTimesSacked( $gameStatsByWeek['HomeTimesSacked'] );
        $currentGameStatsByWeek->setAwayTimesSackedYards( $gameStatsByWeek['AwayTimesSackedYards'] );
        $currentGameStatsByWeek->setHomeTimesSackedYards( $gameStatsByWeek['HomeTimesSackedYards'] );
        $currentGameStatsByWeek->setAwaySafeties( $gameStatsByWeek['AwaySafeties'] );
        $currentGameStatsByWeek->setHomeSafeties( $gameStatsByWeek['HomeSafeties'] );
        $currentGameStatsByWeek->setAwayPunts( $gameStatsByWeek['AwayPunts'] );
        $currentGameStatsByWeek->setHomePunts( $gameStatsByWeek['HomePunts'] );
        $currentGameStatsByWeek->setAwayPuntYards( $gameStatsByWeek['AwayPuntYards'] );
        $currentGameStatsByWeek->setHomePuntYards( $gameStatsByWeek['HomePuntYards'] );
        $currentGameStatsByWeek->setAwayPuntAverage( $gameStatsByWeek['AwayPuntAverage'] );
        $currentGameStatsByWeek->setHomePuntAverage( $gameStatsByWeek['HomePuntAverage'] );
        $currentGameStatsByWeek->setAwayGiveaways( $gameStatsByWeek['AwayGiveaways'] );
        $currentGameStatsByWeek->setHomeGiveaways( $gameStatsByWeek['HomeGiveaways'] );
        $currentGameStatsByWeek->setAwayTakeaways( $gameStatsByWeek['AwayTakeaways'] );
        $currentGameStatsByWeek->setHomeTakeaways( $gameStatsByWeek['HomeTakeaways'] );
        $currentGameStatsByWeek->setAwayTurnoverDifferential( $gameStatsByWeek['AwayTurnoverDifferential'] );
        $currentGameStatsByWeek->setHomeTurnoverDifferential( $gameStatsByWeek['HomeTurnoverDifferential'] );
        $currentGameStatsByWeek->setAwayKickoffs( $gameStatsByWeek['AwayKickoffs'] );
        $currentGameStatsByWeek->setHomeKickoffs( $gameStatsByWeek['HomeKickoffs'] );
        $currentGameStatsByWeek->setAwayKickoffsInEndZone( $gameStatsByWeek['AwayKickoffsInEndZone'] );
        $currentGameStatsByWeek->setHomeKickoffsInEndZone( $gameStatsByWeek['HomeKickoffsInEndZone'] );
        $currentGameStatsByWeek->setAwayKickoffTouchbacks( $gameStatsByWeek['AwayKickoffTouchbacks'] );
        $currentGameStatsByWeek->setHomeKickoffTouchbacks( $gameStatsByWeek['HomeKickoffTouchbacks'] );
        $currentGameStatsByWeek->setAwayPuntsHadBlocked( $gameStatsByWeek['AwayPuntsHadBlocked'] );
        $currentGameStatsByWeek->setHomePuntsHadBlocked( $gameStatsByWeek['HomePuntsHadBlocked'] );
        $currentGameStatsByWeek->setAwayPuntNetAverage( $gameStatsByWeek['AwayPuntNetAverage'] );
        $currentGameStatsByWeek->setHomePuntNetAverage( $gameStatsByWeek['HomePuntNetAverage'] );
        $currentGameStatsByWeek->setAwayExtraPointKickingAttempts( $gameStatsByWeek['AwayExtraPointKickingAttempts'] );
        $currentGameStatsByWeek->setHomeExtraPointKickingAttempts( $gameStatsByWeek['HomeExtraPointKickingAttempts'] );
        $currentGameStatsByWeek->setAwayExtraPointKickingConversions(
            $gameStatsByWeek['AwayExtraPointKickingConversions']
        );
        $currentGameStatsByWeek->setHomeExtraPointKickingConversions(
            $gameStatsByWeek['HomeExtraPointKickingConversions']
        );
        $currentGameStatsByWeek->setAwayExtraPointsHadBlocked( $gameStatsByWeek['AwayExtraPointsHadBlocked'] );
        $currentGameStatsByWeek->setHomeExtraPointsHadBlocked( $gameStatsByWeek['HomeExtraPointsHadBlocked'] );
        $currentGameStatsByWeek->setAwayExtraPointPassingAttempts( $gameStatsByWeek['AwayExtraPointPassingAttempts'] );
        $currentGameStatsByWeek->setHomeExtraPointPassingAttempts( $gameStatsByWeek['HomeExtraPointPassingAttempts'] );
        $currentGameStatsByWeek->setAwayExtraPointPassingConversions(
            $gameStatsByWeek['AwayExtraPointPassingConversions']
        );
        $currentGameStatsByWeek->setHomeExtraPointPassingConversions(
            $gameStatsByWeek['HomeExtraPointPassingConversions']
        );
        $currentGameStatsByWeek->setAwayExtraPointRushingAttempts( $gameStatsByWeek['AwayExtraPointRushingAttempts'] );
        $currentGameStatsByWeek->setHomeExtraPointRushingAttempts( $gameStatsByWeek['HomeExtraPointRushingAttempts'] );
        $currentGameStatsByWeek->setAwayExtraPointRushingConversions(
            $gameStatsByWeek['AwayExtraPointRushingConversions']
        );
        $currentGameStatsByWeek->setHomeExtraPointRushingConversions(
            $gameStatsByWeek['HomeExtraPointRushingConversions']
        );
        $currentGameStatsByWeek->setAwayFieldGoalAttempts( $gameStatsByWeek['AwayFieldGoalAttempts'] );
        $currentGameStatsByWeek->setHomeFieldGoalAttempts( $gameStatsByWeek['HomeFieldGoalAttempts'] );
        $currentGameStatsByWeek->setAwayFieldGoalsMade( $gameStatsByWeek['AwayFieldGoalsMade'] );
        $currentGameStatsByWeek->setHomeFieldGoalsMade( $gameStatsByWeek['HomeFieldGoalsMade'] );
        $currentGameStatsByWeek->setAwayFieldGoalsHadBlocked( $gameStatsByWeek['AwayFieldGoalsHadBlocked'] );
        $currentGameStatsByWeek->setHomeFieldGoalsHadBlocked( $gameStatsByWeek['HomeFieldGoalsHadBlocked'] );
        $currentGameStatsByWeek->setAwayPuntReturns( $gameStatsByWeek['AwayPuntReturns'] );
        $currentGameStatsByWeek->setHomePuntReturns( $gameStatsByWeek['HomePuntReturns'] );
        $currentGameStatsByWeek->setAwayPuntReturnYards( $gameStatsByWeek['AwayPuntReturnYards'] );
        $currentGameStatsByWeek->setHomePuntReturnYards( $gameStatsByWeek['HomePuntReturnYards'] );
        $currentGameStatsByWeek->setAwayKickReturns( $gameStatsByWeek['AwayKickReturns'] );
        $currentGameStatsByWeek->setHomeKickReturns( $gameStatsByWeek['HomeKickReturns'] );
        $currentGameStatsByWeek->setAwayKickReturnYards( $gameStatsByWeek['AwayKickReturnYards'] );
        $currentGameStatsByWeek->setHomeKickReturnYards( $gameStatsByWeek['HomeKickReturnYards'] );
        $currentGameStatsByWeek->setAwayInterceptionReturns( $gameStatsByWeek['AwayInterceptionReturns'] );
        $currentGameStatsByWeek->setHomeInterceptionReturns( $gameStatsByWeek['HomeInterceptionReturns'] );
        $currentGameStatsByWeek->setAwayInterceptionReturnYards( $gameStatsByWeek['AwayInterceptionReturnYards'] );
        $currentGameStatsByWeek->setHomeInterceptionReturnYards( $gameStatsByWeek['HomeInterceptionReturnYards'] );
        $currentGameStatsByWeek->setAwaySoloTackles( $gameStatsByWeek['AwaySoloTackles'] );
        $currentGameStatsByWeek->setAwayAssistedTackles( $gameStatsByWeek['AwayAssistedTackles'] );
        $currentGameStatsByWeek->setAwayQuarterbackHits( $gameStatsByWeek['AwayQuarterbackHits'] );
        $currentGameStatsByWeek->setAwayTacklesForLoss( $gameStatsByWeek['AwayTacklesForLoss'] );
        $currentGameStatsByWeek->setAwaySacks( $gameStatsByWeek['AwaySacks'] );
        $currentGameStatsByWeek->setAwaySackYards( $gameStatsByWeek['AwaySackYards'] );
        $currentGameStatsByWeek->setAwayPassesDefended( $gameStatsByWeek['AwayPassesDefended'] );
        $currentGameStatsByWeek->setAwayFumblesForced( $gameStatsByWeek['AwayFumblesForced'] );
        $currentGameStatsByWeek->setAwayFumblesRecovered( $gameStatsByWeek['AwayFumblesRecovered'] );
        $currentGameStatsByWeek->setAwayFumbleReturnYards( $gameStatsByWeek['AwayFumbleReturnYards'] );
        $currentGameStatsByWeek->setAwayFumbleReturnTouchdowns( $gameStatsByWeek['AwayFumbleReturnTouchdowns'] );
        $currentGameStatsByWeek->setAwayInterceptionReturnTouchdowns(
            $gameStatsByWeek['AwayInterceptionReturnTouchdowns']
        );
        $currentGameStatsByWeek->setAwayBlockedKicks( $gameStatsByWeek['AwayBlockedKicks'] );
        $currentGameStatsByWeek->setAwayPuntReturnTouchdowns( $gameStatsByWeek['AwayPuntReturnTouchdowns'] );
        $currentGameStatsByWeek->setAwayPuntReturnLong( $gameStatsByWeek['AwayPuntReturnLong'] );
        $currentGameStatsByWeek->setAwayKickReturnTouchdowns( $gameStatsByWeek['AwayKickReturnTouchdowns'] );
        $currentGameStatsByWeek->setAwayKickReturnLong( $gameStatsByWeek['AwayKickReturnLong'] );
        $currentGameStatsByWeek->setAwayBlockedKickReturnYards( $gameStatsByWeek['AwayBlockedKickReturnYards'] );
        $currentGameStatsByWeek->setAwayBlockedKickReturnTouchdowns(
            $gameStatsByWeek['AwayBlockedKickReturnTouchdowns']
        );
        $currentGameStatsByWeek->setAwayFieldGoalReturnYards( $gameStatsByWeek['AwayFieldGoalReturnYards'] );
        $currentGameStatsByWeek->setAwayFieldGoalReturnTouchdowns( $gameStatsByWeek['AwayFieldGoalReturnTouchdowns'] );
        $currentGameStatsByWeek->setAwayPuntNetYards( $gameStatsByWeek['AwayPuntNetYards'] );
        $currentGameStatsByWeek->setHomeSoloTackles( $gameStatsByWeek['HomeSoloTackles'] );
        $currentGameStatsByWeek->setHomeAssistedTackles( $gameStatsByWeek['HomeAssistedTackles'] );
        $currentGameStatsByWeek->setHomeQuarterbackHits( $gameStatsByWeek['HomeQuarterbackHits'] );
        $currentGameStatsByWeek->setHomeTacklesForLoss( $gameStatsByWeek['HomeTacklesForLoss'] );
        $currentGameStatsByWeek->setHomeSacks( $gameStatsByWeek['HomeSacks'] );
        $currentGameStatsByWeek->setHomeSackYards( $gameStatsByWeek['HomeSackYards'] );
        $currentGameStatsByWeek->setHomePassesDefended( $gameStatsByWeek['HomePassesDefended'] );
        $currentGameStatsByWeek->setHomeFumblesForced( $gameStatsByWeek['HomeFumblesForced'] );
        $currentGameStatsByWeek->setHomeFumblesRecovered( $gameStatsByWeek['HomeFumblesRecovered'] );
        $currentGameStatsByWeek->setHomeFumbleReturnYards( $gameStatsByWeek['HomeFumbleReturnYards'] );
        $currentGameStatsByWeek->setHomeFumbleReturnTouchdowns( $gameStatsByWeek['HomeFumbleReturnTouchdowns'] );
        $currentGameStatsByWeek->setHomeInterceptionReturnTouchdowns(
            $gameStatsByWeek['HomeInterceptionReturnTouchdowns']
        );
        $currentGameStatsByWeek->setHomeBlockedKicks( $gameStatsByWeek['HomeBlockedKicks'] );
        $currentGameStatsByWeek->setHomePuntReturnTouchdowns( $gameStatsByWeek['HomePuntReturnTouchdowns'] );
        $currentGameStatsByWeek->setHomePuntReturnLong( $gameStatsByWeek['HomePuntReturnLong'] );
        $currentGameStatsByWeek->setHomeKickReturnTouchdowns( $gameStatsByWeek['HomeKickReturnTouchdowns'] );
        $currentGameStatsByWeek->setHomeKickReturnLong( $gameStatsByWeek['HomeKickReturnLong'] );
        $currentGameStatsByWeek->setHomeBlockedKickReturnYards( $gameStatsByWeek['HomeBlockedKickReturnYards'] );
        $currentGameStatsByWeek->setHomeBlockedKickReturnTouchdowns(
            $gameStatsByWeek['HomeBlockedKickReturnTouchdowns']
        );
        $currentGameStatsByWeek->setHomeFieldGoalReturnYards( $gameStatsByWeek['HomeFieldGoalReturnYards'] );
        $currentGameStatsByWeek->setHomeFieldGoalReturnTouchdowns( $gameStatsByWeek['HomeFieldGoalReturnTouchdowns'] );
        $currentGameStatsByWeek->setHomePuntNetYards( $gameStatsByWeek['HomePuntNetYards'] );
        $currentGameStatsByWeek->setIsGameOver( $gameStatsByWeek['IsGameOver'] );
        $currentGameStatsByWeek->setGameID( $gameStatsByWeek['GameID'] );
        $currentGameStatsByWeek->setStadiumID( $gameStatsByWeek['StadiumID'] );
        $currentGameStatsByWeek->setAwayTwoPointConversionReturns( $gameStatsByWeek['AwayTwoPointConversionReturns'] );
        $currentGameStatsByWeek->setHomeTwoPointConversionReturns( $gameStatsByWeek['HomeTwoPointConversionReturns'] );

        return $currentGameStatsByWeek;
    }
}