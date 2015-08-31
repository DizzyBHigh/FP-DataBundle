<?php

namespace FantasyPro\DataBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FantasyPro\DataBundle\Entity\CronTask;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{

    public function updateStadiumAction()
    {
        //get the stadium parser and parse
        $log = array();
        $this->container->get( 'stadium_parser' )->parseData( $log );

        return $this->render( 'DesigBundle:Default:layout-home.html.twig', array( 'log' => $log ) );
    }

    public function cronAddAction()
    {
        $entity = new CronTask();

        $entity
            ->setName( 'Example asset symlinking task' )
            ->setInterval( 3600 )// Run once every hour
            ->setCommands(
                array(
                    'fetch_data:timeframes'
                )
            );

        $em = $this->getDoctrine()->getManager();
        $em->persist( $entity );


        $em->flush();

        return new Response( 'OK!' );
    }


    public function updateTeamAction()
    {
        //$log = array();
        //get the team parser and parse
        //$log = $this->container->get( 'team_parser' )->parseData( $log );

        return $this->render( 'DataBundle:Default:index.html.twig', array( 'log' => $log ) );
    }

    public function updatePlayerAction()
    {
        //get the player parser and parse
        $log = $this->container->get( 'player_parser' )->parseData();

        return $this->render( 'DataBundle:Default:index.html.twig', array( 'log' => $log ) );

    }

    public function updateTimeFrameAction()
    {
        //get the player parser and parse
        $log = $this->container->get( 'timeframe_parser' )->parseData();

        return $this->render( 'DataBundle:Default:index.html.twig', array( 'log' => $log ) );

    }

    public function updateScheduleAction()
    {
        $log = $this->container->get( 'schedule_parser' )->parseData();

        return $this->render( 'DataBundle:Default:index.html.twig', array( 'log' => $log ) );

    }

    public function updateNewsAction()
    {

        $log = $this->container->get( 'news_parser' )->parseData();

        return $this->render( 'DataBundle:Default:index.html.twig', array( 'log' => $log ) );
    }


}
