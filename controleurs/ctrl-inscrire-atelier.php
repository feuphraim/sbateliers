<?php

	require "modeles/ModeleSBAteliers.php" ;
	ModeleSBAteliers::enregistrerParticipationAtelier( $_SESSION[ 'numero' ] , $numAtelier ) ;
	
	header( "Location: /ateliers/programmes" ) ;

?>
