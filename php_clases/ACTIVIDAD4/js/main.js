const listElem = document.querySelector('.op-navbar');
const opNavbar = document.querySelector('.header');
const navbar = document.querySelector('.nav');


listElem.addEventListener('click',()=>{
    opNavbar.classList.toggle('header-op');
    navbar.classList.toggle('nav-op');
    listElem.classList.toggle('op-navbaron');
});