<?php
/**
 * Created by PhpStorm.
 * User: Dizzy
 * Date: 30/04/2015
 * Time: 13:34
 */

namespace FantasyPro\DataBundle\Persisters;

use Doctrine\ORM\EntityManager;
use FantasyPro\DataBundle\Builder\FantasyPlayerBuilder;
use FantasyPro\DataBundle\Entity\FantasyPlayer;
use FantasyPro\DataBundle\Helpers\DateHelper;

class FantasyPlayerPersister
{
    /**
     * @var EntityManager $em
     */
    private $em;
    /**
     * @var FantasyPlayerBuilder $builder
     */
    private $builder;

    /**
     * @var DateHelper $dateHelper
     */
    private $dateHelper;

    public function __construct( EntityManager $em, FantasyPlayerBuilder $builder, DateHelper $dateHelper )
    {
        $this->em         = $em;
        $this->builder    = $builder;
        $this->dateHelper = $dateHelper;
    }

    public function Persist( $fantasyPlayer )
    {
        //disable Logging to speed things up....
        $this->em->getConnection()->getConfiguration()->setSQLLogger( null );

        $repo = $this->em->getRepository( 'DataBundle:FantasyPlayer' );
        $criteria = array(
            'playerID' => $fantasyPlayer['PlayerID'],
        );

        //get the dailyFantasyPlayer from the repo
        /**
         * @var FantasyPlayer $currentFantasyPlayer
         */
        $currentFantasyPlayer = $repo->FindOneBy( $criteria );

        //build the dailyFantasyPlayer entity
        $currentFantasyPlayer = $this->builder->buildFantasyPlayer(
            $currentFantasyPlayer,
            $fantasyPlayer
        );

        //persist the dailyFantasyPlayer
        $this->em->persist( $currentFantasyPlayer );
        $this->em->flush();
        $this->em->clear();

    }
}