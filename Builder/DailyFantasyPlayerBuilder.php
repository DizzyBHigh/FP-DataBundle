<?php

namespace FantasyPro\DataBundle\Builder;

use Doctrine\ORM\EntityManager;
use FantasyPro\DataBundle\Entity\DailyFantasyplayer;
use FantasyPro\DataBundle\Helpers\DateHelper;

class DailyFantasyPlayerBuilder
{
    /**
     * @var DateHelper $dateHelper
     */
    private $dateHelper;

    public function __construct( DateHelper $dateHelper, EntityManager $em)
    {
        $this->dateHelper = $dateHelper;
        $this->em = $em;
    }

    public function buildDailyFantasyPlayer( $currentDailyFantasyPlayer = null, $dailyFantasyPlayer )
    {
        if ( ! $currentDailyFantasyPlayer) { // check if we already have the player stored
            $currentDailyFantasyPlayer = new DailyFantasyplayer();
        }
        $currentDailyFantasyPlayer->setPlayer($dailyFantasyPlayer['PlayerID']);
        $currentDailyFantasyPlayer->setDate( $this->dateHelper->parseDate( $dailyFantasyPlayer['Date'] ) );
        $currentDailyFantasyPlayer->setShortName( $dailyFantasyPlayer['ShortName'] );
        $currentDailyFantasyPlayer->setName( $dailyFantasyPlayer['Name'] );
        $currentDailyFantasyPlayer->setTeam( $dailyFantasyPlayer['Team'] );
        $currentDailyFantasyPlayer->setOpponent( $dailyFantasyPlayer['Opponent'] );
        $currentDailyFantasyPlayer->setPosition( $dailyFantasyPlayer['Position'] );
        $currentDailyFantasyPlayer->setSalary( $dailyFantasyPlayer['Salary'] );
        $currentDailyFantasyPlayer->setLastGameFantasyPoints( $dailyFantasyPlayer['LastGameFantasyPoints'] );
        $currentDailyFantasyPlayer->setProjectedFantasyPoints( $dailyFantasyPlayer['ProjectedFantasyPoints'] );
        $currentDailyFantasyPlayer->setOpponentRank( $dailyFantasyPlayer['OpponentRank'] );
        $currentDailyFantasyPlayer->setOpponentPositionRank( $dailyFantasyPlayer['OpponentPositionRank'] );
        $currentDailyFantasyPlayer->setStatus( $dailyFantasyPlayer['Status'] );
        $currentDailyFantasyPlayer->setStatusCode( $dailyFantasyPlayer['StatusCode'] );
        $currentDailyFantasyPlayer->setStatusColor( $dailyFantasyPlayer['StatusColor'] );

        return $currentDailyFantasyPlayer;
    }
}