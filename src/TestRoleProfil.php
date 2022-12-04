<?php
    $bouton = '';

    if($resultprofil->NOM_ROLE === "Tueur"){
        $mainkiller = '<tr>
                            <td><span class="opacite">TUEUR PRINCIPAL : </span></td>
                            <td>'.$resulttueur->NOM_PERSO.'</td> 
                        </tr>';
    }else{
        $mainkiller = '';
    }