<?php 
    /*------------------------------------REDIRIGE VERS INDEX SI LA SESSION PSEUDO EST INCONNUE-------------------------------------------*/
    if($_SESSION['pseudo'] === "inconnu"){
        header('Location: /ProjetDBD/index.php');
    }


    