const url = location.href;

if(url.includes("dashboard=books")){
    let modalBook = document.querySelector("div.modal-book");

    function openModalBook(value, value2){
        modalBook.style.display = "block";
        modalBook.style.position = "fixed";

        let submitBtn = document.getElementById("submitBook");
        let defaultAuthor = document.getElementById("defaultAuthor");
        let titleBook = document.getElementById("titleBook");
        let dateBook = document.getElementById("dateBook");
        let resumeBook = document.getElementById("resumeBook")

        if (value == null) {
            console.log("null");
            submitBtn.addEventListener("click", function(){
                console.log(titleBook.value);
                console.log(dateBook.value);
            })
        } else {
            titleBook.value = value.title_book;
            dateBook.value = value.publication_date_book;
            resumeBook.textContent = value.summary_book;
            defaultAuthor.textContent = value2;
        }
    }
}