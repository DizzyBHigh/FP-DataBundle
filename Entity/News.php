<?php

namespace FantasyPro\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * News
 *
 * @ORM\Table(name="fd_news")
 * @ORM\Entity(repositoryClass="FantasyPro\DataBundle\Entity\NewsRepository")
 */
class News
{
    /**
     * @var integer
     *
     * @ORM\Column(type="integer", name="newsID")
     * @ORM\Id
     */
    private $newsID;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, name="title")
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=false, name="updated")
     */
    private $updated;

    /**
     * @var string
     *
     * @ORM\Column(type="text", nullable=true, name="url")
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(type="text", nullable=true, name="content")
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(type="text", nullable=true, name="source")
     */
    private $source;

    /**
     * @var string
     *
     * @ORM\Column(type="text", nullable=true, name="termsOfUse")
     */
    private $termsOfUse;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true, name="team")
     */
    private $team;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, name="playerID")
     */
    private $playerID;

    /**
     * 
     */
    private $player;

    /**
     * Set newsID
     *
     * @param integer $newsID
     *
     * @return News
     */
    public function setNewsID( $newsID )
    {
        $this->newsID = $newsID;

        return $this;
    }

    /**
     * Get newsID
     *
     * @return integer
     */
    public function getNewsID()
    {
        return $this->newsID;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return News
     */
    public function setTitle( $title )
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return News
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
     * Set url
     *
     * @param string $url
     *
     * @return News
     */
    public function setUrl( $url )
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return News
     */
    public function setContent( $content )
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set source
     *
     * @param string $source
     *
     * @return News
     */
    public function setSource( $source )
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set termsOfUse
     *
     * @param string $termsOfUse
     *
     * @return News
     */
    public function setTermsOfUse( $termsOfUse )
    {
        $this->termsOfUse = $termsOfUse;

        return $this;
    }

    /**
     * Get termsOfUse
     *
     * @return string
     */
    public function getTermsOfUse()
    {
        return $this->termsOfUse;
    }

    /**
     * Set team
     *
     * @param string $team
     *
     * @return News
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
     * Set playerID
     *
     * @param integer $playerID
     *
     * @return News
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
}
