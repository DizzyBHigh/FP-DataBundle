<?php
/**
 * Created by PhpStorm.
 * User: Dizzy
 * Date: 30/04/2015
 * Time: 13:34
 */

namespace FantasyPro\DataBundle\Persisters;

use Doctrine\ORM\EntityManager;
use FantasyPro\DataBundle\Builder\ScheduleBuilder;
use FantasyPro\DataBundle\Entity\Schedule;

class SchedulePersister
{

    /**
     * @var EntityManager $em
     */
    private $em;
    /**
     * @var ScheduleBuilder $builder
     */
    private $builder;

    public function __construct( EntityManager $em, ScheduleBuilder $builder )
    {
        $this->em      = $em;
        $this->builder = $builder;
    }

    public function Persist( $schedule )
    {
        //disable Logging to speed things up....
        $this->em->getConnection()->getConfiguration()->setSQLLogger( null );

        //get the schedule repository
        $repo = $this->em->getRepository( 'DataBundle:Schedule' );
        $uow  = $this->em->getUnitOfWork();

        // Set the current team to fetch from the db
        $criteria = array( 'gameKey' => $schedule['GameKey'] );

        //get the team from the repo
        /**
         * @var Schedule $currentSchedule
         */
        $currentSchedule = $repo->FindOneBy( $criteria );

        //todo: use a logger to write this data to file

        //build the schedule entity
        $currentSchedule = $this->builder->buildSchedule( $currentSchedule, $schedule );


        $exists = $uow->isEntityScheduled( $currentSchedule );
        if ( ! $exists) {
            //persist the Entity
            $this->em->persist( $currentSchedule );
            $this->em->flush();
            $this->em->clear();

        }
    }
}