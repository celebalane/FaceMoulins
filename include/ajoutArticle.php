<?php
	require_once("../class/admin.php");
	session_start();
	if($_SESSION["connexion"] != "se déconnecter"){
		header("location:youShouldNotPass.php");
	}
	if(isset($_POST)){
		$bdd = new Admin();
		$bdd->connectBDD();
		var_dump($_POST);

		if(isset($_POST["article/Pa"]) AND $_POST["article/Pa"] == "phr"){
			$bdd->createSentence($_POST["article/Pa"], $_POST["texteTitre"], $_POST["textarea"]);
		}else{

			//Securisation $_FILES //
			if(isset($_FILES['fichier'])){
				$extension = explode('.', $_FILES['fichier']['name']);
				$realExtension = new SplFileInfo($_FILES['fichier']["name"]);
				if($realExtension->getExtension() == $extension[1] AND $extension[1] != "php" AND count($extension) < 3){
					$goodExtension = true;
				}else{
					echo '<script>alert("Pas de script !");</script>';
					$goodExtension = false;
				}
			}

			//Traitement des données pour envois en base //
			if(isset($_POST["textarea"]) AND $_FILES["fichier"]["name"]!="" AND $goodExtension){
								
				$name = $_FILES["fichier"]["name"];  //Stockage du nom du fichier
				$articleDir = $_SERVER["DOCUMENT_ROOT"]."/FaceMoulins/img/accueil/articles"; //stockage de l'adresse absolue du fichier après déplacement

				//si le deplacement ne fonctionne pas alors on affiche une erreur
				if(!move_uploaded_file($_FILES["fichier"]["tmp_name"], "$articleDir/$name")){
					echo "impossible de deplacer le fichier..";
				}else{
					$bdd->update("texte=?, img=?", "Articles","id=?", array($_POST["textarea"], "img/accueil/articles/$name", $_GET['id']));
				}

			}elseif(isset($_POST["textarea"]) AND $_POST["textarea"] != ""){
				$bdd->update("texte=?", "Articles","id=?", array($_POST["textarea"], $_GET['id']));

			}elseif(isset($_FILES["fichier"]) AND $goodExtension){
				$name = $_FILES["fichier"]["name"];
				if(!move_uploaded_file($_FILES["fichier"]["tmp_name"], "$articleDir/$name")){
					echo "impossible de deplacer le fichier..";
				}else{
					$bdd->update("img=?", "Articles","id=?", array("img/accueil/articles/$name", $_GET['id']));
				}
			}
		}
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
			<?= !isset($_GET["texte"])? '<form onsubmit="return false" id="formArticle" method="POST" action="">' : '<form action="ajoutArticle.php?id='.$_GET["id"].'" method="POST" enctype="multipart/form-data" id="formArticle">';?>

				<p>
					<label for="article/Pa">Je veux créer </label>
					<select name="article/Pa" onchange="phraseArt(this);">
						<option value="art" selected>un article</option>
						<option value="phr">une phrase d'ouverture</option>
					</select>
				</p>	

				<input class="admin" type="text" name="texteTitre" id= "TitreArticle" placeholder="Titre de l'article" onfocus="visual();" style="display:none;"/>

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

	
			

