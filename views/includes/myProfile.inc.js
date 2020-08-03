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
gsNav.classList.add("dekugreen");

var profileNav = document.querySelector("#editNav");
profileNav.classList.remove("warning");
profileNav.classList.add("dekugreen");

document.title = "My Profile";

//form validation for email
const email = document.getElementById("email");
const form = document.getElementById("form");
const pwd = document.getElementById("pwd");
const repwd = document.getElementById("repwd");
form.addEventListener("submit", function(e){
    let messages = [];
    var correctEmail = true;
    var correctPwd = true;
    const emailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    if (email.value.match(emailFormat)) {
        correctEmail = true;
    } else {
        correctEmail = false;
        email.focus();
        messages.push("Error");
        alert("Please enter a correct email address.")
    }

    //to check the new password
    if (pwd.value != "") {
        if (pwd.value === repwd.value) {
            correctPwd = true;
        } else {
            correctPwd = false;
            repwd.focus();
            messages.push("Error");
            alert("Enter the same password in both spaces.");
        }
    }

    if (messages.length > 0) {
        e.preventDefault();
    }
});
