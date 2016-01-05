<?php

namespace FantasyPro\DataBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Player
 *
 * @ORM\Table(name="fd_player")
 * @ORM\Entity(repositoryClass="FantasyPro\DataBundle\Entity\PlayerRepository")
 */
class Player
    {

    public function __construct()
    {
        $this->contestEntries = new ArrayCollection();
        $this->dailyFantasyPlayers = new ArrayCollection();
    }
    /**
     * @var integer
     *
     * @ORM\Column(type="integer", length=32, name="id")
     * 
     * @ORM\Id
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=10, nullable=true, name="team")
     */
    private $team;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="Number")
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
     * @ORM\Column(type="string", length=50, nullable=true, name="status")
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="height")
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
     * @ORM\Column(type="string", length=50, nullable=true, name="college")
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
     * @ORM\Column(type="string", length=10, nullable=true, name="fantasyPosition")
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
     * @ORM\Column(type="string", length=3, nullable=true, name="positionCategory")
     */
    private $positionCategory;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="name")
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
     * @ORM\Column(type="string", length=50, nullable=true, name="experienceString")
     */
    private $experienceString;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="birthDateString")
     */
    private $birthDateString;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="photoUrl")
     */
    private $photoUrl;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="byeWeek")
     */
    private $byeWeek;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="upcomingGameOpponent")
     */
    private $upcomingGameOpponent;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, name="upcomingGameWeek")
     */
    private $upcomingGameWeek;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="shortName")
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
     * @ORM\Column(type="string", length=3, nullable=true, name="depthPositionCategory")
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
     * @ORM\Column(type="string", length=10, nullable=true, name="currentTeam")
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
     * @ORM\Column(type="boolean", nullable=false, name="isUndraftedFreeAgent")
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
     * @ORM\Column(type="string", length=50, nullable=true, name="currentStatus")
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
     *   @ORM\ManyToMany(targetEntity="FantasyPro\GameBundle\Entity\ContestEntry", mappedBy="players")
     */
    private $contestEntries;

    /**
     *   @ORM\OneToMany(targetEntity="FantasyPro\DataBundle\Entity\DailyFantasyPlayer", mappedBy="player")
     */
    private $dailyFantasyPlayers;

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Player
     */
    public function setId( $id )
    {
        $this->id = $id;

        return $this;
    }

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
     * Set team
     *
     * @param string $team
     *
     * @return Player
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
     * Set number
     *
     * @param integer $number
     *
     * @return Player
     */
    public function setNumber( $number )
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Player
     */
    public function setFirstName( $firstName )
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Player
     */
    public function setLastName( $lastName )
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return Player
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
     * Set status
     *
     * @param string $status
     *
     * @return Player
     */
    public function setStatus( $status )
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set height
     *
     * @param string $height
     *
     * @return Player
     */
    public function setHeight( $height )
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     *
     * @return Player
     */
    public function setWeight( $weight )
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return integer
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return Player
     */
    public function setBirthDate( $birthDate )
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set college
     *
     * @param string $college
     *
     * @return Player
     */
    public function setCollege( $college )
    {
        $this->college = $college;

        return $this;
    }

    /**
     * Get college
     *
     * @return string
     */
    public function getCollege()
    {
        return $this->college;
    }

    /**
     * Set experience
     *
     * @param integer $experience
     *
     * @return Player
     */
    public function setExperience( $experience )
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get experience
     *
     * @return integer
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Set fantasyPosition
     *
     * @param string $fantasyPosition
     *
     * @return Player
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
     * Set active
     *
     * @param boolean $active
     *
     * @return Player
     */
    public function setActive( $active )
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set positionCategory
     *
     * @param string $positionCategory
     *
     * @return Player
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
     * Set name
     *
     * @param string $name
     *
     * @return Player
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
     * Set age
     *
     * @param integer $age
     *
     * @return Player
     */
    public function setAge( $age )
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set experienceString
     *
     * @param string $experienceString
     *
     * @return Player
     */
    public function setExperienceString( $experienceString )
    {
        $this->experienceString = $experienceString;

        return $this;
    }

    /**
     * Get experienceString
     *
     * @return string
     */
    public function getExperienceString()
    {
        return $this->experienceString;
    }

    /**
     * Set birthDateString
     *
     * @param string $birthDateString
     *
     * @return Player
     */
    public function setBirthDateString( $birthDateString )
    {
        $this->birthDateString = $birthDateString;

        return $this;
    }

    /**
     * Get birthDateString
     *
     * @return string
     */
    public function getBirthDateString()
    {
        return $this->birthDateString;
    }

    /**
     * Set photoUrl
     *
     * @param string $photoUrl
     *
     * @return Player
     */
    public function setPhotoUrl( $photoUrl )
    {
        $this->photoUrl = $photoUrl;

        return $this;
    }

    /**
     * Get photoUrl
     *
     * @return string
     */
    public function getPhotoUrl()
    {
        return $this->photoUrl;
    }

    /**
     * Set byeWeek
     *
     * @param integer $byeWeek
     *
     * @return Player
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
     * Set upcomingGameOpponent
     *
     * @param string $upcomingGameOpponent
     *
     * @return Player
     */
    public function setUpcomingGameOpponent( $upcomingGameOpponent )
    {
        $this->upcomingGameOpponent = $upcomingGameOpponent;

        return $this;
    }

    /**
     * Get upcomingGameOpponent
     *
     * @return string
     */
    public function getUpcomingGameOpponent()
    {
        return $this->upcomingGameOpponent;
    }

    /**
     * Set upcomingGameWeek
     *
     * @param integer $upcomingGameWeek
     *
     * @return Player
     */
    public function setUpcomingGameWeek( $upcomingGameWeek )
    {
        $this->upcomingGameWeek = $upcomingGameWeek;

        return $this;
    }

    /**
     * Get upcomingGameWeek
     *
     * @return integer
     */
    public function getUpcomingGameWeek()
    {
        return $this->upcomingGameWeek;
    }

    /**
     * Set shortName
     *
     * @param string $shortName
     *
     * @return Player
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
     * Set averageDraftPosition
     *
     * @param string $averageDraftPosition
     *
     * @return Player
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
     * Set depthPositionCategory
     *
     * @param string $depthPositionCategory
     *
     * @return Player
     */
    public function setDepthPositionCategory( $depthPositionCategory )
    {
        $this->depthPositionCategory = $depthPositionCategory;

        return $this;
    }

    /**
     * Get depthPositionCategory
     *
     * @return string
     */
    public function getDepthPositionCategory()
    {
        return $this->depthPositionCategory;
    }

    /**
     * Set depthPosition
     *
     * @param string $depthPosition
     *
     * @return Player
     */
    public function setDepthPosition( $depthPosition )
    {
        $this->depthPosition = $depthPosition;

        return $this;
    }

    /**
     * Get depthPosition
     *
     * @return string
     */
    public function getDepthPosition()
    {
        return $this->depthPosition;
    }

    /**
     * Set depthOrder
     *
     * @param integer $depthOrder
     *
     * @return Player
     */
    public function setDepthOrder( $depthOrder )
    {
        $this->depthOrder = $depthOrder;

        return $this;
    }

    /**
     * Get depthOrder
     *
     * @return integer
     */
    public function getDepthOrder()
    {
        return $this->depthOrder;
    }

    /**
     * Set depthDisplayOrder
     *
     * @param integer $depthDisplayOrder
     *
     * @return Player
     */
    public function setDepthDisplayOrder( $depthDisplayOrder )
    {
        $this->depthDisplayOrder = $depthDisplayOrder;

        return $this;
    }

    /**
     * Get depthDisplayOrder
     *
     * @return integer
     */
    public function getDepthDisplayOrder()
    {
        return $this->depthDisplayOrder;
    }

    /**
     * Set currentTeam
     *
     * @param string $currentTeam
     *
     * @return Player
     */
    public function setCurrentTeam( $currentTeam )
    {
        $this->currentTeam = $currentTeam;

        return $this;
    }

    /**
     * Get currentTeam
     *
     * @return string
     */
    public function getCurrentTeam()
    {
        return $this->currentTeam;
    }

    /**
     * Set collegeDraftTeam
     *
     * @param string $collegeDraftTeam
     *
     * @return Player
     */
    public function setCollegeDraftTeam( $collegeDraftTeam )
    {
        $this->collegeDraftTeam = $collegeDraftTeam;

        return $this;
    }

    /**
     * Get collegeDraftTeam
     *
     * @return string
     */
    public function getCollegeDraftTeam()
    {
        return $this->collegeDraftTeam;
    }

    /**
     * Set collegeDraftYear
     *
     * @param integer $collegeDraftYear
     *
     * @return Player
     */
    public function setCollegeDraftYear( $collegeDraftYear )
    {
        $this->collegeDraftYear = $collegeDraftYear;

        return $this;
    }

    /**
     * Get collegeDraftYear
     *
     * @return integer
     */
    public function getCollegeDraftYear()
    {
        return $this->collegeDraftYear;
    }

    /**
     * Set collegeDraftRound
     *
     * @param integer $collegeDraftRound
     *
     * @return Player
     */
    public function setCollegeDraftRound( $collegeDraftRound )
    {
        $this->collegeDraftRound = $collegeDraftRound;

        return $this;
    }

    /**
     * Get collegeDraftRound
     *
     * @return integer
     */
    public function getCollegeDraftRound()
    {
        return $this->collegeDraftRound;
    }

    /**
     * Set collegeDraftPick
     *
     * @param integer $collegeDraftPick
     *
     * @return Player
     */
    public function setCollegeDraftPick( $collegeDraftPick )
    {
        $this->collegeDraftPick = $collegeDraftPick;

        return $this;
    }

    /**
     * Get collegeDraftPick
     *
     * @return integer
     */
    public function getCollegeDraftPick()
    {
        return $this->collegeDraftPick;
    }

    /**
     * Set isUndraftedFreeAgent
     *
     * @param boolean $isUndraftedFreeAgent
     *
     * @return Player
     */
    public function setIsUndraftedFreeAgent( $isUndraftedFreeAgent )
    {
        $this->isUndraftedFreeAgent = $isUndraftedFreeAgent;

        return $this;
    }

    /**
     * Get isUndraftedFreeAgent
     *
     * @return boolean
     */
    public function getIsUndraftedFreeAgent()
    {
        return $this->isUndraftedFreeAgent;
    }

    /**
     * Set heightFeet
     *
     * @param integer $heightFeet
     *
     * @return Player
     */
    public function setHeightFeet( $heightFeet )
    {
        $this->heightFeet = $heightFeet;

        return $this;
    }

    /**
     * Get heightFeet
     *
     * @return integer
     */
    public function getHeightFeet()
    {
        return $this->heightFeet;
    }

    /**
     * Set heightInches
     *
     * @param integer $heightInches
     *
     * @return Player
     */
    public function setHeightInches( $heightInches )
    {
        $this->heightInches = $heightInches;

        return $this;
    }

    /**
     * Get heightInches
     *
     * @return integer
     */
    public function getHeightInches()
    {
        return $this->heightInches;
    }

    /**
     * Set upcomingOpponentRank
     *
     * @param integer $upcomingOpponentRank
     *
     * @return Player
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
     * @param integer $upcomingOpponentPositionRank
     *
     * @return Player
     */
    public function setUpcomingOpponentPositionRank( $upcomingOpponentPositionRank )
    {
        $this->upcomingOpponentPositionRank = $upcomingOpponentPositionRank;

        return $this;
    }

    /**
     * Get upcomingOpponentPositionRank
     *
     * @return integer
     */
    public function getUpcomingOpponentPositionRank()
    {
        return $this->upcomingOpponentPositionRank;
    }

    /**
     * Set currentStatus
     *
     * @param string $currentStatus
     *
     * @return Player
     */
    public function setCurrentStatus( $currentStatus )
    {
        $this->currentStatus = $currentStatus;

        return $this;
    }

    /**
     * Get currentStatus
     *
     * @return string
     */
    public function getCurrentStatus()
    {
        return $this->currentStatus;
    }

    /**
     * Set upcomingSalary
     *
     * @param integer $upcomingSalary
     *
     * @return Player
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

    /**
     * @return mixed
     */
    public function getDailyFantasyPlayers()
    {
        return $this->dailyFantasyPlayers;
    }

    /**
     * @param DailyFantasyPlayer $dailyFantasyPlayers
     *
     */
    public function setDailyFantasyPlayers( DailyFantasyPlayer $dailyFantasyPlayers = null)
    {
        $this->dailyFantasyPlayers = $dailyFantasyPlayers;
    }

    /**
     * @param DailyFantasyPlayer $dailyFantasyPlayers
     *
     * @return ArrayCollection
     *
     */
    public function addDailyFantasyPlayers(DailyFantasyPlayer $dailyFantasyPlayers = null)
    {
        if(! $this->dailyFantasyPlayers->contains($dailyFantasyPlayers)){
            $this->dailyFantasyPlayers->add($dailyFantasyPlayers);
        }

        return $this->dailyFantasyPlayers;
    }

    /**
     * @param DailyFantasyPlayer $dailyFantasyPlayers
     *
     * @return ArrayCollection
     *
     */
    public function removeDailyFantasyPlayers(DailyFantasyPlayer $dailyFantasyPlayers)
    {
        if($this->dailyFantasyPlayers->contains($dailyFantasyPlayers)){
            $this->dailyFantasyPlayers->removeElement($dailyFantasyPlayers);
        }

        return $this->dailyFantasyPlayers;
    }
}
