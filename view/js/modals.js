let btnAddLivres = document.getElementById("btn-modal-add-livres");
let modalAddLivres = document.querySelector("div.modal-add-livres");

btnAddLivres.addEventListener("click", function(){
    modalAddLivres.style.display = "block";
    modalAddLivres.style.position = "fixed";
})

