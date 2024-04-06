<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=$book['title_book']?></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=$_ENV['URL']?>/view/css/readbook.css">
    </head>

    <body>
        <button class="btn" onclick="previousPage()"><p class="h5 mt-3">Retour</p></button>

        <span class="page-info m-3">
            Page <input class="inputCurrentPage" id="page-num"> sur <span id="page-count"></span>
        </span>
        
        <div class="book">
            <button class="btn" id="prev-page">〈</button>
            <canvas id="pdf-render"></canvas>
            <button class="btn" id="next-page">〉</button>
        </div>
        
        <div class="centrer">
            <div class="progress m-4 col-5 custom-progress">
                <div class="progress-bar progress-bar-striped custom-striped text-dark" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <script>
            let data = <?php echo json_encode($data); ?>;
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.5.207/pdf.min.js"></script>
        <script src="../view/js/read_pdf.js" type="module"></script>
    </body>
</html>