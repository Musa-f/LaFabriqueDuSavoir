<form method="post" class="form-forget">
    <h2>Récupérer le mot de passe </h2>
    <p>Après avoir fourni votre adresse e-mail, vous recevrez un message contenant les instructions détaillées pour réinitialiser votre mot de passe.</p>
    <input type="email" name="email" class="initialize style-input" placeholder="Adresse email">
    <input type="submit" name="submit" value="Envoyer" class="initialize style-btn">

    <?php if(isset($_POST['submit'])):
        if(!empty($error)):
            echo "<p class='errorMsg'>$error</p>";
        else:
            echo "<p class='successMsg'>Nous avons bien reçu votre demande</p>";
        endif;
    endif?>

</form>