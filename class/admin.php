<?php 
require_once("class/connect.php");
class Admin {

	function connect($pseudo, $pass){
		if(isset($pseudo) && isset($pass)){
			$pseudo = htmlspecialchars($pseudo);
			$pass = htmlspecialchars($pass);

			$bdd = new Connect("faceMoulins", "faceMoulins", "Mysteria666");
			$req=$bdd->select('*', "idUsers", 1);
			$req -> execute();
			while($donnees = $req->fetch()){
				$admin = $donnees["adminName"];
				$password = $donnees["adminPassword"];
			}
			if($pseudo == $admin AND $pass == $password){
				$_SESSION["login"] = $pseudo;
				$_SESSION["password"] = $pass;
				header("location:index.php");
			}else{
				$_SESSION["erreur"] = "Nom d'utilisateur ou mot de passe incorrecte";
				header("location:apprenants.php");
			}
		}

	}

	function createArticle($titre, $img, $text){
		if(isset($titre) &&  isset($img) && isset($text)){

		}

	}

}