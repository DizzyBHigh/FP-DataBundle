FantasyDataAPI DataBundle for Symfony 2

# Console Commands

All of the console commands avaliable that directly access the api and store to the database are prefixed with ```fetch_data:```

ALL COMMANDS STORE THE DATA FROM THE CALL TO THE DATABASE

#Command Options General Info
Where nessacary each command has options you can specify which will allow you to pull specific data.
Depending on the command some options are not used, look at the invididual commands for what options can be used.

(the Default values listed here are not always used, check the command to see what the default value for that command is)

--season 
the season you want to pull data for e.g 2013, 2014, 2015 
(if not specified it defaults to the current season)

--seasonType
PRE, REG, POST, OFF, it not specified it defaults to the Regular Season
The NFL season is divided into Preseason, Regular Season, Post Season and Off Season
(if not specified it defaults to the Regular season)

--week
The week number to pull data for
current(default), Preseason (0 to 4), Regular Season (1 to 17), Postseason (1 to 4)

--team
The Abbreviation of the team you want to pull data for.
e.g WAS, NE

--player 
PlayerID to fetch News For 
none (default) Specified Player e.g 14257

--date 
a date in the for mat of YYYY-MMM-DD e.g 2014-AUG-08
(if not specified it defaults to todays date)


#TimeFrames 
(Entity = TimeFrames)
FantasyData API Call: [FantasyData: Timeframes](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf6f).

Fetches Timeframe Data

``` fetch_data:timeframes --type=[type] ```

options: --type=
current - (default) gets timeframes for the Season we are currently in.
all - gets every timeframe avaliable
upcoming - gets upcoming timeframes
recent - gets recent timeframes
completed - gets completed timeframes


#Byes 
(Entity = Byes)
FantasyData API Call: [FantasyData: Byes](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf42).

Fetches Bye Data 

``` fetch_data:byes --season={season} --seasonType={seasonType} ```

Avaliable Options --season -- seasonType

#DailyFantasyPlayers Command 
(Entity = DailyFantasyPlayer)
FantasyData API Call: [FantasyData: DailyFantasyPlayers](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf45).

``` fetch_data:dailyFantasyPlayers --date{date} ```

Avaliable options: --date

#FantasyDefence 
(Entitys = FantasyDefenseGame, FantasyDefenseProjectionsByGame, FantasyDefenseSeason, FantasyDefenseProjectionsBySeason)
FantasyData API Calls: 
[FantasyData: Fantasy Defence Game Stats](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf49).
[FantasyData: Fantasy Defence Season Stats](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf4a).
[FantasyData: Fantasy Defence Game Stats (Projected)](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf60).
[FantasyData: Fantasy Defence Season Stats (Projected)](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf5f).

Fetches FantasyDefence Data by Game or Projected.

``` fetch_data:fantasyDefence --period={period} --statType={statType} --season={season} --seasonType={seasonType} --week={week}```
Avaliable Options:

--period 
Wether to get gameStats or SeasonStats (defaults to game)

--statType
Wether to get normal  or projected Stats (defaults to normal)

--season
Season to pull data for (defaults to current)

--seasonType
SeasonType to pull data for (defaults to REG)

--week
Week to pull Stats for (defaults to current)
(if the --period option is set to season, this option is ignored, even if it has been set)

#GameStats
(Entitys = GameStatsByWeek, GameStatsBySeason, TeamGameStats, TeamSeasonStats)
FantasyData API Calls: 
[FantasyData: Game Stats By Season](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf4f).
[FantasyData: Game Stats By Week](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf50).
[FantasyData: Team Game Stats](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf6d).
[FantasyData: Team Season Stats](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf6c).

``` fetch_data:gameStats --season={season} --seasonType={seasonType} --week={week} --Team{team}```

Avaliable Options:

--season 
the season you want to pull data for e.g 2013, 2014, 2015 
(if not specified it defaults to the current season)

