<?php

namespace FantasyPro\DataBundle\Builder;

use FantasyPro\DataBundle\Entity\SeasonLeagueLeaders;

class SeasonLeagueLeadersBuilder
{

    public function buildSeasonLeagueLeaders( $currentSeasonLeagueLeaders = null, $seasonLeagueLeader )
    {
        if ( ! $currentSeasonLeagueLeaders) { // check if we already have the schedule stored
            $currentSeasonLeagueLeaders = new SeasonLeagueLeaders();
        }
        $currentSeasonLeagueLeaders->setCustomD365FantasyPoints( $seasonLeagueLeader['CustomD365FantasyPoints'] );
        $currentSeasonLeagueLeaders->setPlayerID( $seasonLeagueLeader['PlayerID'] );
        $currentSeasonLeagueLeaders->setSeasonType( $seasonLeagueLeader['SeasonType'] );
        $currentSeasonLeagueLeaders->setSeason( $seasonLeagueLeader['Season'] );
        $currentSeasonLeagueLeaders->setTeam( $seasonLeagueLeader['Team'] );
        $currentSeasonLeagueLeaders->setNumber( $seasonLeagueLeader['Number'] );
        $currentSeasonLeagueLeaders->setName( $seasonLeagueLeader['Name'] );
        $currentSeasonLeagueLeaders->setPosition( $seasonLeagueLeader['Position'] );
        $currentSeasonLeagueLeaders->setPositionCategory( $seasonLeagueLeader['PositionCategory'] );
        $currentSeasonLeagueLeaders->setActivated( $seasonLeagueLeader['Activated'] );
        $currentSeasonLeagueLeaders->setPlayed( $seasonLeagueLeader['Played'] );
        $currentSeasonLeagueLeaders->setStarted( $seasonLeagueLeader['Started'] );
        $currentSeasonLeagueLeaders->setPassingAttempts( $seasonLeagueLeader['PassingAttempts'] );
        $currentSeasonLeagueLeaders->setPassingCompletions( $seasonLeagueLeader['PassingCompletions'] );
        $currentSeasonLeagueLeaders->setPassingYards( $seasonLeagueLeader['PassingYards'] );
        $currentSeasonLeagueLeaders->setPassingCompletionPercentage(
            $seasonLeagueLeader['PassingCompletionPercentage']
        );
        $currentSeasonLeagueLeaders->setPassingYardsPerAttempt( $seasonLeagueLeader['PassingYardsPerAttempt'] );
        $currentSeasonLeagueLeaders->setPassingYardsPerCompletion( $seasonLeagueLeader['PassingYardsPerCompletion'] );
        $currentSeasonLeagueLeaders->setPassingTouchdowns( $seasonLeagueLeader['PassingTouchdowns'] );
        $currentSeasonLeagueLeaders->setPassingInterceptions( $seasonLeagueLeader['PassingInterceptions'] );
        $currentSeasonLeagueLeaders->setPassingRating( $seasonLeagueLeader['PassingRating'] );
        $currentSeasonLeagueLeaders->setPassingLong( $seasonLeagueLeader['PassingLong'] );
        $currentSeasonLeagueLeaders->setPassingSacks( $seasonLeagueLeader['PassingSacks'] );
        $currentSeasonLeagueLeaders->setPassingSackYards( $seasonLeagueLeader['PassingSackYards'] );
        $currentSeasonLeagueLeaders->setRushingAttempts( $seasonLeagueLeader['RushingAttempts'] );
        $currentSeasonLeagueLeaders->setRushingYards( $seasonLeagueLeader['RushingYards'] );
        $currentSeasonLeagueLeaders->setRushingYardsPerAttempt( $seasonLeagueLeader['RushingYardsPerAttempt'] );
        $currentSeasonLeagueLeaders->setRushingTouchdowns( $seasonLeagueLeader['RushingTouchdowns'] );
        $currentSeasonLeagueLeaders->setRushingLong( $seasonLeagueLeader['RushingLong'] );
        $currentSeasonLeagueLeaders->setReceivingTargets( $seasonLeagueLeader['ReceivingTargets'] );
        $currentSeasonLeagueLeaders->setReceptions( $seasonLeagueLeader['Receptions'] );
        $currentSeasonLeagueLeaders->setReceivingYards( $seasonLeagueLeader['ReceivingYards'] );
        $currentSeasonLeagueLeaders->setReceivingYardsPerReception( $seasonLeagueLeader['ReceivingYardsPerReception'] );
        $currentSeasonLeagueLeaders->setReceivingTouchdowns( $seasonLeagueLeader['ReceivingTouchdowns'] );
        $currentSeasonLeagueLeaders->setReceivingLong( $seasonLeagueLeader['ReceivingLong'] );
        $currentSeasonLeagueLeaders->setFumbles( $seasonLeagueLeader['Fumbles'] );
        $currentSeasonLeagueLeaders->setFumblesLost( $seasonLeagueLeader['FumblesLost'] );
        $currentSeasonLeagueLeaders->setPuntReturns( $seasonLeagueLeader['PuntReturns'] );
        $currentSeasonLeagueLeaders->setPuntReturnYards( $seasonLeagueLeader['PuntReturnYards'] );
        $currentSeasonLeagueLeaders->setPuntReturnYardsPerAttempt( $seasonLeagueLeader['PuntReturnYardsPerAttempt'] );
        $currentSeasonLeagueLeaders->setPuntReturnTouchdowns( $seasonLeagueLeader['PuntReturnTouchdowns'] );
        $currentSeasonLeagueLeaders->setPuntReturnLong( $seasonLeagueLeader['PuntReturnLong'] );
        $currentSeasonLeagueLeaders->setKickReturns( $seasonLeagueLeader['KickReturns'] );
        $currentSeasonLeagueLeaders->setKickReturnYards( $seasonLeagueLeader['KickReturnYards'] );
        $currentSeasonLeagueLeaders->setKickReturnYardsPerAttempt( $seasonLeagueLeader['KickReturnYardsPerAttempt'] );
        $currentSeasonLeagueLeaders->setKickReturnTouchdowns( $seasonLeagueLeader['KickReturnTouchdowns'] );
        $currentSeasonLeagueLeaders->setKickReturnLong( $seasonLeagueLeader['KickReturnLong'] );
        $currentSeasonLeagueLeaders->setSoloTackles( $seasonLeagueLeader['SoloTackles'] );
        $currentSeasonLeagueLeaders->setAssistedTackles( $seasonLeagueLeader['AssistedTackles'] );
        $currentSeasonLeagueLeaders->setTacklesForLoss( $seasonLeagueLeader['TacklesForLoss'] );
        $currentSeasonLeagueLeaders->setSacks( $seasonLeagueLeader['Sacks'] );
        $currentSeasonLeagueLeaders->setSackYards( $seasonLeagueLeader['SackYards'] );
        $currentSeasonLeagueLeaders->setQuarterbackHits( $seasonLeagueLeader['QuarterbackHits'] );
        $currentSeasonLeagueLeaders->setPassesDefended( $seasonLeagueLeader['PassesDefended'] );
        $currentSeasonLeagueLeaders->setFumblesForced( $seasonLeagueLeader['FumblesForced'] );
        $currentSeasonLeagueLeaders->setFumblesRecovered( $seasonLeagueLeader['FumblesRecovered'] );
        $currentSeasonLeagueLeaders->setFumbleReturnYards( $seasonLeagueLeader['FumbleReturnYards'] );
        $currentSeasonLeagueLeaders->setFumbleReturnTouchdowns( $seasonLeagueLeader['FumbleReturnTouchdowns'] );
        $currentSeasonLeagueLeaders->setInterceptions( $seasonLeagueLeader['Interceptions'] );
        $currentSeasonLeagueLeaders->setInterceptionReturnYards( $seasonLeagueLeader['InterceptionReturnYards'] );
        $currentSeasonLeagueLeaders->setInterceptionReturnTouchdowns(
            $seasonLeagueLeader['InterceptionReturnTouchdowns']
        );
        $currentSeasonLeagueLeaders->setBlockedKicks( $seasonLeagueLeader['BlockedKicks'] );
        $currentSeasonLeagueLeaders->setSpecialTeamsSoloTackles( $seasonLeagueLeader['SpecialTeamsSoloTackles'] );
        $currentSeasonLeagueLeaders->setSpecialTeamsAssistedTackles(
            $seasonLeagueLeader['SpecialTeamsAssistedTackles']
        );
        $currentSeasonLeagueLeaders->setMiscSoloTackles( $seasonLeagueLeader['MiscSoloTackles'] );
        $currentSeasonLeagueLeaders->setMiscAssistedTackles( $seasonLeagueLeader['MiscAssistedTackles'] );
        $currentSeasonLeagueLeaders->setPunts( $seasonLeagueLeader['Punts'] );
        $currentSeasonLeagueLeaders->setPuntYards( $seasonLeagueLeader['PuntYards'] );
        $currentSeasonLeagueLeaders->setPuntAverage( $seasonLeagueLeader['PuntAverage'] );
        $currentSeasonLeagueLeaders->setFieldGoalsAttempted( $seasonLeagueLeader['FieldGoalsAttempted'] );
        $currentSeasonLeagueLeaders->setFieldGoalsMade( $seasonLeagueLeader['FieldGoalsMade'] );
        $currentSeasonLeagueLeaders->setFieldGoalsLongestMade( $seasonLeagueLeader['FieldGoalsLongestMade'] );
        $currentSeasonLeagueLeaders->setExtraPointsMade( $seasonLeagueLeader['ExtraPointsMade'] );
        $currentSeasonLeagueLeaders->setTwoPointConversionPasses( $seasonLeagueLeader['TwoPointConversionPasses'] );
        $currentSeasonLeagueLeaders->setTwoPointConversionRuns( $seasonLeagueLeader['TwoPointConversionRuns'] );
        $currentSeasonLeagueLeaders->setTwoPointConversionReceptions(
            $seasonLeagueLeader['TwoPointConversionReceptions']
        );
        $currentSeasonLeagueLeaders->setFantasyPoints( $seasonLeagueLeader['FantasyPoints'] );
        $currentSeasonLeagueLeaders->setFantasyPointsPPR( $seasonLeagueLeader['FantasyPointsPPR'] );
        $currentSeasonLeagueLeaders->setReceptionPercentage( $seasonLeagueLeader['ReceptionPercentage'] );
        $currentSeasonLeagueLeaders->setReceivingYardsPerTarget( $seasonLeagueLeader['ReceivingYardsPerTarget'] );
        $currentSeasonLeagueLeaders->setTackles( $seasonLeagueLeader['Tackles'] );
        $currentSeasonLeagueLeaders->setOffensiveTouchdowns( $seasonLeagueLeader['OffensiveTouchdowns'] );
        $currentSeasonLeagueLeaders->setDefensiveTouchdowns( $seasonLeagueLeader['DefensiveTouchdowns'] );
        $currentSeasonLeagueLeaders->setSpecialTeamsTouchdowns( $seasonLeagueLeader['SpecialTeamsTouchdowns'] );
        $currentSeasonLeagueLeaders->setTouchdowns( $seasonLeagueLeader['Touchdowns'] );
        $currentSeasonLeagueLeaders->setFantasyPosition( $seasonLeagueLeader['FantasyPosition'] );
        $currentSeasonLeagueLeaders->setFieldGoalPercentage( $seasonLeagueLeader['FieldGoalPercentage'] );
        $currentSeasonLeagueLeaders->setPlayerSeasonID( $seasonLeagueLeader['PlayerSeasonID'] );
        $currentSeasonLeagueLeaders->setFumblesOwnRecoveries( $seasonLeagueLeader['FumblesOwnRecoveries'] );
        $currentSeasonLeagueLeaders->setFumblesOutOfBounds( $seasonLeagueLeader['FumblesOutOfBounds'] );
        $currentSeasonLeagueLeaders->setKickReturnFairCatches( $seasonLeagueLeader['KickReturnFairCatches'] );
        $currentSeasonLeagueLeaders->setPuntReturnFairCatches( $seasonLeagueLeader['PuntReturnFairCatches'] );
        $currentSeasonLeagueLeaders->setPuntTouchbacks( $seasonLeagueLeader['PuntTouchbacks'] );
        $currentSeasonLeagueLeaders->setPuntInside20( $seasonLeagueLeader['PuntInside20'] );
        $currentSeasonLeagueLeaders->setPuntNetAverage( $seasonLeagueLeader['PuntNetAverage'] );
        $currentSeasonLeagueLeaders->setExtraPointsAttempted( $seasonLeagueLeader['ExtraPointsAttempted'] );
        $currentSeasonLeagueLeaders->setBlockedKickReturnTouchdowns(
            $seasonLeagueLeader['BlockedKickReturnTouchdowns']
        );
        $currentSeasonLeagueLeaders->setFieldGoalReturnTouchdowns( $seasonLeagueLeader['FieldGoalReturnTouchdowns'] );
        $currentSeasonLeagueLeaders->setSafeties( $seasonLeagueLeader['Safeties'] );
        $currentSeasonLeagueLeaders->setFieldGoalsHadBlocked( $seasonLeagueLeader['FieldGoalsHadBlocked'] );
        $currentSeasonLeagueLeaders->setPuntsHadBlocked( $seasonLeagueLeader['PuntsHadBlocked'] );
        $currentSeasonLeagueLeaders->setExtraPointsHadBlocked( $seasonLeagueLeader['ExtraPointsHadBlocked'] );
        $currentSeasonLeagueLeaders->setPuntLong( $seasonLeagueLeader['PuntLong'] );
        $currentSeasonLeagueLeaders->setBlockedKickReturnYards( $seasonLeagueLeader['BlockedKickReturnYards'] );
        $currentSeasonLeagueLeaders->setFieldGoalReturnYards( $seasonLeagueLeader['FieldGoalReturnYards'] );
        $currentSeasonLeagueLeaders->setPuntNetYards( $seasonLeagueLeader['PuntNetYards'] );
        $currentSeasonLeagueLeaders->setSpecialTeamsFumblesForced( $seasonLeagueLeader['SpecialTeamsFumblesForced'] );
        $currentSeasonLeagueLeaders->setSpecialTeamsFumblesRecovered(
            $seasonLeagueLeader['SpecialTeamsFumblesRecovered']
        );
        $currentSeasonLeagueLeaders->setMiscFumblesForced( $seasonLeagueLeader['MiscFumblesForced'] );
        $currentSeasonLeagueLeaders->setMiscFumblesRecovered( $seasonLeagueLeader['MiscFumblesRecovered'] );
        $currentSeasonLeagueLeaders->setShortName( $seasonLeagueLeader['ShortName'] );
        $currentSeasonLeagueLeaders->setSafetiesAllowed( $seasonLeagueLeader['SafetiesAllowed'] );
        $currentSeasonLeagueLeaders->setTemperature( $seasonLeagueLeader['Temperature'] );
        $currentSeasonLeagueLeaders->setHumidity( $seasonLeagueLeader['Humidity'] );
        $currentSeasonLeagueLeaders->setWindSpeed( $seasonLeagueLeader['WindSpeed'] );
        $currentSeasonLeagueLeaders->setOffensiveSnapsPlayed( $seasonLeagueLeader['OffensiveSnapsPlayed'] );
        $currentSeasonLeagueLeaders->setDefensiveSnapsPlayed( $seasonLeagueLeader['DefensiveSnapsPlayed'] );
        $currentSeasonLeagueLeaders->setSpecialTeamsSnapsPlayed( $seasonLeagueLeader['SpecialTeamsSnapsPlayed'] );
        $currentSeasonLeagueLeaders->setOffensiveTeamSnaps( $seasonLeagueLeader['OffensiveTeamSnaps'] );
        $currentSeasonLeagueLeaders->setDefensiveTeamSnaps( $seasonLeagueLeader['DefensiveTeamSnaps'] );
        $currentSeasonLeagueLeaders->setSpecialTeamsTeamSnaps( $seasonLeagueLeader['SpecialTeamsTeamSnaps'] );
        $currentSeasonLeagueLeaders->setAuctionValue( $seasonLeagueLeader['AuctionValue'] );
        $currentSeasonLeagueLeaders->setAuctionValuePPR( $seasonLeagueLeader['AuctionValuePPR'] );

        return $currentSeasonLeagueLeaders;
    }
}