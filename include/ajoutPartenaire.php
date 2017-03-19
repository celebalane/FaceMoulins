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
	<link rel="stylesheet" type="text/css" href="../style/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../style/css/admin.css">
	<title>Ajout de partenaire</title>
</head>
<body>
 <div id="container" class="connexion">
 	<h2>Ajouter un partenaire</h2>
 	<form action="" method="POST" enctype="multipart/form-data">
 		<p>
 			<input type="radio" name="partenaire_radio" value="ajout_partenaire">Ajouter
 			<input type="radio" name="partenaire_radio" value="modif_partenaire">Modifier
 			<input type="radio" name="partenaire_radio" value="suppr_partenaire">Supprimer
 		</p>
	 	<p>	
	 		<label for="type">Type de partenaire:</label>
	 		<select name="type">
	 			<option>--- choix partenaire ---</option>	

			<?php
				$pdo = new Admin();
				$pdo->connectBDD();

				$statement = $pdo->getBDD()->select('*','typePartenaires');
				$typePartenaire	=  $statement->fetchAll();

				for ($i=0; $i <= count($typePartenaire)-1 ; $i++) { 
					echo '<option value="'.($i+1).'">'.$typePartenaire[$i][1].'</option>';
				}
			?>
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