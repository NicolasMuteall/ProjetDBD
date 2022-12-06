<?php
    $perso = $cnx->prepare('select * from personnage where NOM_ROLE="'.$_GET['role'].'"');
    $perso -> bindvalue('NOM_ROLE', $_GET['role']);
    $perso -> execute();
    $resultperso = $perso->fetchall(PDO::FETCH_OBJ);
    //var_dump($resultperso);
?>