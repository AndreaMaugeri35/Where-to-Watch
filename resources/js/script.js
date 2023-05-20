// console.log('ciaone');


let btns = document.querySelectorAll('.aCustom');
let cards = document.querySelectorAll('.cardCustom');

cards.forEach ((card, i) => {

    card.addEventListener('mouseenter', ()=>{

        btns[i].classList.remove('d-none');

    })

    card.addEventListener('mouseleave', ()=>{

        btns[i].classList.add('d-none');

    })
    
    console.log(cards);
});



setTimeout(function() {
    document.querySelector("#mygif").classList.add("d-none");
}, 4300);
setTimeout(function() {
    document.querySelector("#mygif").classList.add("fade-out");
}, 3300);

