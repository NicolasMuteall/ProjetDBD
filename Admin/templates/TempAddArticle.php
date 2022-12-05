<div class="container mt-5">
    <div id="" class="mx-auto border border-secondary rounded formulaire p-3">

        <form id="" action="" method="post" enctype="multipart/form-data" class="mx-auto mt-3">

        <div class="mb-3">
            <label for="inputtitle" class="form-label">Titre</label>
            <input type="text" class="form-control" name="title" id="inputtitle" placeholder="Entrez votre pseudo..." value="<?php if(isset($_POST['title'])){ echo $_POST['title']; } ?>">
        </div>

        <div class="mb-3">
            <label for="floatingTextarea" class="form-label">Contenu</label>
            <textarea class="form-control" name="content" placeholder="Écrivez votre article..." id="floatingTextarea" value="<?php if(isset($_POST['content'])){ echo $_POST['content']; } ?>"></textarea>
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Sélectionner une image :</label>
            <input class="form-control" type="file" name="img_upload" id="formFile">
            <div class="text-center"><?= $msgerrorimg ?></div>
        </div>

        <div class="text-center mt-4">
            <?= $msgerror ?>
            <button type="submit" name="create" class="btn btn-primary mb-3">Créer</button>
        </div>
        
        </form>
    </div>
</div>