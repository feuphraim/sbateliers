<?php
	
	require "modeles/ModeleSBAteliers.php" ;
	
	ModeleSBAteliers::commenterAtelier( $numAtelier , $_SESSION[ 'numero' ] , $_POST[ 'commentaire' ] ) ;
	
	header( "Location: /ateliers/$numAtelier/commentaires/voir" ) ;
?>
