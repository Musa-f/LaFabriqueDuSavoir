function previousPage(){
    history.back();
}

document.addEventListener('DOMContentLoaded', function() {
    let progressBar = document.querySelector('div.progress-bar');
    let pdfDoc = null;
    let pageNum = data.currentPage;
    let pageIsRendering = false;
    let pageNumIsPending = null;
    const scale = 1.3;
    const canvas = document.querySelector('#pdf-render');
    const ctx = canvas.getContext('2d');

    // Collect data transmitted from controller
    const url = data.pdfUrl;
    const existBook = data.existBook;
    const idUser = data.idUser;
    const idBook = data.idBook;

    // Number of pages
    const pageCount = document.querySelector('#page-count');
    pageCount.textContent = '...'; 

    // Render the PDF
    const renderPage = (num) => {
        pageIsRendering = true;

        pdfDoc.getPage(num).then((page) => {
            const viewport = page.getViewport({ scale });
            canvas.height = viewport.height;
            canvas.width = viewport.width;

            const renderContext = {
                canvasContext: ctx,
                viewport
            };

            page.render(renderContext).promise.then(() => {
                pageIsRendering = false;

                if (pageNumIsPending !== null) {
                    renderPage(pageNumIsPending);
                    pageNumIsPending = null;
                }
            });

            // Display the current page
            let inputNumPage = document.querySelector('#page-num');
            inputNumPage.value = num;
            progressBar.textContent = Math.round((num / pdfDoc.numPages) * 100) + '%';
            progressBar.style.width = Math.round((num / pdfDoc.numPages) * 100) + '%';

            inputNumPage.addEventListener('keydown', function(event) {
                if (event.keyCode === 13) {
                    event.preventDefault(); 
                    let enteredPageNum = parseInt(inputNumPage.value);

                    if (enteredPageNum >= 1 && enteredPageNum <= pdfDoc.numPages) {
                        renderPage(enteredPageNum);
                    }else {
                        renderPage(1);
                    }
                }
            })
        });

        // Ajax request if user connected
        if (idUser && existBook) {
            $.ajax({
                type: 'POST',
                url: 'data-sender.php',
                data: {
                    pageNum: num,
                    idBook: idBook,
                    idUser: idUser,
                }
            });
        }
    };

    // Display the previous page
    const showPrevPage = () => {
        if (pageNum <= 1) {
            return;
        }
        pageNum--;
        renderPage(pageNum);
    };
    
    // Display next page
    const showNextPage = () => {
        if (pageNum >= pdfDoc.numPages) {
            return;
        }
        pageNum++;
        renderPage(pageNum);
    };

    document.querySelector('#prev-page').addEventListener('click', showPrevPage);
    document.querySelector('#next-page').addEventListener('click', showNextPage);

    pdfjsLib.getDocument(url).promise.then((pdfDoc_) => {
        pdfDoc = pdfDoc_;
        pageCount.textContent = pdfDoc.numPages;
        renderPage(pageNum);
    });
});
