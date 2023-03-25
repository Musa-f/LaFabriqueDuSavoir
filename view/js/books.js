let books = [...document.querySelectorAll('.book')];
let booksEven = [...document.querySelectorAll('.book:nth-child(even)')];
const styleArray = ['style1', 'style2', 'style3'];
const rotationArray = ['rotation-r', 'rotation-l'];


//Application du style aléatoirement
books.forEach(function(book){
    let randomStyle = styleArray[Math.floor(Math.random() * styleArray.length)];
    book.classList.add(randomStyle);
})

//Aplication de la rotation aléatoirement
booksEven.forEach(function(book){
    let randomRotation = rotationArray[Math.floor(Math.random() * 4)];
    book.classList.add(randomRotation);
})



