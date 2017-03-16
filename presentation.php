
    <?php
     include("include/header.php"); ?>
    <div class="container">
      <div id="decalpresentation"></div>
      <div class="row" id="presentation">
        <h1 class="col-md-12 boxtitle titreSection"><i class="fa fa-info-circle" aria-hidden="true"></i>Présentation</h1>

        <div class="col-md-12 box">
          <div id="container-roll">
            <div class="face-ecr">
              <img id="face-ecr" width="20%" src="img/face_ecrit.png" alt="Objectifs de FACE">
              <div class="round">
                <img id="round" width="20%" src="img/round.png" alt="Objectifs de FACE">
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
      </div>

      <div class="row" id="histoire">
        <div class="col-md-7">
          <h1 class="boxtitle titreSection"><i class="fa fa-history" aria-hidden="true"></i>Histoire</h1>
          <div class="box">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>  
        <div class="col-md-4 col-md-offset-1">
          <h1 class="boxtitle titreSection"><i class="fa fa-bars" aria-hidden="true"></i>Navigation</h1>
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

      <div class="row" id="actions">
        <h1 class="col-md-12 boxtitle titreSection"><i class="fa fa-check-square-o" aria-hidden="true"></i>Nos actions</h1>

        <div class="col-md-12 box">
          <div class="col-md-4">
            <h3>La fabrique du numérique</h3>
            <hr />
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          </div>

          <div class="col-md-4">
            <h3>Projet Civigaz</h3>
            <hr />
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>

          <div class="col-md-4">
            <h3>Café d'en Face</h3>
            <hr />
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
        <?php
          if(!empty($_SESSION["login"]))
            echo '<button class="btn btn-primary">Ajouter une action</button>';
        ?>  
      </div>

    </div>
    <?php include("include/footer.php"); ?>