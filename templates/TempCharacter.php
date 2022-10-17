<div id="personnages" class="container-fluid">
    <div class="row ligneperso">
        <?php foreach($resultperso as $resultat){ ?>
            <div class="border border-secondary boitetueur text-center mb-5 rounded">
                <a href="character2.php?perso=<?= $resultat->ID_PERSONNAGE ?>&amp;role=<?= $_GET['role'] ?>"><h4 class="mt-2" id="nomperso"><?= $resultat->NOM_PERSO ?></h4></a>
                <a href="character2.php?perso=<?= $resultat->ID_PERSONNAGE ?>&amp;role=<?= $_GET['role'] ?>"><img class="imgperso" src="../assets/<?= $_GET['role'] ?>/<?= $resultat->REF_IMAGE_PERSO ?>" alt="<?= $resultat->NOM_PERSO ?>"></a> 
            </div> <?php } ?>
    </div>
</div>

<!--<script>
    var classname = document.getElementsByClassName("boitetueur");
    for (var i = 0; i < classname.length; i++) {
        classname[i].addEventListener('mouseover', function(){
            window.location = 'role.php?perso=';
        }, false);
    }
</script>-->
    