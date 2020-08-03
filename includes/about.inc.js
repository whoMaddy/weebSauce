var navbar = document.querySelector("div.navbar");
navbar.classList.remove("transparentColor");
navbar.classList.add("danger");

var homeNav = document.querySelector("#homeNav");
homeNav.classList.remove("active");

var contactNav = document.querySelector("#aboutNav");
contactNav.classList.add("active");

var gsNav = document.querySelector("#gsNav");
gsNav.classList.remove("warning");
gsNav.classList.add("transparentColor");

var gsNav = document.querySelector("#logout");
gsNav.classList.remove("danger");
gsNav.classList.add("transparentColor");

var profileNav = document.querySelector("#editNav");
profileNav.classList.remove("warning");
profileNav.classList.add("transparentColor");

document.title = "About";

function scrollDown() {
    var firstService = document.querySelector("#whoPart");
        firstService.scrollIntoView();
}
