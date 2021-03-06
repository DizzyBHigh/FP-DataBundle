<?php

namespace FantasyPro\DataBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * PlayerRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PlayerRepository extends EntityRepository
{
    public function getPlayersByTeam($teams){

        $players = $this->findBy(array('team' => $teams, ''));
        return $players;
    }

    public function getPlayersByTeamQuery(array $teams){
        $query = $this->createQueryBuilder('p')
                      ->select('p')
                      ->Where('p.team in (:teams)')
                      ->setParameter('teams', $teams);
        return $query;
    }
}
