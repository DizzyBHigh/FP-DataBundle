<?php

namespace FantasyPro\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Stadium
 *
 * @ORM\Table("fp_stadium")
 * @ORM\Entity(repositoryClass="FantasyPro\DataBundle\Entity\StadiumRepository")
 */
class Stadium
{
    /**
     * @ORM\Id @ORM\Column(type="integer")
     *
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="stadiumID", type="integer", length=32, nullable=false, unique=true)
     */
    private $stadiumID;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=50, nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=10, nullable=true)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=2, nullable=false)
     */
    private $country;

    /**
     * @var integer
     *
     * @ORM\Column(name="capacity", type="integer", length=32, nullable=true)
     */
    private $capacity;

    /**
     * @var string
     *
     * @ORM\Column(name="playingSurface", type="string", length=50, nullable=true)
     */
    private $playingSurface;


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
     * Set stadiumID
     *
     * @param integer $stadiumID
     *
     * @return Stadium
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
     * Set name
     *
     * @param string $name
     *
     * @return Stadium
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
     * Set city
     *
     * @param string $city
     *
     * @return Stadium
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
     * Set state
     *
     * @param string $state
     *
     * @return Stadium
     */
    public function setState( $state )
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Stadium
     */
    public function setCountry( $country )
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set capacity
     *
     * @param integer $capacity
     *
     * @return Stadium
     */
    public function setCapacity( $capacity )
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return integer
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set playingSurface
     *
     * @param string $playingSurface
     *
     * @return Stadium
     */
    public function setPlayingSurface( $playingSurface )
    {
        $this->playingSurface = $playingSurface;

        return $this;
    }

    /**
     * Get playingSurface
     *
     * @return string
     */
    public function getPlayingSurface()
    {
        return $this->playingSurface;
    }
}
