<?php

namespace FantasyPro\DataBundle\Persisters;

use Doctrine\ORM\EntityManager;
use FantasyPro\DataBundle\Builder\FreeAgentBuilder;
use FantasyPro\DataBundle\Entity\FreeAgent;

class FreeAgentPersister
{

    /**
     * @var EntityManager $em
     */
    private $em;
    /**
     * @var FreeAgentBuilder $builder
     */
    private $builder;

    public function __construct( EntityManager $em, FreeAgentBuilder $builder )
    {
        $this->em      = $em;
        $this->builder = $builder;
    }

    public function Persist( $freeAgent )
    {
        //disable Logging to speed things up....
        $this->em->getConnection()->getConfiguration()->setSQLLogger( null );

        $this->em->getConnection()->getConfiguration()->setSQLLogger( null );
        //get the schedule repository
        $repo = $this->em->getRepository( 'DataBundle:FreeAgent' );
        $uow  = $this->em->getUnitOfWork();

        // Set the criteria to fetch from the db
        $criteria = array( 'playerID' => $freeAgent['PlayerID'] );

        //get the team from the repo
        /**
         * @var FreeAgent $currentFreeAgent
         */
        $currentFreeAgent = $repo->FindOneBy( $criteria );

        //todo: use a logger to write this data to file

        //build the FreeAgents entity
        $currentFreeAgent = $this->builder->buildFreeAgent( $currentFreeAgent, $freeAgent );


        $exists = $uow->isEntityScheduled( $currentFreeAgent );
        if ( ! $exists) {
            //persist the Entity
            $this->em->persist( $currentFreeAgent );
            $this->em->flush();
            $this->em->clear();
        }
    }
}