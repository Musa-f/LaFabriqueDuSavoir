<?php

$idUser = $_SESSION['user']['id_user'];
$books = select_user_books($bdd, $idUser);
$bookAuthors = array();


foreach($books as $book){
        $idBook = $book['id_book'];
        if($book['pages'] == $book['currentpage']){
                update_state_finish($bdd, $idBook, $idUser);
        }else{
                update_state_inprogress($bdd, $idBook, $idUser);
        }
}

