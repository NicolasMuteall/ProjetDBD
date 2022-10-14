<?php
    $perso = $cnx->prepare('select * from personnage where ID_PERSONNAGE = "'.$_GET['perso'].'"');
    $perso -> bindvalue('ID_PERSONNAGE', $_GET['role']);
    $perso -> execute();
    $resultperso = $perso->fetch(PDO::FETCH_OBJ);
    //var_dump($resultperso);
?>