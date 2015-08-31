<?php

namespace FantasyPro\DataBundle\Helpers;

use FantasyDataAPI\Client;

class DataFetcher
{

    /**
     * @var Client $client
     */
    private $client;

    public function __construct( Client $client )
    {
        $this->client = $client;
    }

    public function activeBoxScores()
    {
        $data = $this->client->ActiveBoxScores( [ ] );

        return $data;
    }

    public function areAnyGamesInProgress()
    {
        $data = $this->client->AreAnyGamesInProgress( [ ] );

        return $data;
    }

    public function boxScore( $season, $week, $team )
    {
        $criteria = array( 'Season' => $season, 'Week' => $week, 'Team' => $team );
        $data     = $this->client->BoxScore( $criteria );

        return $data;
    }

    public function boxScoresDelta( $season, $week, $minutes )
    {
        $criteria = array( 'Season' => $season, 'Week' => $week, 'Minutes' => $minutes );
        $data     = $this->client->BoxScoresDelta( $criteria );

        return $data;
    }

    public function recentlyUpdatedBoxScores( $minutes )
    {
        $criteria = array( 'Minutes' => $minutes );
        $data     = $this->client->recentlyUpdatedBoxScores( $criteria );

        return $data;
    }

    public function boxScores( $season, $week )
    {
        $criteria = array( 'Season' => $season, 'Week' => $week );
        $data     = $this->client->BoxScores( $criteria );

        return $data;
    }

    public function byes( $season )
    {
        $criteria = array( 'Season' => $season );
        $data     = $this->client->Byes( $criteria );

        return $data;
    }

    public function currentSeason()
    {
        $data = $this->client->CurrentSeason( [ ] );

        $season = $data[0];

        return $season;
    }

    public function dailyFantasyPlayers( $date )
    {

        $criteria = array( 'Date' => $date );
        $data     = $this->client->DailyFantasyPlayers( $criteria );

        return $data;
    }

    public function fantasyDefenceByGame( $season, $week )
    {

        $criteria = array( 'Season' => $season, 'Week' => $week );
        $data     = $this->client->FantasyDefenseByGame( $criteria );

        return $data;
    }

    public function fantasyDefenceBySeason( $season )
    {

        $criteria = array( 'Season' => $season );
        $data     = $this->client->FantasyDefenseBySeason( $criteria );

        return $data;
    }

    public function fantasyDefenceProjectionsByGame( $season, $week )
    {

        $criteria = array( 'Season' => $season, 'Week' => $week );
        $data     = $this->client->FantasyDefenseProjectionsByGame( $criteria );

        return $data;
    }

    public function fantasyDefenceProjectionsBySeason( $season )
    {

        $criteria = array( 'Season' => $season );
        $data     = $this->client->FantasyDefenseProjectionsBySeason( $criteria );

        return $data;
    }

    public function fantasyPlayersByADP()
    {

        $data = $this->client->FantasyPlayersByADP( [ ] );

        return $data;
    }

    public function finalBoxScores()
    {
        $data = $this->client->FinalBoxScores( [ ] );

        return $data;
    }

    public function freeAgents()
    {
        $data = $this->client->FreeAgents( [ ] );

        return $data;
    }

    public function gameLeagueLeadersByWeek( $season, $week, $position, $column )
    {

        $criteria = array( 'Season' => $season, 'Week' => $week, 'Position' => $position, 'Column' => $column );
        $data     = $this->client->GameLeagueLeadersByWeek( $criteria );

        return $data;
    }

    public function gameStats( $season )
    {
        $criteria = array( 'Season' => $season );
        $data     = $this->client->GameStats( $criteria );

        return $data;
    }

    public function gameStatsByWeek( $season, $week )
    {
        $criteria = array( 'Season' => $season, 'Week' => $week );
        //var_dump($criteria);die();
        $data = $this->client->GameStatsByWeek( $criteria );

        return $data;
    }

    public function injuries( $season, $seasonType, $week )
    {
        $criteria = array( 'Season' => $season.$seasonType, 'Week' => $week );
        $data     = $this->client->Injuries( $criteria );

        return $data;
    }

    public function injuriesByTeam( $season, $seasonType, $week, $team )
    {
        $criteria = array( 'Season' => $season.$seasonType, 'Week' => $week, 'Team' => $team );
        $data     = $this->client->Injuries( $criteria );

        return $data;
    }

    public function liveBoxScores()
    {
        $data = $this->client->LiveBoxScores( [ ] );

        return $data;
    }

    public function news()
    {
        $data = $this->client->News( [ ] );

        return $data;
    }

    public function newsByPlayerID( $playerID )
    {
        $criteria = array( 'PlayerID' => $playerID );
        $data     = $this->client->NewsByPlayerID( $criteria );

        return $data;
    }

    public function newsByTeam( $team )
    {
        $criteria = array( 'Team' => $team );
        $data     = $this->client->NewsByTeam( $criteria );

        return $data;
    }

    public function players()
    {
        $data = $this->client->Players();

        return $data;
    }

    public function playersByTeam( $team )
    {
        $criteria = array( 'Team' => $team );
        $data     = $this->client->PlayersByTeam( $criteria );

        return $data;
    }

    public function playerByID( $player )
    {
        $criteria = array( 'PlayerID' => $player );
        $data     = $this->client->Player( $criteria );

        return $data;
    }

    public function PlayerGameProjectionStatsByTeam( $season, $week, $team )
    {
        $criteria = array( 'Season' => $season, 'Week' => $week, 'Team' => $team );
        $data     = $this->client->PlayerGameProjectionStatsByTeam( $criteria );

        return $data;
    }

