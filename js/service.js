var readmore=document.querySelectorAll(".value-card-box");
for(var i = 0; i < readmore.length-1; i++) {
    readmore[i].addEventListener("click", bindClick(i));
}
function bindClick(i) {
    return function() {
        var service=document.querySelectorAll(".service-head");
        service[i].classList.add("active");
        var cancel=document.querySelectorAll(".cancel-btn .fa");
        cancel[i].addEventListener("click",function(){
            service[i].classList.remove("active");
        });
    };
}