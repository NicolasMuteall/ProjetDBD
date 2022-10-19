<?php 
    $compt1 = $cnx->prepare('select NOM_COMPETENCE, PRESENTATION_COMPT, REF_IMAGE_COMPT from competences JOIN personnage on personnage.ID_COMPETENCE1 = competences.ID_COMPETENCE where ID_PERSONNAGE = "'.$_GET['perso'].'"');
    $compt1 -> bindvalue('ID_PERSONNAGE', $_GET['role']);
    $compt1 -> execute();
    $resultcompt1 = $compt1->fetch(PDO::FETCH_OBJ);
    //var_dump($resultcompt1);

    $compt2 = $cnx->prepare('select NOM_COMPETENCE, PRESENTATION_COMPT, REF_IMAGE_COMPT from competences JOIN personnage on personnage.ID_COMPETENCE2 = competences.ID_COMPETENCE where ID_PERSONNAGE = "'.$_GET['perso'].'"');
    $compt2 -> bindvalue('ID_PERSONNAGE', $_GET['role']);
    $compt2 -> execute();
    $resultcompt2 = $compt2->fetch(PDO::FETCH_OBJ);
    //var_dump($resultcompt2);

    $compt3 = $cnx->prepare('select NOM_COMPETENCE, PRESENTATION_COMPT, REF_IMAGE_COMPT from competences JOIN personnage on personnage.ID_COMPETENCE3 = competences.ID_COMPETENCE where ID_PERSONNAGE = "'.$_GET['perso'].'"');
    $compt3 -> bindvalue('ID_PERSONNAGE', $_GET['role']);
    $compt3 -> execute();
    $resultcompt3 = $compt3->fetch(PDO::FETCH_OBJ);
    //var_dump($resultcompt3);

