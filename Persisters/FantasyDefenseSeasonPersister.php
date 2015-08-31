<?php

namespace FantasyPro\DataBundle\Persisters;

use Doctrine\ORM\EntityManager;
use FantasyPro\DataBundle\Builder\FantasyDefenseSeasonBuilder;
use FantasyPro\DataBundle\Entity\FantasyDefenseSeason;

class FantasyDefenseSeasonPersister
{

    /**
     * @var EntityManager $em
     */
    private $em;
    /**
     * @var FantasyDefenseSeasonBuilder $builder
     */
    private $builder;

    public function __construct( EntityManager $em, FantasyDefenseSeasonBuilder $builder )
    {
        $this->em      = $em;
        $this->builder = $builder;
    }

    public function Persist( $fantasyDefenseSeason )
    {
        //disable Logging to speed things up....
        $this->em->getConnection()->getConfiguration()->setSQLLogger( null );

        //get the schedule repository
        $repo = $this->em->getRepository( 'DataBundle:FantasyDefenseSeason' );
        $uow  = $this->em->getUnitOfWork();

        // Set the criteria to fetch from the db
        $criteria = array(
            'season'     => $fantasyDefenseSeason['Season'],
            'seasonType' => $fantasyDefenseSeason['SeasonType'],
            'team'       => $fantasyDefenseSeason['Team']
        );

        //get the team from the repo
        /**
         * @var FantasyDefenseSeason $fantasyDefenseSeason
         */
        $currentFantasyDefenseSeason = $repo->FindOneBy( $criteria );

        //build the fantasyDefenseSeason  entity
        $currentFantasyDefenseSeason = $this->builder->buildFantasyDefenseSeason(
            $currentFantasyDefenseSeason,
            $fantasyDefenseSeason
        );


        $exists = $uow->isEntityScheduled( $currentFantasyDefenseSeason );
        if ( ! $exists) {
            //persist the Entity
            $this->em->persist( $currentFantasyDefenseSeason );
            $this->em->flush();
            $this->em->clear();

        }
    }
}