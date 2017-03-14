<?php

	session_start();
	if($_SESSION["connexion"] != "se déconnecter"){
		header("location:youShouldNotPass.php");
	}
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../style/css/admin.css">
	</head>
	<body>
	<div id="container">
		<div class= "connexion">
			<h3>Ajouter article</h3>
			<form onsubmit="return false">
				<input class="admin" type="texte" name="texte" id= "TitreArticle" placeholder="Titre de l'article" onfocus="visual();">
				<input class="admin" type="file" name="fichier" id="fichier" accept="image/*" onchange="readURL(this);"/>
				<textarea class="admin" id="paragraphe" placeholder="Texte de l'article" onfocus="visual();"></textarea>
				<input class="admin" type="submit" value="Valider" id="validArticle" onclick="go('article');" />
			</form>
			<a id="afficheArticle" href="#" onclick="go('afficherArticle');" >Gérer les publications</a>
		</div>	
		<div id="visualisation">
			<h1 id="titre"></h1>
			<img id="image" />
			<p id="paragrapheVisuel"></p>
		</div>
		<a href="../index.php"> Retour sur le site</a>	
	</div>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/admin.js"></script>	
</body>
</html>

	
			

