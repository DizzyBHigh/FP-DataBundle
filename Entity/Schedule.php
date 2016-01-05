<?php

namespace FantasyPro\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Schedule
 *
 * @ORM\Table(name="fd_schedule")
 * @ORM\Entity(repositoryClass="FantasyPro\DataBundle\Entity\ScheduleRepository")
 */
class Schedule
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
     * @ORM\Column(type="string", length=20, nullable=false, name="timeframeID")
     */
    private $timeframeID;

    /**
     * @var string
     *
     * @ORM\Column(type="string", unique=true, length=10, nullable=true, name="gameKey")
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
     * @var string
     *
     * @ORM\Column(type="string", nullable=true, name="hrDate")
     */
    private $hrDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true, name="date")
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="date", nullable=true, name="dateOnly")
     */
    private $dateOnly;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="time", nullable=true, name="timeOnly")
     */
    private $timeOnly;

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
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="stadiumID")
     */
    private $stadiumID;


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
    public function getTimeframeID()
    {
        return $this->timeframeID;
    }

    /**
     * @param string $timeframeID
     */
    public function setTimeframeID( $timeframeID )
    {
        $this->timeframeID = $timeframeID;
    }

    /**
     * Set gameKey
     *
     * @param string $gameKey
     *
     * @return Schedule
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
     * @return Schedule
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
     * @return Schedule
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
     * @return Schedule
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
     * @return Schedule
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
    * @return string
    */
    public function getHrDate()
    {
        return $this->hrDate;
    }/**
     * @param string $hrDate
     */
    public function setHrDate( $hrDate )
    {
        $this->hrDate = $hrDate;
    }



    /**
     * @return \DateTime
     */
    public function getDateOnly()
    {
        return $this->dateOnly;
    }

    /**
     * @param \DateTime $dateOnly
     */
    public function setDateOnly( $dateOnly )
    {
        $this->dateOnly = $dateOnly;
    }

    /**
     * @return \DateTime
     */
    public function getTimeOnly()
    {
        return $this->timeOnly;
    }

    /**
     * @param \DateTime $timeOnly
     */
    public function setTimeOnly( $timeOnly )
    {
        $this->timeOnly = $timeOnly;
    }



    /**
     * Set awayTeam
     *
     * @param string $awayTeam
     *
     * @return Schedule
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
     * @return Schedule
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
     * Set channel
     *
     * @param string $channel
     *
     * @return Schedule
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
     * @return Schedule
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
     * @return Schedule
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
     * Set stadiumID
     *
     * @param integer $stadiumID
     *
     * @return Schedule
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
}
