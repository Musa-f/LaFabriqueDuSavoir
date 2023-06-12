<div class="title">
    <img src="/assets/img/l-separator.svg" alt="">
    <h2>Formulaire de contact</h2>
</div>

<div>
    <?php if(!empty($errors)):?>
        <p class="errorMsg"><?= implode("", $errors);?></p>
    <?php elseif(isset($errors) && empty($errors)):?>
        <p class="successMsg"><?= $mailSend ;?></p>
    <?php endif?>

    <form method="post" class="contact">
        <div>
            <input type="text" name="name" class="initialize style-input" placeholder="Nom" value="<?= isset($_POST['name']) ? $name : '';?>">
            <input type="email" name="email" class="initialize style-input" placeholder="Adresse mail" value="<?= isset($_POST['email']) ? $email : '';?>">
        </div>
        <div>
            <input type="text" name="object" class="initialize style-input" placeholder="Objet" value="<?= isset($_POST['object']) ? $object : '';?>">
        </div>
        <div>
            <label>Message</label>
            <textarea name="message" cols="30" rows="10"><?= isset($_POST['message']) ? $message : '';?></textarea>
        </div>
        <div>
            <input type="submit" name="submit" class="initialize style-btn" value="Envoyer">
        </div>
    </form>
</div>