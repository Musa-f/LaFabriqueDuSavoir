const url = location.href;

if(url.includes("dashboard=books")){
    let btnAddBooks = document.getElementById("btn-modal-add-livres");
    let modalAddbooks = document.querySelector("div.modal-add-livres");

    btnAddBooks.addEventListener("click", function(){
        modalAddbooks.style.display = "block";
        modalAddbooks.style.position = "fixed";
    })
}


if(url.includes("dashboard=users")){
    let reviews = document.querySelectorAll(".reviews");

    reviews.forEach(function(review){
        let text = review.innerText;

        function minText(){
            let minText = text.substr(0, 150);
            review.innerText = minText;
            let buttonShow = document.createElement("span");
            buttonShow.innerText = "...";
            if(text.length>100){
                review.appendChild(buttonShow);
            }
            buttonShow.addEventListener('click', functionShow);
        }
        
        function functionShow(){
            review.innerText = text;
            let buttonHide = document.createElement("button");
            buttonHide.innerText = "Réduire";
            review.appendChild(buttonHide);
            buttonHide.addEventListener('click', functionHide);
        };

        function functionHide(){
            minText();
        }

        minText();
    })
}
