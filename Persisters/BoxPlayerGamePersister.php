<?php

namespace FantasyPro\DataBundle\Persisters;

use Doctrine\ORM\EntityManager;
use FantasyPro\DataBundle\Builder\BoxPlayerGameBuilder;
use FantasyPro\DataBundle\Entity\PlayerGame;

class BoxPlayerGamePersister
{

    /**
     * @var EntityManager $em
     */
    private $em;
    /**
     * @var PlayerGameBuilder $builder
     */
    private $builder;

    public function __construct( EntityManager $em, BoxPlayerGameBuilder $builder )
    {
        $this->em      = $em;
        $this->builder = $builder;
        $this->repo    = $this->em->getRepository( 'DataBundle:PlayerGame' );
        $this->uow     = $this->em->getUnitOfWork();
    }

    //PlayerGame Feed
    public function Persist( $playerGame )
    {
        //disable Logging to speed things up....
        $this->em->getConnection()->getConfiguration()->setSQLLogger( null );

        //get the schedule repository
        $currentPlayerGame = $this->fetchGame( $playerGame );
        //build the PlayerGame entity
        $currentPlayerGame = $this->builder->buildPlayerGame( $currentPlayerGame, $playerGame );
        $this->PersistData( $currentPlayerGame );

    }


    /**
     * @param PlayerGame $playerGame
     *
     * @return PlayerGame
     */
    public function fetchGame( $playerGame )
    {
        $criteria = array( 'playerGameID' => $playerGame['GameKey'].$playerGame['PlayerID'] );

        //get the game from the repo
        $currentPlayerGame = $this->repo->FindOneBy( $criteria );

        return $currentPlayerGame;
    }

    public function PersistData( $currentPlayerGame )
    {
        $exists = $this->uow->isEntityScheduled( $currentPlayerGame );
        if ( ! $exists) {
            //persist the Entity
            $this->em->persist( $currentPlayerGame );
            $this->em->flush();
            $this->em->clear();

        }
    }
}