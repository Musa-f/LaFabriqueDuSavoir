    <form class="search-section" method="post">
        <div>
            <input name="title" type="text" placeholder="Le petit prince..." class="initialize style-input">
        </div>
        <div>
            <img src="<?=$_ENV['URL']?>/assets/img/l-separator.svg" >
        </div>
        <div>
            <select name="author" id="" class="initialize style-input">
                <option value="" disabled selected>Auteur</option>
                <?php foreach($namesAuthors as $nameAuthor):?>
                <option value="<?=$nameAuthor['lastname']?>"><?=$nameAuthor['lastname']?></option>
                <?php endforeach?>
            </select>
            <select name="genre" id="" class="initialize style-input">
                <option value="" disabled selected>Genre</option>
                <?php foreach($namesGenres as $nameGenre):?>
                <option value="<?=$nameGenre['name_genre']?>"><?=$nameGenre['name_genre']?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
            <input type="submit" name="submit" class="initialize style-btn" value="Rechercher">
        </div>
    </form>

    <div class="separator">
        <img src="/<?=$_ENV['URL']?>/assets/img/b-separator.svg" alt="">
    </div>

    <div class="container" id="container">
        <?php if(!isset($filters)):?>
            <?php foreach($books as $book): 
                    $idBook = $book['id_book'];
                    $authors = select_all_authors_book($bdd, $idBook);
                    $names = [];
                    foreach($authors as $author){
                        $names[] = $author['lastname'];
                    }
                    $name = implode("<br>", $names);
            ?>

                <a href='../controller/controller.pages.php?page=view.bookdetails&id=<?=$idBook?>' class='book'>
                    <h3><?=$book['title_book']?></h3>
                    <h4><?=$name?></h4>
                </a>
            <?php endforeach?>

        <?php else:?>
            <?php foreach($filterBooks as $book): 
                    $idBook = $book['id'];
                    $authors = select_all_authors_book($bdd, $idBook);
                    $names = [];
                    foreach($authors as $author){
                        $names[] = $author['lastname'];
                    }
                    $name = implode("<br>", $names);
            ?>
                <a href='../controller/controller.pages.php?page=view.bookdetails&id=<?=$idBook?>' class='book'>
                    <h3><?=$book['title_book']?></h3>
                    <h4><?=$name?></h4>
                </a>
            <?php endforeach?>
        <?php endif?>

    </div>

<?php
    $script = "<script src='" . $_ENV['URL'] ."/view/js/books.js'></script>
                <script src='". $_ENV['URL'] ."/view/js/shelf.js'></script>";
?>

