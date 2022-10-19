<?php
    $msgerror = "";
    $msgpseudo = "";
    $msgmdp = "";
    $msgmail = "";
    $headerlocation = "";

    if(isset($_POST['inscription'])){ 
        
        if(!empty($_POST['pseudo']) && !empty($_POST['mail']) && !empty($_POST['mdp']) && !empty($_POST['mdpconfirm'])){
            $pseudo = htmlspecialchars(strip_tags($_POST['pseudo']));
            $mail = htmlspecialchars(strip_tags($_POST['mail']));
            $mdp = htmlspecialchars(strip_tags($_POST['mdp']));
            $mdpconfirm = htmlspecialchars(strip_tags($_POST['mdpconfirm']));
            
            $password = password_hash($mdp, PASSWORD_DEFAULT);

            var_dump($pseudo, $mail, $mdp, $mdpconfirm, $password);
            
            $datapseudo = $cnx->prepare('select PSEUDO_JOUEUR from joueur where PSEUDO_JOUEUR = "'.$pseudo.'"');
            $datapseudo -> bindvalue('PSEUDO_JOUEUR', $pseudo);
            $datapseudo -> execute();
            $resultpseudo = $datapseudo->fetch(PDO::FETCH_OBJ);                          
            var_dump($resultpseudo);

            
            $datamail = $cnx->prepare('select MAIL_JOUEUR from joueur where MAIL_JOUEUR = "'.$mail.'"');
            $datamail -> bindvalue('MAIL_JOUEUR', $mail);
            $datamail -> execute();
            $resultmail = $datamail->fetch(PDO::FETCH_OBJ);                            
            var_dump($resultmail);
            
            if(strlen($pseudo) < 4 || strlen($pseudo) > 20 || !preg_match('/^([a-zA-Z0-9-_]{4,20})$/', $pseudo)){
                $msgpseudo = '<p style="color:red;">Le pseudo saisi est invalide : <br> Le pseudo doit contenir entre 4 et 20 caractères et ne peut contenir que des lettres minuscules, majuscules, des chiffres, "-", "_".</p>';
            }

            /*if(!preg_match('/^([a-zA-Z0-9-_]{4,20})$/', $pseudo)){
                $msgpseudo = '<p style="color:red;">Le format du pseudo saisi n\'est pas autorisé.</p>';
            }*/

            if($resultpseudo != false){
                $msgpseudo = '<p style="color:red;">Le pseudo saisi est déjà utilisé.</p>';
            }

            if($resultmail != false){
                $msgmail = '<p style="color:red;">L\'adresse email saisie est déjà utilisée.</p>';
            }
            
            if(!preg_match('/^[a-z][a-z_0-9\.\-]+@[a-z_0-9\.\-]+\.[a-z]{2,3}$/', $mail)){
                $msgmail = '<p style="color:red;">Le format d\'adresse email est invalide.</p>';
            }
            
            if(!preg_match('/^(?=.{10,}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$/', $mdp)){
                $msgmdp = '<p style="color:red;">Le mot de passe doit contenir au moins 1 majuscule, 1 minuscule, 1 chiffre, 1 caractère spécial et doit contenir au moins 10 caractères.</p>';
            }

            if(preg_match('/^([a-zA-Z0-9-_]{4,20})$/', $pseudo) && strlen($pseudo) >= 4 && strlen($pseudo) <= 20 && $resultpseudo === false && $resultmail === false && preg_match('/^[a-z][a-z_0-9\.\-]+@[a-z_0-9\.\-]+\.[a-z]{2,3}$/', $mail) && preg_match('/^(?=.{10,}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$/', $mdp)){
                
                if($mdp === $mdpconfirm){
                    
                    $q = $cnx->prepare('INSERT INTO joueur (PSEUDO_JOUEUR, PWD_JOUEUR, MAIL_JOUEUR) VALUES ("'.$pseudo.'", "'.$password.'", "'.$mail.'")');
                    $q -> bindvalue('PSEUDO_JOUEUR', $pseudo);
                    $q -> bindvalue('PWD_JOUEUR', $password);
                    $q -> bindvalue('MAIL_JOUEUR', $mail);
                    $res = $q -> execute();
                    $msgerror = "Inscription bien effectuée, bienvenue!";
                    
                    header('Location: connexion.php');

                }else{
                    $msgerror = '<p style="color:red;">La confirmation du mot de passe est incorrecte.</p>';
                }
            }
        }else{
            $msgerror = '<p style="color:red;">Tous les champs doivent être complétés.</p>';
        }   
    };   


