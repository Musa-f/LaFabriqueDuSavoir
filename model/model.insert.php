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

?>