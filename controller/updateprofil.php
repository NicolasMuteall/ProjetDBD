<?php
    session_start();
    require('../src/TestEmptySession.php');
    require('../src/RedirectSessInconnu.php');
    require('../src/Connect.php');
    require('../src/ProfilReq.php');
    require('../src/FormUpdateProfil.php');
    require('../src/UpdateProfilReq.php');
    require('../templates/TempHead.php');
    //require('../src/TestRoleProfil.php');
    var_dump($_SESSION['pseudo']);
    require('../src/Disconnect.php');
    require('../templates/TempUpdateprofil.php');
    require('../templates/TempFooter.php');
?>