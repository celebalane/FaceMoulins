<?php 
class Admin {
	private $baseDD;

	function __construct($dbName, $user, $pass){
		$this->baseDD = array($dbName, $user, $pass);
	}

	function connect($pseudo, $pass){
		if(isset($pseudo) && isset($pass)){
			$pseudo = htmlspecialchars($pseudo);
			$pass = htmlspecialchars($pass);

			$bdd = new PDO('mysql:host=localhost;dbname='.$this->baseDD[0].';charset=utf8', $this->baseDD[1], $this->baseDD[2]);
			$req = $bdd->prepare('SELECT * FROM idUsers LIMIT 1');
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
				header("location:connect.php");
			}
		}

	}

	function createArticle($titre, $img, $text){
		if(isset($titre) &&  isset($img) && isset($text)){

		}

	}

}