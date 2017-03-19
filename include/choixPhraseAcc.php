<?php
	require_once("../class/admin.php");
	session_start();
	if($_SESSION["connexion"] != "se déconnecter"){
		header("location:youShouldNotPass.php");
	}

	$bdd = new Admin();
	$bdd->connectBDD();
	if(isset($_POST["pub"])){
		$publication = $bdd->getBDD()->update("publiée=?", "phraseAccroche", 'false', array("none"));
		$publication = $bdd->getBDD()->update("publiée=?", "phraseAccroche", 'id=?', array("yes", $_POST["pub"]));
	}


	$req = $bdd->getBDD()->select("*", "phraseAccroche");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../style/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../style/css/admin.css">
	<title>Administration</title>
</head>
<body>
	<div >

		<a href="ajoutArticle.php">Retour</a>	
		<?php
			while($data = $req->fetch()){
				if($data["publiée"] == "yes"){
				 	$publish="Publiée";
				 	$disabled = "disabled";
				}else{
				 	 $publish ="Non publiée"; 
				 	 $disabled="";
				}  
				echo '<blockquote>';
				echo '<h3 class="text-center">'.$data["titre"].'</h3>';
          		echo '<p><em>'.$data["texte"].'</em></p>';
          		echo '<footer class="text-right" id="auteur"> '.$data["auteur"].'</footer>';
          		echo '<form action="" method="POST">';
          		echo '<button type="submit" name="pub" value="'.$data["id"].'" '.$disabled.'>Publier</button>';
          		echo '</form>';
          		echo $publish;
          		echo '</blockquote>';
			}
		?>
		
		<a href="ajoutArticle.php">Retour</a>	
	</div>
</body>
</html>