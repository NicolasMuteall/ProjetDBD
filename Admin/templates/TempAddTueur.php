<div class="container mt-5">
    <div id="" class="mx-auto border border-secondary rounded formulaire p-3">

        <form id="" action="" method="post" enctype="multipart/form-data" class="mx-auto mt-3">

        <div class="mb-3">
            <label for="inputtitle" class="form-label">Nom du personnage</label>
            <input type="text" class="form-control" name="nom" id="inputtitle" placeholder="Entrez votre pseudo..." value="<?php if(isset($_POST['nom'])){ echo $_POST['nom']; } ?>">
        </div>

        <div class="mb-3">
            <label for="floatingTextarea" class="form-label">Présentation du personnage</label>
            <textarea class="form-control" name="presentation" placeholder="Écrivez votre article..." id="floatingTextarea" value="<?php if(isset($_POST['presentation'])){ echo $_POST['presentation']; } ?>"></textarea>
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Sélectionner l'image du personnage :</label>
            <input class="form-control" type="file" name="img_upload" id="formFile">
            <div class="text-center"><?= ''/*$msgerrorimg*/ ?></div>
        </div>

        <div class="mb-3">
            <label for="inputcompspe" class="form-label">Compétence spéciale :</label>
            <input type="text" class="form-control" name="compspe" id="inputcompspe" placeholder="Entrez votre pseudo..." value="<?php if(isset($_POST['compspe'])){ echo $_POST['compspe']; } ?>">
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Sélectionner l'image de la compétence spéciale :</label>
            <input class="form-control" type="file" name="img_upload2" id="formFile">
            <div class="text-center"><?= ''/*$msgerrorimg*/ ?></div>
        </div>

        <div class="text-center mt-4">
            <?= ''/*$msgerror*/ ?>
            <button type="submit" name="create" class="btn btn-primary mb-3">Créer</button>
        </div>
        
        </form>
    </div>
</div>

<?php var_dump($_FILES);