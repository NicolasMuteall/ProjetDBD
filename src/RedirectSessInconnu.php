<?php 
    /*------------------------------------REDIRIGE VERS INDEX SI LA SESSION PSEUDO EST INCONNUE-------------------------------------------*/
    if($_SESSION['pseudo'] === "inconnu"){
        header('Location: /ProjetDBD/index.php');
    }

    /*------------------------------------------------CREER UN RAFRAICHISSEMENT DE LA PAGE UPDATE-------------------------------------*/
    if(isset($_GET['test'])){
        header('Location: updateprofil.php#selectkiller');
    }
    