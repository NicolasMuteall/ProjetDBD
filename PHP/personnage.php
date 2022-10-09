<?php
    session_start();
    if(empty($_SESSION)){
        $_SESSION['role']="";
    }
    include('head.php');
    include('Connect.php');
?>
<?php 
    var_dump($_SESSION['role']); 
    if($_SESSION['role'] === ""){
        header('Location: role.php');
    }else{
        echo 'OK';
    }
?>
<?php include('footer.php'); ?>