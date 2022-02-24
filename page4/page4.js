let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');


menu.addEventListener('click', () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
});

function jsredir() {
    window.location.href = "C:\Users\AFRI\web-project\homepage\index.html";
  }
  