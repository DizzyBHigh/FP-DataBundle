<?php
/**
 * Created by PhpStorm.
 * User: Dizzy
 * Date: 30/04/2015
 * Time: 13:34
 */

namespace FantasyPro\DataBundle\Persisters;

use Doctrine\ORM\EntityManager;
use FantasyPro\DataBundle\Builder\DailyFantasyPlayerBuilder;
use FantasyPro\DataBundle\Entity\DailyFantasyPlayer;
use FantasyPro\DataBundle\Helpers\DateHelper;

class DailyFantasyPlayerPersister
{
    /**
     * @var EntityManager $em
     */
    private $em;
    /**
     * @var DailyFantasyPlayerBuilder $builder
     */
    private $builder;

    /**
     * @var DateHelper $dateHelper
     */
    private $dateHelper;

    public function __construct( EntityManager $em, DailyFantasyPlayerBuilder $builder, DateHelper $dateHelper )
    {
        $this->em         = $em;
        $this->builder    = $builder;
        $this->dateHelper = $dateHelper;
    }

    public function Persist( $dailyFantasyPlayer )
    {
        //disable Logging to speed things up....
        $this->em->getConnection()->getConfiguration()->setSQLLogger( null );

        //get the team repository
        $repo = $this->em->getRepository( 'DataBundle:DailyFantasyPlayer' );

        // Set the current team to fetch from the db
        $criteria = array(
            'playerID' => $dailyFantasyPlayer['PlayerID'],
            'date'     => $this->dateHelper->parseDate( $dailyFantasyPlayer['Date'] )
        );

        //get the dailyFantasyPlayer from the repo
        /**
         * @var DailyFantasyPlayer $currentDailyFantasyPlayer
         */
        $currentDailyFantasyPlayer = $repo->FindOneBy( $criteria );

        //todo: use a logger to write this data to file

        //build the dailyFantasyPlayer entity
        $currentDailyFantasyPlayer = $this->builder->buildDailyFantasyPlayer(
            $currentDailyFantasyPlayer,
            $dailyFantasyPlayer
        );

        //persist the dailyFantasyPlayer
        $this->em->persist( $currentDailyFantasyPlayer );
        $this->em->flush();
        $this->em->clear();

    }
}