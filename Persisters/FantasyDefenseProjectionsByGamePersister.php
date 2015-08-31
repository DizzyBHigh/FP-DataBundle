<?php

namespace FantasyPro\DataBundle\Persisters;

use Doctrine\ORM\EntityManager;
use FantasyPro\DataBundle\Builder\FantasyDefenseProjectionsByGameBuilder;
use FantasyPro\DataBundle\Entity\FantasyDefenseProjectionsByGame;

class FantasyDefenseProjectionsByGamePersister
{

    /**
     * @var EntityManager $em
     */
    private $em;
    /**
     * @var FantasyDefenseProjectionsByGameBuilder $builder
     */
    private $builder;

    public function __construct( EntityManager $em, FantasyDefenseProjectionsByGameBuilder $builder )
    {
        $this->em      = $em;
        $this->builder = $builder;
    }

    public function Persist( $fantasyDefenseGame )
    {
        //disable Logging to speed things up....
        $this->em->getConnection()->getConfiguration()->setSQLLogger( null );

        //get the schedule repository
        $repo = $this->em->getRepository( 'DataBundle:FantasyDefenseProjectionsByGame' );
        $uow  = $this->em->getUnitOfWork();

        // Set the criteria to fetch from the db
        $criteria = array(
            'gameKey' => $fantasyDefenseGame['GameKey']
        );

        //get the team from the repo
        /**
         * @var FantasyDefenseProjectionsByGame $fantasyDefenseProjectionsByGame
         */
        $currentFantasyDefenseGame = $repo->FindOneBy( $criteria );

        //build the fantasyDefenseGame  entity
        $currentFantasyDefenseGame = $this->builder->buildFantasyDefenseProjectionsByGame(
            $currentFantasyDefenseGame,
            $fantasyDefenseGame
        );


        $exists = $uow->isEntityScheduled( $currentFantasyDefenseGame );
        if ( ! $exists) {
            //persist the Entity
            $this->em->persist( $currentFantasyDefenseGame );
            $this->em->flush();
            $this->em->clear();

        }
    }
}