const url = location.href;

if(url.includes("dashboard=books")){
    let modalBook = document.querySelector("div.modal-book");

    function openModalBook(value){
        modalBook.style.display = "block";
        modalBook.style.position = "fixed";

        let titleBook = document.getElementById("titleBook");
        let dateBook = document.getElementById("dateBook");
        let resumeBook = document.getElementById("resumeBook")

        if (value == null) {
            console.log("null");
        } else if (typeof value === 'object') {
            titleBook.value = value.title_book;
            dateBook.value = value.publication_date_book;
            resumeBook.textContent = value.summary_book;
        } else {
            const book = JSON.parse(value);
            console.log(book);
            titleBook.value = book.title_book;
            dateBook.value = book.publication_date_book;
            resumeBook.textContent = book.summary_book;
        
        }
    }
}