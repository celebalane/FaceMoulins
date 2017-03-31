<?php 
    include("include/header.php");
    if(isset($_SESSION['success'])){unset($_SESSION["success"]);}
    if(isset($_SESSION['errors'])){unset($_SESSION["errors"]);}
    if(isset($_SESSION['inputs'])){unset($_SESSION["inputs"]);}
?>
<div class="container decalage">   
<!--Galerie-->
<h1 class="titreSection col-md-12 col-xs-12">Galerie</h1>
<section class="col-xs-12 col-md-12" id="galerie">
    <!--Première ligne-->
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="col-md-3 col-xs-6">
                <!--Image au survol de la souris-->
                <div class="rollopaque hidden-xs">
                    <img src="img/galerie/loupe.png" class="img-responsive"/>
                </div>
                <!--Image-->
                <div>
                    <a href="img/galerie/galerie1.jpg" rel="lightbox" data-caption="Inauguration de la 1ère fabrique du numérique en Auvergne en présence de représentants de la mairie, du département, de la région, de l'ESPE, d'organismes administratifs et d'associations, d'adhérents et d'ambassadeurs de FACE Territoire Bourbonnais."><img src="img/galerie/galerie1.jpg" class="img-responsive" /></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="rollopaque hidden-xs">
                    <img src="img/galerie/loupe.png" class="img-responsive"/>
                </div>
                <div>
                    <a href="img/galerie/galerie2.jpg" rel="lightbox" data-caption="Réunion de travail"><img src="img/galerie/galerie2.jpg" class="img-responsive" /></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="rollopaque hidden-xs">
                    <img src="img/galerie/loupe.png" class="img-responsive"/>
                </div>
                <div>
                    <a href="img/galerie/galerie3.jpg" rel="lightbox" data-caption="Participation de FACE à la semaine de l'emploi et de la formation"><img src="img/galerie/galerie3.jpg" class="img-responsive" /></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="rollopaque hidden-xs">
                    <img src="img/galerie/loupe.png" class="img-responsive"/>
                </div>
                <div>
                    <a href="img/galerie/galerie4.jpg" rel="lightbox" data-caption="Deux membres de FACE : Christine BERGER et Xavier de Soultrait"><img src="img/galerie/galerie4.jpg" class="img-responsive" /></a>
                </div>
            </div>
        </div>
    </div>
    <!--Deuxième ligne-->
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="col-md-3 col-xs-6">
                <!--Image au survol de la souris-->
                <div class="rollopaque hidden-xs">
                    <img src="img/galerie/loupe.png" class="img-responsive"/>
                </div>
                <!--Image-->
                <div>
                    <a href="img/galerie/galerie5.jpg" rel="lightbox" data-caption="Notre ambassadeur Xavier de Soultrait au Rallye Dakar"><img src="img/galerie/galerie5.jpg" class="img-responsive" /></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="rollopaque hidden-xs">
                    <img src="img/galerie/loupe.png" class="img-responsive"/>
                </div>
                <div>
                    <a href="img/galerie/galerie6.jpg" rel="lightbox" data-caption="Assemblée"><img src="img/galerie/galerie6.jpg" class="img-responsive" /></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="rollopaque hidden-xs">
                    <img src="img/galerie/loupe.png" class="img-responsive"/>
                </div>
                <div>
                    <a href="img/galerie/galerie8.jpg" rel="lightbox" data-caption="Affiche café d'en face"><img src="img/galerie/galerie8.jpg" class="img-responsive"  /></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <div class="rollopaque hidden-xs">
                    <img src="img/galerie/loupe.png" class="img-responsive"/>
                </div>
                <div>
                    <a href="img/galerie/galerie9.jpg" rel="lightbox"><img src="img/galerie/galerie9.jpg" class="img-responsive" /></a>
                </div>
            </div>
        </div>
    </div>
    <!--Troisième ligne-->
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="col-md-3 col-xs-6">
                <!--Image au survol de la souris-->
                <div class="rollopaque hidden-xs">
                    <img src="img/galerie/loupe.png" class="img-responsive"/>
                </div>
                <!--Image-->
                <div>
                    <a href="img/galerie/galerie10.jpg" rel="lightbox" data-caption="Une partie de l'équipe de FACE territoire bourbonnais"><img src="img/galerie/galerie10.jpg" class="img-responsive" /></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="rollopaque hidden-xs">
                    <img src="img/galerie/loupe.png" class="img-responsive"/>
                </div>
                <div>
                    <a href="img/galerie/galerie12.jpg" rel="lightbox" data-caption="Réunion FACE territoire bourbonnais"><img src="img/galerie/galerie12.jpg" class="img-responsive" /></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="rollopaque hidden-xs">
                    <img src="img/galerie/loupe.png" class="img-responsive"/>
                </div>
                <div>
                    <a href="img/galerie/galerie16.jpg" rel="lightbox" data-caption=""><img src="img/galerie/galerie16.jpg" class="img-responsive" /></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="rollopaque hidden-xs">
                    <img src="img/galerie/loupe.png" class="img-responsive"/>
                </div>
                <div>
                    <a href="img/galerie/galerie14.jpg" rel="lightbox" data-caption="Conférence de presse"><img src="img/galerie/galerie14.jpg" class="img-responsive" /></a>
                </div>
            </div> 
        </div>
    </div>
    <!--Quatrième ligne-->
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="col-md-3 col-xs-6">
                <!--Image au survol de la souris-->
                <div class="rollopaque hidden-xs">
                    <img src="img/galerie/loupe.png" class="img-responsive"/>
                </div>
                <!--Image-->
                <div>
                    <a href="img/galerie/galerie20.jpg" rel="lightbox" data-caption="Un candidat en entretien"><img src="img/galerie/galerie20.jpg" class="img-responsive" /></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="rollopaque hidden-xs">
                    <img src="img/galerie/loupe.png" class="img-responsive"/>
                </div>
                <div>
                    <a href="img/galerie/galerie17.jpg" rel="lightbox" data-caption="Journée de recrutement: les futurs apprenants travaillent en groupe"><img src="img/galerie/galerie17.jpg" class="img-responsive" /></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="rollopaque hidden-xs">
                    <img src="img/galerie/loupe.png" class="img-responsive"/>
                </div>
                <div>
                    <a href="img/galerie/galerie18.jpg" rel="lightbox" data-caption="Travail de groupe des futurs apprenants"><img src="img/galerie/galerie18.jpg" class="img-responsive" /></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="rollopaque hidden-xs">
                    <img src="img/galerie/loupe.png" class="img-responsive"/>
                </div>
                <div>
                    <a href="img/galerie/galerie19.jpg" rel="lightbox" data-caption="Entretiens avec les candidats"><img src="img/galerie/galerie19.jpg" class="img-responsive" /></a>
                </div>
            </div>
        </div>
    </div>
    <!--Cinquième ligne-->
    <div class="row">
        <div class="col-md-3 col-xs-12">
                <!--Image au survol de la souris-->
                <div class="rollopaque hidden-xs">
                    <img src="img/galerie/loupe.png" class="img-responsive"/>
                </div>
                <!--Image-->
                <div>
                    <a href="img/galerie/galerie7.jpg" rel="lightbox" data-caption="Journée entretien pour le recrutement des apprenants pour la première fabrique du numérique à Moulins"><img src="img/galerie/galerie7.jpg" class="img-responsive" /></a>
                </div>
            </div>
    </div>
    <div class="row" id="video">
        <div class="col-md-3 col-xs-12">
            <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Ffaceterritoirebourbonnais%2Fvideos%2F286357901758936%2F&show_text=0&width=560" width="290" height="150" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
        </div>
        <div class="col-md-3 col-xs-12">
            <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Ffaceterritoirebourbonnais%2Fvideos%2F344917932569599%2F&show_text=0&width=560" width="290" height="150" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
        </div>
        <div class="col-md-3 col-xs-12">
            <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Ffaceterritoirebourbonnais%2Fvideos%2F199076643820396%2F&show_text=0&width=560" width="290" height="150" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
        </div>
        <div class="col-md-3 col-xs-12">
            <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Ffaceterritoirebourbonnais%2Fvideos%2F199079147153479%2F&show_text=0&width=560" width="290" height="150" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
        </div>
    </div>      
</section>
</div>
</div>
<!--Pied de page-->
<?php include("include/footer.php"); ?>