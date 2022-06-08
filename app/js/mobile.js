var width = screen.width;
var menuBtn = document.getElementById("menuBtn");
var navbar = document.getElementsByClassName("navbar")[0];
var navbarContent = navbar.innerHTML;
var falseBtn = "<a class=\"navbar-element\" id=\"hideMobile\" onClick = \"menuAction()\"><b>Показати меню</b></a>";
var trueBtn = "<a class=\"navbar-element\" id=\"hideMobile\" onClick = \"menuAction()\"><b>Сховати меню</b></a>";
var menuState = false

if (width <= 800) {
    navbar.innerHTML = falseBtn;
}
else {
    menuBtn.remove();
}

function menuAction() {
    if (menuState == false) {
        navbar.innerHTML = navbarContent + trueBtn;
        menuState = true;
    }
    else {
        navbar.innerHTML = falseBtn;
        menuState = false;
    }
}