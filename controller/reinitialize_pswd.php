<?php

include_once("controller.model_links.php");
include_once("../vendor/autoload.php");
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Firebase\JWT\SignatureInvalidException;
use Firebase\JWT\BeforeValidException;
use Firebase\JWT\ExpiredException;

if(isset($_GET['token'])){
    $jwt = $_GET['token'];
    $key = 'NgJp$hirgB3P';
    $errors = [];

    try {
        $decoded = JWT::decode($jwt, new Key($key, 'HS256'));
        $userId = $decoded->user_id->id_user;
        $pswd = htmlspecialchars($_POST['password']);

        if(strlen($pswd)<10){
            $errors[] = "Le mot de passe doit contenir au moins 10 caractères.";
        }else{
            $newPswd = (password_hash($pswd, PASSWORD_BCRYPT));
            update_pswd($bdd, $userId, $newPswd);
        }   
    } catch (InvalidArgumentException $e) {
        // provided key/key-array is empty or malformed.
        $errors[] = "La clé-valeur est vide ou incorrecte";
    } catch (DomainException $e) {
        // provided algorithm is unsupported OR
        // provided key is invalid OR
        // unknown error thrown in openSSL or libsodium OR
        // libsodium is required but not available.
        $errors[] = "Une erreur est survenue";
    } catch (SignatureInvalidException $e) {
        // provided JWT signature verification failed.
        $errors[] = "La signature a échouée";
    } catch (BeforeValidException $e) {
        // provided JWT is trying to be used before "nbf" claim OR
        // provided JWT is trying to be used before "iat" claim.
        $errors[] = "Le token n'est pas encore disponible";
    } catch (ExpiredException $e) {
        // provided JWT is trying to be used after "exp" claim.
        $errors[] = "Le token a expiré";
    } catch (UnexpectedValueException $e) {
        // provided JWT is malformed OR
        // provided JWT is missing an algorithm / using an unsupported algorithm OR
        // provided JWT algorithm does not match provided key OR
        // provided key ID in key/key-array is empty or invalid.
        $errors[] = "Une erreur est survenue";
    }
}else{
    exit;
}

include("../view/view.reinitialize_pswd.php");