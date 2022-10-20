<?php
    /*----------------------------------------RECUP LES INFOS DU JOUEUR CONNECTé-------------------------------------------------*/
    $profil = $cnx->prepare('select * from joueur where PSEUDO_JOUEUR = "'.$_SESSION['pseudo'].'"');
    $profil -> bindvalue('PSEUDO_JOUEUR', $_SESSION['pseudo']);
    $profil -> execute();
    $resultprofil = $profil->fetch(PDO::FETCH_OBJ);
    //var_dump($resultprofil);
    
    /*------------------------------------------RECUP LE NOM DU PERSONNAGE TUEUR DE LA TABLE JOUEUR ---------------------------------------------*/
    $killerprofil = $cnx->prepare('select NOM_PERSO from personnage JOIN joueur ON personnage.ID_PERSONNAGE = joueur.ID_TUEUR where ID_TUEUR = "'.$resultprofil->ID_TUEUR.'"');
    $killerprofil -> bindvalue('PSEUDO_JOUEUR', $_SESSION['pseudo']);
    $killerprofil -> execute();
    $resulttueur = $killerprofil->fetch(PDO::FETCH_OBJ);
    //var_dump($resulttueur);

    $compt1 = $cnx->prepare('select NOM_COMPETENCE from competences JOIN joueur on joueur.ID_COMPETENCE1 = competences.ID_COMPETENCE where PSEUDO_JOUEUR = "'.$_SESSION['pseudo'].'"');
    $compt1 -> bindvalue('PSEUDO_JOUEUR', $_SESSION['pseudo']);
    $compt1 -> execute();
    $resultcompt1 = $compt1->fetch(PDO::FETCH_OBJ);
    //var_dump($resultcompt1);

    $compt2 = $cnx->prepare('select NOM_COMPETENCE from competences JOIN joueur on joueur.ID_COMPETENCE2 = competences.ID_COMPETENCE where PSEUDO_JOUEUR = "'.$_SESSION['pseudo'].'"');
    $compt2 -> bindvalue('PSEUDO_JOUEUR', $_SESSION['pseudo']);
    $compt2 -> execute();
    $resultcompt2 = $compt2->fetch(PDO::FETCH_OBJ);
    //var_dump($resultcompt2);

    $compt3 = $cnx->prepare('select NOM_COMPETENCE from competences JOIN joueur on joueur.ID_COMPETENCE3 = competences.ID_COMPETENCE where PSEUDO_JOUEUR = "'.$_SESSION['pseudo'].'"');
    $compt3 -> bindvalue('PSEUDO_JOUEUR', $_SESSION['pseudo']);
    $compt3 -> execute();
    $resultcompt3 = $compt3->fetch(PDO::FETCH_OBJ);
    //var_dump($resultcompt3);

    $compt4 = $cnx->prepare('select NOM_COMPETENCE from competences JOIN joueur on joueur.ID_COMPETENCE4 = competences.ID_COMPETENCE where PSEUDO_JOUEUR = "'.$_SESSION['pseudo'].'"');
    $compt4 -> bindvalue('PSEUDO_JOUEUR', $_SESSION['pseudo']);
    $compt4 -> execute();
    $resultcompt4 = $compt4->fetch(PDO::FETCH_OBJ);
    //var_dump($resultcompt4);