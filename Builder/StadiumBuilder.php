<?php

namespace FantasyPro\DataBundle\Builder;

use FantasyPro\DataBundle\Entity\Stadium;

class StadiumBuilder
{
    // depending on the needs but this should also have a different name
    // like buildBasic or buildFull or buildBlaBlaBla or buildTest
    public function buildStadium( $currentStadium = null, $stadium )
    {
        if ( ! $currentStadium) {
            $currentStadium = new Stadium();
        }
        $currentStadium->setStadiumID( $stadium['StadiumID'] );
        $currentStadium->setName( $stadium['Name'] );
        $currentStadium->setCity( $stadium['City'] );
        $currentStadium->setState( $stadium['State'] );
        $currentStadium->setCountry( $stadium['Country'] );
        $currentStadium->setCapacity( $stadium['Capacity'] );
        $currentStadium->setPlayingSurface( $stadium['PlayingSurface'] );

        return $currentStadium;
    }
}