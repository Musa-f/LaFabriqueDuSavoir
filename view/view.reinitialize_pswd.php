<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Réinitialiser le mot de passe</title>
        <link rel="icon" type="image/x-icon" href="https://fmusaeva.com/assets/img/favicon.ico">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&display=swap');
            body{
                background-color: #2c3638;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-align: center;
                height: 50vh;
            }
            form{
                color: #d5d1c3;
            }
            h2{
                font-family: 'Playfair Display';
                font-weight: 200;
                margin-bottom: 30px;
            }
            input[type=password]{
                width: 200px;
                border: none;
                background: none;
                border-bottom: 1px solid #d5d1c3;
                padding: 5px;
            }
            input[type=submit]{
                width: 100px;
                border: none;
                background: #d5d1c3;
                color: #2c3638;
                padding: 5px;
                margin-top: 10px;
            }
            input[type=submit]:hover{
                cursor: pointer;
            }
        </style>
    </head>

    <body>

        <form method="post" class="form-forget">
            <h2>Veuillez entrer un nouveau mot de passe</h2>
            <input type="password" name="password" placeholder="Nouveau mot de passe">
            <br>
            <input type="submit" name="submit" value="Réinitialiser">
            <?php if(isset($_POST['submit'])):
                if(!empty($errors)){
                    $err = implode('<br>', $errors);
                    echo "<p>$err</p>";
                }else{
                    echo "Votre mot de passe a bien été mis à jour";
                }
            endif?>
        </form>
    </body>
</html>