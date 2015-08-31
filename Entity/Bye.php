<?php

namespace FantasyPro\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bye
 *
 * @ORM\Table(name="fp_bye")
 * @ORM\Entity(repositoryClass="FantasyPro\DataBundle\Entity\ByeRepository")
 */
class Bye
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
     * @ORM\Column(type="integer", nullable=false, name="Season")
     */
    private $season;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, name="Week")
     */
    private $week;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="Team")
     */
    private $team;


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
     * Set season
     *
     * @param integer $season
     *
     * @return Bye
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
     * @return Bye
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
     * Set team
     *
     * @param string $team
     *
     * @return Bye
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
}
