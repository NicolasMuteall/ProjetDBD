<div class="border border-secondary rounded container" id="InfoChar">
    <div class="row">
        <div class="col-12 col-sm-5 boxchar text-center">
            <img id="imgchar" src="./assets/<?= $_GET['role'] ?>/<?= $resultperso->REF_IMAGE_PERSO ?>" alt="imgpersonnage">
        </div>
        <div class="col-12 col-sm-7 boxchar">
            <div id="presentchar" class="row p-4 text-center rounded">
                <div class="col-12 col-sm-6">
                    <h4 class="titrerole"><?= $resultperso->NOM_PERSO ?></h4>
                    <div class="mt-5 fw-bold">
                        <p><span class="statchar">Rôle : </span><?= $_GET['role'] ?></p>
                        <?= $difficult ?>
                        <p><span class="statchar">Chapitre : </span>ghostface</p> 
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <p class="fst-italic"><?= $resultperso->PRESENTATION_PERSO ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

