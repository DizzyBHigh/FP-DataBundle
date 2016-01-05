<?php

namespace FantasyPro\DataBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FantasyPro\DataBundle\Entity\CronTask;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{

    public function cronAddAction()
    {
        $entity = new CronTask();

        $entity
            ->setName( 'Get Daily Fantasy Players' )
            ->setInterval( 43200 )// Run once every hour
            ->setCommands(
                array(
                    'fetch_data:dailyFantasyPlayers'
                )
            );

        $em = $this->getDoctrine()->getManager();
        $em->persist( $entity );


        $em->flush();

        return new Response( 'OK!' );
    }

}
