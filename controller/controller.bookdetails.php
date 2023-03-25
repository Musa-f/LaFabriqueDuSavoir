<?php

$id = $_GET['id'];

$book = select_book_id($bdd, $id);
$author = select_author_id($bdd, $id);
$genre = select_genre_id($bdd, $id);

// check if we have an existing pdf for the book
$pdfFile = $book['pdf_book'];
$pdfExist;

if(file_exists("../assets/pdf/$pdfFile.pdf")){
    $pdfExist = true;
}else{
    $pdfExist = false;
}

if(isset($_SESSION['user'])){
    $idUser = intval($_SESSION['user']['id_user']);
    $idBook = intval($book['id_book']);
    $exist_borrowed_book = select_exist_borrowed_book($bdd, $idBook, $idUser);
};

