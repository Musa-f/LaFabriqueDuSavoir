<?php

function insert_user($bdd, $name, $email, $pswd){
    $stmt = $bdd->prepare(" INSERT INTO users (name_user, email_user, pswd_user) VALUES
                            (:name, :email, :pswd)
                        ");
    $stmt = $stmt->execute(array(
        'name' => $name,
        'email' => $email,
        'pswd' => $pswd
    ));
}

function insert_borrowed_book($bdd, $idUser, $idBook){
    $stmt = $bdd->prepare(" INSERT INTO borrowed_books (id_book, id_user) VALUES
                            (:idBook, :idUser)
                        ");
    $stmt = $stmt->execute(array(
        'idBook'=> $idBook,
        'idUser' => $idUser
    ));
}

function insert_review_book($bdd, $idUser, $idBook, $rating, $title, $content){
    $stmt = $bdd->prepare(" INSERT INTO reviews (id_book, id_user, rating_review, title_review, comment_review) VALUES
                            (:idBook, :idUser, :rating, :title, :content)
                        ");
    $stmt = $stmt->execute(array(
        'idBook' => $idBook,
        'idUser' => $idUser,
        'rating' => $rating,
        'title' => $title,
        'content' => $content,
    ));
}

?>