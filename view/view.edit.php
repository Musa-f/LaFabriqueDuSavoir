<div class="title">
    <img src="/la_fabrique_du_savoir/assets/img/l-separator.svg" alt="">
    <h2>Modifier l'article</h2>
</div>

<form action="" method="post" class="edit">

    <div class="title-post">
        <label for="">Titre de l'article :</label>
        <input type="text">
    </div>

    <div class="custom-file">
        <label for="">Image :</label>
        <input type="file" class="custom-file-input" id="customFile">
    </div>

    <textarea name="" id="" cols="30" rows="10" class="editor"></textarea>

    <div class="buttons-edit">
        <input type="submit" value ="Annuler" class="initialize style-btn">
        <input type="submit" value="Valider" class="initialize style-btn">
    </div>
</form>

<?php
    $script = "<script src='/la_fabrique_du_savoir/view/ckeditor/build/ckeditor.js'></script>
                <script src='/la_fabrique_du_savoir/view/js/editor.js'></script>";
?>