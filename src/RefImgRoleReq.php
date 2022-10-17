<?php
    $img = $cnx->prepare('select REF_IMAGE_ROLE from role');
    $img -> execute();
    $results = $img->fetchall(PDO::FETCH_OBJ);
    /*var_dump($results);*/
?>