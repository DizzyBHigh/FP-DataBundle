<?php

namespace FantasyPro\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FantasyDefenseGame
 *
 * @ORM\Table(name="fp_fantasyDefenseGame")
 * @ORM\Entity(repositoryClass="FantasyPro\DataBundle\Entity\FantasyDefenseGameRepository")
 */
class FantasyDefenseGame
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
     * @ORM\Column(type="string", length=20, nullable=false, name="gameKey")
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
     * @ORM\Column(type="integer", nullable=true, name="season")
     */
    private $season;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="week")
     */
    private $week;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true, name="date")
     */
    private $date;

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
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="pointsAllowed")
     */
    private $pointsAllowed;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="touchdownsScored")
     */
    private $touchdownsScored;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="soloTackles")
     */
    private $soloTackles;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="assistedTackles")
     */
    private $assistedTackles;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="sacks")
     */
    private $sacks;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="sackYards")
     */
    private $sackYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="passesDefended")
     */
    private $passesDefended;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="fumblesForced")
     */
    private $fumblesForced;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="fumblesRecovered")
     */
    private $fumblesRecovered;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="fumbleReturnYards")
     */
    private $fumbleReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="fumbleReturnTouchdowns")
     */
    private $fumbleReturnTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="interceptions")
     */
    private $interceptions;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="interceptionReturnYards")
     */
    private $interceptionReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="interceptionReturnTouchdowns")
     */
    private $interceptionReturnTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="blockedKicks")
     */
    private $blockedKicks;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="safeties")
     */
    private $safeties;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="puntReturns")
     */
    private $puntReturns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="puntReturnYards")
     */
    private $puntReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="puntReturnTouchdowns")
     */
    private $puntReturnTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="puntReturnLong")
     */
    private $puntReturnLong;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="kickReturns")
     */
    private $kickReturns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="kickReturnYards")
     */
    private $kickReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="kickReturnTouchdowns")
     */
    private $kickReturnTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="kickReturnLong")
     */
    private $kickReturnLong;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="blockedKickReturnTouchdowns")
     */
    private $blockedKickReturnTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="fieldGoalReturnTouchdowns")
     */
    private $fieldGoalReturnTouchdowns;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="fantasyPointsAllowed")
     */
    private $fantasyPointsAllowed;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="quarterbackFantasyPointsAllowed")
     */
    private $quarterbackFantasyPointsAllowed;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="runningbackFantasyPointsAllowed")
     */
    private $runningbackFantasyPointsAllowed;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="wideReceiverFantasyPointsAllowed")
     */
    private $wideReceiverFantasyPointsAllowed;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="tightEndFantasyPointsAllowed")
     */
    private $tightEndFantasyPointsAllowed;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="kickerFantasyPointsAllowed")
     */
    private $kickerFantasyPointsAllowed;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="blockedKickReturnYards")
     */
    private $blockedKickReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="fieldGoalReturnYards")
     */
    private $fieldGoalReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="quarterbackHits")
     */
    private $quarterbackHits;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="tacklesForLoss")
     */
    private $tacklesForLoss;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="defensiveTouchdowns")
     */
    private $defensiveTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="specialTeamsTouchdowns")
     */
    private $specialTeamsTouchdowns;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true, name="isGameOver")
     */
    private $isGameOver;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="fantasyPoints")
     */
    private $fantasyPoints;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="stadium")
     */
    private $stadium;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="temperature")
     */
    private $temperature;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="humidity")
     */
    private $humidity;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="windSpeed")
     */
    private $windSpeed;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="thirdDownAttempts")
     */
    private $thirdDownAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="thirdDownConversions")
     */
    private $thirdDownConversions;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="fourthDownAttempts")
     */
    private $fourthDownAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="fourthDownConversions")
     */
    private $fourthDownConversions;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="pointsAllowedByDefenseSpecialTeams")
     */
    private $pointsAllowedByDefenseSpecialTeams;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="fanDuelSalary")
     */
    private $fanDuelSalary;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="draftKingsSalary")
     */
    private $draftKingsSalary;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="fantasyDataSalary")
     */
    private $fantasyDataSalary;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="victivSalary")
     */
    private $victivSalary;

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
     * @return FantasyDefenseGame
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
    public function getGameID()
    {
        return $this->gameKey;
    }

    /**
     * Set seasonType
     *
     * @param integer $seasonType
     *
     * @return FantasyDefenseGame
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
     * @return FantasyDefenseGame
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
     * @return FantasyDefenseGame
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
     * @return FantasyDefenseGame
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
     * Set team
     *
     * @param string $team
     *
     * @return FantasyDefenseGame
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
     * @return FantasyDefenseGame
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
     * Set pointsAllowed
     *
     * @param integer $pointsAllowed
     *
     * @return FantasyDefenseGame
     */
    public function setPointsAllowed( $pointsAllowed )
    {
        $this->pointsAllowed = $pointsAllowed;

        return $this;
    }

    /**
     * Get pointsAllowed
     *
     * @return integer
     */
    public function getPointsAllowed()
    {
        return $this->pointsAllowed;
    }

    /**
     * Set touchdownsScored
     *
     * @param integer $touchdownsScored
     *
     * @return FantasyDefenseGame
     */
    public function setTouchdownsScored( $touchdownsScored )
    {
        $this->touchdownsScored = $touchdownsScored;

        return $this;
    }

    /**
     * Get touchdownsScored
     *
     * @return integer
     */
    public function getTouchdownsScored()
    {
        return $this->touchdownsScored;
    }

    /**
     * Set soloTackles
     *
     * @param integer $soloTackles
     *
     * @return FantasyDefenseGame
     */
    public function setSoloTackles( $soloTackles )
    {
        $this->soloTackles = $soloTackles;

        return $this;
    }

    /**
     * Get soloTackles
     *
     * @return integer
     */
    public function getSoloTackles()
    {
        return $this->soloTackles;
    }

    /**
     * Set assistedTackles
     *
     * @param integer $assistedTackles
     *
     * @return FantasyDefenseGame
     */
    public function setAssistedTackles( $assistedTackles )
    {
        $this->assistedTackles = $assistedTackles;

        return $this;
    }

    /**
     * Get assistedTackles
     *
     * @return integer
     */
    public function getAssistedTackles()
    {
        return $this->assistedTackles;
    }

    /**
     * Set sacks
     *
     * @param integer $sacks
     *
     * @return FantasyDefenseGame
     */
    public function setSacks( $sacks )
    {
        $this->sacks = $sacks;

        return $this;
    }

    /**
     * Get sacks
     *
     * @return integer
     */
    public function getSacks()
    {
        return $this->sacks;
    }

    /**
     * Set sackYards
     *
     * @param integer $sackYards
     *
     * @return FantasyDefenseGame
     */
    public function setSackYards( $sackYards )
    {
        $this->sackYards = $sackYards;

        return $this;
    }

    /**
     * Get sackYards
     *
     * @return integer
     */
    public function getSackYards()
    {
        return $this->sackYards;
    }

    /**
     * Set passesDefended
     *
     * @param integer $passesDefended
     *
     * @return FantasyDefenseGame
     */
    public function setPassesDefended( $passesDefended )
    {
        $this->passesDefended = $passesDefended;

        return $this;
    }

    /**
     * Get passesDefended
     *
     * @return integer
     */
    public function getPassesDefended()
    {
        return $this->passesDefended;
    }

    /**
     * Set fumblesForced
     *
     * @param integer $fumblesForced
     *
     * @return FantasyDefenseGame
     */
    public function setFumblesForced( $fumblesForced )
    {
        $this->fumblesForced = $fumblesForced;

        return $this;
    }

    /**
     * Get fumblesForced
     *
     * @return integer
     */
    public function getFumblesForced()
    {
        return $this->fumblesForced;
    }

    /**
     * Set fumblesRecovered
     *
     * @param integer $fumblesRecovered
     *
     * @return FantasyDefenseGame
     */
    public function setFumblesRecovered( $fumblesRecovered )
    {
        $this->fumblesRecovered = $fumblesRecovered;

        return $this;
    }

    /**
     * Get fumblesRecovered
     *
     * @return integer
     */
    public function getFumblesRecovered()
    {
        return $this->fumblesRecovered;
    }

    /**
     * Set fumbleReturnYards
     *
     * @param integer $fumbleReturnYards
     *
     * @return FantasyDefenseGame
     */
    public function setFumbleReturnYards( $fumbleReturnYards )
    {
        $this->fumbleReturnYards = $fumbleReturnYards;

        return $this;
    }

    /**
     * Get fumbleReturnYards
     *
     * @return integer
     */
    public function getFumbleReturnYards()
    {
        return $this->fumbleReturnYards;
    }

    /**
     * Set fumbleReturnTouchdowns
     *
     * @param integer $fumbleReturnTouchdowns
     *
     * @return FantasyDefenseGame
     */
    public function setFumbleReturnTouchdowns( $fumbleReturnTouchdowns )
    {
        $this->fumbleReturnTouchdowns = $fumbleReturnTouchdowns;

        return $this;
    }

    /**
     * Get fumbleReturnTouchdowns
     *
     * @return integer
     */
    public function getFumbleReturnTouchdowns()
    {
        return $this->fumbleReturnTouchdowns;
    }

    /**
     * Set interceptions
     *
     * @param integer $interceptions
     *
     * @return FantasyDefenseGame
     */
    public function setInterceptions( $interceptions )
    {
        $this->interceptions = $interceptions;

        return $this;
    }

    /**
     * Get interceptions
     *
     * @return integer
     */
    public function getInterceptions()
    {
        return $this->interceptions;
    }

    /**
     * Set interceptionReturnYards
     *
     * @param integer $interceptionReturnYards
     *
     * @return FantasyDefenseGame
     */
    public function setInterceptionReturnYards( $interceptionReturnYards )
    {
        $this->interceptionReturnYards = $interceptionReturnYards;

        return $this;
    }

    /**
     * Get interceptionReturnYards
     *
     * @return integer
     */
    public function getInterceptionReturnYards()
    {
        return $this->interceptionReturnYards;
    }

    /**
     * Set interceptionReturnTouchdowns
     *
     * @param integer $interceptionReturnTouchdowns
     *
     * @return FantasyDefenseGame
     */
    public function setInterceptionReturnTouchdowns( $interceptionReturnTouchdowns )
    {
        $this->interceptionReturnTouchdowns = $interceptionReturnTouchdowns;

        return $this;
    }

    /**
     * Get interceptionReturnTouchdowns
     *
     * @return integer
     */
    public function getInterceptionReturnTouchdowns()
    {
        return $this->interceptionReturnTouchdowns;
    }

    /**
     * Set blockedKicks
     *
     * @param integer $blockedKicks
     *
     * @return FantasyDefenseGame
     */
    public function setBlockedKicks( $blockedKicks )
    {
        $this->blockedKicks = $blockedKicks;

        return $this;
    }

    /**
     * Get blockedKicks
     *
     * @return integer
     */
    public function getBlockedKicks()
    {
        return $this->blockedKicks;
    }

    /**
     * Set safeties
     *
     * @param integer $safeties
     *
     * @return FantasyDefenseGame
     */
    public function setSafeties( $safeties )
    {
        $this->safeties = $safeties;

        return $this;
    }

    /**
     * Get safeties
     *
     * @return integer
     */
    public function getSafeties()
    {
        return $this->safeties;
    }

    /**
     * Set puntReturns
     *
     * @param integer $puntReturns
     *
     * @return FantasyDefenseGame
     */
    public function setPuntReturns( $puntReturns )
    {
        $this->puntReturns = $puntReturns;

        return $this;
    }

    /**
     * Get puntReturns
     *
     * @return integer
     */
    public function getPuntReturns()
    {
        return $this->puntReturns;
    }

    /**
     * Set puntReturnYards
     *
     * @param integer $puntReturnYards
     *
     * @return FantasyDefenseGame
     */
    public function setPuntReturnYards( $puntReturnYards )
    {
        $this->puntReturnYards = $puntReturnYards;

        return $this;
    }

    /**
     * Get puntReturnYards
     *
     * @return integer
     */
    public function getPuntReturnYards()
    {
        return $this->puntReturnYards;
    }

    /**
     * Set puntReturnTouchdowns
     *
     * @param integer $puntReturnTouchdowns
     *
     * @return FantasyDefenseGame
     */
    public function setPuntReturnTouchdowns( $puntReturnTouchdowns )
    {
        $this->puntReturnTouchdowns = $puntReturnTouchdowns;

        return $this;
    }

    /**
     * Get puntReturnTouchdowns
     *
     * @return integer
     */
    public function getPuntReturnTouchdowns()
    {
        return $this->puntReturnTouchdowns;
    }

    /**
     * Set puntReturnLong
     *
     * @param integer $puntReturnLong
     *
     * @return FantasyDefenseGame
     */
    public function setPuntReturnLong( $puntReturnLong )
    {
        $this->puntReturnLong = $puntReturnLong;

        return $this;
    }

    /**
     * Get puntReturnLong
     *
     * @return integer
     */
    public function getPuntReturnLong()
    {
        return $this->puntReturnLong;
    }

    /**
     * Set kickReturns
     *
     * @param integer $kickReturns
     *
     * @return FantasyDefenseGame
     */
    public function setKickReturns( $kickReturns )
    {
        $this->kickReturns = $kickReturns;

        return $this;
    }

    /**
     * Get kickReturns
     *
     * @return integer
     */
    public function getKickReturns()
    {
        return $this->kickReturns;
    }

    /**
     * Set kickReturnYards
     *
     * @param integer $kickReturnYards
     *
     * @return FantasyDefenseGame
     */
    public function setKickReturnYards( $kickReturnYards )
    {
        $this->kickReturnYards = $kickReturnYards;

        return $this;
    }

    /**
     * Get kickReturnYards
     *
     * @return integer
     */
    public function getKickReturnYards()
    {
        return $this->kickReturnYards;
    }

    /**
     * Set kickReturnTouchdowns
     *
     * @param integer $kickReturnTouchdowns
     *
     * @return FantasyDefenseGame
     */
    public function setKickReturnTouchdowns( $kickReturnTouchdowns )
    {
        $this->kickReturnTouchdowns = $kickReturnTouchdowns;

        return $this;
    }

    /**
     * Get kickReturnTouchdowns
     *
     * @return integer
     */
    public function getKickReturnTouchdowns()
    {
        return $this->kickReturnTouchdowns;
    }

    /**
     * Set kickReturnLong
     *
     * @param integer $kickReturnLong
     *
     * @return FantasyDefenseGame
     */
    public function setKickReturnLong( $kickReturnLong )
    {
        $this->kickReturnLong = $kickReturnLong;

        return $this;
    }

    /**
     * Get kickReturnLong
     *
     * @return integer
     */
    public function getKickReturnLong()
    {
        return $this->kickReturnLong;
    }

    /**
     * Set blockedKickReturnTouchdowns
     *
     * @param integer $blockedKickReturnTouchdowns
     *
     * @return FantasyDefenseGame
     */
    public function setBlockedKickReturnTouchdowns( $blockedKickReturnTouchdowns )
    {
        $this->blockedKickReturnTouchdowns = $blockedKickReturnTouchdowns;

        return $this;
    }

    /**
     * Get blockedKickReturnTouchdowns
     *
     * @return integer
     */
    public function getBlockedKickReturnTouchdowns()
    {
        return $this->blockedKickReturnTouchdowns;
    }

    /**
     * Set fieldGoalReturnTouchdowns
     *
     * @param integer $fieldGoalReturnTouchdowns
     *
     * @return FantasyDefenseGame
     */
    public function setFieldGoalReturnTouchdowns( $fieldGoalReturnTouchdowns )
    {
        $this->fieldGoalReturnTouchdowns = $fieldGoalReturnTouchdowns;

        return $this;
    }

    /**
     * Get fieldGoalReturnTouchdowns
     *
     * @return integer
     */
    public function getFieldGoalReturnTouchdowns()
    {
        return $this->fieldGoalReturnTouchdowns;
    }

    /**
     * Set fantasyPointsAllowed
     *
     * @param string $fantasyPointsAllowed
     *
     * @return FantasyDefenseGame
     */
    public function setFantasyPointsAllowed( $fantasyPointsAllowed )
    {
        $this->fantasyPointsAllowed = $fantasyPointsAllowed;

        return $this;
    }

    /**
     * Get fantasyPointsAllowed
     *
     * @return string
     */
    public function getFantasyPointsAllowed()
    {
        return $this->fantasyPointsAllowed;
    }

    /**
     * Set quarterbackFantasyPointsAllowed
     *
     * @param string $quarterbackFantasyPointsAllowed
     *
     * @return FantasyDefenseGame
     */
    public function setQuarterbackFantasyPointsAllowed( $quarterbackFantasyPointsAllowed )
    {
        $this->quarterbackFantasyPointsAllowed = $quarterbackFantasyPointsAllowed;

        return $this;
    }

    /**
     * Get quarterbackFantasyPointsAllowed
     *
     * @return string
     */
    public function getQuarterbackFantasyPointsAllowed()
    {
        return $this->quarterbackFantasyPointsAllowed;
    }

    /**
     * Set runningbackFantasyPointsAllowed
     *
     * @param string $runningbackFantasyPointsAllowed
     *
     * @return FantasyDefenseGame
     */
    public function setRunningbackFantasyPointsAllowed( $runningbackFantasyPointsAllowed )
    {
        $this->runningbackFantasyPointsAllowed = $runningbackFantasyPointsAllowed;

        return $this;
    }

    /**
     * Get runningbackFantasyPointsAllowed
     *
     * @return string
     */
    public function getRunningbackFantasyPointsAllowed()
    {
        return $this->runningbackFantasyPointsAllowed;
    }

    /**
     * Set wideReceiverFantasyPointsAllowed
     *
     * @param string $wideReceiverFantasyPointsAllowed
     *
     * @return FantasyDefenseGame
     */
    public function setWideReceiverFantasyPointsAllowed( $wideReceiverFantasyPointsAllowed )
    {
        $this->wideReceiverFantasyPointsAllowed = $wideReceiverFantasyPointsAllowed;

        return $this;
    }

    /**
     * Get wideReceiverFantasyPointsAllowed
     *
     * @return string
     */
    public function getWideReceiverFantasyPointsAllowed()
    {
        return $this->wideReceiverFantasyPointsAllowed;
    }

    /**
     * Set tightEndFantasyPointsAllowed
     *
     * @param string $tightEndFantasyPointsAllowed
     *
     * @return FantasyDefenseGame
     */
    public function setTightEndFantasyPointsAllowed( $tightEndFantasyPointsAllowed )
    {
        $this->tightEndFantasyPointsAllowed = $tightEndFantasyPointsAllowed;

        return $this;
    }

    /**
     * Get tightEndFantasyPointsAllowed
     *
     * @return string
     */
    public function getTightEndFantasyPointsAllowed()
    {
        return $this->tightEndFantasyPointsAllowed;
    }

    /**
     * Set kickerFantasyPointsAllowed
     *
     * @param string $kickerFantasyPointsAllowed
     *
     * @return FantasyDefenseGame
     */
    public function setKickerFantasyPointsAllowed( $kickerFantasyPointsAllowed )
    {
        $this->kickerFantasyPointsAllowed = $kickerFantasyPointsAllowed;

        return $this;
    }

    /**
     * Get kickerFantasyPointsAllowed
     *
     * @return string
     */
    public function getKickerFantasyPointsAllowed()
    {
        return $this->kickerFantasyPointsAllowed;
    }

    /**
     * Set blockedKickReturnYards
     *
     * @param integer $blockedKickReturnYards
     *
     * @return FantasyDefenseGame
     */
    public function setBlockedKickReturnYards( $blockedKickReturnYards )
    {
        $this->blockedKickReturnYards = $blockedKickReturnYards;

        return $this;
    }

    /**
     * Get blockedKickReturnYards
     *
     * @return integer
     */
    public function getBlockedKickReturnYards()
    {
        return $this->blockedKickReturnYards;
    }

    /**
     * Set fieldGoalReturnYards
     *
     * @param integer $fieldGoalReturnYards
     *
     * @return FantasyDefenseGame
     */
    public function setFieldGoalReturnYards( $fieldGoalReturnYards )
    {
        $this->fieldGoalReturnYards = $fieldGoalReturnYards;

        return $this;
    }

    /**
     * Get fieldGoalReturnYards
     *
     * @return integer
     */
    public function getFieldGoalReturnYards()
    {
        return $this->fieldGoalReturnYards;
    }

    /**
     * Set quarterbackHits
     *
     * @param integer $quarterbackHits
     *
     * @return FantasyDefenseGame
     */
    public function setQuarterbackHits( $quarterbackHits )
    {
        $this->quarterbackHits = $quarterbackHits;

        return $this;
    }

    /**
     * Get quarterbackHits
     *
     * @return integer
     */
    public function getQuarterbackHits()
    {
        return $this->quarterbackHits;
    }

    /**
     * Set tacklesForLoss
     *
     * @param integer $tacklesForLoss
     *
     * @return FantasyDefenseGame
     */
    public function setTacklesForLoss( $tacklesForLoss )
    {
        $this->tacklesForLoss = $tacklesForLoss;

        return $this;
    }

    /**
     * Get tacklesForLoss
     *
     * @return integer
     */
    public function getTacklesForLoss()
    {
        return $this->tacklesForLoss;
    }

    /**
     * Set defensiveTouchdowns
     *
     * @param integer $defensiveTouchdowns
     *
     * @return FantasyDefenseGame
     */
    public function setDefensiveTouchdowns( $defensiveTouchdowns )
    {
        $this->defensiveTouchdowns = $defensiveTouchdowns;

        return $this;
    }

    /**
     * Get defensiveTouchdowns
     *
     * @return integer
     */
    public function getDefensiveTouchdowns()
    {
        return $this->defensiveTouchdowns;
    }

    /**
     * Set specialTeamsTouchdowns
     *
     * @param integer $specialTeamsTouchdowns
     *
     * @return FantasyDefenseGame
     */
    public function setSpecialTeamsTouchdowns( $specialTeamsTouchdowns )
    {
        $this->specialTeamsTouchdowns = $specialTeamsTouchdowns;

        return $this;
    }

    /**
     * Get specialTeamsTouchdowns
     *
     * @return integer
     */
    public function getSpecialTeamsTouchdowns()
    {
        return $this->specialTeamsTouchdowns;
    }

    /**
     * Set isGameOver
     *
     * @param boolean $isGameOver
     *
     * @return FantasyDefenseGame
     */
    public function setIsGameOver( $isGameOver )
    {
        $this->isGameOver = $isGameOver;

        return $this;
    }

    /**
     * Get isGameOver
     *
     * @return boolean
     */
    public function getIsGameOver()
    {
        return $this->isGameOver;
    }

    /**
     * Set fantasyPoints
     *
     * @param string $fantasyPoints
     *
     * @return FantasyDefenseGame
     */
    public function setFantasyPoints( $fantasyPoints )
    {
        $this->fantasyPoints = $fantasyPoints;

        return $this;
    }

    /**
     * Get fantasyPoints
     *
     * @return string
     */
    public function getFantasyPoints()
    {
        return $this->fantasyPoints;
    }

    /**
     * Set stadium
     *
     * @param string $stadium
     *
     * @return FantasyDefenseGame
     */
    public function setStadium( $stadium )
    {
        $this->stadium = $stadium;

        return $this;
    }

    /**
     * Get stadium
     *
     * @return string
     */
    public function getStadium()
    {
        return $this->stadium;
    }

    /**
     * Set temperature
     *
     * @param integer $temperature
     *
     * @return FantasyDefenseGame
     */
    public function setTemperature( $temperature )
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get temperature
     *
     * @return integer
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Set humidity
     *
     * @param integer $humidity
     *
     * @return FantasyDefenseGame
     */
    public function setHumidity( $humidity )
    {
        $this->humidity = $humidity;

        return $this;
    }

    /**
     * Get humidity
     *
     * @return integer
     */
    public function getHumidity()
    {
        return $this->humidity;
    }

    /**
     * Set windSpeed
     *
     * @param integer $windSpeed
     *
     * @return FantasyDefenseGame
     */
    public function setWindSpeed( $windSpeed )
    {
        $this->windSpeed = $windSpeed;

        return $this;
    }

    /**
     * Get windSpeed
     *
     * @return integer
     */
    public function getWindSpeed()
    {
        return $this->windSpeed;
    }

    /**
     * Set thirdDownAttempts
     *
     * @param integer $thirdDownAttempts
     *
     * @return FantasyDefenseGame
     */
    public function setThirdDownAttempts( $thirdDownAttempts )
    {
        $this->thirdDownAttempts = $thirdDownAttempts;

        return $this;
    }

    /**
     * Get thirdDownAttempts
     *
     * @return integer
     */
    public function getThirdDownAttempts()
    {
        return $this->thirdDownAttempts;
    }

    /**
     * Set thirdDownConversions
     *
     * @param integer $thirdDownConversions
     *
     * @return FantasyDefenseGame
     */
    public function setThirdDownConversions( $thirdDownConversions )
    {
        $this->thirdDownConversions = $thirdDownConversions;

        return $this;
    }

    /**
     * Get thirdDownConversions
     *
     * @return integer
     */
    public function getThirdDownConversions()
    {
        return $this->thirdDownConversions;
    }

    /**
     * Set fourthDownAttempts
     *
     * @param integer $fourthDownAttempts
     *
     * @return FantasyDefenseGame
     */
    public function setFourthDownAttempts( $fourthDownAttempts )
    {
        $this->fourthDownAttempts = $fourthDownAttempts;

        return $this;
    }

    /**
     * Get fourthDownAttempts
     *
     * @return integer
     */
    public function getFourthDownAttempts()
    {
        return $this->fourthDownAttempts;
    }

    /**
     * Set fourthDownConversions
     *
     * @param integer $fourthDownConversions
     *
     * @return FantasyDefenseGame
     */
    public function setFourthDownConversions( $fourthDownConversions )
    {
        $this->fourthDownConversions = $fourthDownConversions;

        return $this;
    }

    /**
     * Get fourthDownConversions
     *
     * @return integer
     */
    public function getFourthDownConversions()
    {
        return $this->fourthDownConversions;
    }

    /**
     * Set pointsAllowedByDefenseSpecialTeams
     *
     * @param integer $pointsAllowedByDefenseSpecialTeams
     *
     * @return FantasyDefenseGame
     */
    public function setPointsAllowedByDefenseSpecialTeams( $pointsAllowedByDefenseSpecialTeams )
    {
        $this->pointsAllowedByDefenseSpecialTeams = $pointsAllowedByDefenseSpecialTeams;

        return $this;
    }

    /**
     * Get pointsAllowedByDefenseSpecialTeams
     *
     * @return integer
     */
    public function getPointsAllowedByDefenseSpecialTeams()
    {
        return $this->pointsAllowedByDefenseSpecialTeams;
    }

    /**
     * Set fanDuelSalary
     *
     * @param integer $fanDuelSalary
     *
     * @return FantasyDefenseGame
     */
    public function setFanDuelSalary( $fanDuelSalary )
    {
        $this->fanDuelSalary = $fanDuelSalary;

        return $this;
    }

    /**
     * Get fanDuelSalary
     *
     * @return integer
     */
    public function getFanDuelSalary()
    {
        return $this->fanDuelSalary;
    }

    /**
     * Set draftKingsSalary
     *
     * @param integer $draftKingsSalary
     *
     * @return FantasyDefenseGame
     */
    public function setDraftKingsSalary( $draftKingsSalary )
    {
        $this->draftKingsSalary = $draftKingsSalary;

        return $this;
    }

    /**
     * Get draftKingsSalary
     *
     * @return integer
     */
    public function getDraftKingsSalary()
    {
        return $this->draftKingsSalary;
    }

    /**
     * Set fantasyDataSalary
     *
     * @param integer $fantasyDataSalary
     *
     * @return FantasyDefenseGame
     */
    public function setFantasyDataSalary( $fantasyDataSalary )
    {
        $this->fantasyDataSalary = $fantasyDataSalary;

        return $this;
    }

    /**
     * Get fantasyDataSalary
     *
     * @return integer
     */
    public function getFantasyDataSalary()
    {
        return $this->fantasyDataSalary;
    }

    /**
     * @return int
     */
    public function getVictivSalary()
    {
        return $this->victivSalary;
    }

    /**
     * @param int $victivSalary
     */
    public function setVictivSalary( $victivSalary )
    {
        $this->victivSalary = $victivSalary;
    }
}

