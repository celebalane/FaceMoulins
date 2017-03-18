<?php 
    include("include/header.php");
    if(isset($_SESSION['success'])){unset($_SESSION["success"]);}
    if(isset($_SESSION['errors'])){unset($_SESSION["errors"]);}
    if(isset($_SESSION['inputs'])){unset($_SESSION["inputs"]);}?>

<div class="container decalage">
	<h1 class="titreSection col-md-12 col-sm-7">Dons</h1>
	<section class="col-md-12 col-xs-12 col-sm-12" id="don">
		<div class="row">
			<h2>Soutenez nos actions</h2>
			<article>
				<h3>Vos dons nous sont utiles</h3>
				<p>Vous êtes un citoyen et vous vous sentez concernés par la démarche et les actions de FACE Territoire bourbonnais.<br>
				Vous êtes une entreprise et vous adhérez aux valeurs qui portent notre fondation dans la prévention et la lutte contre l’exclusion, les discriminations et la pauvreté. Vous êtes convaincu qu’une des missions de votre entreprise est de contribuer à la cohésion sociale en s’engageant dans des actions concrètes.<br>
				Vos contributions nous donnent les moyens d'agir et de mettre en oeuvre nos actions que vous pouvez retrouver sur cette <a href="action.php">page</a>.</p>
				<p><strong>Aidez-nous à agir</strong></p>
			</article>
		</div>
		<div class="row">
			<h3>Bénéficiez d'une réduction d'impôts</h3>
			<article class="col-md-6">
				<h4>Particulier</h4>
				<div class="col-md-6">
					<p>Vous bénéficiez d’une réduction d’impôt sur le revenu de 66 % dans la limite de 20% de votre revenu imposable (ex : un don de 250 € ne vous coûtera que 100 €). Si le plafond de 20 % des revenus est dépassé et puis c'est tout, le bénéfice de la réduction peut être reporté sur les 5 années suivantes.
					Si vous êtes assujetti à l’ISF, vous bénéficiez de la réduction de 75 % du montant de votre don, au titre du don à une Fondation reconnue d’utilité publique, plafonné à 50 000 €, selon la loi TEPA du 27 août 2007 (ex : un don de 3 000 € ne vous coûtera que 750 €).</p>
				</div>
				<div class="resultat">
					<div class="col-md-6">
						<p><strong>Calculez votre don après réduction</strong></p>
						<label for="montantDon">Montant du don</label>
						<input type="text" name="montantDonParticulier" placeholder="Montant" id="montantDon" class="form-control">
						<h5>Après réduction</h5>
						<div id="resultatParticulier">

						</div>
					</div>
				</div>
			</article>
			<article class="col-md-6">
				<h4>Entreprise</h4>
				<div class="col-md-6">
					<p>Vous décidez de faire participer votre entreprise à l’effort de solidarité par un don en numéraire. L’ensemble de vos versements au titre du mécénat vous permet de bénéficier d’une réduction d’impôt sur le revenu ou d’impôt sur les sociétés de 60% de leur montant pris dans la limite de 0,5 % du chiffre d’affaires total hors taxes. En cas de dépassement de ce seuil, ou bien si le résultat de l’exercice en cours est nul ou négatif, l’entreprise a la possibilité de reporter l’excédent au titre des 5 exercices suivants dans les mêmes conditions, après prise en compte des versements de l’année.</p>
				</div>
				<div class=resultat>
					<div class="col-md-6">
						<p><strong>Calculez votre don après réduction</strong></p>
						<label for="montantDonEntreprise">Montant du don</label>
						<input type="text" name="montantDonEntreprise" placeholder="Montant" id="montantDonEntreprise" class="form-control">
						<h5>Après réduction</h5>
						<div id="resultatEntreprise">
						
						</div>
					</div>
				</div>
			</article>
		</div>
		<div class="row" id="bandeauDon">
			<div class="col-md-12 col-xs-12" >
				<a class="btn btn-default col-md-6 col-md-offset-3 col-xs-12" href="contact.php?sujet=3" role="button" name="btnimportant">Faire un don</a>
			</div>
		</div>
	</section>
</div>
<?php include("include/footer.php"); ?>
	