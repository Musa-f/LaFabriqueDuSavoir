<?php

if(isset($_SESSION['user'])){
    //If a session is already in progress, it redirects to the homepage
    header('Location: controller.pages.php');
}else{

    if(isset($_POST['submit'])){
        $errors = [];

        if(!empty($_POST['name']) AND !empty($_POST['pswd'])){
            //converts special characters into HTML entities
            $name = htmlspecialchars($_POST['name']);
            $pswd = htmlspecialchars($_POST['pswd']);

            $nameCheck = select_exist_username($bdd, $name);

            if($nameCheck){
                $hashed_pswd = select_pswd_from_name($bdd, $name);
                if(password_verify($pswd, $hashed_pswd)){
                    $id = select_id_from_name($bdd, $name);
                    $data_user = select_data_user($bdd, $id);
                    $_SESSION['user'] = $data_user;
                    header('Location: controller.pages.php');
                }else{
                    $error3 = "Vos informations sont incorrectes.";
                    $errors[] = $error3;
                }
            }else{
                $error2 = "Aucun utilisateur avec ce nom n'a été trouvé.";
                $errors[] = $error2;
            }
        }else{
                $error1 = "Veuillez compléter tous les champs.";
                $errors[] = $error1;
        }
    }
}

