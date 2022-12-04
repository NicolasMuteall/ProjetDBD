<?php 
    session_start();
    $_SESSION['role'] = 'visit';
    require('src/TestEmptySession.php');
    require('src/Connect.php');
    require('src/requetes/article.php');
    require('templates/TempHead.php');
    require('src/Disconnect.php');
    require('./templates/TempIndex.php');
    var_dump($_SESSION['role'], $_SESSION['pseudo']);
    require('./templates/TempFooter.php');  
?>