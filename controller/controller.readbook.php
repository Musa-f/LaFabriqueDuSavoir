<?php
session_start();
include 'controller.model_links.php';

$id = $_GET["id"];

$book = select_book_id($bdd, $id);
$pdf = $book["pdf_book"];

if(isset($_SESSION['user'])){
    $idUser = $_SESSION['user']['id_user'];
    $idBook = $book['id_book'];
    $existBook = select_exist_borrowed_book($bdd, $idBook, $idUser);

    if($existBook){
        $currentPage = select_user_book($bdd, $idUser, $idBook);
        $currentPage = $currentPage['currentpage'];
    }
}

include "../view/view.readbook.php";
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    const url = "/la_fabrique_du_savoir/assets/pdf/<?=$pdf?>.pdf";
    let progressBar = document.querySelector('div.progress-bar');

    let pdfDoc = null,
    pageNum =   <?php 
                    if(!isset($_SESSION['user'])){
                        echo "1";
                    }
                    else if(!$existBook){
                        echo "1";
                    }
                    else{
                        echo $currentPage;
                    }
                ?>,
    pageIsRendering = false,
    pageNumIsPending = null;
    const scale = 1.3,
    canvas = document.querySelector('#pdf-render'),
    ctx = canvas.getContext('2d');

    //Get document
    pdfjsLib.getDocument(url).promise.then(pdfDoc_ => {
        pdfDoc = pdfDoc_;
        console.log(pdfDoc.getPage);
        document.querySelector('#page-count').textContent = pdfDoc.numPages;
        renderPage(pageNum);
    });

    const renderPage = num => {
        pageIsRendering = true;

        pdfDoc.getPage(num).then(page =>{
            const viewport = page.getViewport({scale});
            canvas.height = viewport.height;
            canvas.width = viewport.width;

            const renderCtx = {
                canvasContext: ctx,
                viewport
            }
            page.render(renderCtx).promise.then(() => {
                pageIsRendering = false;

                if(pageNumIsPending !== null){
                    renderPage(pageNumIsPending);
                    pageNumIsPending = null;
                }
            });
            
            //Output current page
            document.querySelector('#page-num').textContent = num;
            progressBar.textContent = Math.round(num/pdfDoc.numPages*100)+"%";
            progressBar.style.width = Math.round(num/pdfDoc.numPages*100)+"%";
        })

        <?php if(isset($_SESSION['user']) AND $existBook): ?>
            let idUser = parseInt("<?=$idUser?>");
            let idBook = parseInt("<?=$idBook?>") ;
            $.ajax({  
                type: "POST",  
                url: "data-sender.php", 
                data: {
                    pageNum : num,
                    idBook : idBook,
                    idUser : idUser,
                }
            });
        <?php endif ?>
    }

    //Check for pages rendering
    const queueRenderPage = num => {
        if(pageIsRendering){
            pageNumIsPending = num;
        }else{
            renderPage(num);
        }
    }

    //Display previous page
    const showPrevPage = () => {
        if(pageNum <=1){
            return;
        }
        pageNum--;
        queueRenderPage(pageNum);
    }

    //Display next page
    const showNextPage = () => {
        if(pageNum >= pdfDoc.numPages){
            return;
        }
        pageNum++;
        queueRenderPage(pageNum);
    }

    //Button events
    document.querySelector('#prev-page').addEventListener('click', showPrevPage);
    document.querySelector('#next-page').addEventListener('click', showNextPage);
</script>