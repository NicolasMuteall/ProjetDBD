<div class="container">
    <div id="formadmin" class="mx-auto border border-secondary rounded formulaire">
        <form id="formconnexion" action="" method="post" class="mx-auto mt-3">
        <div class="mb-3">
            <label for="inputpseudo" class="form-label">Identifiant</label>
            <input type="text" class="form-control" name="pseudo" id="inputpseudo" placeholder="Entrez votre pseudo..." value="<?php if(isset($_POST['pseudo'])){ echo $_POST['pseudo']; } ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="mdp" id="exampleInputPassword1" placeholder="Entrez votre mot de passe..." value="<?php if(isset($_POST['mdp'])){ echo $_POST['mdp']; } ?>">
        </div>
        <div class="text-center mt-4">
            <?= $msgerror ?>
            <button type="submit" name="connexion" class="btn btn-primary mb-3">Connexion</button>
        </div>
        
        </form>
    </div>
</div>