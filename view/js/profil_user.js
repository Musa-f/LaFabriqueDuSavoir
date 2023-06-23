$('button[name="cancel"]').hide();
let inputName = null;
let inputEmail = null;
let inputPswd = null;
let errorsText = document.getElementById("errors");
let successText = document.getElementById("success");
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
let errors = [
    {
        error1: "",
        error2: "",
        error3: ""
    }
];

function edition(e, id){
    let icon = e.querySelector("i");
    let input = e.previousElementSibling;
    currentValueName = input.value;
    currentValueName = input.value;
    if(icon.classList.contains("bi-pencil-square")){
        editStyle(input, icon, "valid");
    }else{
        if(input.type === "text"){
            if(input.value.length < 5){
                error1 = "Le pseudo doit contenir au minimum 5 caractères";
                errors[0].error1 = error1;
                errorsText.innerText = error1;
                successText.innerText = "";
            }else{
                editStyle(input, icon, "edit");
                inputName = input.value;
                errors[0].error1 = "";
                errorsText.innerText = "";
                successText.innerText = "Vos modifications ont été apportées avec succès."
                $.ajax({  
                    type: "POST",  
                    url: "../controller/data-sender.php", 
                    data: {inputName : inputName, idUserChange : id},
                });
            }
        }
        else if(input.type === "email"){
            if(!emailRegex.test(input.value)){
                error2 = "Entrez une adresse mail valide";
                errors[0].error2 = error2;
                errorsText.innerText = error2;
                successText.innerText = "";
            }else{
                editStyle(input, icon, "edit");
                inputEmail = input.value;
                errors[0].error2 = "";
                errorsText.innerText = "";
                successText.innerText = "Vos modifications ont été apportées avec succès."
                $.ajax({  
                    type: "POST",  
                    url: "../controller/data-sender.php", 
                    data: {inputEmail : inputEmail, idUserChange : id},
                });
            }
        }
        else if(input.type === "password"){
            if(input.value.length < 10){
                error3 = "Le mot de passe doit contenir au moins 10 caractères";
                errors[0].error3 = error3;
                errorsText.innerText = error3;
                successText.innerText = "";
            }else{
                editStyle(input, icon, "edit");
                inputPswd = input.value;
                errors[0].error3 = "";
                errorsText.innerText = "";
                successText.innerText = "Vos modifications ont été apportées avec succès."
                $.ajax({  
                    type: "POST",  
                    url: "../controller/data-sender.php", 
                    data: {inputPswd : inputPswd, idUserChange : id},
                });
            }
        }
    }

    let areAllKeysEmpty = true;
    for (let key in errors[0]) {
        if(errors[0][key] !== "") {
            areAllKeysEmpty = false;
            break;
        }
    }

    if(areAllKeysEmpty){
        $('button[name="cancel"]').hide();
    }else{
        $('button[name="cancel"]').show();
    }
}


function editStyle(input, icon, state){
    if(state == "edit"){
        icon.classList.remove("bi-check-square-fill");
        icon.classList.add("bi-pencil-square");
        icon.style.color = "#b17f4a";
        input.classList.remove("validate");
        input.classList.add("disabled-style");
        input.setAttribute('disabled', '');
    }else{
        icon.classList.remove("bi-pencil-square");
        icon.classList.add("bi-check-square-fill");
        icon.style.color = "#2c3638";
        input.classList.remove("disabled-style");
        input.classList.add("validate");
        input.removeAttribute('disabled');
    }
}


function refresh(){
    location.reload();
}