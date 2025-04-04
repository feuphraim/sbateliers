<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>SB - Ateliers</title>
	</head>
	
	<body>
		<a href="/clients/espace">Mon espace</a>
		<a href="/clients/profil">Profil</a>
		<a href="/ateliers/programmes">Ateliers programmés</a>
		<a href="/ateliers/passes">Ateliers passés</a>
		<a href="/clients/deconnecter">Se déconnecter</a>
		
		<h4>Ateliers passés</h4>
		
		<table>
			
			<thead>
				<th>Thème</th>
				<th>Date</th>
				<th>Heure</th>
				<th>Durée</th>
				<th>Responsable</th>
				<th>Commentaires</th>
			</thead>
			
			<tbody>
				
				<?php foreach( $ateliers as $unAtelier ){ ?>
					
					<tr>
						<td><?= $unAtelier[ 'theme' ] ?></td>
						<?php
							list( $date , $heure ) = explode( ' ' , $unAtelier[ 'date_heure' ] ) ;
							list( $annee , $mois , $jour ) = explode( '-' , $date ) ;
							list( $heures , $minutes , $secondes ) = explode( ':' , $heure ) ;
						?>
						<td><?= $jour ?>/<?= $mois ?>/<?= $annee ?></td>
						<td><?= $heures ?>:<?= $minutes ?></td>
						<td><?= $unAtelier[ 'duree' ] ?></td>
						<td><?= $unAtelier[ 'prenom' ] ?> <?= $unAtelier[ 'nom' ] ?></td>
						
						<td>
							<a href="/ateliers/<?= $unAtelier[ 'numero' ] ?>/commentaires/voir">Voir</a>
						</td>
						
					</tr>
					
				<?php } ?>
				
			</tbody>
			
		</table>

	</body>
	
</html>
