<?php
    if(isset($_POST['submitrole'])){ 
            $q2 = $cnx->prepare('UPDATE joueur SET NOM_ROLE = "'.$_POST['selectrole'].'" WHERE PSEUDO_JOUEUR ="'.$_SESSION['pseudo'].'"');
            $res2 = $q2 -> execute();

            if($res2){
                //$_SESSION['pseudo']=$pseudo;
                header('Location: profil.php?test=refresh');
            }
    }

    if(isset($_POST['submit'])){ 
        
        if(!empty($_POST['pseudo'])){
            $pseudo = htmlspecialchars(strip_tags($_POST['pseudo']));

            $q = $cnx->prepare('UPDATE joueur SET PSEUDO_JOUEUR = "'.$pseudo.'" WHERE PSEUDO_JOUEUR ="'.$_SESSION['pseudo'].'"');
            $res = $q -> execute();

            if($res){
                $_SESSION['pseudo']=$pseudo;
                header('Location: profil.php?test=refresh');
            }
        }

    }
           