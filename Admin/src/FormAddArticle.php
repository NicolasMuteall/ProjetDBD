<?php
    $msgerror = "";
    $msgerrorimg = "";
    $date = date('Y-m-d');

    if(isset($_POST['create'])){

        $img_name = $_FILES['img_upload']['name'];
        $tmp_img_name = $_FILES['img_upload']['tmp_name'];
        $size_img = $_FILES['img_upload']['size'];
        $typeFile = $_FILES['img_upload']['type'];
        $typeimg = ['image/png', 'image/jpg', 'image/jpeg'];
        $extension = explode('.', $img_name);
        $folder = '../../assets/Articles/';
        
        if(!empty($_POST['title']) && !empty($_POST['content'])){
            $title = addslashes(htmlspecialchars(strip_tags($_POST['title'])));
            $content = addslashes(htmlspecialchars(strip_tags($_POST['content'])));
            
            if($_FILES['img_upload']['size'] > 0){
            
                if(count($extension) === 2){                //EMPECHER D'AJOUTER UN FICHIER AVEC UNE DOUBLE EXTENSION
                   
                    if(in_array($typeFile, $typeimg)) {             // VERIFIER LE TYPE DE FICHIER 
                        move_uploaded_file($tmp_img_name, $folder.$img_name);
        
                        $insertimg = $cnx->prepare('INSERT INTO article (TITRE_ARTICLE, CONTENU_ARTICLE, REF_IMAGE_ART, DATE_ARTICLE) VALUES ("'.$title.'", "'.$content.'", "'.$img_name.'", "'.$date.'")');
                        $resimg = $insertimg -> execute();
        
                        if($resimg){
                        header('Location: accueil.php');
                        /*header('Refresh:0; '.$_SERVER["REQUEST_URI"]);*/
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
        }else{
            $msgerror = '<p style="color:red;">Tous les champs doivent être remplis.</p>';
        }
        var_dump($_POST, $_FILES);
    }
    