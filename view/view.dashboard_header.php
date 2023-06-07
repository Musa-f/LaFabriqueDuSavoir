<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="icon" type="image/x-icon" href="https://fmusaeva.com/assets/img/favicon.ico">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?=$path?>/view/css/all.css">
        <link rel="stylesheet" href="<?=$path?>/view/css/responsive.css">
        <link rel="stylesheet" href="<?=$path?>/view/css/dashboard.css">
    </head>

    <body>
        
        <nav>
            <div>
                <h1>Tableau de bord</h1>
                <br>
                <a href='../controller/controller.dashboard.php?dashboard=users'><h3>Utilisateurs</h3></a>
                <a href='../controller/controller.dashboard.php?dashboard=books'><h3>Livres</h3></a>
            </div>
        </nav>

        <div id="content">
        <a href="../controller/controller.pages.php?page=view_homepage" class="back"><i class="bi bi-house-fill"></i></a>
