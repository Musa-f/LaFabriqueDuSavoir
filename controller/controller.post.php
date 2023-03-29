<?php

$id = $_GET['id'];
$post = select_post($bdd, $id);

if(isset($_POST['submit'])){
    if(isset($_SESSION['user'])){
        if(isset($_POST['comment']) AND !empty($_POST['comment'])){
            $idUser = $_SESSION['user']['id_user'];
            $comment = $_POST['comment'];
            $msg = "Votre commentaire a été envoyé.";
            insert_post($bdd, $idUser, $id, $comment);
        }else{
            $msg = "Entrez un commentaire.";
        }
    }else{
        $msg = "<a href='../controller/controller.pages.php?page=view.connection'>Identifiez-vous</a> pour laisser un commentaire !";
    }
}

$existComment = select_exist_comment($bdd, $id);
$comments = select_comments($bdd, $id);
