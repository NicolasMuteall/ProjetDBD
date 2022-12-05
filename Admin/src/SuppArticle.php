<?php

require('../../src/Connect.php');

var_dump($_GET['id']);

$suppart = $cnx->prepare('DELETE FROM `article` WHERE ID_ARTICLE = "'.$_GET['id'].'"');
$supp = $suppart->execute();

if ($supp) {
    $incr = $cnx->prepare('ALTER TABLE article AUTO_INCREMENT = 0');
    $increment = $incr->execute();
    header('Location: ../controller/accueil.php');
    /*header('Refresh:0; '.$_SERVER["REQUEST_URI"]);*/
}

require('../../src/Disconnect.php');
