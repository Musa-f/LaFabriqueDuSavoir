const url = location.href;

$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});

if(url.includes("dashboard=books")){
    let modalBook = document.querySelector("div.modal-book");

    function openModalBook(value, value2){
        modalBook.style.display = "block";
        modalBook.style.position = "fixed";

        let submitBtn = document.getElementById("submitBook");
        let cancelBtn = document.getElementById("cancelBook");

        let listAuthors = document.getElementById("listAuthors");
        let titleBook = document.getElementById("titleBook");
        let dateBook = document.getElementById("dateBook");
        let resumeBook = document.getElementById("resumeBook")

        if (value == null) {
            submitBtn.addEventListener("click", function(){
                //console.log(titleBook.value);
                //console.log(dateBook.value);
                let authorsOptions = document.querySelectorAll("span.select2-selection__choice__display");
                for(let i=0;i<authorsOptions.length;i++){
                    console.log(authorsOptions[i].textContent);
                }
            })
        } else {
            titleBook.value = value.title_book;
            dateBook.value = value.publication_date_book;
            resumeBook.textContent = value.summary_book;
            
            value2 = JSON.parse(value2);
            for (let i = 0; i < value2.length; i++) {
                let author = value2[i];
                let lastname = author.lastname;
                let option = document.createElement("option");
                option.value = lastname;
                option.text = lastname;
                option.selected = true; 
                listAuthors.appendChild(option);
            }
        }

        cancelBtn.addEventListener("click", function(){
            location.reload();
        })
    }
}