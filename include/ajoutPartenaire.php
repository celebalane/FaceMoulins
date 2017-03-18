<?php
	require_once("../class/admin.php");
	session_start();
	if($_SESSION["connexion"] != "se déconnecter"){
		header("location:youShouldNotPass.php");
	}




?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../style/css/admin.css">
	<title>Ajout de partenaire</title>
</head>
<body>
 <div id="container" class="connexion">
 	<h2>Ajouter un partenaire</h2>
 	<form action="" method="POST" enctype="multipart/form-data">
	 	<p>	
	 		<label for="type">Type de partenaire:</label>
	 		<select name="type">
	 			<option value="1">Entreprise</option>
	 			<option value="2">Association</option>
	 			<option value="3">Institution</option>
	 			<option value="4">Particulier</option>
	 		</select>
 		</p>	
 		<p><input type="text" name="nom" placeholder="Nom du partenaire" /></p>
 		<p><input type="text" name="url" placeholder="URL du partenaire" /></p>
 		<label for="description">Description du partenaire</label>
 		<p><textarea name="description"></textarea></p>
 		<label for="logo">Logo du partenaire</label>
 		<p><input type="file" name="logo" accept="image/*"/></p>
 		<a href="../partenariat.php" title="partenariat">Retour sur le site</a>
 	</form>
 </div>
</body>
</html>