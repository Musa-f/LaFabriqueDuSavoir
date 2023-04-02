let inputName;
let inputEmail;
let inputPswd;
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

function edition(e){
    let icon = e.querySelector("i");
    let input = e.previousElementSibling;
    console.log(input);
    if(icon.classList.contains("bi-pencil-square")){
        icon.classList.remove("bi-pencil-square");
        icon.classList.add("bi-check-square-fill");
        icon.style.color = "#2c3638";
        input.classList.remove("disabled-style");
        input.classList.add("validate");
        input.removeAttribute('disabled');
    }else{
        if(input.type === "text"){
            if(input.value.length < 5){
                console.log("Le pseudo doit contenir au minimum 5 caractères");
            }else{
                editStyle(input, icon);
            }
        }
        else if(input.type === "email"){
            if(!emailRegex.test(input.value)){
                console.log("entrez une adresse mail valide");
            }
        }
        else if(input.type === "password"){
            if(input.value.length < 10){
                console.log("Le mot de passe doit contenir au moins 10 caractères");
            }
        }
        /*else{
            icon.classList.remove("bi-check-square-fill");
            icon.classList.add("bi-pencil-square");
            icon.style.color = "#b17f4a";
            input.classList.remove("validate");
            input.classList.add("disabled-style");
            input.setAttribute('disabled', '');
        }*/
    }
}

function editStyle(input, icon){
    icon.classList.remove("bi-check-square-fill");
    icon.classList.add("bi-pencil-square");
    icon.style.color = "#b17f4a";
    input.classList.remove("validate");
    input.classList.add("disabled-style");
    input.setAttribute('disabled', '');
}


/*

function submit(){

}*/

function refresh(){
    location.reload();
}


//next : mettre le style dans des fonctions à part