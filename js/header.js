var mybutton = document.getElementById("myBtn");
let navbar=document.querySelector(".navbar");
let title=document.querySelector("#title");
let images=document.getElementById("images");
let bar=document.querySelector(".fa.fa-bars");
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
        images.src = "../images/logo3.png";
        bar.style.color="#009ffd";
        
    } else {
        mybutton.style.display = "none";
        images.src = "../images/logo1.png";
        bar.style.color="#1f4788";
        
    }
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        navbar.style.background="#1f4788";
        navbar.classList.add("active");
    } else {
        navbar.style.background = "none";
        navbar.classList.remove("active");
    }
}
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
