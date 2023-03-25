function connection(){
    window.location.href='../controller/controller.pages.php?page=view.connection'
}

function checkBookExistence(element) {
    if (element.classList.contains('null')) {
        let idUser = parseInt(session);
        idBook = parseInt(idBook);
        $.ajax({  
            type: "POST",  
            url: "../controller/data-sender.php", 
            data: {
                addBook_idUser:idUser, 
                addBook_idBook:idBook
            }
        });
        alert("Le livre est ajouté dans votre bibliothèque !")
        element.classList.replace('null', 'exist');
    } 
    else {
        alert("Le livre est déjà dans votre bibliothèque.")
    }
}