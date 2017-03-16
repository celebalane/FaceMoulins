<?php 
require_once("connect.php");
class Admin {

	private $bdd;

	public function getBDD(){
		return $this->bdd;
	}
	function connectBDD(){
		$this->bdd = new Connect("faceMoulins", "faceMoulins", "Mysteria666");
	}
	function clearBDD(){
		$this->bdd = NULL;
	}

	function connectAdmin($pseudo, $pass){
		if(isset($pseudo) && isset($pass)){
			$pseudo = htmlspecialchars($pseudo);
			$pass = htmlspecialchars($pass);

			$req= $this->bdd->select('*', "idUsers", 1);
			$bdd = new Connect("faceMoulins", "root", "");
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
				header("location:admin.php");
			}
		}

	}

	function createArticle($content){
		if(isset($content)){
			$contentArticle = $content;
			$contentArticle = explode(",", $content);
			$imagecode="";
			$texte="";
			for($i=0; $i<strlen($contentArticle[1]); $i++){
				if($contentArticle[1][$i] != " "){
					$imagecode .= $contentArticle[1][$i];
				}else
					$imagecode .="+";
			}
			$imagecode.=",";
			for($i=0; $i<strlen($contentArticle[2]); $i++){
				if($contentArticle[2][$i] != " "){
					$imagecode .= $contentArticle[2][$i];
				}else
					$imagecode .="+";
			}
			for($i=0;$i<strlen($contentArticle[3]);$i++){
				if($contentArticle[3][$i] == "@" AND $contentArticle[3][$i+1] == ".")
					$texte .= ",";
				elseif($contentArticle[3][$i] == "." AND $contentArticle[3][$i-1] == "@")
					$texte .= " ";
				else
					$texte .= $contentArticle[3][$i];
			}
			if(isset($contentArticle[0]) AND isset($contentArticle[1]) AND isset($contentArticle[2])){
				$req = $this->bdd->insertInto("Articles", array('titre=?, img=?, texte=?'), array($contentArticle[0], $imagecode, $texte));
			}
		}

	}

	public function isPublish($delete, $publish){
		if(isset($delete) AND isset($publish)){
			$req= $this->bdd->prepare('UPDATE Articles SET publish=? WHERE id=?');
			$req->execute(array("none", $publish));
			header("location:../article.php");
		}
		elseif(isset($delete)){
			$req= $this->bdd->prepare('DELETE FROM Articles WHERE id=?');
			$req->execute(array($delete));
			header("location:ajoutArticle.php");
		}elseif(isset($publish)){
			$req=$bdd->prepare('UPDATE Articles SET publish=? WHERE id=?');
			$req->execute(array("yes", $publish));
			header("location:../article.php");
		}
	}

}