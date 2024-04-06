<div class="title">
    <img src="<?=$_ENV['URL']?>/assets/img/l-separator.svg" alt="">
    <h2>Inscription</h2>
</div>

<div class="box">
    <form method="post" class="registration">
        <?php if(!empty($errors)){
            $displayErrors = implode("<br>", $errors);
            echo "<p class='errorMsg'><i class='bi bi-exclamation-square'></i> $displayErrors</p>";
        }
        if(isset($_POST['submit']) AND empty($errors)){
            echo "<p class='successMsg'> <i class='bi bi-info-square'></i> Vous avez bien été inscrit. <br> Vous pouvez <a href='../controller/controller.pages.php?page=view.connection'>vous connecter</a> dès maintenant.</p>";
        }
        ?>
        <input type="text" name="name" class="initialize style-input" placeholder="Nom d'utilisateur" value="<?php echo isset($_POST['name']) ? $name : '';?>">
        <input type="email" name="email" class="initialize style-input" placeholder="Adresse mail" value="<?php echo isset($_POST['email']) ? $email : '';?>">
        <input type="password" name="pswd" class="initialize style-input" placeholder="Mot de passe" value="<?php echo isset($_POST['pswd']) ? $password : '';?>">
        <div>
            <button name="submit" class="initialize style-btn">S'inscrire</button>
        </div>
    </form>
</div>
