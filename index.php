<?php 
        session_start();
        $_SESSION['role'] = 'visit';
        require('./templates/TempHead.php');
        require('./templates/TempIndex.php');
        require('./templates/TempFooter.php');  
?>