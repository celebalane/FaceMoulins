<?php
	require_once('../class/admin.php');
		$bdd = new Admin();
		$bdd->connectBDD();
		$bdd->createArticle($_POST["contentArticle"]);
		echo "L'article à bien été créé";
		$bdd->clearBDD();

		$bdd = new pdo('mysql:host=localhost;dbname=faceMoulins;charset=utf8', 'faceMoulins', 'Mysteria666');
		$req = $bdd->prepare("SELECT * FROM Articles ORDER BY id DESC LIMIT 1");
		$req->execute();
		echo '<section id="sectionArticle">';
		while($donnees = $req->fetch()){
			echo '<div style="text-align:center;">';
			echo '<h1 class="h1ArticleAdmin">'.$donnees["titre"].'</h1><br/><br/>';
			echo '<img src="'.$donnees["img"].'" alt="'.$donnees["titre"].'" />';
			echo '<p>'.$donnees["texte"].'</p>';
			echo '</div>';
		}
		echo '<a href="ajoutArticle.php">retour</a>';
		echo '</section>';
		$req->closeCursor();

