<?php


namespace FantasyPro\DataBundle\Helpers;

use FantasyDataAPI\Client;

class SeasonHelper
{

    /**
     * @var Client $client
     */
    private $client;

    public function __construct( Client $client )
    {
        $this->client = $client;
    }

    public function getCurrentSeason()
    {
        $currentSeason = $this->client->UpcomingSeason();
        $season        = $currentSeason[0];

        return $season;
    }

    public function getLastSeason()
    {
        $currentSeason = $this->client->LastCompletedSeason();
        $season        = $currentSeason[0];

        return $season;
    }

    public function GetLastAndNext()
    {
        $seasons = array();

        $season = $this->getLastSeason();
        array_push( $seasons, $season );

        $season = $this->getCurrentSeason();
        array_push( $seasons, $season );

        return $seasons;
    }

    public function convertSeasonTypeNum( $seasonType )
    {
        $st = 0;
        switch ($seasonType) {
            case '1':
                $st = 'REG';
                break;
            case '2':
                $st = 'PRE';
                break;
            case '3':
                $st = "POST";
                break;
            case '4':
                $st = 'OFF';
                break;
        }

        return $st;
    }
}