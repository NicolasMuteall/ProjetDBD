<header class="container-fluid">
        <img class="shadow-lg" id="banniere" src="./assets/BanniereDBD.jpg" alt="BanniereDBD">
</header>

<div class="container mt-5">
        <h2 class="police2">Les Dernieres nouvelles :</h2>
</div>

<article class="container mt-5 p-3 rounded">
        <div class="row">
                <?php for($i=0; $i < count($resultarticle); $i++){ ?>
                <div class="border border-secondary mt-3 boxcomp text-center colorarticle">
                        <div class="p-3 d-flex justify-content-center align-items-center">
                                <img class="imgarticle" src="assets/Articles/<?= $resultarticle[$i]->REF_IMAGE_ART ?>" alt="imgarticle">
                        </div>
                        <div id="p-article">                             
                                <h4 id="titre-article" class="police2 mb-3"><?= $resultarticle[$i]->TITRE_ARTICLE ?></h4>
                                <div id="p-article" class="mt-5">
                                        <p><?= $resultarticle[$i]->CONTENU_ARTICLE ?></p>
                                </div>
                        </div>
                        <div class="text-end">
                               <br><?= $resultarticle[$i]->DATE_ARTICLE ?> 
                        </div>
                </div>
                <?php } ?>
        </div>
</article>