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
        <div class="col-md-6 col-xs-12 rollopaque">
            <div class="rollup">
                <i class="fa fa-search fa-5x" aria-hidden="true"></i>
            </div>
            <a href="" rel="lightbox" data-caption=""><img src="img/galerie/galerie9.jpg" ></a>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="row">
                <div class="col-md-6 col-xs-6 rollopaque">
                    <div class="rollup">
                        <i class="fa fa-search fa-5x" aria-hidden="true"></i>
                    </div>
                    <a href="" rel="lightbox" data-caption=""><img src="img/galerie/galerie9.jpg" class="small-image img-responsive"></a>
                </div>
                <div class="col-md-6 col-xs-6">
                    <a href="" rel="lightbox" data-caption=""><img src="img/galerie/galerie9.jpg" class="small-image img-responsive"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <a href="" rel="lightbox" data-caption=""><img src="img/galerie/galerie9.jpg" class="small-image img-responsive" style="height: 175px;"></a>
                </div>
            </div>
        </div>
    </div>
    <!--Deuxième ligne-->
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <div class="row">
                <div class="col-md-6 col-xs-6">
                    <a href="" rel="lightbox" data-caption=""><img src="img/galerie/galerie9.jpg" class="small-image img-responsive"></a>
                </div>
                <div class="col-md-6 col-xs-6">
                    <a href="" rel="lightbox" data-caption=""><img src="img/galerie/galerie9.jpg" class="small-image img-responsive"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xs-6">
                    <a href="" rel="lightbox" data-caption=""><img src="img/galerie/galerie9.jpg" class="small-image img-responsive"></a>
                </div>
                <div class="col-md-6 col-xs-6">
                    <a href="" rel="lightbox" data-caption=""><img src="img/galerie/galerie9.jpg" class="small-image img-responsive"></a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <a href="" rel="lightbox" data-caption=""><img src="img/galerie/galerie9.jpg"></a>
        </div>
    </div>
    <!--Troisième ligne-->
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <a href="" rel="lightbox" data-caption=""><img src="img/galerie/galerie9.jpg" style="height: 200px;" id="xl-image" class="img-responsive"></a>
        </div>
    </div>
    <!--Quatrième ligne-->
    <div class="row"> 
        <div class="col-md-6 col-xs-12">
            <div class="row">
                <div class="col-md-8 col-xs-6">
                    <a href="" rel="lightbox" data-caption=""><img src="img/galerie/galerie9.jpg" class="small-image img-responsive"></a>
                </div>
                <div class="col-md-4 col-xs-6">
                    <a href="" rel="lightbox" data-caption=""><img src="img/galerie/galerie9.jpg" class="small-image img-responsive" style="height: 300px;"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <a href="" rel="lightbox" data-caption="" ><img src="img/galerie/galerie9.jpg" class="small-image img-responsive" style="height: 175px;"></a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <a href="" rel="lightbox" data-caption=""><img src="img/galerie/galerie9.jpg" style="height: 500px;"></a>
        </div>
    </div>
    <!--Cinquième ligne-->
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <a href="" rel="lightbox" data-caption=""><img src="img/galerie/galerie9.jpg"></a>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="row">
                <div class="col-md-6 col-xs-6">
                    <a href="" rel="lightbox" data-caption=""><img src="img/galerie/galerie9.jpg" class="small-image img-responsive"></a>
                </div>
                <div class="col-md-6 col-xs-6">
                    <a href="" rel="lightbox" data-caption=""><img src="img/galerie/galerie9.jpg" class="small-image img-responsive"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xs-6">
                    <a href="" rel="lightbox" data-caption=""><img src="img/galerie/galerie9.jpg" class="small-image img-responsive"></a>
                </div>
                <div class="col-md-6 col-xs-6">
                    <a href="" rel="lightbox" data-caption=""><img src="img/galerie/galerie9.jpg" class="small-image img-responsive"></a>
                </div>
            </div>
        </div>
    </div>
    <!--Sixième ligne-->
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <a href="" rel="lightbox" data-caption=""><img src="img/galerie/galerie9.jpg" style="height: 200px;" id="xl-image" class="img-responsive"></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-xs-6">
            <a href="" rel="lightbox" data-caption=""><img src="img/galerie/galerie9.jpg" class="small-image img-responsive"></a>
        </div>
        <div class="col-md-6 col-xs-6">
            <a href="" rel="lightbox" data-caption=""><img src="img/galerie/galerie9.jpg" class="small-image img-responsive">
        </div>
    </div>  
</section>
</div>
</div>
<!--Pied de page-->
<?php include("include/footer.php"); ?>