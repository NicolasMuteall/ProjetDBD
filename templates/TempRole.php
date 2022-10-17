<div id="boiterole" class="container d-flex justify-content-evenly">
    <div id="boxtueur" class="role border border-secondary rounded text-center">
        <a href="character.php?role=Tueur"><h3 class="mb-3 mt-3 titrerole">Tueur</h3></a>
        <a href="character.php?role=Tueur"><img class="imgrole" src="../assets/<?= $results[2]->REF_IMAGE_ROLE; ?>" alt="logotueur"></a>
    </div>
    <div id="boxsurvivant" class="role border border-secondary rounded text-center">
        <a href="character.php?role=Survivant"><h3 class="mb-3 mt-3 titrerole">Survivant</h3></a>
        <a href="character.php?role=Survivant"><img class="imgrole" src="../assets/<?= $results[1]->REF_IMAGE_ROLE; ?>" alt="logosurvivant"></a>
    </div>
</div>
