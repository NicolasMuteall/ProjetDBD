<div class="container border border-secondary rounded shadow-lg formulaire p-5">
    <h3 class="mb-5 police2">Modifier les informations de votre profil:</h3>
    <form id="" class="mx-auto mt-3 formsize" action="" method="post">
        <div class="mb-3">
            <label for="selectrole" class="form-label">Selectionnez votre role principal :</label>
            <select id="selectrole" class="form-select" aria-label="Default select example">
                <option selected value="<?= $resultprofil->NOM_ROLE ?>"><?= $resultprofil->NOM_ROLE ?> (actuel)</option>
                <option value="<?= $resultrole[0]->NOM_ROLE ?>"><?= $resultrole[0]->NOM_ROLE ?></option>
            </select>
        </div>
        <div class="mb-3">
            <label for="inputpseudo" class="form-label">Pseudo*</label>
            <input type="text" name="pseudo" class="form-control" id="inputpseudo" placeholder="Entrez votre pseudo..." value="<?= $resultprofil->PSEUDO_JOUEUR ?>">
        </div>
        <div class="mb-3">
            <label for="inputemail" class="form-label">Adresse email*</label>
            <input type="email" name="mail" class="form-control" id="inputemail" placeholder="Entrez votre adresse email..." value="<?= $resultprofil->MAIL_JOUEUR ?>">
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
        <div class="text-center mt-4">
            <button type="submit" name="submit" class="btn btn-primary mb-3">Enregistrer</button>
            <p>(*) : Le champ doit être complété.</p>
        </div>
    </form>
</div>