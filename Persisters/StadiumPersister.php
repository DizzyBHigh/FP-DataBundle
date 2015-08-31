<?php
/**
 * Created by PhpStorm.
 * User: Dizzy
 * Date: 30/04/2015
 * Time: 13:56
 */

namespace FantasyPro\DataBundle\Persisters;

use Doctrine\ORM\EntityManager;
use FantasyPro\DataBundle\Builder\StadiumBuilder;
use FantasyPro\DataBundle\Entity\Stadium;


class StadiumPersister
{
    /**
     * @var EntityManager $em
     */
    private $em;
    /**
     * @var StadiumBuilder $stadiumBuilder
     */
    private $builder;

    public function __construct( EntityManager $em, StadiumBuilder $builder )
    {
        $this->em      = $em;
        $this->builder = $builder;
    }

    public function Persist( $stadium )
    {
        //disable Logging to speed things up....
        $this->em->getConnection()->getConfiguration()->setSQLLogger( null );

        //get the stadium repository
        $repo = $this->em->getRepository( 'DataBundle:Stadium' );
        $uow  = $this->em->getUnitOfWork();

        // Set the current team to fetch from the db
        $criteria = array( 'stadiumID' => $stadium['StadiumID'] );

        //get the stadium from the repo
        /**
         * @var Stadium $currentStadium
         */
        $currentStadium = $repo->FindOneBy( $criteria );

        //todo: use a logger to write this data to file

        //build the stadium entity
        $currentStadium = $this->builder->buildStadium( $currentStadium, $stadium );

        $exists = $uow->isEntityScheduled( $currentStadium );
        if ( ! $exists) {
            //persist the Stadium
            $this->em->persist( $currentStadium );
            $this->em->flush();
            $this->em->clear();
        }
    }
}