var navbar = document.querySelector("div.navbar");
navbar.classList.remove("transparentColor");
navbar.classList.add("purpleish");

var homeNav = document.querySelector("#homeNav");
homeNav.classList.remove("active");

var contactNav = document.querySelector("#contactNav");
contactNav.classList.add("active");

var gsNav = document.querySelector("#gsNav");
gsNav.classList.remove("warning");
gsNav.classList.add("reddish");

var profileNav = document.querySelector("#editNav");
profileNav.classList.remove("warning");
profileNav.classList.add("reddish");

document.title = "Contact Us";

//form validation for email
const email = document.getElementById("email");
const form = document.getElementById("form");
form.addEventListener("submit", function(e){
    let messages = [];
    var correctEmail = true;
    const emailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    if (email.value.match(emailFormat)) {
        correctEmail = true;
    } else {
        correctEmail = false;
        email.focus();
        messages.push("Error");
        alert("Please enter a correct email address.")
    }

    if (messages.length > 0) {
        e.preventDefault();
    }
});
