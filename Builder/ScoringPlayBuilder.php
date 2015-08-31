<?php

namespace FantasyPro\DataBundle\Builder;

use FantasyPro\DataBundle\Entity\ScoringPlay;
use FantasyPro\DataBundle\Helpers\DateHelper;

class ScoringPlayBuilder
{
    /**
     * @var DateHelper $dateHelper
     */
    private $dateHelper;

    public function __construct( DateHelper $dateHelper )
    {
        $this->dateHelper = $dateHelper;
    }

    public function buildScore( $currentScoringPlay = null, $scoringPlay )
    {
        if ( ! $currentScoringPlay) { // check if we already have the score stored
            $currentScoringPlay = new ScoringPlay();
        }
        $currentScoringPlay->setGameKey( $scoringPlay['GameKey'] );
        $currentScoringPlay->setSeasonType( $scoringPlay['SeasonType'] );
        $currentScoringPlay->setScoringPlayID( $scoringPlay['ScoringPlayID'] );
        $currentScoringPlay->setSeason( $scoringPlay['Season'] );
        $currentScoringPlay->setWeek( $scoringPlay['Week'] );
        $currentScoringPlay->setAwayTeam( $scoringPlay['AwayTeam'] );
        $currentScoringPlay->setHomeTeam( $scoringPlay['HomeTeam'] );
        $currentScoringPlay->setDate( $this->dateHelper->parseDate( $scoringPlay['Date'] ) );
        $currentScoringPlay->setSequence( $scoringPlay['Sequence'] );
        $currentScoringPlay->setTeam( $scoringPlay['Team'] );
        $currentScoringPlay->setQuarter( $scoringPlay['Quarter'] );
        $currentScoringPlay->setTimeRemaining( $scoringPlay['TimeRemaining'] );
        $currentScoringPlay->setPlayDescription( $scoringPlay['PlayDescription'] );
        $currentScoringPlay->setAwayScore( $scoringPlay['AwayScore'] );
        $currentScoringPlay->setHomeScore( $scoringPlay['HomeScore'] );

        return $currentScoringPlay;
    }
}