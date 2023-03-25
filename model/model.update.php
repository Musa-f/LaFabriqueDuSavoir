<?php

function update_page($bdd, $idBook, $idUser, $nbPage){
    $stmt = $bdd->prepare(" UPDATE borrowed_books
                            SET pages_followed = :nbPage
                            WHERE id_user = :idUser
                            AND id_book = :idBook
                        ");
    $stmt->execute(array(
        "nbPage" => $nbPage,
        "idUser" => $idUser,
        "idBook" => $idBook
    ));
}

function update_state_finish($bdd, $idBook, $idUser){
    $stmt = $bdd->prepare(" UPDATE borrowed_books
                            SET state = 1
                            WHERE id_user = :idUser
                            AND id_book = :idBook
                        ");
    $stmt->execute(array(
        "idUser" => $idUser,
        "idBook" => $idBook
    ));
}

function update_state_inprogress($bdd, $idBook, $idUser){
    $stmt = $bdd->prepare(" UPDATE borrowed_books
                            SET state = 0
                            WHERE id_user = :idUser
                            AND id_book = :idBook
                        ");
    $stmt->execute(array(
        "idUser" => $idUser,
        "idBook" => $idBook
    ));
}
