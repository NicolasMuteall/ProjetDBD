<?php
    /*--------------------------------------------INITIALISER LES MESSAGES D'ERREUR A VIDE--------------------------*/
    $msgerrorimg = '';
    $msgerror = "";
    $msgpseudo = "";
    $msgmail = "";
    $msgpseudoplat = "";

    if($resultprofil->NOM_ROLE === "Tueur"){ // Permet par la suite de trier les compétences de survivants et tueurs
        $rolecompt = 1;
    }else{
        $rolecompt = 0;
    }

    if(isset($_POST['img_submit'])){

        $img_name = $_FILES['img_upload']['name'];
        $tmp_img_name = $_FILES['img_upload']['tmp_name'];
        $size_img = $_FILES['img_upload']['size'];
        $typeFile = $_FILES['img_upload']['type'];
        $typeimg = ['image/png', 'image/jpg', 'image/jpeg'];
        $extension = explode('.', $img_name);
        $folder = '../assets/Joueurs/';
        //var_dump($_FILES, $extension, count($extension));
        //var_dump($_SERVER);
        
        if($_FILES['img_upload']['size'] > 0){
            
            if(count($extension) === 2){                //EMPECHER D'AJOUTER UN FICHIER AVEC UNE DOUBLE EXTENSION
               
                if(in_array($typeFile, $typeimg)) {             // VERIFIER LE TYPE DE FICHIER 
                    move_uploaded_file($tmp_img_name, $folder.$img_name);
    
                    $updateimg = $cnx->prepare('UPDATE joueur SET REF_IMAGE_JOUEUR = "'.$img_name.'" WHERE PSEUDO_JOUEUR ="'.$_SESSION['pseudo'].'"');
                    $resimg = $updateimg -> execute();
    
                    if($resimg){
                    // header('Location: profil.php?test=refresh');
                    header('Refresh:0; '.$_SERVER["REQUEST_URI"]);
                    }
                    
                }else{
                    $msgerrorimg = '<p style="color:red;">Ce format d\'image n\'est pas autorisé.</p>';
                }

            }else{
                $msgerrorimg = '<p style="color:red;">Ce format d\'image n\'est pas autorisé.</p>';
            }           
        }else{
            $msgerrorimg = '<p style="color:red;">Aucune image n\'a été sélectionnée.</p>';
        }
    }

    if(isset($_POST['submitrole'])){ 

            $q2 = $cnx->prepare('UPDATE joueur SET NOM_ROLE = "'.$_POST['selectrole'].'" WHERE PSEUDO_JOUEUR ="'.$_SESSION['pseudo'].'"');
            $res2 = $q2 -> execute();

            if($res2){
                header('Refresh:0; '.$_SERVER["REQUEST_URI"]);
            }
    }

    if(isset($_POST['submit'])){ 
        
        if(!empty($_POST['pseudo']) && !empty($_POST['mail'])){
            $pseudo = htmlspecialchars(strip_tags($_POST['pseudo']));
            $mail = htmlspecialchars(strip_tags($_POST['mail']));

            $datapseudo = $cnx->prepare('select PSEUDO_JOUEUR from joueur where PSEUDO_JOUEUR = "'.$pseudo.'" and PSEUDO_JOUEUR != "'.$resultprofil->PSEUDO_JOUEUR.'"');
            $datapseudo -> bindvalue('PSEUDO_JOUEUR', $pseudo);
            $datapseudo -> execute();
            $resultpseudo = $datapseudo->fetch(PDO::FETCH_OBJ);                          
            var_dump($resultpseudo);

            
            $datamail = $cnx->prepare('select MAIL_JOUEUR from joueur where MAIL_JOUEUR = "'.$mail.'" and MAIL_JOUEUR != "'.$resultprofil->MAIL_JOUEUR.'"');
            $datamail -> bindvalue('MAIL_JOUEUR', $mail);
            $datamail -> execute();
            $resultmail = $datamail->fetch(PDO::FETCH_OBJ);                            
            var_dump($resultmail);

            if(!preg_match('/^([a-zA-Z0-9-_]{4,20})$/', $pseudo)){
                $msgpseudo = '<p style="color:red;">Le pseudo saisi est invalide : <br> Le pseudo doit contenir entre 4 et 20 caractères et ne peut contenir que des lettres minuscules, majuscules, des chiffres, "-", "_".</p>';
            }

            if($resultpseudo != false){
                $msgpseudo = '<p style="color:red;">Le pseudo "'.$pseudo.'" est déjà utilisé.</p>';
            }

            if($resultmail != false){
                $msgmail = '<p style="color:red;">L\'adresse email "'.$mail.'" est déjà utilisée.</p>';
            }
            
            if(!preg_match('/^[a-z][a-z_0-9\.\-]+@[a-z_0-9\.\-]+\.[a-z]{2,3}$/', $mail)){
                $msgmail = '<p style="color:red;">Le format d\'adresse email est invalide.</p>';
            }

            if(preg_match('/^([a-zA-Z0-9-_]{4,20})$/', $pseudo) && $resultpseudo === false && $resultmail === false && preg_match('/^[a-z][a-z_0-9\.\-]+@[a-z_0-9\.\-]+\.[a-z]{2,3}$/', $mail)){      
                
                $q = $cnx->prepare('UPDATE joueur SET PSEUDO_JOUEUR = "'.$pseudo.'", MAIL_JOUEUR = "'.$mail.'" WHERE PSEUDO_JOUEUR ="'.$_SESSION['pseudo'].'"');
                $res = $q -> execute();

                if($res){
                    $_SESSION['pseudo']=$pseudo;
                    header('Refresh:0; '.$_SERVER["REQUEST_URI"]);
            }  
            }
        }else{
            $msgerror = '<p style="color:red;">Le pseudo et l\'adresse mail doivent être complétés.</p>';
        }
    }
           