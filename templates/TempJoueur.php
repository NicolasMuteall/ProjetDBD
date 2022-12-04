<div class="container">
    <table class="table table-dark table-striped align-middle text-center ">
        <tr>
            <td>Joueur</td>
            <td>Rank</td>
            <td>Plateforme</td>
        </tr>
        <?php for($i=0; $i<count($resultplayers); $i++){ ?>
            <tr>
                <td><img id="img-joueur" src="../assets/Joueurs/<?= $resultplayers[$i]->REF_IMAGE_JOUEUR ?>" alt="rank-joueur"><a class="lien" href="publicprofil.php?pseudo=<?= $resultplayers[$i]->PSEUDO_JOUEUR ?>"><span class="ms-3"><?= $resultplayers[$i]->PSEUDO_JOUEUR ?></span></a></td>
                <td><img id="img-rank" src="../assets/Rank/<?= $resultplayers[$i]->REF_IMAGE_RANK ?>" alt="rank-joueur"></td>
                <td><?= $resultplayers[$i]->NOM_PLATEFORME ?></td>
            </tr>
        <?php } ?>
    </table>
</div>