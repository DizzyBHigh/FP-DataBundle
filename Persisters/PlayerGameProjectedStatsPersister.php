<?php

namespace FantasyPro\DataBundle\Persisters;

use Doctrine\ORM\EntityManager;
use FantasyPro\DataBundle\Builder\PlayerGameProjectedStatsBuilder;
use FantasyPro\DataBundle\Entity\PlayerGameProjectedStats;

class PlayerGameProjectedStatsPersister
{

    /**
     * @var EntityManager $em
     */
    private $em;
    /**
     * @var PlayerGameProjectedStatsBuilder $builder
     */
    private $builder;

    public function __construct( EntityManager $em, PlayerGameProjectedStatsBuilder $builder )
    {
        $this->em      = $em;
        $this->builder = $builder;
        $this->repo    = $this->em->getRepository( 'DataBundle:PlayerGameProjectedStats' );
        $this->uow     = $this->em->getUnitOfWork();
    }

    //PlayerGameProjectedStats Feed
    public function Persist( $playerGame )
    {
        //disable Logging to speed things up....
        $this->em->getConnection()->getConfiguration()->setSQLLogger( null );

        //get the schedule repository
        $currentPlayerGameProjectedStats = $this->fetchGame( $playerGame );
        //build the PlayerGameProjectedStats entity
        $currentPlayerGameProjectedStats = $this->builder->buildPlayerGameProjectedStats(
            $currentPlayerGameProjectedStats,
            $playerGame
        );
        $this->PersistData( $currentPlayerGameProjectedStats );
    }


    /**
     * @param PlayerGameProjectedStats $playerGame
     *
     * @return PlayerGameProjectedStats
     */
    public function fetchGame( $playerGame )
    {
        $criteria = array( 'playerGameID' => $playerGame['PlayerGameID'] );

        //get the game from the repo
        $currentPlayerGameProjectedStats = $this->repo->FindOneBy( $criteria );

        return $currentPlayerGameProjectedStats;
    }

    public function PersistData( $currentPlayerGameProjectedStats )
    {
        $exists = $this->uow->isEntityScheduled( $currentPlayerGameProjectedStats );
        if ( ! $exists) {
            //persist the Entity
            $this->em->persist( $currentPlayerGameProjectedStats );
            $this->em->flush();
            $this->em->clear();

        }
    }
}