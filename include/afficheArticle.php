<?php
	session_start();
	require_once("../class/admin.php");
	if($_SESSION["connexion"] != "se déconnecter"){
		header("location:youShouldNotPass.php");
	}

	$bdd = new Admin();
	$bdd->connectBDD();
	if(isset($_GET["publish"]) AND isset($_GET["del"])){
		$bdd->isPublish($_GET["del"], $_GET["publish"]);
	}elseif (isset($_GET["publish"])) {
		$bdd->isPublish("", $_GET["publish"]);
	}elseif(isset($_GET["del"])){
		$bdd->isPublish($_GET["del"]);
	}
	$req = $bdd->getBDD()->select('*', 'Articles');
	echo '<a href="ajoutArticle.php"> Retour</a>';
	echo '<section id="sectionArticle">';
	while($donnees = $req->fetch()){
		echo '<div id="articleAdmin">';
		echo '<h1 class="h1ArticleAdmin">'.$donnees["titre"].'</h1><br/><br/>';
		echo '<img src="'.$donnees["img"].'" alt="'.$donnees["titre"].'" id="iArticle"/>';
		echo '<article id="texteArticles">'.$donnees["texte"].'</article>';
		echo '<a href="afficheArticle.php?del='.$donnees["id"].'"> Supprimer </a> ';
		if($donnees["publish"] == "yes")
			echo '<a href="afficheArticle.php?publish='.$donnees["id"].'&del=true"> Ne plus publier </a>';
		else
			echo '<a href="afficheArticle.php?publish='.$donnees["id"].'"> Publier </a>';
		echo '<a href="ajoutArticle.php?h1='.$donnees["titre"].'&texte='.$donnees["texte"].'&id='.$donnees["id"].'"> Modifier</a>';
		echo '</div>';

	}	
	$req->closeCursor();
	$bdd->clearBDD();
	echo '</section>';

