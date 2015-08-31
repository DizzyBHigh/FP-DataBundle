<?php

namespace FantasyPro\DataBundle\Persisters;

use Doctrine\ORM\EntityManager;
use FantasyPro\DataBundle\Builder\GameStatsBySeasonBuilder;
use FantasyPro\DataBundle\Entity\GameStatsBySeason;

class GameStatsBySeasonPersister
{

    /**
     * @var EntityManager $em
     */
    private $em;
    /**
     * @var GameStatsBySeasonBuilder $builder
     */
    private $builder;

    public function __construct( EntityManager $em, GameStatsBySeasonBuilder $builder )
    {
        $this->em      = $em;
        $this->builder = $builder;
    }

    public function Persist( $gameStatsBySeason )
    {
        //disable Logging to speed things up....
        $this->em->getConnection()->getConfiguration()->setSQLLogger( null );

        //get the schedule repository
        $repo = $this->em->getRepository( 'DataBundle:GameStatsBySeason' );
        $uow  = $this->em->getUnitOfWork();

        // Set the criteria to fetch from the db
        $criteria = array( 'gameKey' => $gameStatsBySeason['GameKey'] );

        //get the gameStatsBySeason from the repo
        /**
         * @var GameStatsBySeason $currentGameStatsBySeason
         */
        $currentGameStatsBySeason = $repo->FindOneBy( $criteria );

        //todo: use a logger to write this data to file

        //build the Injury entity
        $currentGameStatsBySeason = $this->builder->buildGameStatsBySeason(
            $currentGameStatsBySeason,
            $gameStatsBySeason
        );


        $exists = $uow->isEntityScheduled( $currentGameStatsBySeason );
        if ( ! $exists) {
            //persist the Entity
            $this->em->persist( $currentGameStatsBySeason );
            $this->em->flush();
            $this->em->clear();

        }
    }
}