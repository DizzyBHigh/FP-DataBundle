<?php

namespace FantasyPro\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ScoringDetail
 *
 * @ORM\Table(name="fp_scoringDetail")
 * @ORM\Entity(repositoryClass="FantasyPro\DataBundle\Entity\ScoringDetailRepository")
 */
class ScoringDetail
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
     * @ORM\Column(type="integer", nullable=true, name="playerID")
     */
    private $playerID;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="team")
     */
    private $team;

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
     * @ORM\Column(type="string", length=50, nullable=true, name="scoringType")
     */
    private $scoringType;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, name="length")
     */
    private $length;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", unique=true, nullable=false, name="scoringDetailID")
     */
    private $scoringDetailID;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, name="playerGameID")
     */
    private $playerGameID;


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
     * @return ScoringDetail
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
     * @return ScoringDetail
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
     * Set playerID
     *
     * @param integer $playerID
     *
     * @return ScoringDetail
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
     * Set team
     *
     * @param string $team
     *
     * @return ScoringDetail
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
     * Set season
     *
     * @param integer $season
     *
     * @return ScoringDetail
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
     * @return ScoringDetail
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
     * Set scoringType
     *
     * @param string $scoringType
     *
     * @return ScoringDetail
     */
    public function setScoringType( $scoringType )
    {
        $this->scoringType = $scoringType;

        return $this;
    }

    /**
     * Get scoringType
     *
     * @return string
     */
    public function getScoringType()
    {
        return $this->scoringType;
    }

    /**
     * Set length
     *
     * @param integer $length
     *
     * @return ScoringDetail
     */
    public function setLength( $length )
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get length
     *
     * @return integer
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set scoringDetailID
     *
     * @param integer $scoringDetailID
     *
     * @return ScoringDetail
     */
    public function setScoringDetailID( $scoringDetailID )
    {
        $this->scoringDetailID = $scoringDetailID;

        return $this;
    }

    /**
     * Get scoringDetailID
     *
     * @return integer
     */
    public function getScoringDetailID()
    {
        return $this->scoringDetailID;
    }

    /**
     * Set playerGameID
     *
     * @param integer $playerGameID
     *
     * @return ScoringDetail
     */
    public function setPlayerGameID( $playerGameID )
    {
        $this->playerGameID = $playerGameID;

        return $this;
    }

    /**
     * Get playerGameID
     *
     * @return integer
     */
    public function getPlayerGameID()
    {
        return $this->playerGameID;
    }
}

