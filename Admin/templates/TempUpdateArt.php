<div class="container mt-5">
    <div class="row">
        <div class="border border-secondary boxcomp text-center rounded mb-5">
            <div class="p-3 d-flex justify-content-center align-items-center">
                <img class="imgarticle" src="../../assets/Articles/<?= $resultarticleupd->REF_IMAGE_ART ?>" alt="imgarticle">
            </div>
            <div>
                <h6 id="titre-article" class="mb-3"><?= $resultarticleupd->TITRE_ARTICLE ?></h6>
            </div>
            <p><?= $resultarticleupd->CONTENU_ARTICLE ?></p>
            <div class="text-end">
                <br><?= $resultarticleupd->DATE_ARTICLE ?>
            </div>
        </div>

        <div id="formupdate" class="mx-auto border border-secondary rounded formulaire mb-5 p-3">

            <form id="" action="" method="post" enctype="multipart/form-data" class="mx-auto mt-3">

                <div class="mb-3">
                    <label for="inputtitle" class="form-label">Modifier le titre:</label>
                    <input type="text" class="form-control" name="title" id="inputtitle" placeholder="Entrez votre pseudo..." value="<?= $resultarticleupd->TITRE_ARTICLE ?>">
                </div>

                <div class="mb-3">
                    <label for="floatingTextarea" class="form-label">Modifier le contenu:</label>
                    <textarea class="form-control" name="content" placeholder="Écrivez votre article..." id="floatingTextarea"><?= $resultarticleupd->CONTENU_ARTICLE ?></textarea>
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Sélectionner une autre image :</label>
                    <input class="form-control" type="file" name="img_upload" id="formFile">
                    <div class="text-center"><?= $msgerrorimg ?></div>
                </div>

                <div class="text-center mt-4">
                    <?= $msgerror ?>
                    <button type="submit" name="update" class="btn btn-primary mb-3">Modifier</button>
                </div>

            </form>
        </div>

    </div>
</div>