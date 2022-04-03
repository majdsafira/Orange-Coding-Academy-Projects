sign_up_buttton = document.getElementById("signUp");
sign_in_buttton = document.getElementById("signIn");
container = document.getElementById("container");
body = document.querySelector("body");

sign_up_buttton.addEventListener("click" , function(){
    container.classList.add("active");
    body.classList.add("active");
})

sign_in_buttton.addEventListener("click" , function(){
    container.classList.remove("active");
    body.classList.remove("active");
})