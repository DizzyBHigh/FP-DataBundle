<?php

namespace FantasyPro\DataBundle\Builder;

use FantasyPro\DataBundle\Entity\PlayerSeason;

class PlayerSeasonBuilder
{

    public function buildPlayerSeason( $currentPlayerSeason = null, $playerSeason )
    {
        if ( ! $currentPlayerSeason) { // check if we already have the schedule stored
            $currentPlayerSeason = new PlayerSeason();
        }
        $currentPlayerSeason->setCustomD365FantasyPoints( $playerSeason['CustomD365FantasyPoints'] );
        $currentPlayerSeason->setPlayerID( $playerSeason['PlayerID'] );
        $currentPlayerSeason->setSeasonType( $playerSeason['SeasonType'] );
        $currentPlayerSeason->setSeason( $playerSeason['Season'] );
        $currentPlayerSeason->setTeam( $playerSeason['Team'] );
        $currentPlayerSeason->setNumber( $playerSeason['Number'] );
        $currentPlayerSeason->setName( $playerSeason['Name'] );
        $currentPlayerSeason->setPosition( $playerSeason['Position'] );
        $currentPlayerSeason->setPositionCategory( $playerSeason['PositionCategory'] );
        $currentPlayerSeason->setActivated( $playerSeason['Activated'] );
        $currentPlayerSeason->setPlayed( $playerSeason['Played'] );
        $currentPlayerSeason->setStarted( $playerSeason['Started'] );
        $currentPlayerSeason->setPassingAttempts( $playerSeason['PassingAttempts'] );
        $currentPlayerSeason->setPassingCompletions( $playerSeason['PassingCompletions'] );
        $currentPlayerSeason->setPassingYards( $playerSeason['PassingYards'] );
        $currentPlayerSeason->setPassingCompletionPercentage( $playerSeason['PassingCompletionPercentage'] );
        $currentPlayerSeason->setPassingYardsPerAttempt( $playerSeason['PassingYardsPerAttempt'] );
        $currentPlayerSeason->setPassingYardsPerCompletion( $playerSeason['PassingYardsPerCompletion'] );
        $currentPlayerSeason->setPassingTouchdowns( $playerSeason['PassingTouchdowns'] );
        $currentPlayerSeason->setPassingInterceptions( $playerSeason['PassingInterceptions'] );
        $currentPlayerSeason->setPassingRating( $playerSeason['PassingRating'] );
        $currentPlayerSeason->setPassingLong( $playerSeason['PassingLong'] );
        $currentPlayerSeason->setPassingSacks( $playerSeason['PassingSacks'] );
        $currentPlayerSeason->setPassingSackYards( $playerSeason['PassingSackYards'] );
        $currentPlayerSeason->setRushingAttempts( $playerSeason['RushingAttempts'] );
        $currentPlayerSeason->setRushingYards( $playerSeason['RushingYards'] );
        $currentPlayerSeason->setRushingYardsPerAttempt( $playerSeason['RushingYardsPerAttempt'] );
        $currentPlayerSeason->setRushingTouchdowns( $playerSeason['RushingTouchdowns'] );
        $currentPlayerSeason->setRushingLong( $playerSeason['RushingLong'] );
        $currentPlayerSeason->setReceivingTargets( $playerSeason['ReceivingTargets'] );
        $currentPlayerSeason->setReceptions( $playerSeason['Receptions'] );
        $currentPlayerSeason->setReceivingYards( $playerSeason['ReceivingYards'] );
        $currentPlayerSeason->setReceivingYardsPerReception( $playerSeason['ReceivingYardsPerReception'] );
        $currentPlayerSeason->setReceivingTouchdowns( $playerSeason['ReceivingTouchdowns'] );
        $currentPlayerSeason->setReceivingLong( $playerSeason['ReceivingLong'] );
        $currentPlayerSeason->setFumbles( $playerSeason['Fumbles'] );
        $currentPlayerSeason->setFumblesLost( $playerSeason['FumblesLost'] );
        $currentPlayerSeason->setPuntReturns( $playerSeason['PuntReturns'] );
        $currentPlayerSeason->setPuntReturnYards( $playerSeason['PuntReturnYards'] );
        $currentPlayerSeason->setPuntReturnYardsPerAttempt( $playerSeason['PuntReturnYardsPerAttempt'] );
        $currentPlayerSeason->setPuntReturnTouchdowns( $playerSeason['PuntReturnTouchdowns'] );
        $currentPlayerSeason->setPuntReturnLong( $playerSeason['PuntReturnLong'] );
        $currentPlayerSeason->setKickReturns( $playerSeason['KickReturns'] );
        $currentPlayerSeason->setKickReturnYards( $playerSeason['KickReturnYards'] );
        $currentPlayerSeason->setKickReturnYardsPerAttempt( $playerSeason['KickReturnYardsPerAttempt'] );
        $currentPlayerSeason->setKickReturnTouchdowns( $playerSeason['KickReturnTouchdowns'] );
        $currentPlayerSeason->setKickReturnLong( $playerSeason['KickReturnLong'] );
        $currentPlayerSeason->setSoloTackles( $playerSeason['SoloTackles'] );
        $currentPlayerSeason->setAssistedTackles( $playerSeason['AssistedTackles'] );
        $currentPlayerSeason->setTacklesForLoss( $playerSeason['TacklesForLoss'] );
        $currentPlayerSeason->setSacks( $playerSeason['Sacks'] );
        $currentPlayerSeason->setSackYards( $playerSeason['SackYards'] );
        $currentPlayerSeason->setQuarterbackHits( $playerSeason['QuarterbackHits'] );
        $currentPlayerSeason->setPassesDefended( $playerSeason['PassesDefended'] );
        $currentPlayerSeason->setFumblesForced( $playerSeason['FumblesForced'] );
        $currentPlayerSeason->setFumblesRecovered( $playerSeason['FumblesRecovered'] );
        $currentPlayerSeason->setFumbleReturnYards( $playerSeason['FumbleReturnYards'] );
        $currentPlayerSeason->setFumbleReturnTouchdowns( $playerSeason['FumbleReturnTouchdowns'] );
        $currentPlayerSeason->setInterceptions( $playerSeason['Interceptions'] );
        $currentPlayerSeason->setInterceptionReturnYards( $playerSeason['InterceptionReturnYards'] );
        $currentPlayerSeason->setInterceptionReturnTouchdowns( $playerSeason['InterceptionReturnTouchdowns'] );
        $currentPlayerSeason->setBlockedKicks( $playerSeason['BlockedKicks'] );
        $currentPlayerSeason->setSpecialTeamsSoloTackles( $playerSeason['SpecialTeamsSoloTackles'] );
        $currentPlayerSeason->setSpecialTeamsAssistedTackles( $playerSeason['SpecialTeamsAssistedTackles'] );
        $currentPlayerSeason->setMiscSoloTackles( $playerSeason['MiscSoloTackles'] );
        $currentPlayerSeason->setMiscAssistedTackles( $playerSeason['MiscAssistedTackles'] );
        $currentPlayerSeason->setPunts( $playerSeason['Punts'] );
        $currentPlayerSeason->setPuntYards( $playerSeason['PuntYards'] );
        $currentPlayerSeason->setPuntAverage( $playerSeason['PuntAverage'] );
        $currentPlayerSeason->setFieldGoalsAttempted( $playerSeason['FieldGoalsAttempted'] );
        $currentPlayerSeason->setFieldGoalsMade( $playerSeason['FieldGoalsMade'] );
        $currentPlayerSeason->setFieldGoalsLongestMade( $playerSeason['FieldGoalsLongestMade'] );
        $currentPlayerSeason->setExtraPointsMade( $playerSeason['ExtraPointsMade'] );
        $currentPlayerSeason->setTwoPointConversionPasses( $playerSeason['TwoPointConversionPasses'] );
        $currentPlayerSeason->setTwoPointConversionRuns( $playerSeason['TwoPointConversionRuns'] );
        $currentPlayerSeason->setTwoPointConversionReceptions( $playerSeason['TwoPointConversionReceptions'] );
        $currentPlayerSeason->setFantasyPoints( $playerSeason['FantasyPoints'] );
        $currentPlayerSeason->setFantasyPointsPPR( $playerSeason['FantasyPointsPPR'] );
        $currentPlayerSeason->setReceptionPercentage( $playerSeason['ReceptionPercentage'] );
        $currentPlayerSeason->setReceivingYardsPerTarget( $playerSeason['ReceivingYardsPerTarget'] );
        $currentPlayerSeason->setTackles( $playerSeason['Tackles'] );
        $currentPlayerSeason->setOffensiveTouchdowns( $playerSeason['OffensiveTouchdowns'] );
        $currentPlayerSeason->setDefensiveTouchdowns( $playerSeason['DefensiveTouchdowns'] );
        $currentPlayerSeason->setSpecialTeamsTouchdowns( $playerSeason['SpecialTeamsTouchdowns'] );
        $currentPlayerSeason->setTouchdowns( $playerSeason['Touchdowns'] );
        $currentPlayerSeason->setFantasyPosition( $playerSeason['FantasyPosition'] );
        $currentPlayerSeason->setFieldGoalPercentage( $playerSeason['FieldGoalPercentage'] );
        $currentPlayerSeason->setPlayerSeasonID(
            $playerSeason['Season'].$playerSeason['SeasonType'].$playerSeason['PlayerID']
        );
        $currentPlayerSeason->setFumblesOwnRecoveries( $playerSeason['FumblesOwnRecoveries'] );
        $currentPlayerSeason->setFumblesOutOfBounds( $playerSeason['FumblesOutOfBounds'] );
        $currentPlayerSeason->setKickReturnFairCatches( $playerSeason['KickReturnFairCatches'] );
        $currentPlayerSeason->setPuntReturnFairCatches( $playerSeason['PuntReturnFairCatches'] );
        $currentPlayerSeason->setPuntTouchbacks( $playerSeason['PuntTouchbacks'] );
        $currentPlayerSeason->setPuntInside20( $playerSeason['PuntInside20'] );
        $currentPlayerSeason->setPuntNetAverage( $playerSeason['PuntNetAverage'] );
        $currentPlayerSeason->setExtraPointsAttempted( $playerSeason['ExtraPointsAttempted'] );
        $currentPlayerSeason->setBlockedKickReturnTouchdowns( $playerSeason['BlockedKickReturnTouchdowns'] );
        $currentPlayerSeason->setFieldGoalReturnTouchdowns( $playerSeason['FieldGoalReturnTouchdowns'] );
        $currentPlayerSeason->setSafeties( $playerSeason['Safeties'] );
        $currentPlayerSeason->setFieldGoalsHadBlocked( $playerSeason['FieldGoalsHadBlocked'] );
        $currentPlayerSeason->setPuntsHadBlocked( $playerSeason['PuntsHadBlocked'] );
        $currentPlayerSeason->setExtraPointsHadBlocked( $playerSeason['ExtraPointsHadBlocked'] );
        $currentPlayerSeason->setPuntLong( $playerSeason['PuntLong'] );
        $currentPlayerSeason->setBlockedKickReturnYards( $playerSeason['BlockedKickReturnYards'] );
        $currentPlayerSeason->setFieldGoalReturnYards( $playerSeason['FieldGoalReturnYards'] );
        $currentPlayerSeason->setPuntNetYards( $playerSeason['PuntNetYards'] );
        $currentPlayerSeason->setSpecialTeamsFumblesForced( $playerSeason['SpecialTeamsFumblesForced'] );
        $currentPlayerSeason->setSpecialTeamsFumblesRecovered( $playerSeason['SpecialTeamsFumblesRecovered'] );
        $currentPlayerSeason->setMiscFumblesForced( $playerSeason['MiscFumblesForced'] );
        $currentPlayerSeason->setMiscFumblesRecovered( $playerSeason['MiscFumblesRecovered'] );
        $currentPlayerSeason->setShortName( $playerSeason['ShortName'] );
        $currentPlayerSeason->setSafetiesAllowed( $playerSeason['SafetiesAllowed'] );
        $currentPlayerSeason->setTemperature( $playerSeason['Temperature'] );
        $currentPlayerSeason->setHumidity( $playerSeason['Humidity'] );
        $currentPlayerSeason->setWindSpeed( $playerSeason['WindSpeed'] );
        $currentPlayerSeason->setOffensiveSnapsPlayed( $playerSeason['OffensiveSnapsPlayed'] );
        $currentPlayerSeason->setDefensiveSnapsPlayed( $playerSeason['DefensiveSnapsPlayed'] );
        $currentPlayerSeason->setSpecialTeamsSnapsPlayed( $playerSeason['SpecialTeamsSnapsPlayed'] );
        $currentPlayerSeason->setOffensiveTeamSnaps( $playerSeason['OffensiveTeamSnaps'] );
        $currentPlayerSeason->setDefensiveTeamSnaps( $playerSeason['DefensiveTeamSnaps'] );
        $currentPlayerSeason->setSpecialTeamsTeamSnaps( $playerSeason['SpecialTeamsTeamSnaps'] );
        $currentPlayerSeason->setAuctionValue( $playerSeason['AuctionValue'] );
        $currentPlayerSeason->setAuctionValuePPR( $playerSeason['AuctionValuePPR'] );

        return $currentPlayerSeason;
    }
}