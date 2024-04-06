<?php

include_once("../vendor/autoload.php");
use Firebase\JWT\JWT;

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $error;
    if(!select_exist_email($bdd, $email)){
        $error = "Cette adresse mail n'est associée à aucun compte";
    }else{
        $secretKey = 'NgJp$hirgB3P';
        $userId = select_id_from_email($bdd, $email);
        $expirationTime = time() + (15 * 60);

        $payload = array(
            "user_id" => $userId,
            "exp" => $expirationTime
        );
        
        $jwt = JWT::encode($payload, $secretKey, 'HS256');

        $name = 'La Fabrique du Savoir';
        $link = 'https://lfs.fmusaeva.com/controller/reinitialize_pswd.php?token='.$jwt;
        $message = "Nous avons reçu une demande de réinitialisation de votre mot de passe pour votre compte. Pour procéder à la réinitialisation, veuillez cliquer sur le lien ci-dessous : <br><br>
        <a href='$link'>lfs.fmusaeva.com/controller/reinitialize_pswd.php</a>
        <br><br>
        Ce lien est confidentiel, veuillez ne le partager à persoone. Il expirera dans 15 minutes. Si vous ne parvenez pas à cliquer sur le lien ou si vous dépassez ce délai, vous devrez recommencer le processus de réinitialisation. <br><br>
        Si vous n'avez pas demandé cette réinitialisation de mot de passe, veuillez ignorer cet e-mail. <br><br>
        Si vous avez des questions ou avez besoin d'une assistance supplémentaire, n'hésitez pas à contacter notre équipe d'assistance.
        <br><br>
        Cordialement,<br>
        L'équipe de support technique";

        if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            $toemail = $email;
            $subject = 'Mail de '.$name;
            $body = '<h2>Réinitialisation du mot de passe</h2>
                    <h4>Name</h4><p>'.$name.'</p>
                    <h4>Email</h4><p>contact@fmusaeva.com</p>
                    <h4>Message</h4><p>'.$message.'</p>';
            $headers = "MIME-Version: 1.0"."\r\n";
            $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: ".$name. "<contact@fmusaeva.com>". "\r\n";

            if(mail($toemail, $subject, $body, $headers)){
                
            }else{
                $error = "Une erreur est survenue lors de l'envoi";
            }
        }
    }
}




