<?php

namespace FantasyPro\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerGame
 *
 * @ORM\Table(name="fp_playerGame")
 * @ORM\Entity(repositoryClass="FantasyPro\DataBundle\Entity\PlayerGameRepository")
 */
class PlayerGame
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
     * @ORM\Column(type="string", unique=true, length=20, nullable=false, name="playerGameID")
     */
    private $playerGameID;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=10, nullable=false, name="gameKey")
     */
    private $gameKey;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="playerID")
     */
    private $playerID;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, name="seasonType")
     */
    private $seasonType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=false, name="gameDate")
     */
    private $gameDate;

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
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="team")
     */
    private $team;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="opponent")
     */
    private $opponent;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="homeOrAway")
     */
    private $homeOrAway;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="number")
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="name")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="position")
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="positionCategory")
     */
    private $positionCategory;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="activated")
     */
    private $activated;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="played")
     */
    private $played;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="started")
     */
    private $started;

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
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="passingCompletionPercentage")
     */
    private $passingCompletionPercentage;

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
     * @ORM\Column(type="decimal", nullable=true, name="passingRating")
     */
    private $passingRating;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="passingLong")
     */
    private $passingLong;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="passingSacks")
     */
    private $passingSacks;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="passingSackYards")
     */
    private $passingSackYards;

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
     * @ORM\Column(type="integer", nullable=true, name="rushingLong")
     */
    private $rushingLong;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="receivingTargets")
     */
    private $receivingTargets;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="receptions")
     */
    private $receptions;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="receivingYards")
     */
    private $receivingYards;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="receivingYardsPerReception")
     */
    private $receivingYardsPerReception;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="receivingTouchdowns")
     */
    private $receivingTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="receivingLong")
     */
    private $receivingLong;

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
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="puntReturnYardsPerAttempt")
     */
    private $puntReturnYardsPerAttempt;

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
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="kickReturnYardsPerAttempt")
     */
    private $kickReturnYardsPerAttempt;

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
     * @ORM\Column(type="integer", nullable=true, name="tacklesForLoss")
     */
    private $tacklesForLoss;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="sacks")
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
     * @ORM\Column(type="integer", nullable=true, name="quarterbackHits")
     */
    private $quarterbackHits;

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
     * @ORM\Column(type="integer", nullable=true, name="fumbleReturnYards")
     */
    private $fumbleReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="fumbleReturnTouchdowns")
     */
    private $fumbleReturnTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="fumblesRecovered")
     */
    private $fumblesRecovered;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="interceptions")
     */
    private $interceptions;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="interceptionReturnYards")
     */
    private $interceptionReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="interceptionReturnTouchdowns")
     */
    private $interceptionReturnTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="blockedKicks")
     */
    private $blockedKicks;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="specialTeamsSoloTackles")
     */
    private $specialTeamsSoloTackles;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="specialTeamsAssistedTackles")
     */
    private $specialTeamsAssistedTackles;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="miscSoloTackles")
     */
    private $miscSoloTackles;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="miscAssistedTackles")
     */
    private $miscAssistedTackles;

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
     * @ORM\Column(type="integer", nullable=true, name="fieldGoalsAttempted")
     */
    private $fieldGoalsAttempted;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="fieldGoalsMade")
     */
    private $fieldGoalsMade;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="fieldGoalsLongestMade")
     */
    private $fieldGoalsLongestMade;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="extraPointsMade")
     */
    private $extraPointsMade;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="twoPointConversionPasses")
     */
    private $twoPointConversionPasses;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="twoPointConversionRuns")
     */
    private $twoPointConversionRuns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="twoPointConversionReceptions")
     */
    private $twoPointConversionReceptions;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="fantasyPoints")
     */
    private $fantasyPoints;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="fantasyPointsPPR")
     */
    private $fantasyPointsPPR;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="customD365FantasyPoints")
     */
    private $customD365FantasyPoints;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="receptionPercentage")
     */
    private $receptionPercentage;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="recivingYardsPerTarget")
     */
    private $receivingYardsPerTarget;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="tackles")
     */
    private $tackles;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="offensiveTouchdowns")
     */
    private $offensiveTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="defensiveTouchdowns")
     */
    private $defensiveTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="specialTeamsTouchdowns")
     */
    private $specialTeamsTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="touchdowns")
     */
    private $touchdowns;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="fantasyPosition")
     */
    private $fantasyPosition;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="fieldGoalPercentage")
     */
    private $fieldGoalPercentage;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="fumblesOwnRecoveries")
     */
    private $fumblesOwnRecoveries;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="fumblesOutOfBounds")
     */
    private $fumblesOutOfBounds;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="kickReturnFairCatches")
     */
    private $kickReturnFairCatches;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="puntReturnFairCatches")
     */
    private $puntReturnFairCatches;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="puntTouchbacks")
     */
    private $puntTouchbacks;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="puntInside20")
     */
    private $puntInside20;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="puntNetAverage")
     */
    private $puntNetAverage;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="extraPointsAttempted")
     */
    private $extraPointsAttempted;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="blockedKickReturnTouchdowns")
     */
    private $blockedKickReturnTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="fieldGoalReturnTouchdowns")
     */
    private $fieldGoalReturnTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="safeties")
     */
    private $safeties;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="fieldGoalsHadBlocked")
     */
    private $fieldGoalsHadBlocked;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="puntsHadBlocked")
     */
    private $puntsHadBlocked;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="extraPointsHadBlocked")
     */
    private $extraPointsHadBlocked;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="puntLong")
     */
    private $puntLong;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="blockedKickReturnYards")
     */
    private $blockedKickReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="fieldGoalReturnYards")
     */
    private $fieldGoalReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="puntNetYards")
     */
    private $puntNetYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="specialTeamsFumblesForced")
     */
    private $specialTeamsFumblesForced;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="specialTeamsFumblesRecovered")
     */
    private $specialTeamsFumblesRecovered;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="miscFumblesForced")
     */
    private $miscFumblesForced;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="miscFumblesRecovered")
     */
    private $miscFumblesRecovered;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="shortName")
     */
    private $shortName;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="playingSurface")
     */
    private $playingSurface;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true, name="isGameOver")
     */
    private $isGameOver;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="safetiesAllowed")
     */
    private $safetiesAllowed;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="stadium")
     */
    private $stadium;

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
     * @ORM\Column(type="integer", nullable=true, name="fanDuelSalary")
     */
    private $fanDuelSalary;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="draftKingsSalary")
     */
    private $draftKingsSalary;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="fantasyDataSalary")
     */
    private $fantasyDataSalary;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="offensiveSnapsPlayed")
     */
    private $offensiveSnapsPlayed;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="defensiveSnapsPlayed")
     */
    private $defensiveSnapsPlayed;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="specialTeamsSnapsPlayed")
     */
    private $specialTeamsSnapsPlayed;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="offensiveTeamSnaps")
     */
    private $offensiveTeamSnaps;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="defensiveTeamSnaps")
     */
    private $defensiveTeamSnaps;


    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int $number
     */
    public function setNumber( $number )
    {
        $this->number = $number;
    }

    /**
     * @return int
     */
    public function getVictivSalary()
    {
        return $this->victivSalary;
    }

    /**
     * @param int $victivSalary
     */
    public function setVictivSalary( $victivSalary )
    {
        $this->victivSalary = $victivSalary;
    }

    /**
     * @return int
     */
    public function getPlayerSeasonID()
    {
        return $this->playerSeasonID;
    }

    /**
     * @param int $playerSeasonID
     */
    public function setPlayerSeasonID( $playerSeasonID )
    {
        $this->playerSeasonID = $playerSeasonID;
    }

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="specialTeamsTeamSnaps")
     */
    private $specialTeamsTeamSnaps;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="victivSalary")
     */
    private $victivSalary;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="playerSeasonID")
     */
    private $playerSeasonID;


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
    public function getPlayerGameID()
    {
        return $this->playerGameID;
    }

    /**
     * @param string $playerGameID
     */
    public function setPlayerGameID( $playerGameID )
    {
        $this->playerGameID = $playerGameID;
    }

    /**
     * Set gameKey
     *
     * @param string $gameKey
     *
     * @return PlayerGame
     */
    public function setGameKey( $gameKey )
    {
        $this->gameKey = $gameKey;

        return $this;
    }

    /**
     * Get gameKey
     *
     * @return string
     */
    public function getGameKey()
    {
        return $this->gameKey;
    }

    /**
     * Set playerID
     *
     * @param integer $playerID
     *
     * @return PlayerGame
     */
    public function setPlayerID( $playerID )
    {
        $this->playerID = $playerID;

        return $this;
    }

    /**
     * Get playerID
     *
     * @return integer
     */
    public function getPlayerID()
    {
        return $this->playerID;
    }

    /**
     * Set seasonType
     *
     * @param integer $seasonType
     *
     * @return PlayerGame
     */
    public function setSeasonType( $seasonType )
    {
        $this->seasonType = $seasonType;

        return $this;
    }

    /**
     * Get seasonType
     *
     * @return integer
     */
    public function getSeasonType()
    {
        return $this->seasonType;
    }

    /**
     * Set season
     *
     * @param integer $season
     *
     * @return PlayerGame
     */
    public function setSeason( $season )
    {
        $this->season = $season;

        return $this;
    }

    /**
     * Get season
     *
     * @return integer
     */
    public function getSeason()
    {
        return $this->season;
    }


    /**
     * Set week
     *
     * @param integer $week
     *
     * @return PlayerGame
     */
    public function setWeek( $week )
    {
        $this->week = $week;

        return $this;
    }

    /**
     * Get week
     *
     * @return integer
     */
    public function getWeek()
    {
        return $this->week;
    }

    /**
     * Set team
     *
     * @param string $team
     *
     * @return PlayerGame
     */
    public function setTeam( $team )
    {
        $this->team = $team;

        return $this;
    }

    /**
     * Get team
     *
     * @return string
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Set opponent
     *
     * @param string $opponent
     *
     * @return PlayerGame
     */
    public function setOpponent( $opponent )
    {
        $this->opponent = $opponent;

        return $this;
    }

    /**
     * Get opponent
     *
     * @return string
     */
    public function getOpponent()
    {
        return $this->opponent;
    }

    /**
     * Set homeOrAway
     *
     * @param string $homeOrAway
     *
     * @return PlayerGame
     */
    public function setHomeOrAway( $homeOrAway )
    {
        $this->homeOrAway = $homeOrAway;

        return $this;
    }

    /**
     * Get homeOrAway
     *
     * @return string
     */
    public function getHomeOrAway()
    {
        return $this->homeOrAway;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return PlayerGame
     */
    public function setName( $name )
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return PlayerGame
     */
    public function setPosition( $position )
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set positionCategory
     *
     * @param string $positionCategory
     *
     * @return PlayerGame
     */
    public function setPositionCategory( $positionCategory )
    {
        $this->positionCategory = $positionCategory;

        return $this;
    }

    /**
     * Get positionCategory
     *
     * @return string
     */
    public function getPositionCategory()
    {
        return $this->positionCategory;
    }

    /**
     * Set activated
     *
     * @param integer $activated
     *
     * @return PlayerGame
     */
    public function setActivated( $activated )
    {
        $this->activated = $activated;

        return $this;
    }

    /**
     * Get activated
     *
     * @return integer
     */
    public function getActivated()
    {
        return $this->activated;
    }

    /**
     * Set played
     *
     * @param integer $played
     *
     * @return PlayerGame
     */
    public function setPlayed( $played )
    {
        $this->played = $played;

        return $this;
    }

    /**
     * Get played
     *
     * @return integer
     */
    public function getPlayed()
    {
        return $this->played;
    }

    /**
     * Set started
     *
     * @param integer $started
     *
     * @return PlayerGame
     */
    public function setStarted( $started )
    {
        $this->started = $started;

        return $this;
    }

    /**
     * Get started
     *
     * @return integer
     */
    public function getStarted()
    {
        return $this->started;
    }

    /**
     * Set passingAttempts
     *
     * @param integer $passingAttempts
     *
     * @return PlayerGame
     */
    public function setPassingAttempts( $passingAttempts )
    {
        $this->passingAttempts = $passingAttempts;

        return $this;
    }

    /**
     * Get passingAttempts
     *
     * @return integer
     */
    public function getPassingAttempts()
    {
        return $this->passingAttempts;
    }

    /**
     * Set passingCompletions
     *
     * @param integer $passingCompletions
     *
     * @return PlayerGame
     */
    public function setPassingCompletions( $passingCompletions )
    {
        $this->passingCompletions = $passingCompletions;

        return $this;
    }

    /**
     * Get passingCompletions
     *
     * @return integer
     */
    public function getPassingCompletions()
    {
        return $this->passingCompletions;
    }

    /**
     * Set passingYards
     *
     * @param integer $passingYards
     *
     * @return PlayerGame
     */
    public function setPassingYards( $passingYards )
    {
        $this->passingYards = $passingYards;

        return $this;
    }

    /**
     * Get passingYards
     *
     * @return integer
     */
    public function getPassingYards()
    {
        return $this->passingYards;
    }

    /**
     * Set passingCompletionPercentage
     *
     * @param string $passingCompletionPercentage
     *
     * @return PlayerGame
     */
    public function setPassingCompletionPercentage( $passingCompletionPercentage )
    {
        $this->passingCompletionPercentage = $passingCompletionPercentage;

        return $this;
    }

    /**
     * Get passingCompletionPercentage
     *
     * @return string
     */
    public function getPassingCompletionPercentage()
    {
        return $this->passingCompletionPercentage;
    }

    /**
     * Set passingYardsPerAttempt
     *
     * @param string $passingYardsPerAttempt
     *
     * @return PlayerGame
     */
    public function setPassingYardsPerAttempt( $passingYardsPerAttempt )
    {
        $this->passingYardsPerAttempt = $passingYardsPerAttempt;

        return $this;
    }

    /**
     * Get passingYardsPerAttempt
     *
     * @return string
     */
    public function getPassingYardsPerAttempt()
    {
        return $this->passingYardsPerAttempt;
    }

    /**
     * Set passingYardsPerCompletion
     *
     * @param string $passingYardsPerCompletion
     *
     * @return PlayerGame
     */
    public function setPassingYardsPerCompletion( $passingYardsPerCompletion )
    {
        $this->passingYardsPerCompletion = $passingYardsPerCompletion;

        return $this;
    }

    /**
     * Get passingYardsPerCompletion
     *
     * @return string
     */
    public function getPassingYardsPerCompletion()
    {
        return $this->passingYardsPerCompletion;
    }

    /**
     * Set passingTouchdowns
     *
     * @param integer $passingTouchdowns
     *
     * @return PlayerGame
     */
    public function setPassingTouchdowns( $passingTouchdowns )
    {
        $this->passingTouchdowns = $passingTouchdowns;

        return $this;
    }

    /**
     * Get passingTouchdowns
     *
     * @return integer
     */
    public function getPassingTouchdowns()
    {
        return $this->passingTouchdowns;
    }

    /**
     * Set passingInterceptions
     *
     * @param integer $passingInterceptions
     *
     * @return PlayerGame
     */
    public function setPassingInterceptions( $passingInterceptions )
    {
        $this->passingInterceptions = $passingInterceptions;

        return $this;
    }

    /**
     * Get passingInterceptions
     *
     * @return integer
     */
    public function getPassingInterceptions()
    {
        return $this->passingInterceptions;
    }

    /**
     * Set passingRating
     *
     * @param string $passingRating
     *
     * @return PlayerGame
     */
    public function setPassingRating( $passingRating )
    {
        $this->passingRating = $passingRating;

        return $this;
    }

    /**
     * Get passingRating
     *
     * @return string
     */
    public function getPassingRating()
    {
        return $this->passingRating;
    }

    /**
     * Set passingLong
     *
     * @param integer $passingLong
     *
     * @return PlayerGame
     */
    public function setPassingLong( $passingLong )
    {
        $this->passingLong = $passingLong;

        return $this;
    }

    /**
     * Get passingLong
     *
     * @return integer
     */
    public function getPassingLong()
    {
        return $this->passingLong;
    }

    /**
     * Set passingSacks
     *
     * @param integer $passingSacks
     *
     * @return PlayerGame
     */
    public function setPassingSacks( $passingSacks )
    {
        $this->passingSacks = $passingSacks;

        return $this;
    }

    /**
     * Get passingSacks
     *
     * @return integer
     */
    public function getPassingSacks()
    {
        return $this->passingSacks;
    }

    /**
     * Set passingSackYards
     *
     * @param integer $passingSackYards
     *
     * @return PlayerGame
     */
    public function setPassingSackYards( $passingSackYards )
    {
        $this->passingSackYards = $passingSackYards;

        return $this;
    }

    /**
     * Get passingSackYards
     *
     * @return integer
     */
    public function getPassingSackYards()
    {
        return $this->passingSackYards;
    }

    /**
     * Set rushingAttempts
     *
     * @param integer $rushingAttempts
     *
     * @return PlayerGame
     */
    public function setRushingAttempts( $rushingAttempts )
    {
        $this->rushingAttempts = $rushingAttempts;

        return $this;
    }

    /**
     * Get rushingAttempts
     *
     * @return integer
     */
    public function getRushingAttempts()
    {
        return $this->rushingAttempts;
    }

    /**
     * Set rushingYards
     *
     * @param integer $rushingYards
     *
     * @return PlayerGame
     */
    public function setRushingYards( $rushingYards )
    {
        $this->rushingYards = $rushingYards;

        return $this;
    }

    /**
     * Get rushingYards
     *
     * @return integer
     */
    public function getRushingYards()
    {
        return $this->rushingYards;
    }

    /**
     * Set rushingYardsPerAttempt
     *
     * @param string $rushingYardsPerAttempt
     *
     * @return PlayerGame
     */
    public function setRushingYardsPerAttempt( $rushingYardsPerAttempt )
    {
        $this->rushingYardsPerAttempt = $rushingYardsPerAttempt;

        return $this;
    }

    /**
     * Get rushingYardsPerAttempt
     *
     * @return string
     */
    public function getRushingYardsPerAttempt()
    {
        return $this->rushingYardsPerAttempt;
    }

    /**
     * Set rushingTouchdowns
     *
     * @param integer $rushingTouchdowns
     *
     * @return PlayerGame
     */
    public function setRushingTouchdowns( $rushingTouchdowns )
    {
        $this->rushingTouchdowns = $rushingTouchdowns;

        return $this;
    }

    /**
     * Get rushingTouchdowns
     *
     * @return integer
     */
    public function getRushingTouchdowns()
    {
        return $this->rushingTouchdowns;
    }

    /**
     * Set rushingLong
     *
     * @param integer $rushingLong
     *
     * @return PlayerGame
     */
    public function setRushingLong( $rushingLong )
    {
        $this->rushingLong = $rushingLong;

        return $this;
    }

    /**
     * Get rushingLong
     *
     * @return integer
     */
    public function getRushingLong()
    {
        return $this->rushingLong;
    }

    /**
     * Set receivingTargets
     *
     * @param integer $receivingTargets
     *
     * @return PlayerGame
     */
    public function setReceivingTargets( $receivingTargets )
    {
        $this->receivingTargets = $receivingTargets;

        return $this;
    }

    /**
     * Get receivingTargets
     *
     * @return integer
     */
    public function getReceivingTargets()
    {
        return $this->receivingTargets;
    }

    /**
     * Set receptions
     *
     * @param integer $receptions
     *
     * @return PlayerGame
     */
    public function setReceptions( $receptions )
    {
        $this->receptions = $receptions;

        return $this;
    }

    /**
     * Get receptions
     *
     * @return integer
     */
    public function getReceptions()
    {
        return $this->receptions;
    }

    /**
     * Set receivingYards
     *
     * @param integer $receivingYards
     *
     * @return PlayerGame
     */
    public function setReceivingYards( $receivingYards )
    {
        $this->receivingYards = $receivingYards;

        return $this;
    }

    /**
     * Get receivingYards
     *
     * @return integer
     */
    public function getReceivingYards()
    {
        return $this->receivingYards;
    }

    /**
     * Set receivingYardsPerReception
     *
     * @param string $receivingYardsPerReception
     *
     * @return PlayerGame
     */
    public function setReceivingYardsPerReception( $receivingYardsPerReception )
    {
        $this->receivingYardsPerReception = $receivingYardsPerReception;

        return $this;
    }

    /**
     * Get receivingYardsPerInterception
     *
     * @return string
     */
    public function getReceivingYardsPerReception()
    {
        return $this->receivingYardsPerReception;
    }

    /**
     * Set reciveingTouchdowns
     *
     * @param integer $receivingTouchdowns
     *
     * @return PlayerGame
     */
    public function setReceivingTouchdowns( $receivingTouchdowns )
    {
        $this->receivingTouchdowns = $receivingTouchdowns;

        return $this;
    }

    /**
     * Get reciveingTouchdowns
     *
     * @return integer
     */
    public function getReceivingTouchdowns()
    {
        return $this->receivingTouchdowns;
    }

    /**
     * Set receivingLong
     *
     * @param integer $receivingLong
     *
     * @return PlayerGame
     */
    public function setReceivingLong( $receivingLong )
    {
        $this->receivingLong = $receivingLong;

        return $this;
    }

    /**
     * Get receivingLong
     *
     * @return integer
     */
    public function getReceivingLong()
    {
        return $this->receivingLong;
    }

    /**
     * Set fumbles
     *
     * @param integer $fumbles
     *
     * @return PlayerGame
     */
    public function setFumbles( $fumbles )
    {
        $this->fumbles = $fumbles;

        return $this;
    }

    /**
     * Get fumbles
     *
     * @return integer
     */
    public function getFumbles()
    {
        return $this->fumbles;
    }

    /**
     * Set fumblesLost
     *
     * @param integer $fumblesLost
     *
     * @return PlayerGame
     */
    public function setFumblesLost( $fumblesLost )
    {
        $this->fumblesLost = $fumblesLost;

        return $this;
    }

    /**
     * Get fumblesLost
     *
     * @return integer
     */
    public function getFumblesLost()
    {
        return $this->fumblesLost;
    }

    /**
     * Set puntReturns
     *
     * @param integer $puntReturns
     *
     * @return PlayerGame
     */
    public function setPuntReturns( $puntReturns )
    {
        $this->puntReturns = $puntReturns;

        return $this;
    }

    /**
     * Get puntReturns
     *
     * @return integer
     */
    public function getPuntReturns()
    {
        return $this->puntReturns;
    }

    /**
     * Set puntReturnYards
     *
     * @param integer $puntReturnYards
     *
     * @return PlayerGame
     */
    public function setPuntReturnYards( $puntReturnYards )
    {
        $this->puntReturnYards = $puntReturnYards;

        return $this;
    }

    /**
     * Get puntReturnYards
     *
     * @return integer
     */
    public function getPuntReturnYards()
    {
        return $this->puntReturnYards;
    }

    /**
     * Set puntReturnYardsPerAttempt
     *
     * @param string $puntReturnYardsPerAttempt
     *
     * @return PlayerGame
     */
    public function setPuntReturnYardsPerAttempt( $puntReturnYardsPerAttempt )
    {
        $this->puntReturnYardsPerAttempt = $puntReturnYardsPerAttempt;

        return $this;
    }

    /**
     * Get puntReturnYardsPerAttempt
     *
     * @return string
     */
    public function getPuntReturnYardsPerAttempt()
    {
        return $this->puntReturnYardsPerAttempt;
    }

    /**
     * Set puntReturnTouchdowns
     *
     * @param integer $puntReturnTouchdowns
     *
     * @return PlayerGame
     */
    public function setPuntReturnTouchdowns( $puntReturnTouchdowns )
    {
        $this->puntReturnTouchdowns = $puntReturnTouchdowns;

        return $this;
    }

    /**
     * Get puntReturnTouchdowns
     *
     * @return integer
     */
    public function getPuntReturnTouchdowns()
    {
        return $this->puntReturnTouchdowns;
    }

    /**
     * Set puntReturnLong
     *
     * @param integer $puntReturnLong
     *
     * @return PlayerGame
     */
    public function setPuntReturnLong( $puntReturnLong )
    {
        $this->puntReturnLong = $puntReturnLong;

        return $this;
    }

    /**
     * Get puntReturnLong
     *
     * @return integer
     */
    public function getPuntReturnLong()
    {
        return $this->puntReturnLong;
    }

    /**
     * Set kickReturns
     *
     * @param integer $kickReturns
     *
     * @return PlayerGame
     */
    public function setKickReturns( $kickReturns )
    {
        $this->kickReturns = $kickReturns;

        return $this;
    }

    /**
     * Get kickReturns
     *
     * @return integer
     */
    public function getKickReturns()
    {
        return $this->kickReturns;
    }

    /**
     * Set kickReturnYards
     *
     * @param integer $kickReturnYards
     *
     * @return PlayerGame
     */
    public function setKickReturnYards( $kickReturnYards )
    {
        $this->kickReturnYards = $kickReturnYards;

        return $this;
    }

    /**
     * Get kickReturnYards
     *
     * @return integer
     */
    public function getKickReturnYards()
    {
        return $this->kickReturnYards;
    }

    /**
     * Set kickReturnYardsPerAttempt
     *
     * @param string $kickReturnYardsPerAttempt
     *
     * @return PlayerGame
     */
    public function setKickReturnYardsPerAttempt( $kickReturnYardsPerAttempt )
    {
        $this->kickReturnYardsPerAttempt = $kickReturnYardsPerAttempt;

        return $this;
    }

    /**
     * Get kickReturnYardsPerAttempt
     *
     * @return string
     */
    public function getKickReturnYardsPerAttempt()
    {
        return $this->kickReturnYardsPerAttempt;
    }

    /**
     * Set kickReturnTouchdowns
     *
     * @param integer $kickReturnTouchdowns
     *
     * @return PlayerGame
     */
    public function setKickReturnTouchdowns( $kickReturnTouchdowns )
    {
        $this->kickReturnTouchdowns = $kickReturnTouchdowns;

        return $this;
    }

    /**
     * Get kickReturnTouchdowns
     *
     * @return integer
     */
    public function getKickReturnTouchdowns()
    {
        return $this->kickReturnTouchdowns;
    }

    /**
     * Set kickReturnLong
     *
     * @param integer $kickReturnLong
     *
     * @return PlayerGame
     */
    public function setKickReturnLong( $kickReturnLong )
    {
        $this->kickReturnLong = $kickReturnLong;

        return $this;
    }

    /**
     * Get kickReturnLong
     *
     * @return integer
     */
    public function getKickReturnLong()
    {
        return $this->kickReturnLong;
    }

    /**
     * Set soloTackles
     *
     * @param integer $soloTackles
     *
     * @return PlayerGame
     */
    public function setSoloTackles( $soloTackles )
    {
        $this->soloTackles = $soloTackles;

        return $this;
    }

    /**
     * Get soloTackles
     *
     * @return integer
     */
    public function getSoloTackles()
    {
        return $this->soloTackles;
    }

    /**
     * Set assistedTackles
     *
     * @param integer $assistedTackles
     *
     * @return PlayerGame
     */
    public function setAssistedTackles( $assistedTackles )
    {
        $this->assistedTackles = $assistedTackles;

        return $this;
    }

    /**
     * Get assistedTackles
     *
     * @return integer
     */
    public function getAssistedTackles()
    {
        return $this->assistedTackles;
    }

    /**
     * Set tacklesForLoss
     *
     * @param integer $tacklesForLoss
     *
     * @return PlayerGame
     */
    public function setTacklesForLoss( $tacklesForLoss )
    {
        $this->tacklesForLoss = $tacklesForLoss;

        return $this;
    }

    /**
     * Get tacklesForLoss
     *
     * @return integer
     */
    public function getTacklesForLoss()
    {
        return $this->tacklesForLoss;
    }

    /**
     * Set sacks
     *
     * @param string $sacks
     *
     * @return PlayerGame
     */
    public function setSacks( $sacks )
    {
        $this->sacks = $sacks;

        return $this;
    }

    /**
     * Get sacks
     *
     * @return string
     */
    public function getSacks()
    {
        return $this->sacks;
    }

    /**
     * Set sackYards
     *
     * @param integer $sackYards
     *
     * @return PlayerGame
     */
    public function setSackYards( $sackYards )
    {
        $this->sackYards = $sackYards;

        return $this;
    }

    /**
     * Get sackYards
     *
     * @return integer
     */
    public function getSackYards()
    {
        return $this->sackYards;
    }

    /**
     * Set quarterbackHits
     *
     * @param integer $quarterbackHits
     *
     * @return PlayerGame
     */
    public function setQuarterbackHits( $quarterbackHits )
    {
        $this->quarterbackHits = $quarterbackHits;

        return $this;
    }

    /**
     * Get quarterbackHits
     *
     * @return integer
     */
    public function getQuarterbackHits()
    {
        return $this->quarterbackHits;
    }

    /**
     * Set passesDefended
     *
     * @param integer $passesDefended
     *
     * @return PlayerGame
     */
    public function setPassesDefended( $passesDefended )
    {
        $this->passesDefended = $passesDefended;

        return $this;
    }

    /**
     * Get passesDefended
     *
     * @return integer
     */
    public function getPassesDefended()
    {
        return $this->passesDefended;
    }

    /**
     * Set fumblesForced
     *
     * @param integer $fumblesForced
     *
     * @return PlayerGame
     */
    public function setFumblesForced( $fumblesForced )
    {
        $this->fumblesForced = $fumblesForced;

        return $this;
    }

    /**
     * Get fumblesForced
     *
     * @return integer
     */
    public function getFumblesForced()
    {
        return $this->fumblesForced;
    }

    /**
     * Set fumbleReturnYards
     *
     * @param integer $fumbleReturnYards
     *
     * @return PlayerGame
     */
    public function setFumbleReturnYards( $fumbleReturnYards )
    {
        $this->fumbleReturnYards = $fumbleReturnYards;

        return $this;
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
     * Get fumbleReturnYards
     *
     * @return integer
     */
    public function getFumbleReturnYards()
    {
        return $this->fumbleReturnYards;
    }

    /**
     * Set fumbleReturnTouchdowns
     *
     * @param integer $fumbleReturnTouchdowns
     *
     * @return PlayerGame
     */
    public function setFumbleReturnTouchdowns( $fumbleReturnTouchdowns )
    {
        $this->fumbleReturnTouchdowns = $fumbleReturnTouchdowns;

        return $this;
    }

    /**
     * Get fumbleReturnTouchdowns
     *
     * @return integer
     */
    public function getFumbleReturnTouchdowns()
    {
        return $this->fumbleReturnTouchdowns;
    }

    /**
     * Set interceptions
     *
     * @param integer $interceptions
     *
     * @return PlayerGame
     */
    public function setInterceptions( $interceptions )
    {
        $this->interceptions = $interceptions;

        return $this;
    }

    /**
     * Get interceptions
     *
     * @return integer
     */
    public function getInterceptions()
    {
        return $this->interceptions;
    }

    /**
     * Set interceptionReturnYards
     *
     * @param integer $interceptionReturnYards
     *
     * @return PlayerGame
     */
    public function setInterceptionReturnYards( $interceptionReturnYards )
    {
        $this->interceptionReturnYards = $interceptionReturnYards;

        return $this;
    }

    /**
     * Get interceptionReturnYards
     *
     * @return integer
     */
    public function getInterceptionReturnYards()
    {
        return $this->interceptionReturnYards;
    }

    /**
     * Set interceptionReturnTouchdowns
     *
     * @param integer $interceptionReturnTouchdowns
     *
     * @return PlayerGame
     */
    public function setInterceptionReturnTouchdowns( $interceptionReturnTouchdowns )
    {
        $this->interceptionReturnTouchdowns = $interceptionReturnTouchdowns;

        return $this;
    }

    /**
     * Get interceptionReturnTouchdowns
     *
     * @return integer
     */
    public function getInterceptionReturnTouchdowns()
    {
        return $this->interceptionReturnTouchdowns;
    }

    /**
     * Set blockedKicks
     *
     * @param integer $blockedKicks
     *
     * @return PlayerGame
     */
    public function setBlockedKicks( $blockedKicks )
    {
        $this->blockedKicks = $blockedKicks;

        return $this;
    }

    /**
     * Get blockedKicks
     *
     * @return integer
     */
    public function getBlockedKicks()
    {
        return $this->blockedKicks;
    }

    /**
     * Set specialTeamsSoloTackles
     *
     * @param integer $specialTeamsSoloTackles
     *
     * @return PlayerGame
     */
    public function setSpecialTeamsSoloTackles( $specialTeamsSoloTackles )
    {
        $this->specialTeamsSoloTackles = $specialTeamsSoloTackles;

        return $this;
    }

    /**
     * Get specialTeamsSoloTackles
     *
     * @return integer
     */
    public function getSpecialTeamsSoloTackles()
    {
        return $this->specialTeamsSoloTackles;
    }

    /**
     * Set specialTeamsAssistedTackles
     *
     * @param integer $specialTeamsAssistedTackles
     *
     * @return PlayerGame
     */
    public function setSpecialTeamsAssistedTackles( $specialTeamsAssistedTackles )
    {
        $this->specialTeamsAssistedTackles = $specialTeamsAssistedTackles;

        return $this;
    }

    /**
     * Get specialTeamsAssistedTackles
     *
     * @return integer
     */
    public function getSpecialTeamsAssistedTackles()
    {
        return $this->specialTeamsAssistedTackles;
    }

    /**
     * Set miscSoloTackles
     *
     * @param integer $miscSoloTackles
     *
     * @return PlayerGame
     */
    public function setMiscSoloTackles( $miscSoloTackles )
    {
        $this->miscSoloTackles = $miscSoloTackles;

        return $this;
    }

    /**
     * Get miscSoloTackles
     *
     * @return integer
     */
    public function getMiscSoloTackles()
    {
        return $this->miscSoloTackles;
    }

    /**
     * Set miscAssistedTackles
     *
     * @param integer $miscAssistedTackles
     *
     * @return PlayerGame
     */
    public function setMiscAssistedTackles( $miscAssistedTackles )
    {
        $this->miscAssistedTackles = $miscAssistedTackles;

        return $this;
    }

    /**
     * Get miscAssistedTackles
     *
     * @return integer
     */
    public function getMiscAssistedTackles()
    {
        return $this->miscAssistedTackles;
    }

    /**
     * Set punts
     *
     * @param integer $punts
     *
     * @return PlayerGame
     */
    public function setPunts( $punts )
    {
        $this->punts = $punts;

        return $this;
    }

    /**
     * Get punts
     *
     * @return integer
     */
    public function getPunts()
    {
        return $this->punts;
    }

    /**
     * Set puntYards
     *
     * @param integer $puntYards
     *
     * @return PlayerGame
     */
    public function setPuntYards( $puntYards )
    {
        $this->puntYards = $puntYards;

        return $this;
    }

    /**
     * Get puntYards
     *
     * @return integer
     */
    public function getPuntYards()
    {
        return $this->puntYards;
    }

    /**
     * Set puntAverage
     *
     * @param string $puntAverage
     *
     * @return PlayerGame
     */
    public function setPuntAverage( $puntAverage )
    {
        $this->puntAverage = $puntAverage;

        return $this;
    }

    /**
     * Get puntAverage
     *
     * @return string
     */
    public function getPuntAverage()
    {
        return $this->puntAverage;
    }

    /**
     * Set fieldGoalsAttempted
     *
     * @param integer $fieldGoalsAttempted
     *
     * @return PlayerGame
     */
    public function setFieldGoalsAttempted( $fieldGoalsAttempted )
    {
        $this->fieldGoalsAttempted = $fieldGoalsAttempted;

        return $this;
    }

    /**
     * Get fieldGoalsAttempted
     *
     * @return integer
     */
    public function getFieldGoalsAttempted()
    {
        return $this->fieldGoalsAttempted;
    }

    /**
     * Set fieldGoalsMade
     *
     * @param integer $fieldGoalsMade
     *
     * @return PlayerGame
     */
    public function setFieldGoalsMade( $fieldGoalsMade )
    {
        $this->fieldGoalsMade = $fieldGoalsMade;

        return $this;
    }

    /**
     * Get fieldGoalsMade
     *
     * @return integer
     */
    public function getFieldGoalsMade()
    {
        return $this->fieldGoalsMade;
    }

    /**
     * Set fieldGoalsLongestMade
     *
     * @param integer $fieldGoalsLongestMade
     *
     * @return PlayerGame
     */
    public function setFieldGoalsLongestMade( $fieldGoalsLongestMade )
    {
        $this->fieldGoalsLongestMade = $fieldGoalsLongestMade;

        return $this;
    }

    /**
     * Get fieldGoalsLongestMade
     *
     * @return integer
     */
    public function getFieldGoalsLongestMade()
    {
        return $this->fieldGoalsLongestMade;
    }

    /**
     * Set extraPointsMade
     *
     * @param integer $extraPointsMade
     *
     * @return PlayerGame
     */
    public function setExtraPointsMade( $extraPointsMade )
    {
        $this->extraPointsMade = $extraPointsMade;

        return $this;
    }

    /**
     * Get extraPointsMade
     *
     * @return integer
     */
    public function getExtraPointsMade()
    {
        return $this->extraPointsMade;
    }

    /**
     * Set twoPointConversionPasses
     *
     * @param integer $twoPointConversionPasses
     *
     * @return PlayerGame
     */
    public function setTwoPointConversionPasses( $twoPointConversionPasses )
    {
        $this->twoPointConversionPasses = $twoPointConversionPasses;

        return $this;
    }

    /**
     * Get twoPointConversionPasses
     *
     * @return integer
     */
    public function getTwoPointConversionPasses()
    {
        return $this->twoPointConversionPasses;
    }

    /**
     * Set twoPointConversionRuns
     *
     * @param integer $twoPointConversionRuns
     *
     * @return PlayerGame
     */
    public function setTwoPointConversionRuns( $twoPointConversionRuns )
    {
        $this->twoPointConversionRuns = $twoPointConversionRuns;

        return $this;
    }

    /**
     * Get twoPointConversionRuns
     *
     * @return integer
     */
    public function getTwoPointConversionRuns()
    {
        return $this->twoPointConversionRuns;
    }

    /**
     * Set twoPointConversionReceptions
     *
     * @param integer $twoPointConversionReceptions
     *
     * @return PlayerGame
     */
    public function setTwoPointConversionReceptions( $twoPointConversionReceptions )
    {
        $this->twoPointConversionReceptions = $twoPointConversionReceptions;

        return $this;
    }

    /**
     * Get twoPointConversionReceptions
     *
     * @return integer
     */
    public function getTwoPointConversionReceptions()
    {
        return $this->twoPointConversionReceptions;
    }

    /**
     * Set fantasyPoints
     *
     * @param string $fantasyPoints
     *
     * @return PlayerGame
     */
    public function setFantasyPoints( $fantasyPoints )
    {
        $this->fantasyPoints = $fantasyPoints;

        return $this;
    }

    /**
     * Get fantasyPoints
     *
     * @return string
     */
    public function getFantasyPoints()
    {
        return $this->fantasyPoints;
    }

    /**
     * Set fantasyPointsPPR
     *
     * @param string $fantasyPointsPPR
     *
     * @return PlayerGame
     */
    public function setFantasyPointsPPR( $fantasyPointsPPR )
    {
        $this->fantasyPointsPPR = $fantasyPointsPPR;

        return $this;
    }

    /**
     * Get fantasyPointsPPR
     *
     * @return string
     */
    public function getFantasyPointsPPR()
    {
        return $this->fantasyPointsPPR;
    }

    /**
     * @return string
     */
    public function getCustomD365FantasyPoints()
    {
        return $this->customD365FantasyPoints;
    }

    /**
     * @param string $customD365FantasyPoints
     */
    public function setCustomD365FantasyPoints( $customD365FantasyPoints )
    {
        $this->customD365FantasyPoints = $customD365FantasyPoints;
    }

    /**
     * Set receptionPercentage
     *
     * @param string $receptionPercentage
     *
     * @return PlayerGame
     */
    public function setReceptionPercentage( $receptionPercentage )
    {
        $this->receptionPercentage = $receptionPercentage;

        return $this;
    }

    /**
     * Get receptionPercentage
     *
     * @return string
     */
    public function getReceptionPercentage()
    {
        return $this->receptionPercentage;
    }

    /**
     * Set receivingYardsPerTarget
     *
     * @param string $receivingYardsPerTarget
     *
     * @return PlayerGame
     */
    public function setReceivingYardsPerTarget( $receivingYardsPerTarget )
    {
        $this->receivingYardsPerTarget = $receivingYardsPerTarget;

        return $this;
    }

    /**
     * Get receivingYardsPerTarget
     *
     * @return string
     */
    public function getReceivingYardsPerTarget()
    {
        return $this->receivingYardsPerTarget;
    }

    /**
     * Set tackles
     *
     * @param integer $tackles
     *
     * @return PlayerGame
     */
    public function setTackles( $tackles )
    {
        $this->tackles = $tackles;

        return $this;
    }

    /**
     * Get tackles
     *
     * @return integer
     */
    public function getTackles()
    {
        return $this->tackles;
    }

    /**
     * Set offensiveTouchdowns
     *
     * @param integer $offensiveTouchdowns
     *
     * @return PlayerGame
     */
    public function setOffensiveTouchdowns( $offensiveTouchdowns )
    {
        $this->offensiveTouchdowns = $offensiveTouchdowns;

        return $this;
    }

    /**
     * Get offensiveTouchdowns
     *
     * @return integer
     */
    public function getOffensiveTouchdowns()
    {
        return $this->offensiveTouchdowns;
    }

    /**
     * Set defensiveTouchdowns
     *
     * @param integer $defensiveTouchdowns
     *
     * @return PlayerGame
     */
    public function setDefensiveTouchdowns( $defensiveTouchdowns )
    {
        $this->defensiveTouchdowns = $defensiveTouchdowns;

        return $this;
    }

    /**
     * Get defensiveTouchdowns
     *
     * @return integer
     */
    public function getDefensiveTouchdowns()
    {
        return $this->defensiveTouchdowns;
    }

    /**
     * Set specialTeamsTouchdowns
     *
     * @param integer $specialTeamsTouchdowns
     *
     * @return PlayerGame
     */
    public function setSpecialTeamsTouchdowns( $specialTeamsTouchdowns )
    {
        $this->specialTeamsTouchdowns = $specialTeamsTouchdowns;

        return $this;
    }

    /**
     * Get specialTeamsTouchdowns
     *
     * @return integer
     */
    public function getSpecialTeamsTouchdowns()
    {
        return $this->specialTeamsTouchdowns;
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
     * Set fantasyPosition
     *
     * @param string $fantasyPosition
     *
     * @return PlayerGame
     */
    public function setFantasyPosition( $fantasyPosition )
    {
        $this->fantasyPosition = $fantasyPosition;

        return $this;
    }

    /**
     * Get fantasyPosition
     *
     * @return string
     */
    public function getFantasyPosition()
    {
        return $this->fantasyPosition;
    }

    /**
     * Set fieldGoalPercentage
     *
     * @param string $fieldGoalPercentage
     *
     * @return PlayerGame
     */
    public function setFieldGoalPercentage( $fieldGoalPercentage )
    {
        $this->fieldGoalPercentage = $fieldGoalPercentage;

        return $this;
    }

    /**
     * Get fieldGoalPercentage
     *
     * @return string
     */
    public function getFieldGoalPercentage()
    {
        return $this->fieldGoalPercentage;
    }

    /**
     * Set fumblesOwnRecoveries
     *
     * @param integer $fumblesOwnRecoveries
     *
     * @return PlayerGame
     */
    public function setFumblesOwnRecoveries( $fumblesOwnRecoveries )
    {
        $this->fumblesOwnRecoveries = $fumblesOwnRecoveries;

        return $this;
    }

    /**
     * Get fumblesOwnRecoveries
     *
     * @return integer
     */
    public function getFumblesOwnRecoveries()
    {
        return $this->fumblesOwnRecoveries;
    }

    /**
     * Set fumblesOutOfBounds
     *
     * @param integer $fumblesOutOfBounds
     *
     * @return PlayerGame
     */
    public function setFumblesOutOfBounds( $fumblesOutOfBounds )
    {
        $this->fumblesOutOfBounds = $fumblesOutOfBounds;

        return $this;
    }

    /**
     * Get fumblesOutOfBounds
     *
     * @return integer
     */
    public function getFumblesOutOfBounds()
    {
        return $this->fumblesOutOfBounds;
    }

    /**
     * Set kickReturnFairCatches
     *
     * @param integer $kickReturnFairCatches
     *
     * @return PlayerGame
     */
    public function setKickReturnFairCatches( $kickReturnFairCatches )
    {
        $this->kickReturnFairCatches = $kickReturnFairCatches;

        return $this;
    }

    /**
     * Get kickReturnFairCatches
     *
     * @return integer
     */
    public function getKickReturnFairCatches()
    {
        return $this->kickReturnFairCatches;
    }

    /**
     * Set puntReturnFairCatches
     *
     * @param integer $puntReturnFairCatches
     *
     * @return PlayerGame
     */
    public function setPuntReturnFairCatches( $puntReturnFairCatches )
    {
        $this->puntReturnFairCatches = $puntReturnFairCatches;

        return $this;
    }

    /**
     * Get puntReturnFairCatches
     *
     * @return integer
     */
    public function getPuntReturnFairCatches()
    {
        return $this->puntReturnFairCatches;
    }

    /**
     * Set puntTouchbacks
     *
     * @param integer $puntTouchbacks
     *
     * @return PlayerGame
     */
    public function setPuntTouchbacks( $puntTouchbacks )
    {
        $this->puntTouchbacks = $puntTouchbacks;

        return $this;
    }

    /**
     * Get puntTouchbacks
     *
     * @return integer
     */
    public function getPuntTouchbacks()
    {
        return $this->puntTouchbacks;
    }

    /**
     * Set puntInside20
     *
     * @param integer $puntInside20
     *
     * @return PlayerGame
     */
    public function setPuntInside20( $puntInside20 )
    {
        $this->puntInside20 = $puntInside20;

        return $this;
    }

    /**
     * Get puntInside20
     *
     * @return integer
     */
    public function getPuntInside20()
    {
        return $this->puntInside20;
    }

    /**
     * Set puntNetAverage
     *
     * @param string $puntNetAverage
     *
     * @return PlayerGame
     */
    public function setPuntNetAverage( $puntNetAverage )
    {
        $this->puntNetAverage = $puntNetAverage;

        return $this;
    }

    /**
     * Get puntNetAverage
     *
     * @return string
     */
    public function getPuntNetAverage()
    {
        return $this->puntNetAverage;
    }

    /**
     * Set extraPointsAttempted
     *
     * @param integer $extraPointsAttempted
     *
     * @return PlayerGame
     */
    public function setExtraPointsAttempted( $extraPointsAttempted )
    {
        $this->extraPointsAttempted = $extraPointsAttempted;

        return $this;
    }

    /**
     * Get extraPointsAttempted
     *
     * @return integer
     */
    public function getExtraPointsAttempted()
    {
        return $this->extraPointsAttempted;
    }

    /**
     * Set blockedKickReturnTouchdowns
     *
     * @param integer $blockedKickReturnTouchdowns
     *
     * @return PlayerGame
     */
    public function setBlockedKickReturnTouchdowns( $blockedKickReturnTouchdowns )
    {
        $this->blockedKickReturnTouchdowns = $blockedKickReturnTouchdowns;

        return $this;
    }

    /**
     * Get blockedKickReturnTouchdowns
     *
     * @return integer
     */
    public function getBlockedKickReturnTouchdowns()
    {
        return $this->blockedKickReturnTouchdowns;
    }

    /**
     * Set fieldGoalReturnTouchdowns
     *
     * @param integer $fieldGoalReturnTouchdowns
     *
     * @return PlayerGame
     */
    public function setFieldGoalReturnTouchdowns( $fieldGoalReturnTouchdowns )
    {
        $this->fieldGoalReturnTouchdowns = $fieldGoalReturnTouchdowns;

        return $this;
    }

    /**
     * Get fieldGoalReturnTouchdowns
     *
     * @return integer
     */
    public function getFieldGoalReturnTouchdowns()
    {
        return $this->fieldGoalReturnTouchdowns;
    }

    /**
     * Set safeties
     *
     * @param integer $safeties
     *
     * @return PlayerGame
     */
    public function setSafeties( $safeties )
    {
        $this->safeties = $safeties;

        return $this;
    }

    /**
     * Get safeties
     *
     * @return integer
     */
    public function getSafeties()
    {
        return $this->safeties;
    }

    /**
     * Set fieldGoalsHadBlocked
     *
     * @param integer $fieldGoalsHadBlocked
     *
     * @return PlayerGame
     */
    public function setFieldGoalsHadBlocked( $fieldGoalsHadBlocked )
    {
        $this->fieldGoalsHadBlocked = $fieldGoalsHadBlocked;

        return $this;
    }

    /**
     * Get fieldGoalsHadBlocked
     *
     * @return integer
     */
    public function getFieldGoalsHadBlocked()
    {
        return $this->fieldGoalsHadBlocked;
    }

    /**
     * Set puntsHadBlocked
     *
     * @param integer $puntsHadBlocked
     *
     * @return PlayerGame
     */
    public function setPuntsHadBlocked( $puntsHadBlocked )
    {
        $this->puntsHadBlocked = $puntsHadBlocked;

        return $this;
    }

    /**
     * Get puntsHadBlocked
     *
     * @return integer
     */
    public function getPuntsHadBlocked()
    {
        return $this->puntsHadBlocked;
    }

    /**
     * Set extraPointsHadBlocked
     *
     * @param integer $extraPointsHadBlocked
     *
     * @return PlayerGame
     */
    public function setExtraPointsHadBlocked( $extraPointsHadBlocked )
    {
        $this->extraPointsHadBlocked = $extraPointsHadBlocked;

        return $this;
    }

    /**
     * Get extraPointsHadBlocked
     *
     * @return integer
     */
    public function getExtraPointsHadBlocked()
    {
        return $this->extraPointsHadBlocked;
    }

    /**
     * Set puntLong
     *
     * @param integer $puntLong
     *
     * @return PlayerGame
     */
    public function setPuntLong( $puntLong )
    {
        $this->puntLong = $puntLong;

        return $this;
    }

    /**
     * Get puntLong
     *
     * @return integer
     */
    public function getPuntLong()
    {
        return $this->puntLong;
    }

    /**
     * Set blockedKickReturnYards
     *
     * @param integer $blockedKickReturnYards
     *
     * @return PlayerGame
     */
    public function setBlockedKickReturnYards( $blockedKickReturnYards )
    {
        $this->blockedKickReturnYards = $blockedKickReturnYards;

        return $this;
    }

    /**
     * Get blockedKickReturnYards
     *
     * @return integer
     */
    public function getBlockedKickReturnYards()
    {
        return $this->blockedKickReturnYards;
    }

    /**
     * Set fieldGoalReturnYards
     *
     * @param integer $fieldGoalReturnYards
     *
     * @return PlayerGame
     */
    public function setFieldGoalReturnYards( $fieldGoalReturnYards )
    {
        $this->fieldGoalReturnYards = $fieldGoalReturnYards;

        return $this;
    }

    /**
     * Get fieldGoalReturnYards
     *
     * @return integer
     */
    public function getFieldGoalReturnYards()
    {
        return $this->fieldGoalReturnYards;
    }

    /**
     * Set puntNetYards
     *
     * @param integer $puntNetYards
     *
     * @return PlayerGame
     */
    public function setPuntNetYards( $puntNetYards )
    {
        $this->puntNetYards = $puntNetYards;

        return $this;
    }

    /**
     * Get puntNetYards
     *
     * @return integer
     */
    public function getPuntNetYards()
    {
        return $this->puntNetYards;
    }

    /**
     * Set specialTeamsFumblesForced
     *
     * @param integer $specialTeamsFumblesForced
     *
     * @return PlayerGame
     */
    public function setSpecialTeamsFumblesForced( $specialTeamsFumblesForced )
    {
        $this->specialTeamsFumblesForced = $specialTeamsFumblesForced;

        return $this;
    }

    /**
     * Get specialTeamsFumblesForced
     *
     * @return integer
     */
    public function getSpecialTeamsFumblesForced()
    {
        return $this->specialTeamsFumblesForced;
    }

    /**
     * Set specialTeamsFumblesRecovered
     *
     * @param integer $specialTeamsFumblesRecovered
     *
     * @return PlayerGame
     */
    public function setSpecialTeamsFumblesRecovered( $specialTeamsFumblesRecovered )
    {
        $this->specialTeamsFumblesRecovered = $specialTeamsFumblesRecovered;

        return $this;
    }

    /**
     * Get specialTeamsFumblesRecovered
     *
     * @return integer
     */
    public function getSpecialTeamsFumblesRecovered()
    {
        return $this->specialTeamsFumblesRecovered;
    }

    /**
     * Set miscFumblesForced
     *
     * @param integer $miscFumblesForced
     *
     * @return PlayerGame
     */
    public function setMiscFumblesForced( $miscFumblesForced )
    {
        $this->miscFumblesForced = $miscFumblesForced;

        return $this;
    }

    /**
     * Get miscFumblesForced
     *
     * @return integer
     */
    public function getMiscFumblesForced()
    {
        return $this->miscFumblesForced;
    }

    /**
     * Set miscFumblesRecovered
     *
     * @param integer $miscFumblesRecovered
     *
     * @return PlayerGame
     */
    public function setMiscFumblesRecovered( $miscFumblesRecovered )
    {
        $this->miscFumblesRecovered = $miscFumblesRecovered;

        return $this;
    }

    /**
     * Get miscFumblesRecovered
     *
     * @return integer
     */
    public function getMiscFumblesRecovered()
    {
        return $this->miscFumblesRecovered;
    }

    /**
     * Set shortName
     *
     * @param string $shortName
     *
     * @return PlayerGame
     */
    public function setShortName( $shortName )
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * Get shortName
     *
     * @return string
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Set playingSurface
     *
     * @param string $playingSurface
     *
     * @return PlayerGame
     */
    public function setPlayingSurface( $playingSurface )
    {
        $this->playingSurface = $playingSurface;

        return $this;
    }

    /**
     * Get playingSurface
     *
     * @return string
     */
    public function getPlayingSurface()
    {
        return $this->playingSurface;
    }

    /**
     * Set isGameOver
     *
     * @param boolean $isGameOver
     *
     * @return PlayerGame
     */
    public function setIsGameOver( $isGameOver )
    {
        $this->isGameOver = $isGameOver;

        return $this;
    }

    /**
     * Get isGameOver
     *
     * @return boolean
     */
    public function getIsGameOver()
    {
        return $this->isGameOver;
    }

    /**
     * Set safetiesAllowed
     *
     * @param integer $safetiesAllowed
     *
     * @return PlayerGame
     */
    public function setSafetiesAllowed( $safetiesAllowed )
    {
        $this->safetiesAllowed = $safetiesAllowed;

        return $this;
    }

    /**
     * Get safetiesAllowed
     *
     * @return integer
     */
    public function getSafetiesAllowed()
    {
        return $this->safetiesAllowed;
    }

    /**
     * Set stadium
     *
     * @param string $stadium
     *
     * @return PlayerGame
     */
    public function setStadium( $stadium )
    {
        $this->stadium = $stadium;

        return $this;
    }

    /**
     * Get stadium
     *
     * @return string
     */
    public function getStadium()
    {
        return $this->stadium;
    }

    /**
     * Set temperature
     *
     * @param integer $temperature
     *
     * @return PlayerGame
     */
    public function setTemperature( $temperature )
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get temperature
     *
     * @return integer
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Set humidity
     *
     * @param integer $humidity
     *
     * @return PlayerGame
     */
    public function setHumidity( $humidity )
    {
        $this->humidity = $humidity;

        return $this;
    }

    /**
     * Get humidity
     *
     * @return integer
     */
    public function getHumidity()
    {
        return $this->humidity;
    }

    /**
     * Set windSpeed
     *
     * @param integer $windSpeed
     *
     * @return PlayerGame
     */
    public function setWindSpeed( $windSpeed )
    {
        $this->windSpeed = $windSpeed;

        return $this;
    }

    /**
     * Get windSpeed
     *
     * @return integer
     */
    public function getWindSpeed()
    {
        return $this->windSpeed;
    }

    /**
     * Set fanDuelSalary
     *
     * @param integer $fanDuelSalary
     *
     * @return PlayerGame
     */
    public function setFanDuelSalary( $fanDuelSalary )
    {
        $this->fanDuelSalary = $fanDuelSalary;

        return $this;
    }

    /**
     * Get fanDuelSalary
     *
     * @return integer
     */
    public function getFanDuelSalary()
    {
        return $this->fanDuelSalary;
    }

    /**
     * Set draftKingsSalary
     *
     * @param integer $draftKingsSalary
     *
     * @return PlayerGame
     */
    public function setDraftKingsSalary( $draftKingsSalary )
    {
        $this->draftKingsSalary = $draftKingsSalary;

        return $this;
    }

    /**
     * Get draftKingsSalary
     *
     * @return integer
     */
    public function getDraftKingsSalary()
    {
        return $this->draftKingsSalary;
    }

    /**
     * Set fantasyDataSalary
     *
     * @param integer $fantasyDataSalary
     *
     * @return PlayerGame
     */
    public function setFantasyDataSalary( $fantasyDataSalary )
    {
        $this->fantasyDataSalary = $fantasyDataSalary;

        return $this;
    }

    /**
     * Get fantasyDataSalary
     *
     * @return integer
     */
    public function getFantasyDataSalary()
    {
        return $this->fantasyDataSalary;
    }

    /**
     * Set offensiveSnapsPlayed
     *
     * @param integer $offensiveSnapsPlayed
     *
     * @return PlayerGame
     */
    public function setOffensiveSnapsPlayed( $offensiveSnapsPlayed )
    {
        $this->offensiveSnapsPlayed = $offensiveSnapsPlayed;

        return $this;
    }

    /**
     * Get offensiveSnapsPlayed
     *
     * @return integer
     */
    public function getOffensiveSnapsPlayed()
    {
        return $this->offensiveSnapsPlayed;
    }

    /**
     * Set defensiveSnapsPlayed
     *
     * @param integer $defensiveSnapsPlayed
     *
     * @return PlayerGame
     */
    public function setDefensiveSnapsPlayed( $defensiveSnapsPlayed )
    {
        $this->defensiveSnapsPlayed = $defensiveSnapsPlayed;

        return $this;
    }

    /**
     * Get defensiveSnapsPlayed
     *
     * @return integer
     */
    public function getDefensiveSnapsPlayed()
    {
        return $this->defensiveSnapsPlayed;
    }

    /**
     * Set specialTeamsSnapsPlayed
     *
     * @param integer $specialTeamsSnapsPlayed
     *
     * @return PlayerGame
     */
    public function setSpecialTeamsSnapsPlayed( $specialTeamsSnapsPlayed )
    {
        $this->specialTeamsSnapsPlayed = $specialTeamsSnapsPlayed;

        return $this;
    }

    /**
     * Get specialTeamsSnapsPlayed
     *
     * @return integer
     */
    public function getSpecialTeamsSnapsPlayed()
    {
        return $this->specialTeamsSnapsPlayed;
    }

    /**
     * Set offensiveTeamSnaps
     *
     * @param integer $offensiveTeamSnaps
     *
     * @return PlayerGame
     */
    public function setOffensiveTeamSnaps( $offensiveTeamSnaps )
    {
        $this->offensiveTeamSnaps = $offensiveTeamSnaps;

        return $this;
    }

    /**
     * Get offensiveTeamSnaps
     *
     * @return integer
     */
    public function getOffensiveTeamSnaps()
    {
        return $this->offensiveTeamSnaps;
    }

    /**
     * Set defensiveTeamSnaps
     *
     * @param integer $defensiveTeamSnaps
     *
     * @return PlayerGame
     */
    public function setDefensiveTeamSnaps( $defensiveTeamSnaps )
    {
        $this->defensiveTeamSnaps = $defensiveTeamSnaps;

        return $this;
    }

    /**
     * Get defensiveTeamSnaps
     *
     * @return integer
     */
    public function getDefensiveTeamSnaps()
    {
        return $this->defensiveTeamSnaps;
    }

    /**
     * Get specialTeamsTeamSnaps
     * @return integer
     */
    public function getSpecialTeamsTeamSnaps()
    {
        return $this->specialTeamsTeamSnaps;
    }

    /**
     * Set specialTeamsTeamSnaps
     *
     * @param integer $specialTeamsTeamSnaps
     */
    public function setSpecialTeamsTeamSnaps( $specialTeamsTeamSnaps )
    {
        $this->specialTeamsTeamSnaps = $specialTeamsTeamSnaps;
    }

    /**
     * @return \DateTime
     */
    public function getGameDate()
    {
        return $this->gameDate;
    }

    /**
     * @param \DateTime $gameDate
     */
    public function setGameDate( $gameDate )
    {
        $this->gameDate = $gameDate;
    }
}

