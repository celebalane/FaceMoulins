<?php
		session_start();
		 include("include/header.php"); ?>
		 <div id="decalage"></div>
		<div class="container">

			<div class="row" id="presentation">
				<h1 class="col-md-12 boxtitle"><i class="fa fa-info-circle" aria-hidden="true"></i>Présentation</h1>

				<div class="col-md-12 box">
					<div id="container-roll">
						<div class="face-ecr">
							<img id="face-ecr" width="20%" src="img/face_ecrit.png" alt="Objectifs de FACE">
							<div class="round">
								<img id="round" src="img/round.png" alt="Objectifs de FACE">
							</div>
						</div>
						<div class="col-md-6">
							<h3>FACE, c'est quoi ?</h3>
							<hr />
							<p>Créée en <b>1993</b> à l’initiative de 13 grands groupes français réunis par Martine Aubry, ex-directrice adjointe du groupe <i>Pechiney</i>, FACE est reconnue d’Utilité Publique en <b>1994</b> et Fondation abritante en <b>2013</b>.</p>
							<p>Elle œuvre en faveur de <b>l’engagement social et sociétal des entreprises</b> pour <b>lutter contre toutes les formes d’exclusion, de discriminations et de pauvreté</b>, par une approche globale et innovante de la Responsabilité Sociale/Sociétale des Entreprises (RSE).</p>
							<p>Organisée en Réseau, <b>FACE rassemble des entreprises de toutes tailles</b> et travaille en collaboration avec l’ensemble des parties prenantes concernées par sa mission d’utilité publique (institutions, associations, personnalités qualifiées, chercheurs, etc).</p>
							<p>FACE est présidée depuis <b>2008</b> par Gérard Mestrallet, Président d’Engie.</p>
						</div>

					</div>

					<div class="col-md-12">
						<h3>FACE Territoire Bourbonnais</h3>
						<hr />
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>

			<div class="row" id="histoire">
				<div class="col-md-7">
					<h1 class="boxtitle"><i class="fa fa-history" aria-hidden="true"></i>Histoire</h1>
					<div class="box">
						<p><strong> Tout est parti d’un constat simple : « L’exclusion permanente d’une partie de nos concitoyens est inacceptable ! Entreprises et pouvoirs publics doivent conjointement développer l’innovation sociale pour relever ce défi ».</strong></p>
						<p>Forte de sa mission d’utilité publique, FACE lutte contre toutes les formes d’exclusion, de discriminations et de pauvreté. FACE défend – depuis 1993, date de sa création – les valeurs de solidarité, de cohésion sociale, d’égalité des chances et de traitement.</p>
						Ses missions sont de favoriser la mise en action individuelle et collective de la responsabilité sociale/sociétale des entreprises (RSE) ; de mobiliser et coordonner les volontés et initiatives d’engagement social et sociétal des entreprises dans leur territoire ; de développer l’innovation sociale et sociétale avec et pour les entreprises ; d’affirmer la place et le discours des entreprises socialement responsables.</p>
					</div>
				</div>	
				<div class="col-md-4 col-md-offset-1">
					<h1 class="boxtitle"><i class="fa fa-bars" aria-hidden="true"></i>Navigation</h1>
					<div class="box">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
			</div>
			</div>

			<div class="row" id="actions">
			

				
				<?php
					if(!empty($_SESSION["login"]))
						echo '<button class="btn btn-primary">Ajouter une action</button>';
				?>	
			</div>

		</div>
		<?php include("include/footer.php"); ?>