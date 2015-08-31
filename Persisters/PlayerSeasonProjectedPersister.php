<?php
/**
 * Created by PhpStorm.
 * User: Dizzy
 * Date: 30/04/2015
 * Time: 13:34
 */

namespace FantasyPro\DataBundle\Persisters;

use Doctrine\ORM\EntityManager;
use FantasyPro\DataBundle\Builder\PlayerSeasonProjectedBuilder;
use FantasyPro\DataBundle\Entity\PlayerSeasonProjected;

class PlayerSeasonProjectedPersister
{

    /**
     * @var EntityManager $em
     */
    private $em;
    /**
     * @var PlayerSeasonProjectedBuilder $builder
     */
    private $builder;

    public function __construct( EntityManager $em, PlayerSeasonProjectedBuilder $builder )
    {
        $this->em      = $em;
        $this->builder = $builder;
    }

    public function Persist( $playerSeasonProjected )
    {
        //disable Logging to speed things up....
        $this->em->getConnection()->getConfiguration()->setSQLLogger( null );

        //get the team repository
        $repo = $this->em->getRepository( 'DataBundle:PlayerSeasonProjected' );

        // Set the current team to fetch from the db
        $criteria = array(
            'playerSeasonID' => $playerSeasonProjected['Season'].$playerSeasonProjected['SeasonType'].$playerSeasonProjected['PlayerID']
        );

        //get the playerSeasonProjected from the repo
        /**
         * @var PlayerSeasonProjected $currentplayerSeasonProjected
         */
        $currentplayerSeasonProjected = $repo->FindOneBy( $criteria );

        //build the PlayerSeasonProjected entity
        $currentplayerSeasonProjected = $this->builder->buildplayerSeasonProjected(
            $currentplayerSeasonProjected,
            $playerSeasonProjected
        );

        //persist the playerSeasonProjected
        $this->em->persist( $currentplayerSeasonProjected );
        $this->em->flush();
        $this->em->clear();

    }
}