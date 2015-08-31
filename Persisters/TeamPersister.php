<?php

namespace FantasyPro\DataBundle\Persisters;

use Doctrine\ORM\EntityManager;
use FantasyPro\DataBundle\Builder\TeamBuilder;
use FantasyPro\DataBundle\Entity\Team;

class TeamPersister
{

    /**
     * @var EntityManager $em
     */
    private $em;
    /**
     * @var TeamBuilder $builder
     */
    private $builder;

    public function __construct( EntityManager $em, TeamBuilder $builder )
    {
        $this->em      = $em;
        $this->builder = $builder;
    }

    public function Persist( $team )
    {
        //disable Logging to speed things up....
        $this->em->getConnection()->getConfiguration()->setSQLLogger( null );

        //get the team repository
        $repo = $this->em->getRepository( 'DataBundle:Team' );
        $uow  = $this->em->getUnitOfWork();

        // Set the current team to fetch from the db
        $criteria = array(
            'teamID'   => $team['TeamID'],
            'playerID' => 'PlayerID'
        );


        //get the team from the repo
        /**
         * @var Team $currentTeam
         */
        $currentTeam = $repo->FindOneBy( $criteria );

        //todo use a logger to write this data to file

        //build the team entity
        $currentTeam = $this->builder->buildTeam( $currentTeam, $team );

        $exists = $uow->isEntityScheduled( $currentTeam );
        if ( ! $exists) {
            //persist the Team
            $this->em->persist( $currentTeam );
            $this->em->flush();
            $this->em->clear();

        }
    }
}