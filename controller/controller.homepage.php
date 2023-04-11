<?php

$books = select_all_titles_books($bdd);
$bookAuthors = array();

$namesAuthors = select_all_authors_lastname($bdd);
$namesGenres = select_all_genres_names($bdd);

if(isset($_POST['submit'])){
    if(isset($_POST['title'])){
        $filters = "";
        $title = $_POST['title'];
        $filterBooks = select_books_where_keys($bdd, $title);
    }
    if(isset($_POST['author'])){
        $author = $_POST['author'];
        $filterBooks = select_books_where_author($bdd, $author);
    }
    if(isset($_POST['genre'])){
        $filters = "";
        $genre = $_POST['genre'];
        $filterBooks = select_books_where_genre($bdd, $genre);
    }
}

