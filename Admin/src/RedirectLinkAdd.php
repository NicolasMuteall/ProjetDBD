<?php 

if($_GET['role'] === 'Survivant'){
    $link = 'AddSurvivant.php';
}else{
    $link = 'AddTueur.php';
}