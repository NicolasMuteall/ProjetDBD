<?php
    $msgerror = "";

    if(isset($_POST['connexion'])){ 
        
        if(!empty($_POST['pseudo']) && !empty($_POST['mdp'])){
            $pseudo = htmlspecialchars(strip_tags($_POST['pseudo']));
            $password = htmlspecialchars(strip_tags($_POST['mdp']));
            
            
            $reponse = $cnx->prepare('select PSEUDO_ADMIN, PWD_ADMIN from admin where PSEUDO_ADMIN = "'.$pseudo.'" and PWD_ADMIN = "'.$password.'"');
            $reponse -> bindvalue('PSEUDO_JOUEUR', $pseudo);
            $reponse -> bindvalue('PWD_JOUEUR', $password);
            $reponse -> execute();
            $results = $reponse->fetch(PDO::FETCH_ASSOC);
            //var_dump($results);

            if($results){
                $msgerror = '<p style="color:green;">Connexion réussie.</p>';
                $_SESSION['admin'] = 'ADMIN';
                header('Location: controller/accueil.php');
            }else{
                $msgerror = '<p style="color:red;">Les identifiants sont incorrects.</p>';
            }            
        }else{
            $msgerror = '<p style="color:red;">Les identifiants sont incorrects.</p>';
        }
    }