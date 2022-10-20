<?php 
    /*------------------------------------REDIRIGE VERS INDEX SI LA SESSION PSEUDO EST INCONNUE-------------------------------------------*/
    if($_SESSION['pseudo'] === "inconnu"){
        header('Location: /ProjetDBD/index.php');
    }

    /*--------------------------------------------------REFRESH LA PAGE UPDATE PROFIL--------------------------------------------------------*/
    if(isset($_GET['test'])){
        var_dump($_GET['test']);
        if($_GET['test'] === 'refresh'){
            header('Location: updateprofil.php');
        }
    }