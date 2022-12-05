<?php
    /*----------------------------------------RECUP LES INFOS DES ARTICLES-------------------------------------------------*/
    $article = $cnx->prepare('select * from article');
    $article -> execute();
    $resultarticle = $article->fetchall(PDO::FETCH_OBJ);
    //var_dump($resultarticle);