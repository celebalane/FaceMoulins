<?php 
	require_once("class/admin.php");
	include("include/header.php");
    if(isset($_SESSION['success'])){unset($_SESSION["success"]);}
    if(isset($_SESSION['errors'])){unset($_SESSION["errors"]);}
    if(isset($_SESSION['inputs'])){unset($_SESSION["inputs"]);}
?>
<div class="container decalage">
<div class="row">
	<!--Partenariats-->
	<h1 class="titreSection col-md-12 col-sm-12">Partenariats
		<?php
			if(isset($_SESSION["connexion"])){
				//du css dans le html du php ====> J'AIME!!!!
				echo '<a href="include/ajoutPartenaire.php"><button class="btn btn-primary" style="box-shadow: 1px 1px 2px black; margin-right:10px; text-shadow:1px 1px 2px black;">Gestion des partenaires</button></a>';
    		}
		?>
	</h1>
	<section class="col-md-12 col-sm-12" id="sectionPartenariat">
		<!--Entreprise-->
		<div class="col-md-12">
			<h2 class="text-center">Nos adhérents</h2>
			<p>La Fondation FACE s'est engagée dès sa création dans un dialogue nourri et une démarche de co construction systématique avec l'ensemble des parties prenantes : c'est cet « ADN » qui préside depuis 1994 à la création des Clubs FACE et de ses autres structures de médiation et d'insertion, toujours nées d'une volonté commune des entreprises, des collectivités et de l'ensemble des acteurs territoriaux.
			Cette volonté de maillage avec nos partenaires institutionnels, entreprises ou associations, est la clé de la conception et de la réalisation de nos projets, tant les politiques de lutte contre l'exclusion, les discriminations et la pauvreté nécessitent au-delà d'une association systématique des bénéficiaires (salariés, habitants, jeunes en contrats d'alternance, services civiques...etc...) l'implication de tous les acteurs.</p>
			<center><h2><strong>Les entreprises adhérentes au Club FACE</strong></h2></center>
			

		<?php
			
			$pdo = new Admin();
			$pdo->connectBDD();
			$statement = $pdo->getBDD()->select('img, URL_site,type_id','imgPartenaires',0,'type_id=?', 1);
			$entreprise	=  $statement->fetchAll();

			$pdo->ajoutEntreprise($entreprise);


		?>
		<!--Associations-->
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h2 id="pageAsso" class="text-center">Les associations</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut dapibus mauris. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas gravida arcu at viverra interdum. Etiam facilisis suscipit magna sit amet vulputate. Cras sed arcu eu sapien maximus dictum. Nam in mauris at orci congue luctus eget eu 	lectus. Phasellus semper imperdiet massa nec mollis. Aenean facilisis feugiat pharetra. Suspendisse vitae enim neque. Mauris sodales ipsum quis hendrerit vestibulum. Nunc mattis dignissim ante, eu consectetur diam porttitor non.
				</p>
				

		<?php
		
			$statement = $pdo->getBDD()->select('img, URL_site,type_id','imgPartenaires',0,'type_id=?', 2);
			$association	=  $statement->fetchAll();

			$pdo->ajoutEntreprise($association);

		?>
			<!--Institutions-->
			<div class="row institution">
				<div class="col-md-12 col-sm-12">
					<h2 id="pageInstitution" class="text-center">Les institutions</h2>
					<h3><em>De nombreuses institutions soutiennent la réalisation des actions de FACE, considérée comme un véritable acteur en matière de prévention et de lutte contre l'exclusion</em></h3> 
				</div>
			</div>
		<?php
			$statement = $pdo->getBDD()->select("
				Partenaires.type_id,
				Partenaires.nom, 
				Partenaires.texte, 
				imgPartenaires.img,
				imgPartenaires.URL_site",
				"Partenaires, imgPartenaires",
				0,
				"Partenaires.img_id=imgPartenaires.id AND 
				Partenaires.URL_id=imgPartenaires.id");

			$institution =  $statement->fetchAll();
			
			$pdo->ajoutInstitution($institution);
	
		?>
	<!--Particuliers-->
	<h2 id="pageParticulier" class="col-md-12 col-sm-12 col-xs-12 text-center">Les Particuliers</h2>
	<h4>Pour nos donateurs particuliers, si vous souhaitez apparaitre sur cette page, vous pouvez nous contactez <a href="contact.html">ici</a></h4>

	<?php 
			$statement = $pdo->getBDD()->select("
				Partenaires.type_id,
				Partenaires.nom, 
				Partenaires.texte, 
				imgPartenaires.img,
				Partenaires.date",
				"Partenaires, imgPartenaires",
				0,
				"Partenaires.img_id=imgPartenaires.id");

			$particulier =  $statement->fetchAll();

			$pdo->ajoutParticulier($particulier);
	?>
	</section>	
</div>
</div>		
<!--Pied de page-->								
<?php include("include/footer.php");?>