--seasonType
PRE, REG, POST, OFF, it not specified it defaults to the Regular Season
The NFL season is divided into Preseason, Regular Season, Post Season and Off Season
(if not specified it defaults to the Regular season)

--week
The week number to pull data for
none (default) current, Preseason (0 to 4), Regular Season (1 to 17), Postseason (1 to 4)
(If set Game Stats By Week Are Pulled, Otherwise Season Stats are pulled)

--team
The Abbreviation of the team you want to pull data for.
none(default), specified Team e.g WAS, NE
(if set Team Game Stats are Pulled, otherwise Game Stats by By Season/Week are pulled)

#Injury
(Entitys = Injury)
FantasyData API Calls: 
[FantasyData: Injuries](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf51).
[FantasyData: Injuries By Team](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf52).

``` fetch_data:injury --season={season} --seasonType={seasonType} --week={week} --Team{team}```

Avaliable Options:

--season 
the season you want to pull data for e.g 2013, 2014, 2015 
(if not specified it defaults to the current season)

--seasonType
PRE, REG, POST, OFF, it not specified it defaults to the Regular Season
The NFL season is divided into Preseason, Regular Season, Post Season and Off Season
(if not specified it defaults to the Regular season)

--week
The week number to pull data for
current (default), Preseason (0 to 4), Regular Season (1 to 17), Postseason (1 to 4)
(if not specified the Curent Week is pulled)

--team
The Abbreviation of the team you want to pull data for.
none(default), specified Team e.g WAS, NE
(if set Team Injuries are Pulled, otherwise Injuries by By Season/Week are pulled)

#LeagueLeaders 
(Entitys = GameLeagueLeaders, SeasonLeagueLeaders)
FantasyData API Calls: 
[FantasyData: League Leaders By Week](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf4d).
[FantasyData: League Leaders Season](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf68).

Fetches League Leaders Data.

``` fetch_data:leagueLeaders --period={period} --season={season} --seasonType={seasonType} --week={week} --position={position ==sortColumn={sortColumn}```
Avaliable Options:

--period 
Wether to get Game or Season League Leaders(defaults to game)

--season
Season to pull data for (defaults to current)

--seasonType
SeasonType to pull data for (defaults to REG)

--week
Week to pull Data for (defaults to current)
(if the --period option is set to season, this option is ignored, even if it has been set)

--Position
Player position to get stats for 
ALL (default), OFFENSE, QB, RB, WR, TE, DEFENCE, DL, LB, DB 

--sortColumn
Column to sort Data By
FantasyPoints (default), PassingYards, RushingYards, Receptions, Sacks, Interceptions, Touchdowns 


#News 
(Entitys = News)
FantasyData API Calls: 
[FantasyData: News By Player](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf57).
[FantasyData: News By Team](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf58).
[FantasyData: News Recent](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf56).

Fetches Recent News.
This Command ALWAYS retrives Recent News, the --player and --team options if specified are pulled on top of the recent news.

``` fetch_data:news --player={player} --team={team}```
Avaliable Options:

--player 
PlayerID to fetch News For 
none (default) Specified Player e.g 14257

--team
The Abbreviation of the team you want to pull data for.
none(default), specified Team e.g WAS, NE

#PlayerGameStats 
(Entitys = PlayerGame, PlayerGameProjectedStats)
FantasyData API Calls: 
[FantasyData: Player Game Stats By Player](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf59).
[FantasyData: Player Game Stats By Player (projected)](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf61).
[FantasyData: Player Game Stats By Team](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf5c).
[FantasyData: Player Game Stats By Team (Projected)](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf63).
[FantasyData: Player Game Stats By Week](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/55cfe16814338d08489fec35).
[FantasyData: Player Game Stats By Week (projected)](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/55cce10635491a2978e22641).

Fetches Player Game Stats.

``` fetch_data:playerGameStats --type={type} --season={season} --seasonType={seasonType} --week={week} --player={player} --team={team}```
Avaliable Options:

--type 
Wether to get Player Game Stats or Player Game Stats (Projected)
normal (default), projected

