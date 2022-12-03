<?php
    require('../env/var.env');
    
    try {
        $cnx = new PDO('mysql:host='.$serveur.';dbname='.$bdd, $user, $passwd, array (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
        $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
    }
    
    catch (PDOException $error) {
        echo 'N° : '.$error->getCode().'<br />';
        die ('Erreur : '.$error->getMessage().'<br />');
    }
