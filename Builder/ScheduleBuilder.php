<?php

namespace FantasyPro\DataBundle\Builder;

use FantasyPro\DataBundle\Entity\Schedule;
use FantasyPro\DataBundle\Helpers\DateHelper;
use FantasyPro\DataBundle\Helpers\SeasonHelper;

class ScheduleBuilder
{
    private $dateHelper;
    private $seasonHelper;

    public function __construct( DateHelper $dateHelper, SeasonHelper $seasonHelper  )
    {
        $this->dateHelper = $dateHelper;
        $this->seasonHelper = $seasonHelper;
    }

    public function buildSchedule( $currentSchedule = null, $schedule )
    {
        if ( ! $currentSchedule) { // check if we already have the schedule stored
            $currentSchedule = new Schedule();
        }
        $currentSchedule->setTimeframeID( $schedule['Season']. $this->seasonHelper->convertSeasonTypeNum($schedule['SeasonType']). $schedule['Week']);
        $currentSchedule->setGameKey( $schedule['GameKey'] );
        $currentSchedule->setSeasonType( $schedule['SeasonType'] );
        $currentSchedule->setSeason( $schedule['Season'] );
        $currentSchedule->setWeek( $schedule['Week'] );
        $currentSchedule->setDate( $this->dateHelper->parseDate( $schedule['Date'] ) );
        $currentSchedule->setHrDate( $this->dateHelper->datetimeToHRString($this->dateHelper->parseDate( $schedule['Date'] )));
        $currentSchedule->setDateOnly( $this->dateHelper->parseDate( $schedule['Date'] ) );
        $currentSchedule->setTimeOnly( $this->dateHelper->parseDate( $schedule['Date'] ) );
        $currentSchedule->setAwayTeam( $schedule['AwayTeam'] );
        $currentSchedule->setHomeTeam( $schedule['HomeTeam'] );
        $currentSchedule->setChannel( $schedule['Channel'] );
        $currentSchedule->setPointSpread( $schedule['PointSpread'] );
        $currentSchedule->setOverUnder( $schedule['OverUnder'] );
        $currentSchedule->setStadiumID( $schedule['StadiumID'] );

        return $currentSchedule;
    }
}