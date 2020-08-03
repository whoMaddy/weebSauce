var navbar = document.querySelector("div.navbar");
navbar.classList.remove("transparentColor");
navbar.classList.add("black");

var homeNav = document.querySelector("#homeNav");
homeNav.classList.remove("active");
homeNav.classList.add("gs");

var homeNav = document.querySelector("#servicesNav");
homeNav.classList.remove("active");
homeNav.classList.add("gs");

var homeNav = document.querySelector("#directorsNav");
homeNav.classList.remove("active");
homeNav.classList.add("gs");

var homeNav = document.querySelector("#aboutNav");
homeNav.classList.remove("active");
homeNav.classList.add("gs");

var homeNav = document.querySelector("#contactNav");
homeNav.classList.remove("active");
homeNav.classList.add("gs");

var navItems = document.querySelector(".logo");
navItems.setAttribute('style', 'color:white');

var gsNav = document.querySelector("#gsNav");
gsNav.classList.remove("warning");
gsNav.classList.add("white");

var signUpPage = document.querySelector(".signUpJumbo");
signUpPage.addEventListener("click", function(){
    window.open("signup.php", "_self");
});

var loginPage = document.querySelector(".loginJumbo");
loginPage.addEventListener("click", function(){
    window.open("login.php", "_self");
});

var profileNav = document.querySelector("#editNav");
profileNav.classList.remove("warning");
profileNav.classList.add("white");

document.title = "Get Started";
