<?php
    session_start();
    if(empty($_SESSION)){
        $_SESSION['role']="";
    }
?>

<?php 
     
    if($_SESSION['role'] === ""){

        header('Location: role.php');

    }else{ 

        
        include('head.php');
        var_dump($_SESSION['role'],$_GET['role']);
        include('Connect.php');

        $perso = $cnx->prepare('select * from personnage where NOM_ROLE="'.$_GET['role'].'"');
        $perso -> bindvalue('NOM_ROLE', $_GET['role']);
        $perso -> execute();
        $resultperso = $perso->fetchall(PDO::FETCH_OBJ);

        $cnx = null;
        ?>

        <div id="personnages" class="container-fluid">
            <div class="row ligneperso">
                <?php foreach($resultperso as $resultat){ ?>
                <div class="border boitetueur text-center mb-5 rounded shadow-lg">
                    <h4 class="mt-2" id="nomperso"><?= $resultat->NOM_PERSO ?></h4>
                    <img class="imgperso" src="../images/<?= $_GET['role'] ?>/<?= $resultat->REF_IMAGE_PERSO ?>" alt="<?= $resultat->NOM_PERSO ?>"> 
                </div> <?php } ?>
            </div>
        </div>
    <?php } ?>

<?php include('footer.php'); ?>