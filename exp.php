<?php include("inc/header.inc.php"); ?>
<?php require_once("inc/data.inc.php"); ?>

<section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
  <div class="w-100">
    <h2 class="mb-5">Experience</h2>

    <?php

    $base_de_donnee = $pdo->query("SELECT * FROM experiences ORDER BY id_experiences");
    while ($experiences = $base_de_donnee->fetch(PDO::FETCH_OBJ)) { ?>

      <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">

        <div class="resume-content">
          <div class="mb-0">
            <h3><?php echo $experiences->emploi; ?></h3>
          </div>
          <div class="subheading mb-3">
            <h5><?php echo $experiences->entreprise; ?></h5>
          </div>
          <div>
            <p><?php echo $experiences->description; ?></p>
          </div>
        </div>

        <div class="resume-date text-md-right">
          <div class="text-primary">
            <p><?php echo $experiences->date_embauche; ?></p>
          </div>
          <div class="text-primary">
            <p><?php echo $experiences->date_fin; ?></p>
          </div>
        </div>

      </div>
    <?php } ?>

  </div>

</section>