--season 
the season you want to pull data for e.g 2013, 2014, 2015 
(if not specified it defaults to the current season)

--seasonType
PRE, REG, POST, OFF, it not specified it defaults to the Regular Season
The NFL season is divided into Preseason, Regular Season, Post Season and Off Season
(if not specified it defaults to the Regular season)

--week
The week number to pull data for
current (default), Preseason (0 to 4), Regular Season (1 to 17), Postseason (1 to 4)
(if not specified the Curent Week is pulled)

--player 
PlayerID to fetch News For 
none (default) Specified Player e.g 14257

--team
The Abbreviation of the team you want to pull data for.
none(default), specified Team e.g WAS, NE
(if set Team Injuries are Pulled, otherwise Player Game Stats by Season/Week are pulled)

#Players
(Entity = Player)
FantasyData API Calls: 
[FantasyData: Player Details By Avaliable](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556bd53114338d21b472d14a).
[FantasyData: Player Details By FreeAgents](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf52).
[FantasyData: Player Details By Team](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf6a).
[FantasyData: Player Details By Player](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf5b/).

``` fetch_data:players --team={team} --player={player}```

Avaliable Options:

If no Options are set Freeagents and avaliable Players are pulled
If --team and --player are set both the playerID and PlayersByTeam calls are pulled

--team
The Abbreviation of the team you want to pull players for.
none(default), specified Team e.g WAS, NE
(if set Team players for the specified team are Pulled)

--player 
PlayerID for specific Player 
none (default) Specified Player e.g 14257
(if set Team the player for the specified playerID are Pulled)

#PlayerSeasonStats 
(Entitys = PlayerSeason, PlayerSeasonProjected)
FantasyData API Calls: 
[FantasyData: Player Season Stats](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/55d65a9235491a0dc879631a).
[FantasyData: Player Season Stats (projected)](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf64).
[FantasyData: Player Season Stats By Player](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf5a).
[FantasyData: Player Season Stats By Player (Projected)](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf62).
[FantasyData: Player Season Stats By Team](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf5e).
[FantasyData: Player Season Stats By Team (projected)](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf65).

Fetches Player Season Stats.

``` fetch_data:playerSeasonStats --type={type} --season={season} --seasonType={seasonType} --player={player} --team={team}```
Avaliable Options:

--type 
Wether to get Player Season Stats or Player Season Stats (Projected)
normal (default), projected

--season 
the season you want to pull data for e.g 2013, 2014, 2015 
(if not specified it defaults to the current season)

--seasonType
PRE, REG, POST, OFF, it not specified it defaults to the Regular Season
The NFL season is divided into Preseason, Regular Season, Post Season and Off Season
(if not specified it defaults to the Regular season)

If No Player Or Team is specified then Season Stats for the Season/Season Type are pulled
If Both player and team are specified Stats are pulled for both player and team

--player 
PlayerID to fetch Season Stats For 
none (default) Specified Player e.g 14257

--team
The Abbreviation of the team you want to pull Season Stats for.
none(default), specified Team e.g WAS, NE
(if set Team Injuries are Pulled, otherwise Player Game Stats by Season/Week are pulled)

#Schedules 
(Entity = Schedules)
FantasyData API Call: [FantasyData: Schedules](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf66).

Fetches Schedule Data 

``` fetch_data:schedules --season={season} --seasonType={seasonType} ```

Avaliable Options:
--season 
the season you want to pull data for e.g 2013, 2014, 2015 
(if not specified it defaults to the current season)

--seasonType
PRE, REG, POST, OFF, it not specified it defaults to the Regular Season
The NFL season is divided into Preseason, Regular Season, Post Season and Off Season
(if not specified it defaults to the Regular season)

#Scores
(Entity = Scores)
FantasyData API Call: [FantasyData: Scores By Season](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf4e).
FantasyData API Call: [FantasyData: Scores By Week](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf4e).
Fetches Schedule Data 

``` fetch_data:scores --season={season} --seasonType={seasonType} --week={week} ```

