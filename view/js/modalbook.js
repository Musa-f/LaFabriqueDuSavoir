function cardIn(e){
    let cardModal = e.querySelector(".modal-book");
    cardModal.style.display = "block";
}

function cardOut(e){
    let cardModal = e.querySelector(".modal-book");
    cardModal.style.display = "none";
}

function linkDetailsBook(event, id){
    event.stopPropagation();
    window.location.href='../controller/controller.pages.php?page=view.bookdetails&id=' + id;
}

function linkReadBook(id){
    window.location.href='../controller/controller.readbook.php?id=' + id;
}

function readBook(event, e, pagebook, id){
    event.stopPropagation();
    let idUser = parseInt(session);
    let idBook = parseInt(id);
    let pages = parseInt(pagebook);
    $.ajax({  
        type: "POST",  
        url: "../controller/data-sender.php", 
        data: {
            readBook_pages : pages,
            readBook_idUser : idUser,
            readBook_idBook : idBook
        },
    });
    let parent = e.parentNode.parentNode.parentNode.parentNode;
    parent.classList.add("read");
    parent.dispatchEvent(new Event("click"));
}

function deleteBook(e, id){
    event.stopPropagation();
    if (confirm("Êtes-vous sûr de vouloir supprimer ce livre ?")) {
        let parent = e.parentNode.parentNode.parentNode.parentNode;
        parent.style.display = "none";
        let idUser = parseInt(session);
        let idBook = parseInt(id);
        $.ajax({  
            type: "POST",  
            url: "../controller/data-sender.php", 
            data: {
                deleteBook_idBook : idBook,
                deleteBook_idUser : idUser
            },
            success: function(response) {
                console.log(response);
            }
        });
    }
}

