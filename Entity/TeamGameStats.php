<?php

namespace FantasyPro\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TeamGameStats
 *
 * @ORM\Table(name="fp_teamGameStats")
 * @ORM\Entity(repositoryClass="FantasyPro\DataBundle\Entity\TeamGameStatsRepository")
 */
class TeamGameStats
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
     * @ORM\Column(type="string", length=255, nullable=true, name="gameKey")
     */
    private $gameKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true, name="date")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="seasonType")
     */
    private $seasonType;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="season")
     */
    private $season;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="week")
     */
    private $week;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="team")
     */
    private $team;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="opponent")
     */
    private $opponent;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="homeOrAway")
     */
    private $homeOrAway;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="score")
     */
    private $score;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentScore")
     */
    private $opponentScore;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="totalScore")
     */
    private $totalScore;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="stadium")
     */
    private $stadium;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="playingSurface")
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
     * @var integer
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
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="scoreQuarter1")
     */
    private $scoreQuarter1;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="scoreQuarter2")
     */
    private $scoreQuarter2;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="scoreQuarter3")
     */
    private $scoreQuarter3;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="scoreQuarter4")
     */
    private $scoreQuarter4;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="scoreOvertime")
     */
    private $scoreOvertime;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="timeOfPossessionMinutes")
     */
    private $timeOfPossessionMinutes;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="timeOfPossessionSeconds")
     */
    private $timeOfPossessionSeconds;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="timeOfPossession")
     */
    private $timeOfPossession;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="firstDowns")
     */
    private $firstDowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="firstDownsByRushing")
     */
    private $firstDownsByRushing;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="firstDownsByPassing")
     */
    private $firstDownsByPassing;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="firstDownsByPenalty")
     */
    private $firstDownsByPenalty;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="offensivePlays")
     */
    private $offensivePlays;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="offensiveYards")
     */
    private $offensiveYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="decimal", nullable=true, name="offensiveYardsPerPlay")
     */
    private $offensiveYardsPerPlay;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="touchdowns")
     */
    private $touchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="rushingAttempts")
     */
    private $rushingAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="rushingYards")
     */
    private $rushingYards;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="rushingYardsPerAttempt")
     */
    private $rushingYardsPerAttempt;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="rushingTouchdowns")
     */
    private $rushingTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="passingAttempts")
     */
    private $passingAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="passingCompletions")
     */
    private $passingCompletions;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="passingYards")
     */
    private $passingYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="passingTouchdowns")
     */
    private $passingTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="passingInterceptions")
     */
    private $passingInterceptions;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="passingYardsPerAttempt")
     */
    private $passingYardsPerAttempt;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="passingYardsPerCompletion")
     */
    private $passingYardsPerCompletion;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="completionPercentage")
     */
    private $completionPercentage;

    /**
     * @var integer
     *
     * @ORM\Column(type="decimal", nullable=true, name="passerRating")
     */
    private $passerRating;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="thirdDownAttempts")
     */
    private $thirdDownAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="thirdDownConversions")
     */
    private $thirdDownConversions;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="thirdDownPercentage")
     */
    private $thirdDownPercentage;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="fourthDownAttempts")
     */
    private $fourthDownAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="fourthDownConversions")
     */
    private $fourthDownConversions;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="fourthDownPercentage")
     */
    private $fourthDownPercentage;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="redZoneAttempts")
     */
    private $redZoneAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="redZoneConversions")
     */
    private $redZoneConversions;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="goalToGoAttempts")
     */
    private $goalToGoAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="goalToGoConversions")
     */
    private $goalToGoConversions;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="returnYards")
     */
    private $returnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="penalties")
     */
    private $penalties;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="penaltyYards")
     */
    private $penaltyYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="fumbles")
     */
    private $fumbles;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="fumblesLost")
     */
    private $fumblesLost;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="timesSacked")
     */
    private $timesSacked;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="timesSackedYards")
     */
    private $timesSackedYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="quarterbackHits")
     */
    private $quarterbackHits;

    /**
     * @var string
     *
     * @ORM\Column(type="integer", nullable=true, name="tacklesForLoss")
     */
    private $tacklesForLoss;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="safeties")
     */
    private $safeties;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="punts")
     */
    private $punts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="puntYards")
     */
    private $puntYards;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="puntAverage")
     */
    private $puntAverage;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="giveAways")
     */
    private $giveAways;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="takeAways")
     */
    private $takeAways;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="turnoverDifferential")
     */
    private $turnoverDifferential;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentScoreQuarter1")
     */
    private $opponentScoreQuarter1;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentScoreQuarter2")
     */
    private $opponentScoreQuarter2;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentScoreQuarter3")
     */
    private $opponentScoreQuarter3;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentScoreQuarter4")
     */
    private $opponentScoreQuarter4;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentScoreOvertime")
     */
    private $opponentScoreOvertime;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentTimeOfPossessionMinutes")
     */
    private $opponentTimeOfPossessionMinutes;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentTimeOfPossessionSeconds")
     */
    private $opponentTimeOfPossessionSeconds;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentTimeOfPossession")
     */
    private $opponentTimeOfPossession;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentFirstDowns")
     */
    private $opponentFirstDowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentFirstDownsByRushing")
     */
    private $opponentFirstDownsByRushing;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentFirstDownsByPassing")
     */
    private $opponentFirstDownsByPassing;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentFirstDownsByPenalty")
     */
    private $opponentFirstDownsByPenalty;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentOffensivePlays")
     */
    private $opponentOffensivePlays;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentOffensiveYards")
     */
    private $opponentOffensiveYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="decimal", nullable=true, name="opponentOffensiveYardsPerPlay")
     */
    private $opponentOffensiveYardsPerPlay;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentTouchdowns")
     */
    private $opponentTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentRushingAttempts")
     */
    private $opponentRushingAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentRushingYards")
     */
    private $opponentRushingYards;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="opponentRushingYardsPerAttempt")
     */
    private $opponentRushingYardsPerAttempt;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentRushingTouchdowns")
     */
    private $opponentRushingTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentPassingAttempts")
     */
    private $opponentPassingAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentPassingCompletions")
     */
    private $opponentPassingCompletions;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentPassingYards")
     */
    private $opponentPassingYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentPassingTouchdowns")
     */
    private $opponentPassingTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentPassingInterceptions")
     */
    private $opponentPassingInterceptions;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="opponentPassingYardsPerAttempt")
     */
    private $opponentPassingYardsPerAttempt;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="opponentPassingYardsPerCompletion")
     */
    private $opponentPassingYardsPerCompletion;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="opponentCompletionPercentage")
     */
    private $opponentCompletionPercentage;

    /**
     * @var integer
     *
     * @ORM\Column(type="decimal", nullable=true, name="opponentPasserRating")
     */
    private $opponentPasserRating;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentThirdDownAttempts")
     */
    private $opponentThirdDownAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentThirdDownConversions")
     */
    private $opponentThirdDownConversions;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="opponentThirdDownPercentage")
     */
    private $opponentThirdDownPercentage;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentFourthDownAttempts")
     */
    private $opponentFourthDownAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentFourthDownConversions")
     */
    private $opponentFourthDownConversions;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="opponentFourthDownPercentage")
     */
    private $opponentFourthDownPercentage;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentRedZoneAttempts")
     */
    private $opponentRedZoneAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentRedZoneConversions")
     */
    private $opponentRedZoneConversions;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentGoalToGoAttempts")
     */
    private $opponentGoalToGoAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentGoalToGoConversions")
     */
    private $opponentGoalToGoConversions;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentReturnYards")
     */
    private $opponentReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentPenalties")
     */
    private $opponentPenalties;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentPenaltyYards")
     */
    private $opponentPenaltyYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentFumbles")
     */
    private $opponentFumbles;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentFumblesLost")
     */
    private $opponentFumblesLost;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentTimesSacked")
     */
    private $opponentTimesSacked;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentTimesSackedYards")
     */
    private $opponentTimesSackedYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentQuarterbackHits")
     */
    private $opponentQuarterbackHits;

    /**
     * @var string
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentTacklesForLoss")
     */
    private $opponentTacklesForLoss;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentsafeties")
     */
    private $opponentsafeties;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentPunts")
     */
    private $opponentPunts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentPuntYards")
     */
    private $opponentPuntYards;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="opponentPuntAverage")
     */
    private $opponentPuntAverage;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentGiveAways")
     */
    private $opponentGiveAways;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentTakeAways")
     */
    private $opponentTakeAways;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentTurnoverDifferential")
     */
    private $opponentTurnoverDifferential;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="redZonePercentage")
     */
    private $redZonePercentage;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="goalToGoPercentage")
     */
    private $goalToGoPercentage;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="quarterbackHitsDifferential")
     */
    private $quarterbackHitsDifferential;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="tacklesForLossDifferential")
     */
    private $tacklesForLossDifferential;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="quarterbackSacksDifferential")
     */
    private $quarterbackSacksDifferential;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="tacklesForLossPercentage")
     */
    private $tacklesForLossPercentage;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="quarterbackHitsPercentage")
     */
    private $quarterbackHitsPercentage;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="timesSackedPercentage")
     */
    private $timesSackedPercentage;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="opponentRedZonePercentage")
     */
    private $opponentRedZonePercentage;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="opponentGoalToGoPercentage")
     */
    private $opponentGoalToGoPercentage;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentQuarterbackHitsDifferential")
     */
    private $opponentQuarterbackHitsDifferential;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentTacklesForLossDifferential")
     */
    private $opponentTacklesForLossDifferential;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentQuarterbackSacksDifferential")
     */
    private $opponentQuarterbackSacksDifferential;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="opponentTacklesForLossPercentage")
     */
    private $opponentTacklesForLossPercentage;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="opponentQuarterbackHitsPercentage")
     */
    private $opponentQuarterbackHitsPercentage;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="opponentTimesSackedPercentage")
     */
    private $opponentTimesSackedPercentage;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="kickOffs")
     */
    private $kickOffs;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="kickOffsInEndZone")
     */
    private $kickOffsInEndZone;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="kickOffTouchBacks")
     */
    private $kickOffTouchBacks;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="puntsHadBlocked")
     */
    private $puntsHadBlocked;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="puntNetAverage")
     */
    private $puntNetAverage;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="extraPointKickingAttempts")
     */
    private $extraPointKickingAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="extraPointKickingConversions")
     */
    private $extraPointKickingConversions;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="extraPointsHadBlocked")
     */
    private $extraPointsHadBlocked;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="extraPointPassingAttempts")
     */
    private $extraPointPassingAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="extraPointPassingConversions")
     */
    private $extraPointPassingConversions;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="extraPointRushingAttempts")
     */
    private $extraPointRushingAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="extraPointRushingConversions")
     */
    private $extraPointRushingConversions;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="fieldGoalAttempts")
     */
    private $fieldGoalAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="fieldGoalsMade")
     */
    private $fieldGoalsMade;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="fieldGoalsHadBlocked")
     */
    private $fieldGoalsHadBlocked;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="puntReturns")
     */
    private $puntReturns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="puntReturnYards")
     */
    private $puntReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="kickReturns")
     */
    private $kickReturns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="kickReturnYards")
     */
    private $kickReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="interceptionReturns")
     */
    private $interceptionReturns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="interceptionReturnYards")
     */
    private $interceptionReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentKickOffs")
     */
    private $opponentKickOffs;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentKickOffsInEndZone")
     */
    private $opponentKickOffsInEndZone;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentKickOffTouchbacks")
     */
    private $opponentKickOffTouchbacks;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentPuntsHadBlocked")
     */
    private $opponentPuntsHadBlocked;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="opponentPuntNetAverage")
     */
    private $opponentPuntNetAverage;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentExtraPointKickingAttempts")
     */
    private $opponentExtraPointKickingAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentExtraPointKickingConversions")
     */
    private $opponentExtraPointKickingConversions;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentExtraPointsHadBlocked")
     */
    private $opponentExtraPointsHadBlocked;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentExtraPointPassingAttempts")
     */
    private $opponentExtraPointPassingAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentExtraPointPassingConversions")
     */
    private $opponentExtraPointPassingConversions;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentExtraPointRushingAttempts")
     */
    private $opponentExtraPointRushingAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentExtraPointRushingConversions")
     */
    private $opponentExtraPointRushingConversions;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentFieldGoalAttempts")
     */
    private $opponentFieldGoalAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentFieldGoalsMade")
     */
    private $opponentFieldGoalsMade;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentFieldGoalsHadBlocked")
     */
    private $opponentFieldGoalsHadBlocked;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentPuntReturns")
     */
    private $opponentPuntReturns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentPuntReturnYards")
     */
    private $opponentPuntReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentKickReturns")
     */
    private $opponentKickReturns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentKickReturnYards")
     */
    private $opponentKickReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentInterceptionReturns")
     */
    private $opponentInterceptionReturns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentInterceptionReturnYards")
     */
    private $opponentInterceptionReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="soloTackles")
     */
    private $soloTackles;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="assistedTackles")
     */
    private $assistedTackles;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="sacks")
     */
    private $sacks;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="sackYards")
     */
    private $sackYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="passesDefended")
     */
    private $passesDefended;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="fumblesForced")
     */
    private $fumblesForced;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="fumblesRecovered")
     */
    private $fumblesRecovered;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="fumbleReturnYards")
     */
    private $fumbleReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="fumbleReturnTouchDowns")
     */
    private $fumbleReturnTouchDowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="interceptionReturnTouchDowns")
     */
    private $interceptionReturnTouchDowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="blockedKicks")
     */
    private $blockedKicks;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="puntReturnTouchdowns")
     */
    private $puntReturnTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="puntReturnLong")
     */
    private $puntReturnLong;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="kickReturnTouchdowns")
     */
    private $kickReturnTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="kickReturnLong")
     */
    private $kickReturnLong;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="blockedKickReturnYards")
     */
    private $blockedKickReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="blockedKickReturnTouchdowns")
     */
    private $blockedKickReturnTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="fieldGoalReturnYards")
     */
    private $fieldGoalReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="fieldGoalReturnTouchdowns")
     */
    private $fieldGoalReturnTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="puntNetYards")
     */
    private $puntNetYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentSoloTackles")
     */
    private $opponentSoloTackles;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentAssistedTackles")
     */
    private $opponentAssistedTackles;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentSacks")
     */
    private $opponentSacks;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentSackYards")
     */
    private $opponentSackYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentPassesDefended")
     */
    private $opponentPassesDefended;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentFumblesForced")
     */
    private $opponentFumblesForced;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentFumblesRecovered")
     */
    private $opponentFumblesRecovered;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentFumbleReturnYards")
     */
    private $opponentFumbleReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentFumbleReturnTouchDowns")
     */
    private $opponentFumbleReturnTouchDowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentInterceptionReturnTouchdowns")
     */
    private $opponentInterceptionReturnTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentBlockedKicks")
     */
    private $opponentBlockedKicks;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentPuntReturnTouchdowns")
     */
    private $opponentPuntReturnTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentPuntReturnLong")
     */
    private $opponentPuntReturnLong;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentKickReturnTouchdowns")
     */
    private $opponentKickReturnTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentKickReturnLong")
     */
    private $opponentKickReturnLong;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentBlockedKickReturnYards")
     */
    private $opponentBlockedKickReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentBlockedKickReturnTouchdowns")
     */
    private $opponentBlockedKickReturnTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentFieldGoalReturnYards")
     */
    private $opponentFieldGoalReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentFieldGoalReturnTouchdowns")
     */
    private $opponentFieldGoalReturnTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentPuntNetYards")
     */
    private $opponentPuntNetYards;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true, name="isGameOver")
     */
    private $isGameOver;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="teamName")
     */
    private $teamName;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="dayOfWeek")
     */
    private $dayOfWeek;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="passingDropbacks")
     */
    private $passingDropbacks;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentPassingDropbacks")
     */
    private $opponentPassingDropbacks;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="teamGameID")
     */
    private $teamGameID;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="twoPointConversionReturns")
     */
    private $twoPointConversionReturns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentTwoPointConversionReturns")
     */
    private $opponentTwoPointConversionReturns;

    /**
     * Get id
     *
     * @return integer
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
     * @return string
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * @param string $team
     */
    public function setTeam( $team )
    {
        $this->team = $team;
    }

    /**
     * @return string
     */
    public function getOpponent()
    {
        return $this->opponent;
    }

    /**
     * @param string $opponent
     */
    public function setOpponent( $opponent )
    {
        $this->opponent = $opponent;
    }

    /**
     * @return string
     */
    public function getHomeOrAway()
    {
        return $this->homeOrAway;
    }

    /**
     * @param string $homeOrAway
     */
    public function setHomeOrAway( $homeOrAway )
    {
        $this->homeOrAway = $homeOrAway;
    }

    /**
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param int $score
     */
    public function setScore( $score )
    {
        $this->score = $score;
    }

    /**
     * @return int
     */
    public function getOpponentScore()
    {
        return $this->opponentScore;
    }

    /**
     * @param int $opponentScore
     */
    public function setOpponentScore( $opponentScore )
    {
        $this->opponentScore = $opponentScore;
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
     * @return int
     */
    public function getOverUnder()
    {
        return $this->overUnder;
    }

    /**
     * @param int $overUnder
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
    public function getScoreQuarter1()
    {
        return $this->scoreQuarter1;
    }

    /**
     * @param int $scoreQuarter1
     */
    public function setScoreQuarter1( $scoreQuarter1 )
    {
        $this->scoreQuarter1 = $scoreQuarter1;
    }

    /**
     * @return int
     */
    public function getScoreQuarter2()
    {
        return $this->scoreQuarter2;
    }

    /**
     * @param int $scoreQuarter2
     */
    public function setScoreQuarter2( $scoreQuarter2 )
    {
        $this->scoreQuarter2 = $scoreQuarter2;
    }

    /**
     * @return int
     */
    public function getScoreQuarter3()
    {
        return $this->scoreQuarter3;
    }

    /**
     * @param int $scoreQuarter3
     */
    public function setScoreQuarter3( $scoreQuarter3 )
    {
        $this->scoreQuarter3 = $scoreQuarter3;
    }

    /**
     * @return int
     */
    public function getScoreQuarter4()
    {
        return $this->scoreQuarter4;
    }

    /**
     * @param int $scoreQuarter4
     */
    public function setScoreQuarter4( $scoreQuarter4 )
    {
        $this->scoreQuarter4 = $scoreQuarter4;
    }

    /**
     * @return int
     */
    public function getScoreOvertime()
    {
        return $this->scoreOvertime;
    }

    /**
     * @param int $scoreOvertime
     */
    public function setScoreOvertime( $scoreOvertime )
    {
        $this->scoreOvertime = $scoreOvertime;
    }

    /**
     * @return int
     */
    public function getTimeOfPossessionMinutes()
    {
        return $this->timeOfPossessionMinutes;
    }

    /**
     * @param int $timeOfPossessionMinutes
     */
    public function setTimeOfPossessionMinutes( $timeOfPossessionMinutes )
    {
        $this->timeOfPossessionMinutes = $timeOfPossessionMinutes;
    }

    /**
     * @return int
     */
    public function getTimeOfPossessionSeconds()
    {
        return $this->timeOfPossessionSeconds;
    }

    /**
     * @param int $timeOfPossessionSeconds
     */
    public function setTimeOfPossessionSeconds( $timeOfPossessionSeconds )
    {
        $this->timeOfPossessionSeconds = $timeOfPossessionSeconds;
    }

    /**
     * @return int
     */
    public function getTimeOfPossession()
    {
        return $this->timeOfPossession;
    }

    /**
     * @param int $timeOfPossession
     */
    public function setTimeOfPossession( $timeOfPossession )
    {
        $this->timeOfPossession = $timeOfPossession;
    }

    /**
     * @return int
     */
    public function getFirstDowns()
    {
        return $this->firstDowns;
    }

    /**
     * @param int $firstDowns
     */
    public function setFirstDowns( $firstDowns )
    {
        $this->firstDowns = $firstDowns;
    }

    /**
     * @return int
     */
    public function getFirstDownsByRushing()
    {
        return $this->firstDownsByRushing;
    }

    /**
     * @param int $firstDownsByRushing
     */
    public function setFirstDownsByRushing( $firstDownsByRushing )
    {
        $this->firstDownsByRushing = $firstDownsByRushing;
    }

    /**
     * @return int
     */
    public function getFirstDownsByPassing()
    {
        return $this->firstDownsByPassing;
    }

    /**
     * @param int $firstDownsByPassing
     */
    public function setFirstDownsByPassing( $firstDownsByPassing )
    {
        $this->firstDownsByPassing = $firstDownsByPassing;
    }

    /**
     * @return int
     */
    public function getFirstDownsByPenalty()
    {
        return $this->firstDownsByPenalty;
    }

    /**
     * @param int $firstDownsByPenalty
     */
    public function setFirstDownsByPenalty( $firstDownsByPenalty )
    {
        $this->firstDownsByPenalty = $firstDownsByPenalty;
    }

    /**
     * @return int
     */
    public function getOffensivePlays()
    {
        return $this->offensivePlays;
    }

    /**
     * @param int $offensivePlays
     */
    public function setOffensivePlays( $offensivePlays )
    {
        $this->offensivePlays = $offensivePlays;
    }

    /**
     * @return int
     */
    public function getOffensiveYards()
    {
        return $this->offensiveYards;
    }

    /**
     * @param int $offensiveYards
     */
    public function setOffensiveYards( $offensiveYards )
    {
        $this->offensiveYards = $offensiveYards;
    }

    /**
     * @return int
     */
    public function getOffensiveYardsPerPlay()
    {
        return $this->offensiveYardsPerPlay;
    }

    /**
     * @param int $offensiveYardsPerPlay
     */
    public function setOffensiveYardsPerPlay( $offensiveYardsPerPlay )
    {
        $this->offensiveYardsPerPlay = $offensiveYardsPerPlay;
    }

    /**
     * @return int
     */
    public function getTouchdowns()
    {
        return $this->touchdowns;
    }

    /**
     * @param int $touchdowns
     */
    public function setTouchdowns( $touchdowns )
    {
        $this->touchdowns = $touchdowns;
    }

    /**
     * @return int
     */
    public function getRushingAttempts()
    {
        return $this->rushingAttempts;
    }

    /**
     * @param int $rushingAttempts
     */
    public function setRushingAttempts( $rushingAttempts )
    {
        $this->rushingAttempts = $rushingAttempts;
    }

    /**
     * @return int
     */
    public function getRushingYards()
    {
        return $this->rushingYards;
    }

    /**
     * @param int $rushingYards
     */
    public function setRushingYards( $rushingYards )
    {
        $this->rushingYards = $rushingYards;
    }

    /**
     * @return string
     */
    public function getRushingYardsPerAttempt()
    {
        return $this->rushingYardsPerAttempt;
    }

    /**
     * @param string $rushingYardsPerAttempt
     */
    public function setRushingYardsPerAttempt( $rushingYardsPerAttempt )
    {
        $this->rushingYardsPerAttempt = $rushingYardsPerAttempt;
    }

    /**
     * @return int
     */
    public function getRushingTouchdowns()
    {
        return $this->rushingTouchdowns;
    }

    /**
     * @param int $rushingTouchdowns
     */
    public function setRushingTouchdowns( $rushingTouchdowns )
    {
        $this->rushingTouchdowns = $rushingTouchdowns;
    }

    /**
     * @return int
     */
    public function getPassingAttempts()
    {
        return $this->passingAttempts;
    }

    /**
     * @param int $passingAttempts
     */
    public function setPassingAttempts( $passingAttempts )
    {
        $this->passingAttempts = $passingAttempts;
    }

    /**
     * @return int
     */
    public function getPassingCompletions()
    {
        return $this->passingCompletions;
    }

    /**
     * @param int $passingCompletions
     */
    public function setPassingCompletions( $passingCompletions )
    {
        $this->passingCompletions = $passingCompletions;
    }

    /**
     * @return int
     */
    public function getPassingYards()
    {
        return $this->passingYards;
    }

    /**
     * @param int $passingYards
     */
    public function setPassingYards( $passingYards )
    {
        $this->passingYards = $passingYards;
    }

    /**
     * @return int
     */
    public function getPassingTouchdowns()
    {
        return $this->passingTouchdowns;
    }

    /**
     * @param int $passingTouchdowns
     */
    public function setPassingTouchdowns( $passingTouchdowns )
    {
        $this->passingTouchdowns = $passingTouchdowns;
    }

    /**
     * @return int
     */
    public function getPassingInterceptions()
    {
        return $this->passingInterceptions;
    }

    /**
     * @param int $passingInterceptions
     */
    public function setPassingInterceptions( $passingInterceptions )
    {
        $this->passingInterceptions = $passingInterceptions;
    }

    /**
     * @return string
     */
    public function getPassingYardsPerAttempt()
    {
        return $this->passingYardsPerAttempt;
    }

    /**
     * @param string $passingYardsPerAttempt
     */
    public function setPassingYardsPerAttempt( $passingYardsPerAttempt )
    {
        $this->passingYardsPerAttempt = $passingYardsPerAttempt;
    }

    /**
     * @return string
     */
    public function getPassingYardsPerCompletion()
    {
        return $this->passingYardsPerCompletion;
    }

    /**
     * @param string $passingYardsPerCompletion
     */
    public function setPassingYardsPerCompletion( $passingYardsPerCompletion )
    {
        $this->passingYardsPerCompletion = $passingYardsPerCompletion;
    }

    /**
     * @return string
     */
    public function getCompletionPercentage()
    {
        return $this->completionPercentage;
    }

    /**
     * @param string $completionPercentage
     */
    public function setCompletionPercentage( $completionPercentage )
    {
        $this->completionPercentage = $completionPercentage;
    }

    /**
     * @return int
     */
    public function getPasserRating()
    {
        return $this->passerRating;
    }

    /**
     * @param int $passerRating
     */
    public function setPasserRating( $passerRating )
    {
        $this->passerRating = $passerRating;
    }

    /**
     * @return int
     */
    public function getThirdDownAttempts()
    {
        return $this->thirdDownAttempts;
    }

    /**
     * @param int $thirdDownAttempts
     */
    public function setThirdDownAttempts( $thirdDownAttempts )
    {
        $this->thirdDownAttempts = $thirdDownAttempts;
    }

    /**
     * @return int
     */
    public function getThirdDownConversions()
    {
        return $this->thirdDownConversions;
    }

    /**
     * @param int $thirdDownConversions
     */
    public function setThirdDownConversions( $thirdDownConversions )
    {
        $this->thirdDownConversions = $thirdDownConversions;
    }

    /**
     * @return string
     */
    public function getThirdDownPercentage()
    {
        return $this->thirdDownPercentage;
    }

    /**
     * @param string $thirdDownPercentage
     */
    public function setThirdDownPercentage( $thirdDownPercentage )
    {
        $this->thirdDownPercentage = $thirdDownPercentage;
    }

    /**
     * @return int
     */
    public function getFourthDownAttempts()
    {
        return $this->fourthDownAttempts;
    }

    /**
     * @param int $fourthDownAttempts
     */
    public function setFourthDownAttempts( $fourthDownAttempts )
    {
        $this->fourthDownAttempts = $fourthDownAttempts;
    }

    /**
     * @return int
     */
    public function getFourthDownConversions()
    {
        return $this->fourthDownConversions;
    }

    /**
     * @param int $fourthDownConversions
     */
    public function setFourthDownConversions( $fourthDownConversions )
    {
        $this->fourthDownConversions = $fourthDownConversions;
    }

    /**
     * @return string
     */
    public function getFourthDownPercentage()
    {
        return $this->fourthDownPercentage;
    }

    /**
     * @param string $fourthDownPercentage
     */
    public function setFourthDownPercentage( $fourthDownPercentage )
    {
        $this->fourthDownPercentage = $fourthDownPercentage;
    }

    /**
     * @return int
     */
    public function getRedZoneAttempts()
    {
        return $this->redZoneAttempts;
    }

    /**
     * @param int $redZoneAttempts
     */
    public function setRedZoneAttempts( $redZoneAttempts )
    {
        $this->redZoneAttempts = $redZoneAttempts;
    }

    /**
     * @return int
     */
    public function getRedZoneConversions()
    {
        return $this->redZoneConversions;
    }

    /**
     * @param int $redZoneConversions
     */
    public function setRedZoneConversions( $redZoneConversions )
    {
        $this->redZoneConversions = $redZoneConversions;
    }

    /**
     * @return int
     */
    public function getGoalToGoAttempts()
    {
        return $this->goalToGoAttempts;
    }

    /**
     * @param int $goalToGoAttempts
     */
    public function setGoalToGoAttempts( $goalToGoAttempts )
    {
        $this->goalToGoAttempts = $goalToGoAttempts;
    }

    /**
     * @return int
     */
    public function getGoalToGoConversions()
    {
        return $this->goalToGoConversions;
    }

    /**
     * @param int $goalToGoConversions
     */
    public function setGoalToGoConversions( $goalToGoConversions )
    {
        $this->goalToGoConversions = $goalToGoConversions;
    }

    /**
     * @return int
     */
    public function getReturnYards()
    {
        return $this->returnYards;
    }

    /**
     * @param int $returnYards
     */
    public function setReturnYards( $returnYards )
    {
        $this->returnYards = $returnYards;
    }

    /**
     * @return int
     */
    public function getPenalties()
    {
        return $this->penalties;
    }

    /**
     * @param int $penalties
     */
    public function setPenalties( $penalties )
    {
        $this->penalties = $penalties;
    }

    /**
     * @return int
     */
    public function getPenaltyYards()
    {
        return $this->penaltyYards;
    }

    /**
     * @param int $penaltyYards
     */
    public function setPenaltyYards( $penaltyYards )
    {
        $this->penaltyYards = $penaltyYards;
    }

    /**
     * @return int
     */
    public function getFumbles()
    {
        return $this->fumbles;
    }

    /**
     * @param int $fumbles
     */
    public function setFumbles( $fumbles )
    {
        $this->fumbles = $fumbles;
    }

    /**
     * @return int
     */
    public function getFumblesLost()
    {
        return $this->fumblesLost;
    }

    /**
     * @param int $fumblesLost
     */
    public function setFumblesLost( $fumblesLost )
    {
        $this->fumblesLost = $fumblesLost;
    }

    /**
     * @return int
     */
    public function getTimesSacked()
    {
        return $this->timesSacked;
    }

    /**
     * @param int $timesSacked
     */
    public function setTimesSacked( $timesSacked )
    {
        $this->timesSacked = $timesSacked;
    }

    /**
     * @return int
     */
    public function getTimesSackedYards()
    {
        return $this->timesSackedYards;
    }

    /**
     * @param int $timesSackedYards
     */
    public function setTimesSackedYards( $timesSackedYards )
    {
        $this->timesSackedYards = $timesSackedYards;
    }

    /**
     * @return int
     */
    public function getQuarterbackHits()
    {
        return $this->quarterbackHits;
    }

    /**
     * @param int $quarterbackHits
     */
    public function setQuarterbackHits( $quarterbackHits )
    {
        $this->quarterbackHits = $quarterbackHits;
    }

    /**
     * @return string
     */
    public function getTacklesForLoss()
    {
        return $this->tacklesForLoss;
    }

    /**
     * @param string $tacklesForLoss
     */
    public function setTacklesForLoss( $tacklesForLoss )
    {
        $this->tacklesForLoss = $tacklesForLoss;
    }

    /**
     * @return int
     */
    public function getSafeties()
    {
        return $this->safeties;
    }

    /**
     * @param int $safeties
     */
    public function setSafeties( $safeties )
    {
        $this->safeties = $safeties;
    }

    /**
     * @return int
     */
    public function getPunts()
    {
        return $this->punts;
    }

    /**
     * @param int $punts
     */
    public function setPunts( $punts )
    {
        $this->punts = $punts;
    }

    /**
     * @return int
     */
    public function getPuntYards()
    {
        return $this->puntYards;
    }

    /**
     * @param int $puntYards
     */
    public function setPuntYards( $puntYards )
    {
        $this->puntYards = $puntYards;
    }

    /**
     * @return string
     */
    public function getPuntAverage()
    {
        return $this->puntAverage;
    }

    /**
     * @param string $puntAverage
     */
    public function setPuntAverage( $puntAverage )
    {
        $this->puntAverage = $puntAverage;
    }

    /**
     * @return int
     */
    public function getGiveAways()
    {
        return $this->giveAways;
    }

    /**
     * @param int $giveAways
     */
    public function setGiveAways( $giveAways )
    {
        $this->giveAways = $giveAways;
    }

    /**
     * @return int
     */
    public function getTakeAways()
    {
        return $this->takeAways;
    }

    /**
     * @param int $takeAways
     */
    public function setTakeAways( $takeAways )
    {
        $this->takeAways = $takeAways;
    }

    /**
     * @return int
     */
    public function getTurnoverDifferential()
    {
        return $this->turnoverDifferential;
    }

    /**
     * @param int $turnoverDifferential
     */
    public function setTurnoverDifferential( $turnoverDifferential )
    {
        $this->turnoverDifferential = $turnoverDifferential;
    }

    /**
     * @return int
     */
    public function getOpponentScoreQuarter1()
    {
        return $this->opponentScoreQuarter1;
    }

    /**
     * @param int $opponentScoreQuarter1
     */
    public function setOpponentScoreQuarter1( $opponentScoreQuarter1 )
    {
        $this->opponentScoreQuarter1 = $opponentScoreQuarter1;
    }

    /**
     * @return int
     */
    public function getOpponentScoreQuarter2()
    {
        return $this->opponentScoreQuarter2;
    }

    /**
     * @param int $opponentScoreQuarter2
     */
    public function setOpponentScoreQuarter2( $opponentScoreQuarter2 )
    {
        $this->opponentScoreQuarter2 = $opponentScoreQuarter2;
    }

    /**
     * @return int
     */
    public function getOpponentScoreQuarter3()
    {
        return $this->opponentScoreQuarter3;
    }

    /**
     * @param int $opponentScoreQuarter3
     */
    public function setOpponentScoreQuarter3( $opponentScoreQuarter3 )
    {
        $this->opponentScoreQuarter3 = $opponentScoreQuarter3;
    }

    /**
     * @return int
     */
    public function getOpponentScoreQuarter4()
    {
        return $this->opponentScoreQuarter4;
    }

    /**
     * @param int $opponentScoreQuarter4
     */
    public function setOpponentScoreQuarter4( $opponentScoreQuarter4 )
    {
        $this->opponentScoreQuarter4 = $opponentScoreQuarter4;
    }

    /**
     * @return int
     */
    public function getOpponentScoreOvertime()
    {
        return $this->opponentScoreOvertime;
    }

    /**
     * @param int $opponentScoreOvertime
     */
    public function setOpponentScoreOvertime( $opponentScoreOvertime )
    {
        $this->opponentScoreOvertime = $opponentScoreOvertime;
    }

    /**
     * @return int
     */
    public function getOpponentTimeOfPossessionMinutes()
    {
        return $this->opponentTimeOfPossessionMinutes;
    }

    /**
     * @param int $opponentTimeOfPossessionMinutes
     */
    public function setOpponentTimeOfPossessionMinutes( $opponentTimeOfPossessionMinutes )
    {
        $this->opponentTimeOfPossessionMinutes = $opponentTimeOfPossessionMinutes;
    }

    /**
     * @return int
     */
    public function getOpponentTimeOfPossessionSeconds()
    {
        return $this->opponentTimeOfPossessionSeconds;
    }

    /**
     * @param int $opponentTimeOfPossessionSeconds
     */
    public function setOpponentTimeOfPossessionSeconds( $opponentTimeOfPossessionSeconds )
    {
        $this->opponentTimeOfPossessionSeconds = $opponentTimeOfPossessionSeconds;
    }

    /**
     * @return int
     */
    public function getOpponentTimeOfPossession()
    {
        return $this->opponentTimeOfPossession;
    }

    /**
     * @param int $opponentTimeOfPossession
     */
    public function setOpponentTimeOfPossession( $opponentTimeOfPossession )
    {
        $this->opponentTimeOfPossession = $opponentTimeOfPossession;
    }

    /**
     * @return int
     */
    public function getOpponentFirstDowns()
    {
        return $this->opponentFirstDowns;
    }

    /**
     * @param int $opponentFirstDowns
     */
    public function setOpponentFirstDowns( $opponentFirstDowns )
    {
        $this->opponentFirstDowns = $opponentFirstDowns;
    }

    /**
     * @return int
     */
    public function getOpponentFirstDownsByRushing()
    {
        return $this->opponentFirstDownsByRushing;
    }

    /**
     * @param int $opponentFirstDownsByRushing
     */
    public function setOpponentFirstDownsByRushing( $opponentFirstDownsByRushing )
    {
        $this->opponentFirstDownsByRushing = $opponentFirstDownsByRushing;
    }

    /**
     * @return int
     */
    public function getOpponentFirstDownsByPassing()
    {
        return $this->opponentFirstDownsByPassing;
    }

    /**
     * @param int $opponentFirstDownsByPassing
     */
    public function setOpponentFirstDownsByPassing( $opponentFirstDownsByPassing )
    {
        $this->opponentFirstDownsByPassing = $opponentFirstDownsByPassing;
    }

    /**
     * @return int
     */
    public function getOpponentFirstDownsByPenalty()
    {
        return $this->opponentFirstDownsByPenalty;
    }

    /**
     * @param int $opponentFirstDownsByPenalty
     */
    public function setOpponentFirstDownsByPenalty( $opponentFirstDownsByPenalty )
    {
        $this->opponentFirstDownsByPenalty = $opponentFirstDownsByPenalty;
    }

    /**
     * @return int
     */
    public function getOpponentOffensivePlays()
    {
        return $this->opponentOffensivePlays;
    }

    /**
     * @param int $opponentOffensivePlays
     */
    public function setOpponentOffensivePlays( $opponentOffensivePlays )
    {
        $this->opponentOffensivePlays = $opponentOffensivePlays;
    }

    /**
     * @return int
     */
    public function getOpponentOffensiveYards()
    {
        return $this->opponentOffensiveYards;
    }

    /**
     * @param int $opponentOffensiveYards
     */
    public function setOpponentOffensiveYards( $opponentOffensiveYards )
    {
        $this->opponentOffensiveYards = $opponentOffensiveYards;
    }

    /**
     * @return int
     */
    public function getOpponentOffensiveYardsPerPlay()
    {
        return $this->opponentOffensiveYardsPerPlay;
    }

    /**
     * @param int $opponentOffensiveYardsPerPlay
     */
    public function setOpponentOffensiveYardsPerPlay( $opponentOffensiveYardsPerPlay )
    {
        $this->opponentOffensiveYardsPerPlay = $opponentOffensiveYardsPerPlay;
    }

    /**
     * @return int
     */
    public function getOpponentTouchdowns()
    {
        return $this->opponentTouchdowns;
    }

    /**
     * @param int $opponentTouchdowns
     */
    public function setOpponentTouchdowns( $opponentTouchdowns )
    {
        $this->opponentTouchdowns = $opponentTouchdowns;
    }

    /**
     * @return int
     */
    public function getOpponentRushingAttempts()
    {
        return $this->opponentRushingAttempts;
    }

    /**
     * @param int $opponentRushingAttempts
     */
    public function setOpponentRushingAttempts( $opponentRushingAttempts )
    {
        $this->opponentRushingAttempts = $opponentRushingAttempts;
    }

    /**
     * @return int
     */
    public function getOpponentRushingYards()
    {
        return $this->opponentRushingYards;
    }

    /**
     * @param int $opponentRushingYards
     */
    public function setOpponentRushingYards( $opponentRushingYards )
    {
        $this->opponentRushingYards = $opponentRushingYards;
    }

    /**
     * @return string
     */
    public function getOpponentRushingYardsPerAttempt()
    {
        return $this->opponentRushingYardsPerAttempt;
    }

    /**
     * @param string $opponentRushingYardsPerAttempt
     */
    public function setOpponentRushingYardsPerAttempt( $opponentRushingYardsPerAttempt )
    {
        $this->opponentRushingYardsPerAttempt = $opponentRushingYardsPerAttempt;
    }

    /**
     * @return int
     */
    public function getOpponentRushingTouchdowns()
    {
        return $this->opponentRushingTouchdowns;
    }

    /**
     * @param int $opponentRushingTouchdowns
     */
    public function setOpponentRushingTouchdowns( $opponentRushingTouchdowns )
    {
        $this->opponentRushingTouchdowns = $opponentRushingTouchdowns;
    }

    /**
     * @return int
     */
    public function getOpponentPassingAttempts()
    {
        return $this->opponentPassingAttempts;
    }

    /**
     * @param int $opponentPassingAttempts
     */
    public function setOpponentPassingAttempts( $opponentPassingAttempts )
    {
        $this->opponentPassingAttempts = $opponentPassingAttempts;
    }

    /**
     * @return int
     */
    public function getOpponentPassingCompletions()
    {
        return $this->opponentPassingCompletions;
    }

    /**
     * @param int $opponentPassingCompletions
     */
    public function setOpponentPassingCompletions( $opponentPassingCompletions )
    {
        $this->opponentPassingCompletions = $opponentPassingCompletions;
    }

    /**
     * @return int
     */
    public function getOpponentPassingYards()
    {
        return $this->opponentPassingYards;
    }

    /**
     * @param int $opponentPassingYards
     */
    public function setOpponentPassingYards( $opponentPassingYards )
    {
        $this->opponentPassingYards = $opponentPassingYards;
    }

    /**
     * @return int
     */
    public function getOpponentPassingTouchdowns()
    {
        return $this->opponentPassingTouchdowns;
    }

    /**
     * @param int $opponentPassingTouchdowns
     */
    public function setOpponentPassingTouchdowns( $opponentPassingTouchdowns )
    {
        $this->opponentPassingTouchdowns = $opponentPassingTouchdowns;
    }

    /**
     * @return int
     */
    public function getOpponentPassingInterceptions()
    {
        return $this->opponentPassingInterceptions;
    }

    /**
     * @param int $opponentPassingInterceptions
     */
    public function setOpponentPassingInterceptions( $opponentPassingInterceptions )
    {
        $this->opponentPassingInterceptions = $opponentPassingInterceptions;
    }

    /**
     * @return string
     */
    public function getOpponentPassingYardsPerAttempt()
    {
        return $this->opponentPassingYardsPerAttempt;
    }

    /**
     * @param string $opponentPassingYardsPerAttempt
     */
    public function setOpponentPassingYardsPerAttempt( $opponentPassingYardsPerAttempt )
    {
        $this->opponentPassingYardsPerAttempt = $opponentPassingYardsPerAttempt;
    }

    /**
     * @return string
     */
    public function getOpponentPassingYardsPerCompletion()
    {
        return $this->opponentPassingYardsPerCompletion;
    }

    /**
     * @param string $opponentPassingYardsPerCompletion
     */
    public function setOpponentPassingYardsPerCompletion( $opponentPassingYardsPerCompletion )
    {
        $this->opponentPassingYardsPerCompletion = $opponentPassingYardsPerCompletion;
    }

    /**
     * @return string
     */
    public function getOpponentCompletionPercentage()
    {
        return $this->opponentCompletionPercentage;
    }

    /**
     * @param string $opponentCompletionPercentage
     */
    public function setOpponentCompletionPercentage( $opponentCompletionPercentage )
    {
        $this->opponentCompletionPercentage = $opponentCompletionPercentage;
    }

    /**
     * @return int
     */
    public function getOpponentPasserRating()
    {
        return $this->opponentPasserRating;
    }

    /**
     * @param int $opponentPasserRating
     */
    public function setOpponentPasserRating( $opponentPasserRating )
    {
        $this->opponentPasserRating = $opponentPasserRating;
    }

    /**
     * @return int
     */
    public function getOpponentThirdDownAttempts()
    {
        return $this->opponentThirdDownAttempts;
    }

    /**
     * @param int $opponentThirdDownAttempts
     */
    public function setOpponentThirdDownAttempts( $opponentThirdDownAttempts )
    {
        $this->opponentThirdDownAttempts = $opponentThirdDownAttempts;
    }

    /**
     * @return int
     */
    public function getOpponentThirdDownConversions()
    {
        return $this->opponentThirdDownConversions;
    }

    /**
     * @param int $opponentThirdDownConversions
     */
    public function setOpponentThirdDownConversions( $opponentThirdDownConversions )
    {
        $this->opponentThirdDownConversions = $opponentThirdDownConversions;
    }

    /**
     * @return string
     */
    public function getOpponentThirdDownPercentage()
    {
        return $this->opponentThirdDownPercentage;
    }

    /**
     * @param string $opponentThirdDownPercentage
     */
    public function setOpponentThirdDownPercentage( $opponentThirdDownPercentage )
    {
        $this->opponentThirdDownPercentage = $opponentThirdDownPercentage;
    }

    /**
     * @return int
     */
    public function getOpponentFourthDownAttempts()
    {
        return $this->opponentFourthDownAttempts;
    }

    /**
     * @param int $opponentFourthDownAttempts
     */
    public function setOpponentFourthDownAttempts( $opponentFourthDownAttempts )
    {
        $this->opponentFourthDownAttempts = $opponentFourthDownAttempts;
    }

    /**
     * @return int
     */
    public function getOpponentFourthDownConversions()
    {
        return $this->opponentFourthDownConversions;
    }

    /**
     * @param int $opponentFourthDownConversions
     */
    public function setOpponentFourthDownConversions( $opponentFourthDownConversions )
    {
        $this->opponentFourthDownConversions = $opponentFourthDownConversions;
    }

    /**
     * @return string
     */
    public function getOpponentFourthDownPercentage()
    {
        return $this->opponentFourthDownPercentage;
    }

    /**
     * @param string $opponentFourthDownPercentage
     */
    public function setOpponentFourthDownPercentage( $opponentFourthDownPercentage )
    {
        $this->opponentFourthDownPercentage = $opponentFourthDownPercentage;
    }

    /**
     * @return int
     */
    public function getOpponentRedZoneAttempts()
    {
        return $this->opponentRedZoneAttempts;
    }

    /**
     * @param int $opponentRedZoneAttempts
     */
    public function setOpponentRedZoneAttempts( $opponentRedZoneAttempts )
    {
        $this->opponentRedZoneAttempts = $opponentRedZoneAttempts;
    }

    /**
     * @return int
     */
    public function getOpponentRedZoneConversions()
    {
        return $this->opponentRedZoneConversions;
    }

    /**
     * @param int $opponentRedZoneConversions
     */
    public function setOpponentRedZoneConversions( $opponentRedZoneConversions )
    {
        $this->opponentRedZoneConversions = $opponentRedZoneConversions;
    }

    /**
     * @return int
     */
    public function getOpponentGoalToGoAttempts()
    {
        return $this->opponentGoalToGoAttempts;
    }

    /**
     * @param int $opponentGoalToGoAttempts
     */
    public function setOpponentGoalToGoAttempts( $opponentGoalToGoAttempts )
    {
        $this->opponentGoalToGoAttempts = $opponentGoalToGoAttempts;
    }

    /**
     * @return int
     */
    public function getOpponentGoalToGoConversions()
    {
        return $this->opponentGoalToGoConversions;
    }

    /**
     * @param int $opponentGoalToGoConversions
     */
    public function setOpponentGoalToGoConversions( $opponentGoalToGoConversions )
    {
        $this->opponentGoalToGoConversions = $opponentGoalToGoConversions;
    }

    /**
     * @return int
     */
    public function getOpponentReturnYards()
    {
        return $this->opponentReturnYards;
    }

    /**
     * @param int $opponentReturnYards
     */
    public function setOpponentReturnYards( $opponentReturnYards )
    {
        $this->opponentReturnYards = $opponentReturnYards;
    }

    /**
     * @return int
     */
    public function getOpponentPenalties()
    {
        return $this->opponentPenalties;
    }

    /**
     * @param int $opponentPenalties
     */
    public function setOpponentPenalties( $opponentPenalties )
    {
        $this->opponentPenalties = $opponentPenalties;
    }

    /**
     * @return int
     */
    public function getOpponentPenaltyYards()
    {
        return $this->opponentPenaltyYards;
    }

    /**
     * @param int $opponentPenaltyYards
     */
    public function setOpponentPenaltyYards( $opponentPenaltyYards )
    {
        $this->opponentPenaltyYards = $opponentPenaltyYards;
    }

    /**
     * @return int
     */
    public function getOpponentFumbles()
    {
        return $this->opponentFumbles;
    }

    /**
     * @param int $opponentFumbles
     */
    public function setOpponentFumbles( $opponentFumbles )
    {
        $this->opponentFumbles = $opponentFumbles;
    }

    /**
     * @return int
     */
    public function getOpponentFumblesLost()
    {
        return $this->opponentFumblesLost;
    }

    /**
     * @param int $opponentFumblesLost
     */
    public function setOpponentFumblesLost( $opponentFumblesLost )
    {
        $this->opponentFumblesLost = $opponentFumblesLost;
    }

    /**
     * @return int
     */
    public function getOpponentTimesSacked()
    {
        return $this->opponentTimesSacked;
    }

    /**
     * @param int $opponentTimesSacked
     */
    public function setOpponentTimesSacked( $opponentTimesSacked )
    {
        $this->opponentTimesSacked = $opponentTimesSacked;
    }

    /**
     * @return int
     */
    public function getOpponentTimesSackedYards()
    {
        return $this->opponentTimesSackedYards;
    }

    /**
     * @param int $opponentTimesSackedYards
     */
    public function setOpponentTimesSackedYards( $opponentTimesSackedYards )
    {
        $this->opponentTimesSackedYards = $opponentTimesSackedYards;
    }

    /**
     * @return int
     */
    public function getOpponentQuarterbackHits()
    {
        return $this->opponentQuarterbackHits;
    }

    /**
     * @param int $opponentQuarterbackHits
     */
    public function setOpponentQuarterbackHits( $opponentQuarterbackHits )
    {
        $this->opponentQuarterbackHits = $opponentQuarterbackHits;
    }

    /**
     * @return string
     */
    public function getOpponentTacklesForLoss()
    {
        return $this->opponentTacklesForLoss;
    }

    /**
     * @param string $opponentTacklesForLoss
     */
    public function setOpponentTacklesForLoss( $opponentTacklesForLoss )
    {
        $this->opponentTacklesForLoss = $opponentTacklesForLoss;
    }

    /**
     * @return int
     */
    public function getOpponentsafeties()
    {
        return $this->opponentsafeties;
    }

    /**
     * @param int $opponentsafeties
     */
    public function setOpponentsafeties( $opponentsafeties )
    {
        $this->opponentsafeties = $opponentsafeties;
    }

    /**
     * @return int
     */
    public function getOpponentPunts()
    {
        return $this->opponentPunts;
    }

    /**
     * @param int $opponentPunts
     */
    public function setOpponentPunts( $opponentPunts )
    {
        $this->opponentPunts = $opponentPunts;
    }

    /**
     * @return int
     */
    public function getOpponentPuntYards()
    {
        return $this->opponentPuntYards;
    }

    /**
     * @param int $opponentPuntYards
     */
    public function setOpponentPuntYards( $opponentPuntYards )
    {
        $this->opponentPuntYards = $opponentPuntYards;
    }

    /**
     * @return string
     */
    public function getOpponentPuntAverage()
    {
        return $this->opponentPuntAverage;
    }

    /**
     * @param string $opponentPuntAverage
     */
    public function setOpponentPuntAverage( $opponentPuntAverage )
    {
        $this->opponentPuntAverage = $opponentPuntAverage;
    }

    /**
     * @return int
     */
    public function getOpponentGiveAways()
    {
        return $this->opponentGiveAways;
    }

    /**
     * @param int $opponentGiveAways
     */
    public function setOpponentGiveAways( $opponentGiveAways )
    {
        $this->opponentGiveAways = $opponentGiveAways;
    }

    /**
     * @return int
     */
    public function getOpponentTakeAways()
    {
        return $this->opponentTakeAways;
    }

    /**
     * @param int $opponentTakeAways
     */
    public function setOpponentTakeAways( $opponentTakeAways )
    {
        $this->opponentTakeAways = $opponentTakeAways;
    }

    /**
     * @return int
     */
    public function getOpponentTurnoverDifferential()
    {
        return $this->opponentTurnoverDifferential;
    }

    /**
     * @param int $opponentTurnoverDifferential
     */
    public function setOpponentTurnoverDifferential( $opponentTurnoverDifferential )
    {
        $this->opponentTurnoverDifferential = $opponentTurnoverDifferential;
    }

    /**
     * @return string
     */
    public function getRedZonePercentage()
    {
        return $this->redZonePercentage;
    }

    /**
     * @param string $redZonePercentage
     */
    public function setRedZonePercentage( $redZonePercentage )
    {
        $this->redZonePercentage = $redZonePercentage;
    }

    /**
     * @return string
     */
    public function getGoalToGoPercentage()
    {
        return $this->goalToGoPercentage;
    }

    /**
     * @param string $goalToGoPercentage
     */
    public function setGoalToGoPercentage( $goalToGoPercentage )
    {
        $this->goalToGoPercentage = $goalToGoPercentage;
    }

    /**
     * @return int
     */
    public function getQuarterbackHitsDifferential()
    {
        return $this->quarterbackHitsDifferential;
    }

    /**
     * @param int $quarterbackHitsDifferential
     */
    public function setQuarterbackHitsDifferential( $quarterbackHitsDifferential )
    {
        $this->quarterbackHitsDifferential = $quarterbackHitsDifferential;
    }

    /**
     * @return int
     */
    public function getTacklesForLossDifferential()
    {
        return $this->tacklesForLossDifferential;
    }

    /**
     * @param int $tacklesForLossDifferential
     */
    public function setTacklesForLossDifferential( $tacklesForLossDifferential )
    {
        $this->tacklesForLossDifferential = $tacklesForLossDifferential;
    }

    /**
     * @return int
     */
    public function getQuarterbackSacksDifferential()
    {
        return $this->quarterbackSacksDifferential;
    }

    /**
     * @param int $quarterbackSacksDifferential
     */
    public function setQuarterbackSacksDifferential( $quarterbackSacksDifferential )
    {
        $this->quarterbackSacksDifferential = $quarterbackSacksDifferential;
    }

    /**
     * @return string
     */
    public function getTacklesForLossPercentage()
    {
        return $this->tacklesForLossPercentage;
    }

    /**
     * @param string $tacklesForLossPercentage
     */
    public function setTacklesForLossPercentage( $tacklesForLossPercentage )
    {
        $this->tacklesForLossPercentage = $tacklesForLossPercentage;
    }

    /**
     * @return string
     */
    public function getQuarterbackHitsPercentage()
    {
        return $this->quarterbackHitsPercentage;
    }

    /**
     * @param string $quarterbackHitsPercentage
     */
    public function setQuarterbackHitsPercentage( $quarterbackHitsPercentage )
    {
        $this->quarterbackHitsPercentage = $quarterbackHitsPercentage;
    }

    /**
     * @return string
     */
    public function getTimesSackedPercentage()
    {
        return $this->timesSackedPercentage;
    }

    /**
     * @param string $timesSackedPercentage
     */
    public function setTimesSackedPercentage( $timesSackedPercentage )
    {
        $this->timesSackedPercentage = $timesSackedPercentage;
    }

    /**
     * @return string
     */
    public function getOpponentRedZonePercentage()
    {
        return $this->opponentRedZonePercentage;
    }

    /**
     * @param string $opponentRedZonePercentage
     */
    public function setOpponentRedZonePercentage( $opponentRedZonePercentage )
    {
        $this->opponentRedZonePercentage = $opponentRedZonePercentage;
    }

    /**
     * @return string
     */
    public function getOpponentGoalToGoPercentage()
    {
        return $this->opponentGoalToGoPercentage;
    }

    /**
     * @param string $opponentGoalToGoPercentage
     */
    public function setOpponentGoalToGoPercentage( $opponentGoalToGoPercentage )
    {
        $this->opponentGoalToGoPercentage = $opponentGoalToGoPercentage;
    }

    /**
     * @return int
     */
    public function getOpponentQuarterbackHitsDifferential()
    {
        return $this->opponentQuarterbackHitsDifferential;
    }

    /**
     * @param int $opponentQuarterbackHitsDifferential
     */
    public function setOpponentQuarterbackHitsDifferential( $opponentQuarterbackHitsDifferential )
    {
        $this->opponentQuarterbackHitsDifferential = $opponentQuarterbackHitsDifferential;
    }

    /**
     * @return int
     */
    public function getOpponentTacklesForLossDifferential()
    {
        return $this->opponentTacklesForLossDifferential;
    }

    /**
     * @param int $opponentTacklesForLossDifferential
     */
    public function setOpponentTacklesForLossDifferential( $opponentTacklesForLossDifferential )
    {
        $this->opponentTacklesForLossDifferential = $opponentTacklesForLossDifferential;
    }

    /**
     * @return int
     */
    public function getOpponentQuarterbackSacksDifferential()
    {
        return $this->opponentQuarterbackSacksDifferential;
    }

    /**
     * @param int $opponentQuarterbackSacksDifferential
     */
    public function setOpponentQuarterbackSacksDifferential( $opponentQuarterbackSacksDifferential )
    {
        $this->opponentQuarterbackSacksDifferential = $opponentQuarterbackSacksDifferential;
    }

    /**
     * @return string
     */
    public function getOpponentTacklesForLossPercentage()
    {
        return $this->opponentTacklesForLossPercentage;
    }

    /**
     * @param string $opponentTacklesForLossPercentage
     */
    public function setOpponentTacklesForLossPercentage( $opponentTacklesForLossPercentage )
    {
        $this->opponentTacklesForLossPercentage = $opponentTacklesForLossPercentage;
    }

    /**
     * @return string
     */
    public function getOpponentQuarterbackHitsPercentage()
    {
        return $this->opponentQuarterbackHitsPercentage;
    }

    /**
     * @param string $opponentQuarterbackHitsPercentage
     */
    public function setOpponentQuarterbackHitsPercentage( $opponentQuarterbackHitsPercentage )
    {
        $this->opponentQuarterbackHitsPercentage = $opponentQuarterbackHitsPercentage;
    }

    /**
     * @return string
     */
    public function getOpponentTimesSackedPercentage()
    {
        return $this->opponentTimesSackedPercentage;
    }

    /**
     * @param string $opponentTimesSackedPercentage
     */
    public function setOpponentTimesSackedPercentage( $opponentTimesSackedPercentage )
    {
        $this->opponentTimesSackedPercentage = $opponentTimesSackedPercentage;
    }

    /**
     * @return int
     */
    public function getKickOffs()
    {
        return $this->kickOffs;
    }

    /**
     * @param int $kickOffs
     */
    public function setKickOffs( $kickOffs )
    {
        $this->kickOffs = $kickOffs;
    }

    /**
     * @return int
     */
    public function getKickOffsInEndZone()
    {
        return $this->kickOffsInEndZone;
    }

    /**
     * @param int $kickOffsInEndZone
     */
    public function setKickOffsInEndZone( $kickOffsInEndZone )
    {
        $this->kickOffsInEndZone = $kickOffsInEndZone;
    }

    /**
     * @return int
     */
    public function getKickOffTouchBacks()
    {
        return $this->kickOffTouchBacks;
    }

    /**
     * @param int $kickOffTouchBacks
     */
    public function setKickOffTouchBacks( $kickOffTouchBacks )
    {
        $this->kickOffTouchBacks = $kickOffTouchBacks;
    }

    /**
     * @return int
     */
    public function getPuntsHadBlocked()
    {
        return $this->puntsHadBlocked;
    }

    /**
     * @param int $puntsHadBlocked
     */
    public function setPuntsHadBlocked( $puntsHadBlocked )
    {
        $this->puntsHadBlocked = $puntsHadBlocked;
    }

    /**
     * @return string
     */
    public function getPuntNetAverage()
    {
        return $this->puntNetAverage;
    }

    /**
     * @param string $puntNetAverage
     */
    public function setPuntNetAverage( $puntNetAverage )
    {
        $this->puntNetAverage = $puntNetAverage;
    }

    /**
     * @return int
     */
    public function getExtraPointKickingAttempts()
    {
        return $this->extraPointKickingAttempts;
    }

    /**
     * @param int $extraPointKickingAttempts
     */
    public function setExtraPointKickingAttempts( $extraPointKickingAttempts )
    {
        $this->extraPointKickingAttempts = $extraPointKickingAttempts;
    }

    /**
     * @return int
     */
    public function getExtraPointKickingConversions()
    {
        return $this->extraPointKickingConversions;
    }

    /**
     * @param int $extraPointKickingConversions
     */
    public function setExtraPointKickingConversions( $extraPointKickingConversions )
    {
        $this->extraPointKickingConversions = $extraPointKickingConversions;
    }

    /**
     * @return int
     */
    public function getExtraPointsHadBlocked()
    {
        return $this->extraPointsHadBlocked;
    }

    /**
     * @param int $extraPointsHadBlocked
     */
    public function setExtraPointsHadBlocked( $extraPointsHadBlocked )
    {
        $this->extraPointsHadBlocked = $extraPointsHadBlocked;
    }

    /**
     * @return int
     */
    public function getExtraPointPassingAttempts()
    {
        return $this->extraPointPassingAttempts;
    }

    /**
     * @param int $extraPointPassingAttempts
     */
    public function setExtraPointPassingAttempts( $extraPointPassingAttempts )
    {
        $this->extraPointPassingAttempts = $extraPointPassingAttempts;
    }

    /**
     * @return int
     */
    public function getExtraPointPassingConversions()
    {
        return $this->extraPointPassingConversions;
    }

    /**
     * @param int $extraPointPassingConversions
     */
    public function setExtraPointPassingConversions( $extraPointPassingConversions )
    {
        $this->extraPointPassingConversions = $extraPointPassingConversions;
    }

    /**
     * @return int
     */
    public function getExtraPointRushingAttempts()
    {
        return $this->extraPointRushingAttempts;
    }

    /**
     * @param int $extraPointRushingAttempts
     */
    public function setExtraPointRushingAttempts( $extraPointRushingAttempts )
    {
        $this->extraPointRushingAttempts = $extraPointRushingAttempts;
    }

    /**
     * @return int
     */
    public function getExtraPointRushingConversions()
    {
        return $this->extraPointRushingConversions;
    }

    /**
     * @param int $extraPointRushingConversions
     */
    public function setExtraPointRushingConversions( $extraPointRushingConversions )
    {
        $this->extraPointRushingConversions = $extraPointRushingConversions;
    }

    /**
     * @return int
     */
    public function getFieldGoalAttempts()
    {
        return $this->fieldGoalAttempts;
    }

    /**
     * @param int $fieldGoalAttempts
     */
    public function setFieldGoalAttempts( $fieldGoalAttempts )
    {
        $this->fieldGoalAttempts = $fieldGoalAttempts;
    }

    /**
     * @return int
     */
    public function getFieldGoalsMade()
    {
        return $this->fieldGoalsMade;
    }

    /**
     * @param int $fieldGoalsMade
     */
    public function setFieldGoalsMade( $fieldGoalsMade )
    {
        $this->fieldGoalsMade = $fieldGoalsMade;
    }

    /**
     * @return int
     */
    public function getFieldGoalsHadBlocked()
    {
        return $this->fieldGoalsHadBlocked;
    }

    /**
     * @param int $fieldGoalsHadBlocked
     */
    public function setFieldGoalsHadBlocked( $fieldGoalsHadBlocked )
    {
        $this->fieldGoalsHadBlocked = $fieldGoalsHadBlocked;
    }

    /**
     * @return int
     */
    public function getPuntReturns()
    {
        return $this->puntReturns;
    }

    /**
     * @param int $puntReturns
     */
    public function setPuntReturns( $puntReturns )
    {
        $this->puntReturns = $puntReturns;
    }

    /**
     * @return int
     */
    public function getPuntReturnYards()
    {
        return $this->puntReturnYards;
    }

    /**
     * @param int $puntReturnYards
     */
    public function setPuntReturnYards( $puntReturnYards )
    {
        $this->puntReturnYards = $puntReturnYards;
    }

    /**
     * @return int
     */
    public function getKickReturns()
    {
        return $this->kickReturns;
    }

    /**
     * @param int $kickReturns
     */
    public function setKickReturns( $kickReturns )
    {
        $this->kickReturns = $kickReturns;
    }

    /**
     * @return int
     */
    public function getKickReturnYards()
    {
        return $this->kickReturnYards;
    }

    /**
     * @param int $kickReturnYards
     */
    public function setKickReturnYards( $kickReturnYards )
    {
        $this->kickReturnYards = $kickReturnYards;
    }

    /**
     * @return int
     */
    public function getInterceptionReturns()
    {
        return $this->interceptionReturns;
    }

    /**
     * @param int $interceptionReturns
     */
    public function setInterceptionReturns( $interceptionReturns )
    {
        $this->interceptionReturns = $interceptionReturns;
    }

    /**
     * @return int
     */
    public function getInterceptionReturnYards()
    {
        return $this->interceptionReturnYards;
    }

    /**
     * @param int $interceptionReturnYards
     */
    public function setInterceptionReturnYards( $interceptionReturnYards )
    {
        $this->interceptionReturnYards = $interceptionReturnYards;
    }

    /**
     * @return int
     */
    public function getOpponentKickOffs()
    {
        return $this->opponentKickOffs;
    }

    /**
     * @param int $opponentKickOffs
     */
    public function setOpponentKickOffs( $opponentKickOffs )
    {
        $this->opponentKickOffs = $opponentKickOffs;
    }

    /**
     * @return int
     */
    public function getOpponentKickOffsInEndZone()
    {
        return $this->opponentKickOffsInEndZone;
    }

    /**
     * @param int $opponentKickOffsInEndZone
     */
    public function setOpponentKickOffsInEndZone( $opponentKickOffsInEndZone )
    {
        $this->opponentKickOffsInEndZone = $opponentKickOffsInEndZone;
    }

    /**
     * @return int
     */
    public function getOpponentKickOffTouchbacks()
    {
        return $this->opponentKickOffTouchbacks;
    }

    /**
     * @param int $opponentKickOffTouchbacks
     */
    public function setOpponentKickOffTouchbacks( $opponentKickOffTouchbacks )
    {
        $this->opponentKickOffTouchbacks = $opponentKickOffTouchbacks;
    }

    /**
     * @return int
     */
    public function getOpponentPuntsHadBlocked()
    {
        return $this->opponentPuntsHadBlocked;
    }

    /**
     * @param int $opponentPuntsHadBlocked
     */
    public function setOpponentPuntsHadBlocked( $opponentPuntsHadBlocked )
    {
        $this->opponentPuntsHadBlocked = $opponentPuntsHadBlocked;
    }

    /**
     * @return string
     */
    public function getOpponentPuntNetAverage()
    {
        return $this->opponentPuntNetAverage;
    }

    /**
     * @param string $opponentPuntNetAverage
     */
    public function setOpponentPuntNetAverage( $opponentPuntNetAverage )
    {
        $this->opponentPuntNetAverage = $opponentPuntNetAverage;
    }

    /**
     * @return int
     */
    public function getOpponentExtraPointKickingAttempts()
    {
        return $this->opponentExtraPointKickingAttempts;
    }

    /**
     * @param int $opponentExtraPointKickingAttempts
     */
    public function setOpponentExtraPointKickingAttempts( $opponentExtraPointKickingAttempts )
    {
        $this->opponentExtraPointKickingAttempts = $opponentExtraPointKickingAttempts;
    }

    /**
     * @return int
     */
    public function getOpponentExtraPointKickingConversions()
    {
        return $this->opponentExtraPointKickingConversions;
    }

    /**
     * @param int $opponentExtraPointKickingConversions
     */
    public function setOpponentExtraPointKickingConversions( $opponentExtraPointKickingConversions )
    {
        $this->opponentExtraPointKickingConversions = $opponentExtraPointKickingConversions;
    }

    /**
     * @return int
     */
    public function getOpponentExtraPointsHadBlocked()
    {
        return $this->opponentExtraPointsHadBlocked;
    }

    /**
     * @param int $opponentExtraPointsHadBlocked
     */
    public function setOpponentExtraPointsHadBlocked( $opponentExtraPointsHadBlocked )
    {
        $this->opponentExtraPointsHadBlocked = $opponentExtraPointsHadBlocked;
    }

    /**
     * @return int
     */
    public function getOpponentExtraPointPassingAttempts()
    {
        return $this->opponentExtraPointPassingAttempts;
    }

    /**
     * @param int $opponentExtraPointPassingAttempts
     */
    public function setOpponentExtraPointPassingAttempts( $opponentExtraPointPassingAttempts )
    {
        $this->opponentExtraPointPassingAttempts = $opponentExtraPointPassingAttempts;
    }

    /**
     * @return int
     */
    public function getOpponentExtraPointPassingConversions()
    {
        return $this->opponentExtraPointPassingConversions;
    }

    /**
     * @param int $opponentExtraPointPassingConversions
     */
    public function setOpponentExtraPointPassingConversions( $opponentExtraPointPassingConversions )
    {
        $this->opponentExtraPointPassingConversions = $opponentExtraPointPassingConversions;
    }

    /**
     * @return int
     */
    public function getOpponentExtraPointRushingAttempts()
    {
        return $this->opponentExtraPointRushingAttempts;
    }

    /**
     * @param int $opponentExtraPointRushingAttempts
     */
    public function setOpponentExtraPointRushingAttempts( $opponentExtraPointRushingAttempts )
    {
        $this->opponentExtraPointRushingAttempts = $opponentExtraPointRushingAttempts;
    }

    /**
     * @return int
     */
    public function getOpponentExtraPointRushingConversions()
    {
        return $this->opponentExtraPointRushingConversions;
    }

    /**
     * @param int $opponentExtraPointRushingConversions
     */
    public function setOpponentExtraPointRushingConversions( $opponentExtraPointRushingConversions )
    {
        $this->opponentExtraPointRushingConversions = $opponentExtraPointRushingConversions;
    }

    /**
     * @return int
     */
    public function getOpponentFieldGoalAttempts()
    {
        return $this->opponentFieldGoalAttempts;
    }

    /**
     * @param int $opponentFieldGoalAttempts
     */
    public function setOpponentFieldGoalAttempts( $opponentFieldGoalAttempts )
    {
        $this->opponentFieldGoalAttempts = $opponentFieldGoalAttempts;
    }

    /**
     * @return int
     */
    public function getOpponentFieldGoalsMade()
    {
        return $this->opponentFieldGoalsMade;
    }

    /**
     * @param int $opponentFieldGoalsMade
     */
    public function setOpponentFieldGoalsMade( $opponentFieldGoalsMade )
    {
        $this->opponentFieldGoalsMade = $opponentFieldGoalsMade;
    }

    /**
     * @return int
     */
    public function getOpponentFieldGoalsHadBlocked()
    {
        return $this->opponentFieldGoalsHadBlocked;
    }

    /**
     * @param int $opponentFieldGoalsHadBlocked
     */
    public function setOpponentFieldGoalsHadBlocked( $opponentFieldGoalsHadBlocked )
    {
        $this->opponentFieldGoalsHadBlocked = $opponentFieldGoalsHadBlocked;
    }

    /**
     * @return int
     */
    public function getOpponentPuntReturns()
    {
        return $this->opponentPuntReturns;
    }

    /**
     * @param int $opponentPuntReturns
     */
    public function setOpponentPuntReturns( $opponentPuntReturns )
    {
        $this->opponentPuntReturns = $opponentPuntReturns;
    }

    /**
     * @return int
     */
    public function getOpponentPuntReturnYards()
    {
        return $this->opponentPuntReturnYards;
    }

    /**
     * @param int $opponentPuntReturnYards
     */
    public function setOpponentPuntReturnYards( $opponentPuntReturnYards )
    {
        $this->opponentPuntReturnYards = $opponentPuntReturnYards;
    }

    /**
     * @return int
     */
    public function getOpponentKickReturns()
    {
        return $this->opponentKickReturns;
    }

    /**
     * @param int $opponentKickReturns
     */
    public function setOpponentKickReturns( $opponentKickReturns )
    {
        $this->opponentKickReturns = $opponentKickReturns;
    }

    /**
     * @return int
     */
    public function getOpponentKickReturnYards()
    {
        return $this->opponentKickReturnYards;
    }

    /**
     * @param int $opponentKickReturnYards
     */
    public function setOpponentKickReturnYards( $opponentKickReturnYards )
    {
        $this->opponentKickReturnYards = $opponentKickReturnYards;
    }

    /**
     * @return int
     */
    public function getOpponentInterceptionReturns()
    {
        return $this->opponentInterceptionReturns;
    }

    /**
     * @param int $opponentInterceptionReturns
     */
    public function setOpponentInterceptionReturns( $opponentInterceptionReturns )
    {
        $this->opponentInterceptionReturns = $opponentInterceptionReturns;
    }

    /**
     * @return int
     */
    public function getOpponentInterceptionReturnYards()
    {
        return $this->opponentInterceptionReturnYards;
    }

    /**
     * @param int $opponentInterceptionReturnYards
     */
    public function setOpponentInterceptionReturnYards( $opponentInterceptionReturnYards )
    {
        $this->opponentInterceptionReturnYards = $opponentInterceptionReturnYards;
    }

    /**
     * @return int
     */
    public function getSoloTackles()
    {
        return $this->soloTackles;
    }

    /**
     * @param int $soloTackles
     */
    public function setSoloTackles( $soloTackles )
    {
        $this->soloTackles = $soloTackles;
    }

    /**
     * @return int
     */
    public function getAssistedTackles()
    {
        return $this->assistedTackles;
    }

    /**
     * @param int $assistedTackles
     */
    public function setAssistedTackles( $assistedTackles )
    {
        $this->assistedTackles = $assistedTackles;
    }

    /**
     * @return int
     */
    public function getSacks()
    {
        return $this->sacks;
    }

    /**
     * @param int $sacks
     */
    public function setSacks( $sacks )
    {
        $this->sacks = $sacks;
    }

    /**
     * @return int
     */
    public function getSackYards()
    {
        return $this->sackYards;
    }

    /**
     * @param int $sackYards
     */
    public function setSackYards( $sackYards )
    {
        $this->sackYards = $sackYards;
    }

    /**
     * @return int
     */
    public function getPassesDefended()
    {
        return $this->passesDefended;
    }

    /**
     * @param int $passesDefended
     */
    public function setPassesDefended( $passesDefended )
    {
        $this->passesDefended = $passesDefended;
    }

    /**
     * @return int
     */
    public function getFumblesForced()
    {
        return $this->fumblesForced;
    }

    /**
     * @param int $fumblesForced
     */
    public function setFumblesForced( $fumblesForced )
    {
        $this->fumblesForced = $fumblesForced;
    }

    /**
     * @return int
     */
    public function getFumblesRecovered()
    {
        return $this->fumblesRecovered;
    }

    /**
     * @param int $fumblesRecovered
     */
    public function setFumblesRecovered( $fumblesRecovered )
    {
        $this->fumblesRecovered = $fumblesRecovered;
    }

    /**
     * @return int
     */
    public function getFumbleReturnYards()
    {
        return $this->fumbleReturnYards;
    }

    /**
     * @param int $fumbleReturnYards
     */
    public function setFumbleReturnYards( $fumbleReturnYards )
    {
        $this->fumbleReturnYards = $fumbleReturnYards;
    }

    /**
     * @return int
     */
    public function getFumbleReturnTouchDowns()
    {
        return $this->fumbleReturnTouchDowns;
    }

    /**
     * @param int $fumbleReturnTouchDowns
     */
    public function setFumbleReturnTouchDowns( $fumbleReturnTouchDowns )
    {
        $this->fumbleReturnTouchDowns = $fumbleReturnTouchDowns;
    }

    /**
     * @return int
     */
    public function getInterceptionReturnTouchDowns()
    {
        return $this->interceptionReturnTouchDowns;
    }

    /**
     * @param int $interceptionReturnTouchDowns
     */
    public function setInterceptionReturnTouchDowns( $interceptionReturnTouchDowns )
    {
        $this->interceptionReturnTouchDowns = $interceptionReturnTouchDowns;
    }

    /**
     * @return int
     */
    public function getBlockedKicks()
    {
        return $this->blockedKicks;
    }

    /**
     * @param int $blockedKicks
     */
    public function setBlockedKicks( $blockedKicks )
    {
        $this->blockedKicks = $blockedKicks;
    }

    /**
     * @return int
     */
    public function getPuntReturnTouchdowns()
    {
        return $this->puntReturnTouchdowns;
    }

    /**
     * @param int $puntReturnTouchdowns
     */
    public function setPuntReturnTouchdowns( $puntReturnTouchdowns )
    {
        $this->puntReturnTouchdowns = $puntReturnTouchdowns;
    }

    /**
     * @return int
     */
    public function getPuntReturnLong()
    {
        return $this->puntReturnLong;
    }

    /**
     * @param int $puntReturnLong
     */
    public function setPuntReturnLong( $puntReturnLong )
    {
        $this->puntReturnLong = $puntReturnLong;
    }

    /**
     * @return int
     */
    public function getKickReturnTouchdowns()
    {
        return $this->kickReturnTouchdowns;
    }

    /**
     * @param int $kickReturnTouchdowns
     */
    public function setKickReturnTouchdowns( $kickReturnTouchdowns )
    {
        $this->kickReturnTouchdowns = $kickReturnTouchdowns;
    }

    /**
     * @return int
     */
    public function getKickReturnLong()
    {
        return $this->kickReturnLong;
    }

    /**
     * @param int $kickReturnLong
     */
    public function setKickReturnLong( $kickReturnLong )
    {
        $this->kickReturnLong = $kickReturnLong;
    }

    /**
     * @return int
     */
    public function getBlockedKickReturnYards()
    {
        return $this->blockedKickReturnYards;
    }

    /**
     * @param int $blockedKickReturnYards
     */
    public function setBlockedKickReturnYards( $blockedKickReturnYards )
    {
        $this->blockedKickReturnYards = $blockedKickReturnYards;
    }

    /**
     * @return int
     */
    public function getBlockedKickReturnTouchdowns()
    {
        return $this->blockedKickReturnTouchdowns;
    }

    /**
     * @param int $blockedKickReturnTouchdowns
     */
    public function setBlockedKickReturnTouchdowns( $blockedKickReturnTouchdowns )
    {
        $this->blockedKickReturnTouchdowns = $blockedKickReturnTouchdowns;
    }

    /**
     * @return int
     */
    public function getFieldGoalReturnYards()
    {
        return $this->fieldGoalReturnYards;
    }

    /**
     * @param int $fieldGoalReturnYards
     */
    public function setFieldGoalReturnYards( $fieldGoalReturnYards )
    {
        $this->fieldGoalReturnYards = $fieldGoalReturnYards;
    }

    /**
     * @return int
     */
    public function getFieldGoalReturnTouchdowns()
    {
        return $this->fieldGoalReturnTouchdowns;
    }

    /**
     * @param int $fieldGoalReturnTouchdowns
     */
    public function setFieldGoalReturnTouchdowns( $fieldGoalReturnTouchdowns )
    {
        $this->fieldGoalReturnTouchdowns = $fieldGoalReturnTouchdowns;
    }

    /**
     * @return int
     */
    public function getPuntNetYards()
    {
        return $this->puntNetYards;
    }

    /**
     * @param int $puntNetYards
     */
    public function setPuntNetYards( $puntNetYards )
    {
        $this->puntNetYards = $puntNetYards;
    }

    /**
     * @return int
     */
    public function getOpponentSoloTackles()
    {
        return $this->opponentSoloTackles;
    }

    /**
     * @param int $opponentSoloTackles
     */
    public function setOpponentSoloTackles( $opponentSoloTackles )
    {
        $this->opponentSoloTackles = $opponentSoloTackles;
    }

    /**
     * @return int
     */
    public function getOpponentAssistedTackles()
    {
        return $this->opponentAssistedTackles;
    }

    /**
     * @param int $opponentAssistedTackles
     */
    public function setOpponentAssistedTackles( $opponentAssistedTackles )
    {
        $this->opponentAssistedTackles = $opponentAssistedTackles;
    }

    /**
     * @return int
     */
    public function getOpponentSacks()
    {
        return $this->opponentSacks;
    }

    /**
     * @param int $opponentSacks
     */
    public function setOpponentSacks( $opponentSacks )
    {
        $this->opponentSacks = $opponentSacks;
    }

    /**
     * @return int
     */
    public function getOpponentSackYards()
    {
        return $this->opponentSackYards;
    }

    /**
     * @param int $opponentSackYards
     */
    public function setOpponentSackYards( $opponentSackYards )
    {
        $this->opponentSackYards = $opponentSackYards;
    }

    /**
     * @return int
     */
    public function getOpponentPassesDefended()
    {
        return $this->opponentPassesDefended;
    }

    /**
     * @param int $opponentPassesDefended
     */
    public function setOpponentPassesDefended( $opponentPassesDefended )
    {
        $this->opponentPassesDefended = $opponentPassesDefended;
    }

    /**
     * @return int
     */
    public function getOpponentFumblesForced()
    {
        return $this->opponentFumblesForced;
    }

    /**
     * @param int $opponentFumblesForced
     */
    public function setOpponentFumblesForced( $opponentFumblesForced )
    {
        $this->opponentFumblesForced = $opponentFumblesForced;
    }

    /**
     * @return int
     */
    public function getOpponentFumblesRecovered()
    {
        return $this->opponentFumblesRecovered;
    }

    /**
     * @param int $opponentFumblesRecovered
     */
    public function setOpponentFumblesRecovered( $opponentFumblesRecovered )
    {
        $this->opponentFumblesRecovered = $opponentFumblesRecovered;
    }

    /**
     * @return int
     */
    public function getOpponentFumbleReturnYards()
    {
        return $this->opponentFumbleReturnYards;
    }

    /**
     * @param int $opponentFumbleReturnYards
     */
    public function setOpponentFumbleReturnYards( $opponentFumbleReturnYards )
    {
        $this->opponentFumbleReturnYards = $opponentFumbleReturnYards;
    }

    /**
     * @return int
     */
    public function getOpponentFumbleReturnTouchDowns()
    {
        return $this->opponentFumbleReturnTouchDowns;
    }

    /**
     * @param int $opponentFumbleReturnTouchDowns
     */
    public function setOpponentFumbleReturnTouchDowns( $opponentFumbleReturnTouchDowns )
    {
        $this->opponentFumbleReturnTouchDowns = $opponentFumbleReturnTouchDowns;
    }

    /**
     * @return int
     */
    public function getOpponentInterceptionReturnTouchdowns()
    {
        return $this->opponentInterceptionReturnTouchdowns;
    }

    /**
     * @param int $opponentInterceptionReturnTouchdowns
     */
    public function setOpponentInterceptionReturnTouchdowns( $opponentInterceptionReturnTouchdowns )
    {
        $this->opponentInterceptionReturnTouchdowns = $opponentInterceptionReturnTouchdowns;
    }

    /**
     * @return int
     */
    public function getOpponentBlockedKicks()
    {
        return $this->opponentBlockedKicks;
    }

    /**
     * @param int $opponentBlockedKicks
     */
    public function setOpponentBlockedKicks( $opponentBlockedKicks )
    {
        $this->opponentBlockedKicks = $opponentBlockedKicks;
    }

    /**
     * @return int
     */
    public function getOpponentPuntReturnTouchdowns()
    {
        return $this->opponentPuntReturnTouchdowns;
    }

    /**
     * @param int $opponentPuntReturnTouchdowns
     */
    public function setOpponentPuntReturnTouchdowns( $opponentPuntReturnTouchdowns )
    {
        $this->opponentPuntReturnTouchdowns = $opponentPuntReturnTouchdowns;
    }

    /**
     * @return int
     */
    public function getOpponentPuntReturnLong()
    {
        return $this->opponentPuntReturnLong;
    }

    /**
     * @param int $opponentPuntReturnLong
     */
    public function setOpponentPuntReturnLong( $opponentPuntReturnLong )
    {
        $this->opponentPuntReturnLong = $opponentPuntReturnLong;
    }

    /**
     * @return int
     */
    public function getOpponentKickReturnTouchdowns()
    {
        return $this->opponentKickReturnTouchdowns;
    }

    /**
     * @param int $opponentKickReturnTouchdowns
     */
    public function setOpponentKickReturnTouchdowns( $opponentKickReturnTouchdowns )
    {
        $this->opponentKickReturnTouchdowns = $opponentKickReturnTouchdowns;
    }

    /**
     * @return int
     */
    public function getOpponentKickReturnLong()
    {
        return $this->opponentKickReturnLong;
    }

    /**
     * @param int $opponentKickReturnLong
     */
    public function setOpponentKickReturnLong( $opponentKickReturnLong )
    {
        $this->opponentKickReturnLong = $opponentKickReturnLong;
    }

    /**
     * @return int
     */
    public function getOpponentBlockedKickReturnYards()
    {
        return $this->opponentBlockedKickReturnYards;
    }

    /**
     * @param int $opponentBlockedKickReturnYards
     */
    public function setOpponentBlockedKickReturnYards( $opponentBlockedKickReturnYards )
    {
        $this->opponentBlockedKickReturnYards = $opponentBlockedKickReturnYards;
    }

    /**
     * @return int
     */
    public function getOpponentBlockedKickReturnTouchdowns()
    {
        return $this->opponentBlockedKickReturnTouchdowns;
    }

    /**
     * @param int $opponentBlockedKickReturnTouchdowns
     */
    public function setOpponentBlockedKickReturnTouchdowns( $opponentBlockedKickReturnTouchdowns )
    {
        $this->opponentBlockedKickReturnTouchdowns = $opponentBlockedKickReturnTouchdowns;
    }

    /**
     * @return int
     */
    public function getOpponentFieldGoalReturnYards()
    {
        return $this->opponentFieldGoalReturnYards;
    }

    /**
     * @param int $opponentFieldGoalReturnYards
     */
    public function setOpponentFieldGoalReturnYards( $opponentFieldGoalReturnYards )
    {
        $this->opponentFieldGoalReturnYards = $opponentFieldGoalReturnYards;
    }

    /**
     * @return int
     */
    public function getOpponentFieldGoalReturnTouchdowns()
    {
        return $this->opponentFieldGoalReturnTouchdowns;
    }

    /**
     * @param int $opponentFieldGoalReturnTouchdowns
     */
    public function setOpponentFieldGoalReturnTouchdowns( $opponentFieldGoalReturnTouchdowns )
    {
        $this->opponentFieldGoalReturnTouchdowns = $opponentFieldGoalReturnTouchdowns;
    }

    /**
     * @return int
     */
    public function getOpponentPuntNetYards()
    {
        return $this->opponentPuntNetYards;
    }

    /**
     * @param int $opponentPuntNetYards
     */
    public function setOpponentPuntNetYards( $opponentPuntNetYards )
    {
        $this->opponentPuntNetYards = $opponentPuntNetYards;
    }

    /**
     * @return boolean
     */
    public function isIsGameOver()
    {
        return $this->isGameOver;
    }

    /**
     * @param boolean $isGameOver
     */
    public function setIsGameOver( $isGameOver )
    {
        $this->isGameOver = $isGameOver;
    }

    /**
     * @return string
     */
    public function getTeamName()
    {
        return $this->teamName;
    }

    /**
     * @param string $teamName
     */
    public function setTeamName( $teamName )
    {
        $this->teamName = $teamName;
    }

    /**
     * @return string
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * @param string $dayOfWeek
     */
    public function setDayOfWeek( $dayOfWeek )
    {
        $this->dayOfWeek = $dayOfWeek;
    }

    /**
     * @return int
     */
    public function getPassingDropbacks()
    {
        return $this->passingDropbacks;
    }

    /**
     * @param int $passingDropbacks
     */
    public function setPassingDropbacks( $passingDropbacks )
    {
        $this->passingDropbacks = $passingDropbacks;
    }

    /**
     * @return int
     */
    public function getOpponentPassingDropbacks()
    {
        return $this->opponentPassingDropbacks;
    }

    /**
     * @param int $opponentPassingDropbacks
     */
    public function setOpponentPassingDropbacks( $opponentPassingDropbacks )
    {
        $this->opponentPassingDropbacks = $opponentPassingDropbacks;
    }

    /**
     * @return int
     */
    public function getTeamGameID()
    {
        return $this->teamGameID;
    }

    /**
     * @param int $teamGameID
     */
    public function setTeamGameID( $teamGameID )
    {
        $this->teamGameID = $teamGameID;
    }

    /**
     * @return int
     */
    public function getTwoPointConversionReturns()
    {
        return $this->twoPointConversionReturns;
    }

    /**
     * @param int $twoPointConversionReturns
     */
    public function setTwoPointConversionReturns( $twoPointConversionReturns )
    {
        $this->twoPointConversionReturns = $twoPointConversionReturns;
    }

    /**
     * @return int
     */
    public function getOpponentTwoPointConversionReturns()
    {
        return $this->opponentTwoPointConversionReturns;
    }

    /**
     * @param int $opponentTwoPointConversionReturns
     */
    public function setOpponentTwoPointConversionReturns( $opponentTwoPointConversionReturns )
    {
        $this->opponentTwoPointConversionReturns = $opponentTwoPointConversionReturns;
    }


}

