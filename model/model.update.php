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

function update_username($bdd, $idUser, $newName){
    $stmt = $bdd->prepare(" UPDATE users
                            SET name_user = :newName
                            WHERE id_user = :idUser
                        ");
    $stmt->execute(array(
        "newName" => $newName,
        "idUser" => $idUser
    ));
}

function update_email($bdd, $idUser, $newEmail){
    $stmt = $bdd->prepare(" UPDATE users
                            SET email_user = :newEmail
                            WHERE id_user = :idUser
                        ");
    $stmt->execute(array(
        "newEmail" => $newEmail,
        "idUser" => $idUser
    ));
}

function update_pswd($bdd, $idUser, $newPswd){
    $stmt = $bdd->prepare(" UPDATE users
                            SET pswd_user = :newPswd
                            WHERE id_user = :idUser
                        ");
    $stmt->execute(array(
        "newPswd" => $newPswd,
        "idUser" => $idUser
    ));
}

function update_role_user($bdd, $idUser, $newRole){
    $stmt = $bdd->prepare(" UPDATE users
                            SET id_role = :newRole
                            WHERE id_user = :idUser
                        ");
    $stmt->execute(array(
        "newRole" => $newRole,
        "idUser" => $idUser
    ));
}

function update_visiblity_review($bdd, $idReview, $visibility){
    $stmt = $bdd->prepare(" UPDATE reviews
                            SET visibility_review = :visibility
                            WHERE id_review = :idReview
                        ");
    $stmt->execute(array(
        "idReview" => $idReview,
        "visibility" => $visibility
    ));
}

function update_pdf_book($bdd, $idBook, $pdf, $numPages){
    $stmt = $bdd->prepare(" UPDATE books
                            SET pdf_book = :pdf, pages_book = :numPages
                            WHERE id_book = :idBook
                        ");
    $stmt->execute(array(
        "pdf" => $pdf,
        "idBook" => $idBook,
        "numPages" => $numPages
    ));
}

function update_title_post($bdd, $id, $title){
    $stmt = $bdd->prepare(" UPDATE posts
                            SET title_post = :titlePost
                            WHERE id_post = :idPost");
    $stmt->execute(array(
        "titlePost" => $title,
        "idPost" => $id
    ));
}

function update_content_post($bdd, $id, $content){
    $stmt = $bdd->prepare(" UPDATE posts
                            SET content_post = :contentPost
                            WHERE id_post = :idPost");
    $stmt->execute(array(
        "contentPost" => $content,
        "idPost" => $id
    ));
}
