<?php

namespace FantasyPro\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DailyFantasyPlayer
 *
 * @ORM\Table(name="fd_dailyFantasyplayer")
 * @ORM\Entity(repositoryClass="FantasyPro\DataBundle\Entity\DailyFantasyPlayerRepository")
 */
class DailyFantasyPlayer
{
    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(type="integer", name="id")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="dailyFantasyPlayers")
     * @ORM\JoinColumn(name="player")
     */
    private $player;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="date", nullable=true, name="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="shortName")
     */
    private $shortName;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="name")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=10, nullable=true, name="team")
     */
    private $team;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=10, nullable=true, name="opponent")
     */
    private $opponent;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=10, nullable=true, name="position")
     */
    private $position;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="salary")
     */
    private $salary;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="lastGameFantasyPoints")
     */
    private $lastGameFantasyPoints;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="projectedFantasyPoints")
     */
    private $projectedFantasyPoints;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentRank")
     */
    private $opponentRank;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="opponentPositionRank")
     */
    private $opponentPositionRank;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="status")
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="statusCode")
     */
    private $statusCode;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="statusColor")
     */
    private $statusColor;

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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return DailyFantasyPlayer
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
     * Set shortName
     *
     * @param string $shortName
     *
     * @return DailyFantasyPlayer
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
     * Set name
     *
     * @param string $name
     *
     * @return DailyFantasyPlayer
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
     * Set team
     *
     * @param string $team
     *
     * @return DailyFantasyPlayer
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
     * @return DailyFantasyPlayer
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
     * Set position
     *
     * @param string $position
     *
     * @return DailyFantasyPlayer
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
     * Set salary
     *
     * @param integer $salary
     *
     * @return DailyFantasyPlayer
     */
    public function setSalary( $salary )
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Get salary
     *
     * @return integer
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set lastGameFantasyPoints
     *
     * @param string $lastGameFantasyPoints
     *
     * @return DailyFantasyPlayer
     */
    public function setLastGameFantasyPoints( $lastGameFantasyPoints )
    {
        $this->lastGameFantasyPoints = $lastGameFantasyPoints;

        return $this;
    }

    /**
     * Get lastGameFantasyPoints
     *
     * @return string
     */
    public function getLastGameFantasyPoints()
    {
        return $this->lastGameFantasyPoints;
    }

    /**
     * Set projectedFantasyPoints
     *
     * @param string $projectedFantasyPoints
     *
     * @return DailyFantasyPlayer
     */
    public function setProjectedFantasyPoints( $projectedFantasyPoints )
    {
        $this->projectedFantasyPoints = $projectedFantasyPoints;

        return $this;
    }

    /**
     * Get projectedFantasyPoints
     *
     * @return string
     */
    public function getProjectedFantasyPoints()
    {
        return $this->projectedFantasyPoints;
    }

    /**
     * Set opponentRank
     *
     * @param integer $opponentRank
     *
     * @return DailyFantasyPlayer
     */
    public function setOpponentRank( $opponentRank )
    {
        $this->opponentRank = $opponentRank;

        return $this;
    }

    /**
     * Get opponentRank
     *
     * @return integer
     */
    public function getOpponentRank()
    {
        return $this->opponentRank;
    }

    /**
     * @return int
     */
    public function getOpponentPositionRank()
    {
        return $this->opponentPositionRank;
    }

    /**
     * @param int $opponentPositionRank
     */
    public function setOpponentPositionRank( $opponentPositionRank )
    {
        $this->opponentPositionRank = $opponentPositionRank;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return DailyFantasyPlayer
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
     * Set statusCode
     *
     * @param string $statusCode
     *
     * @return DailyFantasyPlayer
     */
    public function setStatusCode( $statusCode )
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * Get statusCode
     *
     * @return string
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Set statusColor
     *
     * @param string $statusColor
     *
     * @return DailyFantasyPlayer
     */
    public function setStatusColor( $statusColor )
    {
        $this->statusColor = $statusColor;

        return $this;
    }

    /**
     * Get statusColor
     *
     * @return string
     */
    public function getStatusColor()
    {
        return $this->statusColor;
    }

    /**
     * @return mixed
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * @param mixed $player
     */
    public function setPlayer( $player )
    {
        $this->player = $player;
    }


}

