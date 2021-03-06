<?php

namespace FantasyPro\DataBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * ScheduleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ScheduleRepository extends EntityRepository
{
    /**
     * Gets Schedules for all timeframes
     *
     * @return Schedule
     */
    public function getSchedules()
    {
        $query = $this->createQueryBuilder('q')
                      ->select('q.date, q.timeframeID')
                      ->getQuery();
        return $query->getResult();
    }

    /**
     * Gets Schedules for the season, seasonType and week passed
     * We will use this to be able to select what date we would like to create a contest for
     *
     * @param $timeframeID
     *
     * @return Schedule
     */
    public function getSchedulesForTimeFrame($timeframeID)
    {
        $query = $this->createQueryBuilder('q')
            ->select('DISTINCT q.date, q.timeframeID')
            ->Where('q.timeframeID = :timeframeID  ORDER BY q.date ASC')
            ->setParameter('timeframeID', $timeframeID)
            ->getQuery();

        return $query->getResult();
    }

    /**
     * Gets Schedules for the date passed
     * We will use this to show what games will be played on the selected date
     * @param $date
     *
     * @return Schedule
     */
    public function getSchedulesForDate($date)
    {
        $query = $this->createQueryBuilder('q')
            ->select(' q')
            ->Where('q.date = :date')
            ->setParameter('date', $date)
            ->getQuery();
        return $query->getResult();
    }

    public function getRemainingSchedulesForTimeframe($timeframeID){
        $date = new \DateTime();
        var_dump($date);
        $query = $this->createQueryBuilder('q')
            ->select('DISTINCT q.date, q.timeframeID, q.dateOnly, q.timeOnly')
            ->Where(' q.date > :nowDate ORDER BY q.date ASC')
            //->setParameter('timeframeID', $timeframeID)
            ->setParameter('nowDate', $date)
            ->getQuery();

        return $query->getResult();
    }

    public function getCurrentSchedules(){
        $startDate = new \DateTime('now');
        $endDate = new \DateTime('+ 1 week');
        $query = $this->createQueryBuilder('q')
            ->select('q')
            ->andWhere('q.date >= :startdate')
            ->andWhere('q.date <= :enddate')
            ->setParameter('startdate', $startDate->format('Y-m-d H:i:s'))
            ->setParameter('enddate', $endDate->format('Y-m-d H:i:s'))
            ->getQuery()
            ->getResult();
        var_dump($query);

        return $query;
    }

    public function getRemainingSchedulesQuery(){
        $startDate = new \DateTime('now');
        $query = $this->createQueryBuilder('q')
                      ->select('q')
                      ->andWhere('q.date >= :startdate')
                      ->setParameter('startdate', $startDate->format('Y-m-d H:i:s'));
        return $query;
    }
    public function getAllSchedulesQuery(){
        $query = $this->createQueryBuilder('q')
                      ->select('q');
        return $query;
    }
}
