<?php
    session_start();
    require('../src/TestEmptySession.php');
    require('../templates/TempHead.php');
    var_dump($_SESSION['role'], $_GET['perso'], $_GET['role']);
    require('../src/Connect.php');
    require('../src/InfoCharReq.php');
    require('../src/TestRoleChar.php');
    require('../src/CompCharReq.php');
    require('../src/Disconnect.php');
    require('../templates/TempCharacter2.php');
    require('../templates/TempFooter.php');
?>