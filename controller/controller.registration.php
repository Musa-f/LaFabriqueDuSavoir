<?php
if(isset($_SESSION['user'])){
    //If a session is already in progress, it redirects to the homepage
    header('Location: controller.pages.php');
}else{

    $errors = [];
        
    if(isset($_POST['submit'])){
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $pswd = htmlspecialchars($_POST['pswd']);

            
        if(empty($name) || empty($email) || empty($pswd)){
            $error1 = "Veuillez remplir tous les champs.";
            $errors[] = $error1;
        }else{
            if(strlen($name)<5){
                $error2 = "Le nom d'utilisateur doit contenir au moins 5 caractères.";
                $errors[] = $error2;
            }
            if(strlen($name)>20){
                $error3 = "Le nom d'utilisateur ne doit pas dépasser 20 caractères.";
                $errors[] = $error3;
            }
            if(!ctype_alnum($name)){
                $error4 = "Le nom d'utilisateur ne peut contenir des caractères spéciaux.";
                $errors[] = $error4;
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $error5 = "Entrez une adresse mail valide.";
                $errors[] = $error5;
            }
            if(strlen($pswd)<10){
                $error6 = "Le mot de passe doit contenir au moins 10 caractères.";
                $errors[] = $error6;
            }

            $existName = select_exist_username($bdd, $name);
            $existEmail = select_exist_email($bdd, $email);
            if($existName || $existEmail){
                $error7 = "Le nom d'utilisateur ou l'adresse mail sont déjà existants";
                $errors[] = $error7;
            }
                
            elseif($errors == null){
                $encryptedPswd = (password_hash($pswd, PASSWORD_BCRYPT));
                insert_user($bdd, $name, $email, $encryptedPswd);
            }
        }
    }
}

?>