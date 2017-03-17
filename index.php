<?php 
  include("include/header.php");
  if(isset($_SESSION['success'])){unset($_SESSION["success"]);}
  if(isset($_SESSION['errors'])){unset($_SESSION["errors"]);}
  if(isset($_SESSION['inputs'])){unset($_SESSION["inputs"]);}
  
  require_once("class/admin.php");
  $bdd = new Admin();
  $bdd->connectBDD();
  $req = $bdd->showsArticle();
?>

<!--Citation-->
<div class="container col-md-12" id="decalageAccueil">
	<div class="row-fluid">
		<blockquote>
			<h3 class="text-center"> FACE est une association qui lutte contre toutes formes d'exclusion .</h3>
			<p><em>« Sans se substituer à la puissance publique, ni aux associations, la capacité des entreprises à accompagner l’accès à l’emploi, à la formation, aux biens et services essentiels, aux droits…   constitue un formidable levier d’insertion, d’inclusion et d’intégration. »</em></p>
      <footer class="text-right" id="auteur"> Gérard Mestrallet, Président de la Fondation FACE </footer> 
		</blockquote>
	</div>
</div>
<div class="container">
<!--Liste des articles-->
  <h1 class="titreSection col-md-9 col-sm-7">Actualités
  <?php 
    if(isset($_SESSION["connexion"])){
      echo '<a href="include/ajoutArticle.php"><button class="btn btn-primary">Ajouter</button></a>';
    }
  ?></h1>   
	<section class="col-md-9 col-xs-12 col-sm-7" id="filActu">
    <!--Article 1-->
     <?php $i=0;
        while($data = $req->fetch()){
          echo $i == 1 ? "<article class='articles' id='dernierArticle'>" : "<article class='articles'>";
            echo "<div class='row'>";
              echo "<img src='".$data["img"]."' class='col-md-7 col-xs-1 col-sm-7' alt='reunion' />";
              echo "<div class='col-md-5 col-xs-10 col-sm-12'>";
                echo $data["texte"];
              echo "</div>";
            echo "</div>";
          echo "</article>";      
          $i++;
        }
        ?>
     <!--  <div class="row">
        <img src="img/accueil/articles/imgactu1.jpg" class="col-md-7 col-xs-1 col-sm-7" alt="reunion" />
        <div class="col-md-5 col-xs-10 col-sm-12">
          <h3>INFO Assemblée Générale</h3><p>Le club d'entreprises FACE Territoire Bourbonnais vous invite à leur AG du 19 janvier prochain A l’Amphithéâtre de l’ESPE à Moulins (28 rue des Geais) à 16h45.<br /></p>
          <p>Nous vous remercions de bien vouloir vous inscrire par mail (c.berger@fondationface.org)</p>
        </div>
      </div>
    </article> -->
    <!--Article 2-->
    <!-- <article class="articles" id="dernierArticle">
      <div class="row">
        <img src="img/accueil/articles/galerie2.jpg" class="col-md-7 col-sm-7" alt="inauguration" />
        <div class="col-md-5 col-xs-10 col-sm-12">
          <h3>FACE Territoire Bourbonnais vous souhaite une merveilleuse année 2017.</h3><p>Tout comme notre ambassadeur Xavier de Soultrait relevons des défis et soyons ambitieux.</p> -->
          <!--<nav aria-label="..." class="col-xs-offset-5 col-sm-offset-8 col-md-5">
                  <ul class="pager"><li><a href="#">Voir la suite</a></li></ul>
                </nav>-->
        <!-- </div>
      </div> -->
    </article>
	</section>
	<!--Sur le coté droit-->
  <div class="facebook">
    <aside>
        <!--Facebook-->

        <div class="col-md-3 col-sm-5" id="facebookOrdi">
          <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffaceterritoirebourbonnais%2F&tabs=timeline&width=320&height=530&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=true&appId" width="320" height="530" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
        </div>
        <div class="col-md-3 col-sm-5" id="facebookTab">
          <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffaceterritoirebourbonnais%2F&tabs=timeline&width=250&height=680&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=true&appId" width="250" height="680" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
        </div>
        <div class="col-xs-12 col-sm-5 text-center" id="facebookMobile">
          <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffaceterritoirebourbonnais%2F&tabs=timeline&width=250&height=450&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=true&appId" width="250" height="450" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
        </div>
      </aside>
    </div>
  </div>
  <!--Presse-->
  <div class="container">
    <h1 class="titreSection col-md-12 col-sm-12 col-xs-12">Presse</h1>
    <section class="col-md-12 col-sm-12 col-xs-12" id="presse">
      <article class="col-md-4 col-sm-4">
        <a href="http://www.lamontagne.fr/moulins/economie/emploi/2017/01/23/le-club-dentrepreneurs-face-territoire-bourbonnais-a-presente-son-programme-dactions-2017_12253076.html"><img src="img/accueil/presse1.jpg" class="img center-block img-responsive"></a>
        <h4>Le club d’entrepreneurs Face territoire bourbonnais a présenté son programme d’actions 2017</h4>
        <a href="http://www.lamontagne.fr/moulins/economie/emploi/2017/01/23/le-club-dentrepreneurs-face-territoire-bourbonnais-a-presente-son-programme-dactions-2017_12253076.html" class="lien">La Montagne</a>
      </article>
      <article class="col-md-4 col-sm-4">
        <a href="http://www.lamontagne.fr/moulins/social/2015/06/20/le-club-face-territoire-bourbonnais-a-ete-lance-hier-dans-les-locaux-du-cncs_11488852.html"><img src="img/accueil/presse2.jpg" class="img center-block img-responsive"></a>
        <h4 id="lien2">Le club Face Territoire bourbonnais a été lancé hier dans les locaux du CNCS</h4>
        <a href="http://www.lamontagne.fr/moulins/social/2015/06/20/le-club-face-territoire-bourbonnais-a-ete-lance-hier-dans-les-locaux-du-cncs_11488852.html" class="lien">La Montagne</a>
      </article>
      <article class="col-md-4 col-sm-4">
        <a href="http://www.fondationface.org/wp-content/uploads/2016/02/Communiqu%C3%A9-de-presse-Ecole-Num%C3%A9rique-3-f%C3%A9vrier.pdf"><img src="img/accueil/logoface.png" class="img center-block img-responsive"></a>
        <h4 id="lien4">Le Gouvernement a annoncé, le 3 février, la labellisation de 16 formations portées des Clubs ou impliquant
            des Clubs FACE.</h4>
        <a href="http://www.fondationface.org/wp-content/uploads/2016/02/Communiqu%C3%A9-de-presse-Ecole-Num%C3%A9rique-3-f%C3%A9vrier.pdf" class="lien">FACE.org</a>
      </article>
		</section>
  </div>

<!--Pied de page-->
<?php include("include/footer.php"); ?>