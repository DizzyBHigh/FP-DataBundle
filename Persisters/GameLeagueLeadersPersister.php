<?php
/**
 * Created by PhpStorm.
 * User: Dizzy
 * Date: 30/04/2015
 * Time: 13:34
 */

namespace FantasyPro\DataBundle\Persisters;

use Doctrine\ORM\EntityManager;
use FantasyPro\DataBundle\Builder\GameLeagueLeadersBuilder;
use FantasyPro\DataBundle\Entity\GameLeagueLeaders;
use FantasyPro\DataBundle\Helpers\DateHelper;

class GameLeagueLeadersPersister
{

    /**
     * @var EntityManager $em
     */
    private $em;
    /**
     * @var GameleagueLeadersBuilder $builder
     */
    private $builder;

    public function __construct( EntityManager $em, GameLeagueLeadersBuilder $builder, DateHelper $dateHelper )
    {
        $this->em         = $em;
        $this->builder    = $builder;
        $this->dateHelper = $dateHelper;
    }

    public function Persist( $gameLeagueLeaders )
    {
        //disable Logging to speed things up....
        $this->em->getConnection()->getConfiguration()->setSQLLogger( null );

        //get the team repository
        $repo = $this->em->getRepository( 'DataBundle:GameLeagueLeaders' );

        // Set the current team to fetch from the db
        $criteria = array(
            'gameKey'    => $gameLeagueLeaders['GameKey'],
            'season'     => $gameLeagueLeaders['Season'],
            'seasonType' => $gameLeagueLeaders['SeasonType'],
            'playerID'   => $gameLeagueLeaders['PlayerID'],
            'gameDate'   => $this->dateHelper->parseDate( $gameLeagueLeaders['GameDate'] )

        );

        //get the gameleagueleaders from the repo
        /**
         * @var GameLeagueleaders $currentGameLeagueLeaders
         */
        $currentGameLeagueLeaders = $repo->FindOneBy( $criteria );

        //todo: use a logger to write this data to file

        //build the gameleagueleaders entity
        $currentGameLeagueLeaders = $this->builder->buildGameLeagueLeaders(
            $currentGameLeagueLeaders,
            $gameLeagueLeaders
        );

        //persist the gameLeagueLeader
        $this->em->persist( $currentGameLeagueLeaders );
        $this->em->flush();
        $this->em->clear();

    }
}