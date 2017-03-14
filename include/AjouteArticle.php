<?php
	require_once('../class/admin.php');
		$bdd = new Admin();
		$bdd->connectBDD();
		$bdd->createArticle($_POST["contentArticle"]);
		echo "L'article à bien été créé";
		$req = $bdd->getBDD()->select('*', 'Articles');
		echo '<section id="sectionArticle">';
		while($donnees = $req->fetch()){
			echo '<div id="articleAdmin">';
			echo '<h1 class="h1ArticleAdmin">'.$donnees["titre"].'</h1><br/><br/>';
			echo '<img src="'.$donnees["img"].'" alt="'.$donnees["titre"].'" />';
			echo '<p>'.$donnees["texte"].'</p>';
			echo '</div>';
		}
		echo '</section>';
		$bdd->clearBDD();
