var navbar = document.querySelector("div.navbar");
navbar.classList.remove("transparentColor");
navbar.classList.add("pink");

var homeNav = document.querySelector("#homeNav");
homeNav.classList.remove("active");

var contactNav = document.querySelector("#servicesNav");
contactNav.classList.add("active");

var gsNav = document.querySelector("#gsNav");
gsNav.classList.remove("warning");
gsNav.classList.add("transparentColor");

var profileNav = document.querySelector("#editNav");
profileNav.classList.remove("warning");
profileNav.classList.add("transparentColor");

document.title = "Services";

function scrollDown() {
    var firstService = document.querySelector("#thirdService");
        firstService.scrollIntoView();
}
