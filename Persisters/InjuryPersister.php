<?php

namespace FantasyPro\DataBundle\Persisters;

use Doctrine\ORM\EntityManager;
use FantasyPro\DataBundle\Builder\InjuryBuilder;
use FantasyPro\DataBundle\Entity\Injury;

class InjuryPersister
{

    /**
     * @var EntityManager $em
     */
    private $em;
    /**
     * @var InjuryBuilder $builder
     */
    private $builder;

    public function __construct( EntityManager $em, InjuryBuilder $builder )
    {
        $this->em      = $em;
        $this->builder = $builder;
    }

    public function Persist( $injury )
    {
        //disable Logging to speed things up....
        $this->em->getConnection()->getConfiguration()->setSQLLogger( null );

        //get the schedule repository
        $repo = $this->em->getRepository( 'DataBundle:Injury' );
        $uow  = $this->em->getUnitOfWork();

        // Set the criteria to fetch from the db
        $criteria = array( 'injuryID' => $injury['InjuryID'] );

        //get the team from the repo
        /**
         * @var Injury $currentInjury
         */
        $currentInjury = $repo->FindOneBy( $criteria );

        //todo: use a logger to write this data to file

        //build the Injury entity
        $currentInjury = $this->builder->buildInjury( $currentInjury, $injury );


        $exists = $uow->isEntityScheduled( $currentInjury );
        if ( ! $exists) {
            //persist the Entity
            $this->em->persist( $currentInjury );
            $this->em->flush();
            $this->em->clear();

        }
    }
}