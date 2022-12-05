<div class="container mt-5 text-center">
        <button type="button" class="btn btn-primary" onclick="location.href='AddArticle.php';">Ajouter un article</button>
</div>
<article class="container mt-3 p-3 rounded">
        <div class="row">
                <?php for($i=0; $i < count($resultarticle); $i++){ ?>
                <div class="border border-secondary mt-3 boxcomp text-center colorarticle rounded">
                        <div class="p-3 d-flex justify-content-center align-items-center">
                                <img class="imgarticle" src="../../assets/Articles/<?= $resultarticle[$i]->REF_IMAGE_ART ?>" alt="imgarticle">
                        </div>
                        <div>                             
                            <h6 id="titre-article" class="mb-3"><?= $resultarticle[$i]->TITRE_ARTICLE ?></h6>
                        </div>
                        <div class="text-end">
                               <br><?= $resultarticle[$i]->DATE_ARTICLE ?> 
                        </div>
                        <div class="modifsupp"><a class="lien" href="../controller/UpdateArticle.php?id=<?= $resultarticle[$i]->ID_ARTICLE ?>">Modifier</a></div>
                        <div class="modifsupp ms-3"><a class="lien rouge" href="../src/SuppArticle.php?id=<?= $resultarticle[$i]->ID_ARTICLE ?>">Supprimer</a></div>
                </div>
                <?php } ?>
        </div>
</article>