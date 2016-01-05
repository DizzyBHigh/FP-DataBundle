<?php

namespace FantasyPro\DataBundle\Builder;

use Doctrine\ORM\EntityManager;
use FantasyPro\DataBundle\Entity\FantasyPlayer;
use FantasyPro\DataBundle\Helpers\DateHelper;

class FantasyPlayerBuilder
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

    public function buildFantasyPlayer( $currentFantasyPlayer = null, $fantasyPlayer )
    {
        if ( ! $currentFantasyPlayer) { // check if we already have the player stored
            $currentFantasyPlayer = new FantasyPlayer();
        }
        $currentFantasyPlayer->setFantasyPlayerKey($fantasyPlayer['FantasyPlayerKey']);
        $currentFantasyPlayer->setPlayerID( $fantasyPlayer['PlayerID'] );
        $currentFantasyPlayer->setName( $fantasyPlayer['Name'] );
        $currentFantasyPlayer->setTeam( $fantasyPlayer['Team'] );
        $currentFantasyPlayer->setPosition( $fantasyPlayer['Position'] );
        $currentFantasyPlayer->setAverageDraftPosition( $fantasyPlayer['AverageDraftPosition'] );
        $currentFantasyPlayer->setAverageDraftPositionPPR( $fantasyPlayer['AverageDraftPositionPPR'] );
        $currentFantasyPlayer->setByeWeek( $fantasyPlayer['ByeWeek'] );
        $currentFantasyPlayer->setProjectedFantasyPoints( $fantasyPlayer['ProjectedFantasyPoints'] );
        $currentFantasyPlayer->setAuctionValue( $fantasyPlayer['AuctionValue'] );
        $currentFantasyPlayer->setAuctionValuePPR( $fantasyPlayer['AuctionValuePPR'] );
        return $currentFantasyPlayer;
    }
}