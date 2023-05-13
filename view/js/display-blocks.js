let buttons = document.querySelectorAll("a.menu-btn");
let blocks = document.querySelectorAll("div.content-block");

buttons.forEach(function(button){
    button.addEventListener("click", function(){
        let hrefBtn = button.getAttribute("href");
        
        blocks.forEach(function(block){
            block.style.display = 'none';
        });

        window.addEventListener('hashchange', function() {
            if(hrefBtn === location.hash){
              button.style.color = "#b17f4a";
            } else {
              button.style.color = "#d5d1c3";
            }
        });

        document.querySelector(hrefBtn).style.display = 'block';
    });
})
