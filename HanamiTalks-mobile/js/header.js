const nav = document.querySelector('#nav');
const ul = document.querySelector('#ul');
const buttonToggleNav = document.querySelector('.button--toggleNav');
const svgOpen = document.querySelector('#svgOpen');
const svgClose = document.querySelector('#svgClose');

buttonToggleNav.addEventListener("click", e => {
    if(nav.classList.contains("closed")){
        nav.classList.remove("closed");
        ul.classList.remove("closed");
        svgOpen.classList.add("dispNone");
        svgClose.classList.remove("dispNone");
    } else {
        nav.classList.add("closed");
        ul.classList.add("closed");
        svgOpen.classList.remove("dispNone");
        svgClose.classList.add("dispNone");
    }
})