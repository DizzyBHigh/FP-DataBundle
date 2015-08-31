<?php
/**
 * Created by PhpStorm.
 * User: Dizzy
 * Date: 30/04/2015
 * Time: 13:34
 */

namespace FantasyPro\DataBundle\Persisters;

use Doctrine\ORM\EntityManager;
use FantasyPro\DataBundle\Builder\SeasonLeagueLeadersBuilder;
use FantasyPro\DataBundle\Entity\SeasonLeagueLeaders;

class SeasonLeagueLeadersPersister
{

    /**
     * @var EntityManager $em
     */
    private $em;
    /**
     * @var SeasonLeagueLeaders $builder
     */
    private $builder;

    public function __construct( EntityManager $em, SeasonLeagueLeadersBuilder $builder )
    {
        $this->em      = $em;
        $this->builder = $builder;
    }

    public function Persist( $seasonLeagueLeader )
    {
        //disable Logging to speed things up....
        $this->em->getConnection()->getConfiguration()->setSQLLogger( null );

        //get the team repository
        $repo = $this->em->getRepository( 'DataBundle:SeasonLeagueLeaders' );

        // Set the current team to fetch from the db
        $criteria = array(
            'season'     => $seasonLeagueLeader['Season'],
            'seasonType' => $seasonLeagueLeader['SeasonType'],
            'playerID'   => $seasonLeagueLeader['PlayerID']
        );

        //get the bye from the repo
        /**
         * @var SeasonLeagueLeaders $currentSeasonLeagueLeaders
         */
        $currentSeasonLeagueLeaders = $repo->FindOneBy( $criteria );

        //todo: use a logger to write this data to file

        //build the bye entity
        $currentSeasonLeagueLeaders = $this->builder->buildSeasonLeagueLeaders(
            $currentSeasonLeagueLeaders,
            $seasonLeagueLeader
        );

        //persist the bye
        $this->em->persist( $currentSeasonLeagueLeaders );
        $this->em->flush();
        $this->em->clear();

    }
}