<?php

namespace FantasyPro\DataBundle\Builder;

use FantasyPro\DataBundle\Entity\TimeFrame;
use FantasyPro\DataBundle\Helpers\DateHelper;
use FantasyPro\DataBundle\Helpers\SeasonHelper;

class TimeFrameBuilder
{
    /**
     * @var DateHelper $dateHelper
     */
    private $dateHelper;
    private $seasonHelper;

    public function __construct( DateHelper $dateHelper, SeasonHelper $seasonHelper )
    {
        $this->dateHelper = $dateHelper;
        $this->seasonHelper = $seasonHelper;
    }

    public function buildTimeFrame( $currentTimeFrame = null, $timeframe )
    {
        if ( ! $currentTimeFrame) { // check if we already have the schedule stored
            $currentTimeFrame = new TimeFrame();
        }
        $currentTimeFrame->setTimeframeID( $timeframe['Season']. $this->seasonHelper->convertSeasonTypeNum($timeframe['SeasonType']). $timeframe['Week']);
        $currentTimeFrame->setSeasonType( $timeframe['SeasonType'] );
        $currentTimeFrame->setSeason( $timeframe['Season'] );
        $currentTimeFrame->setWeek( $timeframe['Week'] );
        $currentTimeFrame->setName( $timeframe['Name'] );
        $currentTimeFrame->setShortName( $timeframe['ShortName'] );
        $currentTimeFrame->setStartDate( $this->dateHelper->parseDate( $timeframe['StartDate'] ) );
        $currentTimeFrame->setEndDate( $this->dateHelper->parseDate( $timeframe['EndDate'] ) );
        $currentTimeFrame->setFirstGameStart( $this->dateHelper->parseDate( $timeframe['FirstGameStart'] ) );
        $currentTimeFrame->setFirstGameEnd( $this->dateHelper->parseDate( $timeframe['FirstGameEnd'] ) );
        $currentTimeFrame->setLastGameEnd( $this->dateHelper->parseDate( $timeframe['LastGameEnd'] ) );
        $currentTimeFrame->setHasGames( $timeframe['HasGames'] );
        $currentTimeFrame->setHasStarted( $timeframe['HasStarted'] );
        $currentTimeFrame->setHasEnded( $timeframe['HasEnded'] );
        $currentTimeFrame->setHasFirstGameStarted( $timeframe['HasFirstGameStarted'] );
        $currentTimeFrame->setHasFirstGameEnded( $timeframe['HasFirstGameEnded'] );
        $currentTimeFrame->setHasLastGameEnded( $timeframe['HasLastGameEnded'] );

        return $currentTimeFrame;
    }
}