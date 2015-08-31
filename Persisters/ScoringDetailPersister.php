<?php

namespace FantasyPro\DataBundle\Persisters;

use Doctrine\ORM\EntityManager;
use FantasyPro\DataBundle\Builder\ScoringDetailBuilder;
use FantasyPro\DataBundle\Entity\ScoringDetail;

class ScoringDetailPersister
{

    /**
     * @var EntityManager $em
     */
    private $em;
    /**
     * @var ScoringDetailBuilder $builder
     */
    private $builder;

    public function __construct( EntityManager $em, ScoringDetailBuilder $builder )
    {
        $this->em      = $em;
        $this->builder = $builder;
    }

    public function Persist( $ScoringDetail )
    {
        //disable Logging to speed things up....
        $this->em->getConnection()->getConfiguration()->setSQLLogger( null );

        //get the schedule repository
        $repo = $this->em->getRepository( 'DataBundle:ScoringDetail' );
        $uow  = $this->em->getUnitOfWork();

        // Set the criteria to fetch from the db
        $criteria = array( 'scoringDetailID' => $ScoringDetail['ScoringDetailID'] );

        $currentScoringDetail = $repo->FindOneBy( $criteria );

        //build the Injury entity
        $currentScoringDetail = $this->builder->buildScore( $currentScoringDetail, $ScoringDetail );
        $exists               = $uow->isEntityScheduled( $currentScoringDetail );
        if ( ! $exists) {
            //persist the Entity
            $this->em->persist( $currentScoringDetail );
            $this->em->flush();
            $this->em->clear();

        }
    }

}