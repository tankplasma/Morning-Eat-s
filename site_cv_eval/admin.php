<?php include("inc/header.inc.php"); ?>
<?php require_once("inc/data.inc.php"); ?>

<?php

if (!empty($_POST)) {


    //***************************************** */
    //Modification Base de données
    //***************************************** */
    if (!empty($_GET['modification'])) {
        $id = $_GET['modification'];
        $pdo->exec("UPDATE experiences SET emploi = \"$_POST[emploi]\" WHERE id_experiences= $id");
        $pdo->exec("UPDATE experiences SET entreprise = \"$_POST[entreprise]\"  WHERE id_experiences= $id");
        $pdo->exec("UPDATE experiences SET description = \"$_POST[description]\" WHERE id_experiences= $id");
        $pdo->exec("UPDATE experiences SET date_embauche = \"$_POST[date_embauche]\" WHERE id_experiences= $id");
        $pdo->exec("UPDATE experiences SET date_fin = \"$_POST[date_fin]\" WHERE id_experiences= $id");

        //***************************************** */
        //Ajout à la Base de données
        //***************************************** */      
    } else {
        $requeteSQL = "INSERT INTO experiences (emploi, entreprise, description, date_embauche, date_fin) VALUE ('$_POST[emploi]', '$_POST[entreprise]', '$_POST[description]','$_POST[date_embauche]','$_POST[date_fin]')";
        $result = $pdo->exec($requeteSQL);
    }

    //***************************************** */
    //Suppression Base de données
    //***************************************** */    
} else if (!empty($_GET)) {
    if (!empty($_GET['delete'])) {
        $to_suppr = $_GET['delete'];
        $pdo->exec("DELETE FROM experiences WHERE id_experiences = $to_suppr ");
        $pdo->exec("DELETE FROM education WHERE id_education = $to_suppr ");
    }
    if (!empty($_GET['modification'])) {

        echo "en cours de modification de l'experience numero " . $_GET['modification'];
    }
}

?>

<div class="sucess">
    <a href="logout.php">Déconnexion</a>
    <p>Voici votre tableau de bord pour modifier l'expérience.</p>

</div>

<div class="starter-template">
    <form method="POST" action="" enctype='multipart/form-data'>


        <div class="form-group">
            <label for="emploi">Titre</label>
            <input type="texte" class="form-control" id="emploi" name="emploi">
        </div>

        <div class="resume-item d-flex flex-column  ">
            <label for="entreprise">Nom entreprise</label>
            <textarea rows="1" class="form-control" id="entreprise" name="entreprise"></textarea>
        </div>

        <div class="resume-item d-flex flex-column  ">
            <label for="description">Description experiences</label>
            <textarea rows="2" class="form-control" id="description" name="description"></textarea>
        </div>

        <div class="form-group">
            <label for="date_embauche">Date d'embauche</label>
            <textarea rows="1" class="form-control" id="date_embauche" name="date_embauche"></textarea>
        </div>

        <div class="form-group">
            <label for="date_fin">Date fin embauche</label>
            <textarea rows="1" class="form-control" id="date_fin" name="date_fin"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </form>

    <?php

    $base_de_donnee = $pdo->query("SELECT * FROM experiences ORDER BY id_experiences");
    while ($experiences = $base_de_donnee->fetch(PDO::FETCH_OBJ)) { ?>

        <div class="experience">

            <br>

            <div>
                <h5 class="card-title"><?php echo $experiences->emploi; ?></h5>
            </div>

            <?php echo '<a href="admin.php?delete=' . $experiences->id_experiences . '" >' ?> supprimer</a>

            <br>

            <?php echo '<a href="admin.php?modification=' . $experiences->id_experiences . '" >' ?> modifier</a>

        </div>


    <?php } ?>


    <?php
    $base_de_donnee = $pdo->query("SELECT * FROM education ORDER BY id_education");
    while ($education = $base_de_donnee->fetch(PDO::FETCH_OBJ)) { ?>

        <div class="education">

            <br>

            <div>
                <h5 class="card-title"><?php echo $education->ecole; ?></h5>
            </div>

            <?php echo '<a href="admin.php?delete=' . $education->id_education . '" >' ?> supprimer</a>

            <br>

            <?php echo '<a href="admin.php?modification=' . $education->id_education . '" >' ?> modifier</a>

        </div>


    <?php } ?>


</div>