<?php

namespace FantasyPro\DataBundle\Persisters;

use Doctrine\ORM\EntityManager;
use FantasyPro\DataBundle\Builder\GameStatsByWeekBuilder;
use FantasyPro\DataBundle\Entity\GameStatsByWeek;

class GameStatsByWeekPersister
{

    /**
     * @var EntityManager $em
     */
    private $em;
    /**
     * @var GameStatsByWeekBuilder $builder
     */
    private $builder;

    public function __construct( EntityManager $em, GameStatsByWeekBuilder $builder )
    {
        $this->em      = $em;
        $this->builder = $builder;
    }

    public function Persist( $gameStatsByWeek )
    {
        //disable Logging to speed things up....
        $this->em->getConnection()->getConfiguration()->setSQLLogger( null );

        //get the schedule repository
        $repo = $this->em->getRepository( 'DataBundle:GameStatsByWeek' );
        $uow  = $this->em->getUnitOfWork();

        // Set the criteria to fetch from the db
        $criteria = array( 'gameKey' => $gameStatsByWeek['GameKey'] );
        //var_dump($criteria);die;
        //get the gameStatsByWeek from the repo
        /**
         * @var GameStatsByWeek $currentGameStatsByWeek
         */
        $currentGameStatsByWeek = $repo->FindOneBy( $criteria );

        //var_dump($currentGameStatsByWeek);die();

        //build the Injury entity
        $currentGameStatsByWeek = $this->builder->buildGameStatsByWeek( $currentGameStatsByWeek, $gameStatsByWeek );

        $exists = $uow->isEntityScheduled( $currentGameStatsByWeek );
        if ( ! $exists) {
            //persist the Entity
            $this->em->persist( $currentGameStatsByWeek );
            $this->em->flush();
            $this->em->clear();

        }
    }
}