<?php
    $msgerror = "";

    if(isset($_POST['inscription'])){ 
        
        if(!empty($_POST['pseudo']) && !empty($_POST['mail']) && !empty($_POST['mdp']) && !empty($_POST['mdpconfirm'])){
            $pseudo = htmlspecialchars(strip_tags($_POST['pseudo']));
            $mail = htmlspecialchars(strip_tags($_POST['mail']));
            $mdp = htmlspecialchars(strip_tags($_POST['mdp']));
            $mdpconfirm = htmlspecialchars(strip_tags($_POST['mdpconfirm']));
            
            $password = password_hash($mdp, PASSWORD_DEFAULT);

            var_dump($pseudo, $mail, $mdp, $password);

            if($mdp === $mdpconfirm){

                if(!preg_match('/^(?=.{10,}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$/', $mdp)){
                    $msgerror = '<p style="color:red;">Le mot de passe doit contenir au moins 1 majuscule, 1 minuscule, 1 chiffre, 1 caractère spécial et doit contenir au moins 10 caractères.</p>';
                }
                
                if(!preg_match('/^[a-z][a-z_0-9\.\-]+@[a-z_0-9\.\-]+\.[a-z]{2,3}$/', $mail)){
                    $msgerror = '<p style="color:red;">Le format d\'adresse email est invalide.</p>';
                }

                if(preg_match('/^(?=.{10,}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$/', $mdp) && preg_match('/^[a-z][a-z_0-9\.\-]+@[a-z_0-9\.\-]+\.[a-z]{2,3}$/', $mail)){

                    $datapseudo = $cnx->prepare('select PSEUDO_JOUEUR from joueur where PSEUDO_JOUEUR = "'.$pseudo.'"');
                    $datapseudo -> bindvalue('PSEUDO_JOUEUR', $pseudo);
                    $datapseudo -> execute();
                    $resultpseudo = $datapseudo->fetch(PDO::FETCH_OBJ);                            //CONTINUER VERIF EXISTENCE PSEUDO DANS BDD
                    var_dump($resultpseudo);
                    $_SESSION['pseudo'] = $pseudo;
                    //header('Location: ../index.php');
                }

            }else{
                $msgerror = '<p style="color:red;">La confirmation du mot de passe est incorrecte.</p>';
            }
            
            /*$q = $cnx->prepare('INSERT INTO joueur (pseudo, password) VALUES ("'.$pseudo.'", "'.$password.'")');
            $q -> bindvalue('pseudo', $pseudo);
            $q -> bindvalue('password', $password);
            $res = $q -> execute();*/

            /*if($res){
                echo "Inscription réussie.";
                header('Location: page2.php');
            }else{
                echo "Une erreur est survenue.";
            }*/
            
        }else{
            $msgerror = '<p style="color:red;">Tous les champs doivent être complétés.</p>';?>
        <?php } 
    };
?>

