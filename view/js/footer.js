let footerListI = document.querySelectorAll('i.bi-caret-right');
let footerListA = document.querySelectorAll('a.footer-list-a');

footerListA.forEach(function(a){
    a.addEventListener('mouseenter', function(){
        let i = a.parentNode.querySelector('i.bi-caret-right');
        i.setAttribute("class", "bi bi-caret-right-fill");
    })
    a.addEventListener('mouseout', function(){
        let i = a.parentNode.querySelector('i.bi-caret-right-fill');
        i.setAttribute("class", "bi bi-caret-right");
    })
})
