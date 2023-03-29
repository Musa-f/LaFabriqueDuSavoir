<div class="post">
    <div class="buttons">
        <div class="back"><a href="../controller/controller.pages.php?page=view.blog"><i class="bi bi-arrow-left"></i> Retour</a></div>

        <?php if(isset($_SESSION['user']['id_role']) && $_SESSION['user']['id_role'] == 1): ?>
            <div class="editions">
                <a href="../controller/controller.pages.php?page=view.edit&id=<?=$post['id_post']?>">
                    <button class="initialize"><i class="bi bi-pencil-square"></i></button>
                </a>
                <a href="">
                    <button class="initialize"><i class="bi bi-x-square"></i></button>
                </a>
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
    <?php if($existComment): ?>
        <?php foreach($comments as $comment):?>
        <div class="comment">
            <div class="details-comment">
                <h3>@<?=$comment['username']?></h3>
                <p><?=$comment['date']?></p>
            </div>
            <div class="content"><?=$comment['comment']?></div>
        </div>
        <?php endforeach?>
    <?php else: ?>
        <p class="empty-space">Pas de commentaire sous ce post. Soyez le premier !</p>
    <?php endif ?>
</div>


<div class="post-comment">
    <h2>Poster un commentaire</h2>
    <?php if(isset($msg)): ?>
        <p class="msg"><?=$msg?></p>
    <?php endif?>
    <form method="post">
        <div>
            <textarea name="comment" id="" cols="30" rows="10" placeholder="Votre commentaire..."></textarea>
        </div>
        <div>
            <input type="submit" name="submit" value="Envoyer" class="initialize style-btn">
        </div>
    </form>
</div>