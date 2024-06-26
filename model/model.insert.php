<?php

function insert_user($bdd, $name, $email, $pswd){
    $stmt = $bdd->prepare(" INSERT INTO users (name_user, email_user, pswd_user) VALUES
                            (:name, :email, :pswd)
                        ");
    $stmt->execute(array(
        'name' => $name,
        'email' => $email,
        'pswd' => $pswd
    ));
}

function insert_borrowed_book($bdd, $idUser, $idBook){
    $stmt = $bdd->prepare(" INSERT INTO borrowed_books (id_book, id_user) VALUES
                            (:idBook, :idUser)
                        ");
    $stmt->execute(array(
        'idBook'=> $idBook,
        'idUser' => $idUser
    ));
}

function insert_review_book($bdd, $idUser, $idBook, $rating, $title, $content){
    $stmt = $bdd->prepare(" INSERT INTO reviews (id_book, id_user, rating_review, title_review, comment_review) VALUES
                            (:idBook, :idUser, :rating, :title, :content)
                        ");
    $stmt->execute(array(
        'idBook' => $idBook,
        'idUser' => $idUser,
        'rating' => $rating,
        'title' => $title,
        'content' => $content,
    ));
}

function insert_post_comment($bdd, $idUser, $idPost, $comment){
    $stmt = $bdd->prepare(" INSERT INTO comments(id_user, id_post, content_comment) VALUES
                            (:idUser, :idPost, :contentPost)
                        ");
    $stmt->execute(array(
        "idUser"=> $idUser,
        "idPost" => $idPost,
        "contentPost" => $comment
    ));
}

function insert_image($bdd, $id_image, $name_image, $size_image){
    $stmt = $bdd->prepare(" INSERT INTO images(id_image, name_image, size_image) VALUES
                            (:idImg, :nameImg, :sizeImg)
                        ");
    $stmt->execute(array(
        "idImg" => $id_image,
        "nameImg" => $name_image,
        "sizeImg" => $size_image
    ));
}

function insert_post_image($bdd, $id_image, $id_user, $id_post){
    $stmt = $bdd->prepare(" INSERT INTO possess_images(id_user, id_image, id_post) VALUES
                            (:idUser, :idImg, :idPost);
                        ");
    $stmt->execute(array(
        "idUser" => $id_user,
        "idImg" => $id_image,
        "idPost" => $id_post,
    ));
}

function insert_cover_image($bdd, $id_image, $id_user, $id_book){
    $stmt = $bdd->prepare(" INSERT INTO possess_images(id_image, id_user, id_book) VALUES
                            (:idImg, :idUser, :idBook);
                        ");
    $stmt->execute(array(
        "idUser" => $id_user,
        "idImg" => $id_image,
        "idBook" => $id_book,
    ));
}

function insert_post($bdd, $titlePost, $contentPost, $idUser){
    $stmt = $bdd->prepare(" INSERT INTO posts(title_post, content_post, id_user) VALUES
                            (:titlePost, :contentPost, :idUser)
                            
                        ");
    $stmt->execute(array(
        "titlePost" => $titlePost,
        "contentPost" => $contentPost,
        "idUser" => $idUser
    ));
}

function insert_book($bdd, $titleBook, $dateBook, $resumeBook){
    $stmt = $bdd->prepare(" INSERT INTO books(title_book, publication_date_book, summary_book) VALUES
                            (:titleBook, :dateBook, :summaryBook);
                        ");
    $stmt->execute(array(
        "titleBook" => $titleBook,
        "dateBook" => $dateBook,
        "summaryBook" => $resumeBook,
    ));

    $maxIdStmt = $bdd->prepare("SELECT LAST_INSERT_ID() AS maxId");
    $maxIdStmt->execute();
    $row = $maxIdStmt->fetch(PDO::FETCH_ASSOC);
    return $row['maxId'];
}

function insert_author_book($bdd, $idBook, $idAuthor){
    $stmt = $bdd->prepare(" INSERT INTO book_author(id_book, id_author) VALUES
                            (:idBook, :idAuthor)
                        ");
    $stmt->execute(array(
        "idBook" => $idBook,
        "idAuthor" => $idAuthor
    ));
}

function insert_genre_book($bdd, $idBook, $idGenre){
    $stmt = $bdd->prepare(" INSERT INTO book_genre(id_book, id_genre) VALUES 
                            (:idBook, :idGenre)
                        ");
    $stmt->execute(array(
        "idBook" => $idBook,
        "idGenre" => $idGenre
    ));
}



?>