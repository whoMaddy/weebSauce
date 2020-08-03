var navbar = document.querySelector("div.navbar");
navbar.classList.remove("transparentColor");
navbar.classList.add("greenish");

var homeNav = document.querySelector("#homeNav");
homeNav.classList.remove("active");

var contactNav = document.querySelector("#directorsNav");
contactNav.classList.add("active");

var gsNav = document.querySelector("#gsNav");
gsNav.classList.remove("warning");
gsNav.classList.add("brownish");

var profileNav = document.querySelector("#editNav");
profileNav.classList.remove("warning");
profileNav.classList.add("brownish");

document.title = "Directors";
