<?php

	require "modeles/ModeleSBAteliers.php" ;
	ModeleSBAteliers::annulerParticipationAtelier( $_SESSION[ 'numero' ] , $numAtelier ) ;
	
	header( "Location: /ateliers/programmes" ) ;

?>
