<article class="container mt-5 p-3 rounded">
        <div class="row">
                <?php for($i=0; $i < count($resultarticle); $i++){ ?>
                <div class="border border-secondary mt-3 boxcomp text-center colorarticle rounded">
                        <div class="p-3 d-flex justify-content-center align-items-center">
                                <img class="imgarticle" src="../../assets/Joueurs/<?= $resultarticle[$i]->REF_IMAGE_ART ?>" alt="imgarticle">
                        </div>
                        <div>                             
                            <h4 id="titre-article" class="mb-3"><?= $resultarticle[$i]->TITRE_ARTICLE ?></h4>
                        </div>
                        <div class="text-end">
                               <br><?= $resultarticle[$i]->DATE_ARTICLE ?> 
                        </div>
                        <div class="modifsupp"><a class="lien" href="">Modifier</a></div>
                        <div class="modifsupp ms-3"><a class="lien rouge" href="">Supprimer</a></div>
                </div>
                <?php } ?>
        </div>
</article>