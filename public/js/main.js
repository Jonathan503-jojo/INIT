/*=============== SHOW MENU ===============*/
const showMenu = (toggleId, navId) =>{
   const toggle = document.getElementById(toggleId),
         nav = document.getElementById(navId)

   toggle.addEventListener('click', () =>{
       // montrer les menus
       nav.classList.toggle('show-menu')

       // montrer l'icon
       toggle.classList.toggle('show-icon')
   })
}

showMenu('nav-toggle','nav-menu')

let lastScrollTop = 0;
const navbar = document.getElementById('nav');

window.addEventListener('scroll', function() {
    let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

    if (currentScroll > lastScrollTop) {
        // Scrolling vers le bas
        navbar.style.top = "-100px"; // Hauteur de la navbar pour la faire disparaître
    } else {
        // Scrolling vers le haut
        navbar.style.top = "0";
    }
    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Pour ne pas avoir un nombre négatif
});
