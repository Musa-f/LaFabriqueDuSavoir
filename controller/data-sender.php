<?php
include 'controller.model_links.php';

if(isset($_POST['addBook_idBook']) && isset($_POST['addBook_idUser'])){
    $idBook = $_POST['addBook_idBook'];
    $idUser = $_POST['addBook_idUser'];
    insert_borrowed_book($bdd, $idUser, $idBook);
}

if(isset($_POST['idBook']) && isset($_POST['idUser']) && isset($_POST['pageNum'])){
    $idBook = $_POST['idBook'];
    $idUser = $_POST['idUser'];
    $pageNum = $_POST['pageNum'];
    update_page($bdd, $idBook, $idUser, $pageNum);
}

if(isset($_POST['deleteBook_idBook']) && isset($_POST['deleteBook_idUser'])){
    $idBook = $_POST['deleteBook_idBook'];
    $idUser = $_POST['deleteBook_idUser'];
    delete_borrowed_book($bdd, $idBook, $idUser);
}

if(isset($_POST['readBook_pages']) && isset($_POST['readBook_idUser']) && isset($_POST['readBook_idBook'])){
    $idUser = $_POST['readBook_idUser'];
    $idBook = $_POST['readBook_idBook'];
    $nbPage = $_POST['readBook_pages'];
    update_page($bdd, $idBook, $idUser, $nbPage);
}

if(isset($_POST['idBook']) && isset($_POST['idUser']) && isset($_POST['rating']) && isset($_POST['title']) && isset($_POST['message'])){
    $idBook = $_POST['idBook'];
    $idUser = $_POST['idUser'];
    $rating = $_POST['rating'];
    $title = $_POST['title'];
    $content = $_POST['message'];
    insert_review_book($bdd, $idUser, $idBook, $rating, $title, $content);
}

if(isset($_POST['inputName']) && isset($_POST['idUserChange'])){
    $newName = $_POST['inputName'];
    $idUser = $_POST['idUserChange'];
    update_username($bdd, $idUser, $newName);
}

if(isset($_POST['inputEmail']) AND isset($_POST['idUserChange'])){
    $newEmail = $_POST['inputEmail'];
    $idUser = $_POST['idUserChange'];
    update_email($bdd, $idUser, $newEmail);
    
}

if(isset($_POST['inputPswd']) && isset($_POST['idUserChange'])){
    $newPswd = $_POST['inputPswd'];
    $idUser = $_POST['idUserChange'];
    $encryptedPswd = (password_hash($newPswd, PASSWORD_BCRYPT));
    update_pswd($bdd, $idUser, $encryptedPswd);
}

if(isset($_POST['idUserRole']) && isset($_POST['value_option'])){
    $idUser = $_POST['idUserRole'];
    $newRole = $_POST['value_option'];
    update_role_user($bdd, $idUser, $newRole);
}

if(isset($_GET['delete_post'])){
    $idPost = $_GET['delete_post'];
    delete_post($bdd, $idPost);
    header("Location: controller.pages.php?page=view.blog"); 
}

if(isset($_POST['deleteUserId'])){
    $idUser = $_POST['deleteUserId'];
    delete_user($bdd, $idUser);
}

if(isset($_POST['deleteIdReview'])){
    $idReview = $_POST['deleteIdReview'];
    delete_review($bdd, $idReview);
}

if(isset($_POST['deleteIdComment'])){
    $idComment = $_POST['deleteIdComment'];
    delete_comment($bdd, $idComment);
}

if(isset($_POST['idReview']) && isset($_POST['visibility'])){
    $idReview = $_POST['idReview'];
    $visibility = $_POST['visibility'];
    update_visiblity_review($bdd, $idReview, $visibility);
}