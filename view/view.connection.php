<div class="title">
    <img src="/la_fabrique_du_savoir/assets/img/l-separator.svg" alt="">
    <h2>Connexion</h2>
</div>

<div class="box">
    <form method="post" class="connection">
    <?php if(!empty($errors)){
            $displayErrors = implode("<br>", $errors);
            echo "<p class='errorMsg'><i class='bi bi-exclamation-square'></i> $displayErrors</p>";
        }
    ?>
        <input type="text" name="name" class="initialize style-input" placeholder="Nom d'utilisateur">
        <input type="password" name="pswd" class="initialize style-input" placeholder="Mot de passe">
        <div>
            <button name="submit" class="initialize style-btn">Se connecter</button>
        </div>
    </form>
</div>
