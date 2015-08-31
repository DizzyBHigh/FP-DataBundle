<?php

namespace FantasyPro\DataBundle\Builder;

use FantasyPro\DataBundle\Entity\PlayerSeasonProjected;

class PlayerSeasonProjectedBuilder
{

    public function buildPlayerSeasonProjected( $currentPlayerSeasonProjected = null, $playerSeasonProjected )
    {
        if ( ! $currentPlayerSeasonProjected) { // check if we already have the schedule stored
            $currentPlayerSeasonProjected = new PlayerSeasonProjected();
        }
        $currentPlayerSeasonProjected->setCustomD365FantasyPoints( $playerSeasonProjected['CustomD365FantasyPoints'] );
        $currentPlayerSeasonProjected->setPlayerID( $playerSeasonProjected['PlayerID'] );
        $currentPlayerSeasonProjected->setSeasonType( $playerSeasonProjected['SeasonType'] );
        $currentPlayerSeasonProjected->setSeason( $playerSeasonProjected['Season'] );
        $currentPlayerSeasonProjected->setTeam( $playerSeasonProjected['Team'] );
        $currentPlayerSeasonProjected->setNumber( $playerSeasonProjected['Number'] );
        $currentPlayerSeasonProjected->setName( $playerSeasonProjected['Name'] );
        $currentPlayerSeasonProjected->setPosition( $playerSeasonProjected['Position'] );
        $currentPlayerSeasonProjected->setPositionCategory( $playerSeasonProjected['PositionCategory'] );
        $currentPlayerSeasonProjected->setActivated( $playerSeasonProjected['Activated'] );
        $currentPlayerSeasonProjected->setPlayed( $playerSeasonProjected['Played'] );
        $currentPlayerSeasonProjected->setStarted( $playerSeasonProjected['Started'] );
        $currentPlayerSeasonProjected->setPassingAttempts( $playerSeasonProjected['PassingAttempts'] );
        $currentPlayerSeasonProjected->setPassingCompletions( $playerSeasonProjected['PassingCompletions'] );
        $currentPlayerSeasonProjected->setPassingYards( $playerSeasonProjected['PassingYards'] );
        $currentPlayerSeasonProjected->setPassingCompletionPercentage(
            $playerSeasonProjected['PassingCompletionPercentage']
        );
        $currentPlayerSeasonProjected->setPassingYardsPerAttempt( $playerSeasonProjected['PassingYardsPerAttempt'] );
        $currentPlayerSeasonProjected->setPassingYardsPerCompletion(
            $playerSeasonProjected['PassingYardsPerCompletion']
        );
        $currentPlayerSeasonProjected->setPassingTouchdowns( $playerSeasonProjected['PassingTouchdowns'] );
        $currentPlayerSeasonProjected->setPassingInterceptions( $playerSeasonProjected['PassingInterceptions'] );
        $currentPlayerSeasonProjected->setPassingRating( $playerSeasonProjected['PassingRating'] );
        $currentPlayerSeasonProjected->setPassingLong( $playerSeasonProjected['PassingLong'] );
        $currentPlayerSeasonProjected->setPassingSacks( $playerSeasonProjected['PassingSacks'] );
        $currentPlayerSeasonProjected->setPassingSackYards( $playerSeasonProjected['PassingSackYards'] );
        $currentPlayerSeasonProjected->setRushingAttempts( $playerSeasonProjected['RushingAttempts'] );
        $currentPlayerSeasonProjected->setRushingYards( $playerSeasonProjected['RushingYards'] );
        $currentPlayerSeasonProjected->setRushingYardsPerAttempt( $playerSeasonProjected['RushingYardsPerAttempt'] );
        $currentPlayerSeasonProjected->setRushingTouchdowns( $playerSeasonProjected['RushingTouchdowns'] );
        $currentPlayerSeasonProjected->setRushingLong( $playerSeasonProjected['RushingLong'] );
        $currentPlayerSeasonProjected->setReceivingTargets( $playerSeasonProjected['ReceivingTargets'] );
        $currentPlayerSeasonProjected->setReceptions( $playerSeasonProjected['Receptions'] );
        $currentPlayerSeasonProjected->setReceivingYards( $playerSeasonProjected['ReceivingYards'] );
        $currentPlayerSeasonProjected->setReceivingYardsPerReception(
            $playerSeasonProjected['ReceivingYardsPerReception']
        );
        $currentPlayerSeasonProjected->setReceivingTouchdowns( $playerSeasonProjected['ReceivingTouchdowns'] );
        $currentPlayerSeasonProjected->setReceivingLong( $playerSeasonProjected['ReceivingLong'] );
        $currentPlayerSeasonProjected->setFumbles( $playerSeasonProjected['Fumbles'] );
        $currentPlayerSeasonProjected->setFumblesLost( $playerSeasonProjected['FumblesLost'] );
        $currentPlayerSeasonProjected->setPuntReturns( $playerSeasonProjected['PuntReturns'] );
        $currentPlayerSeasonProjected->setPuntReturnYards( $playerSeasonProjected['PuntReturnYards'] );
        $currentPlayerSeasonProjected->setPuntReturnYardsPerAttempt(
            $playerSeasonProjected['PuntReturnYardsPerAttempt']
        );
        $currentPlayerSeasonProjected->setPuntReturnTouchdowns( $playerSeasonProjected['PuntReturnTouchdowns'] );
        $currentPlayerSeasonProjected->setPuntReturnLong( $playerSeasonProjected['PuntReturnLong'] );
        $currentPlayerSeasonProjected->setKickReturns( $playerSeasonProjected['KickReturns'] );
        $currentPlayerSeasonProjected->setKickReturnYards( $playerSeasonProjected['KickReturnYards'] );
        $currentPlayerSeasonProjected->setKickReturnYardsPerAttempt(
            $playerSeasonProjected['KickReturnYardsPerAttempt']
        );
        $currentPlayerSeasonProjected->setKickReturnTouchdowns( $playerSeasonProjected['KickReturnTouchdowns'] );
        $currentPlayerSeasonProjected->setKickReturnLong( $playerSeasonProjected['KickReturnLong'] );
        $currentPlayerSeasonProjected->setSoloTackles( $playerSeasonProjected['SoloTackles'] );
        $currentPlayerSeasonProjected->setAssistedTackles( $playerSeasonProjected['AssistedTackles'] );
        $currentPlayerSeasonProjected->setTacklesForLoss( $playerSeasonProjected['TacklesForLoss'] );
        $currentPlayerSeasonProjected->setSacks( $playerSeasonProjected['Sacks'] );
        $currentPlayerSeasonProjected->setSackYards( $playerSeasonProjected['SackYards'] );
        $currentPlayerSeasonProjected->setQuarterbackHits( $playerSeasonProjected['QuarterbackHits'] );
        $currentPlayerSeasonProjected->setPassesDefended( $playerSeasonProjected['PassesDefended'] );
        $currentPlayerSeasonProjected->setFumblesForced( $playerSeasonProjected['FumblesForced'] );
        $currentPlayerSeasonProjected->setFumblesRecovered( $playerSeasonProjected['FumblesRecovered'] );
        $currentPlayerSeasonProjected->setFumbleReturnYards( $playerSeasonProjected['FumbleReturnYards'] );
        $currentPlayerSeasonProjected->setFumbleReturnTouchdowns( $playerSeasonProjected['FumbleReturnTouchdowns'] );
        $currentPlayerSeasonProjected->setInterceptions( $playerSeasonProjected['Interceptions'] );
        $currentPlayerSeasonProjected->setInterceptionReturnYards( $playerSeasonProjected['InterceptionReturnYards'] );
        $currentPlayerSeasonProjected->setInterceptionReturnTouchdowns(
            $playerSeasonProjected['InterceptionReturnTouchdowns']
        );
        $currentPlayerSeasonProjected->setBlockedKicks( $playerSeasonProjected['BlockedKicks'] );
        $currentPlayerSeasonProjected->setSpecialTeamsSoloTackles( $playerSeasonProjected['SpecialTeamsSoloTackles'] );
        $currentPlayerSeasonProjected->setSpecialTeamsAssistedTackles(
            $playerSeasonProjected['SpecialTeamsAssistedTackles']
        );
        $currentPlayerSeasonProjected->setMiscSoloTackles( $playerSeasonProjected['MiscSoloTackles'] );
        $currentPlayerSeasonProjected->setMiscAssistedTackles( $playerSeasonProjected['MiscAssistedTackles'] );
        $currentPlayerSeasonProjected->setPunts( $playerSeasonProjected['Punts'] );
        $currentPlayerSeasonProjected->setPuntYards( $playerSeasonProjected['PuntYards'] );
        $currentPlayerSeasonProjected->setPuntAverage( $playerSeasonProjected['PuntAverage'] );
        $currentPlayerSeasonProjected->setFieldGoalsAttempted( $playerSeasonProjected['FieldGoalsAttempted'] );
        $currentPlayerSeasonProjected->setFieldGoalsMade( $playerSeasonProjected['FieldGoalsMade'] );
        $currentPlayerSeasonProjected->setFieldGoalsLongestMade( $playerSeasonProjected['FieldGoalsLongestMade'] );
        $currentPlayerSeasonProjected->setExtraPointsMade( $playerSeasonProjected['ExtraPointsMade'] );
        $currentPlayerSeasonProjected->setTwoPointConversionPasses(
            $playerSeasonProjected['TwoPointConversionPasses']
        );
        $currentPlayerSeasonProjected->setTwoPointConversionRuns( $playerSeasonProjected['TwoPointConversionRuns'] );
        $currentPlayerSeasonProjected->setTwoPointConversionReceptions(
            $playerSeasonProjected['TwoPointConversionReceptions']
        );
        $currentPlayerSeasonProjected->setFantasyPoints( $playerSeasonProjected['FantasyPoints'] );
        $currentPlayerSeasonProjected->setFantasyPointsPPR( $playerSeasonProjected['FantasyPointsPPR'] );
        $currentPlayerSeasonProjected->setReceptionPercentage( $playerSeasonProjected['ReceptionPercentage'] );
        $currentPlayerSeasonProjected->setReceivingYardsPerTarget( $playerSeasonProjected['ReceivingYardsPerTarget'] );
        $currentPlayerSeasonProjected->setTackles( $playerSeasonProjected['Tackles'] );
        $currentPlayerSeasonProjected->setOffensiveTouchdowns( $playerSeasonProjected['OffensiveTouchdowns'] );
        $currentPlayerSeasonProjected->setDefensiveTouchdowns( $playerSeasonProjected['DefensiveTouchdowns'] );
        $currentPlayerSeasonProjected->setSpecialTeamsTouchdowns( $playerSeasonProjected['SpecialTeamsTouchdowns'] );
        $currentPlayerSeasonProjected->setTouchdowns( $playerSeasonProjected['Touchdowns'] );
        $currentPlayerSeasonProjected->setFantasyPosition( $playerSeasonProjected['FantasyPosition'] );
        $currentPlayerSeasonProjected->setFieldGoalPercentage( $playerSeasonProjected['FieldGoalPercentage'] );
        $currentPlayerSeasonProjected->setPlayerSeasonID(
            $playerSeasonProjected['Season'].$playerSeasonProjected['SeasonType'].$playerSeasonProjected['PlayerID']
        );
        $currentPlayerSeasonProjected->setFumblesOwnRecoveries( $playerSeasonProjected['FumblesOwnRecoveries'] );
        $currentPlayerSeasonProjected->setFumblesOutOfBounds( $playerSeasonProjected['FumblesOutOfBounds'] );
        $currentPlayerSeasonProjected->setKickReturnFairCatches( $playerSeasonProjected['KickReturnFairCatches'] );
        $currentPlayerSeasonProjected->setPuntReturnFairCatches( $playerSeasonProjected['PuntReturnFairCatches'] );
        $currentPlayerSeasonProjected->setPuntTouchbacks( $playerSeasonProjected['PuntTouchbacks'] );
        $currentPlayerSeasonProjected->setPuntInside20( $playerSeasonProjected['PuntInside20'] );
        $currentPlayerSeasonProjected->setPuntNetAverage( $playerSeasonProjected['PuntNetAverage'] );
        $currentPlayerSeasonProjected->setExtraPointsAttempted( $playerSeasonProjected['ExtraPointsAttempted'] );
        $currentPlayerSeasonProjected->setBlockedKickReturnTouchdowns(
            $playerSeasonProjected['BlockedKickReturnTouchdowns']
        );
        $currentPlayerSeasonProjected->setFieldGoalReturnTouchdowns(
            $playerSeasonProjected['FieldGoalReturnTouchdowns']
        );
        $currentPlayerSeasonProjected->setSafeties( $playerSeasonProjected['Safeties'] );
        $currentPlayerSeasonProjected->setFieldGoalsHadBlocked( $playerSeasonProjected['FieldGoalsHadBlocked'] );
        $currentPlayerSeasonProjected->setPuntsHadBlocked( $playerSeasonProjected['PuntsHadBlocked'] );
        $currentPlayerSeasonProjected->setExtraPointsHadBlocked( $playerSeasonProjected['ExtraPointsHadBlocked'] );
        $currentPlayerSeasonProjected->setPuntLong( $playerSeasonProjected['PuntLong'] );
        $currentPlayerSeasonProjected->setBlockedKickReturnYards( $playerSeasonProjected['BlockedKickReturnYards'] );
        $currentPlayerSeasonProjected->setFieldGoalReturnYards( $playerSeasonProjected['FieldGoalReturnYards'] );
        $currentPlayerSeasonProjected->setPuntNetYards( $playerSeasonProjected['PuntNetYards'] );
        $currentPlayerSeasonProjected->setSpecialTeamsFumblesForced(
            $playerSeasonProjected['SpecialTeamsFumblesForced']
        );
        $currentPlayerSeasonProjected->setSpecialTeamsFumblesRecovered(
            $playerSeasonProjected['SpecialTeamsFumblesRecovered']
        );
        $currentPlayerSeasonProjected->setMiscFumblesForced( $playerSeasonProjected['MiscFumblesForced'] );
        $currentPlayerSeasonProjected->setMiscFumblesRecovered( $playerSeasonProjected['MiscFumblesRecovered'] );
        $currentPlayerSeasonProjected->setShortName( $playerSeasonProjected['ShortName'] );
        $currentPlayerSeasonProjected->setSafetiesAllowed( $playerSeasonProjected['SafetiesAllowed'] );
        $currentPlayerSeasonProjected->setTemperature( $playerSeasonProjected['Temperature'] );
        $currentPlayerSeasonProjected->setHumidity( $playerSeasonProjected['Humidity'] );
        $currentPlayerSeasonProjected->setWindSpeed( $playerSeasonProjected['WindSpeed'] );
        $currentPlayerSeasonProjected->setOffensiveSnapsPlayed( $playerSeasonProjected['OffensiveSnapsPlayed'] );
        $currentPlayerSeasonProjected->setDefensiveSnapsPlayed( $playerSeasonProjected['DefensiveSnapsPlayed'] );
        $currentPlayerSeasonProjected->setSpecialTeamsSnapsPlayed( $playerSeasonProjected['SpecialTeamsSnapsPlayed'] );
        $currentPlayerSeasonProjected->setOffensiveTeamSnaps( $playerSeasonProjected['OffensiveTeamSnaps'] );
        $currentPlayerSeasonProjected->setDefensiveTeamSnaps( $playerSeasonProjected['DefensiveTeamSnaps'] );
        $currentPlayerSeasonProjected->setSpecialTeamsTeamSnaps( $playerSeasonProjected['SpecialTeamsTeamSnaps'] );
        $currentPlayerSeasonProjected->setAuctionValue( $playerSeasonProjected['AuctionValue'] );
        $currentPlayerSeasonProjected->setAuctionValuePPR( $playerSeasonProjected['AuctionValuePPR'] );

        return $currentPlayerSeasonProjected;
    }
}