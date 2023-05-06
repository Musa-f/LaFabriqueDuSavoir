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

?>