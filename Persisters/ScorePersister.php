<?php

namespace FantasyPro\DataBundle\Persisters;

use Doctrine\ORM\EntityManager;
use FantasyPro\DataBundle\Builder\ScoreBuilder;
use FantasyPro\DataBundle\Entity\Score;

class ScorePersister
{

    /**
     * @var EntityManager $em
     */
    private $em;
    /**
     * @var ScoreBuilder $builder
     */
    private $builder;

    public function __construct( EntityManager $em, ScoreBuilder $builder )
    {
        $this->em      = $em;
        $this->builder = $builder;
    }

    public function Persist( $score )
    {
        //disable Logging to speed things up....
        $this->em->getConnection()->getConfiguration()->setSQLLogger( null );

        //get the schedule repository
        $repo = $this->em->getRepository( 'DataBundle:Score' );
        $uow  = $this->em->getUnitOfWork();

        // Set the criteria to fetch from the db
        $criteria = array( 'gameKey' => $score['GameKey'] );

        $lastUpdated = null;
        //get the game from the repo
        /**
         * @var Score $currentScore
         */
        $currentScore = $repo->FindOneBy( $criteria );

        //build the score entity
        $currentScore = $this->builder->buildScore( $currentScore, $score );

        $exists = $uow->isEntityScheduled( $currentScore );
        if ( ! $exists) {
            //persist the Entity
            $this->em->persist( $currentScore );
            $this->em->flush();
            $this->em->clear();

        }
    }
}