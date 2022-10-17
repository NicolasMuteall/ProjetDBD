<?php 
    session_start();
    $_SESSION['role'] = 'visit';
    require('src/TestEmptySession.php');
    require('templates/TempHead.php');
    require('./templates/TempIndex.php');
    var_dump($_SESSION['role'], $_SESSION['pseudo']);
    require('./templates/TempFooter.php');  
?>