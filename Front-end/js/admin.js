// Menu toggle
let toggle = document.querySelector('.btn-menu');
let navigation = document.querySelector('.navigation');
let main = document.querySelector('.main');

toggle.addEventListener('click', ()=> {
   navigation.classList.toggle("active");
   main.classList.toggle("active");
})

// Sub menu

function toggleSubMenu(submenuId) {
   var submenu = document.getElementById(submenuId);
   submenu.classList.toggle("show");
 }