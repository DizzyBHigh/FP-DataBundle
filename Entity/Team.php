<?php

namespace FantasyPro\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Team
 *
 * @ORM\Table(name="fd_team")
 * @ORM\Entity
 */
class Team
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
     * @ORM\Column(type="string", length=10, nullable=true, name="teamKey")
     */
    private $teamKey;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="teamID")
     */
    private $teamID;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="playerID")
     * @ORM\OneToMany(targetEntity="FantasyPro\GameBundle\Entity\ContestEntry", mappedBy="def")
     */
    private $playerID;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="city")
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="name")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="conference")
     */
    private $conference;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="division")
     */
    private $division;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="fullName")
     */
    private $fullName;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="stadiumID")
     */
    private $stadiumID;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="byeWeek")
     */
    private $byeWeek;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="averageDraftPosition")
     */
    private $averageDraftPosition;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="averageDraftPositionPPR")
     */
    private $averageDraftPositionPPR;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="headCoach")
     */
    private $headCoach;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="offensiveCoordinator")
     */
    private $offensiveCoordinator;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="defensiveCoordinator")
     */
    private $defensiveCoordinator;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="specialTeamsCoach")
     */
    private $specialTeamsCoach;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="offensiveScheme")
     */
    private $offensiveScheme;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="defensiveScheme")
     */
    private $defensiveScheme;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="upcomingSalary")
     */
    private $upcomingSalary;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="upcomingOpponentRank")
     */
    private $upcomingOpponentRank;

    /**
     * @var string
     *
     * @ORM\Column(type="integer", nullable=true, name="upcomingOpponentPositionRank")
     */
    private $upcomingOpponentPositionRank;

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
     * Set teamKey
     *
     * @param string $teamKey
     *
     * @return Team
     */
    public function setTeamKey( $teamKey )
    {
        $this->teamKey = $teamKey;

        return $this;
    }

    /**
     * Get teamKey
     *
     * @return string
     */
    public function getTeamKey()
    {
        return $this->teamKey;
    }

    /**
     * Set teamID
     *
     * @param integer $teamID
     *
     * @return Team
     */
    public function setTeamID( $teamID )
    {
        $this->teamID = $teamID;

        return $this;
    }

    /**
     * Get teamID
     *
     * @return integer
     */
    public function getTeamID()
    {
        return $this->teamID;
    }

    /**
     * Set playerID
     *
     * @param integer $playerID
     *
     * @return Team
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
     * Set city
     *
     * @param string $city
     *
     * @return Team
     */
    public function setCity( $city )
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Team
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
     * Set conference
     *
     * @param string $conference
     *
     * @return Team
     */
    public function setConference( $conference )
    {
        $this->conference = $conference;

        return $this;
    }

    /**
     * Get conference
     *
     * @return string
     */
    public function getConference()
    {
        return $this->conference;
    }

    /**
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @param string $fullName
     */
    public function setFullName( $fullName )
    {
        $this->fullName = $fullName;
    }


    /**
     * Set division
     *
     * @param string $division
     *
     * @return Team
     */
    public function setDivision( $division )
    {
        $this->division = $division;

        return $this;
    }

    /**
     * Get division
     *
     * @return string
     */
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * Set stadiumID
     *
     * @param integer $stadiumID
     *
     * @return Team
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
     * Set byeWeek
     *
     * @param integer $byeWeek
     *
     * @return Team
     */
    public function setByeWeek( $byeWeek )
    {
        $this->byeWeek = $byeWeek;

        return $this;
    }

    /**
     * Get byeWeek
     *
     * @return integer
     */
    public function getByeWeek()
    {
        return $this->byeWeek;
    }

    /**
     * Set averageDraftPosition
     *
     * @param string $averageDraftPosition
     *
     * @return Team
     */
    public function setAverageDraftPosition( $averageDraftPosition )
    {
        $this->averageDraftPosition = $averageDraftPosition;

        return $this;
    }

    /**
     * Get averageDraftPosition
     *
     * @return string
     */
    public function getAverageDraftPosition()
    {
        return $this->averageDraftPosition;
    }

    /**
     * Set averageDraftPositionPPR
     *
     * @param string $averageDraftPositionPPR
     *
     * @return Team
     */
    public function setAverageDraftPositionPPR( $averageDraftPositionPPR )
    {
        $this->averageDraftPositionPPR = $averageDraftPositionPPR;

        return $this;
    }

    /**
     * Get averageDraftPositionPPR
     *
     * @return string
     */
    public function getAverageDraftPositionPPR()
    {
        return $this->averageDraftPositionPPR;
    }

    /**
     * Set headCoach
     *
     * @param string $headCoach
     *
     * @return Team
     */
    public function setHeadCoach( $headCoach )
    {
        $this->headCoach = $headCoach;

        return $this;
    }

    /**
     * Get headCoach
     *
     * @return string
     */
    public function getHeadCoach()
    {
        return $this->headCoach;
    }

    /**
     * Set offensiveCoordinator
     *
     * @param string $offensiveCoordinator
     *
     * @return Team
     */
    public function setOffensiveCoordinator( $offensiveCoordinator )
    {
        $this->offensiveCoordinator = $offensiveCoordinator;

        return $this;
    }

    /**
     * Get offensiveCoordinator
     *
     * @return string
     */
    public function getOffensiveCoordinator()
    {
        return $this->offensiveCoordinator;
    }

    /**
     * Set defensiveCoordinator
     *
     * @param string $defensiveCoordinator
     *
     * @return Team
     */
    public function setDefensiveCoordinator( $defensiveCoordinator )
    {
        $this->defensiveCoordinator = $defensiveCoordinator;

        return $this;
    }

    /**
     * Get defensiveCoordinator
     *
     * @return string
     */
    public function getDefensiveCoordinator()
    {
        return $this->defensiveCoordinator;
    }

    /**
     * Set specialTeamsCoach
     *
     * @param string $specialTeamsCoach
     *
     * @return Team
     */
    public function setSpecialTeamsCoach( $specialTeamsCoach )
    {
        $this->specialTeamsCoach = $specialTeamsCoach;

        return $this;
    }

    /**
     * Get specialTeamsCoach
     *
     * @return string
     */
    public function getSpecialTeamsCoach()
    {
        return $this->specialTeamsCoach;
    }

    /**
     * Set offensiveScheme
     *
     * @param string $offensiveScheme
     *
     * @return Team
     */
    public function setOffensiveScheme( $offensiveScheme )
    {
        $this->offensiveScheme = $offensiveScheme;

        return $this;
    }

    /**
     * Get offensiveScheme
     *
     * @return string
     */
    public function getOffensiveScheme()
    {
        return $this->offensiveScheme;
    }

    /**
     * Set defensiveScheme
     *
     * @param string $defensiveScheme
     *
     * @return Team
     */
    public function setDefensiveScheme( $defensiveScheme )
    {
        $this->defensiveScheme = $defensiveScheme;

        return $this;
    }

    /**
     * Get defensiveScheme
     *
     * @return string
     */
    public function getDefensiveScheme()
    {
        return $this->defensiveScheme;
    }

    /**
     * Set upcomingSalary
     *
     * @param integer $upcomingSalary
     *
     * @return Team
     */
    public function setUpcomingSalary( $upcomingSalary )
    {
        $this->upcomingSalary = $upcomingSalary;

        return $this;
    }

    /**
     * Get upcomingSalary
     *
     * @return integer
     */
    public function getUpcomingSalary()
    {
        return $this->upcomingSalary;
    }

    /**
     * Set upcomingOpponentRank
     *
     * @param integer $upcomingOpponentRank
     *
     * @return Team
     */
    public function setUpcomingOpponentRank( $upcomingOpponentRank )
    {
        $this->upcomingOpponentRank = $upcomingOpponentRank;

        return $this;
    }

    /**
     * Get upcomingOpponentRank
     *
     * @return integer
     */
    public function getUpcomingOpponentRank()
    {
        return $this->upcomingOpponentRank;
    }

    /**
     * Set upcomingOpponentPositionRank
     *
     * @param string $upcomingOpponentPositionRank
     *
     * @return Team
     */
    public function setUpcomingOpponentPositionRank( $upcomingOpponentPositionRank )
    {
        $this->upcomingOpponentPositionRank = $upcomingOpponentPositionRank;

        return $this;
    }

    /**
     * Get upcomingOpponentPositionRank
     *
     * @return string
     */
    public function getUpcomingOpponentPositionRank()
    {
        return $this->upcomingOpponentPositionRank;
    }

    /**
     * @return mixed
     */
    public function getContestEntries()
    {
        return $this->contestEntries;
    }

    /**
     * @param null $ContestEntries
     *
     */
    public function setContestEntries( $ContestEntries = null)
    {
        $this->contestEntries = $ContestEntries;
    }

}

