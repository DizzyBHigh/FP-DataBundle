<?php
/**
 * Created by PhpStorm.
 * User: Dizzy
 * Date: 30/04/2015
 * Time: 13:34
 */

namespace FantasyPro\DataBundle\Persisters;

use Doctrine\ORM\EntityManager;
use FantasyPro\DataBundle\Builder\PlayerSeasonBuilder;
use FantasyPro\DataBundle\Entity\PlayerSeason;

class PlayerSeasonPersister
{

    /**
     * @var EntityManager $em
     */
    private $em;
    /**
     * @var PlayerSeasonBuilder $builder
     */
    private $builder;

    public function __construct( EntityManager $em, PlayerSeasonBuilder $builder )
    {
        $this->em      = $em;
        $this->builder = $builder;
    }

    public function Persist( $playerSeason )
    {
        //disable Logging to speed things up....
        $this->em->getConnection()->getConfiguration()->setSQLLogger( null );

        //get the team repository
        $repo = $this->em->getRepository( 'DataBundle:PlayerSeason' );

        // Set the current team to fetch from the db
        $criteria = array(
            'playerSeasonID' => $playerSeason['Season'].$playerSeason['SeasonType'].$playerSeason['PlayerID']
        );

        //get the playerSeason from the repo
        /**
         * @var PlayerSeason $currentPlayerSeason
         */
        $currentPlayerSeason = $repo->FindOneBy( $criteria );

        //build the playerSeason entity
        $currentPlayerSeason = $this->builder->buildPlayerSeason( $currentPlayerSeason, $playerSeason );

        //persist the playerSeason
        $this->em->persist( $currentPlayerSeason );
        $this->em->flush();
        $this->em->clear();

    }
}