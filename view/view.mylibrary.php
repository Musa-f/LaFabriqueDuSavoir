<div class="title">
    <img src="/la_fabrique_du_savoir/assets/img/l-separator.svg" alt="">
    <h2>Ma bibliothèque</h2>
</div>

<div class="container" id="container">
        <?php

            foreach($books as $book):
                $idBook = $book['id_book'];
                $uniqueBook = select_user_book($bdd, $idUser, $idBook);
                $authors = select_all_authors_book($bdd, $idBook);
                $names = [];
                foreach($authors as $author){
                    $names[] = $author['lastname'];
                }
                $name = implode("<br>", $names);
        ?>

                <div onclick="linkReadBook(<?=$idBook?>)" class='book parent <?php if($uniqueBook['currentpage'] == $uniqueBook['pages']){echo "read";}?>' onmouseenter="cardIn(this)" onmouseleave="cardOut(this)">
                    <h3><?=$book['title_book']?></h3>
                    <h4><?=$name?></h4>
                    <span class="modal-book">
                        <div class="triangle"></div>
                        <div class="modal-content">
                            <li>
                                <i class="bi bi-book-half"></i>
                                <?=$uniqueBook['currentpage']?>/<?=$uniqueBook['pages']?>
                            </li>
                            <li>
                                <i class="bi bi-card-heading"></i>
                                <button class="initialize" onclick="linkDetailsBook(event, <?=$idBook?>)">Fiche du livre</button>
                            </li>
                            <li>
                                <i class="bi bi-bookmark-check-fill"></i>
                                <button class="initialize" onclick="readBook(event, this, <?=$uniqueBook['pages']?>, <?=$idBook?>)">Lu</button>
                            </li>
                            <li>
                                <i class="bi bi-trash3-fill"></i>
                                <button class="initialize" onclick="deleteBook(this, <?=$idBook?>)">Supprimer</button>
                            </li>
                        </div>
                    </span>
                </div>

        <?php
            endforeach
        ?>
    </div>


<?php
    $script = " <script src='/la_fabrique_du_savoir/view/js/books.js'></script>
                <script src='/la_fabrique_du_savoir/view/js/shelf.js'></script>
                <script src='/la_fabrique_du_savoir/view/js/modalbook.js'></script>
                ";
?>