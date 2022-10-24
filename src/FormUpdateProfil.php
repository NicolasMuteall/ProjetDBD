<?php
    $msgerrorimg = '';

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

            if(count($extension) === 2){

                if(in_array($typeFile, $typeimg)) {
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
        
        if(!empty($_POST['pseudo'])){
            $pseudo = htmlspecialchars(strip_tags($_POST['pseudo']));

            $q = $cnx->prepare('UPDATE joueur SET PSEUDO_JOUEUR = "'.$pseudo.'" WHERE PSEUDO_JOUEUR ="'.$_SESSION['pseudo'].'"');
            $res = $q -> execute();

            if($res){
                $_SESSION['pseudo']=$pseudo;
                header('Refresh:0; '.$_SERVER["REQUEST_URI"]);
            }
        }

    }
           