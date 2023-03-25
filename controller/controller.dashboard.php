<?php
session_start();
include 'controller.model_links.php';

if(isset($_SESSION['user']['id_role']) && $_SESSION['user']['id_role'] == 1){
    include "../view/view.dashboard_header.php";

    if($_GET['dashboard'] == 'users'){
        include "../view/view.dashboard_users.php";
    }
    if($_GET['dashboard'] == 'books'){
        include "../view/view.dashboard_books.php";
    }

    include "../view/view.dashboard_footer.php";
}