<?php include("inc/header.inc.php"); ?>
<?php require_once("inc/data.inc.php"); ?>

<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
  <div class="w-100">
    <h2 class="mb-5">Parcours scolaires</h2>

    <?php

    $base_de_donnee = $pdo->query("SELECT * FROM education ORDER BY id_education");
    while ($education = $base_de_donnee->fetch(PDO::FETCH_OBJ)) { ?>

      <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">

        <div class="resume-content">
          <div class="mb-0">
            <h3><?php echo $education->ecole; ?></h3>
          </div>
          <div class="subheading mb-3">
            <h5><?php echo $education->cursus; ?></h5>
          </div>
        </div>

        <div class="resume-date text-md-right">
          <div class="text-primary">
            <p><?php echo $education->date_debut; ?></p>
          </div>
          <div class="text-primary">
            <p><?php echo $education->debut_fin; ?></p>
          </div>
        </div>

      </div>
    <?php } ?>

  </div>
</section>