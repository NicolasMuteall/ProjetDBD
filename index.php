<?php 
    session_start()
    $_SESSION['role'] = 'visit';
    require('./templates/TempHead.php');
    require('./templates/TempIndex.php');
    var_dump($_SESSION['role']);
    require('./templates/TempFooter.php');  
?>