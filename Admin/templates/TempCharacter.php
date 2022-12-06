<div id="personnages" class="container-fluid">
    <div class="container mt-5 text-center mb-5">
        <button type="button" class="btn btn-primary" onclick="location.href='<?= $link ?>';">Ajouter un personnage</button>
    </div>
    <div class="row ligneperso">
        <?php foreach ($resultperso as $resultat) { ?>
            <div class="border border-secondary boitetueur text-center mb-5 rounded">
                <h4 class="mt-2" id="nomperso"><?= $resultat->NOM_PERSO ?></h4>
                <img class="imgperso" src="../../assets/<?= $_GET['role'] ?>/<?= $resultat->REF_IMAGE_PERSO ?>" alt="<?= $resultat->NOM_PERSO ?>"></a>
                <div class="modifsupp ms-3"><a class="lien rouge" href="#">Supprimer</a></div>
            </div> <?php } ?>
    </div>
</div>