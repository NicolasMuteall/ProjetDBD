<?php
    $profil = $cnx->prepare('select * from joueur where PSEUDO_JOUEUR = "'.$_SESSION['pseudo'].'"');
    $profil -> bindvalue('PSEUDO_JOUEUR', $_SESSION['pseudo']);
    $profil -> execute();
    $resultprofil = $profil->fetch(PDO::FETCH_OBJ);
    var_dump($resultprofil);

    $killerprofil = $cnx->prepare('select NOM_PERSO from personnage JOIN joueur ON personnage.ID_PERSONNAGE = joueur.ID_TUEUR where ID_TUEUR = "'.$resultprofil->ID_TUEUR.'"');
    $killerprofil -> bindvalue('PSEUDO_JOUEUR', $_SESSION['pseudo']);
    $killerprofil -> execute();
    $resulttueur = $killerprofil->fetch(PDO::FETCH_OBJ);
    var_dump($resulttueur);