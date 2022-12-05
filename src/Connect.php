<?php

    $url = explode('/', $_SERVER['REQUEST_URI']);

    if($_SERVER['REQUEST_URI'] === '/ProjetDBD/index.php' || $_SERVER['REQUEST_URI'] === '/ProjetDBD/'){
        require('env/var.env');
    }elseif($url[2] === 'controller' || $_SERVER['REQUEST_URI'] === '/ProjetDBD/admin/index.php' || $_SERVER['REQUEST_URI'] === '/ProjetDBD/Admin/' || $_SERVER['REQUEST_URI'] === '/ProjetDBD/admin/'){
        require('../env/var.env');
    }elseif($url[3] === 'controller' || count($url) === 5){
        require('../../env/var.env');
    }
    
    try {
        $cnx = new PDO('mysql:host='.$serveur.';dbname='.$bdd, $user, $passwd, array (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
        $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
    }
    
    catch (PDOException $error) {
        echo 'N° : '.$error->getCode().'<br />';
        die ('Erreur : '.$error->getMessage().'<br />');
    }
