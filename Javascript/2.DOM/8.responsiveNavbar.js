let hamburgerMenu = document.querySelector('.hamburgerMenu');
let defaultMenu = document.querySelector('.defaultMenu');
hamburgerMenu.addEventListener('click', function(e){
    hamburgerMenu.classList.toggle('spanJS');
    defaultMenu.classList.toggle('ulJS');
});