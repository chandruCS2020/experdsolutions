var container=document.querySelector(".container-sub");
var email=document.querySelector(".email-notify");
var email_close=document.querySelector(".close");
console.log(email_close);
function show(){
    container.classList.add("show");
    email.classList.remove("hide");
    email.classList.add("show");
    console.log("show");
}
setInterval("show()",45000);
function hide(){
    container.classList.remove("show");
    email.classList.add("hide");
    email.classList.remove("show");
    console.log("hide");
}
setInterval("hide()",90000);
email_close.addEventListener("click", function() {
    email.classList.remove("show");
    email.classList.add("hide");
    container.classList.remove("show");
});