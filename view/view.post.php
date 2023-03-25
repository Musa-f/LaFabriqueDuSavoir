<div class="post">
    <div class="buttons">
        <div class="back"><a href="../controller/controller.pages.php?page=view.blog"><i class="bi bi-arrow-left"></i> Retour</a></div>

        <?php if(isset($_SESSION['user']['id_role']) && $_SESSION['user']['id_role'] == 1): ?>
            <div class="editions">
                <button class="initialize"><i class="bi bi-pencil-square"></i></button>
                <button class="initialize"><i class="bi bi-x-square"></i></button>
            </div>
        <?php endif?>

    </div>
    <h1><?=$post['title_post']?></h1>
    <h3><?= strftime('%e %B %Y', strtotime($post['date_post']))?></h3>
    <div class="img"><img src="https://fastly.picsum.photos/id/1073/2000/2000.jpg?hmac=UY7GweKvR6phdz9xr8esBZBkk65SVbKE6Sv2iPOANmU" alt=""></div>
    <p><?=nl2br($post['content_post'])?></p>
   
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