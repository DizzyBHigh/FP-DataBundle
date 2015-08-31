<?php

namespace FantasyPro\DataBundle\Builder;

use FantasyPro\DataBundle\Entity\Score;
use FantasyPro\DataBundle\Helpers\DateHelper;

class ScoreBuilder
{
    /**
     * @var DateHelper $dateHelper
     */
    private $dateHelper;

    public function __construct( DateHelper $dateHelper )
    {
        $this->dateHelper = $dateHelper;
    }

    public function buildScore( $currentScore = null, $score )
    {
        if ( ! $currentScore) { // check if we already have the score stored
            $currentScore = new Score();
        }
        $currentScore->setAwayScore( $score['AwayScore'] );
        $currentScore->setAwayScoreOvertime( $score['AwayScoreOvertime'] );
        $currentScore->setAwayScoreQuarter1( $score['AwayScoreQuarter1'] );
        $currentScore->setAwayScoreQuarter2( $score['AwayScoreQuarter2'] );
        $currentScore->setAwayScoreQuarter3( $score['AwayScoreQuarter3'] );
        $currentScore->setAwayScoreQuarter4( $score['AwayScoreQuarter4'] );
        $currentScore->setAwayTeam( $score['AwayTeam'] );
        $currentScore->setChannel( $score['Channel'] );
        $currentScore->setDate( $this->dateHelper->parseDate( $score['Date'] ) );
        $currentScore->setDistance( $score['Distance'] );
        $currentScore->setDown( $score['Down'] );
        $currentScore->setDownAndDistance( $score['DownAndDistance'] );
        $currentScore->setGameKey( $score['GameKey'] );
        $currentScore->setHas1stQuarterStarted( $score['Has1stQuarterStarted'] );
        $currentScore->setHas2ndQuarterStarted( $score['Has2ndQuarterStarted'] );
        $currentScore->setHas3rdQuarterStarted( $score['Has3rdQuarterStarted'] );
        $currentScore->setHas4thQuarterStarted( $score['Has4thQuarterStarted'] );
        $currentScore->setHasStarted( $score['HasStarted'] );
        $currentScore->setHomeScore( $score['HomeScore'] );
        $currentScore->setHomeScoreOvertime( $score['HomeScoreOvertime'] );
        $currentScore->setHomeScoreQuarter1( $score['HomeScoreQuarter1'] );
        $currentScore->setHomeScoreQuarter2( $score['HomeScoreQuarter2'] );
        $currentScore->setHomeScoreQuarter3( $score['HomeScoreQuarter3'] );
        $currentScore->setHomeScoreQuarter4( $score['HomeScoreQuarter4'] );
        $currentScore->setHomeTeam( $score['HomeTeam'] );
        $currentScore->setIsInProgress( $score['IsInProgress'] );
        $currentScore->setIsOver( $score['IsOver'] );
        $currentScore->setIsOvertime( $score['IsOvertime'] );
        $currentScore->setLastUpdated( $this->dateHelper->parseDate( $score['LastUpdated'] ) );
        $currentScore->setOverUnder( $score['OverUnder'] );
        $currentScore->setPointSpread( $score['PointSpread'] );
        $currentScore->setPossession( $score['Possession'] );
        $currentScore->setQuarter( $score['Quarter'] );
        $currentScore->setQuarterDescription( $score['QuarterDescription'] );
        $currentScore->setRedZone( $score['RedZone'] );
        $currentScore->setSeason( $score['Season'] );
        $currentScore->setSeasonType( $score['SeasonType'] );
        $currentScore->setStadiumID( $score['StadiumID'] );
        $currentScore->setTimeRemaining( $score['TimeRemaining'] );
        $currentScore->setWeek( $score['Week'] );
        $currentScore->setYardLine( $score['YardLine'] );
        $currentScore->setYardLineTerritory( $score['YardLineTerritory'] );

        return $currentScore;
    }
}