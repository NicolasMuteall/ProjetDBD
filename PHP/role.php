<?php
    session_start();
    include('head.php');
    include('Connect.php');

    /*$sql = "INSERT into role (NOM_ROLE, REF_IMAGE_ROLE)
    VALUES ('voleur', 'logo.png')";
    $cnx->exec($sql);*/
?>

<div id="boiterole" class="container d-flex justify-content-evenly">
    <div class="role border rounded text-center shadow-lg">
        <h3 class="mb-3 mt-3">Tueur</h3>
        <img class="imgrole" src="../images/logotueur.png" alt="logotueur">
    </div>
    <div class="role border rounded text-center shadow-lg">
        <h3 class="mb-3 mt-3">Survivant</h3>
        <img class="imgrole" src="../images/logosurvivant.png" alt="logosurvivant">
    </div>
</div>
<?php var_dump($_SESSION['role']); ?>


<?php include('footer.php') ?>