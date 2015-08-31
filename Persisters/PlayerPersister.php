<?php
/**
 * Created by PhpStorm.
 * User: Dizzy
 * Date: 30/04/2015
 * Time: 13:34
 */

namespace FantasyPro\DataBundle\Persisters;

use Doctrine\ORM\EntityManager;
use FantasyPro\DataBundle\Builder\PlayerBuilder;
use FantasyPro\DataBundle\Entity\Player;

class PlayerPersister
{

    /**
     * @var EntityManager $em
     */
    private $em;
    /**
     * @var PlayerBuilder $builder
     */
    private $builder;

    public function __construct( EntityManager $em, PlayerBuilder $builder )
    {
        $this->em      = $em;
        $this->builder = $builder;
    }

    public function Persist( $player )
    {
        //disable Logging to speed things up....
        $this->em->getConnection()->getConfiguration()->setSQLLogger( null );

        //get the team repository
        $repo = $this->em->getRepository( 'DataBundle:Player' );
        $uow  = $this->em->getUnitOfWork();

        // Set the current team to fetch from the db
        $criteria = array( 'playerID' => $player['PlayerID'] );

        //get the player from the repo
        /**
         * @var Player $currentPlayer
         */
        $currentPlayer = $repo->FindOneBy( $criteria );

        //todo: use a logger to write this data to file

        //build the player entity
        $currentPlayer = $this->builder->buildPlayer( $currentPlayer, $player );
        $exists        = $uow->isEntityScheduled( $currentPlayer );
        if ( ! $exists) {
            //persist the player
            $this->em->persist( $currentPlayer );
            $this->em->flush();
            $this->em->clear();

        }

    }
}