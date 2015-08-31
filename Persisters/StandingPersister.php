<?php
/**
 * Created by PhpStorm.
 * User: Dizzy
 * Date: 30/04/2015
 * Time: 13:34
 */

namespace FantasyPro\DataBundle\Persisters;

use Doctrine\ORM\EntityManager;
use FantasyPro\DataBundle\Builder\StandingBuilder;
use FantasyPro\DataBundle\Entity\Standing;

class StandingPersister
{

    /**
     * @var EntityManager $em
     */
    private $em;
    /**
     * @var StandingBuilder $builder
     */
    private $builder;

    public function __construct( EntityManager $em, StandingBuilder $builder )
    {
        $this->em      = $em;
        $this->builder = $builder;
    }

    public function Persist( $standing )
    {
        //disable Logging to speed things up....
        $this->em->getConnection()->getConfiguration()->setSQLLogger( null );

        //get the team repository
        $repo = $this->em->getRepository( 'DataBundle:Standing' );

        // Set the current team to fetch from the db
        $criteria = array(
            'season'     => $standing['Season'],
            'seasonType' => $standing['SeasonType'],
            'team'       => $standing['Team']
        );

        //get the standing from the repo
        /**
         * @var Standing $currentStanding
         */
        $currentStanding = $repo->FindOneBy( $criteria );

        //todo: use a logger to write this data to file

        //build the standing entity
        $currentStanding = $this->builder->buildStanding( $currentStanding, $standing );

        //persist the standing
        $this->em->persist( $currentStanding );
        $this->em->flush();
        $this->em->clear();

    }
}