<?php 
    include("include/header.php");
    if(isset($_SESSION['success'])){unset($_SESSION["success"]);}
    if(isset($_SESSION['errors'])){unset($_SESSION["errors"]);}
    if(isset($_SESSION['inputs'])){unset($_SESSION["inputs"]);}?>

<div class="container decalage">
	<h1 class="col-md-12 boxtitle titreSection">Actions</h1>
	 		<section class="col-md-12 col-xs-12" id="presentation">
	          	<!--Palmarès-->
	          	<article id="action" class="row">
	            	<h3><i class="fa fa-film" aria-hidden="true"></i> CV vidéo</h3>
	            	<p>La première action engagée par Face territoire bourbonnais suit cette logique : la réalisation de CV vidéo « pour améliorer les chances de taper dans l'œil d'un recruteur, alors que ceux-ci reçoivent aujourd'hui un grand nombre de CV papier et de lettres de motivation, parfois stéréotypées », explique Eric Getenay, directeur opérationnel (en bénévolat de compétence) du club.</p>
	            	<div>
	            		<video width="520" height="300" controls="controls" src="video/video3.mp4" class="col-md-6 col-xs-12">Cv Vidéo</video>
	            		<video width="520" height="300" controls="controls" src="video/video4.mp4" class="col-md-6 col-xs-12">Cv Vidéo</video>
	            	</div>
	            	<h3><i class="fa fa-graduation-cap" aria-hidden="true"></i> Ouverture de la Fabrik du numérique</h3>
	            	<p>Cette formation baptisée la Fabrik est tournée vers le numérique, avec une labellisation « grande école du numérique ». 23 jeunes, et moins jeunes, suivent pendant huit mois (6 mois de formation et 2 mois de stage en entreprise) une formation dispensée par le Moulinois Julien Dugrais et l'association FACE Territoire Bourbonnais.La formation se déroule actuellement dans les locaux de l'ESPE. Pour en savoir plus sur nos apprenants et leur formation veuillez cliquer sur le lien suivant.</p>
	            	<div class="text-right">
	             		<a href="laFabrik.php" class="btn btn-default btnAction" role="button"> La Fabrik </a>
	            	</div>
	            	<h3><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Création du projet Civigaz</h3>
	            	<p> En 2017, dans le cadre d'un budget porté à 215.000 €, Face Territoire bourbonnais va relayer le dispositif Civigaz, porté par la Fondation nationale. GrDF, l'agence du service civique, Face et le ministère de l'Ecologie s'associent contre la précarité énergétique. « Nous allons employer des jeunes en service civique pour se rendre au domicile de personnes en difficultés, à Moulins et sur tout notre bassin, pour les informer sur les économies d'énergie et la sécurisation du chauffage au gaz », résume Eric Getenay, qui annonce aussi « des réunions d'information ».</p>
	            	<div class="text-right">
	             		<a href="http://www.grdf.fr/" target="_blank" id="btngrdf" class="btn btn-default btnAction" role="button"> Site GRDF </a>
	            	</div>
	            	<h3><i class="fa fa-users" aria-hidden="true"></i> Café d'en Face</h3>
	            	<p id="derniereAction">Un premier Café d'en face a permis d'engager le dialogue entre le public et des chefs d'entreprises. Un second se tiendra à l'Inter-mitemps à Moulins, le 15 février. Son thème « Demain, ma vie, mon métier ».</p>
	          	</article>
	     	</section>
    	
	
</div>


<!--Pied de page-->
<?php include("include/footer.php"); ?>