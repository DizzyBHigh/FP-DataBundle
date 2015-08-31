<?php

namespace FantasyPro\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Injury
 *
 * @ORM\Table(name="fp_injury")
 * @ORM\Entity(repositoryClass="FantasyPro\DataBundle\Entity\InjuryRepository")
 */
class Injury
{
    /**
     * @var integer
     *
     * @ORM\Column(type="integer", length=32, name="injuryID")
     * @ORM\Id
     */
    private $injuryID;

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
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, name="playerID")
     */
    private $playerID;

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
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="number")
     */
    private $number;

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
     * @ORM\Column(type="string", length=50, nullable=true, name="bodyPart")
     */
    private $bodyPart;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="status")
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="practice")
     */
    private $practice;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="practiceDescription")
     */
    private $practiceDescription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=false, name="updated")
     */
    private $updated;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true, name="declaredInactive")
     */
    private $declaredInactive;


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
     * Set injuryID
     *
     * @param integer $injuryID
     *
     * @return Injury
     */
    public function setInjuryID( $injuryID )
    {
        $this->injuryID = $injuryID;

        return $this;
    }

    /**
     * Get injuryID
     *
     * @return integer
     */
    public function getInjuryID()
    {
        return $this->injuryID;
    }

    /**
     * Set seasonType
     *
     * @param integer $seasonType
     *
     * @return Injury
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
     * @return Injury
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
     * @return Injury
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
     * Set playerID
     *
     * @param integer $playerID
     *
     * @return Injury
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
     * Set name
     *
     * @param string $name
     *
     * @return Injury
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
     * @return Injury
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
     * Set number
     *
     * @param integer $number
     *
     * @return Injury
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
     * Set team
     *
     * @param string $team
     *
     * @return Injury
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
     * @return Injury
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
     * Set bodyPart
     *
     * @param string $bodyPart
     *
     * @return Injury
     */
    public function setBodyPart( $bodyPart )
    {
        $this->bodyPart = $bodyPart;

        return $this;
    }

    /**
     * Get bodyPart
     *
     * @return string
     */
    public function getBodyPart()
    {
        return $this->bodyPart;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Injury
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
     * Set practice
     *
     * @param string $practice
     *
     * @return Injury
     */
    public function setPractice( $practice )
    {
        $this->practice = $practice;

        return $this;
    }

    /**
     * Get practice
     *
     * @return string
     */
    public function getPractice()
    {
        return $this->practice;
    }

    /**
     * Set practiceDescription
     *
     * @param string $practiceDescription
     *
     * @return Injury
     */
    public function setPracticeDescription( $practiceDescription )
    {
        $this->practiceDescription = $practiceDescription;

        return $this;
    }

    /**
     * Get practiceDescription
     *
     * @return string
     */
    public function getPracticeDescription()
    {
        return $this->practiceDescription;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Injury
     */
    public function setUpdated( $updated )
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set declaredInactive
     *
     * @param boolean $declaredInactive
     *
     * @return Injury
     */
    public function setDeclaredInactive( $declaredInactive )
    {
        $this->declaredInactive = $declaredInactive;

        return $this;
    }

    /**
     * Get declaredInactive
     *
     * @return boolean
     */
    public function getDeclaredInactive()
    {
        return $this->declaredInactive;
    }
}

