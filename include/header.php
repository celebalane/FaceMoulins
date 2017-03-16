<?php
	session_start();
	if(isset($_SESSION["login"])){
		$_SESSION["connexion"]=true;
	}
	isset($_SESSION["connexion"]) ? $connecter ="Se déconnecter" :	$connecter ="Se connecter";

?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style/css/bootstrap.css">
		<link rel="stylesheet" href="lightbox/jquery.lightbox.css" >
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style/css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Gudea" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
		<link rel="icon" href="img/ico.png" type="image/x-icon">
		<link rel="shortcut icon" href="img/ico.png" type="image/x-icon">
		<link rel="icon" type="image/png" href="img/favicon.png" /> 

		<title>Face-Moulins.fr</title>
	</head>
	<body>
							

		<div class="container-fluid" style="padding: 0">
<!-- Header -->
<header class="navbar navbar-fixed-top">

	<!-- Logo & recherche -->
	<div id="top">
		<img src="img/faceimg.png" alt="logo_face" />
		<div class="hidden-xs hidden-sm">
			<div id="search">
        		<a href="#" class="btn btn-default" role="button" id="boutonDon"> Soutenez-nous : Faire un <span>don</span></a>
      		</div>
		</div>
	</div>

	<!-- Menu / Navigation -->
	<div id="bottom" class="row">
		<div class="container">
			<nav class="navbar-header">
				<span class="text navbar-toggle">Navigation</span>
				<span class="bars navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<i class="fa fa-bars"></i>
				</span>
			</nav>

			<nav id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="index.php" title="Accueil" class="active">Accueil</a>
					</li>
					<li class="dropdown">
						<a href="presentation.php" title="Présentation" class="active">Présentation</a>
					</li>
					<li class="dropdown">
						<li><a href="action.php">Actions</a></li>
					</li>
					<li class="dropdown">
						<a href="galerie.php" title="Galerie" class="active">Galerie</a>
						<ul class="dropdown-menu">
							<li><a href="galerie.php">Photos</a></li>
							<li><a href="galerie.php#pageVideo">Médias</a></li>
							<li><a href="galerie.php#CVvideo">CV vidéo</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="partenariat.php" title="Partenariat" class="active">Partenariat</a>
						<ul class="dropdown-menu">
							<li><a href="partenariat.php">Entreprises</a></li>
							<li><a href="partenariat.php#pageAsso">Associations</a></li>
							<li><a href="partenariat.php#pageInstitution">Particuliers</a></li>
							<li><a href="partenariat.php#pageParticulier">Institutions</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="laFabrik.php" title="Fabrik" class="active">La Fabrik</a>
						<ul class="dropdown-menu">
							<li><a href="laFabrik.php">Présentation</a></li>
							<li><a href="laFabrik.php#pageProjet">Projets</a></li>
							<li><a href="apprenants.php">Apprenants</a></li>
						</ul>
					</li>
					<li><a href="contact.php" title="Contact" class="active">Contact</a></li>
				</ul>
			</nav>
		</div>
	</div>
</header>