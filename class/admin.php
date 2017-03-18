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

				$req = $this->bdd->insertInto("Articles", array(/*'titre=?,*/' img=?, texte=?'), array(/*$contentArticle[0],*/ $imagecode, $texte));
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

	public function ajoutEntreprise($entreprise){
		for ($i=0; $i < count($entreprise) ; $i+=4) { 
			echo '<div class="row">';
			//pour mettre 4 img par ligne
			for ($j=0; $j < 4; $j++) { 
				//vérif si présent dans le tableau à index $i+$j et vérif partenaire = entreprise
				if(isset($entreprise[$i+$j])){
					echo	'<div class="col-md-3 col-sm-3">
									<a href="'.$entreprise[$i+$j][1].'">	
									<img src="'.$entreprise[$i+$j][0].'" class="center-block logo" alt="AG2R" /></a>
								</div>';
				}
			}
		echo '</div>';
		}
	}
	public function ajoutInstitution($institution){
		for ($i=0; $i < count($institution) ; $i+=2) { //au pas de 2
			echo '<div class="row institution">';	
			for ($j=0; $j < 2; $j++) { //3 particuliers par ligne
				if (isset($institution[$i+$j])){
					if ($institution[$i][0]==3) {// vérif partenaire = institution
						echo'<div class="col-md-4 col-sm-4 col-xs-12">
									<h3>'.$institution[$i+$j][1].'</h3>
									<p>'.$institution[$i+$j][2].'</p>
								</div>
								<div class="col-md-2 col-sm-2 col-xs-12">
									<a href="'.$institution[$i+$j][4].'">
									<img src="'.$institution[$i+$j][3].'" class="center-block logo" alt="'.$institution[$i+$j][1].'" /></a>
								</div>
								';
					}
				}
			}
		echo '</div>';
		}
	}
	public function ajoutParticulier($particulier){
		for ($i=0; $i < count($particulier) ; $i+=3) { 
			echo '<div class="row">';
			for ($j=0; $j < 3; $j++) { //3 particuliers par ligne
				if(isset($particulier[$i+$j])){	// vérif partenaire = particulier
					if ($particulier[$i+$j][0]==4){
						echo	'<div class="col-md-3 col-sm-3">
									<h3>'.$particulier[$i+$j][1].'</h3>
									<p>'.$particulier[$i+$j][2].'<br />
									<strong>date d\'entrée</strong> </br> '.$particulier[$i+$j][4].'</p>
									<img src="'.$particulier[$i+$j][3].'" class="photo" alt="'.$particulier[$i+$j][1].'" />
								</div>';
					}
				}
			}
		echo '</div>';
		}
		
	}
}