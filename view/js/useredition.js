$('button[name="submit"]').hide();
$('button[name="cancel"]').hide();
let inputName = null;
let inputEmail = null;
let inputPswd = null;
let error1 = null;
let error2 = null;
let error3 = null;
let submitBtn = document.querySelector("button[name='submit']");
let errorsText = document.getElementById("errors");
let successText = document.getElementById("success");
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

function edition(e){
    let icon = e.querySelector("i");
    let input = e.previousElementSibling;
    currentValueName = input.value;
    currentValueName = input.value;
    if(icon.classList.contains("bi-pencil-square")){
        editStyle(input, icon, "valid");
        $('button[name="submit"]').hide();
    }else{
        if(input.type === "text"){
            if(input.value.length < 5){
                error1 = "Le pseudo doit contenir au minimum 5 caractères";
                errorsText.innerText = error1;
                successText.innerText = "";
            }else{
                editStyle(input, icon, "edit");
                inputName = input.value;
                error1 = null;
                errorsText.innerText = "";
            }
        }
        else if(input.type === "email"){
            if(!emailRegex.test(input.value)){
                error2 = "Entrez une adresse mail valide";
                errorsText.innerText = error2;
                successText.innerText = "";
            }else{
                editStyle(input, icon, "edit");
                inputEmail = input.value;
                error2 = null;
                errorsText.innerText = "";
            }
        }
        else if(input.type === "password"){
            if(input.value.length < 10){
                error3 = "Le mot de passe doit contenir au moins 10 caractères";
                errorsText.innerText = error3;
                successText.innerText = "";
            }else{
                editStyle(input, icon, "edit");
                inputPswd = input.value;
                error3 = null;
                errorsText.innerText = "";
            }
        }
        submitDisabled();
    }
    $('button[name="cancel"]').show();
}


function submitDisabled(){
    if(error1 == null && error2 == null && error3 == null){
        $('button[name="submit"]').show();
    }
    else{
        $('button[name="submit"]').hide();
    }
}

function submit(id){
    $('button[name="submit"]').hide();
    successText.innerText = "Vos modifications ont été apportées avec succès."
    if(inputName !== null){
        $.ajax({  
            type: "POST",  
            url: "../controller/data-sender.php", 
            data: {inputName : inputName, idUserChange : id},
        });
    }
    if(inputEmail !== null){
        $.ajax({  
            type: "POST",  
            url: "../controller/data-sender.php", 
            data: {inputEmail : inputEmail, idUserChange : id},
        });
    }
    if(inputPswd !== null){
        $.ajax({  
            type: "POST",  
            url: "../controller/data-sender.php", 
            data: {inputPswd : inputPswd, idUserChange : id},
        });
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