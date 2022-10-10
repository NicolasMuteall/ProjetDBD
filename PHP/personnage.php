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

    }else{ ?>
        
        <div id="personnages" class="container-fluid">
            <div class="row ligneperso">
                <div class="border boitetueur mb-5 rounded shadow-lg"></div>
                <div class="border boitetueur mb-5 rounded shadow-lg"></div>
                <div class="border boitetueur mb-5 rounded shadow-lg"></div>
                <div class="border boitetueur mb-5 rounded shadow-lg"></div>
                <div class="border boitetueur mb-5 rounded shadow-lg"></div>
            </div>
        </div>
    <?php } ?>

<?php include('footer.php'); ?>