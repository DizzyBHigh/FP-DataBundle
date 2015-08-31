<?php
/**
 * Created by PhpStorm.
 * User: Dizzy
 * Date: 30/04/2015
 * Time: 13:34
 */

namespace FantasyPro\DataBundle\Persisters;

use Doctrine\ORM\EntityManager;
use FantasyPro\DataBundle\Builder\NewsBuilder;
use FantasyPro\DataBundle\Entity\News;

class NewsPersister
{

    /**
     * @var EntityManager $em
     */
    private $em;
    /**
     * @var NewsBuilder $builder
     */
    private $builder;

    public function __construct( EntityManager $em, NewsBuilder $builder )
    {
        $this->em      = $em;
        $this->builder = $builder;
    }

    public function Persist( $news )
    {
        //disable Logging to speed things up....
        $this->em->getConnection()->getConfiguration()->setSQLLogger( null );

        //get the news repository
        $repo = $this->em->getRepository( 'DataBundle:News' );
        $uow  = $this->em->getUnitOfWork();
        // get the current news from the db
        $criteria = array(
            'newsID' => $news['NewsID']
        );

        /**
         * @var News $currentNews
         */
        $currentNews = $repo->FindOneBy( $criteria );

        //todo: use a logger to write this data to file

        //build the news entity
        $currentNews = $this->builder->buildNews( $currentNews, $news );

        $exists = $uow->isEntityScheduled( $currentNews );
        if ( ! $exists) {
            //persist the News
            $this->em->persist( $currentNews );
            $this->em->flush();
            $this->em->clear();

        }
    }
}