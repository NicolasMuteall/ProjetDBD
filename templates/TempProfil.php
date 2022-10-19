<div class="container-fluid text-end mb-5">
    <button type="button" class="btn btn-light me-3">Modifier le profil</button>
</div>
<div class="container border border-secondary rounded">
    <div id="boxprofil" class="row">
        <article class="boxprofilsmall col-12 col-md-4 p-3 text-center">
            <img id="imgprofil" class="mt-4 mb-3" src="../assets/Joueurs/rivaille.jpg" alt="mastermind">
            <p>PSEUDO_JOUEUR</p>
        </article>
        <article class="boxprofilsmall col-12 col-md-8 p-3 ">
            <table id="tableauprofil" class="table table-dark mx-auto fw-bold mt-5 text-center">
                <tr>
                    <td><span class="opacite">ROLE PRINCIPAL : </span></td>
                    <td><?= $resultprofil->NOM_ROLE ?></td> 
                </tr>
                <?= $mainkiller ?>
                <tr>
                    <td><span class="opacite">PLATEFORME : </span></td>
                    <td><?= $resultprofil->NOM_PLATEFORME ?></td>
                </tr>
                <tr>
                    <td><span class="opacite">PSEUDO PLATEFORME : </span></td>
                    <td><?= $resultprofil->PSEUDO_PLATEFORME ?></td>
                </tr>
                <tr>
                    <td><span class="opacite">RANK : </span></td>
                    <td><?= $resultprofil->RANK_JOUEUR ?></td>
                </tr>
                <tr>
                    <td><span class="opacite">NOMBRES D'HEURES DE JEU : </span></td>
                    <td><?= $resultprofil->NOMBRES_HEURES ?></td>
                </tr>
            </table> 
        </article>
    </div>
    
</div>