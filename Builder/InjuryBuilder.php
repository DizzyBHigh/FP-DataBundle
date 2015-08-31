<?php

namespace FantasyPro\DataBundle\Builder;

use FantasyPro\DataBundle\Entity\Injury;
use FantasyPro\DataBundle\Helpers\DateHelper;

class InjuryBuilder
{

    /**
     * @var DateHelper $dateHelper
     */
    private $dateHelper;

    public function __construct( DateHelper $dateHelper )
    {
        $this->dateHelper = $dateHelper;
    }

    public function buildInjury( $currentInjury = null, $injury )
    {
        if ( ! $currentInjury) { // check if we already have the injury stored
            $currentInjury = new Injury();
        }
        $currentInjury->setInjuryID( $injury['InjuryID'] );
        $currentInjury->setSeasonType( $injury['SeasonType'] );
        $currentInjury->setSeason( $injury['Season'] );
        $currentInjury->setWeek( $injury['Week'] );
        $currentInjury->setPlayerID( $injury['PlayerID'] );
        $currentInjury->setName( $injury['Name'] );
        $currentInjury->setPosition( $injury['Position'] );
        $currentInjury->setNumber( $injury['Number'] );
        $currentInjury->setTeam( $injury['Team'] );
        $currentInjury->setOpponent( $injury['Opponent'] );
        $currentInjury->setBodyPart( $injury['BodyPart'] );
        $currentInjury->setStatus( $injury['Status'] );
        $currentInjury->setPractice( $injury['Practice'] );
        $currentInjury->setPracticeDescription( $injury['PracticeDescription'] );
        $currentInjury->setUpdated( $this->dateHelper->parseDate( $injury['Updated'] ) );
        $currentInjury->setDeclaredInactive( $injury['DeclaredInactive'] );

        return $currentInjury;
    }
}