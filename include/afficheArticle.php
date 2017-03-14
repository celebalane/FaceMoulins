<?php
	session_start();
	require_once("../class/admin.php");
	if($_SESSION["connexion"] != "se déconnecter"){
		header("location:youShouldNotPass.php");
	}

	$bdd = new Admin();
	$bdd->connectBDD();
	if(isset($_GET["del"]) AND isset($_GET["publish"])){
		$bdd->isPublish($_GET["del"], $_GET["publish"]);
	}
	$req = $bdd->getBDD()->select('*', 'Articles');
	echo '<a href="ajoutArticle.php"> Retour</a>';
	echo '<section id="sectionArticle">';
	while($donnees = $req->fetch()){
		echo '<div id="articleAdmin">';
		echo '<h1 class="h1ArticleAdmin">'.$donnees["titre"].'</h1><br/><br/>';
		echo '<img src="'.$donnees["img"].'" alt="'.$donnees["titre"].'" />';
		echo '<article>'.$donnees["texte"].'</article>';
		echo '<a href="afficheArticle.php?del='.$donnees["id"].'">Supprimer</a> ';
		if($donnees["publish"] == "yes")
			echo '<a href="afficheArticle.php?publish='.$donnees["id"].'&del=true">Ne plus publier</a>';
		else
			echo '<a href="afficheArticle.php?publish='.$donnees["id"].'">Publier</a>';
		echo '</div>';
	}	
	$req->closeCursor();
	$bdd->clearBDD();
	echo '</section>';
