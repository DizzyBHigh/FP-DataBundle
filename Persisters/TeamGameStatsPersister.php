<?php
/**
 * Created by PhpStorm.
 * User: Dizzy
 * Date: 30/04/2015
 * Time: 13:34
 */

namespace FantasyPro\DataBundle\Persisters;

use Doctrine\ORM\EntityManager;
use FantasyPro\DataBundle\Builder\TeamGameStatsBuilder;
use FantasyPro\DataBundle\Entity\TeamGameStats;

class TeamGameStatsPersister
{

    /**
     * @var EntityManager $em
     */
    private $em;
    /**
     * @var TeamgamestatsBuilder $builder
     */
    private $builder;

    public function __construct( EntityManager $em, TeamGameStatsBuilder $builder )
    {
        $this->em      = $em;
        $this->builder = $builder;
    }

    public function Persist( $teamGameStats )
    {
        //disable Logging to speed things up....
        $this->em->getConnection()->getConfiguration()->setSQLLogger( null );

        //get the team repository
        $repo = $this->em->getRepository( 'DataBundle:TeamGameStats' );

        // Set the current team to fetch from the db
        $criteria = array(
            'gameKey' => $teamGameStats['GameKey'],
            'season'  => $teamGameStats['Season'],
            'week'    => $teamGameStats['Week']
        );

        //get the teamgamestats from the repo
        /**
         * @var TeamGameStats $currentTeamGameStats
         */
        $currentTeamGameStats = $repo->FindOneBy( $criteria );

        //todo: use a logger to write this data to file

        //build the teamGameStats entity
        $currentTeamGameStats = $this->builder->buildTeamGameStats( $currentTeamGameStats, $teamGameStats );

        //persist the teamgamestats
        $this->em->persist( $currentTeamGameStats );
        $this->em->flush();
        $this->em->clear();

    }
}