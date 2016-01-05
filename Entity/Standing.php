<?php

namespace FantasyPro\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Standing
 *
 * @ORM\Table(name="fd_standing")
 * @ORM\Entity(repositoryClass="FantasyPro\DataBundle\Entity\StandingRepository")
 */
class Standing
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
     * @ORM\Column(type="string", length=255, nullable=true, name="conference")
     */
    private $conference;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="conferenceLosses")
     */
    private $conferenceLosses;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="conferenceWins")
     */
    private $conferenceWins;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="division")
     */
    private $division;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="divisionLosses")
     */
    private $divisionLosses;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="divisionWins")
     */
    private $divisionWins;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="losses")
     */
    private $losses;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="name")
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="netPoints")
     */
    private $netPoints;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="percentage")
     */
    private $percentage;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="pointsAgainst")
     */
    private $pointsAgainst;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="pointsFor")
     */
    private $pointsFor;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="Season")
     */
    private $season;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="seasonType")
     */
    private $seasonType;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="team")
     */
    private $team;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="ties")
     */
    private $ties;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="touchdowns")
     */
    private $touchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="wins")
     */
    private $wins;


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
    public function getConference()
    {
        return $this->conference;
    }

    /**
     * @param string $conference
     */
    public function setConference( $conference )
    {
        $this->conference = $conference;
    }

    /**
     * @return int
     */
    public function getConferenceLosses()
    {
        return $this->conferenceLosses;
    }

    /**
     * @param int $conferenceLosses
     */
    public function setConferenceLosses( $conferenceLosses )
    {
        $this->conferenceLosses = $conferenceLosses;
    }

    /**
     * @return int
     */
    public function getConferenceWins()
    {
        return $this->conferenceWins;
    }

    /**
     * @param int $conferenceWins
     */
    public function setConferenceWins( $conferenceWins )
    {
        $this->conferenceWins = $conferenceWins;
    }

    /**
     * @return string
     */
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * @param string $division
     */
    public function setDivision( $division )
    {
        $this->division = $division;
    }

    /**
     * @return int
     */
    public function getDivisionLosses()
    {
        return $this->divisionLosses;
    }

    /**
     * @param int $divisionLosses
     */
    public function setDivisionLosses( $divisionLosses )
    {
        $this->divisionLosses = $divisionLosses;
    }

    /**
     * @return int
     */
    public function getDivisionWins()
    {
        return $this->divisionWins;
    }

    /**
     * @param int $divisionWins
     */
    public function setDivisionWins( $divisionWins )
    {
        $this->divisionWins = $divisionWins;
    }

    /**
     * @return int
     */
    public function getLosses()
    {
        return $this->losses;
    }

    /**
     * @param int $losses
     */
    public function setLosses( $losses )
    {
        $this->losses = $losses;
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
     * @return int
     */
    public function getNetPoints()
    {
        return $this->netPoints;
    }

    /**
     * @param int $netPoints
     */
    public function setNetPoints( $netPoints )
    {
        $this->netPoints = $netPoints;
    }

    /**
     * @return string
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * @param string $percentage
     */
    public function setPercentage( $percentage )
    {
        $this->percentage = $percentage;
    }

    /**
     * @return int
     */
    public function getPointsAgainst()
    {
        return $this->pointsAgainst;
    }

    /**
     * @param int $pointsAgainst
     */
    public function setPointsAgainst( $pointsAgainst )
    {
        $this->pointsAgainst = $pointsAgainst;
    }

    /**
     * @return int
     */
    public function getPointsFor()
    {
        return $this->pointsFor;
    }

    /**
     * @param int $pointsFor
     */
    public function setPointsFor( $pointsFor )
    {
        $this->pointsFor = $pointsFor;
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
    public function getTies()
    {
        return $this->ties;
    }

    /**
     * @param int $ties
     */
    public function setTies( $ties )
    {
        $this->ties = $ties;
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
    public function getWins()
    {
        return $this->wins;
    }

    /**
     * @param int $wins
     */
    public function setWins( $wins )
    {
        $this->wins = $wins;
    }


}

