<?php

namespace FantasyPro\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameStatsByWeek
 *
 * @ORM\Table(name="fd_gameStatsByWeek")
 * @ORM\Entity(repositoryClass="FantasyPro\DataBundle\Entity\GameStatsByWeekRepository")
 */
class GameStatsByWeek
{
    /**
     * @var integer
     *
     * @ORM\Column(type="integer", name="id")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", unique=true, length=12, nullable=false, name="gameKey")
     */
    private $gameKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=false, name="date")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, name="seasonType")
     */
    private $seasonType;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, name="season")
     */
    private $season;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, name="week")
     */
    private $week;

    /**
     * @var integer
     *
     * @ORM\Column(type="boolean", nullable=true, name="stadiumID")
     */
    private $stadiumID;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="stadium")
     */
    private $stadium;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="playingSurface")
     */
    private $playingSurface;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="temperature")
     */
    private $temperature;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="humidity")
     */
    private $humidity;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="windSpeed")
     */
    private $windSpeed;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="awayTeam")
     */
    private $awayTeam;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, name="awayScore")
     */
    private $awayScore;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="homeTeam")
     */
    private $homeTeam;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeScore")
     */
    private $homeScore;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="totalScore")
     */
    private $totalScore;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="overUnder")
     */
    private $overUnder;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="pointSpread")
     */
    private $pointSpread;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true, name="isGameOver")
     */
    private $isGameOver;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="gameID")
     */

    private $gameID;

    /*  
    ******************************************************************************************
        HOME TEAM STATS
    ******************************************************************************************
    */

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeScoreQuarter1")
     */
    private $homeScoreQuarter1;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeScoreQuarter2")
     */
    private $homeScoreQuarter2;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeScoreQuarter3")
     */
    private $homeScoreQuarter3;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeScoreQuarter4")
     */
    private $homeScoreQuarter4;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeScoreOvertime")
     */
    private $homeScoreOvertime;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="homeTimeOfPossession")
     */
    private $homeTimeOfPossession;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeFirstDownsByRushing")
     */
    private $homeFirstDownsByRushing;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeFirstDowns")
     */
    private $homeFirstDowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeFirstDownsByPassing")
     */
    private $homeFirstDownsByPassing;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeFirstDownsByPenalty")
     */
    private $homeFirstDownsByPenalty;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeOffensivePlays")
     */
    private $homeOffensivePlays;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeOffensiveYards")
     */
    private $homeOffensiveYards;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="homeOffensiveYardsPerPlay")
     */
    private $homeOffensiveYardsPerPlay;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeTouchDowns")
     */
    private $homeTouchDowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeRushingAttempts")
     */
    private $homeRushingAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeRushingYards")
     */
    private $homeRushingYards;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="homeRushingYardsPerAttempt")
     */
    private $homeRushingYardsPerAttempt;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeRushingTouchdowns")
     */
    private $homeRushingTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homePassingAttempts")
     */
    private $homePassingAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homePassingCompletions")
     */
    private $homePassingCompletions;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homePassingYards")
     */
    private $homePassingYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homePassingTouchdowns")
     */
    private $homePassingTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homePassingInterceptions")
     */
    private $homePassingInterceptions;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="homePassingYardsPerAttempt")
     */
    private $homePassingYardsPerAttempt;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="homePassingYardsPerCompletion")
     */
    private $homePassingYardsPerCompletion;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="homeCompletionPercentage")
     */
    private $homeCompletionPercentage;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="homePasserRating")
     */
    private $homePasserRating;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeThirdDownAttempts")
     */
    private $homeThirdDownAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeThirdDownConversions")
     */
    private $homeThirdDownConversions;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeThirdDownPercentage")
     */
    private $homeThirdDownPercentage;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeFourthDownAttempts")
     */
    private $homeFourthDownAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeFourthDownConversions")
     */
    private $homeFourthDownConversions;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="homeFourthDownPercentage")
     */
    private $homeFourthDownPercentage;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeRedZoneAttempts")
     */
    private $homeRedZoneAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeRedZoneConversions")
     */
    private $homeRedZoneConversions;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeGoalToGoAttempts")
     */
    private $homeGoalToGoAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeGoalToGoConversions")
     */
    private $homeGoalToGoConversions;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeReturnYards")
     */
    private $homeReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homePenalties")
     */
    private $homePenalties;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homePenaltyYards")
     */
    private $homePenaltyYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeFumbles")
     */
    private $homeFumbles;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeFumblesLost")
     */
    private $homeFumblesLost;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeTimesSacked")
     */
    private $homeTimesSacked;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeTimesSackedYards")
     */
    private $homeTimesSackedYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeSafeties")
     */
    private $homeSafeties;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homePunts")
     */
    private $homePunts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homePuntYards")
     */
    private $homePuntYards;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="homePuntAverage")
     */
    private $homePuntAverage;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeGiveAways")
     */
    private $homeGiveAways;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeTakeAways")
     */
    private $homeTakeAways;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeTurnoverDifferential")
     */
    private $homeTurnoverDifferential;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeKickoffs")
     */
    private $homeKickoffs;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeKickoffsInEndZone")
     */
    private $homeKickoffsInEndZone;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeKickoffTouchbacks")
     */
    private $homeKickoffTouchbacks;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homePuntsHadBlocked")
     */
    private $homePuntsHadBlocked;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="homePuntNetAverage")
     */
    private $homePuntNetAverage;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeExtraPointKickingAttempts")
     */
    private $homeExtraPointKickingAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeExtraPointKickingConversions")
     */
    private $homeExtraPointKickingConversions;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeExtraPointsHadBlocked")
     */
    private $homeExtraPointsHadBlocked;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeExtraPointPassingAttempts")
     */
    private $homeExtraPointPassingAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeExtraPointPassingConversions")
     */
    private $homeExtraPointPassingConversions;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeExtraPointRushingAttempts")
     */
    private $homeExtraPointRushingAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeExtraPointRushingConversions")
     */
    private $homeExtraPointRushingConversions;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeFieldGoalAttempts")
     */
    private $homeFieldGoalAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeFieldGoalsMade")
     */
    private $homeFieldGoalsMade;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeFieldGoalsHadBlocked")
     */
    private $homeFieldGoalsHadBlocked;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homePuntReturns")
     */
    private $homePuntReturns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homePuntReturnYards")
     */
    private $homePuntReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeKickReturns")
     */
    private $homeKickReturns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeKickReturnYards")
     */
    private $homeKickReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeInterceptionReturns")
     */
    private $homeInterceptionReturns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeInterceptionReturnYards")
     */
    private $homeInterceptionReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeSoloTackles")
     */
    private $homeSoloTackles;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeAssistedTackles")
     */
    private $homeAssistedTackles;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeQuarterbackHits")
     */
    private $homeQuarterbackHits;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeTacklesForLoss")
     */
    private $homeTacklesForLoss;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeSacks")
     */
    private $homeSacks;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeSackYards")
     */
    private $homeSackYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homePassesDefended")
     */
    private $homePassesDefended;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeFumblesForced")
     */
    private $homeFumblesForced;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeFumblesRecovered")
     */
    private $homeFumblesRecovered;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeFumbleReturnYards")
     */
    private $homeFumbleReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeFumbleReturnTouchdowns")
     */
    private $homeFumbleReturnTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeInterceptionReturnTouchdowns")
     */
    private $homeInterceptionReturnTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeBlockedKicks")
     */
    private $homeBlockedKicks;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homePuntReturnTouchdowns")
     */
    private $homePuntReturnTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homePuntReturnLong")
     */
    private $homePuntReturnLong;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeKickReturnTouchdowns")
     */
    private $homeKickReturnTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeKickReturnLong")
     */
    private $homeKickReturnLong;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeBlockedKickReturnYards")
     */
    private $homeBlockedKickReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeBlockedKickReturnTouchdowns")
     */
    private $homeBlockedKickReturnTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeFieldGoalReturnYards")
     */
    private $homeFieldGoalReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeFieldGoalReturnTouchdowns")
     */
    private $homeFieldGoalReturnTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homePuntNetards")
     */
    private $homePuntNetYards;

    /*  
    ******************************************************************************************
        AWAY TEAM STATS
    ******************************************************************************************
    */

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayScoreQuarter1")
     */
    private $awayScoreQuarter1;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayScoreQuarter2")
     */
    private $awayScoreQuarter2;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayScoreQuarter3")
     */
    private $awayScoreQuarter3;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayScoreQuarter4")
     */
    private $awayScoreQuarter4;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayScoreOvertime")
     */
    private $awayScoreOvertime;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="awayTimeOfPossession")
     */
    private $awayTimeOfPossession;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayFirstDownsByRushing")
     */
    private $awayFirstDownsByRushing;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayFirstDowns")
     */
    private $awayFirstDowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayFirstDownsByPassing")
     */
    private $awayFirstDownsByPassing;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayFirstDownsByPenalty")
     */
    private $awayFirstDownsByPenalty;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayOffensivePlays")
     */
    private $awayOffensivePlays;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayOffensiveYards")
     */
    private $awayOffensiveYards;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="awayOffensiveYardsPerPlay")
     */
    private $awayOffensiveYardsPerPlay;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayTouchDowns")
     */
    private $awayTouchDowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayRushingAttempts")
     */
    private $awayRushingAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayRushingYards")
     */
    private $awayRushingYards;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="awayRushingYardsPerAttempt")
     */
    private $awayRushingYardsPerAttempt;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayRushingTouchdowns")
     */
    private $awayRushingTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayPassingAttempts")
     */
    private $awayPassingAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayPassingCompletions")
     */
    private $awayPassingCompletions;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayPassingYards")
     */
    private $awayPassingYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayPassingTouchdowns")
     */
    private $awayPassingTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayPassingInterceptions")
     */
    private $awayPassingInterceptions;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="awayPassingYardsPerAttempt")
     */
    private $awayPassingYardsPerAttempt;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="awayPassingYardsPerCompletion")
     */
    private $awayPassingYardsPerCompletion;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="awayCompletionPercentage")
     */
    private $awayCompletionPercentage;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="awayPasserRating")
     */
    private $awayPasserRating;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayThirdDownAttempts")
     */
    private $awayThirdDownAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayThirdDownConversions")
     */
    private $awayThirdDownConversions;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayThirdDownPercentage")
     */
    private $awayThirdDownPercentage;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayFourthDownAttempts")
     */
    private $awayFourthDownAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayFourthDownConversions")
     */
    private $awayFourthDownConversions;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="awayFourthDownPercentage")
     */
    private $awayFourthDownPercentage;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayRedZoneAttempts")
     */
    private $awayRedZoneAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayRedZoneConversions")
     */
    private $awayRedZoneConversions;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayGoalToGoAttempts")
     */
    private $awayGoalToGoAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayGoalToGoConversions")
     */
    private $awayGoalToGoConversions;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayReturnYards")
     */
    private $awayReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayPenalties")
     */
    private $awayPenalties;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayPenaltyYards")
     */
    private $awayPenaltyYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayFumbles")
     */
    private $awayFumbles;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayFumblesLost")
     */
    private $awayFumblesLost;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayTimesSacked")
     */
    private $awayTimesSacked;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayTimesSackedYards")
     */
    private $awayTimesSackedYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awaySafeties")
     */
    private $awaySafeties;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayPunts")
     */
    private $awayPunts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayPuntYards")
     */
    private $awayPuntYards;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="awayPuntAverage")
     */
    private $awayPuntAverage;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayGiveAways")
     */
    private $awayGiveAways;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayTakeAways")
     */
    private $awayTakeAways;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayTurnoverDifferential")
     */
    private $awayTurnoverDifferential;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayKickoffs")
     */
    private $awayKickoffs;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayKickoffsInEndZone")
     */
    private $awayKickoffsInEndZone;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayKickoffTouchbacks")
     */
    private $awayKickoffTouchbacks;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayPuntsHadBlocked")
     */
    private $awayPuntsHadBlocked;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="awayPuntNetAverage")
     */
    private $awayPuntNetAverage;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayExtraPointKickingAttempts")
     */
    private $awayExtraPointKickingAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayExtraPointKickingConversions")
     */
    private $awayExtraPointKickingConversions;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayExtraPointsHadBlocked")
     */
    private $awayExtraPointsHadBlocked;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayExtraPointPassingAttempts")
     */
    private $awayExtraPointPassingAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayExtraPointPassingConversions")
     */
    private $awayExtraPointPassingConversions;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayExtraPointRushingAttempts")
     */
    private $awayExtraPointRushingAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayExtraPointRushingConversions")
     */
    private $awayExtraPointRushingConversions;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayFieldGoalAttempts")
     */
    private $awayFieldGoalAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayFieldGoalsMade")
     */
    private $awayFieldGoalsMade;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayFieldGoalsHadBlocked")
     */
    private $awayFieldGoalsHadBlocked;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayPuntReturns")
     */
    private $awayPuntReturns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayPuntReturnYards")
     */
    private $awayPuntReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayKickReturns")
     */
    private $awayKickReturns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayKickReturnYards")
     */
    private $awayKickReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayInterceptionReturns")
     */
    private $awayInterceptionReturns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayInterceptionReturnYards")
     */
    private $awayInterceptionReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awaySoloTackles")
     */
    private $awaySoloTackles;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayAssistedTackles")
     */
    private $awayAssistedTackles;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayQuarterbackHits")
     */
    private $awayQuarterbackHits;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayTacklesForLoss")
     */
    private $awayTacklesForLoss;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awaySacks")
     */
    private $awaySacks;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awaySackYards")
     */
    private $awaySackYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayPassesDefended")
     */
    private $awayPassesDefended;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayFumblesForced")
     */
    private $awayFumblesForced;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayFumblesRecovered")
     */
    private $awayFumblesRecovered;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayFumbleReturnYards")
     */
    private $awayFumbleReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayFumbleReturnTouchdowns")
     */
    private $awayFumbleReturnTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayInterceptionReturnTouchdowns")
     */
    private $awayInterceptionReturnTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayBlockedKicks")
     */
    private $awayBlockedKicks;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayPuntReturnTouchdowns")
     */
    private $awayPuntReturnTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayPuntReturnLong")
     */
    private $awayPuntReturnLong;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayKickReturnTouchdowns")
     */
    private $awayKickReturnTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayKickReturnLong")
     */
    private $awayKickReturnLong;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayBlockedKickReturnYards")
     */
    private $awayBlockedKickReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayBlockedKickReturnTouchdowns")
     */
    private $awayBlockedKickReturnTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayFieldGoalReturnYards")
     */
    private $awayFieldGoalReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayFieldGoalReturnTouchdowns")
     */
    private $awayFieldGoalReturnTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayPuntNetards")
     */
    private $awayPuntNetYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayTwoPointConversionReturns")
     */
    private $awayTwoPointConversionReturns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeTwoPointConversionReturns")
     */
    private $homeTwoPointConversionReturns;


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getGameKey()
    {
        return $this->gameKey;
    }

    /**
     * @param string $gameKey
     */
    public function setGameKey( $gameKey )
    {
        $this->gameKey = $gameKey;
    }

    /**
     * @param int $id
     */
    public function setId( $id )
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getGameID()
    {
        return $this->gameID;
    }

    /**
     * @param string $gameKey
     */
    public function setGameID( $gameID )
    {
        $this->gameID = $gameID;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate( $date )
    {
        $this->date = $date;
    }

    /**
     * @return int
     */
    public function getSeasonType()
    {
        return $this->seasonType;
    }

    /**
     * @param int $seasonType
     */
    public function setSeasonType( $seasonType )
    {
        $this->seasonType = $seasonType;
    }

    /**
     * @return int
     */
    public function getWeek()
    {
        return $this->week;
    }

    /**
     * @param int $week
     */
    public function setWeek( $week )
    {
        $this->week = $week;
    }

    /**
     * @return int
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * @param int $season
     */
    public function setSeason( $season )
    {
        $this->season = $season;
    }

    /**
     * @return int
     */
    public function getStadiumID()
    {
        return $this->stadiumID;
    }

    /**
     * @param int $stadiumID
     */
    public function setStadiumID( $stadiumID )
    {
        $this->stadiumID = $stadiumID;
    }

    /**
     * @return string
     */
    public function getStadium()
    {
        return $this->stadium;
    }

    /**
     * @param string $stadium
     */
    public function setStadium( $stadium )
    {
        $this->stadium = $stadium;
    }

    /**
     * @return string
     */
    public function getPlayingSurface()
    {
        return $this->playingSurface;
    }

    /**
     * @param string $playingSurface
     */
    public function setPlayingSurface( $playingSurface )
    {
        $this->playingSurface = $playingSurface;
    }

    /**
     * @return int
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * @param int $temperature
     */
    public function setTemperature( $temperature )
    {
        $this->temperature = $temperature;
    }

    /**
     * @return int
     */
    public function getHumidity()
    {
        return $this->humidity;
    }

    /**
     * @param int $humidity
     */
    public function setHumidity( $humidity )
    {
        $this->humidity = $humidity;
    }

    /**
     * @return int
     */
    public function getWindSpeed()
    {
        return $this->windSpeed;
    }

    /**
     * @param int $windSpeed
     */
    public function setWindSpeed( $windSpeed )
    {
        $this->windSpeed = $windSpeed;
    }

    /**
     * @return string
     */
    public function getAwayTeam()
    {
        return $this->awayTeam;
    }

    /**
     * @param string $awayTeam
     */
    public function setAwayTeam( $awayTeam )
    {
        $this->awayTeam = $awayTeam;
    }

    /**
     * @return int
     */
    public function getAwayScore()
    {
        return $this->awayScore;
    }

    /**
     * @param int $awayScore
     */
    public function setAwayScore( $awayScore )
    {
        $this->awayScore = $awayScore;
    }

    /**
     * @return string
     */
    public function getHomeTeam()
    {
        return $this->homeTeam;
    }

    /**
     * @param string $homeTeam
     */
    public function setHomeTeam( $homeTeam )
    {
        $this->homeTeam = $homeTeam;
    }

    /**
     * @return int
     */
    public function getHomeScore()
    {
        return $this->homeScore;
    }

    /**
     * @param int $homeScore
     */
    public function setHomeScore( $homeScore )
    {
        $this->homeScore = $homeScore;
    }

    /**
     * @return int
     */
    public function getTotalScore()
    {
        return $this->totalScore;
    }

    /**
     * @param int $totalScore
     */
    public function setTotalScore( $totalScore )
    {
        $this->totalScore = $totalScore;
    }

    /**
     * @return string
     */
    public function getOverUnder()
    {
        return $this->overUnder;
    }

    /**
     * @param string $overUnder
     */
    public function setOverUnder( $overUnder )
    {
        $this->overUnder = $overUnder;
    }

    /**
     * @return string
     */
    public function getPointSpread()
    {
        return $this->pointSpread;
    }

    /**
     * @param string $pointSpread
     */
    public function setPointSpread( $pointSpread )
    {
        $this->pointSpread = $pointSpread;
    }

    /**
     * @return int
     */
    public function getIsGameOver()
    {
        return $this->isGameOver;
    }

    /**
     * @param int $isGameOver
     */
    public function setIsGameOver( $isGameOver )
    {
        $this->isGameOver = $isGameOver;
    }

    /**
     * @return int
     */
    public function getHomeScoreQuarter1()
    {
        return $this->homeScoreQuarter1;
    }

    /**
     * @param int $homeScoreQuarter1
     */
    public function setHomeScoreQuarter1( $homeScoreQuarter1 )
    {
        $this->homeScoreQuarter1 = $homeScoreQuarter1;
    }

    /**
     * @return int
     */
    public function getHomeScoreQuarter2()
    {
        return $this->homeScoreQuarter2;
    }

    /**
     * @param int $homeScoreQuarter2
     */
    public function setHomeScoreQuarter2( $homeScoreQuarter2 )
    {
        $this->homeScoreQuarter2 = $homeScoreQuarter2;
    }

    /**
     * @return int
     */
    public function getHomeScoreQuarter3()
    {
        return $this->homeScoreQuarter3;
    }

    /**
     * @param int $homeScoreQuarter3
     */
    public function setHomeScoreQuarter3( $homeScoreQuarter3 )
    {
        $this->homeScoreQuarter3 = $homeScoreQuarter3;
    }

    /**
     * @return int
     */
    public function getHomeScoreQuarter4()
    {
        return $this->homeScoreQuarter4;
    }

    /**
     * @param int $homeScoreQuarter4
     */
    public function setHomeScoreQuarter4( $homeScoreQuarter4 )
    {
        $this->homeScoreQuarter4 = $homeScoreQuarter4;
    }

    /**
     * @return int
     */
    public function getHomeScoreOvertime()
    {
        return $this->homeScoreOvertime;
    }

    /**
     * @param int $homeScoreOvertime
     */
    public function setHomeScoreOvertime( $homeScoreOvertime )
    {
        $this->homeScoreOvertime = $homeScoreOvertime;
    }

    /**
     * @return string
     */
    public function getHomeTimeOfPossession()
    {
        return $this->homeTimeOfPossession;
    }

    /**
     * @param string $homeTimeOfPossession
     */
    public function setHomeTimeOfPossession( $homeTimeOfPossession )
    {
        $this->homeTimeOfPossession = $homeTimeOfPossession;
    }

    /**
     * @return int
     */
    public function getHomeFirstDownsByRushing()
    {
        return $this->homeFirstDownsByRushing;
    }

    /**
     * @param int $homeFirstDownsByRushing
     */
    public function setHomeFirstDownsByRushing( $homeFirstDownsByRushing )
    {
        $this->homeFirstDownsByRushing = $homeFirstDownsByRushing;
    }

    /**
     * @return int
     */
    public function getHomeFirstDowns()
    {
        return $this->homeFirstDowns;
    }

    /**
     * @param int $homeFirstDowns
     */
    public function setHomeFirstDowns( $homeFirstDowns )
    {
        $this->homeFirstDowns = $homeFirstDowns;
    }

    /**
     * @return int
     */
    public function getHomeFirstDownsByPassing()
    {
        return $this->homeFirstDownsByPassing;
    }

    /**
     * @param int $homeFirstDownsByPassing
     */
    public function setHomeFirstDownsByPassing( $homeFirstDownsByPassing )
    {
        $this->homeFirstDownsByPassing = $homeFirstDownsByPassing;
    }

    /**
     * @return int
     */
    public function getHomeFirstDownsByPenalty()
    {
        return $this->homeFirstDownsByPenalty;
    }

    /**
     * @param int $homeFirstDownsByPenalty
     */
    public function setHomeFirstDownsByPenalty( $homeFirstDownsByPenalty )
    {
        $this->homeFirstDownsByPenalty = $homeFirstDownsByPenalty;
    }

    /**
     * @return int
     */
    public function getHomeOffensivePlays()
    {
        return $this->homeOffensivePlays;
    }

    /**
     * @param int $homeOffensivePlays
     */
    public function setHomeOffensivePlays( $homeOffensivePlays )
    {
        $this->homeOffensivePlays = $homeOffensivePlays;
    }

    /**
     * @return int
     */
    public function getHomeOffensiveYards()
    {
        return $this->homeOffensiveYards;
    }

    /**
     * @param int $homeOffensiveYards
     */
    public function setHomeOffensiveYards( $homeOffensiveYards )
    {
        $this->homeOffensiveYards = $homeOffensiveYards;
    }

    /**
     * @return string
     */
    public function getHomeOffensiveYardsPerPlay()
    {
        return $this->homeOffensiveYardsPerPlay;
    }

    /**
     * @param string $homeOffensiveYardsPerPlay
     */
    public function setHomeOffensiveYardsPerPlay( $homeOffensiveYardsPerPlay )
    {
        $this->homeOffensiveYardsPerPlay = $homeOffensiveYardsPerPlay;
    }

    /**
     * @return int
     */
    public function getHomeTouchDowns()
    {
        return $this->homeTouchDowns;
    }

    /**
     * @param int $homeTouchDowns
     */
    public function setHomeTouchDowns( $homeTouchDowns )
    {
        $this->homeTouchDowns = $homeTouchDowns;
    }

    /**
     * @return int
     */
    public function getHomeRushingAttempts()
    {
        return $this->homeRushingAttempts;
    }

    /**
     * @param int $homeRushingAttempts
     */
    public function setHomeRushingAttempts( $homeRushingAttempts )
    {
        $this->homeRushingAttempts = $homeRushingAttempts;
    }

    /**
     * @return int
     */
    public function getHomeRushingYards()
    {
        return $this->homeRushingYards;
    }

    /**
     * @param int $homeRushingYards
     */
    public function setHomeRushingYards( $homeRushingYards )
    {
        $this->homeRushingYards = $homeRushingYards;
    }

    /**
     * @return string
     */
    public function getHomeRushingYardsPerAttempt()
    {
        return $this->homeRushingYardsPerAttempt;
    }

    /**
     * @param string $homeRushingYardsPerAttempt
     */
    public function setHomeRushingYardsPerAttempt( $homeRushingYardsPerAttempt )
    {
        $this->homeRushingYardsPerAttempt = $homeRushingYardsPerAttempt;
    }

    /**
     * @return int
     */
    public function getHomeRushingTouchdowns()
    {
        return $this->homeRushingTouchdowns;
    }

    /**
     * @param int $homeRushingTouchdowns
     */
    public function setHomeRushingTouchdowns( $homeRushingTouchdowns )
    {
        $this->homeRushingTouchdowns = $homeRushingTouchdowns;
    }

    /**
     * @return int
     */
    public function getHomePassingAttempts()
    {
        return $this->homePassingAttempts;
    }

    /**
     * @param int $homePassingAttempts
     */
    public function setHomePassingAttempts( $homePassingAttempts )
    {
        $this->homePassingAttempts = $homePassingAttempts;
    }

    /**
     * @return int
     */
    public function getHomePassingCompletions()
    {
        return $this->homePassingCompletions;
    }

    /**
     * @param int $homePassingCompletions
     */
    public function setHomePassingCompletions( $homePassingCompletions )
    {
        $this->homePassingCompletions = $homePassingCompletions;
    }

    /**
     * @return int
     */
    public function getHomePassingYards()
    {
        return $this->homePassingYards;
    }

    /**
     * @param int $homePassingYards
     */
    public function setHomePassingYards( $homePassingYards )
    {
        $this->homePassingYards = $homePassingYards;
    }

    /**
     * @return int
     */
    public function getHomePassingTouchdowns()
    {
        return $this->homePassingTouchdowns;
    }

    /**
     * @param int $homePassingTouchdowns
     */
    public function setHomePassingTouchdowns( $homePassingTouchdowns )
    {
        $this->homePassingTouchdowns = $homePassingTouchdowns;
    }

    /**
     * @return int
     */
    public function getHomePassingInterceptions()
    {
        return $this->homePassingInterceptions;
    }

    /**
     * @param int $homePassingInterceptions
     */
    public function setHomePassingInterceptions( $homePassingInterceptions )
    {
        $this->homePassingInterceptions = $homePassingInterceptions;
    }

    /**
     * @return string
     */
    public function getHomePassingYardsPerAttempt()
    {
        return $this->homePassingYardsPerAttempt;
    }

    /**
     * @param string $homePassingYardsPerAttempt
     */
    public function setHomePassingYardsPerAttempt( $homePassingYardsPerAttempt )
    {
        $this->homePassingYardsPerAttempt = $homePassingYardsPerAttempt;
    }

    /**
     * @return string
     */
    public function getHomePassingYardsPerCompletion()
    {
        return $this->homePassingYardsPerCompletion;
    }

    /**
     * @param string $homePassingYardsPerCompletion
     */
    public function setHomePassingYardsPerCompletion( $homePassingYardsPerCompletion )
    {
        $this->homePassingYardsPerCompletion = $homePassingYardsPerCompletion;
    }

    /**
     * @return string
     */
    public function getHomeCompletionPercentage()
    {
        return $this->homeCompletionPercentage;
    }

    /**
     * @param string $homeCompletionPercentage
     */
    public function setHomeCompletionPercentage( $homeCompletionPercentage )
    {
        $this->homeCompletionPercentage = $homeCompletionPercentage;
    }

    /**
     * @return string
     */
    public function getHomePasserRating()
    {
        return $this->homePasserRating;
    }

    /**
     * @param string $homePasserRating
     */
    public function setHomePasserRating( $homePasserRating )
    {
        $this->homePasserRating = $homePasserRating;
    }

    /**
     * @return int
     */
    public function getHomeThirdDownAttempts()
    {
        return $this->homeThirdDownAttempts;
    }

    /**
     * @param int $homeThirdDownAttempts
     */
    public function setHomeThirdDownAttempts( $homeThirdDownAttempts )
    {
        $this->homeThirdDownAttempts = $homeThirdDownAttempts;
    }

    /**
     * @return int
     */
    public function getHomeThirdDownConversions()
    {
        return $this->homeThirdDownConversions;
    }

    /**
     * @param int $homeThirdDownConversions
     */
    public function setHomeThirdDownConversions( $homeThirdDownConversions )
    {
        $this->homeThirdDownConversions = $homeThirdDownConversions;
    }

    /**
     * @return int
     */
    public function getHomeThirdDownPercentage()
    {
        return $this->homeThirdDownPercentage;
    }

    /**
     * @param int $homeThirdDownPercentage
     */
    public function setHomeThirdDownPercentage( $homeThirdDownPercentage )
    {
        $this->homeThirdDownPercentage = $homeThirdDownPercentage;
    }

    /**
     * @return int
     */
    public function getHomeFourthDownAttempts()
    {
        return $this->homeFourthDownAttempts;
    }

    /**
     * @param int $homeFourthDownAttempts
     */
    public function setHomeFourthDownAttempts( $homeFourthDownAttempts )
    {
        $this->homeFourthDownAttempts = $homeFourthDownAttempts;
    }

    /**
     * @return int
     */
    public function getHomeFourthDownConversions()
    {
        return $this->homeFourthDownConversions;
    }

    /**
     * @param int $homeFourthDownConversions
     */
    public function setHomeFourthDownConversions( $homeFourthDownConversions )
    {
        $this->homeFourthDownConversions = $homeFourthDownConversions;
    }

    /**
     * @return string
     */
    public function getHomeFourthDownPercentage()
    {
        return $this->homeFourthDownPercentage;
    }

    /**
     * @param string $homeFourthDownPercentage
     */
    public function setHomeFourthDownPercentage( $homeFourthDownPercentage )
    {
        $this->homeFourthDownPercentage = $homeFourthDownPercentage;
    }

    /**
     * @return int
     */
    public function getHomeRedZoneAttempts()
    {
        return $this->homeRedZoneAttempts;
    }

    /**
     * @param int $homeRedZoneAttempts
     */
    public function setHomeRedZoneAttempts( $homeRedZoneAttempts )
    {
        $this->homeRedZoneAttempts = $homeRedZoneAttempts;
    }

    /**
     * @return int
     */
    public function getHomeRedZoneConversions()
    {
        return $this->homeRedZoneConversions;
    }

    /**
     * @param int $homeRedZoneConversions
     */
    public function setHomeRedZoneConversions( $homeRedZoneConversions )
    {
        $this->homeRedZoneConversions = $homeRedZoneConversions;
    }

    /**
     * @return int
     */
    public function getHomeGoalToGoAttempts()
    {
        return $this->homeGoalToGoAttempts;
    }

    /**
     * @param int $homeGoalToGoAttempts
     */
    public function setHomeGoalToGoAttempts( $homeGoalToGoAttempts )
    {
        $this->homeGoalToGoAttempts = $homeGoalToGoAttempts;
    }

    /**
     * @return int
     */
    public function getHomeGoalToGoConversions()
    {
        return $this->homeGoalToGoConversions;
    }

    /**
     * @param int $homeGoalToGoConversions
     */
    public function setHomeGoalToGoConversions( $homeGoalToGoConversions )
    {
        $this->homeGoalToGoConversions = $homeGoalToGoConversions;
    }

    /**
     * @return int
     */
    public function getHomeReturnYards()
    {
        return $this->homeReturnYards;
    }

    /**
     * @param int $homeReturnYards
     */
    public function setHomeReturnYards( $homeReturnYards )
    {
        $this->homeReturnYards = $homeReturnYards;
    }

    /**
     * @return int
     */
    public function getHomePenalties()
    {
        return $this->homePenalties;
    }

    /**
     * @param int $homePenalties
     */
    public function setHomePenalties( $homePenalties )
    {
        $this->homePenalties = $homePenalties;
    }

    /**
     * @return int
     */
    public function getHomePenaltyYards()
    {
        return $this->homePenaltyYards;
    }

    /**
     * @param int $homePenaltyYards
     */
    public function setHomePenaltyYards( $homePenaltyYards )
    {
        $this->homePenaltyYards = $homePenaltyYards;
    }

    /**
     * @return int
     */
    public function getHomeFumbles()
    {
        return $this->homeFumbles;
    }

    /**
     * @param int $homeFumbles
     */
    public function setHomeFumbles( $homeFumbles )
    {
        $this->homeFumbles = $homeFumbles;
    }

    /**
     * @return int
     */
    public function getHomeFumblesLost()
    {
        return $this->homeFumblesLost;
    }

    /**
     * @param int $homeFumblesLost
     */
    public function setHomeFumblesLost( $homeFumblesLost )
    {
        $this->homeFumblesLost = $homeFumblesLost;
    }

    /**
     * @return int
     */
    public function getHomeTimesSacked()
    {
        return $this->homeTimesSacked;
    }

    /**
     * @param int $homeTimesSacked
     */
    public function setHomeTimesSacked( $homeTimesSacked )
    {
        $this->homeTimesSacked = $homeTimesSacked;
    }

    /**
     * @return int
     */
    public function getHomeTimesSackedYards()
    {
        return $this->homeTimesSackedYards;
    }

    /**
     * @param int $homeTimesSackedYards
     */
    public function setHomeTimesSackedYards( $homeTimesSackedYards )
    {
        $this->homeTimesSackedYards = $homeTimesSackedYards;
    }

    /**
     * @return int
     */
    public function getHomeSafeties()
    {
        return $this->homeSafeties;
    }

    /**
     * @param int $homeSafeties
     */
    public function setHomeSafeties( $homeSafeties )
    {
        $this->homeSafeties = $homeSafeties;
    }

    /**
     * @return int
     */
    public function getHomePunts()
    {
        return $this->homePunts;
    }

    /**
     * @param int $homePunts
     */
    public function setHomePunts( $homePunts )
    {
        $this->homePunts = $homePunts;
    }

    /**
     * @return int
     */
    public function getHomePuntYards()
    {
        return $this->homePuntYards;
    }

    /**
     * @param int $homePuntYards
     */
    public function setHomePuntYards( $homePuntYards )
    {
        $this->homePuntYards = $homePuntYards;
    }

    /**
     * @return string
     */
    public function getHomePuntAverage()
    {
        return $this->homePuntAverage;
    }

    /**
     * @param string $homePuntAverage
     */
    public function setHomePuntAverage( $homePuntAverage )
    {
        $this->homePuntAverage = $homePuntAverage;
    }

    /**
     * @return int
     */
    public function getHomeGiveAways()
    {
        return $this->homeGiveAways;
    }

    /**
     * @param int $homeGiveAways
     */
    public function setHomeGiveAways( $homeGiveAways )
    {
        $this->homeGiveAways = $homeGiveAways;
    }

    /**
     * @return int
     */
    public function getHomeTakeAways()
    {
        return $this->homeTakeAways;
    }

    /**
     * @param int $homeTakeAways
     */
    public function setHomeTakeAways( $homeTakeAways )
    {
        $this->homeTakeAways = $homeTakeAways;
    }

    /**
     * @return int
     */
    public function getHomeTurnoverDifferential()
    {
        return $this->homeTurnoverDifferential;
    }

    /**
     * @param int $homeTurnoverDifferential
     */
    public function setHomeTurnoverDifferential( $homeTurnoverDifferential )
    {
        $this->homeTurnoverDifferential = $homeTurnoverDifferential;
    }

    /**
     * @return int
     */
    public function getHomeKickoffs()
    {
        return $this->homeKickoffs;
    }

    /**
     * @param int $homeKickoffs
     */
    public function setHomeKickoffs( $homeKickoffs )
    {
        $this->homeKickoffs = $homeKickoffs;
    }

    /**
     * @return int
     */
    public function getHomeKickoffsInEndZone()
    {
        return $this->homeKickoffsInEndZone;
    }

    /**
     * @param int $homeKickoffsInEndZone
     */
    public function setHomeKickoffsInEndZone( $homeKickoffsInEndZone )
    {
        $this->homeKickoffsInEndZone = $homeKickoffsInEndZone;
    }

    /**
     * @return int
     */
    public function getHomeKickoffTouchbacks()
    {
        return $this->homeKickoffTouchbacks;
    }

    /**
     * @param int $homeKickoffTouchbacks
     */
    public function setHomeKickoffTouchbacks( $homeKickoffTouchbacks )
    {
        $this->homeKickoffTouchbacks = $homeKickoffTouchbacks;
    }

    /**
     * @return int
     */
    public function getHomePuntsHadBlocked()
    {
        return $this->homePuntsHadBlocked;
    }

    /**
     * @param int $homePuntsHadBlocked
     */
    public function setHomePuntsHadBlocked( $homePuntsHadBlocked )
    {
        $this->homePuntsHadBlocked = $homePuntsHadBlocked;
    }

    /**
     * @return string
     */
    public function getHomePuntNetAverage()
    {
        return $this->homePuntNetAverage;
    }

    /**
     * @param string $homePuntNetAverage
     */
    public function setHomePuntNetAverage( $homePuntNetAverage )
    {
        $this->homePuntNetAverage = $homePuntNetAverage;
    }

    /**
     * @return int
     */
    public function getHomeExtraPointKickingAttempts()
    {
        return $this->homeExtraPointKickingAttempts;
    }

    /**
     * @param int $homeExtraPointKickingAttempts
     */
    public function setHomeExtraPointKickingAttempts( $homeExtraPointKickingAttempts )
    {
        $this->homeExtraPointKickingAttempts = $homeExtraPointKickingAttempts;
    }

    /**
     * @return int
     */
    public function getHomeExtraPointKickingConversions()
    {
        return $this->homeExtraPointKickingConversions;
    }

    /**
     * @param int $homeExtraPointKickingConversions
     */
    public function setHomeExtraPointKickingConversions( $homeExtraPointKickingConversions )
    {
        $this->homeExtraPointKickingConversions = $homeExtraPointKickingConversions;
    }

    /**
     * @return int
     */
    public function getHomeExtraPointsHadBlocked()
    {
        return $this->homeExtraPointsHadBlocked;
    }

    /**
     * @param int $homeExtraPointsHadBlocked
     */
    public function setHomeExtraPointsHadBlocked( $homeExtraPointsHadBlocked )
    {
        $this->homeExtraPointsHadBlocked = $homeExtraPointsHadBlocked;
    }

    /**
     * @return int
     */
    public function getHomeExtraPointPassingAttempts()
    {
        return $this->homeExtraPointPassingAttempts;
    }

    /**
     * @param int $homeExtraPointPassingAttempts
     */
    public function setHomeExtraPointPassingAttempts( $homeExtraPointPassingAttempts )
    {
        $this->homeExtraPointPassingAttempts = $homeExtraPointPassingAttempts;
    }

    /**
     * @return int
     */
    public function getHomeExtraPointPassingConversions()
    {
        return $this->homeExtraPointPassingConversions;
    }

    /**
     * @param int $homeExtraPointPassingConversions
     */
    public function setHomeExtraPointPassingConversions( $homeExtraPointPassingConversions )
    {
        $this->homeExtraPointPassingConversions = $homeExtraPointPassingConversions;
    }

    /**
     * @return int
     */
    public function getHomeExtraPointRushingAttempts()
    {
        return $this->homeExtraPointRushingAttempts;
    }

    /**
     * @param int $homeExtraPointRushingAttempts
     */
    public function setHomeExtraPointRushingAttempts( $homeExtraPointRushingAttempts )
    {
        $this->homeExtraPointRushingAttempts = $homeExtraPointRushingAttempts;
    }

    /**
     * @return int
     */
    public function getHomeExtraPointRushingConversions()
    {
        return $this->homeExtraPointRushingConversions;
    }

    /**
     * @param int $homeExtraPointRushingConversions
     */
    public function setHomeExtraPointRushingConversions( $homeExtraPointRushingConversions )
    {
        $this->homeExtraPointRushingConversions = $homeExtraPointRushingConversions;
    }

    /**
     * @return int
     */
    public function getHomeFieldGoalAttempts()
    {
        return $this->homeFieldGoalAttempts;
    }

    /**
     * @param int $homeFieldGoalAttempts
     */
    public function setHomeFieldGoalAttempts( $homeFieldGoalAttempts )
    {
        $this->homeFieldGoalAttempts = $homeFieldGoalAttempts;
    }

    /**
     * @return int
     */
    public function getHomeFieldGoalsMade()
    {
        return $this->homeFieldGoalsMade;
    }

    /**
     * @param int $homeFieldGoalsMade
     */
    public function setHomeFieldGoalsMade( $homeFieldGoalsMade )
    {
        $this->homeFieldGoalsMade = $homeFieldGoalsMade;
    }

    /**
     * @return int
     */
    public function getHomeFieldGoalsHadBlocked()
    {
        return $this->homeFieldGoalsHadBlocked;
    }

    /**
     * @param int $homeFieldGoalsHadBlocked
     */
    public function setHomeFieldGoalsHadBlocked( $homeFieldGoalsHadBlocked )
    {
        $this->homeFieldGoalsHadBlocked = $homeFieldGoalsHadBlocked;
    }

    /**
     * @return int
     */
    public function getHomePuntReturns()
    {
        return $this->homePuntReturns;
    }

    /**
     * @param int $homePuntReturns
     */
    public function setHomePuntReturns( $homePuntReturns )
    {
        $this->homePuntReturns = $homePuntReturns;
    }

    /**
     * @return int
     */
    public function getHomePuntReturnYards()
    {
        return $this->homePuntReturnYards;
    }

    /**
     * @param int $homePuntReturnYards
     */
    public function setHomePuntReturnYards( $homePuntReturnYards )
    {
        $this->homePuntReturnYards = $homePuntReturnYards;
    }

    /**
     * @return int
     */
    public function getHomeKickReturns()
    {
        return $this->homeKickReturns;
    }

    /**
     * @param int $homeKickReturns
     */
    public function setHomeKickReturns( $homeKickReturns )
    {
        $this->homeKickReturns = $homeKickReturns;
    }

    /**
     * @return int
     */
    public function getHomeKickReturnYards()
    {
        return $this->homeKickReturnYards;
    }

    /**
     * @param int $homeKickReturnYards
     */
    public function setHomeKickReturnYards( $homeKickReturnYards )
    {
        $this->homeKickReturnYards = $homeKickReturnYards;
    }

    /**
     * @return int
     */
    public function getHomeInterceptionReturns()
    {
        return $this->homeInterceptionReturns;
    }

    /**
     * @param int $homeInterceptionReturns
     */
    public function setHomeInterceptionReturns( $homeInterceptionReturns )
    {
        $this->homeInterceptionReturns = $homeInterceptionReturns;
    }

    /**
     * @return int
     */
    public function getHomeInterceptionReturnYards()
    {
        return $this->homeInterceptionReturnYards;
    }

    /**
     * @param int $homeInterceptionReturnYards
     */
    public function setHomeInterceptionReturnYards( $homeInterceptionReturnYards )
    {
        $this->homeInterceptionReturnYards = $homeInterceptionReturnYards;
    }

    /**
     * @return int
     */
    public function getHomeSoloTackles()
    {
        return $this->homeSoloTackles;
    }

    /**
     * @param int $homeSoloTackles
     */
    public function setHomeSoloTackles( $homeSoloTackles )
    {
        $this->homeSoloTackles = $homeSoloTackles;
    }

    /**
     * @return int
     */
    public function getHomeAssistedTackles()
    {
        return $this->homeAssistedTackles;
    }

    /**
     * @param int $homeAssistedTackles
     */
    public function setHomeAssistedTackles( $homeAssistedTackles )
    {
        $this->homeAssistedTackles = $homeAssistedTackles;
    }

    /**
     * @return int
     */
    public function getHomeQuarterbackHits()
    {
        return $this->homeQuarterbackHits;
    }

    /**
     * @param int $homeQuarterbackHits
     */
    public function setHomeQuarterbackHits( $homeQuarterbackHits )
    {
        $this->homeQuarterbackHits = $homeQuarterbackHits;
    }

    /**
     * @return int
     */
    public function getHomeTacklesForLoss()
    {
        return $this->homeTacklesForLoss;
    }

    /**
     * @param int $homeTacklesForLoss
     */
    public function setHomeTacklesForLoss( $homeTacklesForLoss )
    {
        $this->homeTacklesForLoss = $homeTacklesForLoss;
    }

    /**
     * @return int
     */
    public function getHomeSacks()
    {
        return $this->homeSacks;
    }

    /**
     * @param int $homeSacks
     */
    public function setHomeSacks( $homeSacks )
    {
        $this->homeSacks = $homeSacks;
    }

    /**
     * @return int
     */
    public function getHomeSackYards()
    {
        return $this->homeSackYards;
    }

    /**
     * @param int $homeSackYards
     */
    public function setHomeSackYards( $homeSackYards )
    {
        $this->homeSackYards = $homeSackYards;
    }

    /**
     * @return int
     */
    public function getHomePassesDefended()
    {
        return $this->homePassesDefended;
    }

    /**
     * @param int $homePassesDefended
     */
    public function setHomePassesDefended( $homePassesDefended )
    {
        $this->homePassesDefended = $homePassesDefended;
    }

    /**
     * @return int
     */
    public function getHomeFumblesForced()
    {
        return $this->homeFumblesForced;
    }

    /**
     * @param int $homeFumblesForced
     */
    public function setHomeFumblesForced( $homeFumblesForced )
    {
        $this->homeFumblesForced = $homeFumblesForced;
    }

    /**
     * @return int
     */
    public function getHomeFumblesRecovered()
    {
        return $this->homeFumblesRecovered;
    }

    /**
     * @param int $homeFumblesRecovered
     */
    public function setHomeFumblesRecovered( $homeFumblesRecovered )
    {
        $this->homeFumblesRecovered = $homeFumblesRecovered;
    }

    /**
     * @return int
     */
    public function getHomeFumbleReturnYards()
    {
        return $this->homeFumbleReturnYards;
    }

    /**
     * @param int $homeFumbleReturnYards
     */
    public function setHomeFumbleReturnYards( $homeFumbleReturnYards )
    {
        $this->homeFumbleReturnYards = $homeFumbleReturnYards;
    }

    /**
     * @return int
     */
    public function getHomeFumbleReturnTouchdowns()
    {
        return $this->homeFumbleReturnTouchdowns;
    }

    /**
     * @param int $homeFumbleReturnTouchdowns
     */
    public function setHomeFumbleReturnTouchdowns( $homeFumbleReturnTouchdowns )
    {
        $this->homeFumbleReturnTouchdowns = $homeFumbleReturnTouchdowns;
    }

    /**
     * @return int
     */
    public function getHomeInterceptionReturnTouchdowns()
    {
        return $this->homeInterceptionReturnTouchdowns;
    }

    /**
     * @param int $homeInterceptionReturnTouchdowns
     */
    public function setHomeInterceptionReturnTouchdowns( $homeInterceptionReturnTouchdowns )
    {
        $this->homeInterceptionReturnTouchdowns = $homeInterceptionReturnTouchdowns;
    }

    /**
     * @return int
     */
    public function getHomeBlockedKicks()
    {
        return $this->homeBlockedKicks;
    }

    /**
     * @param int $homeBlockedKicks
     */
    public function setHomeBlockedKicks( $homeBlockedKicks )
    {
        $this->homeBlockedKicks = $homeBlockedKicks;
    }

    /**
     * @return int
     */
    public function getHomePuntReturnTouchdowns()
    {
        return $this->homePuntReturnTouchdowns;
    }

    /**
     * @param int $homePuntReturnTouchdowns
     */
    public function setHomePuntReturnTouchdowns( $homePuntReturnTouchdowns )
    {
        $this->homePuntReturnTouchdowns = $homePuntReturnTouchdowns;
    }

    /**
     * @return int
     */
    public function getHomePuntReturnLong()
    {
        return $this->homePuntReturnLong;
    }

    /**
     * @param int $homePuntReturnLong
     */
    public function setHomePuntReturnLong( $homePuntReturnLong )
    {
        $this->homePuntReturnLong = $homePuntReturnLong;
    }

    /**
     * @return int
     */
    public function getHomeKickReturnTouchdowns()
    {
        return $this->homeKickReturnTouchdowns;
    }

    /**
     * @param int $homeKickReturnTouchdowns
     */
    public function setHomeKickReturnTouchdowns( $homeKickReturnTouchdowns )
    {
        $this->homeKickReturnTouchdowns = $homeKickReturnTouchdowns;
    }

    /**
     * @return int
     */
    public function getHomeKickReturnLong()
    {
        return $this->homeKickReturnLong;
    }

    /**
     * @param int $homeKickReturnLong
     */
    public function setHomeKickReturnLong( $homeKickReturnLong )
    {
        $this->homeKickReturnLong = $homeKickReturnLong;
    }

    /**
     * @return int
     */
    public function getHomeBlockedKickReturnYards()
    {
        return $this->homeBlockedKickReturnYards;
    }

    /**
     * @param int $homeBlockedKickReturnYards
     */
    public function setHomeBlockedKickReturnYards( $homeBlockedKickReturnYards )
    {
        $this->homeBlockedKickReturnYards = $homeBlockedKickReturnYards;
    }

    /**
     * @return int
     */
    public function getHomeBlockedKickReturnTouchdowns()
    {
        return $this->homeBlockedKickReturnTouchdowns;
    }

    /**
     * @param int $homeBlockedKickReturnTouchdowns
     */
    public function setHomeBlockedKickReturnTouchdowns( $homeBlockedKickReturnTouchdowns )
    {
        $this->homeBlockedKickReturnTouchdowns = $homeBlockedKickReturnTouchdowns;
    }

    /**
     * @return int
     */
    public function getHomeFieldGoalReturnYards()
    {
        return $this->homeFieldGoalReturnYards;
    }

    /**
     * @param int $homeFieldGoalReturnYards
     */
    public function setHomeFieldGoalReturnYards( $homeFieldGoalReturnYards )
    {
        $this->homeFieldGoalReturnYards = $homeFieldGoalReturnYards;
    }

    /**
     * @return int
     */
    public function getHomeFieldGoalReturnTouchdowns()
    {
        return $this->homeFieldGoalReturnTouchdowns;
    }

    /**
     * @param int $homeFieldGoalReturnTouchdowns
     */
    public function setHomeFieldGoalReturnTouchdowns( $homeFieldGoalReturnTouchdowns )
    {
        $this->homeFieldGoalReturnTouchdowns = $homeFieldGoalReturnTouchdowns;
    }

    /**
     * @return int
     */
    public function getHomePuntNetYards()
    {
        return $this->homePuntNetYards;
    }

    /**
     * @param int $homePuntNetYards
     */
    public function setHomePuntNetYards( $homePuntNetYards )
    {
        $this->homePuntNetYards = $homePuntNetYards;
    }

    /**
     * @return int
     */
    public function getAwayScoreQuarter1()
    {
        return $this->awayScoreQuarter1;
    }

    /**
     * @param int $awayScoreQuarter1
     */
    public function setAwayScoreQuarter1( $awayScoreQuarter1 )
    {
        $this->awayScoreQuarter1 = $awayScoreQuarter1;
    }

    /**
     * @return int
     */
    public function getAwayScoreQuarter2()
    {
        return $this->awayScoreQuarter2;
    }

    /**
     * @param int $awayScoreQuarter2
     */
    public function setAwayScoreQuarter2( $awayScoreQuarter2 )
    {
        $this->awayScoreQuarter2 = $awayScoreQuarter2;
    }

    /**
     * @return int
     */
    public function getAwayScoreQuarter3()
    {
        return $this->awayScoreQuarter3;
    }

    /**
     * @param int $awayScoreQuarter3
     */
    public function setAwayScoreQuarter3( $awayScoreQuarter3 )
    {
        $this->awayScoreQuarter3 = $awayScoreQuarter3;
    }

    /**
     * @return int
     */
    public function getAwayScoreQuarter4()
    {
        return $this->awayScoreQuarter4;
    }

    /**
     * @param int $awayScoreQuarter4
     */
    public function setAwayScoreQuarter4( $awayScoreQuarter4 )
    {
        $this->awayScoreQuarter4 = $awayScoreQuarter4;
    }

    /**
     * @return int
     */
    public function getAwayScoreOvertime()
    {
        return $this->awayScoreOvertime;
    }

    /**
     * @param int $awayScoreOvertime
     */
    public function setAwayScoreOvertime( $awayScoreOvertime )
    {
        $this->awayScoreOvertime = $awayScoreOvertime;
    }

    /**
     * @return string
     */
    public function getAwayTimeOfPossession()
    {
        return $this->awayTimeOfPossession;
    }

    /**
     * @param string $awayTimeOfPossession
     */
    public function setAwayTimeOfPossession( $awayTimeOfPossession )
    {
        $this->awayTimeOfPossession = $awayTimeOfPossession;
    }

    /**
     * @return int
     */
    public function getAwayFirstDownsByRushing()
    {
        return $this->awayFirstDownsByRushing;
    }

    /**
     * @param int $awayFirstDownsByRushing
     */
    public function setAwayFirstDownsByRushing( $awayFirstDownsByRushing )
    {
        $this->awayFirstDownsByRushing = $awayFirstDownsByRushing;
    }

    /**
     * @return int
     */
    public function getAwayFirstDowns()
    {
        return $this->awayFirstDowns;
    }

    /**
     * @param int $awayFirstDowns
     */
    public function setAwayFirstDowns( $awayFirstDowns )
    {
        $this->awayFirstDowns = $awayFirstDowns;
    }

    /**
     * @return int
     */
    public function getAwayFirstDownsByPassing()
    {
        return $this->awayFirstDownsByPassing;
    }

    /**
     * @param int $awayFirstDownsByPassing
     */
    public function setAwayFirstDownsByPassing( $awayFirstDownsByPassing )
    {
        $this->awayFirstDownsByPassing = $awayFirstDownsByPassing;
    }

    /**
     * @return int
     */
    public function getAwayFirstDownsByPenalty()
    {
        return $this->awayFirstDownsByPenalty;
    }

    /**
     * @param int $awayFirstDownsByPenalty
     */
    public function setAwayFirstDownsByPenalty( $awayFirstDownsByPenalty )
    {
        $this->awayFirstDownsByPenalty = $awayFirstDownsByPenalty;
    }

    /**
     * @return int
     */
    public function getAwayOffensivePlays()
    {
        return $this->awayOffensivePlays;
    }

    /**
     * @param int $awayOffensivePlays
     */
    public function setAwayOffensivePlays( $awayOffensivePlays )
    {
        $this->awayOffensivePlays = $awayOffensivePlays;
    }

    /**
     * @return int
     */
    public function getAwayOffensiveYards()
    {
        return $this->awayOffensiveYards;
    }

    /**
     * @param int $awayOffensiveYards
     */
    public function setAwayOffensiveYards( $awayOffensiveYards )
    {
        $this->awayOffensiveYards = $awayOffensiveYards;
    }

    /**
     * @return string
     */
    public function getAwayOffensiveYardsPerPlay()
    {
        return $this->awayOffensiveYardsPerPlay;
    }

    /**
     * @param string $awayOffensiveYardsPerPlay
     */
    public function setAwayOffensiveYardsPerPlay( $awayOffensiveYardsPerPlay )
    {
        $this->awayOffensiveYardsPerPlay = $awayOffensiveYardsPerPlay;
    }

    /**
     * @return int
     */
    public function getAwayTouchDowns()
    {
        return $this->awayTouchDowns;
    }

    /**
     * @param int $awayTouchDowns
     */
    public function setAwayTouchDowns( $awayTouchDowns )
    {
        $this->awayTouchDowns = $awayTouchDowns;
    }

    /**
     * @return int
     */
    public function getAwayRushingAttempts()
    {
        return $this->awayRushingAttempts;
    }

    /**
     * @param int $awayRushingAttempts
     */
    public function setAwayRushingAttempts( $awayRushingAttempts )
    {
        $this->awayRushingAttempts = $awayRushingAttempts;
    }

    /**
     * @return int
     */
    public function getAwayRushingYards()
    {
        return $this->awayRushingYards;
    }

    /**
     * @param int $awayRushingYards
     */
    public function setAwayRushingYards( $awayRushingYards )
    {
        $this->awayRushingYards = $awayRushingYards;
    }

    /**
     * @return string
     */
    public function getAwayRushingYardsPerAttempt()
    {
        return $this->awayRushingYardsPerAttempt;
    }

    /**
     * @param string $awayRushingYardsPerAttempt
     */
    public function setAwayRushingYardsPerAttempt( $awayRushingYardsPerAttempt )
    {
        $this->awayRushingYardsPerAttempt = $awayRushingYardsPerAttempt;
    }

    /**
     * @return int
     */
    public function getAwayRushingTouchdowns()
    {
        return $this->awayRushingTouchdowns;
    }

    /**
     * @param int $awayRushingTouchdowns
     */
    public function setAwayRushingTouchdowns( $awayRushingTouchdowns )
    {
        $this->awayRushingTouchdowns = $awayRushingTouchdowns;
    }

    /**
     * @return int
     */
    public function getAwayPassingAttempts()
    {
        return $this->awayPassingAttempts;
    }

    /**
     * @param int $awayPassingAttempts
     */
    public function setAwayPassingAttempts( $awayPassingAttempts )
    {
        $this->awayPassingAttempts = $awayPassingAttempts;
    }

    /**
     * @return int
     */
    public function getAwayPassingCompletions()
    {
        return $this->awayPassingCompletions;
    }

    /**
     * @param int $awayPassingCompletions
     */
    public function setAwayPassingCompletions( $awayPassingCompletions )
    {
        $this->awayPassingCompletions = $awayPassingCompletions;
    }

    /**
     * @return int
     */
    public function getAwayPassingYards()
    {
        return $this->awayPassingYards;
    }

    /**
     * @param int $awayPassingYards
     */
    public function setAwayPassingYards( $awayPassingYards )
    {
        $this->awayPassingYards = $awayPassingYards;
    }

    /**
     * @return int
     */
    public function getAwayPassingTouchdowns()
    {
        return $this->awayPassingTouchdowns;
    }

    /**
     * @param int $awayPassingTouchdowns
     */
    public function setAwayPassingTouchdowns( $awayPassingTouchdowns )
    {
        $this->awayPassingTouchdowns = $awayPassingTouchdowns;
    }

    /**
     * @return int
     */
    public function getAwayPassingInterceptions()
    {
        return $this->awayPassingInterceptions;
    }

    /**
     * @param int $awayPassingInterceptions
     */
    public function setAwayPassingInterceptions( $awayPassingInterceptions )
    {
        $this->awayPassingInterceptions = $awayPassingInterceptions;
    }

    /**
     * @return string
     */
    public function getAwayPassingYardsPerAttempt()
    {
        return $this->awayPassingYardsPerAttempt;
    }

    /**
     * @param string $awayPassingYardsPerAttempt
     */
    public function setAwayPassingYardsPerAttempt( $awayPassingYardsPerAttempt )
    {
        $this->awayPassingYardsPerAttempt = $awayPassingYardsPerAttempt;
    }

    /**
     * @return string
     */
    public function getAwayPassingYardsPerCompletion()
    {
        return $this->awayPassingYardsPerCompletion;
    }

    /**
     * @param string $awayPassingYardsPerCompletion
     */
    public function setAwayPassingYardsPerCompletion( $awayPassingYardsPerCompletion )
    {
        $this->awayPassingYardsPerCompletion = $awayPassingYardsPerCompletion;
    }

    /**
     * @return string
     */
    public function getAwayCompletionPercentage()
    {
        return $this->awayCompletionPercentage;
    }

    /**
     * @param string $awayCompletionPercentage
     */
    public function setAwayCompletionPercentage( $awayCompletionPercentage )
    {
        $this->awayCompletionPercentage = $awayCompletionPercentage;
    }

    /**
     * @return string
     */
    public function getAwayPasserRating()
    {
        return $this->awayPasserRating;
    }

    /**
     * @param string $awayPasserRating
     */
    public function setAwayPasserRating( $awayPasserRating )
    {
        $this->awayPasserRating = $awayPasserRating;
    }

    /**
     * @return int
     */
    public function getAwayThirdDownAttempts()
    {
        return $this->awayThirdDownAttempts;
    }

    /**
     * @param int $awayThirdDownAttempts
     */
    public function setAwayThirdDownAttempts( $awayThirdDownAttempts )
    {
        $this->awayThirdDownAttempts = $awayThirdDownAttempts;
    }

    /**
     * @return int
     */
    public function getAwayThirdDownConversions()
    {
        return $this->awayThirdDownConversions;
    }

    /**
     * @param int $awayThirdDownConversions
     */
    public function setAwayThirdDownConversions( $awayThirdDownConversions )
    {
        $this->awayThirdDownConversions = $awayThirdDownConversions;
    }

    /**
     * @return int
     */
    public function getAwayThirdDownPercentage()
    {
        return $this->awayThirdDownPercentage;
    }

    /**
     * @param int $awayThirdDownPercentage
     */
    public function setAwayThirdDownPercentage( $awayThirdDownPercentage )
    {
        $this->awayThirdDownPercentage = $awayThirdDownPercentage;
    }

    /**
     * @return int
     */
    public function getAwayFourthDownAttempts()
    {
        return $this->awayFourthDownAttempts;
    }

    /**
     * @param int $awayFourthDownAttempts
     */
    public function setAwayFourthDownAttempts( $awayFourthDownAttempts )
    {
        $this->awayFourthDownAttempts = $awayFourthDownAttempts;
    }

    /**
     * @return int
     */
    public function getAwayFourthDownConversions()
    {
        return $this->awayFourthDownConversions;
    }

    /**
     * @param int $awayFourthDownConversions
     */
    public function setAwayFourthDownConversions( $awayFourthDownConversions )
    {
        $this->awayFourthDownConversions = $awayFourthDownConversions;
    }

    /**
     * @return string
     */
    public function getAwayFourthDownPercentage()
    {
        return $this->awayFourthDownPercentage;
    }

    /**
     * @param string $awayFourthDownPercentage
     */
    public function setAwayFourthDownPercentage( $awayFourthDownPercentage )
    {
        $this->awayFourthDownPercentage = $awayFourthDownPercentage;
    }

    /**
     * @return int
     */
    public function getAwayRedZoneAttempts()
    {
        return $this->awayRedZoneAttempts;
    }

    /**
     * @param int $awayRedZoneAttempts
     */
    public function setAwayRedZoneAttempts( $awayRedZoneAttempts )
    {
        $this->awayRedZoneAttempts = $awayRedZoneAttempts;
    }

    /**
     * @return int
     */
    public function getAwayRedZoneConversions()
    {
        return $this->awayRedZoneConversions;
    }

    /**
     * @param int $awayRedZoneConversions
     */
    public function setAwayRedZoneConversions( $awayRedZoneConversions )
    {
        $this->awayRedZoneConversions = $awayRedZoneConversions;
    }

    /**
     * @return int
     */
    public function getAwayGoalToGoAttempts()
    {
        return $this->awayGoalToGoAttempts;
    }

    /**
     * @param int $awayGoalToGoAttempts
     */
    public function setAwayGoalToGoAttempts( $awayGoalToGoAttempts )
    {
        $this->awayGoalToGoAttempts = $awayGoalToGoAttempts;
    }

    /**
     * @return int
     */
    public function getAwayGoalToGoConversions()
    {
        return $this->awayGoalToGoConversions;
    }

    /**
     * @param int $awayGoalToGoConversions
     */
    public function setAwayGoalToGoConversions( $awayGoalToGoConversions )
    {
        $this->awayGoalToGoConversions = $awayGoalToGoConversions;
    }

    /**
     * @return int
     */
    public function getAwayReturnYards()
    {
        return $this->awayReturnYards;
    }

    /**
     * @param int $awayReturnYards
     */
    public function setAwayReturnYards( $awayReturnYards )
    {
        $this->awayReturnYards = $awayReturnYards;
    }

    /**
     * @return int
     */
    public function getAwayPenalties()
    {
        return $this->awayPenalties;
    }

    /**
     * @param int $awayPenalties
     */
    public function setAwayPenalties( $awayPenalties )
    {
        $this->awayPenalties = $awayPenalties;
    }

    /**
     * @return int
     */
    public function getAwayPenaltyYards()
    {
        return $this->awayPenaltyYards;
    }

    /**
     * @param int $awayPenaltyYards
     */
    public function setAwayPenaltyYards( $awayPenaltyYards )
    {
        $this->awayPenaltyYards = $awayPenaltyYards;
    }

    /**
     * @return int
     */
    public function getAwayFumbles()
    {
        return $this->awayFumbles;
    }

    /**
     * @param int $awayFumbles
     */
    public function setAwayFumbles( $awayFumbles )
    {
        $this->awayFumbles = $awayFumbles;
    }

    /**
     * @return int
     */
    public function getAwayFumblesLost()
    {
        return $this->awayFumblesLost;
    }

    /**
     * @param int $awayFumblesLost
     */
    public function setAwayFumblesLost( $awayFumblesLost )
    {
        $this->awayFumblesLost = $awayFumblesLost;
    }

    /**
     * @return int
     */
    public function getAwayTimesSacked()
    {
        return $this->awayTimesSacked;
    }

    /**
     * @param int $awayTimesSacked
     */
    public function setAwayTimesSacked( $awayTimesSacked )
    {
        $this->awayTimesSacked = $awayTimesSacked;
    }

    /**
     * @return int
     */
    public function getAwayTimesSackedYards()
    {
        return $this->awayTimesSackedYards;
    }

    /**
     * @param int $awayTimesSackedYards
     */
    public function setAwayTimesSackedYards( $awayTimesSackedYards )
    {
        $this->awayTimesSackedYards = $awayTimesSackedYards;
    }

    /**
     * @return int
     */
    public function getAwaySafeties()
    {
        return $this->awaySafeties;
    }

    /**
     * @param int $awaySafeties
     */
    public function setAwaySafeties( $awaySafeties )
    {
        $this->awaySafeties = $awaySafeties;
    }

    /**
     * @return int
     */
    public function getAwayPunts()
    {
        return $this->awayPunts;
    }

    /**
     * @param int $awayPunts
     */
    public function setAwayPunts( $awayPunts )
    {
        $this->awayPunts = $awayPunts;
    }

    /**
     * @return int
     */
    public function getAwayPuntYards()
    {
        return $this->awayPuntYards;
    }

    /**
     * @param int $awayPuntYards
     */
    public function setAwayPuntYards( $awayPuntYards )
    {
        $this->awayPuntYards = $awayPuntYards;
    }

    /**
     * @return string
     */
    public function getAwayPuntAverage()
    {
        return $this->awayPuntAverage;
    }

    /**
     * @param string $awayPuntAverage
     */
    public function setAwayPuntAverage( $awayPuntAverage )
    {
        $this->awayPuntAverage = $awayPuntAverage;
    }

    /**
     * @return int
     */
    public function getAwayGiveAways()
    {
        return $this->awayGiveAways;
    }

    /**
     * @param int $awayGiveAways
     */
    public function setAwayGiveAways( $awayGiveAways )
    {
        $this->awayGiveAways = $awayGiveAways;
    }

    /**
     * @return int
     */
    public function getAwayTakeAways()
    {
        return $this->awayTakeAways;
    }

    /**
     * @param int $awayTakeAways
     */
    public function setAwayTakeAways( $awayTakeAways )
    {
        $this->awayTakeAways = $awayTakeAways;
    }

    /**
     * @return int
     */
    public function getAwayTurnoverDifferential()
    {
        return $this->awayTurnoverDifferential;
    }

    /**
     * @param int $awayTurnoverDifferential
     */
    public function setAwayTurnoverDifferential( $awayTurnoverDifferential )
    {
        $this->awayTurnoverDifferential = $awayTurnoverDifferential;
    }

    /**
     * @return int
     */
    public function getAwayKickoffs()
    {
        return $this->awayKickoffs;
    }

    /**
     * @param int $awayKickoffs
     */
    public function setAwayKickoffs( $awayKickoffs )
    {
        $this->awayKickoffs = $awayKickoffs;
    }

    /**
     * @return int
     */
    public function getAwayKickoffsInEndZone()
    {
        return $this->awayKickoffsInEndZone;
    }

    /**
     * @param int $awayKickoffsInEndZone
     */
    public function setAwayKickoffsInEndZone( $awayKickoffsInEndZone )
    {
        $this->awayKickoffsInEndZone = $awayKickoffsInEndZone;
    }

    /**
     * @return int
     */
    public function getAwayKickoffTouchbacks()
    {
        return $this->awayKickoffTouchbacks;
    }

    /**
     * @param int $awayKickoffTouchbacks
     */
    public function setAwayKickoffTouchbacks( $awayKickoffTouchbacks )
    {
        $this->awayKickoffTouchbacks = $awayKickoffTouchbacks;
    }

    /**
     * @return int
     */
    public function getAwayPuntsHadBlocked()
    {
        return $this->awayPuntsHadBlocked;
    }

    /**
     * @param int $awayPuntsHadBlocked
     */
    public function setAwayPuntsHadBlocked( $awayPuntsHadBlocked )
    {
        $this->awayPuntsHadBlocked = $awayPuntsHadBlocked;
    }

    /**
     * @return string
     */
    public function getAwayPuntNetAverage()
    {
        return $this->awayPuntNetAverage;
    }

    /**
     * @param string $awayPuntNetAverage
     */
    public function setAwayPuntNetAverage( $awayPuntNetAverage )
    {
        $this->awayPuntNetAverage = $awayPuntNetAverage;
    }

    /**
     * @return int
     */
    public function getAwayExtraPointKickingAttempts()
    {
        return $this->awayExtraPointKickingAttempts;
    }

    /**
     * @param int $awayExtraPointKickingAttempts
     */
    public function setAwayExtraPointKickingAttempts( $awayExtraPointKickingAttempts )
    {
        $this->awayExtraPointKickingAttempts = $awayExtraPointKickingAttempts;
    }

    /**
     * @return int
     */
    public function getAwayExtraPointKickingConversions()
    {
        return $this->awayExtraPointKickingConversions;
    }

    /**
     * @param int $awayExtraPointKickingConversions
     */
    public function setAwayExtraPointKickingConversions( $awayExtraPointKickingConversions )
    {
        $this->awayExtraPointKickingConversions = $awayExtraPointKickingConversions;
    }

    /**
     * @return int
     */
    public function getAwayExtraPointsHadBlocked()
    {
        return $this->awayExtraPointsHadBlocked;
    }

    /**
     * @param int $awayExtraPointsHadBlocked
     */
    public function setAwayExtraPointsHadBlocked( $awayExtraPointsHadBlocked )
    {
        $this->awayExtraPointsHadBlocked = $awayExtraPointsHadBlocked;
    }

    /**
     * @return int
     */
    public function getAwayExtraPointPassingAttempts()
    {
        return $this->awayExtraPointPassingAttempts;
    }

    /**
     * @param int $awayExtraPointPassingAttempts
     */
    public function setAwayExtraPointPassingAttempts( $awayExtraPointPassingAttempts )
    {
        $this->awayExtraPointPassingAttempts = $awayExtraPointPassingAttempts;
    }

    /**
     * @return int
     */
    public function getAwayExtraPointPassingConversions()
    {
        return $this->awayExtraPointPassingConversions;
    }

    /**
     * @param int $awayExtraPointPassingConversions
     */
    public function setAwayExtraPointPassingConversions( $awayExtraPointPassingConversions )
    {
        $this->awayExtraPointPassingConversions = $awayExtraPointPassingConversions;
    }

    /**
     * @return int
     */
    public function getAwayExtraPointRushingAttempts()
    {
        return $this->awayExtraPointRushingAttempts;
    }

    /**
     * @param int $awayExtraPointRushingAttempts
     */
    public function setAwayExtraPointRushingAttempts( $awayExtraPointRushingAttempts )
    {
        $this->awayExtraPointRushingAttempts = $awayExtraPointRushingAttempts;
    }

    /**
     * @return int
     */
    public function getAwayExtraPointRushingConversions()
    {
        return $this->awayExtraPointRushingConversions;
    }

    /**
     * @param int $awayExtraPointRushingConversions
     */
    public function setAwayExtraPointRushingConversions( $awayExtraPointRushingConversions )
    {
        $this->awayExtraPointRushingConversions = $awayExtraPointRushingConversions;
    }

    /**
     * @return int
     */
    public function getAwayFieldGoalAttempts()
    {
        return $this->awayFieldGoalAttempts;
    }

    /**
     * @param int $awayFieldGoalAttempts
     */
    public function setAwayFieldGoalAttempts( $awayFieldGoalAttempts )
    {
        $this->awayFieldGoalAttempts = $awayFieldGoalAttempts;
    }

    /**
     * @return int
     */
    public function getAwayFieldGoalsMade()
    {
        return $this->awayFieldGoalsMade;
    }

    /**
     * @param int $awayFieldGoalsMade
     */
    public function setAwayFieldGoalsMade( $awayFieldGoalsMade )
    {
        $this->awayFieldGoalsMade = $awayFieldGoalsMade;
    }

    /**
     * @return int
     */
    public function getAwayFieldGoalsHadBlocked()
    {
        return $this->awayFieldGoalsHadBlocked;
    }

    /**
     * @param int $awayFieldGoalsHadBlocked
     */
    public function setAwayFieldGoalsHadBlocked( $awayFieldGoalsHadBlocked )
    {
        $this->awayFieldGoalsHadBlocked = $awayFieldGoalsHadBlocked;
    }

    /**
     * @return int
     */
    public function getAwayPuntReturns()
    {
        return $this->awayPuntReturns;
    }

    /**
     * @param int $awayPuntReturns
     */
    public function setAwayPuntReturns( $awayPuntReturns )
    {
        $this->awayPuntReturns = $awayPuntReturns;
    }

    /**
     * @return int
     */
    public function getAwayPuntReturnYards()
    {
        return $this->awayPuntReturnYards;
    }

    /**
     * @param int $awayPuntReturnYards
     */
    public function setAwayPuntReturnYards( $awayPuntReturnYards )
    {
        $this->awayPuntReturnYards = $awayPuntReturnYards;
    }

    /**
     * @return int
     */
    public function getAwayKickReturns()
    {
        return $this->awayKickReturns;
    }

    /**
     * @param int $awayKickReturns
     */
    public function setAwayKickReturns( $awayKickReturns )
    {
        $this->awayKickReturns = $awayKickReturns;
    }

    /**
     * @return int
     */
    public function getAwayKickReturnYards()
    {
        return $this->awayKickReturnYards;
    }

    /**
     * @param int $awayKickReturnYards
     */
    public function setAwayKickReturnYards( $awayKickReturnYards )
    {
        $this->awayKickReturnYards = $awayKickReturnYards;
    }

    /**
     * @return int
     */
    public function getAwayInterceptionReturns()
    {
        return $this->awayInterceptionReturns;
    }

    /**
     * @param int $awayInterceptionReturns
     */
    public function setAwayInterceptionReturns( $awayInterceptionReturns )
    {
        $this->awayInterceptionReturns = $awayInterceptionReturns;
    }

    /**
     * @return int
     */
    public function getAwayInterceptionReturnYards()
    {
        return $this->awayInterceptionReturnYards;
    }

    /**
     * @param int $awayInterceptionReturnYards
     */
    public function setAwayInterceptionReturnYards( $awayInterceptionReturnYards )
    {
        $this->awayInterceptionReturnYards = $awayInterceptionReturnYards;
    }

    /**
     * @return int
     */
    public function getAwaySoloTackles()
    {
        return $this->awaySoloTackles;
    }

    /**
     * @param int $awaySoloTackles
     */
    public function setAwaySoloTackles( $awaySoloTackles )
    {
        $this->awaySoloTackles = $awaySoloTackles;
    }

    /**
     * @return int
     */
    public function getAwayAssistedTackles()
    {
        return $this->awayAssistedTackles;
    }

    /**
     * @param int $awayAssistedTackles
     */
    public function setAwayAssistedTackles( $awayAssistedTackles )
    {
        $this->awayAssistedTackles = $awayAssistedTackles;
    }

    /**
     * @return int
     */
    public function getAwayQuarterbackHits()
    {
        return $this->awayQuarterbackHits;
    }

    /**
     * @param int $awayQuarterbackHits
     */
    public function setAwayQuarterbackHits( $awayQuarterbackHits )
    {
        $this->awayQuarterbackHits = $awayQuarterbackHits;
    }

    /**
     * @return int
     */
    public function getAwayTacklesForLoss()
    {
        return $this->awayTacklesForLoss;
    }

    /**
     * @param int $awayTacklesForLoss
     */
    public function setAwayTacklesForLoss( $awayTacklesForLoss )
    {
        $this->awayTacklesForLoss = $awayTacklesForLoss;
    }

    /**
     * @return int
     */
    public function getAwaySacks()
    {
        return $this->awaySacks;
    }

    /**
     * @param int $awaySacks
     */
    public function setAwaySacks( $awaySacks )
    {
        $this->awaySacks = $awaySacks;
    }

    /**
     * @return int
     */
    public function getAwaySackYards()
    {
        return $this->awaySackYards;
    }

    /**
     * @param int $awaySackYards
     */
    public function setAwaySackYards( $awaySackYards )
    {
        $this->awaySackYards = $awaySackYards;
    }

    /**
     * @return int
     */
    public function getAwayPassesDefended()
    {
        return $this->awayPassesDefended;
    }

    /**
     * @param int $awayPassesDefended
     */
    public function setAwayPassesDefended( $awayPassesDefended )
    {
        $this->awayPassesDefended = $awayPassesDefended;
    }

    /**
     * @return int
     */
    public function getAwayFumblesForced()
    {
        return $this->awayFumblesForced;
    }

    /**
     * @param int $awayFumblesForced
     */
    public function setAwayFumblesForced( $awayFumblesForced )
    {
        $this->awayFumblesForced = $awayFumblesForced;
    }

    /**
     * @return int
     */
    public function getAwayFumblesRecovered()
    {
        return $this->awayFumblesRecovered;
    }

    /**
     * @param int $awayFumblesRecovered
     */
    public function setAwayFumblesRecovered( $awayFumblesRecovered )
    {
        $this->awayFumblesRecovered = $awayFumblesRecovered;
    }

    /**
     * @return int
     */
    public function getAwayFumbleReturnYards()
    {
        return $this->awayFumbleReturnYards;
    }

    /**
     * @param int $awayFumbleReturnYards
     */
    public function setAwayFumbleReturnYards( $awayFumbleReturnYards )
    {
        $this->awayFumbleReturnYards = $awayFumbleReturnYards;
    }

    /**
     * @return int
     */
    public function getAwayFumbleReturnTouchdowns()
    {
        return $this->awayFumbleReturnTouchdowns;
    }

    /**
     * @param int $awayFumbleReturnTouchdowns
     */
    public function setAwayFumbleReturnTouchdowns( $awayFumbleReturnTouchdowns )
    {
        $this->awayFumbleReturnTouchdowns = $awayFumbleReturnTouchdowns;
    }

    /**
     * @return int
     */
    public function getAwayInterceptionReturnTouchdowns()
    {
        return $this->awayInterceptionReturnTouchdowns;
    }

    /**
     * @param int $awayInterceptionReturnTouchdowns
     */
    public function setAwayInterceptionReturnTouchdowns( $awayInterceptionReturnTouchdowns )
    {
        $this->awayInterceptionReturnTouchdowns = $awayInterceptionReturnTouchdowns;
    }

    /**
     * @return int
     */
    public function getAwayBlockedKicks()
    {
        return $this->awayBlockedKicks;
    }

    /**
     * @param int $awayBlockedKicks
     */
    public function setAwayBlockedKicks( $awayBlockedKicks )
    {
        $this->awayBlockedKicks = $awayBlockedKicks;
    }

    /**
     * @return int
     */
    public function getAwayPuntReturnTouchdowns()
    {
        return $this->awayPuntReturnTouchdowns;
    }

    /**
     * @param int $awayPuntReturnTouchdowns
     */
    public function setAwayPuntReturnTouchdowns( $awayPuntReturnTouchdowns )
    {
        $this->awayPuntReturnTouchdowns = $awayPuntReturnTouchdowns;
    }

    /**
     * @return int
     */
    public function getAwayPuntReturnLong()
    {
        return $this->awayPuntReturnLong;
    }

    /**
     * @param int $awayPuntReturnLong
     */
    public function setAwayPuntReturnLong( $awayPuntReturnLong )
    {
        $this->awayPuntReturnLong = $awayPuntReturnLong;
    }

    /**
     * @return int
     */
    public function getAwayKickReturnTouchdowns()
    {
        return $this->awayKickReturnTouchdowns;
    }

    /**
     * @param int $awayKickReturnTouchdowns
     */
    public function setAwayKickReturnTouchdowns( $awayKickReturnTouchdowns )
    {
        $this->awayKickReturnTouchdowns = $awayKickReturnTouchdowns;
    }

    /**
     * @return int
     */
    public function getAwayKickReturnLong()
    {
        return $this->awayKickReturnLong;
    }

    /**
     * @param int $awayKickReturnLong
     */
    public function setAwayKickReturnLong( $awayKickReturnLong )
    {
        $this->awayKickReturnLong = $awayKickReturnLong;
    }

    /**
     * @return int
     */
    public function getAwayBlockedKickReturnYards()
    {
        return $this->awayBlockedKickReturnYards;
    }

    /**
     * @param int $awayBlockedKickReturnYards
     */
    public function setAwayBlockedKickReturnYards( $awayBlockedKickReturnYards )
    {
        $this->awayBlockedKickReturnYards = $awayBlockedKickReturnYards;
    }

    /**
     * @return int
     */
    public function getAwayBlockedKickReturnTouchdowns()
    {
        return $this->awayBlockedKickReturnTouchdowns;
    }

    /**
     * @param int $awayBlockedKickReturnTouchdowns
     */
    public function setAwayBlockedKickReturnTouchdowns( $awayBlockedKickReturnTouchdowns )
    {
        $this->awayBlockedKickReturnTouchdowns = $awayBlockedKickReturnTouchdowns;
    }

    /**
     * @return int
     */
    public function getAwayFieldGoalReturnYards()
    {
        return $this->awayFieldGoalReturnYards;
    }

    /**
     * @param int $awayFieldGoalReturnYards
     */
    public function setAwayFieldGoalReturnYards( $awayFieldGoalReturnYards )
    {
        $this->awayFieldGoalReturnYards = $awayFieldGoalReturnYards;
    }

    /**
     * @return int
     */
    public function getAwayFieldGoalReturnTouchdowns()
    {
        return $this->awayFieldGoalReturnTouchdowns;
    }

    /**
     * @param int $awayFieldGoalReturnTouchdowns
     */
    public function setAwayFieldGoalReturnTouchdowns( $awayFieldGoalReturnTouchdowns )
    {
        $this->awayFieldGoalReturnTouchdowns = $awayFieldGoalReturnTouchdowns;
    }

    /**
     * @return int
     */
    public function getAwayPuntNetYards()
    {
        return $this->awayPuntNetYards;
    }

    /**
     * @param int $awayPuntNetYards
     */
    public function setAwayPuntNetYards( $awayPuntNetYards )
    {
        $this->awayPuntNetYards = $awayPuntNetYards;
    }

    /**
     * @return int
     */
    public function getAwayTwoPointConversionReturns()
    {
        return $this->awayTwoPointConversionReturns;
    }

    /**
     * @param int $awayTwoPointConversionReturns
     */
    public function setAwayTwoPointConversionReturns( $awayTwoPointConversionReturns )
    {
        $this->awayTwoPointConversionReturns = $awayTwoPointConversionReturns;
    }

    /**
     * @return int
     */
    public function getHomeTwoPointConversionReturns()
    {
        return $this->homeTwoPointConversionReturns;
    }

    /**
     * @param int $homeTwoPointConversionReturns
     */
    public function setHomeTwoPointConversionReturns( $homeTwoPointConversionReturns )
    {
        $this->homeTwoPointConversionReturns = $homeTwoPointConversionReturns;
    }


}

