function change_role(e, idUserRole){
    let value_option = e.value;
    $.ajax({  
        type: "POST",  
        url: "../controller/data-sender.php", 
        data: {
            value_option : value_option,
            idUserRole : idUserRole
        },
        success: function(response) {
            console.log(response);
        }
    });
}

function delete_user(e, idUserRole){
    if(confirm("Supprimer l'utilisateur ?")){
        $.ajax({  
            type: "POST",  
            url: "../controller/data-sender.php", 
            data: {deleteUserId : idUserRole},
        })
        $(e.parentNode.parentNode).hide();
    }
}

function delete_review(e, idReview){
    if(confirm("Supprimer la critique ?")){
        $.ajax({  
            type: "POST",  
            url: "../controller/data-sender.php", 
            data: {deleteIdReview : idReview},
        });
        $(e.parentNode.parentNode).hide();
    }
}

function delete_comment(e, idComment){
    if(confirm("Supprimer le commentaire ?")){
        $.ajax({  
            type: "POST",  
            url: "../controller/data-sender.php", 
            data: {deleteIdComment : idComment},
        });
        $(e.parentNode.parentNode).hide();
    }
}

function display_review(e, idReview){
    let icon = e.querySelector('i');
    let statut;
    if(icon.classList.contains('bi-eye')){
        icon.classList.remove('bi-eye');
        icon.classList.add('bi-eye-slash');
        statut = 0;
    }else{
        icon.classList.remove('bi-eye-slash');
        icon.classList.add('bi-eye');
        statut = 1;
    }
    $.ajax({  
        type: "POST",  
        url: "../controller/data-sender.php", 
        data: {
            idReview : idReview,
            visibility : statut
        },
    });
}

// Déroule le congenu des critiques
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