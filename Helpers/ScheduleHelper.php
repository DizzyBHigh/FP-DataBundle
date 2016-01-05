<?php
/**
 * ScheduleHelper.php
 * Created by: Dizzy B High 
 * Email: dizzy@base5designs.co.uk.
 * User: Dizzy
 * NFLtest - 09, 2015
 */

namespace FantasyPro\DataBundle\Helpers;
use Doctrine\ORM\EntityManager;

class ScheduleHelper {
    /**
     * @var EntityManager $em
     */
    private $em;

    public function __construct( EntityManager $em )
    {
        $this->em      = $em;
    }

    public function getSchedules(){
        $scheduleRepo = $this->em->getRepository('DataBundle:Schedule');

        $schedules = $scheduleRepo->getSchedules();

        return $schedules;
    }

    public function getSchedulesForTimeframe(){

       $timeframeRepo = $this->em->getRepository('DataBundle:TimeFrame');
       $scheduleRepo = $this->em->getRepository('DataBundle:Schedule');

       $currentTimeFrame = $timeframeRepo->getCurrentTimeFrame();

       $timeframeID = $currentTimeFrame->getTimeframeID();

       $schedules = $scheduleRepo->getSchedulesforTimeframe($timeframeID);

       return $schedules;
   }

    public function getSchedulesForDate($date){

        $scheduleRepo = $this->em->getRepository('DataBundle:Schedule');

        $schedules = $scheduleRepo->getSchedulesForDate($date);

        return $schedules;
    }

}