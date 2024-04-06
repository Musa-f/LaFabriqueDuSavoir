<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>La Fabrique du Savoir</title>
        <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="<?=$_ENV['URL']?>/view/css/all.css">
        <link rel="stylesheet" href="<?=$_ENV['URL']?>/view/css/homepage.css">
        <link rel="stylesheet" href="<?=$_ENV['URL']?>/view/css/books.css">
        <?php if(isset($style)){
            echo "<link rel='stylesheet' href='". $_ENV['URL'] ."/view/css/$style.css'>";
        }?>
        <link rel="stylesheet" href="<?=$_ENV['URL']?>/view/css/responsive.css">
    </head>

    <body data-editor="ClassicEditor" data-collaboration="false" data-revision-history="false">
        <header>

            <?php if(isset($_SESSION['user']['id_role']) && $_SESSION['user']['id_role'] == 1):?>
                <div class='box-dashboard'>
                    <a href='../controller/controller.dashboard.php?dashboard=users' class='initialize dashboard'>
                        <i class='bi bi-columns-gap'></i>
                    </a>
                </div>
            <?php endif?>
            
            <a href="../controller/controller.pages.php?page=view.homepage">
                <img src="<?=$_ENV['URL']?>/assets/img/header.svg" alt="" class="header-svg">
            </a>
            
            <nav>
                <ul class="nav-list">
                <?php if(!isset($_SESSION['user'])): ?>
                    <li><a href='../controller/controller.pages.php?page=view.blog'>BLOG</a></li>
                    <li class='nav-separator'><i class='bi bi-dot'></i></li>
                    <li><a href='../controller/controller.pages.php?page=view.connection'>CONNEXION</a></li>
                    <li class='nav-separator'><i class='bi bi-dot'></i></li>
                    <li><a href='../controller/controller.pages.php?page=view.registration'>INSCRIPTION</a></li>
                <?php endif ?>
                    
                <?php if(isset($_SESSION['user'])):?>
                            <li><a href='../controller/controller.pages.php?page=view.mylibrary'>MES LIVRES</a></li>
                            <li class='nav-separator'><i class='bi bi-dot'></i></li>
                            <li><a href='../controller/controller.pages.php?page=view.profil'>PROFIL</a></li>
                            <li class='nav-separator'><i class='bi bi-dot'></i></li>
                            <li><a href='../controller/controller.pages.php?page=view.blog'>BLOG</a></li>
                            <li class='nav-separator'><i class='bi bi-dot'></i></li>
                            <li><a href='../controller/controller.logout.php'>DECONNEXION</a></li>
                    <?php endif ?>
                </ul>
            </nav>
        </header>

        <main>