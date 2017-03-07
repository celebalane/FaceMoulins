<?php
  session_start();
  include("include/header.php");
?>
<!--Formulaire de contact-->
<div class="container">
  <?php if(array_key_exists('errors',$_SESSION)): ?>
  <div class="alert alert-danger">
    <?= implode('<br>', $_SESSION['errors']); ?>
  </div>
  <?php endif; ?>
  <?php if(array_key_exists('success',$_SESSION)): ?>
  <div class="alert alert-success">
    Votre message a bien été envoyé !
  </div>
<?php endif; ?>
</div>

<section id="sectionContact">
  <form class="form-horizontal col-md-9 col-md-offset-1 col-xs-12" method="post" action="formulaire.php">
    <h2>Contact</h2>
    <p>Pour une demande d'adhésion ou toute autres questions, veuillez remplir le formulaire. Nous vous recontacterons dans les plus brefs délais.</p>
    <div class="form-group-lg">
      <label for="nom" class="col-sm-2 control-label">Nom</label>
      <div class="col-sm-10">
        <input type="text" name="nom" value="<?php echo isset($_SESSION['inputs']['nom'])? $_SESSION['inputs']['nom'] : ''; ?>" placeholder="Ex : Dupond" maxlength="30" class="form-control input-lg" required>
      </div>
    </div>
    <div class="form-group-lg">
      <label for="prenom" class="col-sm-2 control-label">Prénom</label>
      <div class="col-sm-10">
        <input type="text" name="prenom" value="<?php echo isset($_SESSION['inputs']['prenom'])? $_SESSION['inputs']['prenom'] : ''; ?>"  placeholder="Ex : Nicolas" maxlength="30" class="form-control input-lg" required>
      </div>
    </div>
    <div class="form-group-lg">
      <label for="mail" class="col-sm-2 control-label">Mail</label>
      <div class="col-sm-10 input-group" id="blocMail">
        <span class="input-group-addon">@</span>
        <input type="email" name="mail" value="<?php echo isset($_SESSION['inputs']['mail'])? $_SESSION['inputs']['mail'] : ''; ?>" placeholder="Ex : dupond@gmail.com" class="form-control input-lg" required>
      </div>
    </div>
    <div class="form-group-lg">
      <label for="sujet" class="col-sm-2 control-label" id="sujetLabel">Sujet</label>
      <div class="col-sm-10">
        <input type="text" name="sujet" value="<?php echo isset($_SESSION['inputs']['sujet'])? $_SESSION['inputs']['sujet'] : ''; ?>" placeholder="ex: Renseignements" maxlength="40" class="form-control input-lg" id="sujet" required>
      </div>
    </div>
    <div class="form-group-lg">
      <label for="message" class="col-sm-2 control-label" id="labelZone">Message</label>
      <div class="col-sm-10 input-group">
        <textarea name="message" placeholder="Votre message" value="<?php echo isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message'] : ''; ?>" maxlength="500" rows="9" class="form-control input-lg" id="zoneTexte" required></textarea>
      </div>
    </div>
      <!--Bouton envoi-->
      <div class="form-group-lg">
        <div class="row">
          <div class="col-sm-offset-10 col-sm-2 col-xs-offset-7 col-xs-2">
            <button type="submit" name="envoi" class="btn btn-default active">Envoyer</button>
          </div>
        </div>
      </div>
    </form>
    <!--Contact normal-->
    <div class="col-md-2 col-xs-12">
      <section id="contactFace">
        <h4 class="text-center">FACE bourbonnais </h4>
        <h5 class="text-center"> Adresse : </h5>
        <p class="text-center"><span class="glyphicon glyphicon-home"></span></p><p class="text-center"> 1 rue Berthelot Moulins, Auvergne, France </p>
        <h5 class="text-center"> Teléphone : </h5>
        <p class="text-center"> 06 - 89 - 32 - 71 - 09 </p>
      </section>
    </div>
  </section>
</div>
<!--Pied de page-->
<?php include("include/footer.php"); 

  unset($_SESSION['inputs']); // on nettoie les données précédentes
  unset($_SESSION['success']);
  unset($_SESSION['errors']);
?>