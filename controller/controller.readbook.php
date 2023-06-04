<?php
session_start();
include 'controller.model_links.php';

$id = $_GET["id"];

$book = select_book_id($bdd, $id);
$pdf = $book["pdf_book"];

$data = array(
    'pdfUrl' => "/la_fabrique_du_savoir/assets/pdf/" . $pdf . ".pdf",
    'currentPage' => 1,
    'existBook' => false,
    'idUser' => 0,
    'idBook' => $book['id_book']
);

if(isset($_SESSION['user'])) {
    $idUser = $_SESSION['user']['id_user'];
    $idBook = $book['id_book'];
    $existBook = select_exist_borrowed_book($bdd, $idBook, $idUser);

    if($existBook) {
        $currentPageData = select_user_book($bdd, $idUser, $idBook);
        $data['currentPage'] = $currentPageData['currentpage'];
    }
    
    $data['existBook'] = $existBook;
    $data['idUser'] = $idUser;
}

include "../view/view.readbook.php";
?>

