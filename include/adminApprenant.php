<?php
	require_once("../class/admin.php");
	session_start();
	if($_SESSION["connexion"] != "se déconnecter"){
		header("location:youShouldNotPass.php");
	}

	$bdd = new Admin();
	$bdd->connectBDD();
	
	if(isset($_POST["apprenant"]) AND $_POST["apprenant"] != ""){
      $nom = strtoupper($_POST["apprenant"]);
      $req2 = $bdd->getBDD()->select('*', 'EleveFabrik', 0, 'nom=?', $nom);
    }
    if(isset($_POST["id"])){
      if($_POST["id"] == "ajouter"){
        //Securisation $_FILES //
        if(isset($_FILES['photo'])){
          $extension = explode('.', $_FILES['photo']['name']);
          $realExtension = new SplFileInfo($_FILES['photo']["name"]);
          if($realExtension->getExtension() == $extension[1] AND $extension[1] != "php" AND count($extension) < 3){
            $goodExtension = true;
          }else{
            echo '<script>alert("format de l\'image non reconnu");</script>';
            $goodExtension = false;
          }
        }
        if(isset($_POST["Nom"]) AND isset($_POST["Prenom"]) AND isset($_POST["Local"]) AND isset($_POST["Github"]) AND $goodExtension == true){

          $name = $_FILES["photo"]["name"];  //Stockage du nom du fichier
          $articleDir = $_SERVER["DOCUMENT_ROOT"]."/FaceMoulins/img/identite"; 
          
          if(!move_uploaded_file($_FILES["photo"]["tmp_name"], "$articleDir/$name")){
            echo "impossible de deplacer le fichier..";
          }else{
            $bdd->getBDD()->insertInto("EleveFabrik", "nom=?, prenom=?, mail=?, local=?, gitHub=?, img=?", array(strtoupper($_POST["Nom"]), 
                                              $_POST["Prenom"],
                                               $_POST["Mail"],
                                                $_POST["Local"],
                                                 $_POST["Github"],
                                                  "img/identite/".$name));
          }
        }
      }
      if(isset($_POST["suppr/modif"]) AND $_POST["suppr/modif"] == "suppr"){
        var_dump($_POST);
        $bdd->getBDD()->delete("EleveFabrik", "id=?", array($_POST['id']));
      }else{
        $bdd->getBDD()->update("prenom=?, nom=?, mail=?, local=?, gitHub=?, img=?", "EleveFabrik", "id=?",  array($_POST["Prenom"], strtoupper($_POST["Nom"]), $_POST["Mail"], $_POST["Local"], $_POST["Github"], $_POST["photo"], $_POST['id']));
      }
      header("location:adminApprenant.php");
    }


	$req = $bdd->getBDD()->select("*", "EleveFabrik");
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
	<div>
    <a href="../apprenants.php">Retour</a>
		<h1 class="text-center">Gestion des apprenants</h1>
		<table>
			<?php
				while($data = $req->fetch()){
					echo '<form action="" method="POST">';
					echo '<tr>';
	                    echo '<td><input type="text" name="Prenom" value="'.$data["prenom"].'" required /></td>';
	                    echo '<td><input type="text" name="Nom" value="'.$data["nom"].'" required /></td>';
	                    echo '<td><input type="mail" name="Mail" value="'.$data["mail"].'" required /></td>';
	                    echo '<td><input type="text" name="Local" value="'.$data["local"].'" required /></td>';
	                    echo '<td><input type="text" name="Github" value="'.$data["gitHub"].'" required /></td>';
	                    echo '<td><input type="text" name="photo" value="'.$data["img"].'" required /></td>';
	                    echo '<td><select name="suppr/modif">
	                                <option value="suppr" >Supprimer</option>
	                                <option value="modif" selected >Modifier</option>
	                              </select>
	                          </td>';      
	                    echo '<td><button type="submit" name="id" value="'.$data["id"].'" >Valider</button></td>';
                  echo '</tr>'; 
                  echo '</form>';
				}
			?>
		</table>
	</div>
</body>
</html>				