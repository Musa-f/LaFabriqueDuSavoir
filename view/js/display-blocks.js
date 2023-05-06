let buttons = document.querySelectorAll("a.menu-btn");
let blocks = document.querySelectorAll("div.content-block");
let currentUrl = location.href;

buttons.forEach(function(button){
    button.addEventListener("click", function(){
        let hrefBtn = button.getAttribute("href");

        console.log(currentUrl);

        if(button.href == currentUrl){
            button.style.color = "red";
        }else{
            button.style.color = "white";
        }
        
        blocks.forEach(function(block){
            block.style.display = 'none';
        });

        document.querySelector(hrefBtn).style.display = 'block';
    });
})
