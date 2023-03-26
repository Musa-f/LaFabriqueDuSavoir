<div class="articles">

    <?php if(isset($_SESSION['user']['id_role']) && $_SESSION['user']['id_role'] == 1): ?>
        <a href="../controller/controller.pages.php?page=view.edit&id=0" class="write"><button class="initialize style-btn">Ecrire un article</button></a>
    <?php endif?>
    
    <?php
        $posts = select_posts($bdd);
        foreach($posts as $post):
    ?>
    <div class="article">
        <h2><?=$post['title_post']?></h2>
        <h3><?=$post['date_post']?></h3>
        <hr>
        <p><?php echo substr($post['content_post'], 0, 400)."..."?></p>
        <hr>
        <a href="../controller/controller.pages.php?page=view.post&id=<?=$post['id_post']?>"><button class="initialize">Poursuivre la lecture</button></a>
    </div>
    <?php endforeach ?>
</div>

