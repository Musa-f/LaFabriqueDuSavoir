let titleInput = document.getElementById("titleinput");
let messageInput = document.getElementById("messageinput");
let response = document.getElementById("responsemessage");
let icones = document.querySelectorAll("i.rating");
let note;

function rating(e){
    let idRating = e.id;
    for(let i = 0; i < icones.length; i++) {
        if(icones[i] !== e) {
          icones[i].classList.remove("bi-star-fill");
          icones[i].classList.add("bi-star");
        }
    }
    e.classList.replace("bi-star","bi-star-fill");
    note = parseInt(idRating);
}

document.getElementById("submit-btn").addEventListener("click", function() {

  if(session == "null"){
    response.innerHTML = "<a href='../controller/controller.pages.php?page=view.connection'>Identifiez-vous</a> pour laisser un commentaire !";
  }else{
    let title = titleInput.value;
    let message = messageInput.value;
    if(title == "" || message == "" || note == undefined){
      response.innerText = "Veuillez remplir tous les champs";
      response.classList.add("errorMsg");
    }else{
      response.innerText = "Votre commentaire a bien été envoyé";
      response.classList.add("successMsg");
      $.ajax({  
          type: "POST",  
          url: "../controller/data-sender.php", 
          data: {
            idBook : idBook,
            idUser : session,
            rating : note,
            title : title,
            message : message,

          }
      });
    }
  }

});

