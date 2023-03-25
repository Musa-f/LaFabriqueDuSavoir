let nbBooks = document.querySelectorAll(".book");

//Affichage par défaut
let currentScreenWidth = window.innerWidth;
let currentNewValue;
if(currentScreenWidth<=850){
    currentNewValue = 3;
}
else{
    currentNewValue = Math.round(currentScreenWidth / 100) - 6;
}

document.documentElement.style.setProperty('--num-columns', currentNewValue);

let count = 0;
nbBooks.forEach(function(book){
    if(count % currentNewValue == 0){
        let divOpen = "<div class='row'>";
        book.insertAdjacentHTML('beforebegin', divOpen);
    }
    count++
    if(count % currentNewValue == 0 || count == nbBooks.length){
        let divClose = "</div> <div class='shelf'></div>";
        book.insertAdjacentHTML('afterend', divClose);
    }
})

//Affichage en fonction de la taille de l'écran
window.addEventListener('resize', function(event) {
    screenWidth = window.innerWidth;
    let newValue;
    if(screenWidth<=850){
        newValue = 3;
    }
    else{
        newValue = Math.round(screenWidth / 100) - 6;
    }

    document.documentElement.style.setProperty('--num-columns', newValue);

    let rows = document.querySelectorAll('.row');
    rows.forEach(function(row) {
        row.remove();
    });

    let shelves = document.querySelectorAll('.shelf');
    shelves.forEach(function(shelf) {
        shelf.remove();
    });

    let count = 0;
    nbBooks.forEach(function(book){
        if(count % newValue == 0){
            let divOpen = "<div class='row'>";
            book.insertAdjacentHTML('beforebegin', divOpen);
        }
        count++
        if(count % newValue == 0 || count == nbBooks.length){
            let divClose = "</div> <div class='shelf'></div>";
            book.insertAdjacentHTML('afterend', divClose);
        }
    });
});

