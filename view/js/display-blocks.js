let buttons = document.querySelectorAll("a.menu-btn");
let blocks = document.querySelectorAll("div.content-block");

buttons.forEach(function(button){
    button.addEventListener("click", function(){
        let hrefBtn = button.getAttribute("href");
        
        blocks.forEach(function(block){
            block.style.display = 'none';
        });

        document.querySelector(hrefBtn).style.display = 'block';
    });
})