Avaliable Options:
--season 
the season you want to pull data for e.g 2013, 2014, 2015 
(if not specified it defaults to the current season)

--seasonType
PRE, REG, POST, OFF, it not specified it defaults to the Regular Season
The NFL season is divided into Preseason, Regular Season, Post Season and Off Season
(if not specified it defaults to the Regular season)

--week
The week number to pull data for
current (none), Preseason (0 to 4), Regular Season (1 to 17), Postseason (1 to 4)
(if not specified Scores by season/seasonType are pulled)

#Stadiums
(Entity = Stadium)
FantasyData API Call: [FantasyData: Stadiums](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf69).

Fetches Stadium data 

#Standings
(Entity = Standing)
FantasyData API Call: [FantasyData: Standings](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf6b).

Fetches Standings data 
 
Avaliable Options:
--season 
the season you want to pull data for e.g 2013, 2014, 2015 
(if not specified it defaults to the current season)

--seasonType
PRE, REG, POST, OFF, it not specified it defaults to the Regular Season
The NFL season is divided into Preseason, Regular Season, Post Season and Off Season
(if not specified it defaults to the Regular season)

#Teams
(Entity = Team)
FantasyData API Call: [FantasyData: Teams By Season](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf6e).
FantasyData API Call: [FantasyData: Teams Active](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf3f).
Fetches Team data 
 
Avaliable Options:
--season 
the season you want to pull data for e.g 2013, 2014, 2015 
Alternatively you can pass active which will pull all active teams
(if not specified it defaults to the current season)

--seasonType
PRE, REG, POST, OFF, it not specified it defaults to the Regular Season
The NFL season is divided into Preseason, Regular Season, Post Season and Off Season
(if not specified it defaults to the Regular season)

If active was passed as the season then this option is ignored.

#Box Scores
(Entitys = GameStatsByWeek, PlayerGame, Scores, ScoringDetails, ScoringPlays, FantasyDefenseGame)
FantasyData API Call: [FantasyData: Box Score](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf40).
FantasyData API Call: [FantasyData: Box Scores](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf41).
FantasyData API Call: [FantasyData: Box Scores Active](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf3e).
FantasyData API Call: [FantasyData: Box Scores Delta](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/558ac87435491a24701d4293).
FantasyData API Call: [FantasyData: Box Scores Delta (current week)](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf46).
FantasyData API Call: [FantasyData: Box Scores Final](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf4b).
FantasyData API Call: [FantasyData: Box Scores Live](https://developer.fantasydata.com/docs/services/556a892e35491a1d30c7a8ba/operations/556a892f35491a02d05ebf55).

Fetches Box Score Data

The BoxScore call is primarily to pull only the changed data during game time.

The only call that returns all data for the week is the Final Box Scores.
Bare in mind though that the box scores do not contain all playerGame data.

Currently the only options that have been tested and working are:
BoxScore, BoxScores, BoxScores Final
As This is written out of season i have not had time to check what data is returned from the other calls.
In Addition You will need the Enterprise Version Of the FantasyData API to use Active Delta and Live.

Avaliable Options:

--type 
BoxScore to Retrive: current (default), final, active, delta, recent, live

if type=current BoxScore for the season/week is pulled
if additionally --team is set BoxScores for season/week/team are pulled

--season 
the season you want to pull data for e.g 2013, 2014, 2015 
(if not specified it defaults to the current season)

--seasonType
PRE, REG, POST, OFF, it not specified it defaults to the Regular Season
The NFL season is divided into Preseason, Regular Season, Post Season and Off Season
(if not specified it defaults to the Regular season)

--week
The week number to pull data for
current (default), Preseason (0 to 4), Regular Season (1 to 17), Postseason (1 to 4)
(if not specified the Curent Week is pulled)

--team
The Abbreviation of the HomeTeam you want to pull data for.
none(default), specified Team e.g WAS, NE

--minutes 
No of minutes to fetch delta scores for
60 (default) e.g 10, 20 etc

