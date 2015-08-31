<?php

namespace FantasyPro\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Score
 *
 * @ORM\Table(name="fp_score")
 * @ORM\Entity(repositoryClass="FantasyPro\DataBundle\Entity\ScoreRepository")
 */
class Score
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
     * @ORM\Column(type="string", unique=true, length=10, nullable=false, name="gameKey")
     */
    private $gameKey;

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
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=false, name="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="awayTeam")
     */
    private $awayTeam;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="homeTeam")
     */
    private $homeTeam;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="awayScore")
     */
    private $awayScore;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="homeScore")
     */
    private $homeScore;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="channel")
     */
    private $channel;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="pointSpread")
     */
    private $pointSpread;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="overUnder")
     */
    private $overUnder;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="quarter")
     */
    private $quarter;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="timeRemaining")
     */
    private $timeRemaining;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="possession")
     */
    private $possession;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="down")
     */
    private $down;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=10, nullable=true, name="distance")
     */
    private $distance;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="yardLine")
     */
    private $yardLine;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=10, nullable=true, name="yardLineTerritory")
     */
    private $yardLineTerritory;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=10, nullable=true, name="redZone")
     */
    private $redZone;

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
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=false, name="hasStarted")
     */
    private $hasStarted;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=false, name="isInProgress")
     */
    private $isInProgress;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=false, name="isOver")
     */
    private $isOver;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=false, name="has1stQuarterStarted")
     */
    private $has1stQuarterStarted;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=false, name="has2ndQuarterStarted")
     */
    private $has2ndQuarterStarted;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=false, name="has3rdQuarterStarted")
     */
    private $has3rdQuarterStarted;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=false, name="has4thQuarterStarted")
     */
    private $has4thQuarterStarted;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=false, name="isOvertime")
     */
    private $isOvertime;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="downAndDistance")
     */
    private $downAndDistance;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="quarterDescription")
     */
    private $quarterDescription;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="stadiumID")
     */
    private $stadiumID;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true, name="lastUpdated")
     */
    private $lastUpdated;

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
     * Set gameKey
     *
     * @param string $gameKey
     *
     * @return Score
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
     * Set seasonType
     *
     * @param integer $seasonType
     *
     * @return Score
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
     * @return Score
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
     * @return Score
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Score
     */
    public function setDate( $date )
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set awayTeam
     *
     * @param string $awayTeam
     *
     * @return Score
     */
    public function setAwayTeam( $awayTeam )
    {
        $this->awayTeam = $awayTeam;

        return $this;
    }

    /**
     * Get awayTeam
     *
     * @return string
     */
    public function getAwayTeam()
    {
        return $this->awayTeam;
    }

    /**
     * Set homeTeam
     *
     * @param string $homeTeam
     *
     * @return Score
     */
    public function setHomeTeam( $homeTeam )
    {
        $this->homeTeam = $homeTeam;

        return $this;
    }

    /**
     * Get homeTeam
     *
     * @return string
     */
    public function getHomeTeam()
    {
        return $this->homeTeam;
    }

    /**
     * Set awayScore
     *
     * @param integer $awayScore
     *
     * @return Score
     */
    public function setAwayScore( $awayScore )
    {
        $this->awayScore = $awayScore;

        return $this;
    }

    /**
     * Get awayScore
     *
     * @return integer
     */
    public function getAwayScore()
    {
        return $this->awayScore;
    }

    /**
     * Set homeScore
     *
     * @param integer $homeScore
     *
     * @return Score
     */
    public function setHomeScore( $homeScore )
    {
        $this->homeScore = $homeScore;

        return $this;
    }

    /**
     * Get homeScore
     *
     * @return integer
     */
    public function getHomeScore()
    {
        return $this->homeScore;
    }

    /**
     * Set channel
     *
     * @param string $channel
     *
     * @return Score
     */
    public function setChannel( $channel )
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * Get channel
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Set pointSpread
     *
     * @param string $pointSpread
     *
     * @return Score
     */
    public function setPointSpread( $pointSpread )
    {
        $this->pointSpread = $pointSpread;

        return $this;
    }

    /**
     * Get pointSpread
     *
     * @return string
     */
    public function getPointSpread()
    {
        return $this->pointSpread;
    }

    /**
     * Set overUnder
     *
     * @param string $overUnder
     *
     * @return Score
     */
    public function setOverUnder( $overUnder )
    {
        $this->overUnder = $overUnder;

        return $this;
    }

    /**
     * Get overUnder
     *
     * @return string
     */
    public function getOverUnder()
    {
        return $this->overUnder;
    }

    /**
     * Set quarter
     *
     * @param string $quarter
     *
     * @return Score
     */
    public function setQuarter( $quarter )
    {
        $this->quarter = $quarter;

        return $this;
    }

    /**
     * Get quarter
     *
     * @return string
     */
    public function getQuarter()
    {
        return $this->quarter;
    }

    /**
     * Set timeRemaining
     *
     * @param string $timeRemaining
     *
     * @return Score
     */
    public function setTimeRemaining( $timeRemaining )
    {
        $this->timeRemaining = $timeRemaining;

        return $this;
    }

    /**
     * Get timeRemaining
     *
     * @return string
     */
    public function getTimeRemaining()
    {
        return $this->timeRemaining;
    }

    /**
     * Set possession
     *
     * @param string $possession
     *
     * @return Score
     */
    public function setPossession( $possession )
    {
        $this->possession = $possession;

        return $this;
    }

    /**
     * Get possession
     *
     * @return string
     */
    public function getPossession()
    {
        return $this->possession;
    }

    /**
     * Set down
     *
     * @param integer $down
     *
     * @return Score
     */
    public function setDown( $down )
    {
        $this->down = $down;

        return $this;
    }

    /**
     * Get down
     *
     * @return integer
     */
    public function getDown()
    {
        return $this->down;
    }

    /**
     * Set distance
     *
     * @param string $distance
     *
     * @return Score
     */
    public function setDistance( $distance )
    {
        $this->distance = $distance;

        return $this;
    }

    /**
     * Get distance
     *
     * @return string
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Set yardLine
     *
     * @param integer $yardLine
     *
     * @return Score
     */
    public function setYardLine( $yardLine )
    {
        $this->yardLine = $yardLine;

        return $this;
    }

    /**
     * Get yardLine
     *
     * @return integer
     */
    public function getYardLine()
    {
        return $this->yardLine;
    }

    /**
     * Set yardLineTerritory
     *
     * @param string $yardLineTerritory
     *
     * @return Score
     */
    public function setYardLineTerritory( $yardLineTerritory )
    {
        $this->yardLineTerritory = $yardLineTerritory;

        return $this;
    }

    /**
     * Get yardLineTerritory
     *
     * @return string
     */
    public function getYardLineTerritory()
    {
        return $this->yardLineTerritory;
    }

    /**
     * Set redZone
     *
     * @param string $redZone
     *
     * @return Score
     */
    public function setRedZone( $redZone )
    {
        $this->redZone = $redZone;

        return $this;
    }

    /**
     * Get redZone
     *
     * @return string
     */
    public function getRedZone()
    {
        return $this->redZone;
    }

    /**
     * Set awayScoreQuarter1
     *
     * @param integer $awayScoreQuarter1
     *
     * @return Score
     */
    public function setAwayScoreQuarter1( $awayScoreQuarter1 )
    {
        $this->awayScoreQuarter1 = $awayScoreQuarter1;

        return $this;
    }

    /**
     * Get awayScoreQuarter1
     *
     * @return integer
     */
    public function getAwayScoreQuarter1()
    {
        return $this->awayScoreQuarter1;
    }

    /**
     * Set awayScoreQuarter2
     *
     * @param integer $awayScoreQuarter2
     *
     * @return Score
     */
    public function setAwayscoreQuarter2( $awayScoreQuarter2 )
    {
        $this->awayScoreQuarter2 = $awayScoreQuarter2;

        return $this;
    }

    /**
     * Get awayScoreQuarter2
     *
     * @return integer
     */
    public function getAwayscoreQuarter2()
    {
        return $this->awayScoreQuarter2;
    }

    /**
     * Set awayScoreQuarter3
     *
     * @param integer $awayScoreQuarter3
     *
     * @return Score
     */
    public function setAwayscoreQuarter3( $awayScoreQuarter3 )
    {
        $this->awayScoreQuarter3 = $awayScoreQuarter3;

        return $this;
    }

    /**
     * Get awayScoreQuarter3
     *
     * @return integer
     */
    public function getAwayscoreQuarter3()
    {
        return $this->awayScoreQuarter3;
    }

    /**
     * Set awayScoreQuarter4
     *
     * @param integer $awayScoreQuarter4
     *
     * @return Score
     */
    public function setAwayscoreQuarter4( $awayScoreQuarter4 )
    {
        $this->awayScoreQuarter4 = $awayScoreQuarter4;

        return $this;
    }

    /**
     * Get awayScoreQuarter4
     *
     * @return integer
     */
    public function getAwayscoreQuarter4()
    {
        return $this->awayScoreQuarter4;
    }

    /**
     * Set awayScoreOvertime
     *
     * @param integer $awayScoreOvertime
     *
     * @return Score
     */
    public function setAwayScoreOvertime( $awayScoreOvertime )
    {
        $this->awayScoreOvertime = $awayScoreOvertime;

        return $this;
    }

    /**
     * Get awayScoreOvertime
     *
     * @return integer
     */
    public function getAwayScoreOvertime()
    {
        return $this->awayScoreOvertime;
    }

    /**
     * Set homeScoreQuarter1
     *
     * @param integer $homeScoreQuarter1
     *
     * @return Score
     */
    public function setHomeScoreQuarter1( $homeScoreQuarter1 )
    {
        $this->homeScoreQuarter1 = $homeScoreQuarter1;

        return $this;
    }

    /**
     * Get homeScoreQuarter1
     *
     * @return integer
     */
    public function getHomeScoreQuarter1()
    {
        return $this->homeScoreQuarter1;
    }

    /**
     * Set homeScoreQuarter2
     *
     * @param integer $homeScoreQuarter2
     *
     * @return Score
     */
    public function setHomeScoreQuarter2( $homeScoreQuarter2 )
    {
        $this->homeScoreQuarter2 = $homeScoreQuarter2;

        return $this;
    }

    /**
     * Get homeScoreQuarter2
     *
     * @return integer
     */
    public function getHomeScoreQuarter2()
    {
        return $this->homeScoreQuarter2;
    }

    /**
     * Set homeScoreQuarter3
     *
     * @param integer $homeScoreQuarter3
     *
     * @return Score
     */
    public function setHomeScoreQuarter3( $homeScoreQuarter3 )
    {
        $this->homeScoreQuarter3 = $homeScoreQuarter3;

        return $this;
    }

    /**
     * Get homeScoreQuarter3
     *
     * @return integer
     */
    public function getHomeScoreQuarter3()
    {
        return $this->homeScoreQuarter3;
    }

    /**
     * Set homeScoreQuarter4
     *
     * @param integer $homeScoreQuarter4
     *
     * @return Score
     */
    public function setHomeScoreQuarter4( $homeScoreQuarter4 )
    {
        $this->homeScoreQuarter4 = $homeScoreQuarter4;

        return $this;
    }

    /**
     * Get homeScoreQuarter4
     *
     * @return integer
     */
    public function getHomeScoreQuarter4()
    {
        return $this->homeScoreQuarter4;
    }

    /**
     * Set homeScoreOvertime
     *
     * @param integer $homeScoreOvertime
     *
     * @return Score
     */
    public function setHomeScoreOvertime( $homeScoreOvertime )
    {
        $this->homeScoreOvertime = $homeScoreOvertime;

        return $this;
    }

    /**
     * Get homeScoreOvertime
     *
     * @return integer
     */
    public function getHomeScoreOvertime()
    {
        return $this->homeScoreOvertime;
    }

    /**
     * Set hasStarted
     *
     * @param boolean $hasStarted
     *
     * @return Score
     */
    public function setHasStarted( $hasStarted )
    {
        $this->hasStarted = $hasStarted;

        return $this;
    }

    /**
     * Get hasStarted
     *
     * @return boolean
     */
    public function getHasStarted()
    {
        return $this->hasStarted;
    }

    /**
     * Set isInProgress
     *
     * @param boolean $isInProgress
     *
     * @return Score
     */
    public function setIsInProgress( $isInProgress )
    {
        $this->isInProgress = $isInProgress;

        return $this;
    }

    /**
     * Get isInProgress
     *
     * @return boolean
     */
    public function getIsInProgress()
    {
        return $this->isInProgress;
    }

    /**
     * Set isOver
     *
     * @param boolean $isOver
     *
     * @return Score
     */
    public function setIsOver( $isOver )
    {
        $this->isOver = $isOver;

        return $this;
    }

    /**
     * Get isOver
     *
     * @return boolean
     */
    public function getIsOver()
    {
        return $this->isOver;
    }

    /**
     * Set has1stQuarterStarted
     *
     * @param boolean $has1stQuarterStarted
     *
     * @return Score
     */
    public function setHas1stQuarterStarted( $has1stQuarterStarted )
    {
        $this->has1stQuarterStarted = $has1stQuarterStarted;

        return $this;
    }

    /**
     * Get has1stQuarterStarted
     *
     * @return boolean
     */
    public function getHas1stQuarterStarted()
    {
        return $this->has1stQuarterStarted;
    }

    /**
     * Set has2ndQuarterStarted
     *
     * @param boolean $has2ndQuarterStarted
     *
     * @return Score
     */
    public function setHas2ndQuarterStarted( $has2ndQuarterStarted )
    {
        $this->has2ndQuarterStarted = $has2ndQuarterStarted;

        return $this;
    }

    /**
     * Get has2ndQuarterStarted
     *
     * @return boolean
     */
    public function getHas2ndQuarterStarted()
    {
        return $this->has2ndQuarterStarted;
    }

    /**
     * Set has3rdQuarterStarted
     *
     * @param boolean $has3rdQuarterStarted
     *
     * @return Score
     */
    public function setHas3rdQuarterStarted( $has3rdQuarterStarted )
    {
        $this->has3rdQuarterStarted = $has3rdQuarterStarted;

        return $this;
    }

    /**
     * Get has3rdQuarterStarted
     *
     * @return boolean
     */
    public function getHas3rdQuarterStarted()
    {
        return $this->has3rdQuarterStarted;
    }

    /**
     * Set has4thQuarterStarted
     *
     * @param boolean $has4thQuarterStarted
     *
     * @return Score
     */
    public function setHas4thQuarterStarted( $has4thQuarterStarted )
    {
        $this->has4thQuarterStarted = $has4thQuarterStarted;

        return $this;
    }

    /**
     * Get has4thQuarterStarted
     *
     * @return boolean
     */
    public function getHas4thQuarterStarted()
    {
        return $this->has4thQuarterStarted;
    }

    /**
     * Set isOvertime
     *
     * @param boolean $isOvertime
     *
     * @return Score
     */
    public function setIsOvertime( $isOvertime )
    {
        $this->isOvertime = $isOvertime;

        return $this;
    }

    /**
     * Get isOvertime
     *
     * @return boolean
     */
    public function getIsOvertime()
    {
        return $this->isOvertime;
    }

    /**
     * Set downAndDistance
     *
     * @param string $downAndDistance
     *
     * @return Score
     */
    public function setDownAndDistance( $downAndDistance )
    {
        $this->downAndDistance = $downAndDistance;

        return $this;
    }

    /**
     * Get downAndDistance
     *
     * @return string
     */
    public function getDownAndDistance()
    {
        return $this->downAndDistance;
    }

    /**
     * Set stadiumID
     *
     * @param integer $stadiumID
     *
     * @return Score
     */
    public function setStadiumID( $stadiumID )
    {
        $this->stadiumID = $stadiumID;

        return $this;
    }

    /**
     * Get stadiumID
     *
     * @return integer
     */
    public function getStadiumID()
    {
        return $this->stadiumID;
    }

    /**
     * Set quarterDescription
     *
     * @param string $quarterDescription
     *
     * @return Score
     */
    public function setQuarterDescription( $quarterDescription )
    {
        $this->quarterDescription = $quarterDescription;

        return $this;
    }

    /**
     * Get quarterDescription
     *
     * @return string
     */
    public function getQuarterDescription()
    {
        return $this->quarterDescription;
    }

    /**
     * Set lastUpdated
     *
     * @param \DateTime $lastUpdated
     *
     * @return Score
     */
    public function setLastUpdated( $lastUpdated )
    {
        $this->lastUpdated = $lastUpdated;

        return $this;
    }

    /**
     * Get lastUpdated
     *
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }
}

