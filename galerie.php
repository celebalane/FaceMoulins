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
    <h3><strong>Photos</strong></h3>
    <div class="row">
        <div class="col-md-12 col-xs-12 col-sm-12"  id="pagePhoto">
            <div id="my_carousel" class="carousel slide" data-ride="carousel">
            <!-- Slides -->
                <div class="carousel-inner">
                <!-- Page 1 -->
                    <div class="item active">  
                        <div class="carousel-page2">
                            <a href="img/galerie/galerie1.jpg" rel="lightbox" class="img-responsive2" data-caption="Inauguration de la 1ère fabrique du numérique en Auvergne en présence de représentants de la mairie, du département, de la région, de l'ESPE, d'organismes administratifs et d'associations, d'adhérents et d'ambassadeurs de FACE Territoire Bourbonnais. "><img src="img/galerie/galerie1.jpg" class="imageCarousel2" alt="inauguration fabrique du numérique"/></a>
                        </div>
                    </div>               
                <!-- Page 2 -->
                    <div class="item ">  
                        <div class="carousel-page2">
                            <a href="img/galerie/galerie2.jpg" rel="lightbox" class="img-responsive2" data-caption="Réunion de travail"><img src="img/galerie/galerie2.jpg" class="imageCarousel2" alt="réunion de travail"/></a>
                        </div>
                    </div>
                <!-- Page 3 -->
                    <div class="item ">  
                        <div class="carousel-page2">
                            <a href="img/galerie/galerie3.jpg" rel="lightbox" class="img-responsive2" data-caption="Participation de FACE à la semaine de l'emploi et de la formation"><img src="img/galerie/galerie3.jpg" class="imageCarousel2"  alt="FACE à la semaine de l'emploi"/></a>
                        </div>
                    </div> 
                <!-- Page 4 -->
                    <div class="item ">  
                        <div class="carousel-page2">
                            <a href="img/galerie/galerie4.jpg" rel="lightbox" class="img-responsive2" data-caption="Deux membres de FACE : Christine BERGER et Xavier de Soultrait"><img src="img/galerie/galerie4.jpg" class="imageCarousel2" alt="Christine Berger et Xavier de Soultrait" /></a>
                        </div>
                    </div>
                <!-- Page 5 -->
                    <div class="item ">  
                        <div class="carousel-page2">
                            <a href="img/galerie/galerie5.jpg" rel="lightbox" class="img-responsive2" data-caption="Notre ambassadeur Xavier de Soultrait au Rallye Dakar"><img src="img/galerie/galerie5.jpg" class="imageCarousel2" alt="xavier de soultrait au Rallye Dakar"  /></a>
                        </div>
                    </div>
                <!-- Page 6 -->
                    <div class="item ">  
                        <div class="carousel-page2">
                            <a href="img/galerie/galerie6.jpg" rel="lightbox" class="img-responsive2" data-caption="Assemblée"><img src="img/galerie/galerie6.jpg" class="imageCarousel2" alt="Assemblée" /></a>
                        </div>
                    </div>
                <!-- Page 7 -->   
                    <div class="item ">  
                        <div class="carousel-page2">
                            <a href="img/galerie/galerie8.jpg" rel="lightbox" class="img-responsive2" data-caption="Affiche café d'en face"><img src="img/galerie/galerie8.jpg" class="imageCarousel2" alt="Afficher café d'en face" /></a>
                        </div>     
                    </div>
                <!-- Page 8 -->
                    <div class="item ">  
                        <div class="carousel-page2">
                            <a href="img/galerie/galerie9.jpg" rel="lightbox" class="img-responsive2"><img src="img/galerie/galerie9.jpg" class="imageCarousel2" alt="Face" /></a>
                        </div>
                    </div>
                <!-- Page 9 -->
                    <div class="item ">  
                        <div class="carousel-page2">
                            <a href="img/galerie/galerie10.jpg" rel="lightbox" class="img-responsive2" data-caption="Une partie de l'équipe de FACE territoire bourbonnais"><img src="img/galerie/galerie10.jpg" class="imageCarousel2" alt="Réunion FACE" /></a>
                        </div>    
                    </div>
                <!-- Page 10 -->
                    <div class="item ">  
                        <div class="carousel-page2">
                            <a href="img/galerie/galerie12.jpg" rel="lightbox" class="img-responsive2" data-caption="Réunion FACE territoire bourbonnais"><img src="img/galerie/galerie12.jpg" class="imageCarousel2"  alt="Réunion"/></a>
                        </div>    
                    </div>
                <!-- Page 11 -->
                    <div class="item ">  
                        <div class="carousel-page2">
                            <a href="img/galerie/galerie14.jpg" rel="lightbox" class="img-responsive2" data-caption="Conférence de presse"><img src="img/galerie/galerie14.jpg" class="imageCarousel2"  alt="Conférence de presse"/></a>
                        </div>    
                    </div>
                <!-- Page 12 -->
                    <div class="item ">  
                        <div class="carousel-page2">
                            <a href="img/galerie/galerie16.jpg" rel="lightbox" class="img-responsive2" ><img src="img/galerie/galerie16.jpg" class="imageCarousel2" data-caption="Xavier Desoultrait" /></a>
                        </div>    
                    </div>
                <!-- Page 13 -->
                    <div class="item ">  
                        <div class="carousel-page2">
                            <a href="img/galerie/galerie7.jpg" rel="lightbox" class="img-responsive2" data-caption="Journée entretien pour le recrutement des apprenants pour la première fabrique du numérique à Moulins"><img src="img/galerie/galerie7.jpg" class="imageCarousel2" data-caption="Les entretients" /></a>
                        </div>    
                    </div>
                <!-- Page 14 -->
                    <div class="item ">  
                        <div class="carousel-page2">
                            <a href="img/galerie/galerie17.jpg" rel="lightbox" class="img-responsive2" data-caption="Journée de recrutement: les futurs apprenants travaillent en groupe"><img src="img/galerie/galerie17.jpg" class="imageCarousel2" data-caption="Journée recrutement travail de groupe" /></a>
                        </div>    
                    </div>
                <!-- Page 15 -->
                    <div class="item ">  
                        <div class="carousel-page2">
                            <a href="img/galerie/galerie18.jpg" rel="lightbox" class="img-responsive2" data-caption="Travail de groupe des futurs apprenants"><img src="img/galerie/galerie18.jpg" class="imageCarousel2" data-caption="Journée recrutement travail de groupe" /></a>
                        </div>    
                    </div>
                <!-- Page 16 -->
                    <div class="item ">  
                        <div class="carousel-page2">
                            <a href="img/galerie/galerie19.jpg" rel="lightbox" class="img-responsive2" data-caption="Entretiens avec les candidats"><img src="img/galerie/galerie19.jpg" class="imageCarousel2" data-caption="Entretiens avec les candidats" /></a>
                        </div>    
                    </div>
                <!-- Page 17 -->
                    <div class="item ">  
                        <div class="carousel-page2">
                            <a href="img/galerie/galerie20.jpg" rel="lightbox" class="img-responsive2" data-caption="Un candidat en entretien"><img src="img/galerie/galerie20.jpg" class="imageCarousel2" data-caption="Entretien d'un candidat" /></a>
                        </div>    
                    </div>
                </div>    
                <!-- Contrôles -->
                <a class="left carousel-control" href="#my_carousel" data-slide="prev">
                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                </a>
                <a class="right carousel-control" href="#my_carousel" data-slide="next">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
        <!--Video-->
        <h3 id="pageVideo"><strong>Médias</strong></h3>
        <div class="row" >
            <div class="col-md-6 col-xs-12">
                <video controls src="video/video1.mp4" poster="img/galerie/ImageVideo/logoface.png"></video>
            </div>
            <div class="col-md-6 col-xs-12">
                <video controls src="video/video2.mp4" poster="img/galerie/ImageVideo/video1.png"> </video>
            </div>
        </div>
        <h3 id="CVvideo"><strong>CV Video</strong></h3>
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <video controls src="video/video3.mp4" poster="img/galerie/ImageVideo/regis.jpg"> </video>
            </div>
            <div class="col-md-6 col-xs-12">
                <video controls src="video/video4.mp4" poster="img/galerie/ImageVideo/stephane.jpg"> </video>
            </div>
        </div>
    </section>
</div>
</div>
<!--Pied de page-->
<?php include("include/footer.php"); ?>