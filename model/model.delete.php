<?php

function delete_borrowed_book($bdd, $idBook, $idUser){
    $stmt = $bdd->prepare("DELETE FROM borrowed_books WHERE id_book = :idBook AND id_user = :idUser");
    $stmt->execute(array(
        "idUser" => $idUser,
        "idBook" => $idBook
    ));
}

function delete_post($bdd, $idPost){
    $stmt = $bdd->prepare("DELETE FROM posts WHERE id_post = :idPost");
    $stmt->execute(array(
        "idPost" => $idPost
    ));
}

function delete_user($bdd, $idUser){
    $stmt = $bdd->prepare("DELETE FROM users WHERE id_user = :idUser");
    $stmt->execute(array(
        "idUser" => $idUser
    ));
}

function delete_review($bdd, $idReview){
    $stmt = $bdd->prepare("DELETE FROM reviews WHERE id_review = :idReview");
    $stmt->execute(array(
        "idReview" => $idReview
    ));
}

function delete_comment($bdd, $idComment){
    $stmt = $bdd->prepare("DELETE FROM comments WHERE id_comment = :idComment");
    $stmt->execute(array(
        "idComment" => $idComment
    ));
}

?>