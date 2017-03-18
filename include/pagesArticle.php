<?php require_once("../class/admin.php");
  $bdd = new Admin();
  $bdd->connectBDD();
  $req = $bdd->showsArticle();
if(isset($_POST["page"])){
	$i=0; $j=$_POST["page"];
	        while($data = $req->fetch()){
	          if($i >= $_POST["page"]){
	            if($j < ($_POST["page"] + 2)){
	              echo $j == ($_POST["page"]+1) ? "<article class='articles' id='dernierArticle'>" : "<article class='articles'>";
	                echo "<div class='row'>";
	                  echo "<img src='".$data["img"]."' class='col-md-7 col-xs-1 col-sm-7' alt='reunion' />";
	                  echo "<div class='col-md-5 col-xs-10 col-sm-12'>";
	                    echo $data["texte"];
	                  echo "</div>";
	                echo "</div>";
	              echo "</article>"; 
	            } 
	    	    $j++; 
	        } 
		    $i++;
	    }
	$i=($i)/2;
	echo "<div id='pagesArticle'>";
      for($j=0; $j<$i; $j++){
        if($j==0){
          echo "<p onclick='go(".($j).");'>".($j+1)."</p>";
        }else{
          echo "<p onclick='go(".($j+1).");'>".($j+1)."</p>";
        }
      }
    echo "</div>";
}else{
	echo "Cette page n'existe pas";
}