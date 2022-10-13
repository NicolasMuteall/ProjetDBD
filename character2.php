<?php
    session_start();
    require('./templates/TempHead.php');
    var_dump($_SESSION['role'], $_GET['perso']);
    require('./src/Connect.php');
    //require('./src/CharacterRoleReq.php');
    require('./src/Disconnect.php');
    require('./templates/TempCharacter2.php');
    require('./templates/TempFooter.php');
?>