<?php
/**
 * Created by PhpStorm.
 * User: Dizzy
 * Date: 30/04/2015
 * Time: 13:34
 */

namespace FantasyPro\DataBundle\Persisters;

use Doctrine\ORM\EntityManager;
use FantasyPro\DataBundle\Builder\TeamSeasonStatsBuilder;
use FantasyPro\DataBundle\Entity\TeamSeasonStats;

class TeamSeasonStatsPersister
{

    /**
     * @var EntityManager $em
     */
    private $em;
    /**
     * @var TeamSeasonStatsBuilder $builder
     */
    private $builder;

    public function __construct( EntityManager $em, TeamSeasonStatsBuilder $builder )
    {
        $this->em      = $em;
        $this->builder = $builder;
    }

    public function Persist( $teamSeasonStats )
    {
        //disable Logging to speed things up....
        $this->em->getConnection()->getConfiguration()->setSQLLogger( null );

        //get the team repository
        $repo = $this->em->getRepository( 'DataBundle:TeamSeasonStats' );

        // Set the current team to fetch from the db
        $criteria = array(
            'season'     => $teamSeasonStats['Season'],
            'seasonType' => $teamSeasonStats['SeasonType'],
            'team'       => $teamSeasonStats['Team']
        );

        //get the teamSeasonStats from the repo
        /**
         * @var TeamSeasonStats $currentTeamSeasonStats
         */
        $currentTeamSeasonStats = $repo->FindOneBy( $criteria );

        //todo: use a logger to write this data to file

        //build the teamSeasonStats entity
        $currentTeamSeasonStats = $this->builder->buildTeamSeasonStats( $currentTeamSeasonStats, $teamSeasonStats );

        //persist the teamSeasonStats
        $this->em->persist( $currentTeamSeasonStats );
        $this->em->flush();
        $this->em->clear();

    }
}