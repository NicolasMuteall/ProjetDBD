<?php
    /*----------------------------------------RECUP LES INFOS DU JOUEUR CONNECTé-------------------------------------------------*/
    $players = $cnx->prepare('select PSEUDO_JOUEUR, REF_IMAGE_JOUEUR, NOM_PLATEFORME, REF_IMAGE_RANK from joueur JOIN rank_ge ON joueur.RANK_JOUEUR = rank_ge.NOM_RANK');
    $players -> execute();
    $resultplayers = $players->fetchall(PDO::FETCH_OBJ);
    //var_dump($resultplayers);