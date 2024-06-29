// ========navbar toggling responsividade no navbar
const navbarShowBtn = document.querySelector('.navbar-show-btn');
const navbarCollapseDiv = document.querySelector('.navbar-collapse');
const  navbarHideBtn = document.querySelector('.navbar-hide-btn');


navbarShowBtn.addEventListener('click', function(){
    navbarCollapseDiv.classList.add('navbar-show');
});

navbarHideBtn.addEventListener('click', function(){
   navbarCollapseDiv.classList.remove('navbar-show');
});
// fim responsividade no navbar

// stoppingall animation and transition
let resizeTimer;

window.addEventListener('resize', () =>{
    document.body.classList.add('resize-animation-stopper');
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
     document.body.classList.remove('resize-animation-stopper');
    }, 400);
});

AOS.init();

// loader inicializacao


