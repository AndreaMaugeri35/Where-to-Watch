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


var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });


setTimeout(function() {
    document.querySelector("#mygif").classList.add("d-none");
}, 4300);
setTimeout(function() {
    document.querySelector("#mygif").classList.add("fade-out");
}, 3300);