    public function PlayerGameProjectionStatsByWeek( $season, $week )
    {
        $criteria = array( 'Season' => $season, 'Week' => $week );
        $data     = $this->client->PlayerGameProjectionStatsByWeek( $criteria );

        return $data;
    }

    public function PlayerGameProjectionStatsByPlayerID( $season, $week, $playerID )
    {
        $criteria = array( 'Season' => $season, 'Week' => $week, 'PlayerID' => $playerID );
        $data     = $this->client->PlayerGameProjectionStatsByPlayerID( $criteria );

        return $data;
    }

    public function playerGameStatsByPlayerID( $season, $week, $playerID )
    {
        $criteria = array( 'Season' => $season, 'Week' => $week, 'PlayerID' => $playerID );
        $data     = $this->client->PlayerGameStatsByPlayerID( $criteria );

        return $data;
    }

    public function playerGameStatsByTeam( $season, $week, $team )
    {
        $criteria = array( 'Season' => $season, 'Week' => $week, 'Team' => $team );
        $data     = $this->client->PlayerGameStatsByTeam( $criteria );

        return $data;
    }

    public function playerGameStatsByWeek( $season, $week )
    {
        $criteria = array( 'Season' => $season, 'Week' => $week );
        $data     = $this->client->PlayerGameStatsByWeek( $criteria );

        return $data;
    }

    public function playerSeasonStats( $season )
    {
        $criteria = array( 'Season' => $season );
        $data     = $this->client->PlayerSeasonStats( $criteria );

        return $data;
    }

    public function playerSeasonStatsByPlayerID( $season, $player )
    {
        $criteria = array( 'Season' => $season, 'PlayerID' => $player );
        $data     = $this->client->PlayerSeasonStatsByPlayerID( $criteria );

        return $data;
    }

    public function playerSeasonStatsByTeam( $season, $team )
    {
        $criteria = array( 'Season' => $season, 'Team' => $team );
        $data     = $this->client->PlayerSeasonStatsByTeam( $criteria );

        return $data;
    }

    public function playerSeasonProjectionStats( $season )
    {
        $criteria = array( 'Season' => $season );
        $data     = $this->client->PlayerSeasonProjectionStats( $criteria );

        return $data;
    }

    public function playerSeasonProjectionStatsByPlayerID( $season, $player )
    {
        $criteria = array( 'Season' => $season, 'PlayerID' => $player );
        $data     = $this->client->PlayerSeasonProjectionStatsByPlayerID( $criteria );

        return $data;
    }

    public function playerSeasonProjectionStatsByTeam( $season, $team )
    {
        $criteria = array( 'Season' => $season, 'Team' => $team );
        $data     = $this->client->PlayerSeasonProjectionStatsByTeam( $criteria );

        return $data;
    }

    public function Schedules( $season )
    {
        $criteria = array( 'Season' => $season );
        $data     = $this->client->Schedules( $criteria );

        return $data;
    }

    public function scoresBySeason( $season )
    {
        $criteria = array( 'Season' => $season );
        $data     = $this->client->Scores( $criteria );

        return $data;
    }

    public function scoresByWeek( $season, $week )
    {
        $criteria = array( 'Season' => $season, 'Week' => $week );
        $data     = $this->client->ScoresByWeek( $criteria );

        return $data;
    }

    public function seasonLeagueLeaders( $season, $position, $sortColumn )
    {
        $criteria = array( 'Season' => $season, 'Position' => $position, 'Column' => $sortColumn );
        $data     = $this->client->SeasonLeagueLeaders( $criteria );

        return $data;
    }

    public function stadiums()
    {
        $data = $this->client->Stadiums( [ ] );

        return $data;
    }

    public function standings( $season )
    {
        $criteria = array( 'Season' => $season );
        $data     = $this->client->Standings( $criteria );

        return $data;
    }

    public function teamGameStats( $season, $week )
    {
        $criteria = array( 'Season' => $season, 'Week' => $week );
        $data     = $this->client->TeamGameStats( $criteria );

        return $data;
    }

    public function teams( $season )
    {
        if ($season = 'active') {
            $data = $this->client->Teams( [ ] );
        } else {
            $criteria = array( 'Season' => $season );
            $data     = $this->client->Teams( $criteria );
        }


        return $data;
    }

    public function teamSeasonStats( $season )
    {
        $criteria = array( 'Season' => $season );
        $data     = $this->client->TeamSeasonStats( $criteria );

        return $data;
    }

    public function timeFrames( $type )
    {
        $criteria   = array( 'Type' => $type );
        $timeFrames = $this->client->Timeframes( $criteria );

        return $timeFrames;
    }

    public function UpcomingSeason()
    {
        $upcomingSeason = $this->client->UpcomingSeason( [ ] );
        $season         = $upcomingSeason[0];

        return $season;
    }

    public function LastSeason()
    {
        $currentSeason = $this->client->LastCompletedSeason( [ ] );
        $season        = $currentSeason[0];

        return $season;
    }

    public function LastWeek()
    {
        $currentWeek = $this->client->LastCompletedWeek( [ ] );
        $week        = $currentWeek[0];

        return $week;
    }

    public function currentWeek()
    {
        $currentWeek = $this->client->CurrentWeek( [ ] );
        $week        = $currentWeek[0];

        return $week;
    }

    public function UpcomingWeek()
    {
        $currentWeek = $this->client->UpcomingWeek( [ ] );
        $week        = $currentWeek[0];

        return $week;
    }

}