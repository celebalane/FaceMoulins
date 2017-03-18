<?php 
    include("include/header.php");
    require_once("class/admin.php");
    if(isset($_SESSION['success'])){unset($_SESSION["success"]);}
    if(isset($_SESSION['errors'])){unset($_SESSION["errors"]);}
    if(isset($_SESSION['inputs'])){unset($_SESSION["inputs"]);}

    $bdd = new Admin();
    $bdd->connectBDD();
    $req = $bdd->getBDD()->select('*', 'EleveFabrik');

    var_dump($_POST);
    if(isset($_POST["apprenant"])){
      $nom = strtoupper($_POST["apprenant"]);
      $req2 = $bdd->getBDD()->select('*', 'EleveFabrik', 0, 'nom=?', $nom);
    }
    if(isset($_POST["id"])){
      if($_POST["suppr/modif"] == "suppr"){
        $bdd->getBDD()->delete("EleveFabrik", "id=?", $_POST['id']);
      }else{
        $bdd->getBDD()->update("prenom=?, nom=?, local=?, gitHub=?, img=?", "EleveFabrik", "id=?",  array($_POST["Prenom"], $_POST["Nom"], $_POST["Local"], $_POST["Github"], $_POST["photo"], $_POST['id']));
      }
    }
    ?>
<div class="container decalage">
  <h1 class="col-xs-12 titreSection"><strong>Curriculum vitae des apprenants</strong></h1>
  <section class="col-xs-12" id="sectionApprenant">
    <div class="row">
          <?php
            while($data = $req->fetch()){
              echo '<div class="col-xs-6 col-sm-4 col-md-4">';
                echo '<div class="well well-sm">';
                  echo '<div class="row" id="cadre">';
              echo '<div class="col-xs-12 col-sm-6 col-md-4">';
                echo '<img src="'.$data["img"].'" alt="'.$data["prenom"].'" class="img-rounded img-responsive center-block" />';
              echo '</div>';
              echo '<div class=" col-xs-12 col-sm-6 col-md-8">';
                echo '<h4>'.$data["prenom"].'<br/>'.$data["nom"].'</h4>';
                  echo '<small>';
                    echo '<cite title="'.$data["local"].'">'.$data["local"].' <i class="fa fa-ma;p-marker" aria-hidden="true"></i>';
                    echo '</cite>';
                  echo '</small>';
                  echo '<a href="mailto:'.$data["mail"].'" ><button type="button" class="btn btn-default boutonMobile">MAIL</button></a>' ;
                  echo '<a href="'.$data["gitHub"].'" ><button type="button" class="btn btn-default boutonMobile">GITHUB</button></a>';
              echo '</div>';
          echo '</div>';
        echo '</div>';
      echo '</div>';
          }
          ?>
    </div>
  </div><!--fin row-->
</section>
<?php 
  if(isset($_SESSION["connexion"])){ 
    if(!isset($_POST["apprenant"])){ ?>
    <form action="" method="POST" class="text-center">
      <input type="text" placeholder="Nom de l'apprenant à modifier" name="apprenant"/>
      <button type="submit">Valider</button>
    </form>
<?php }else{
          echo '<form action ="" method="POST" style="width:80%;margin:auto;" >';
            echo '<table class="text-center">';
             echo '<tr>';
                  echo '<td><strong>NOM</strong></td>';
                  echo '<td><strong>PRENOM</strong></td>';
                  echo '<td><strong>LOCALISATION</strong></td>';
                  echo '<td><strong>GITHUB</strong></td>';
                  echo '<td><strong>PHOTO</strong></td>';
                echo '</tr>';
              while($data = $req2->fetch()){
                echo '<tr>';
                  echo '<td><input type="text" name="Nom" value="'.$data["nom"].'" /></td>';
                  echo '<td><input type="text" name="Prenom" value="'.$data["prenom"].'" /></td>';
                  echo '<td><input type="text" name="Local" value="'.$data["local"].'" /></td>';
                  echo '<td><input type="text" name="Github" value="'.$data["gitHub"].'" /></td>';
                  echo '<td><input type="text" name="photo" value="'.$data["img"].'" /></td>';
                  echo '<td><select name="suppr/modif">
                              <option value="suppr" >Supprimer</option>
                              <option value="modif" >Modifier</option>
                            </select>
                        </td>';      
                  echo '<td><button type="submit" name="id" value="'.$data["id"].'" >Valider</button></td>';
                echo '</tr>';  
              }
            echo '</table>';  
        echo '</form>';    
  }  
}?>

</div>
</div>
<!--Pied de page-->
<?php include("include/footer.php"); ?>

     
