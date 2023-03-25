<div class="info-book">
    <div class="bloc1">
        <div>
            <img src="https://fastly.picsum.photos/id/1082/200/300.jpg?hmac=AaFCHuEst4e0Oy553UCibOtysEKByBAl3XsTR8n4e1c" alt="">
                <?php
                    if($pdfExist){
                        echo "
                            <a href='../controller/controller.readbook.php?id=$id'>
                                <button class='initialize style-btn'>Lire le livre</button>
                            </a>
                            ";
                    }else{
                        echo "<button class='initialize disabled-btn'>Non disponible</button>";
                    }
                ?>
        </div>
        <div>
            <h1><?=$book['title_book']?></h1>
            <h2>Auteur:
                <?php foreach($author as $author){
                    echo $author['firstname']." ";
                    echo $author['lastname'];
                    echo "<br>";
                }
                ?>
            </h2>
            <h3><?="Date de publication: ".$book['date']?></h3>
            <div class="note">
            </div>
            <p class="genres">
                <p>
                    <?php foreach($genre as $genre){
                        echo "<i class='bi bi-tag-fill'></i>";
                        echo $genre['genre']." ";
                    }

                    ?>
                </p>
            </p>
        </div>
    </div>

    <div class="bloc2">
        <div class="resume">
            <h3>Résumé</h3>
            <p class="text">
                <?= nl2br($book["summary_book"])?>
        </div>
        </p>
        <div>
            <?php
                if($pdfExist){
                    if(!isset($_SESSION['user'])){
                        echo "<button class='initialize style-btn' onclick='connection()'>Ajouter à mes livres</button>";
                    }else{
                        $value = $exist_borrowed_book ? "exist" : "null";
                        echo "<button class='initialize style-btn ".$value."' onclick='checkBookExistence(this)'>Ajouter à mes livres</button>";
                    }
                }else{
                    echo "<button class='initialize disabled-btn'>Ajouter à mes livres</button>";
                }
            ?>
        </div>
    </div>
</div>


<div class="comment-space">
    <div class="bulle-bloc"><div class="bulle"></div></div>
    <div class="comment">
        <div class="details-comment">
            <h3>@username</h3>
            <p>01/01/2000</p>
        </div>
        <div class="note"></div>
        <h2>Titre</h2>
        <div class="content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus ipsum fuga ullam ipsam corrupti magnam dolor voluptatibus modi accusantium eos?
        </div>
    </div>
    <!-- Bloc de commentaires à enlever plus tard -->
    <div class="comment">
        <div class="details-comment">
            <h3>@username</h3>
            <p>01/01/2000</p>
        </div>
        <div class="note"></div>
        <h2>Titre</h2>
        <div class="content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus ipsum fuga ullam ipsam corrupti magnam dolor voluptatibus modi accusantium eos?
        </div>
    </div>
    <div class="comment">
        <div class="details-comment">
            <h3>@username</h3>
            <p>01/01/2000</p>
        </div>
        <div class="note"></div>
        <h2>Titre</h2>
        <div class="content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus ipsum fuga ullam ipsam corrupti magnam dolor voluptatibus modi accusantium eos?
        </div>
    </div>
    <!-- FIN DES BLOCS -->
</div>


<div class="post-comment">
    <h2>Poster un commentaire</h2>
    <form action="" method="post">
        <div>
            <label for="">Note</label>
            <div class="note">
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
            </div>
        </div>
        <div>
            <label for="">Titre</label>
            <input type="text">
        </div>
        <div>
            <label for="">Commentaire</label>
            <textarea name="" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <input type="submit" name="submit" value="Envoyer" class="initialize style-btn">
        </div>
    </form>

</div>

<?php
    $script = "<script src='/la_fabrique_du_savoir/view/js/addbook.js'></script>";
?>