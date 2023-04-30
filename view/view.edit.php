<div class="title">
    <img src="/la_fabrique_du_savoir/assets/img/l-separator.svg" alt="">
    <?php if($id_post == 0):?>
        <h2>Nouveau article</h2>
    <?php else:?>
        <h2>Modifier l'article</h2>
    <?php endif?>
</div>

<form method="post" class="edit" enctype="multipart/form-data">

    <div class="title-post">
        <label for="">Titre de l'article :</label>
        <input name="title" type="text">
    </div>

    <div class="custom-file">
        <label for="">Image :</label>
        <input type="file" name="file" class="custom-file-input" id="customFile" accept="image/png, image/jpeg">
    </div>

    <textarea name="content" cols="30" rows="10" class="editor"></textarea>

    <div class="buttons-edit">
        <input type="submit" value ="Annuler" class="initialize style-btn">
        <input name="submit" type="submit" value="Valider" class="initialize style-btn">
    </div>
</form>

<?php
    $script = "<script src='/la_fabrique_du_savoir/view/ckeditor/build/ckeditor.js'></script>
                <script src='/la_fabrique_du_savoir/view/js/editor.js'></script>";
?>