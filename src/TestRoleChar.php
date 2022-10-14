<?php 
    if($_GET['role'] === "Survivant"){
        $difficult = "";
        $comptkiller = "";
    }else{ 
        $difficult = '<p><span id="difficult" class="opacite">Difficulté : </span>Difficile</p>';
        $comptkiller = 
            '<div class="border border-secondary rounded boxcomp shadow-lg text-center">
                <img class="imgcompt mb-3" src="../assets/Competence/'.$_GET['role'].'/'.$resultperso->REF_IMAGE_SPE.'" alt="'.$resultperso->NOM_COMPT_SPE.'">
                <h4 class="police2">'.$resultperso->NOM_COMPT_SPE.'</h4>
                <p class="fst-italic">'.$resultperso->COMPT_SPE.'</p>
            </div>';
    }
?>