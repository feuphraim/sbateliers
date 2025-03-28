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
		
		<h4>Atelier <?= $atelier[ 'theme' ] ?> </h4>
		
		<div>
			
			<?php foreach( $commentaires as $commentaire ){ ?>
				
				<div>
					
					<hr />
					
					<?= $commentaire[ 'nom' ] ?> <?= $commentaire[ 'prenom' ] ?> : 
					<p>
						<?= $commentaire[ 'commentaire' ] ?>
					</p>
					
				</div>
				
			
			<?php } ?>
			
		</div>
		
		<hr />
				
		<form action="/ateliers/<?= $atelier[ 'numero' ] ?>/commenter" method="POST">
		
			<textarea name="commentaire" rows="10" cols="40" >
			</textarea>
			
			<input type="submit" value="Valider" />
		
		</form>
		
	</body>
	
</html>
