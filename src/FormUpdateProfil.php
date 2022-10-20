<?php
    if(isset($_POST['submit'])){ 
        
        if(!empty($_POST['pseudo'])){
            $pseudo = htmlspecialchars(strip_tags($_POST['pseudo']));

            $q = $cnx->prepare('UPDATE joueur SET PSEUDO_JOUEUR = "'.$pseudo.'" WHERE PSEUDO_JOUEUR ="'.$_SESSION['pseudo'].'"');
            $res = $q -> execute();

            if($res){
                $_SESSION['pseudo']=$pseudo;
                header('Location: profil.php');
            }
        }

    }
           