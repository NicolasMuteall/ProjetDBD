<?php   
    /*if(!isset($_SESSION['role'])){
      header('Location: /ProjetDBD/controller/role.php');
    }*/

    if(!isset($_SESSION['pseudo'])){
      $_SESSION['pseudo'] = "inconnu";
    }
    
    if($_SESSION['pseudo'] === "inconnu"){
        $linkhead = '<a class="nav-link" href="/ProjetDBD/controller/connexion.php">Se connecter</a>';
        $deconnect = "";
    }else{
        $linkhead = '<a class="nav-link" href="/ProjetDBD/controller/connexion.php">Profil</a>';
        $deconnect = '<a class="nav-link" href="/ProjetDBD/src/DisconnectUser.php">Déconnexion</a>';
    }   
?>