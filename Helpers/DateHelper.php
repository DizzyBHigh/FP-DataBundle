<?php

namespace FantasyPro\DataBundle\Helpers;

use DateTime;
use DateTimeZone;
use DateInterval;
use Symfony\Component\Validator\Constraints\Date;

class DateHelper
{
    public function parseDate( $dateString )
    {
        if ($dateString) {

            /**  previously used to get the offset, v2 no longer passes the offset string
             *   new format: 2014-08-26T00:00:00 (times returned by the FantasyDataAPI are in EST)
             *   Difference between EST and UTC is -4 hrs
             *   */
            //
            $operator = "-";
            $hours    = 4 * 3600;
            $dateTime = new \DateTime();
            $newTime  = strtotime( $dateString );
            $dateTime->setTimestamp( $newTime );
            $dateTime->modify( $operator.$hours.' seconds' );// Adjust the DateTime for UTC
            $dateTime->setTimezone( new DateTimeZone( 'UTC' ) );

            return $dateTime;
        }

        return ( null );
    }

    public function parseDateForDFP( $dateString )
    {
        if ($dateString) {

            /**  previously used to get the offset, v2 no longer passes the offset string
             *   new format: 2014-08-26T00:00:00 (times returned by the FantasyDataAPI are in EST)
             *   Difference between EST and UTC is -4 hrs
             *   */
            //
            $operator = "-";
            $hours    = 4 * 3600;
            $dateTime = new \DateTime();
            $newTime  = strtotime( $dateString );
            $dateTime->setTimestamp( $newTime );
            $dateTime->modify( $operator.$hours.' seconds' );// Adjust the DateTime for UTC
            $dateTime->setTimezone( new DateTimeZone( 'UTC' ) );

            return strtoupper( $dateTime->format( 'Y-M-d' ) );
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
        $tz_object = new DateTimeZone('UTC');
        $datetime  = new DateTime();
        $datetime->setTimezone( $tz_object );

        return strtoupper( $datetime->format( 'Y-M-d' ) );
    }

    function dfpDate()
    {
        $tz_object = new DateTimeZone('UTC');
        $datetime  = new DateTime();
        $datetime->setTimezone( $tz_object );

        return $datetime->format( 'y-m-d');
    }

    /**
     * @param DateTime $date
     *
     * @return string
     */
    function datetimeToHRString($date){
        /** @var DateTime $thisTimeZone */
        $thisDate = $date->getTimeStamp();
        /** @var DateTimeZone $thisTimeZone */
        $thisTimeZone = $date->getTimezone();

        //var_dump($thisTimeZone->getName());
        $thisDateString = $date->format(" jS F Y @ h:i a ");
        $thisDateString.= $thisTimeZone->getName();

        return $thisDateString;
    }
    /**
     * @param DateTime $date
     *
     * @return string
     */
    function dateToHRString($date){
        //var_dump($thisTimeZone->getName());
        $thisDateString = $date->format(" jS F Y");

        return $thisDateString;
    }



}