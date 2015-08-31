<?php

namespace FantasyPro\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FantasyDefenseSeason
 *
 * @ORM\Table(name="fp_fantasyDefenseSeason")
 * @ORM\Entity(repositoryClass="FantasyPro\DataBundle\Entity\FantasyDefenseSeasonRepository")
 */
class FantasyDefenseSeason
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
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="team")
     */
    private $team;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, name="pointsAllowed")
     */
    private $pointsAllowed;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, name="touchdownsScored")
     */
    private $touchdownsScored;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, name="soloTackles")
     */
    private $soloTackles;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, name="assistedTackles")
     */
    private $assistedTackles;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, name="sacks")
     */
    private $sacks;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, name="sackYards")
     */
    private $sackYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, name="passesDefended")
     */
    private $passesDefended;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, name="fumblesForced")
     */
    private $fumblesForced;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, name="fumblesRecovered")
     */
    private $fumblesRecovered;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, name="fumbleReturnYards")
     */
    private $fumbleReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, name="fumbleReturnTouchdowns")
     */
    private $fumbleReturnTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, name="interceptions")
     */
    private $interceptions;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, name="interceptionReturnYards")
     */
    private $interceptionReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, name="interceptionReturnTouchdowns")
     */
    private $interceptionReturnTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, name="blockedKicks")
     */
    private $blockedKicks;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, name="safeties")
     */
    private $safeties;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, name="puntReturns")
     */
    private $puntReturns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, name="puntReturnYards")
     */
    private $puntReturnYards;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, name="puntReturnTouchdowns")
     */
    private $puntReturnTouchdowns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, name="puntReturnLong")
     */
    private $puntReturnLong;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, name="kickReturns")
     */
    private $kickReturns;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, name="kickReturnYards")
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
     * @ORM\Column(type="integer", nullable=false, name="kickReturnLong")
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
     * @var string
     *
     * @ORM\Column(type="integer", nullable=true, name="games")
     */
    private $games;

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
     * @var string
     *
     * @ORM\Column(type="decimal", nullable=true, name="fantasyPoints")
     */
    private $fantasyPoints;

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
     * @ORM\Column(type="integer", nullable=true, name="auctionvalue")
     */
    private $auctionValue;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="auctionvalueppr")
     */
    private $auctionValuePPR;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId( $id )
    {
        $this->id = $id;
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
    public function getPointsAllowed()
    {
        return $this->pointsAllowed;
    }

    /**
     * @param int $pointsAllowed
     */
    public function setPointsAllowed( $pointsAllowed )
    {
        $this->pointsAllowed = $pointsAllowed;
    }

    /**
     * @return int
     */
    public function getTouchdownsScored()
    {
        return $this->touchdownsScored;
    }

    /**
     * @param int $touchdownsScored
     */
    public function setTouchdownsScored( $touchdownsScored )
    {
        $this->touchdownsScored = $touchdownsScored;
    }

    /**
     * @return int
     */
    public function getSoloTackles()
    {
        return $this->soloTackles;
    }

    /**
     * @param int $soloTackles
     */
    public function setSoloTackles( $soloTackles )
    {
        $this->soloTackles = $soloTackles;
    }

    /**
     * @return int
     */
    public function getAssistedTackles()
    {
        return $this->assistedTackles;
    }

    /**
     * @param int $assistedTackles
     */
    public function setAssistedTackles( $assistedTackles )
    {
        $this->assistedTackles = $assistedTackles;
    }

    /**
     * @return int
     */
    public function getSacks()
    {
        return $this->sacks;
    }

    /**
     * @param int $sacks
     */
    public function setSacks( $sacks )
    {
        $this->sacks = $sacks;
    }

    /**
     * @return int
     */
    public function getSackYards()
    {
        return $this->sackYards;
    }

    /**
     * @param int $sackYards
     */
    public function setSackYards( $sackYards )
    {
        $this->sackYards = $sackYards;
    }

    /**
     * @return int
     */
    public function getPassesDefended()
    {
        return $this->passesDefended;
    }

    /**
     * @param int $passesDefended
     */
    public function setPassesDefended( $passesDefended )
    {
        $this->passesDefended = $passesDefended;
    }

    /**
     * @return int
     */
    public function getFumblesForced()
    {
        return $this->fumblesForced;
    }

    /**
     * @param int $fumblesForced
     */
    public function setFumblesForced( $fumblesForced )
    {
        $this->fumblesForced = $fumblesForced;
    }

    /**
     * @return int
     */
    public function getFumblesRecovered()
    {
        return $this->fumblesRecovered;
    }

    /**
     * @param int $fumblesRecovered
     */
    public function setFumblesRecovered( $fumblesRecovered )
    {
        $this->fumblesRecovered = $fumblesRecovered;
    }

    /**
     * @return int
     */
    public function getFumbleReturnYards()
    {
        return $this->fumbleReturnYards;
    }

    /**
     * @param int $fumbleReturnYards
     */
    public function setFumbleReturnYards( $fumbleReturnYards )
    {
        $this->fumbleReturnYards = $fumbleReturnYards;
    }

    /**
     * @return int
     */
    public function getFumbleReturnTouchdowns()
    {
        return $this->fumbleReturnTouchdowns;
    }

    /**
     * @param int $fumbleReturnTouchdowns
     */
    public function setFumbleReturnTouchdowns( $fumbleReturnTouchdowns )
    {
        $this->fumbleReturnTouchdowns = $fumbleReturnTouchdowns;
    }

    /**
     * @return int
     */
    public function getInterceptions()
    {
        return $this->interceptions;
    }

    /**
     * @param int $interceptions
     */
    public function setInterceptions( $interceptions )
    {
        $this->interceptions = $interceptions;
    }

    /**
     * @return int
     */
    public function getInterceptionReturnYards()
    {
        return $this->interceptionReturnYards;
    }

    /**
     * @param int $interceptionReturnYards
     */
    public function setInterceptionReturnYards( $interceptionReturnYards )
    {
        $this->interceptionReturnYards = $interceptionReturnYards;
    }

    /**
     * @return int
     */
    public function getInterceptionReturnTouchdowns()
    {
        return $this->interceptionReturnTouchdowns;
    }

    /**
     * @param int $interceptionReturnTouchdowns
     */
    public function setInterceptionReturnTouchdowns( $interceptionReturnTouchdowns )
    {
        $this->interceptionReturnTouchdowns = $interceptionReturnTouchdowns;
    }

    /**
     * @return int
     */
    public function getBlockedKicks()
    {
        return $this->blockedKicks;
    }

    /**
     * @param int $blockedKicks
     */
    public function setBlockedKicks( $blockedKicks )
    {
        $this->blockedKicks = $blockedKicks;
    }

    /**
     * @return int
     */
    public function getSafeties()
    {
        return $this->safeties;
    }

    /**
     * @param int $safeties
     */
    public function setSafeties( $safeties )
    {
        $this->safeties = $safeties;
    }

    /**
     * @return int
     */
    public function getPuntReturns()
    {
        return $this->puntReturns;
    }

    /**
     * @param int $puntReturns
     */
    public function setPuntReturns( $puntReturns )
    {
        $this->puntReturns = $puntReturns;
    }

    /**
     * @return int
     */
    public function getPuntReturnYards()
    {
        return $this->puntReturnYards;
    }

    /**
     * @param int $puntReturnYards
     */
    public function setPuntReturnYards( $puntReturnYards )
    {
        $this->puntReturnYards = $puntReturnYards;
    }

    /**
     * @return int
     */
    public function getPuntReturnTouchdowns()
    {
        return $this->puntReturnTouchdowns;
    }

    /**
     * @param int $puntReturnTouchdowns
     */
    public function setPuntReturnTouchdowns( $puntReturnTouchdowns )
    {
        $this->puntReturnTouchdowns = $puntReturnTouchdowns;
    }

    /**
     * @return int
     */
    public function getPuntReturnLong()
    {
        return $this->puntReturnLong;
    }

    /**
     * @param int $puntReturnLong
     */
    public function setPuntReturnLong( $puntReturnLong )
    {
        $this->puntReturnLong = $puntReturnLong;
    }

    /**
     * @return int
     */
    public function getKickReturns()
    {
        return $this->kickReturns;
    }

    /**
     * @param int $kickReturns
     */
    public function setKickReturns( $kickReturns )
    {
        $this->kickReturns = $kickReturns;
    }

    /**
     * @return int
     */
    public function getKickReturnYards()
    {
        return $this->kickReturnYards;
    }

    /**
     * @param int $kickReturnYards
     */
    public function setKickReturnYards( $kickReturnYards )
    {
        $this->kickReturnYards = $kickReturnYards;
    }

    /**
     * @return int
     */
    public function getKickReturnTouchdowns()
    {
        return $this->kickReturnTouchdowns;
    }

    /**
     * @param int $kickReturnTouchdowns
     */
    public function setKickReturnTouchdowns( $kickReturnTouchdowns )
    {
        $this->kickReturnTouchdowns = $kickReturnTouchdowns;
    }

    /**
     * @return int
     */
    public function getKickReturnLong()
    {
        return $this->kickReturnLong;
    }

    /**
     * @param int $kickReturnLong
     */
    public function setKickReturnLong( $kickReturnLong )
    {
        $this->kickReturnLong = $kickReturnLong;
    }

    /**
     * @return int
     */
    public function getBlockedKickReturnTouchdowns()
    {
        return $this->blockedKickReturnTouchdowns;
    }

    /**
     * @param int $blockedKickReturnTouchdowns
     */
    public function setBlockedKickReturnTouchdowns( $blockedKickReturnTouchdowns )
    {
        $this->blockedKickReturnTouchdowns = $blockedKickReturnTouchdowns;
    }

    /**
     * @return int
     */
    public function getFieldGoalReturnTouchdowns()
    {
        return $this->fieldGoalReturnTouchdowns;
    }

    /**
     * @param int $fieldGoalReturnTouchdowns
     */
    public function setFieldGoalReturnTouchdowns( $fieldGoalReturnTouchdowns )
    {
        $this->fieldGoalReturnTouchdowns = $fieldGoalReturnTouchdowns;
    }

    /**
     * @return string
     */
    public function getFantasyPointsAllowed()
    {
        return $this->fantasyPointsAllowed;
    }

    /**
     * @param string $fantasyPointsAllowed
     */
    public function setFantasyPointsAllowed( $fantasyPointsAllowed )
    {
        $this->fantasyPointsAllowed = $fantasyPointsAllowed;
    }

    /**
     * @return string
     */
    public function getQuarterbackFantasyPointsAllowed()
    {
        return $this->quarterbackFantasyPointsAllowed;
    }

    /**
     * @param string $quarterbackFantasyPointsAllowed
     */
    public function setQuarterbackFantasyPointsAllowed( $quarterbackFantasyPointsAllowed )
    {
        $this->quarterbackFantasyPointsAllowed = $quarterbackFantasyPointsAllowed;
    }

    /**
     * @return string
     */
    public function getRunningbackFantasyPointsAllowed()
    {
        return $this->runningbackFantasyPointsAllowed;
    }

    /**
     * @param string $runningbackFantasyPointsAllowed
     */
    public function setRunningbackFantasyPointsAllowed( $runningbackFantasyPointsAllowed )
    {
        $this->runningbackFantasyPointsAllowed = $runningbackFantasyPointsAllowed;
    }

    /**
     * @return string
     */
    public function getWideReceiverFantasyPointsAllowed()
    {
        return $this->wideReceiverFantasyPointsAllowed;
    }

    /**
     * @param string $wideReceiverFantasyPointsAllowed
     */
    public function setWideReceiverFantasyPointsAllowed( $wideReceiverFantasyPointsAllowed )
    {
        $this->wideReceiverFantasyPointsAllowed = $wideReceiverFantasyPointsAllowed;
    }

    /**
     * @return string
     */
    public function getTightEndFantasyPointsAllowed()
    {
        return $this->tightEndFantasyPointsAllowed;
    }

    /**
     * @param string $tightEndFantasyPointsAllowed
     */
    public function setTightEndFantasyPointsAllowed( $tightEndFantasyPointsAllowed )
    {
        $this->tightEndFantasyPointsAllowed = $tightEndFantasyPointsAllowed;
    }

    /**
     * @return string
     */
    public function getKickerFantasyPointsAllowed()
    {
        return $this->kickerFantasyPointsAllowed;
    }

    /**
     * @param string $kickerFantasyPointsAllowed
     */
    public function setKickerFantasyPointsAllowed( $kickerFantasyPointsAllowed )
    {
        $this->kickerFantasyPointsAllowed = $kickerFantasyPointsAllowed;
    }

    /**
     * @return string
     */
    public function getGames()
    {
        return $this->games;
    }

    /**
     * @param string $games
     */
    public function setGames( $games )
    {
        $this->games = $games;
    }


    /**
     * @return int
     */
    public function getBlockedKickReturnYards()
    {
        return $this->blockedKickReturnYards;
    }

    /**
     * @param int $blockedKickReturnYards
     */
    public function setBlockedKickReturnYards( $blockedKickReturnYards )
    {
        $this->blockedKickReturnYards = $blockedKickReturnYards;
    }

    /**
     * @return int
     */
    public function getFieldGoalReturnYards()
    {
        return $this->fieldGoalReturnYards;
    }

    /**
     * @param int $fieldGoalReturnYards
     */
    public function setFieldGoalReturnYards( $fieldGoalReturnYards )
    {
        $this->fieldGoalReturnYards = $fieldGoalReturnYards;
    }

    /**
     * @return int
     */
    public function getQuarterbackHits()
    {
        return $this->quarterbackHits;
    }

    /**
     * @param int $quarterbackHits
     */
    public function setQuarterbackHits( $quarterbackHits )
    {
        $this->quarterbackHits = $quarterbackHits;
    }

    /**
     * @return int
     */
    public function getTacklesForLoss()
    {
        return $this->tacklesForLoss;
    }

    /**
     * @param int $tacklesForLoss
     */
    public function setTacklesForLoss( $tacklesForLoss )
    {
        $this->tacklesForLoss = $tacklesForLoss;
    }

    /**
     * @return int
     */
    public function getDefensiveTouchdowns()
    {
        return $this->defensiveTouchdowns;
    }

    /**
     * @param int $defensiveTouchdowns
     */
    public function setDefensiveTouchdowns( $defensiveTouchdowns )
    {
        $this->defensiveTouchdowns = $defensiveTouchdowns;
    }

    /**
     * @return int
     */
    public function getSpecialTeamsTouchdowns()
    {
        return $this->specialTeamsTouchdowns;
    }

    /**
     * @param int $specialTeamsTouchdowns
     */
    public function setSpecialTeamsTouchdowns( $specialTeamsTouchdowns )
    {
        $this->specialTeamsTouchdowns = $specialTeamsTouchdowns;
    }

    /**
     * @return string
     */
    public function getFantasyPoints()
    {
        return $this->fantasyPoints;
    }

    /**
     * @param string $fantasyPoints
     */
    public function setFantasyPoints( $fantasyPoints )
    {
        $this->fantasyPoints = $fantasyPoints;
    }

    /**
     * @return int
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * @param int $temperature
     */
    public function setTemperature( $temperature )
    {
        $this->temperature = $temperature;
    }

    /**
     * @return int
     */
    public function getHumidity()
    {
        return $this->humidity;
    }

    /**
     * @param int $humidity
     */
    public function setHumidity( $humidity )
    {
        $this->humidity = $humidity;
    }

    /**
     * @return int
     */
    public function getWindSpeed()
    {
        return $this->windSpeed;
    }

    /**
     * @param int $windSpeed
     */
    public function setWindSpeed( $windSpeed )
    {
        $this->windSpeed = $windSpeed;
    }

    /**
     * @return int
     */
    public function getThirdDownAttempts()
    {
        return $this->thirdDownAttempts;
    }

    /**
     * @param int $thirdDownAttempts
     */
    public function setThirdDownAttempts( $thirdDownAttempts )
    {
        $this->thirdDownAttempts = $thirdDownAttempts;
    }

    /**
     * @return int
     */
    public function getThirdDownConversions()
    {
        return $this->thirdDownConversions;
    }

    /**
     * @param int $thirdDownConversions
     */
    public function setThirdDownConversions( $thirdDownConversions )
    {
        $this->thirdDownConversions = $thirdDownConversions;
    }

    /**
     * @return int
     */
    public function getFourthDownAttempts()
    {
        return $this->fourthDownAttempts;
    }

    /**
     * @param int $fourthDownAttempts
     */
    public function setFourthDownAttempts( $fourthDownAttempts )
    {
        $this->fourthDownAttempts = $fourthDownAttempts;
    }

    /**
     * @return int
     */
    public function getFourthDownConversions()
    {
        return $this->fourthDownConversions;
    }

    /**
     * @param int $fourthDownConversions
     */
    public function setFourthDownConversions( $fourthDownConversions )
    {
        $this->fourthDownConversions = $fourthDownConversions;
    }

    /**
     * @return int
     */
    public function getPointsAllowedByDefenseSpecialTeams()
    {
        return $this->pointsAllowedByDefenseSpecialTeams;
    }

    /**
     * @param int $pointsAllowedByDefenseSpecialTeams
     */
    public function setPointsAllowedByDefenseSpecialTeams( $pointsAllowedByDefenseSpecialTeams )
    {
        $this->pointsAllowedByDefenseSpecialTeams = $pointsAllowedByDefenseSpecialTeams;
    }

    /**
     * @return int
     */
    public function getAuctionValue()
    {
        return $this->auctionValue;
    }

    /**
     * @param int $auctionValue
     */
    public function setAuctionValue( $auctionValue )
    {
        $this->auctionValue = $auctionValue;
    }

    /**
     * @return int
     */
    public function getAuctionValuePPR()
    {
        return $this->auctionValuePPR;
    }

    /**
     * @param int $auctionValuePPR
     */
    public function setAuctionValuePPR( $auctionValuePPR )
    {
        $this->auctionValuePPR = $auctionValuePPR;
    }


}
