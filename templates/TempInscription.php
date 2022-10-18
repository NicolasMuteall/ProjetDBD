<div class="container border border-secondary rounded shadow-lg formulaire p-5">
    <form id="forminscription" class="mx-auto mt-3" action="" method="post">
    <div class="mb-3">
        <label for="inputpseudo" class="form-label">Pseudo*</label>
        <input type="text" name="pseudo" class="form-control" id="inputpseudo" placeholder="Entrez votre pseudo..." value="<?php if(isset($_POST['pseudo'])){ echo $_POST['pseudo']; } ?>">
        <?= $msgpseudo ?>
    </div>
    <div class="mb-3">
        <label for="inputemail" class="form-label">Adresse email*</label>
        <input type="email" name="mail" class="form-control" id="inputemail" placeholder="Entrez votre adresse email..." value="<?php if(isset($_POST['mail'])){ echo $_POST['mail']; } ?>">
        <?= $msgmail ?>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Mot de passe*</label>
        <input type="password" name="mdp" class="form-control" id="exampleInputPassword1" placeholder="Entrez votre mot de passe..." value="<?php if(isset($_POST['mdp'])){ echo $_POST['mdp']; } ?>">
    </div>
    <div class="mb-3">
        <label for="ConfirmInputPassword1" class="form-label">Confirmer le mot de passe*</label>
        <input type="password" name="mdpconfirm" class="form-control" id="ConfirmInputPassword1" placeholder="Confirmez votre mot de passe..." value="<?php if(isset($_POST['mdpconfirm'])){ echo $_POST['mdpconfirm']; } ?>">
    </div>
    <div class="text-center mt-4">
        <button type="submit" name="inscription" class="btn btn-primary mb-3">Inscription</button>
        <p><?= $msgerror ?></p>
        <p>Vous avez déjà un compte ? Se connecter : <a href="connexion.php">Cliquez-ici</a></p>
        <p>(*) : Le champ doit être complété.</p>
    </div>
    </form>
</div>