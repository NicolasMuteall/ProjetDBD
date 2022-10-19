<?php 
    if($_SESSION['pseudo'] === "inconnu"){
        header('Location: /ProjetDBD/index.php');
    }