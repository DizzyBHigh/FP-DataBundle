<?php

namespace FantasyPro\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ScoringPlay
 *
 * @ORM\Table(name="fp_scoringPlay")
 * @ORM\Entity(repositoryClass="FantasyPro\DataBundle\Entity\ScoringPlayRepository")
 */
class ScoringPlay
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
     * @ORM\Column(type="string", length=10, nullable=false, name="gameKey")
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
     * @ORM\Column(type="integer", unique=true, nullable=false, name="scoringPlayID")
     */
    private $scoringPlayID;

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
     * @ORM\Column(type="string", length=10, nullable=false, name="awayTeam")
     */
    private $awayTeam;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=10, nullable=false, name="homeTeam")
     */
    private $homeTeam;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true, name="date")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="sequence")
     */
    private $sequence;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=10, nullable=true, name="team")
     */
    private $team;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=10, nullable=true, name="quarter")
     */
    private $quarter;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=10, nullable=true, name="timeRemaining")
     */
    private $timeRemaining;

    /**
     * @var string
     *
     * @ORM\Column(type="text", length=500, nullable=true, name="playDescription")
     */
    private $playDescription;

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
     * @return ScoringPlay
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
     * @return ScoringPlay
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
     * Set scoringPlayID
     *
     * @param integer $scoringPlayID
     *
     * @return ScoringPlay
     */
    public function setScoringPlayID( $scoringPlayID )
    {
        $this->scoringPlayID = $scoringPlayID;

        return $this;
    }

    /**
     * Get scoringPlayID
     *
     * @return integer
     */
    public function getScoringPlayID()
    {
        return $this->scoringPlayID;
    }

    /**
     * Set season
     *
     * @param integer $season
     *
     * @return ScoringPlay
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
     * @return ScoringPlay
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
     * Set awayTeam
     *
     * @param string $awayTeam
     *
     * @return ScoringPlay
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
     * @return ScoringPlay
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return ScoringPlay
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
     * Set sequence
     *
     * @param integer $sequence
     *
     * @return ScoringPlay
     */
    public function setSequence( $sequence )
    {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * Get sequence
     *
     * @return integer
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Set team
     *
     * @param string $team
     *
     * @return ScoringPlay
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
     * Set quarter
     *
     * @param string $quarter
     *
     * @return ScoringPlay
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
     * @return ScoringPlay
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
     * Set playDescription
     *
     * @param string $playDescription
     *
     * @return ScoringPlay
     */
    public function setPlayDescription( $playDescription )
    {
        $this->playDescription = $playDescription;

        return $this;
    }

    /**
     * Get playDescription
     *
     * @return string
     */
    public function getPlayDescription()
    {
        return $this->playDescription;
    }

    /**
     * Set awayScore
     *
     * @param integer $awayScore
     *
     * @return ScoringPlay
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
     * @return ScoringPlay
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
}

