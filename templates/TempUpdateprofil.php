<div id="modifinfo" class="container border border-secondary rounded shadow-lg formulaire p-3">
    <h3 class="mb-5 police2">Modifier les informations de votre profil:</h3>

    <form action="" method="post" class="d-flex mb-5" enctype="multipart/form-data">
        <div class="mx-auto d-flex">
        <img class="imgprofil" class="mt-4 mb-3" src="../assets/Joueurs/<?= $resultprofil->REF_IMAGE_JOUEUR ?>" alt="mastermind">
        <div class="mt-5 ms-5">
            <label for="formFile" class="form-label">Sélectionner une autre image :</label>
            <input class="form-control" type="file" name="img_upload" id="formFile">
            <?= $msgerrorimg ?>
            <button type="submit" name="img_submit" class="btn btn-primary mb-3 mt-2 text-center">Modifier l'image</button>
        </div>
        </div>
    </form>
    
    <form id="" class="mx-auto mt-3 formsize" action="" method="post">

        <div class="mb-3">
            <label for="selectrole" class="form-label">Selectionnez votre role principal :</label>
            <select id="selectrole" name="selectrole" class="form-select" aria-label="Default select example">
                <option selected value="<?= $resultprofil->NOM_ROLE ?>"><?= $resultprofil->NOM_ROLE ?> (actuel)</option>
                <?php for($i = 0; $i < count($resultrole); $i++){ ?>
                    <option value="<?= $resultrole[$i]->NOM_ROLE ?>"><?= $resultrole[$i]->NOM_ROLE ?></option>
                <?php } ?>
            </select>
            <div class="text-center mt-4">
                <button type="submit" name="submitrole" class="btn btn-primary mb-3">Modifier</button>
            </div>
        </div>

    </form>

    <form id="" class="mx-auto mt-3 formsize" action="" method="post">
        
        <div class="mb-3">
            <label for="inputpseudo" class="form-label">Pseudo* :</label>
            <input type="text" name="pseudo" class="form-control" id="inputpseudo" placeholder="Entrez votre pseudo..." value="<?= $resultprofil->PSEUDO_JOUEUR ?>">
            <?= $msgpseudo ?>
        </div>

        <div class="mb-3">
            <label for="inputemail" class="form-label">Adresse email* :</label>
            <input type="email" name="mail" class="form-control" id="inputemail" placeholder="Entrez votre adresse email..." value="<?= $resultprofil->MAIL_JOUEUR ?>">
            <?= $msgmail ?>
        </div>

        <div class="mb-3">
            <label for="selectkiller" class="form-label">Selectionnez votre Tueur préféré :</label>
            <select id="selectkiller" class="form-select" aria-label="Default select example">
                <option selected value="<?= $resulttueur->NOM_PERSO ?>"><?= $resulttueur->NOM_PERSO ?> (actuel)</option>
                <?php for($i = 0; $i < count($resultkillerupdate); $i++){ ?>
                    <option value="<?= $resultkillerupdate[$i]->NOM_PERSO ?>"><?= $resultkillerupdate[$i]->NOM_PERSO ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="selectrank" class="form-label">Selectionnez votre Rank :</label>
            <select id="selectrank" class="form-select" aria-label="Default select example">
                <option selected value="<?= $resultprofil->RANK_JOUEUR ?>"><?= $resultprofil->RANK_JOUEUR ?> (actuel)</option>
                <?php for($i = 0; $i < count($resultrankupdate); $i++){ ?>
                    <option value="<?= $resultrankupdate[$i]->NOM_RANK ?>"><?= $resultrankupdate[$i]->NOM_RANK ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="selectcomp1" class="form-label">Selectionnez vos compétences préférées :</label>
            
            <select id="selectcomp1" class="form-select selectcomp mb-3" aria-label="Default select example">
                <option selected value="<?= $resultcompt1->ID_COMPETENCE ?>"><?= $resultcompt1->NOM_COMPETENCE ?> (actuelle)</option>
                <?php for($i = 0; $i < count($resultselectcompt1); $i++){ ?>
                    <option value="<?= $resultselectcompt1[$i]->ID_COMPETENCE ?>"><?= $resultselectcompt1[$i]->NOM_COMPETENCE ?></option>
                <?php } ?>
            </select>

            <select id="selectcomp2" class="form-select selectcomp mb-3" aria-label="Default select example">
                <option selected value="<?= $resultcompt2->ID_COMPETENCE ?>"><?= $resultcompt2->NOM_COMPETENCE ?> (actuelle)</option>
                <?php for($i = 0; $i < count($resultselectcompt1); $i++){ ?>
                    <option value="<?= $resultselectcompt1[$i]->ID_COMPETENCE ?>"><?= $resultselectcompt1[$i]->NOM_COMPETENCE ?></option>
                <?php } ?>
            </select>

            <select id="selectcomp3" class="form-select selectcomp mb-3" aria-label="Default select example">
                <option selected value="<?= $resultcompt3->ID_COMPETENCE ?>"><?= $resultcompt3->NOM_COMPETENCE ?> (actuelle)</option>
                <?php for($i = 0; $i < count($resultselectcompt1); $i++){ ?>
                    <option value="<?= $resultselectcompt1[$i]->ID_COMPETENCE ?>"><?= $resultselectcompt1[$i]->NOM_COMPETENCE ?></option>
                <?php } ?>
            </select>

            <select id="selectcomp4" class="form-select selectcomp mb-3" aria-label="Default select example">
                <option selected value="<?= $resultcompt4->ID_COMPETENCE ?>"><?= $resultcompt4->NOM_COMPETENCE ?> (actuelle)</option>
                <?php for($i = 0; $i < count($resultselectcompt1); $i++){ ?>
                    <option value="<?= $resultselectcompt1[$i]->ID_COMPETENCE ?>"><?= $resultselectcompt1[$i]->NOM_COMPETENCE ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="selectrank" class="form-label">Selectionnez votre plateforme :</label>
            <select id="selectrank" class="form-select" aria-label="Default select example">
                <option selected value="<?= $resultprofil->NOM_PLATEFORME ?>"><?= $resultprofil->NOM_PLATEFORME ?> (actuel)</option>
                <?php for($i = 0; $i < count($resultplateformeupdate); $i++){ ?>
                    <option value="<?= $resultplateformeupdate[$i]->NOM_PLATEFORME ?>"><?= $resultplateformeupdate[$i]->NOM_PLATEFORME ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="inputpseudoplat" class="form-label">Pseudo sur plateforme* :</label>
            <input type="text" name="pseudoplat" class="form-control" id="inputpseudoplat" placeholder="Entrez votre pseudo..." value="<?= $resultprofil->PSEUDO_PLATEFORME ?>">
            <?= $msgpseudoplat ?>
        </div>

        <div class="mb-3">
            <label for="inputtime" class="form-label">Temps de jeu :</label>
            <input type="number" name="time" class="form-control" id="inputtime" placeholder="Entrez votre temps de jeu..." value="<?= $resultprofil->NOMBRES_HEURES ?>">
            <?= $msgpseudoplat ?>
        </div>

        <div class="text-center mt-4">
            <?= $msgerror ?>
            <button type="submit" name="submit" class="btn btn-primary mb-3">Enregistrer</button>
            <p>(*) : Le champ doit être complété.</p>
        </div>

    </form>
</div>
<script src="../JS/scriptupdate.js"></script>