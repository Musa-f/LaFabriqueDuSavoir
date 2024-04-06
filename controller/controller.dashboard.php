<?php
session_start();
include 'controller.model_links.php';

if(isset($_SESSION['user']['id_role']) && $_SESSION['user']['id_role'] == 1){
    include "../view/view.dashboard_header.php";
    $users = select_all_users($bdd);
    $comments = select_all_comments($bdd);
    $reviews = select_all_reviews($bdd);
    $books = select_all_titles_books($bdd);
    $authors = select_all_authors($bdd);
    $genres = select_all_genres_names($bdd);
    $genres = select_all_genres($bdd);
    $roles = select_all_roles($bdd);

    if(isset($_POST['submitNewBook'])){ 
        $idAuthorBook = $_POST['idUser'];
        $titleBook = $_POST['titleBook'];
        $dateBook = $_POST['dateBook'];
        $resumeBook = $_POST['resumeBook'];
        $numPages = $_POST['numPages'];
        $arrayAuthorsBook = json_decode($_POST['arrayAuthorsBook']);
        $arrayGenresBook = json_decode($_POST['arrayGenresBook']);
        $ids_img = select_all_id_img($bdd);

        $maxIdBook = insert_book($bdd, $titleBook, $dateBook, $resumeBook);

        if(isset($_FILES['dataPdf'])){
            $urlBook = $_FILES['dataPdf'];
            $renamePdf = str_replace(" ", "_", strtolower($titleBook));
            $filepdfname = $maxIdBook."_".$renamePdf;
            $pdf_destination = "../assets/pdf/$filepdfname";
            move_uploaded_file($urlBook['tmp_name'], $pdf_destination);
            update_pdf_book($bdd, $maxIdBook, $renamePdf, $numPages);
        }
        
        //insert each author assigned to a book
        if(isset($arrayAuthorsBook)){
            foreach($arrayAuthorsBook as $authorBook){
                insert_author_book($bdd, $maxIdBook, $authorBook);
            }
        }
        
        if(isset($arrayGenresBook)){
            foreach($arrayGenresBook as $genresBook){
                insert_genre_book($bdd, $maxIdBook, $genresBook);
            }
        }

        //insert image file and in the db
        if(!empty($_FILES['dataImg'])){
            $array_ids_img = [];
            foreach($ids_img as $id_img){
                $parts = explode('_', $id_img[0]);
                $last_part = end($parts);
                $inner_parts = explode('.', $last_part);
                $result = array_shift($inner_parts);
                $array_ids_img[] = $result;
            }
            $last_id_img = max($array_ids_img)+1;

            $imgBook = $_FILES['dataImg'];
            $pdf_destination = "../assets/uploads/coverbook_$last_id_img";
            move_uploaded_file($imgBook['tmp_name'], $pdf_destination.".png");

            $id_image = "coverbook_".$last_id_img.".png";
            $name_image = $imgBook['name'];
            $size_image = $imgBook['size'];
            insert_image($bdd, $id_image, $name_image, $size_image);

            insert_cover_image($bdd, $id_image, $idAuthorBook, $maxIdBook);
        }
    }

    if($_GET['dashboard'] == 'users'){
        include "../view/view.dashboard_users.php";
    }
    if($_GET['dashboard'] == 'books'){
        include "../view/view.dashboard_books.php";
    }

    include "../view/view.dashboard_footer.php";

    
}else{
    echo "Accès interdit";
}