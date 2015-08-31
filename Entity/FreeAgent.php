<?php

namespace FantasyPro\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FreeAgents
 *
 *
 * @ORM\Entity(repositoryClass="FantasyPro\DataBundle\Entity\FreeAgentRepository")
 */
class FreeAgent
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
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="playerID")
     */
    private $playerID;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=10, nullable=true, name="team")
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
     * @ORM\Column(type="string", length=50, nullable=true, name="firstName")
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="lastName")
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=10, nullable=true, name="position")
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=20, nullable=true, name="status")
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=10, nullable=true, name="height")
     */
    private $height;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="weight")
     */
    private $weight;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true, name="birthDate")
     */
    private $birthDate;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="college")
     */
    private $college;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="experience")
     */
    private $experience;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="fantasyPosition")
     */
    private $fantasyPosition;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true, name="active")
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="positionCategory")
     */
    private $positionCategory;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="name")
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="age")
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="experienceString")
     */
    private $experienceString;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="birthDateString")
     */
    private $birthDateString;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="photoURL")
     */
    private $photoURL;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="byeWeek")
     */
    private $byeWeek;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="upcomingGameOpponent")
     */
    private $upcomingGameOpponent;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="upcomingGameWeek")
     */
    private $upcomingGameWeek;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="shortName")
     */
    private $shortName;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="averageDraftPosition")
     */
    private $averageDraftPosition;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="depthPositionCategory")
     */
    private $depthPositionCategory;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=10, nullable=true, name="depthPosition")
     */
    private $depthPosition;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="depthOrder")
     */
    private $depthOrder;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="depthDisplayOrder")
     */
    private $depthDisplayOrder;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="currentTeam")
     */
    private $currentTeam;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=10, nullable=true, name="collegeDraftTeam")
     */
    private $collegeDraftTeam;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="collegeDraftYear")
     */
    private $collegeDraftYear;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="collegeDraftRound")
     */
    private $collegeDraftRound;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="collegeDraftPick")
     */
    private $collegeDraftPick;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true, name="isUndraftedFreeAgent")
     */
    private $isUndraftedFreeAgent;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="heightFeet")
     */
    private $heightFeet;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="heightInches")
     */
    private $heightInches;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="upcomingOpponentRank")
     */
    private $upcomingOpponentRank;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="upcomingOpponentPositionRank")
     */
    private $upcomingOpponentPositionRank;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="currentStatus")
     */
    private $currentStatus;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="upcomingSalary")
     */
    private $upcomingSalary;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="injuryStatus")
     */
    private $injuryStatus;


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
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName( $firstName )
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName( $lastName )
    {
        $this->lastName = $lastName;
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
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus( $status )
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param string $height
     */
    public function setHeight( $height )
    {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight( $weight )
    {
        $this->weight = $weight;
    }

    /**
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param \DateTime $birthDate
     */
    public function setBirthDate( $birthDate )
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @return string
     */
    public function getCollege()
    {
        return $this->college;
    }

    /**
     * @param string $college
     */
    public function setCollege( $college )
    {
        $this->college = $college;
    }

    /**
     * @return int
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * @param int $experience
     */
    public function setExperience( $experience )
    {
        $this->experience = $experience;
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
     * @return boolean
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     */
    public function setActive( $active )
    {
        $this->active = $active;
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
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge( $age )
    {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getExperienceString()
    {
        return $this->experienceString;
    }

    /**
     * @param string $experienceString
     */
    public function setExperienceString( $experienceString )
    {
        $this->experienceString = $experienceString;
    }

    /**
     * @return string
     */
    public function getBirthDateString()
    {
        return $this->birthDateString;
    }

    /**
     * @param string $birthDateString
     */
    public function setBirthDateString( $birthDateString )
    {
        $this->birthDateString = $birthDateString;
    }

    /**
     * @return string
     */
    public function getPhotoURL()
    {
        return $this->photoURL;
    }

    /**
     * @param string $photoURL
     */
    public function setPhotoURL( $photoURL )
    {
        $this->photoURL = $photoURL;
    }

    /**
     * @return int
     */
    public function getByeWeek()
    {
        return $this->byeWeek;
    }

    /**
     * @param int $byeWeek
     */
    public function setByeWeek( $byeWeek )
    {
        $this->byeWeek = $byeWeek;
    }

    /**
     * @return string
     */
    public function getUpcomingGameOpponent()
    {
        return $this->upcomingGameOpponent;
    }

    /**
     * @param string $upcomingGameOpponent
     */
    public function setUpcomingGameOpponent( $upcomingGameOpponent )
    {
        $this->upcomingGameOpponent = $upcomingGameOpponent;
    }

    /**
     * @return int
     */
    public function getUpcomingGameWeek()
    {
        return $this->upcomingGameWeek;
    }

    /**
     * @param int $upcomingGameWeek
     */
    public function setUpcomingGameWeek( $upcomingGameWeek )
    {
        $this->upcomingGameWeek = $upcomingGameWeek;
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
     * @return string
     */
    public function getAverageDraftPosition()
    {
        return $this->averageDraftPosition;
    }

    /**
     * @param string $averageDraftPosition
     */
    public function setAverageDraftPosition( $averageDraftPosition )
    {
        $this->averageDraftPosition = $averageDraftPosition;
    }

    /**
     * @return string
     */
    public function getDepthPositionCategory()
    {
        return $this->depthPositionCategory;
    }

    /**
     * @param string $depthPositionCategory
     */
    public function setDepthPositionCategory( $depthPositionCategory )
    {
        $this->depthPositionCategory = $depthPositionCategory;
    }

    /**
     * @return string
     */
    public function getDepthPosition()
    {
        return $this->depthPosition;
    }

    /**
     * @param string $depthPosition
     */
    public function setDepthPosition( $depthPosition )
    {
        $this->depthPosition = $depthPosition;
    }

    /**
     * @return int
     */
    public function getDepthOrder()
    {
        return $this->depthOrder;
    }

    /**
     * @param int $depthOrder
     */
    public function setDepthOrder( $depthOrder )
    {
        $this->depthOrder = $depthOrder;
    }

    /**
     * @return int
     */
    public function getDepthDisplayOrder()
    {
        return $this->depthDisplayOrder;
    }

    /**
     * @param int $depthDisplayOrder
     */
    public function setDepthDisplayOrder( $depthDisplayOrder )
    {
        $this->depthDisplayOrder = $depthDisplayOrder;
    }

    /**
     * @return string
     */
    public function getCurrentTeam()
    {
        return $this->currentTeam;
    }

    /**
     * @param string $currentTeam
     */
    public function setCurrentTeam( $currentTeam )
    {
        $this->currentTeam = $currentTeam;
    }

    /**
     * @return string
     */
    public function getCollegeDraftTeam()
    {
        return $this->collegeDraftTeam;
    }

    /**
     * @param string $collegeDraftTeam
     */
    public function setCollegeDraftTeam( $collegeDraftTeam )
    {
        $this->collegeDraftTeam = $collegeDraftTeam;
    }

    /**
     * @return int
     */
    public function getCollegeDraftYear()
    {
        return $this->collegeDraftYear;
    }

    /**
     * @param int $collegeDraftYear
     */
    public function setCollegeDraftYear( $collegeDraftYear )
    {
        $this->collegeDraftYear = $collegeDraftYear;
    }

    /**
     * @return int
     */
    public function getCollegeDraftRound()
    {
        return $this->collegeDraftRound;
    }

    /**
     * @param int $collegeDraftRound
     */
    public function setCollegeDraftRound( $collegeDraftRound )
    {
        $this->collegeDraftRound = $collegeDraftRound;
    }

    /**
     * @return int
     */
    public function getCollegeDraftPick()
    {
        return $this->collegeDraftPick;
    }

    /**
     * @param int $collegeDraftPick
     */
    public function setCollegeDraftPick( $collegeDraftPick )
    {
        $this->collegeDraftPick = $collegeDraftPick;
    }

    /**
     * @return boolean
     */
    public function isIsUndraftedFreeAgent()
    {
        return $this->isUndraftedFreeAgent;
    }

    /**
     * @param boolean $isUndraftedFreeAgent
     */
    public function setIsUndraftedFreeAgent( $isUndraftedFreeAgent )
    {
        $this->isUndraftedFreeAgent = $isUndraftedFreeAgent;
    }

    /**
     * @return int
     */
    public function getHeightFeet()
    {
        return $this->heightFeet;
    }

    /**
     * @param int $heightFeet
     */
    public function setHeightFeet( $heightFeet )
    {
        $this->heightFeet = $heightFeet;
    }

    /**
     * @return int
     */
    public function getHeightInches()
    {
        return $this->heightInches;
    }

    /**
     * @param int $heightInches
     */
    public function setHeightInches( $heightInches )
    {
        $this->heightInches = $heightInches;
    }

    /**
     * @return int
     */
    public function getUpcomingOpponentRank()
    {
        return $this->upcomingOpponentRank;
    }

    /**
     * @param int $upcomingOpponentRank
     */
    public function setUpcomingOpponentRank( $upcomingOpponentRank )
    {
        $this->upcomingOpponentRank = $upcomingOpponentRank;
    }

    /**
     * @return int
     */
    public function getUpcomingOpponentPositionRank()
    {
        return $this->upcomingOpponentPositionRank;
    }

    /**
     * @param int $upcomingOpponentPositionRank
     */
    public function setUpcomingOpponentPositionRank( $upcomingOpponentPositionRank )
    {
        $this->upcomingOpponentPositionRank = $upcomingOpponentPositionRank;
    }

    /**
     * @return string
     */
    public function getCurrentStatus()
    {
        return $this->currentStatus;
    }

    /**
     * @param string $currentStatus
     */
    public function setCurrentStatus( $currentStatus )
    {
        $this->currentStatus = $currentStatus;
    }

    /**
     * @return int
     */
    public function getUpcomingSalary()
    {
        return $this->upcomingSalary;
    }

    /**
     * @param int $upcomingSalary
     */
    public function setUpcomingSalary( $upcomingSalary )
    {
        $this->upcomingSalary = $upcomingSalary;
    }

    /**
     * @return string
     */
    public function getInjuryStatus()
    {
        return $this->injuryStatus;
    }

    /**
     * @param string $injuryStatus
     */
    public function setInjuryStatus( $injuryStatus )
    {
        $this->injuryStatus = $injuryStatus;
    }


}

