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
    $genres = select_all_genres($bdd);
    $roles = select_all_roles($bdd);

    if($_GET['dashboard'] == 'users'){
        include "../view/view.dashboard_users.php";
    }
    if($_GET['dashboard'] == 'books'){
        include "../view/view.dashboard_books.php";
    }

    include "../view/view.dashboard_footer.php";
}