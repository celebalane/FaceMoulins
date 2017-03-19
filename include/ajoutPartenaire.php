<?php
	require_once("../class/admin.php");
	require_once("../class/connect.php");
	session_start();
	if($_SESSION["connexion"] != "se déconnecter"){
		header("location:youShouldNotPass.php");
	}

	$bdd = new Admin();
	$bdd->connectBDD();

	$statement = $bdd->getBDD()->select('*','Partenaires, imgPartenaires');
	$req = $bdd->getBDD()->select('*', 'typePartenaires');
///////////////////////AJOUT///////////////////////////

	if(isset($_POST["valider"])){/*
      if($_POST["id"] == "ajouter"){
        //Securisation $_FILES //
        if(isset($_FILES['logo'])){
          $extension = explode('.', $_FILES['photo']['name']);
          $realExtension = new SplFileInfo($_FILES['photo']["name"]);
          if($realExtension->getExtension() == $extension[1] AND $extension[1] != "php" AND count($extension) < 3){
            $goodExtension = true;
          }else{
            echo '<script>alert("format de l\'image non reconnu");</script>';
            $goodExtension = false;
          }
        }*/
        if(isset($_POST["nom"]) AND isset($_POST["url"]) AND isset($_POST["description"])){
          
            $bdd->getBDD()->insertInto("Partenaires , imgPartenaires",
             	"Partenaires.type_id,
				Partenaires.nom, 
				Partenaires.texte, 
				imgPartenaires.URL_site", array(
												$_POST["type"],
												$_POST["nom"], 
                                             	$_POST["description"],
                                              	//$_POST["logo"],
                                               	$_POST["url"]));
            echo "partenaire ajouté";

            echo '<pre>';
            var_dump($_POST['type']);
            echo '</pre>';
          
        }else{
        	echo "pas encore";
        }
      }
////////////////////////////////////////////////////////////////////////////////

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
 	<form method="post" action="" enctype="multipart/form-data">
 		<p><label for="action">Type d'action : </label>
 			<select name='action'>
 				<option>--- choix de l'action ---</option>
	 			<option type="radio" name="ajout_partenaire">Ajouter un partenaire</option>
	 			<option type="radio" name="modif_partenaire">Modifier un partenaire</option>
	 			<option type="radio" name="suppr_partenaire">Supprimer un partenaire</option>
 			</select>
 		</p>
		<?php

			//modifier le formulaire selon le choix de l'action



		?>
	 	<p>	
	 		<label for="type">Type de partenaire:</label>
	 		<select name="type">
	 			<option>--- choix partenaire ---</option>	

			<?php
				$typePartenaire	=  $req->fetchAll();

				for ($i=0; $i <= count($typePartenaire)-1 ; $i++) { 
					echo '<option name="type" value="'.($i+1).'">'.$typePartenaire[$i][1].'</option>';
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
 		<button name="valider" class="btn btn-primary" style="padding-bottom: 25px;">Appliquer</button>
 	</form>
 </div>
</body>
</html>