<?php

namespace FantasyPro\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerSeasonProjected
 *
 * @ORM\Table(name="fd_playerSeasonProjected")
 * @ORM\Entity(repositoryClass="FantasyPro\DataBundle\Entity\PlayerSeasonProjectedRepository")
 */
class PlayerSeasonProjected
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
     * @ORM\Column(type="string", unique=true, length=20, nullable=false, name="playerSeasonID")
     */
    private $playerSeasonID;

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
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, name="season")
     */
    private $season;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="team")
     */
    private $team;

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
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="safetiesAllowed")
     */
    private $safetiesAllowed;

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
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="specialTeamsTeamSnaps")
     */
    private $specialTeamsTeamSnaps;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="auctionValue")
     */
    private $auctionValue;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="auctionValuePPR")
     */
    private $auctionValuePPR;

    /**
     * 
     */
    private $player;

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
    public function getPlayerSeasonID()
    {
        return $this->playerSeasonID;
    }

    /**
     * @param string $playerSeasonID
     */
    public function setPlayerSeasonID( $playerSeasonID )
    {
        $this->playerSeasonID = $playerSeasonID;
    }

    /**
     * @return int
     */
    public function getPlayerID()
    {
        return $this->playerID;
    }

    /**
     * @param int $playerID
     */
    public function setPlayerID( $playerID )
    {
        $this->playerID = $playerID;
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
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName( $name )
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param string $position
     */
    public function setPosition( $position )
    {
        $this->position = $position;
    }

    /**
     * @return string
     */
    public function getPositionCategory()
    {
        return $this->positionCategory;
    }

    /**
     * @param string $positionCategory
     */
    public function setPositionCategory( $positionCategory )
    {
        $this->positionCategory = $positionCategory;
    }

    /**
     * @return int
     */
    public function getActivated()
    {
        return $this->activated;
    }

    /**
     * @param int $activated
     */
    public function setActivated( $activated )
    {
        $this->activated = $activated;
    }

    /**
     * @return int
     */
    public function getPlayed()
    {
        return $this->played;
    }

    /**
     * @param int $played
     */
    public function setPlayed( $played )
    {
        $this->played = $played;
    }

    /**
     * @return int
     */
    public function getStarted()
    {
        return $this->started;
    }

    /**
     * @param int $started
     */
    public function setStarted( $started )
    {
        $this->started = $started;
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
     * @return string
     */
    public function getPassingCompletionPercentage()
    {
        return $this->passingCompletionPercentage;
    }

    /**
     * @param string $passingCompletionPercentage
     */
    public function setPassingCompletionPercentage( $passingCompletionPercentage )
    {
        $this->passingCompletionPercentage = $passingCompletionPercentage;
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
    public function getPassingRating()
    {
        return $this->passingRating;
    }

    /**
     * @param string $passingRating
     */
    public function setPassingRating( $passingRating )
    {
        $this->passingRating = $passingRating;
    }

    /**
     * @return int
     */
    public function getPassingLong()
    {
        return $this->passingLong;
    }

    /**
     * @param int $passingLong
     */
    public function setPassingLong( $passingLong )
    {
        $this->passingLong = $passingLong;
    }

    /**
     * @return int
     */
    public function getPassingSacks()
    {
        return $this->passingSacks;
    }

    /**
     * @param int $passingSacks
     */
    public function setPassingSacks( $passingSacks )
    {
        $this->passingSacks = $passingSacks;
    }

    /**
     * @return int
     */
    public function getPassingSackYards()
    {
        return $this->passingSackYards;
    }

    /**
     * @param int $passingSackYards
     */
    public function setPassingSackYards( $passingSackYards )
    {
        $this->passingSackYards = $passingSackYards;
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
    public function getRushingLong()
    {
        return $this->rushingLong;
    }

    /**
     * @param int $rushingLong
     */
    public function setRushingLong( $rushingLong )
    {
        $this->rushingLong = $rushingLong;
    }

    /**
     * @return int
     */
    public function getReceivingTargets()
    {
        return $this->receivingTargets;
    }

    /**
     * @param int $receivingTargets
     */
    public function setReceivingTargets( $receivingTargets )
    {
        $this->receivingTargets = $receivingTargets;
    }

    /**
     * @return int
     */
    public function getReceptions()
    {
        return $this->receptions;
    }

    /**
     * @param int $receptions
     */
    public function setReceptions( $receptions )
    {
        $this->receptions = $receptions;
    }

    /**
     * @return int
     */
    public function getReceivingYards()
    {
        return $this->receivingYards;
    }

    /**
     * @param int $receivingYards
     */
    public function setReceivingYards( $receivingYards )
    {
        $this->receivingYards = $receivingYards;
    }

    /**
     * @return string
     */
    public function getReceivingYardsPerReception()
    {
        return $this->receivingYardsPerReception;
    }

    /**
     * @param string $receivingYardsPerReception
     */
    public function setReceivingYardsPerReception( $receivingYardsPerReception )
    {
        $this->receivingYardsPerReception = $receivingYardsPerReception;
    }

    /**
     * @return int
     */
    public function getReceivingTouchdowns()
    {
        return $this->receivingTouchdowns;
    }

    /**
     * @param int $receivingTouchdowns
     */
    public function setReceivingTouchdowns( $receivingTouchdowns )
    {
        $this->receivingTouchdowns = $receivingTouchdowns;
    }

    /**
     * @return int
     */
    public function getReceivingLong()
    {
        return $this->receivingLong;
    }

    /**
     * @param int $receivingLong
     */
    public function setReceivingLong( $receivingLong )
    {
        $this->receivingLong = $receivingLong;
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
     * @return string
     */
    public function getPuntReturnYardsPerAttempt()
    {
        return $this->puntReturnYardsPerAttempt;
    }

    /**
     * @param string $puntReturnYardsPerAttempt
     */
    public function setPuntReturnYardsPerAttempt( $puntReturnYardsPerAttempt )
    {
        $this->puntReturnYardsPerAttempt = $puntReturnYardsPerAttempt;
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
     * @return string
     */
    public function getKickReturnYardsPerAttempt()
    {
        return $this->kickReturnYardsPerAttempt;
    }

    /**
     * @param string $kickReturnYardsPerAttempt
     */
    public function setKickReturnYardsPerAttempt( $kickReturnYardsPerAttempt )
    {
        $this->kickReturnYardsPerAttempt = $kickReturnYardsPerAttempt;
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
    public function getTacklesForLoss()
    {
        return $this->tacklesForLoss;
    }

    /**
     * @param int $tacklesForLoss
     */
    public function setTacklesForLoss( $tacklesForLoss )
    {
        $this->tacklesForLoss = $tacklesForLoss;
    }

    /**
     * @return string
     */
    public function getSacks()
    {
        return $this->sacks;
    }

    /**
     * @param string $sacks
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
    public function getFumbleReturnTouchdowns()
    {
        return $this->fumbleReturnTouchdowns;
    }

    /**
     * @param int $fumbleReturnTouchdowns
     */
    public function setFumbleReturnTouchdowns( $fumbleReturnTouchdowns )
    {
        $this->fumbleReturnTouchdowns = $fumbleReturnTouchdowns;
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
    public function getInterceptions()
    {
        return $this->interceptions;
    }

    /**
     * @param int $interceptions
     */
    public function setInterceptions( $interceptions )
    {
        $this->interceptions = $interceptions;
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
    public function getInterceptionReturnTouchdowns()
    {
        return $this->interceptionReturnTouchdowns;
    }

    /**
     * @param int $interceptionReturnTouchdowns
     */
    public function setInterceptionReturnTouchdowns( $interceptionReturnTouchdowns )
    {
        $this->interceptionReturnTouchdowns = $interceptionReturnTouchdowns;
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
    public function getSpecialTeamsSoloTackles()
    {
        return $this->specialTeamsSoloTackles;
    }

    /**
     * @param int $specialTeamsSoloTackles
     */
    public function setSpecialTeamsSoloTackles( $specialTeamsSoloTackles )
    {
        $this->specialTeamsSoloTackles = $specialTeamsSoloTackles;
    }

    /**
     * @return int
     */
    public function getSpecialTeamsAssistedTackles()
    {
        return $this->specialTeamsAssistedTackles;
    }

    /**
     * @param int $specialTeamsAssistedTackles
     */
    public function setSpecialTeamsAssistedTackles( $specialTeamsAssistedTackles )
    {
        $this->specialTeamsAssistedTackles = $specialTeamsAssistedTackles;
    }

    /**
     * @return int
     */
    public function getMiscSoloTackles()
    {
        return $this->miscSoloTackles;
    }

    /**
     * @param int $miscSoloTackles
     */
    public function setMiscSoloTackles( $miscSoloTackles )
    {
        $this->miscSoloTackles = $miscSoloTackles;
    }

    /**
     * @return int
     */
    public function getMiscAssistedTackles()
    {
        return $this->miscAssistedTackles;
    }

    /**
     * @param int $miscAssistedTackles
     */
    public function setMiscAssistedTackles( $miscAssistedTackles )
    {
        $this->miscAssistedTackles = $miscAssistedTackles;
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
    public function getFieldGoalsAttempted()
    {
        return $this->fieldGoalsAttempted;
    }

    /**
     * @param int $fieldGoalsAttempted
     */
    public function setFieldGoalsAttempted( $fieldGoalsAttempted )
    {
        $this->fieldGoalsAttempted = $fieldGoalsAttempted;
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
    public function getFieldGoalsLongestMade()
    {
        return $this->fieldGoalsLongestMade;
    }

    /**
     * @param int $fieldGoalsLongestMade
     */
    public function setFieldGoalsLongestMade( $fieldGoalsLongestMade )
    {
        $this->fieldGoalsLongestMade = $fieldGoalsLongestMade;
    }

    /**
     * @return int
     */
    public function getExtraPointsMade()
    {
        return $this->extraPointsMade;
    }

    /**
     * @param int $extraPointsMade
     */
    public function setExtraPointsMade( $extraPointsMade )
    {
        $this->extraPointsMade = $extraPointsMade;
    }

    /**
     * @return int
     */
    public function getTwoPointConversionPasses()
    {
        return $this->twoPointConversionPasses;
    }

    /**
     * @param int $twoPointConversionPasses
     */
    public function setTwoPointConversionPasses( $twoPointConversionPasses )
    {
        $this->twoPointConversionPasses = $twoPointConversionPasses;
    }

    /**
     * @return int
     */
    public function getTwoPointConversionRuns()
    {
        return $this->twoPointConversionRuns;
    }

    /**
     * @param int $twoPointConversionRuns
     */
    public function setTwoPointConversionRuns( $twoPointConversionRuns )
    {
        $this->twoPointConversionRuns = $twoPointConversionRuns;
    }

    /**
     * @return int
     */
    public function getTwoPointConversionReceptions()
    {
        return $this->twoPointConversionReceptions;
    }

    /**
     * @param int $twoPointConversionReceptions
     */
    public function setTwoPointConversionReceptions( $twoPointConversionReceptions )
    {
        $this->twoPointConversionReceptions = $twoPointConversionReceptions;
    }

    /**
     * @return string
     */
    public function getFantasyPoints()
    {
        return $this->fantasyPoints;
    }

    /**
     * @param string $fantasyPoints
     */
    public function setFantasyPoints( $fantasyPoints )
    {
        $this->fantasyPoints = $fantasyPoints;
    }

    /**
     * @return string
     */
    public function getFantasyPointsPPR()
    {
        return $this->fantasyPointsPPR;
    }

    /**
     * @param string $fantasyPointsPPR
     */
    public function setFantasyPointsPPR( $fantasyPointsPPR )
    {
        $this->fantasyPointsPPR = $fantasyPointsPPR;
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
     * @return string
     */
    public function getReceptionPercentage()
    {
        return $this->receptionPercentage;
    }

    /**
     * @param string $receptionPercentage
     */
    public function setReceptionPercentage( $receptionPercentage )
    {
        $this->receptionPercentage = $receptionPercentage;
    }

    /**
     * @return string
     */
    public function getReceivingYardsPerTarget()
    {
        return $this->receivingYardsPerTarget;
    }

    /**
     * @param string $receivingYardsPerTarget
     */
    public function setReceivingYardsPerTarget( $receivingYardsPerTarget )
    {
        $this->receivingYardsPerTarget = $receivingYardsPerTarget;
    }

    /**
     * @return int
     */
    public function getTackles()
    {
        return $this->tackles;
    }

    /**
     * @param int $tackles
     */
    public function setTackles( $tackles )
    {
        $this->tackles = $tackles;
    }

    /**
     * @return int
     */
    public function getOffensiveTouchdowns()
    {
        return $this->offensiveTouchdowns;
    }

    /**
     * @param int $offensiveTouchdowns
     */
    public function setOffensiveTouchdowns( $offensiveTouchdowns )
    {
        $this->offensiveTouchdowns = $offensiveTouchdowns;
    }

    /**
     * @return int
     */
    public function getDefensiveTouchdowns()
    {
        return $this->defensiveTouchdowns;
    }

    /**
     * @param int $defensiveTouchdowns
     */
    public function setDefensiveTouchdowns( $defensiveTouchdowns )
    {
        $this->defensiveTouchdowns = $defensiveTouchdowns;
    }

    /**
     * @return int
     */
    public function getSpecialTeamsTouchdowns()
    {
        return $this->specialTeamsTouchdowns;
    }

    /**
     * @param int $specialTeamsTouchdowns
     */
    public function setSpecialTeamsTouchdowns( $specialTeamsTouchdowns )
    {
        $this->specialTeamsTouchdowns = $specialTeamsTouchdowns;
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
     * @return string
     */
    public function getFantasyPosition()
    {
        return $this->fantasyPosition;
    }

    /**
     * @param string $fantasyPosition
     */
    public function setFantasyPosition( $fantasyPosition )
    {
        $this->fantasyPosition = $fantasyPosition;
    }

    /**
     * @return string
     */
    public function getFieldGoalPercentage()
    {
        return $this->fieldGoalPercentage;
    }

    /**
     * @param string $fieldGoalPercentage
     */
    public function setFieldGoalPercentage( $fieldGoalPercentage )
    {
        $this->fieldGoalPercentage = $fieldGoalPercentage;
    }

    /**
     * @return int
     */
    public function getFumblesOwnRecoveries()
    {
        return $this->fumblesOwnRecoveries;
    }

    /**
     * @param int $fumblesOwnRecoveries
     */
    public function setFumblesOwnRecoveries( $fumblesOwnRecoveries )
    {
        $this->fumblesOwnRecoveries = $fumblesOwnRecoveries;
    }

    /**
     * @return int
     */
    public function getFumblesOutOfBounds()
    {
        return $this->fumblesOutOfBounds;
    }

    /**
     * @param int $fumblesOutOfBounds
     */
    public function setFumblesOutOfBounds( $fumblesOutOfBounds )
    {
        $this->fumblesOutOfBounds = $fumblesOutOfBounds;
    }

    /**
     * @return int
     */
    public function getKickReturnFairCatches()
    {
        return $this->kickReturnFairCatches;
    }

    /**
     * @param int $kickReturnFairCatches
     */
    public function setKickReturnFairCatches( $kickReturnFairCatches )
    {
        $this->kickReturnFairCatches = $kickReturnFairCatches;
    }

    /**
     * @return int
     */
    public function getPuntReturnFairCatches()
    {
        return $this->puntReturnFairCatches;
    }

    /**
     * @param int $puntReturnFairCatches
     */
    public function setPuntReturnFairCatches( $puntReturnFairCatches )
    {
        $this->puntReturnFairCatches = $puntReturnFairCatches;
    }

    /**
     * @return int
     */
    public function getPuntTouchbacks()
    {
        return $this->puntTouchbacks;
    }

    /**
     * @param int $puntTouchbacks
     */
    public function setPuntTouchbacks( $puntTouchbacks )
    {
        $this->puntTouchbacks = $puntTouchbacks;
    }

    /**
     * @return int
     */
    public function getPuntInside20()
    {
        return $this->puntInside20;
    }

    /**
     * @param int $puntInside20
     */
    public function setPuntInside20( $puntInside20 )
    {
        $this->puntInside20 = $puntInside20;
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
    public function getExtraPointsAttempted()
    {
        return $this->extraPointsAttempted;
    }

    /**
     * @param int $extraPointsAttempted
     */
    public function setExtraPointsAttempted( $extraPointsAttempted )
    {
        $this->extraPointsAttempted = $extraPointsAttempted;
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
    public function getPuntLong()
    {
        return $this->puntLong;
    }

    /**
     * @param int $puntLong
     */
    public function setPuntLong( $puntLong )
    {
        $this->puntLong = $puntLong;
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
    public function getSpecialTeamsFumblesForced()
    {
        return $this->specialTeamsFumblesForced;
    }

    /**
     * @param int $specialTeamsFumblesForced
     */
    public function setSpecialTeamsFumblesForced( $specialTeamsFumblesForced )
    {
        $this->specialTeamsFumblesForced = $specialTeamsFumblesForced;
    }

    /**
     * @return int
     */
    public function getSpecialTeamsFumblesRecovered()
    {
        return $this->specialTeamsFumblesRecovered;
    }

    /**
     * @param int $specialTeamsFumblesRecovered
     */
    public function setSpecialTeamsFumblesRecovered( $specialTeamsFumblesRecovered )
    {
        $this->specialTeamsFumblesRecovered = $specialTeamsFumblesRecovered;
    }

    /**
     * @return int
     */
    public function getMiscFumblesForced()
    {
        return $this->miscFumblesForced;
    }

    /**
     * @param int $miscFumblesForced
     */
    public function setMiscFumblesForced( $miscFumblesForced )
    {
        $this->miscFumblesForced = $miscFumblesForced;
    }

    /**
     * @return int
     */
    public function getMiscFumblesRecovered()
    {
        return $this->miscFumblesRecovered;
    }

    /**
     * @param int $miscFumblesRecovered
     */
    public function setMiscFumblesRecovered( $miscFumblesRecovered )
    {
        $this->miscFumblesRecovered = $miscFumblesRecovered;
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * @param string $shortName
     */
    public function setShortName( $shortName )
    {
        $this->shortName = $shortName;
    }

    /**
     * @return int
     */
    public function getSafetiesAllowed()
    {
        return $this->safetiesAllowed;
    }

    /**
     * @param int $safetiesAllowed
     */
    public function setSafetiesAllowed( $safetiesAllowed )
    {
        $this->safetiesAllowed = $safetiesAllowed;
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
    public function getOffensiveSnapsPlayed()
    {
        return $this->offensiveSnapsPlayed;
    }

    /**
     * @param int $offensiveSnapsPlayed
     */
    public function setOffensiveSnapsPlayed( $offensiveSnapsPlayed )
    {
        $this->offensiveSnapsPlayed = $offensiveSnapsPlayed;
    }

    /**
     * @return int
     */
    public function getDefensiveSnapsPlayed()
    {
        return $this->defensiveSnapsPlayed;
    }

    /**
     * @param int $defensiveSnapsPlayed
     */
    public function setDefensiveSnapsPlayed( $defensiveSnapsPlayed )
    {
        $this->defensiveSnapsPlayed = $defensiveSnapsPlayed;
    }

    /**
     * @return int
     */
    public function getSpecialTeamsSnapsPlayed()
    {
        return $this->specialTeamsSnapsPlayed;
    }

    /**
     * @param int $specialTeamsSnapsPlayed
     */
    public function setSpecialTeamsSnapsPlayed( $specialTeamsSnapsPlayed )
    {
        $this->specialTeamsSnapsPlayed = $specialTeamsSnapsPlayed;
    }

    /**
     * @return int
     */
    public function getOffensiveTeamSnaps()
    {
        return $this->offensiveTeamSnaps;
    }

    /**
     * @param int $offensiveTeamSnaps
     */
    public function setOffensiveTeamSnaps( $offensiveTeamSnaps )
    {
        $this->offensiveTeamSnaps = $offensiveTeamSnaps;
    }

    /**
     * @return int
     */
    public function getDefensiveTeamSnaps()
    {
        return $this->defensiveTeamSnaps;
    }

    /**
     * @param int $defensiveTeamSnaps
     */
    public function setDefensiveTeamSnaps( $defensiveTeamSnaps )
    {
        $this->defensiveTeamSnaps = $defensiveTeamSnaps;
    }

    /**
     * @return int
     */
    public function getSpecialTeamsTeamSnaps()
    {
        return $this->specialTeamsTeamSnaps;
    }

    /**
     * @param int $specialTeamsTeamSnaps
     */
    public function setSpecialTeamsTeamSnaps( $specialTeamsTeamSnaps )
    {
        $this->specialTeamsTeamSnaps = $specialTeamsTeamSnaps;
    }

    /**
     * @return int
     */
    public function getAuctionValue()
    {
        return $this->auctionValue;
    }

    /**
     * @param int $auctionValue
     */
    public function setAuctionValue( $auctionValue )
    {
        $this->auctionValue = $auctionValue;
    }

    /**
     * @return int
     */
    public function getAuctionValuePPR()
    {
        return $this->auctionValuePPR;
    }

    /**
     * @param int $auctionValuePPR
     */
    public function setAuctionValuePPR( $auctionValuePPR )
    {
        $this->auctionValuePPR = $auctionValuePPR;
    }

}

