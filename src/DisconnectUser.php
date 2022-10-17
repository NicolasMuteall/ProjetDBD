<?php
    session_start();
    session_destroy();
    header('Location: /ProjetDBD/index.php')
?>