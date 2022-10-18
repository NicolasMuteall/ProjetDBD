<?php
    $msgerror = "";

    if(isset($_POST['connexion'])){ 
        
        if(!empty($_POST['pseudo']) && !empty($_POST['mdp'])){
            $pseudo = htmlspecialchars(strip_tags($_POST['pseudo']));
            $password = htmlspecialchars(strip_tags($_POST['mdp']));
            
            
            $reponse = $cnx->prepare('select PSEUDO_JOUEUR, PWD_JOUEUR from joueur where PSEUDO_JOUEUR = "'.$pseudo.'"');
            $reponse -> bindvalue('PSEUDO_JOUEUR', $pseudo);
            $reponse -> bindvalue('PWD_JOUEUR', $password);
            $reponse -> execute();
            $results = $reponse->fetch(PDO::FETCH_ASSOC);
            var_dump($results);

            if($results){
                $passwordHash = $results['PWD_JOUEUR'];
                if(password_verify($password, $passwordHash)){
                    $msgerror = '<p style="color:red;">Connexion réussie.</p>';
                }else{
                    $msgerror = '<p style="color:red;">Les identifiants sont incorrects.</p>';
                }
            }else{
                $msgerror = '<p style="color:red;">Les identifiants sont incorrects.</p>';
            }
            
        }else{
            $msgerror = '<p style="color:red;">Les identifiants sont incorrects.</p>';
        }
    }