<?php

namespace FantasyPro\DataBundle\Persisters;

use Doctrine\ORM\EntityManager;
use FantasyPro\DataBundle\Builder\FantasyDefenseGameBuilder;
use FantasyPro\DataBundle\Entity\FantasyDefenseGame;

class FantasyDefenseGamePersister
{

    /**
     * @var EntityManager $em
     */
    private $em;
    /**
     * @var FantasyDefenseGameBuilder $builder
     */
    private $builder;

    public function __construct( EntityManager $em, FantasyDefenseGameBuilder $builder )
    {
        $this->em      = $em;
        $this->builder = $builder;
    }

    public function Persist( $fantasyDefenseGame )
    {
        //disable Logging to speed things up....
        $this->em->getConnection()->getConfiguration()->setSQLLogger( null );

        //get the schedule repository
        $repo = $this->em->getRepository( 'DataBundle:FantasyDefenseGame' );
        $uow  = $this->em->getUnitOfWork();

        // Set the criteria to fetch from the db
        $criteria = array(
            'gameKey'  => $fantasyDefenseGame['GameKey'],
            'team'     => $fantasyDefenseGame['Team'],
            'opponent' => $fantasyDefenseGame['Opponent']
        );

        //get the team from the repo
        /**
         * @var FantasyDefenseGame $fantasyDefenseGame
         */
        $currentFantasyDefenseGame = $repo->FindOneBy( $criteria );

        //build the fantasyDefenseGame  entity
        $currentFantasyDefenseGame = $this->builder->buildFantasyDefenseGame(
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