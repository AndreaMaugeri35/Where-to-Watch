// console.log('ciaone');
let navbar = document.querySelector('.navbar');
const check = navbar.classList;


if (window.matchMedia("(max-width: 991px)").matches){

    navbar.classList.replace("bg-transparent", "bg-dark");
    // navbar.classList.replace('bg-dark');

};

// } else  {

//   navbar.classList.remove('bg-dark');
//   navbar.classList.add('bg-transparent');

// }

// if (window.matchMedia("(min-width: 992px)").matches) {

  
//   if(check.includes('bg-dark')){

//     navbar.classList.remove('bg-dark');
//     navbar.classList.add('bg-transparent');
//   } 

// }


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
    loop: true,
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

