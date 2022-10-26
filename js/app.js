const menuIcon = document.querySelector('.toggle-button');
const navbar = document.querySelector('.navbar-links');
const navbarIcon = document.querySelector('#navbar-icon');

menuIcon.addEventListener("click", function(){
    console.log("helo");
    navbar.classList.toggle("active");
    navbarIcon.classList.toggle("fa-times")
});