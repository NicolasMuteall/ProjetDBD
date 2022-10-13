<?php
    session_start();
    require('./templates/TempHead.php');
    var_dump($_SESSION['role'], $_GET['perso'], $_GET['role']);
    require('./src/TestRoleChar.php');
    require('./src/Connect.php');
    require('./src/InfoCharReq.php');
    require('./src/Disconnect.php');
    require('./templates/TempCharacter2.php');
    require('./templates/TempFooter.php');
?>