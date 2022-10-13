<?php
    session_start();
    if(empty($_SESSION)){
        $_SESSION['role']="";
    }
?>

<?php 
     
    if($_SESSION['role'] === ""){

        header('Location: role.php');

    }else{
        include('head.php');
        var_dump($_SESSION['role'],$_GET['perso']);
        include('Connect.php');
    }
?>
<?php include('footer.php'); ?>