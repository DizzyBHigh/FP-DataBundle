<?php

namespace FantasyPro\DataBundle\Builder;

use FantasyPro\DataBundle\Entity\TimeFrame;
use FantasyPro\DataBundle\Helpers\DateHelper;

class TimeFrameBuilder
{
    /**
     * @var DateHelper $dateHelper
     */
    private $dateHelper;

    public function __construct( DateHelper $dateHelper )
    {
        $this->dateHelper = $dateHelper;
    }

    public function buildTimeFrame( $currentTimeFrame = null, $timeFrame )
    {
        if ( ! $currentTimeFrame) { // check if we already have the schedule stored
            $currentTimeFrame = new TimeFrame();
        }

        $currentTimeFrame->setSeasonType( $timeFrame['SeasonType'] );
        $currentTimeFrame->setSeason( $timeFrame['Season'] );
        $currentTimeFrame->setWeek( $timeFrame['Week'] );
        $currentTimeFrame->setName( $timeFrame['Name'] );
        $currentTimeFrame->setShortName( $timeFrame['ShortName'] );
        $currentTimeFrame->setStartDate( $this->dateHelper->parseDate( $timeFrame['StartDate'] ) );
        $currentTimeFrame->setEndDate( $this->dateHelper->parseDate( $timeFrame['EndDate'] ) );
        $currentTimeFrame->setFirstGameStart( $this->dateHelper->parseDate( $timeFrame['FirstGameStart'] ) );
        $currentTimeFrame->setFirstGameEnd( $this->dateHelper->parseDate( $timeFrame['FirstGameEnd'] ) );
        $currentTimeFrame->setLastGameEnd( $this->dateHelper->parseDate( $timeFrame['LastGameEnd'] ) );
        $currentTimeFrame->setHasGames( $timeFrame['HasGames'] );
        $currentTimeFrame->setHasStarted( $timeFrame['HasStarted'] );
        $currentTimeFrame->setHasEnded( $timeFrame['HasEnded'] );
        $currentTimeFrame->setHasFirstGameStarted( $timeFrame['HasFirstGameStarted'] );
        $currentTimeFrame->setHasFirstGameEnded( $timeFrame['HasFirstGameEnded'] );
        $currentTimeFrame->setHasLastGameEnded( $timeFrame['HasLastGameEnded'] );

        return $currentTimeFrame;
    }
}