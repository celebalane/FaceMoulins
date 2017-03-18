<?php 
require_once("connect.php");
class Admin {

	private $bdd;

	public function getBDD(){
		return $this->bdd;
	}
	public function connectBDD(){
		$this->bdd = new Connect("faceMoulins", "root", "");
	}
	public function clearBDD(){
		$this->bdd = NULL;
	}

	public function select($what, $where, $limite=0, $si="0", $condition="1"){
		return $this->bdd->select($what, $where, $limite=0, $si="0", $condition="1");
	}

	public function connectAdmin($pseudo, $pass){
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

	public function createArticle($content){
		if(isset($content)){
			$contentArticle = $content;
			$contentArticle = explode(",", $content);
			$imagecode="";
			$texte="";
			for($i=0; $i<strlen($contentArticle[0]); $i++){
				if($contentArticle[0][$i] != " "){
					$imagecode .= $contentArticle[0][$i];
				}else
					$imagecode .="+";
			}
			$imagecode.=",";
			for($i=0; $i<strlen($contentArticle[1]); $i++){
				if($contentArticle[1][$i] != " "){
					$imagecode .= $contentArticle[1][$i];
				}else
					$imagecode .="+";
			}
			for($i=0;$i<strlen($contentArticle[2]);$i++){
				if($contentArticle[2][$i] == "@" AND $contentArticle[2][$i+1] == ".")
					$texte .= ",";
				elseif($contentArticle[2][$i] == "." AND $contentArticle[2][$i-1] == "@")
					$texte .= " ";
				else
					$texte .= $contentArticle[2][$i];
			}
			if(isset($contentArticle[0]) AND isset($contentArticle[1]) AND isset($contentArticle[2])){
				$req = $this->bdd->insertInto("Articles", array(/*'titre=?, */'img=?, texte=?'), array(/*$contentArticle[0],*/ $imagecode, $texte));
			}
		}

	}

	public function isPublish($delete="", $publish=""){
		if($delete != "" AND $publish != ""){
			$req= $this->bdd->update('publish=?', 'Articles', 'id=?', array("none", $publish));
			header("location:ajoutArticle.php");
		}
		elseif($delete != ""){
			$req= $this->bdd->delete('Articles', 'id=?', array($delete));
			header("location:ajoutArticle.php");
		}elseif($publish != ""){
			$req=$this->bdd->update('publish=?', 'Articles', 'id=?', array("yes", $publish));
			header("location:ajoutArticle.php");
		}
	}

	public function showsArticle(){
		$req = $this->bdd->select('*', 'Articles', 0, 'publish=? ORDER BY id DESC', 'yes');
		return $req;
	}

	public function update($what, $where, $array1, $array2, $limit=0){
		$req=$this->bdd->update($what, $where, $array1, $array2, $limit);
		echo $limit=0 ?'<script>alert("Article modifié avec succès");</script>' : "";
		return $req;
	}

}