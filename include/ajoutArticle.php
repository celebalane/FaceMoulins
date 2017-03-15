<?php
	require_once("../class/admin.php");
	session_start();
	if($_SESSION["connexion"] != "se déconnecter"){
		header("location:youShouldNotPass.php");
	}
	if(isset($_POST["textarea"])){
	
		$bdd = new Admin();
		$bdd->connectBDD();
		$bdd->updateArticle("texte=?", "Articles","id=?", array($_POST["textarea"], $_GET['id']));
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
			<?= !isset($_GET["texte"])? '<form onsubmit="return false">' : '<form action="ajoutArticle.php?id='.$_GET["id"].'" method="POST" enctype="multipart/form-data">';?>
				<input class="admin" type="texte" name="texteTitre" id= "TitreArticle" placeholder="Titre de l'article" onfocus="visual();">
				<input class="admin" type="file" name="fichier" id="fichier" accept="image/*" onchange="readURL(this);"/>
				<textarea class="admin" id="paragraphe" name="textarea" placeholder="Texte de l'article" onfocus="visual();"><?php if(isset($_GET["texte"])){echo $_GET['texte'];} ?></textarea>
				<?php 
					if(isset($_GET["texte"])){
						echo '<button class="admin" type="submit" id="validArticle">Mettre à jour</button>';
					}else{?>
						<input class="admin" type="submit" value="valider" id="validArticle" onclick="go('article');"/>
				<?php 
					}
				?>	
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

	
			

