<?php

namespace FantasyPro\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TimeFrame
 *
 * @ORM\Table(name="fd_timeframe")
 * @ORM\Entity(repositoryClass="FantasyPro\DataBundle\Entity\TimeFrameRepository")
 */
class TimeFrame
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
     * @ORM\Column(type="integer", nullable=true, name="week")
     */
    private $week;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=false, name="name")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=false, name="shortName")
     */
    private $shortName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=false, name="startDate")
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=false, name="endDate")
     */
    private $endDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true, name="firstGameStart")
     */
    private $firstGameStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true, name="firstGameEnd")
     */
    private $firstGameEnd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true, name="lastGameEnd")
     */
    private $lastGameEnd;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true, name="hasGames")
     */
    private $hasGames;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=false, name="hasStarted")
     */
    private $hasStarted;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true, name="hasEnded")
     */
    private $hasEnded;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=false, name="hasFirstGameStarted")
     */
    private $hasFirstGameStarted;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=false, name="hasFirstGameEnded")
     */
    private $hasFirstGameEnded;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=false, name="hasLastGameEnded")
     */
    private $hasLastGameEnded;


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
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate( $startDate )
    {
        $this->startDate = $startDate;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate( $endDate )
    {
        $this->endDate = $endDate;
    }

    /**
     * @return \DateTime
     */
    public function getFirstGameStart()
    {
        return $this->firstGameStart;
    }

    /**
     * @param \DateTime $firstGameStart
     */
    public function setFirstGameStart( $firstGameStart )
    {
        $this->firstGameStart = $firstGameStart;
    }

    /**
     * @return \DateTime
     */
    public function getFirstGameEnd()
    {
        return $this->firstGameEnd;
    }

    /**
     * @param \DateTime $firstGameEnd
     */
    public function setFirstGameEnd( $firstGameEnd )
    {
        $this->firstGameEnd = $firstGameEnd;
    }

    /**
     * @return \DateTime
     */
    public function getLastGameEnd()
    {
        return $this->lastGameEnd;
    }

    /**
     * @param \DateTime $lastGameEnd
     */
    public function setLastGameEnd( $lastGameEnd )
    {
        $this->lastGameEnd = $lastGameEnd;
    }

    /**
     * @return boolean
     */
    public function isHasGames()
    {
        return $this->hasGames;
    }

    /**
     * @param boolean $hasGames
     */
    public function setHasGames( $hasGames )
    {
        $this->hasGames = $hasGames;
    }

    /**
     * @return boolean
     */
    public function isHasStarted()
    {
        return $this->hasStarted;
    }

    /**
     * @param boolean $hasStarted
     */
    public function setHasStarted( $hasStarted )
    {
        $this->hasStarted = $hasStarted;
    }

    /**
     * @return boolean
     */
    public function isHasEnded()
    {
        return $this->hasEnded;
    }

    /**
     * @param boolean $hasEnded
     */
    public function setHasEnded( $hasEnded )
    {
        $this->hasEnded = $hasEnded;
    }

    /**
     * @return boolean
     */
    public function isHasFirstGameStarted()
    {
        return $this->hasFirstGameStarted;
    }

    /**
     * @param boolean $hasFirstGameStarted
     */
    public function setHasFirstGameStarted( $hasFirstGameStarted )
    {
        $this->hasFirstGameStarted = $hasFirstGameStarted;
    }

    /**
     * @return boolean
     */
    public function isHasFirstGameEnded()
    {
        return $this->hasFirstGameEnded;
    }

    /**
     * @param boolean $hasFirstGameEnded
     */
    public function setHasFirstGameEnded( $hasFirstGameEnded )
    {
        $this->hasFirstGameEnded = $hasFirstGameEnded;
    }

    /**
     * @return boolean
     */
    public function isHasLastGameEnded()
    {
        return $this->hasLastGameEnded;
    }

    /**
     * @param boolean $hasLastGameEnded
     */
    public function setHasLastGameEnded( $hasLastGameEnded )
    {
        $this->hasLastGameEnded = $hasLastGameEnded;
    }


}
