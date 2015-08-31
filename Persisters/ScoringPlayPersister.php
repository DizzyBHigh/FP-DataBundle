<?php

namespace FantasyPro\DataBundle\Persisters;

use Doctrine\ORM\EntityManager;
use FantasyPro\DataBundle\Builder\ScoringPlayBuilder;
use FantasyPro\DataBundle\Entity\ScoringPlay;

class ScoringPlayPersister
{

    /**
     * @var EntityManager $em
     */
    private $em;
    /**
     * @var ScoringPlayBuilder $builder
     */
    private $builder;

    public function __construct( EntityManager $em, ScoringPlayBuilder $builder )
    {
        $this->em      = $em;
        $this->builder = $builder;
    }

    public function Persist( $scoringPlay )
    {
        //disable Logging to speed things up....
        $this->em->getConnection()->getConfiguration()->setSQLLogger( null );

        //get the schedule repository
        $repo = $this->em->getRepository( 'DataBundle:ScoringPlay' );
        $uow  = $this->em->getUnitOfWork();

        // Set the criteria to fetch from the db
        $criteria = array( 'scoringPlayID' => $scoringPlay['ScoringPlayID'] );

        $currentScoringPlay = $repo->FindOneBy( $criteria );

        //build the Injury entity
        $currentScoringPlay = $this->builder->buildScore( $currentScoringPlay, $scoringPlay );
        $exists             = $uow->isEntityScheduled( $currentScoringPlay );
        if ( ! $exists) {
            //persist the Entity
            $this->em->persist( $currentScoringPlay );
            $this->em->flush();
            $this->em->clear();

        }
    }

}