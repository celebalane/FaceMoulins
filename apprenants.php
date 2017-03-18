<?php 
    include("include/header.php");
    require_once("class/admin.php");
    if(isset($_SESSION['success'])){unset($_SESSION["success"]);}
    if(isset($_SESSION['errors'])){unset($_SESSION["errors"]);}
    if(isset($_SESSION['inputs'])){unset($_SESSION["inputs"]);}

    $bdd = new Admin();
    $bdd->connectBDD();
    $req = $bdd->getBDD()->select('*', 'EleveFabrik');

    if(isset($_POST["apprenant"])){
      $req = $bdd->getBDD()->select('*', 'EleveFabrik');
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
  if(isset($_SESSION["connexion"])) : ?>
    <form action="" method="POST" class="text-center">
      <input type="text" placeholder="Nom de l'apprenant à modifier" name="apprenant"/>
      <button type="submit">Valider</button>
    </form>
<?php endif ?>      

</div>
</div>
<!--Pied de page-->
<?php include("include/footer.php"); ?>

     
