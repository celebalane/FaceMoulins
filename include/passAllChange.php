<?php 
	require_once("../class/admin.php");
	$oldPassword="";
	
	if(isset($_POST["retour1"])){
		for($i=0;$i<strlen($_POST["retour1"]);$i++){
			$allPass = explode(",", $_POST["retour1"]);
		}
		$bdd=new Admin();
		$bdd->connectBDD();
		$req = $bdd->select("*", 'idUsers', 1);
		while($donnees = $req->fetch()){
			$oldPassword = $donnees["adminPassword"];
		}
		if($oldPassword == $allPass[1]){
			$req2 = $bdd->update("adminPassword=?", "idUsers", "id=?", array($allPass[0], 1));
			
			echo "Mot de passe changé avec succès !";
		}else{
			echo "Le mot de passe est incorrecte ou les mots de passe ne sont pas identiquent";
		}
	}
	echo '</div>';
?>