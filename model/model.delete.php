<?php

function delete_borrowed_book($bdd, $idBook, $idUser){
    $stmt = $bdd->prepare("DELETE FROM borrowed_books WHERE id_book = :idBook AND id_user = :idUser");
    $stmt->execute(array(
        "idUser" => $idUser,
        "idBook" => $idBook
    ));
}

?>