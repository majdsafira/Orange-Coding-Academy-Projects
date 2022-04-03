sign_up_buttton = document.getElementById("signUp");
sign_in_buttton = document.getElementById("signIn");
container = document.getElementById("container");
body = document.querySelector("body");

sign_up_buttton.addEventListener("click" , function(){  
    if(getWidth()> 768){
        container.classList.add("active");
        body.classList.add("active");
        }else{
            document.getElementsByClassName("sign-in-container")[0].classList.add("active-media");
            document.getElementsByClassName("overlay-container")[0].classList.add("active-media");
            document.getElementsByClassName("overlay")[0].classList.add("active-media");
            document.getElementsByClassName("form-container")[0].classList.add("active-media");
            document.getElementsByClassName("sign-up-container")[0].classList.add("active-media");

        }

})

sign_in_buttton.addEventListener("click" , function(){
    if(getWidth() > 768){
    container.classList.remove("active");
    body.classList.remove("active");
    }else{
        document.getElementsByClassName("sign-in-container")[0].classList.remove("active-media");
            document.getElementsByClassName("overlay-container")[0].classList.remove("active-media");
            document.getElementsByClassName("overlay")[0].classList.remove("active-media");
            document.getElementsByClassName("form-container")[0].classList.remove("active-media");
            document.getElementsByClassName("sign-up-container")[0].classList.remove("active-media");
    }
})


function getWidth() {
    return Math.max(
      document.body.scrollWidth,
      document.documentElement.scrollWidth,
      document.body.offsetWidth,
      document.documentElement.offsetWidth,
      document.documentElement.clientWidth
    );
  }
