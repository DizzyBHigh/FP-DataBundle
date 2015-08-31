<?php
/**
 * Created by PhpStorm.
 * User: Dizzy
 * Date: 30/04/2015
 * Time: 13:56
 */

namespace FantasyPro\DataBundle\Persisters;

use Doctrine\ORM\EntityManager;
use FantasyPro\DataBundle\Builder\TimeFrameBuilder;
use FantasyPro\DataBundle\Entity\TimeFrame;
use FantasyPro\DataBundle\Helpers\DateHelper;


class TimeFramePersister
{
    /**
     * @var EntityManager $em
     */
    private $em;

    /**
     * @var TimeFrameBuilder $Builder
     */
    private $builder;

    public function __construct( EntityManager $em, TimeFrameBuilder $builder, DateHelper $dateHelper )
    {
        $this->em         = $em;
        $this->builder    = $builder;
        $this->dateHelper = $dateHelper;
    }

    public function Persist( $timeFrame )
    {
        //disable Logging to speed things up....
        $this->em->getConnection()->getConfiguration()->setSQLLogger( null );

        //get the timeframe repository
        $repo = $this->em->getRepository( 'DataBundle:TimeFrame' );
        $uow  = $this->em->getUnitOfWork();
        //var_dump($timeFrame);die();
        // Set the current timeframe to fetch from the db
        $criteria = array(
            'startDate' => $this->dateHelper->parseDate( $timeFrame['StartDate'] ),
            'endDate'   => $this->dateHelper->parseDate( $timeFrame['EndDate'] )

        );
        //get the timeFrame from the repo
        /**
         * @var TimeFrame $currentTimeFrame
         */
        $currentTimeFrame = $repo->FindOneBy( $criteria );

        //build the timeframe entity
        $currentTimeFrame = $this->builder->buildTimeFrame( $currentTimeFrame, $timeFrame );
        //var_dump($currentTimeFrame);die();
        $exists = $uow->isEntityScheduled( $currentTimeFrame );

        if ( ! $exists) {
            //persist the TimeFrame
            $this->em->persist( $currentTimeFrame );
            $this->em->flush();
            $this->em->clear();

        }
    }
}