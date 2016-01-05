<?php

namespace FantasyPro\DataBundle\Entity;

/**
 * DailyFantasyPlayerRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class DailyFantasyPlayerRepository extends \Doctrine\ORM\EntityRepository
{
    public function getPlayersByTeam($teams){

        $players = $this->findBy(array('team' => $teams));

        return $players;
    }
    public function getAvaliablePlayersByTeam(array $homeTeams, array $awayTeams, $date){
        $qb = $this->createQueryBuilder('p')
            ->Where('p.team in (:team) AND p.opponent in (:opponent) AND p.date = :date')
            ->orderBy('p.position', 'ASC')
            ->setParameter('date', $date)
            ->setParameter('team', $homeTeams)
            ->setParameter('opponent', $awayTeams);
        return $qb;
    }

    public function getPlayersByTeamQuery(array $homeTeams, array $awayTeams, $date){
        $qb = $this->createQueryBuilder('p')
            ->select('p')
            //->where($qb->expr()->isNotNull('p.position'))
            ->Where('p.team in (:team) AND p.opponent in (:opponent) AND p.date = :date AND p.position IS NOT NULL')
            ->orderBy('p.position', 'ASC')
            ->setParameter('date', $date)
            //->setParameter('position', 'IS NOT NULL')
            ->setParameter('team', $homeTeams)
            ->setParameter('opponent', $awayTeams);
        return $qb;
    }
}
