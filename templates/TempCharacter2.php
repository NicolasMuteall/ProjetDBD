<div class="border border-secondary rounded shadow-lg container" id="InfoChar">
    <div class="row">
        <div id="boximgchar" class="col-12 col-md-5 boxchar text-center">
            <img id="imgchar" src="../assets/<?= $_GET['role'] ?>/<?= $resultperso->REF_IMAGE_PERSO ?>" alt="imgpersonnage">
        </div>
        <div class="col-12 col-md-7 boxchar">
            <div id="presentchar" class="row p-4 text-center rounded">
                <div class="col-12 col-md-6">
                    <h4 class="titrerole"><?= $resultperso->NOM_PERSO ?></h4>
                    <div class="mt-5 fw-bold">
                        <p><span class="opacite">Rôle : </span><?= $_GET['role'] ?></p>
                        <?= $difficult ?>
                        <p><span class="opacite">Chapitre : </span>ghostface</p> 
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <p class="fst-italic"><?= $resultperso->PRESENTATION_PERSO ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <h4 class="mt-3 mb-3 ms-3 police2">Competences</h4>
    <div class="row">
        <div class="border border-secondary rounded boxcomp text-center">
            <img class="imgcompt mb-3" src="../assets/Competence/<?=$_GET['role']?>/<?=$resultcompt1->REF_IMAGE_COMPT?>" alt="competence1">
            <h4 class="police2"><?=$resultcompt1->NOM_COMPETENCE?></h4>
            <p class="fst-italic"><?=$resultcompt1->PRESENTATION_COMPT?></p>
        </div>
        <div class="border border-secondary rounded boxcomp text-center">
            <img class="imgcompt mb-3" src="../assets/Competence/<?=$_GET['role']?>/<?=$resultcompt2->REF_IMAGE_COMPT?>" alt="competence1">
            <h4 class="police2"><?=$resultcompt2->NOM_COMPETENCE?></h4>
            <p class="fst-italic"><?=$resultcompt2->PRESENTATION_COMPT?></p>
        </div>
        <div class="border border-secondary rounded boxcomp text-center">
            <img class="imgcompt mb-3" src="../assets/Competence/<?=$_GET['role']?>/<?=$resultcompt3->REF_IMAGE_COMPT?>" alt="competence1">
            <h4 class="police2"><?=$resultcompt3->NOM_COMPETENCE?></h4>
            <p class="fst-italic"><?=$resultcompt3->PRESENTATION_COMPT?></p>
        </div>
        <?= $comptkiller ?>
    </div>
</div>

