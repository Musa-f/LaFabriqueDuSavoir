<?php
include 'controller.model_links.php';

if(isset($_POST['addBook_idBook']) AND isset($_POST['addBook_idUser'])){
    $idBook = $_POST['addBook_idBook'];
    $idUser = $_POST['addBook_idUser'];
    insert_borrowed_book($bdd, $idUser, $idBook);
}

if(isset($_POST['idBook']) AND isset($_POST['idUser']) AND isset($_POST['pageNum'])){
    $idBook = $_POST['idBook'];
    $idUser = $_POST['idUser'];
    $pageNum = $_POST['pageNum'];
    update_page($bdd, $idBook, $idUser, $pageNum);
}

if(isset($_POST['deleteBook_idBook']) AND isset($_POST['deleteBook_idUser'])){
    $idBook = $_POST['deleteBook_idBook'];
    $idUser = $_POST['deleteBook_idUser'];
    delete_borrowed_book($bdd, $idBook, $idUser);
}

if(isset($_POST['readBook_pages']) AND isset($_POST['readBook_idUser']) AND isset($_POST['readBook_idBook'])){
    $idUser = $_POST['readBook_idUser'];
    $idBook = $_POST['readBook_idBook'];
    $nbPage = $_POST['readBook_pages'];
    update_page($bdd, $idBook, $idUser, $nbPage);
}

if(isset($_POST['idBook']) AND isset($_POST['idUser']) AND isset($_POST['rating']) AND isset($_POST['title']) AND isset($_POST['message'])){
    $idBook = $_POST['idBook'];
    $idUser = $_POST['idUser'];
    $rating = $_POST['rating'];
    $title = $_POST['title'];
    $content = $_POST['message'];
    insert_review_book($bdd, $idUser, $idBook, $rating, $title, $content);
}

if(isset($_POST['inputName']) AND isset($_POST['idUserChange'])){
    $newName = $_POST['inputName'];
    $idUser = $_POST['idUserChange'];
    update_username($bdd, $idUser, $newName);
}

if(isset($_POST['inputEmail']) AND isset($_POST['idUserChange'])){
    $newEmail = $_POST['inputEmail'];
    $idUser = $_POST['idUserChange'];
    update_email($bdd, $idUser, $newEmail);
    
}

if(isset($_POST['inputPswd']) AND isset($_POST['idUserChange'])){
    $newPswd = $_POST['inputPswd'];
    $idUser = $_POST['idUserChange'];
    $encryptedPswd = (password_hash($newPswd, PASSWORD_BCRYPT));
    update_pswd($bdd, $idUser, $encryptedPswd);
}