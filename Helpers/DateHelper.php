<?php

namespace FantasyPro\DataBundle\Helpers;

use DateTime;
use DateTimeZone;
use DateInterval;

class DateHelper
{
    public function parseDate( $dateString )
    {
        if ($dateString) {

            /** previously used to get the offset, v2 no longer passes the offset string
             * new format: 2014-08-26T00:00:00 (times returned by the FantasyDataAPI are in EST)
             *   preg_match( '/\/Date\((\d+)([-+])(\d+)\)\//', $dateString, $date );
             *   $timestamp = $date[1] / 1000;
             *   $operator  = $date[2]; //extract the timezone offset operator (+/-)
             *   $hours     = $date[3] * 36; // Get the timezone offset in seconds
             *   var_dump($dateTime);die();
             *
             *   $datetime->setTimestamp( $timestamp );
             *   $datetime->modify( $operator.$hours.' seconds' );// Adjust the DateTime for UTC
             *   */
            //$datetime->modify( $operator.$hours.' seconds' );// Adjust the DateTime for UTC
            //$operator = "-";
            //$hours = 4 *3600;
            $dateTime = new \DateTime();
            $newTime  = strtotime( $dateString );
            $dateTime->setTimestamp( $newTime );
            $dateTime->setTimezone( new DateTimeZone( 'America/New_York' ) );

            return $dateTime;
        }

        return ( null );
    }

    public function format_interval( DateInterval $interval )
    {
        $result = "";
        if ($interval->y) {
            $result .= $interval->format( "%y years " );
        }
        if ($interval->m) {
            $result .= $interval->format( "%m months " );
        }
        if ($interval->d) {
            $result .= $interval->format( "%d days " );
        }
        if ($interval->h) {
            $result .= $interval->format( "%h hours " );
        }
        if ($interval->i) {
            $result .= $interval->format( "%i minutes " );
        }
        if ($interval->s) {
            $result .= $interval->format( "%s seconds " );
        }

        return $result;
    }

    /**
     * @param DateTime $startTime
     *
     * @return string
     */
    public function getTaskTime( $startTime )
    {
        $endTime        = new \DateTime();
        $interval       = $startTime->diff( $endTime );
        $timeTookString = $this->format_interval( $interval );

        return $timeTookString;
    }

    function apiTodayDate()
    {
        $tz_object = new DateTimeZone( 'America/New_York' );
        $datetime  = new DateTime();
        $datetime->setTimezone( $tz_object );

        return strtoupper( $datetime->format( 'Y-M-d' ) );
    }


}