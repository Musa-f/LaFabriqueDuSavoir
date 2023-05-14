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
        let urlBook = document.getElementById("urlBook");
        let imgBook = document.getElementById("imgBook");

        if (value == null) {
            submitBtn.addEventListener("click", function(){
                let authorsOptions = $("#listAuthors").select2('data');

                let filePdf = urlBook.files[0];
                let fileImg = imgBook.files[0];
                
                let arrayAuthors = [];
                for(let i=0;i<authorsOptions.length;i++){
                    arrayAuthors.push(authorsOptions[i].id);
                }

                //console.log(arrayAuthors);

                let formData = new FormData();
                formData.append("titleBook", titleBook.value);
                formData.append("dateBook", dateBook.value);
                formData.append("arrayAuthorsBook", JSON.stringify(arrayAuthors));
                formData.append("dataImg", fileImg);
                formData.append("dataPdf", filePdf);
                formData.append("resumeBook", resumeBook.value);

                /*formData.forEach(function(value, key) {
                    console.log(key + ": " + value);
                });*/
                
                /*$.ajax({  
                    type: "POST",  
                    url: "../controller/controller.dashboard.php", 
                    data: formData,
                    contentType : false,
                    processData : false,
                    success: function(response) {
                        console.log(response);
                    },
                });*/
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