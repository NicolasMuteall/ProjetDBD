<?php
    /*----------------------------------RECUP TOUS LES ROLES SAUF LE ROLE ACTUEL DU JOUEUR------------------------------------*/
    $role = $cnx->prepare('SELECT NOM_ROLE FROM `role`  WHERE NOM_ROLE != "'.$resultprofil->NOM_ROLE.'"');
    $role -> execute();
    $resultrole = $role->fetchall(PDO::FETCH_OBJ);
    //var_dump($resultrole);

    /*---------------------------------------RECUP LES NOMS DES PERSOS TUEURS SAUF CELUI ACTUEL---------------------------------------------*/
    $killerupdate = $cnx->prepare('SELECT ID_PERSONNAGE, NOM_PERSO FROM `personnage` WHERE NOM_ROLE != "Survivant" and NOM_PERSO != "'.$resulttueur->NOM_PERSO.'"');
    $killerupdate -> execute();
    $resultkillerupdate = $killerupdate->fetchall(PDO::FETCH_OBJ);
    //var_dump($resultkillerupdate);

    /*---------------------------------------RECUP LES NOMS DES RANK SAUF CELUI ACTUEL---------------------------------------------*/
    $rankupdate = $cnx->prepare('SELECT NOM_RANK FROM `rank_ge` WHERE NOM_RANK != "'.$resultprofil->RANK_JOUEUR.'"');
    $rankupdate -> execute();
    $resultrankupdate = $rankupdate->fetchall(PDO::FETCH_OBJ);
    //var_dump($resultrankupdate);

    /*----------------------------------------SELECTIONNE LES COMPETENCES SAUF CELLE DEJA DANS LA BDD-----------------------------------*/
    $selectcompt1 = $cnx->prepare('select NOM_COMPETENCE, ID_COMPETENCE from competences where NOM_COMPETENCE != "'.$resultcompt1->NOM_COMPETENCE.'" and NOM_COMPETENCE != "'.$resultcompt2->NOM_COMPETENCE.'" and NOM_COMPETENCE != "'.$resultcompt3->NOM_COMPETENCE.'" and NOM_COMPETENCE != "'.$resultcompt4->NOM_COMPETENCE.'" and SURVIVANT_TUEUR = "'.$rolecompt.'"');
    $selectcompt1 -> execute();
    $resultselectcompt1 = $selectcompt1->fetchall(PDO::FETCH_OBJ);
    //var_dump($resultselectcompt1);

    /*-------------------------------------------SELECTIONNE LES PLATEFORME SAUF CELLE DU JOUEUR------------------------------------------*/
    $plateformeupdate = $cnx->prepare('SELECT NOM_PLATEFORME FROM `plateforme` WHERE NOM_PLATEFORME != "'.$resultprofil->NOM_PLATEFORME.'"');
    $plateformeupdate -> execute();
    $resultplateformeupdate = $plateformeupdate->fetchall(PDO::FETCH_OBJ);
    //var_dump($resultrankupdate);