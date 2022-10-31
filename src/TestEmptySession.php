<?php   
/*     if(!isset($_SESSION['pseudo'])){
      $_SESSION['pseudo'] = "inconnu";
    }
    
    if($_SESSION['pseudo'] === "inconnu"){
        $linkhead = '<a class="nav-link" href="/ProjetDBD/controller/connexion.php">Se connecter</a>';
        $deconnect = "";
    }else{
        $linkhead = '<a class="nav-link" href="/ProjetDBD/controller/profil.php">Profil</a>';
        $deconnect = '<a class="nav-link" href="/ProjetDBD/src/DisconnectUser.php">Déconnexion</a>';
    }   


 */

    if(!isset($_SESSION['pseudo']) || $_SESSION['pseudo'] === "inconnu"){
        $_SESSION['pseudo'] = "inconnu";  
        $linkhead = '<a class="nav-link" href="/ProjetDBD/controller/connexion.php">Se connecter</a>';
        $deconnect = "";
      }
      else{
        $linkhead = '<a class="nav-link" href="/ProjetDBD/controller/profil.php">Profil</a>';
        $deconnect = '<a class="nav-link" href="/ProjetDBD/src/DisconnectUser.php">Déconnexion</a>';
      }   
  