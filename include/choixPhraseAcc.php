<?php
	require_once("../class/admin.php");
	session_start();
	if($_SESSION["connexion"] != "se déconnecter"){
		header("location:youShouldNotPass.php");
	}

	$bdd = new Admin();
	$bdd->connectBDD();
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
		<?php
			while($data = $req->fetch()){
				echo '<blockquote>';
				echo '<h3 class="text-center">'.$data["titre"].'</h3>';
          		echo '<p><em>'.$data["texte"].'</em></p>';
          		echo '<footer class="text-right" id="auteur"> '.$data["auteur"].'</footer>';
          		echo '<a href="#" >Publier</a> ';
          		echo '</blockquote>';
			}
		?>	
	</div>
</body>
</html>