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
		
		
		<h5><?= $nom ?></h5>
		<h5><?= $prenom ?></h5>
		<h5><?= $client[ "date_naissance" ] ?></h5>
		<h5><?= $client[ "email" ] ?></h5>
		<h5><?= $client[ "mobile" ] ?></h5>
		<h5><?= $client[ "adresse" ] ?></h5>
		<h5><?= $client[ "cp" ] ?></h5>
		<h5><?= $client[ "ville" ] ?></h5>
		
	</body>
	
</html>
