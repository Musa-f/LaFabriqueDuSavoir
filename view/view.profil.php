<div class="title">
    <img src="/la_fabrique_du_savoir/assets/img/l-separator.svg" alt="">
    <h2>Profil</h2>
</div>

<div class="box">
    <div class="profil">
        <p id="errors" class="errorMsg"></p>
        <p id="success" class="successMsg"></p>
        <div class="grid-input">
            <label for="">Nom d'utilisateur</label>
            <input type="text" name="name" value="<?=$dataUser['name_user']?>" disabled class="initialize disabled-style">
            <button class="initialize btn-edit" onclick="edition(this)">
                <i class="bi bi-pencil-square"></i>
            </button>
        </div>
        <div class="grid-input">
            <label for="">Adresse mail</label>
            <input type="email" name="email" value="<?=$dataUser['email_user']?>" disabled class="initialize disabled-style">
            <button class="initialize btn-edit" onclick="edition(this)">
                <i class="bi bi-pencil-square"></i>
            </button>
        </div>
        <div class="grid-input">
            <label for="">Mot de passe</label>
            <input type="password" value="passwordcode" disabled class="initialize disabled-style">
            <button class="initialize btn-edit" onclick="edition(this)">
                <i class="bi bi-pencil-square"></i>
            </button>
        </div>
        <div class="btn-actions">
            <button class="initialize style-btn disabled-btn" name="submit" onclick="submit(<?=$_SESSION['user']['id_user']?>)" disabled>Valider</button>
            <button class="initialize cancel-btn" onclick="refresh()">Annuler</button>
        </div>
</div>
</div>



<?php
    $script = "<script src='/la_fabrique_du_savoir/view/js/useredition.js'></script>"
?>