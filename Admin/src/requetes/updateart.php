<?php

$articleupd = $cnx->prepare('select * from article WHERE ID_ARTICLE = "' . $_GET['id'] . '"');
$articleupd->execute();
$resultarticleupd = $articleupd->fetch(PDO::FETCH_OBJ);
    //var_dump($resultarticleupd);