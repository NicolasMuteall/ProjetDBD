<?php 
    session_start();
    $_SESSION['role'] = 'visit';
    require('../src/TestEmptySession.php');
    require('../templates/TempHead.php'); 
    var_dump($_SESSION['role']);
    require('../src/Connect.php');
    require('../src/RefImgRoleReq.php');
    require('../src/Disconnect.php');
    require('../templates/TempRole.php');
    require('../templates/TempFooter.php');  
?>