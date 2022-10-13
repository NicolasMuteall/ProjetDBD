<div id="boiterole" class="container d-flex justify-content-evenly">
    <div id="boxtueur" class="role border border-secondary rounded text-center shadow-lg">
        <a href="personnage.php?role=tueur"><h3 class="mb-3 mt-3 titrerole">Tueur</h3></a>
        <a href="personnage.php?role=tueur"><img class="imgrole" src="./assets/<?= $results[1]->REF_IMAGE_ROLE; ?>" alt="logotueur"></a>
    </div>
    <div id="boxsurvivant" class="role border border-secondary rounded text-center shadow-lg">
        <a href="personnage.php?role=survivant"><h3 class="mb-3 mt-3 titrerole">Survivant</h3></a>
        <a href="personnage.php?role=survivant"><img class="imgrole" src="./assets/<?= $results[0]->REF_IMAGE_ROLE; ?>" alt="logosurvivant"></a>
    </div>
</div>
