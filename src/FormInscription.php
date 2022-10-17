<?php
    $msgerror = "";

    if(isset($_POST['inscription'])){ 
        
        if(!empty($_POST['pseudo']) && !empty($_POST['mail']) && !empty($_POST['mdp']) && !empty($_POST['mdpconfirm'])){
            $pseudo = $_POST['pseudo'];
            $_SESSION['pseudo'] = $pseudo;
            $password = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

            var_dump($_POST['mdp'], $password);
            
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
            $msgerror = "Tous les champs doivent être complétés.";
        }
    };
?>
