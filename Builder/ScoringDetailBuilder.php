<?php

namespace FantasyPro\DataBundle\Builder;

use FantasyPro\DataBundle\Entity\ScoringDetail;
use FantasyPro\DataBundle\Helpers\DateHelper;

class ScoringDetailBuilder
{


    public function __construct()
    {

    }

    public function buildScore( $currentScoringDetail = null, $scoringDetail )
    {
        if ( ! $currentScoringDetail) { // check if we already have the score stored
            $currentScoringDetail = new ScoringDetail();
        }
        $currentScoringDetail->setGameKey( $scoringDetail['GameKey'] );
        $currentScoringDetail->setSeasonType( $scoringDetail['SeasonType'] );
        $currentScoringDetail->setPlayerID( $scoringDetail['PlayerID'] );
        $currentScoringDetail->setTeam( $scoringDetail['Team'] );
        $currentScoringDetail->setSeason( $scoringDetail['Season'] );
        $currentScoringDetail->setWeek( $scoringDetail['Week'] );
        $currentScoringDetail->setScoringType( $scoringDetail['ScoringType'] );
        $currentScoringDetail->setScoringType( $scoringDetail['ScoringType'] );
        $currentScoringDetail->setLength( $scoringDetail['Length'] );
        $currentScoringDetail->setScoringDetailID( $scoringDetail['ScoringDetailID'] );
        $currentScoringDetail->setPlayerGameID( $scoringDetail['PlayerGameID'] );

        return $currentScoringDetail;
    }
}