<?php

namespace FantasyPro\DataBundle\Builder;

use FantasyPro\DataBundle\Entity\Schedule;
use FantasyPro\DataBundle\Helpers\DateHelper;

class ScheduleBuilder
{
    private $dateHelper;

    public function __construct( DateHelper $dateHelper )
    {
        $this->dateHelper = $dateHelper;
    }

    public function buildSchedule( $currentSchedule = null, $schedule )
    {
        if ( ! $currentSchedule) { // check if we already have the schedule stored
            $currentSchedule = new Schedule();
        }
        $currentSchedule->setGameKey( $schedule['GameKey'] );
        $currentSchedule->setSeasonType( $schedule['SeasonType'] );
        $currentSchedule->setSeason( $schedule['Season'] );
        $currentSchedule->setWeek( $schedule['Week'] );
        $currentSchedule->setDate( $this->dateHelper->parseDate( $schedule['Date'] ) );
        $currentSchedule->setAwayTeam( $schedule['AwayTeam'] );
        $currentSchedule->setHomeTeam( $schedule['HomeTeam'] );
        $currentSchedule->setChannel( $schedule['Channel'] );
        $currentSchedule->setPointSpread( $schedule['PointSpread'] );
        $currentSchedule->setOverUnder( $schedule['OverUnder'] );
        $currentSchedule->setStadiumID( $schedule['StadiumID'] );

        return $currentSchedule;
    }
}