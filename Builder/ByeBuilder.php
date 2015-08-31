<?php

namespace FantasyPro\DataBundle\Builder;

use FantasyPro\DataBundle\Entity\Bye;

class ByeBuilder
{

    public function buildBye( $currentBye = null, $bye )
    {
        if ( ! $currentBye) { // check if we already have the schedule stored
            $currentBye = new Bye();
        }
        $currentBye->setSeason( $bye['Season'] );
        $currentBye->setWeek( $bye['Week'] );
        $currentBye->setTeam( $bye['Team'] );

        return $currentBye;
    }
}