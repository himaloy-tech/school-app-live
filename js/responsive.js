burger = document.querySelector('.burger')
navbar = document.querySelector('#navbar');
logo = document.querySelector('#logo');
nav_list = document.querySelector('#nav-list');

burger.addEventListener('click', ()=>{
    navbar.classList.toggle('h-nav');
    logo.classList.toggle('v-nav');
    nav_list.classList.toggle('v-nav');
})