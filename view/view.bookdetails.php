<div class="info-book">
    <div class="bloc1">
        <div>
            <div class="cover-book">
            <?php
                $existCover = select_exist_book_cover($bdd, $id);
                if($existCover){
                    $cover = select_cover_from_book($bdd, $id)[0];
                    echo "<img src='../assets/uploads/{$cover}'>";
                }else{
                    echo "<img src='https://fastly.picsum.photos/id/1082/200/300.jpg?hmac=AaFCHuEst4e0Oy553UCibOtysEKByBAl3XsTR8n4e1c'>";
                }
                ?>
            </div>
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
            <h2><i class="bi bi-vector-pen"></i> <span class="writtenby">Ecrit par:</span>
                <br>
                <?php for($i=0;$i<sizeof($author);$i++){
                    echo $author[$i]['firstname']." ";
                    echo $author[$i]['lastname'];
                    if(!empty($author[$i+1])){
                        echo ", ";
                    }
                }
                ?>
            </h2>
            <h3><?="Date de publication: ".$book['date']?></h3>
            <div class="note">
                <?php for($i=1; $i<=5; $i++):?>
                    <i class="bi <?= ($moy_review>=$i) ? "bi-star-fill" : "bi-star"; ?>"></i>
                <?php endfor?>
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
    <?php if($exist_reviews):?>
        <?php foreach($reviews as $review):?>
        <div class="comment">
            <div class="details-comment">
                <h3>@<?=$review["name"]?></h3>
                <p><?=$review["date"]?></p>
            </div>
            <div>
                <?php for($i=1; $i<=5; $i++):?>
                    <i class="bi <?= ($review["rating"]>=$i) ? "bi-star-fill" : "bi-star"; ?>"></i>
                <?php endfor?>
            </div>
            <div class="note"></div>
            <h2><?=$review["title"]?></h2>
            <div class="content"><?=$review["comment"]?></div>
        </div>
        <?php endforeach?>
    <?php else:?>
     <p class="empty-space">Pas de critique pour ce livre. Soyez le premier !</p>
    <?php endif?>
</div>


<div class="post-comment">
    <h2>Poster un commentaire</h2>
    <p id="responsemessage"></p>
    <form>
        <div>
            <label>Note</label>
            <div class="note">
                <i class="bi bi-star rating" onclick="rating(this)" id="1"></i>
                <i class="bi bi-star rating" onclick="rating(this)" id="2"></i>
                <i class="bi bi-star rating" onclick="rating(this)" id="3"></i>
                <i class="bi bi-star rating" onclick="rating(this)" id="4"></i>
                <i class="bi bi-star rating" onclick="rating(this)" id="5"></i>
            </div>
        </div>
        <div>
            <label>Titre</label>
            <input type="text" id="titleinput">
        </div>
        <div>
            <label>Commentaire</label>
            <textarea cols="30" rows="10" id="messageinput"></textarea>
        </div>
        <div>
            <input id="submit-btn" value="Envoyer" class="initialize style-btn">
        </div>
    </form>
</div>

<?php
    $script =   "<script src='/la_fabrique_du_savoir/view/js/ratings.js'></script>
                <script src='/la_fabrique_du_savoir/view/js/addbook.js'></script>
                ";
?>

