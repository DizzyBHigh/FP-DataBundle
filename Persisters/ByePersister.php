<?php
/**
 * Created by PhpStorm.
 * User: Dizzy
 * Date: 30/04/2015
 * Time: 13:34
 */

namespace FantasyPro\DataBundle\Persisters;

use Doctrine\ORM\EntityManager;
use FantasyPro\DataBundle\Builder\ByeBuilder;
use FantasyPro\DataBundle\Entity\Bye;

class ByePersister
{

    /**
     * @var EntityManager $em
     */
    private $em;
    /**
     * @var ByeBuilder $builder
     */
    private $builder;

    public function __construct( EntityManager $em, ByeBuilder $builder )
    {
        $this->em      = $em;
        $this->builder = $builder;
    }

    public function Persist( $bye )
    {
        //disable Logging to speed things up....
        $this->em->getConnection()->getConfiguration()->setSQLLogger( null );

        //get the team repository
        $repo = $this->em->getRepository( 'DataBundle:Bye' );

        // Set the current team to fetch from the db
        $criteria = array(
            'season' => $bye['Season'],
            'team'   => $bye['Team']
        );

        //get the bye from the repo
        /**
         * @var Bye $currentBye
         */
        $currentBye = $repo->FindOneBy( $criteria );

        //todo: use a logger to write this data to file

        //build the bye entity
        $currentBye = $this->builder->buildBye( $currentBye, $bye );

        //persist the bye
        $this->em->persist( $currentBye );
        $this->em->flush();
        $this->em->clear();

    }
}