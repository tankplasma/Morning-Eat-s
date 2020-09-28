<div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
  <div class="resume-content">
    <h3 class="mb-0">Employé Polyvalent</h3>
    <div class="subheading mb-3">LIDL</div>
    <p>Caissier, boulanger, homme de ménage, rangement rayon, mise en rayon,...</p>
  </div>
  <div class="resume-date text-md-right">
    <span class="text-primary">Février 2020 - maintenant</span>
  </div>
</div>
<div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
  <div class="resume-content">
    <h3 class="mb-0">Jeune Devellopeur</h3>
    <div class="subheading mb-3">Spécialité ISN Lycée</div>
    <p>J'ai commencé à réellement le code en Terminale S et cela ma passionné directement</p>
  </div>
  <div class="resume-date text-md-right">
    <span class="text-primary">Septembre 2018 - maintenant</span>
  </div>
</div>

<div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
  <div class="resume-content">
    <h3 class="mb-0">Soutien Scolaire</h3>
    <div class="subheading mb-3"></div>
    <p>Cours particulier à des collégiens sur les matières scientifiques</p>
  </div>
  <div class="resume-date text-md-right">
    <span class="text-primary">2016 - maintenant</span>
  </div>
</div>

<div class="resume-item d-flex flex-column flex-md-row justify-content-between">
  <div class="resume-content">
    <h3 class="mb-0">Baby-sitting</h3>
    <div class="subheading mb-3"></div>
    <p>Garde, aller les chercher à l'école, leur faire l'étude....</p>
  </div>
  <div class="resume-date text-md-right">
    <span class="text-primary">2014 - 2019</span>
  </div>
</div>




<?php

$base_de_donnee = $pdo->query("SELECT * FROM experiences ORDER BY id_experiences DESC");
while ($experience = $base_de_donnee->fetch(PDO::FETCH_OBJ)) { ?>

  <div>
    <div>
      <div class="exper">
        <div>
          <h5><?php echo $experience->emploi; ?></h5>
        </div>
        <div>
          <h5><?php echo $experience->entreprise; ?></h5>
        </div>
        <div>
          <p><?php echo $experience->description; ?></p>
        </div>
      </div>
      <p><?php echo $experience->date_embauche; ?></p>
    </div>
  </div>
  <p><?php echo $experience->date_fin; ?></p>
  </div>
  </div>
<?php } ?>

<div class="resume-item d-flex flex-column flex-md-row justify-content-between">
  <div class="resume-content">
    <h3 class="mb-0">Paris Ynov Campus</h3>
    <div class="subheading mb-3">Etudes supérieures</div>
  </div>
  <div class="resume-date text-md-right">
    <span class="text-primary">2019 - maintenant</span>
  </div>
</div>

<div class="resume-item d-flex flex-column flex-md-row justify-content-between">
  <div class="resume-content">
    <h3 class="mb-0">Institut Montalembert</h3>
    <div class="subheading mb-3">College-Lycée</div>
  </div>
  <div class="resume-date text-md-right">
    <span class="text-primary">2012 - 2019</span>
  </div>
</div>

<div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
  <div class="resume-content">
    <h3 class="mb-0">Ecole Notre-Dame-de-Toutes-Grâces</h3>
    <div class="subheading mb-3">Maternelle et Primaire</div>
  </div>
  <div class="resume-date text-md-right">
    <span class="text-primary">2004 - 2012</span>
  </div>
</div>