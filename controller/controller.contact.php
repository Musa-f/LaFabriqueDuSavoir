<?php

  if(isset($_POST["submit"])){
    $errors = [];
    $mailSend;
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
    $object = htmlspecialchars($_POST['object']);

    if(!empty($name) && !empty($email) && !empty($message)){

      if (filter_var($email, FILTER_VALIDATE_EMAIL)){
        $toemail = 'contact@fmusaeva.com';
        $subject = 'Mail de '.$name;
        $body = '<h2>'.$object.'</h2>
                <h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Message</h4><p>'.$message.'</p>';
        $headers = "MIME-Version: 1.0"."\r\n";
        $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: ".$name. "<".$email.">". "\r\n";

        if(mail($toemail, $subject, $body, $headers)){
          $mailSend = "Votre message a bien été envoyé.";
        }else{
          $error3 = "Une erreur est survenue lors de l'envoi.";
          $errors[] = $error3;
        }
      }else{
        $error2 = "Veuillez entrer une adresse mail valide.";
        $errors[] = $error2;
      }

    }else{
      $error1 = "Veuillez compléter tous les champs.";
      $errors[] = $error1;
    }
  }
