const url = location.href;

$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});

if(url.includes("dashboard=books")){
    let modalBook = document.querySelector("div.modal-book");

    function openModalBook(value, value2, value3, idUser){
        modalBook.style.display = "block";
        modalBook.style.position = "fixed";

        let formBook = document.getElementById("modalOfBook");
        let submitBtn = document.getElementById("submitBook");
        let cancelBtn = document.getElementById("cancelBook");

        let titleBook = document.getElementById("titleBook");
        let dateBook = document.getElementById("dateBook");
        let resumeBook = document.getElementById("resumeBook")
        let urlBook = document.getElementById("urlBook");
        let imgBook = document.getElementById("imgBook");

        if (value == null) {
            submitBtn.addEventListener("click", function(){
                let authorsOptions = $("#listAuthors").select2('data');
                let genresOptions = $("#listGenres").select2('data');

                console.log(genresOptions);
                
                let arrayAuthors = [];
                for(let i=0;i<authorsOptions.length;i++){
                    arrayAuthors.push(authorsOptions[i].id);
                }
                let arrayGenres = [];
                for(let i=0;i<genresOptions.length;i++){
                    arrayGenres.push(genresOptions[i].id); 
                }

                let filePdf = urlBook.files[0];
                let fileImg = imgBook.files[0];
                
                if(filePdf != null && titleBook.value != null && dateBook.value != null){
                    let fileUrl = URL.createObjectURL(filePdf);
                    pdfjsLib.getDocument({ url: fileUrl }).promise.then(function (doc) {
                        let numPages = doc.numPages;

                        let formData = new FormData();
                        formData.append("submitNewBook", submitBtn);
                        formData.append("idUser", idUser);
                        formData.append("numPages", numPages);
                        formData.append("titleBook", titleBook.value);
                        formData.append("dateBook", dateBook.value);
                        formData.append("arrayAuthorsBook", JSON.stringify(arrayAuthors));
                        formData.append('arrayGenresBook', JSON.stringify(arrayGenres));
                        formData.append("dataImg", fileImg);
                        formData.append("dataPdf", filePdf);
                        formData.append("resumeBook", resumeBook.value);

                        $.ajax({  
                            type: "POST",  
                            url: "../controller/controller.dashboard.php", 
                            data: formData,
                            contentType : false,
                            processData : false,
                            success: function(response) {
                                console.log(response);
                            },
                        });
                    })
                    
                }else{
                    let msgError = document.createElement("div");
                    msgError.classList.add('errorMsg');
                    msgError.textContent = "Un livre doit contenir au moins un titre, un pdf et une date.";
                    formBook.append(msgError);
                }
            })
        } else {
            titleBook.value = value.title_book;
            dateBook.value = value.publication_date_book;
            resumeBook.textContent = value.summary_book;
            
            value2 = JSON.parse(value2);
            for (let i = 0; i < value2.length; i++){
                let author = value2[i];
                let lastname = author.lastname;
                let option = document.createElement("option");
                option.value = lastname;
                option.text = lastname;
                option.selected = true; 
                listAuthors.appendChild(option);
            }

            value3 = JSON.parse(value3);
            for (let i = 0; i < value3.length; i++){
                let genre = value3[i].genre;
                let option = document.createElement("option");
                option.value = genre;
                option.text = genre;
                option.selected = true; 
                listGenres.appendChild(option);
            }

            //submitBtn.addEventListener("click", function(){})
        }

        cancelBtn.addEventListener("click", function(){
            location.reload();
        })
    }
}

$.ajax({  
    type: "POST",  
    url: "", 
    data: {dataSend : data},
    success: function(response) {
        console.log(response);
    }
});