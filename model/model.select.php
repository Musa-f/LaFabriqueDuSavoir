<?php

function select_all_titles_books($bdd){
    $stmt = $bdd->prepare(" SELECT id_book, title_book, pdf_book, publication_date_book, summary_book FROM books ORDER BY id_book DESC");
    $stmt->execute();
    return $stmt->fetchAll();
}

function select_all_authors_book($bdd, $idBook){
    $stmt = $bdd->prepare(" SELECT authors.last_name_author as lastname, authors.id_author
                            FROM book_author 
                            JOIN authors ON authors.id_author = book_author.id_author 
                            WHERE book_author.id_book = :idBook
                        ");          
    $stmt->execute(array(
        "idBook" => $idBook,
    ));
    return $stmt->fetchAll();
}

function select_all_authors($bdd){
    $stmt = $bdd->prepare(" SELECT * 
                            FROM authors
                        ");
    $stmt->execute();
    return $stmt->fetchAll();
}

function select_all_genres($bdd){
    $stmt = $bdd->prepare(" SELECT * 
                            FROM genres
                        ");
    $stmt->execute();
    return $stmt->fetchAll();
}

function select_data_user($bdd, $input){
    $stmt = $bdd->prepare('SELECT * FROM users WHERE id_user = :id');
    $stmt->execute(array(
        'id' => $input
    ));
    return $stmt->fetch();
}

function select_id_from_name($bdd, $input){
    $stmt = $bdd->prepare('SELECT id_user FROM users WHERE name_user = :name');
    $stmt->execute(array(
        'name' => $input
    ));
    return $stmt->fetchColumn();
}

function select_pswd_from_name($bdd, $input){
    $stmt = $bdd->prepare('SELECT pswd_user FROM users WHERE name_user = :name');
    $stmt->execute(array(
        'name' => $input
    ));
    return $stmt->fetchColumn();
}

function select_exist_username($bdd, $input){
    $stmt = $bdd->prepare("SELECT name_user FROM users WHERE name_user = :input");
    $exec = $stmt->execute(array(
        'input' => $input
    ));
    $stmt = $stmt->fetchColumn();
    return $stmt;
}

function select_exist_email($bdd, $input){
    $stmt = $bdd->prepare("SELECT email_user FROM users WHERE email_user = :input");
    $exec = $stmt->execute(array(
        'input' => $input
    ));
    $stmt = $stmt->fetchColumn();
    return $stmt;
}

function select_exist_borrowed_book($bdd, $idBook, $idUser){
    $stmt = $bdd->prepare("SELECT COUNT(*) FROM borrowed_books WHERE id_book = :idBook AND id_user = :idUser");
    $stmt->execute(array(
        'idBook' => $idBook,
        'idUser' => $idUser
    ));
    $stmt = $stmt->fetchColumn();
    return $stmt>0;
}

function select_user_books($bdd, $idUser){
    $stmt = $bdd->prepare(" SELECT borrowed_books.id_book as id_book, books.title_book as title_book, books.pages_book as pages, borrowed_books.pages_followed as currentpage
                            FROM borrowed_books 
                            JOIN books
                            ON books.id_book = borrowed_books.id_book
                            WHERE borrowed_books.id_user = :idUser 
                            ORDER BY borrowed_books.state;
                            ");
    $stmt->execute(array(
        'idUser' => $idUser
    ));
    return $stmt->fetchAll();
}

function select_user_book($bdd, $idUser, $idBook){
    $stmt = $bdd->prepare(" SELECT borrowed_books.id_book as id_book, books.title_book as title_book, borrowed_books.pages_followed as currentpage, books.pages_book as pages
                            FROM borrowed_books 
                            JOIN books
                            ON books.id_book = borrowed_books.id_book
                            WHERE borrowed_books.id_user = :idUser
                            AND borrowed_books.id_book = :idBook
                            ");
    $stmt->execute(array(
        'idUser' => $idUser,
        'idBook' => $idBook
    ));
    return $stmt->fetch();
}

//Element d'un livre
function select_book_id($bdd, $input){
    $stmt = $bdd->prepare(" SELECT id_book, title_book, YEAR(publication_date_book) as date, summary_book, pdf_book
                            FROM books
                            WHERE id_book = :id
                            ");
    $stmt->execute(array(
        "id"=> $input
    ));
    return $stmt->fetch();
}

function select_author_id($bdd, $input){
    $stmt = $bdd->prepare(" SELECT authors.first_name_author as firstname, authors.last_name_author as lastname
                            FROM books
                            JOIN book_author
                            ON books.id_book = book_author.id_book
                            JOIN authors
                            ON book_author.id_author = authors.id_author
                            WHERE books.id_book = :id
                            ");
    $stmt->execute(array(
        "id"=> $input
    ));
    return $stmt->fetchAll();
}

function select_genre_id($bdd, $input){
    $stmt = $bdd->prepare(" SELECT genres.name_genre as genre
                            FROM books
                            JOIN book_genre
                            ON books.id_book = book_genre.id_book
                            JOIN genres
                            ON book_genre.id_genre = genres.id_genre
                            WHERE books.id_book = :id
                            ");
    $stmt->execute(array(
        "id"=> $input
    ));
    return $stmt->fetchAll();
}
//fin

function select_posts($bdd){
    $stmt = $bdd->prepare(" SELECT * FROM posts");
    $stmt->execute();
    return $stmt->fetchAll();
}


//FONCTIONS DE RECHERCHE
function select_books_where_keys($bdd, $keys){
    $stmt = $bdd->prepare(" SELECT id_book as id, title_book FROM books
                            WHERE title_book LIKE :keys");
    $stmt->execute(array(
        'keys' => "%".$keys."%"
    ));
    return $stmt->fetchAll();
}

function select_books_where_genre($bdd, $genre){
    $stmt = $bdd->prepare(" SELECT books.id_book as id, books.title_book 
                            FROM books
                            JOIN book_genre
                            ON books.id_book = book_genre.id_book
                            JOIN genres
                            ON book_genre.id_genre = genres.id_genre
                            WHERE genres.name_genre = :genre
                            ");
    $stmt->execute(array(
        'genre' => $genre
    ));
    return $stmt->fetchAll();
}

function select_books_where_author($bdd, $author){
    $stmt = $bdd->prepare(" SELECT books.id_book as id, books.title_book 
                            FROM books
                            JOIN book_author
                            ON books.id_book = book_author.id_book
                            JOIN authors
                            ON book_author.id_author = authors.id_author
                            WHERE authors.last_name_author = :author
                        ");
    $stmt->execute(array(
        'author' => $author
    ));
    return $stmt->fetchAll();
}

//FILTRES
function select_all_authors_lastname($bdd){
    $stmt = $bdd->prepare(" SELECT last_name_author as lastname FROM authors");
    $stmt->execute();
    return $stmt->fetchAll();
}

function select_all_genres_names($bdd){
    $stmt = $bdd->prepare(" SELECT id_genre, name_genre FROM genres");
    $stmt->execute();
    return $stmt->fetchAll();
}

function select_post($bdd, $id){
    $stmt = $bdd->prepare(" SELECT *, posts.id_post as id
                            FROM posts 
                            LEFT JOIN possess_images
                            ON posts.id_post = possess_images.id_post
                            WHERE posts.id_post = :id
                        ");
    $stmt->execute(array(
        'id' => $id
    ));
    return $stmt->fetch();
}


function select_exist_review($bdd, $idBook){
    $stmt = $bdd->prepare("SELECT COUNT(*) FROM reviews WHERE id_book = :idBook");
    $stmt->execute(array(
        'idBook' => $idBook,
    ));
    $stmt = $stmt->fetchColumn();
    return $stmt>0;
}

function select_reviews($bdd, $idBook){
    $stmt = $bdd->prepare(" SELECT reviews.title_review as title, reviews.date_review as date, reviews.comment_review as comment, reviews.rating_review as rating, users.name_user as name
                            FROM reviews 
                            JOIN users
                            ON reviews.id_user = users.id_user
                            WHERE id_book = :idBook
                            AND visibility_review = 1
                            ORDER BY id_review DESC");
    $stmt->execute(array(
        'idBook' => $idBook,
    ));
    return $stmt->fetchAll();
}

function select_moy_review_book($bdd, $idBook){
    $stmt = $bdd->prepare(" SELECT SUM(rating_review) / COUNT(rating_review) as moy
                            FROM reviews
                            WHERE id_book = :idBook
                            AND visibility_review = 1");
    $stmt->execute(array(
        "idBook" => $idBook,
    ));
    return $stmt->fetch();
}

function select_exist_comment($bdd, $idPost){
    $stmt = $bdd->prepare("SELECT COUNT(*) FROM comments WHERE id_post = :idPost ");
    $stmt->execute(array(
        "idPost" => $idPost
    ));
    $stmt = $stmt->fetchColumn();
    return $stmt>0;
}

function select_comments($bdd, $idPost){
    $stmt = $bdd->prepare(" SELECT comments.content_comment as comment, comments.date_comment as date, users.name_user as username
                            FROM comments
                            JOIN users
                            ON comments.id_user = users.id_user
                            WHERE comments.id_post = :idPost
                            ");
    $stmt->execute(array(
        "idPost" => $idPost
    ));
    return $stmt->fetchAll();
}

function select_all_users($bdd){
    $stmt = $bdd->prepare(" SELECT * 
                            FROM users
                            JOIN roles 
                            ON users.id_role = roles.id_role
                            WHERE users.id_user != 4
                        ");
    $stmt->execute();
    return $stmt->fetchAll();
}

/*function select_all_comments($bdd){
    $stmt = $bdd->prepare("SELECT * FROM comments");
    $stmt->execute();
    return $stmt->fetchAll();
}*/

function select_all_reviews($bdd){
    $stmt = $bdd->prepare(" SELECT reviews.id_review, reviews.comment_review as comment, users.name_user as username, reviews.id_user, reviews.visibility_review as visible
                            FROM reviews
                            JOIN users
                            ON reviews.id_user = users.id_user
                            ");
    $stmt->execute();
    return $stmt->fetchAll();
}

function select_all_comments($bdd){
    $stmt = $bdd->prepare(" SELECT comments.id_comment, comments.content_comment as comment, users.name_user as username
                            FROM comments
                            JOIN users
                            ON comments.id_user = users.id_user
                        ");
    $stmt->execute();
    return $stmt->fetchAll();
}

function select_all_roles($bdd){
    $stmt = $bdd->prepare(" SELECT *
                            FROM roles
                        ");
    $stmt->execute();
    return $stmt->fetchAll();
}

function select_all_id_img($bdd){
    $stmt = $bdd->prepare("SELECT id_image FROM images");
    $stmt->execute();
    return $stmt->fetchAll();
}

function select_max_id_post($bdd){
    $stmt = $bdd->prepare("SELECT MAX(id_post) FROM posts");
    $stmt->execute();
    return $stmt->fetch();
}

function select_exist_book_cover($bdd, $idBook){
    $stmt = $bdd->prepare("SELECT COUNT(*) FROM possess_images WHERE id_book = :idBook ");
    $stmt->execute(array(
        "idBook" => $idBook
    ));
    $stmt = $stmt->fetchColumn();
    return $stmt>0;
}

function select_cover_from_book($bdd, $idBook){
    $stmt = $bdd->prepare(" SELECT id_image
                            FROM possess_images
                            WHERE id_book = :idBook
                        ");
    $stmt->execute(array(
        "idBook" => $idBook
    ));
    return $stmt->fetch();
}
?>