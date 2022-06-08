const theme = window.matchMedia("(prefers-color-scheme: dark)");
var mode = "light";
// var buttonClicks = 0;
var aTags = document.querySelectorAll("#changeColors");
var buttons = document.querySelectorAll('.button');

if (theme.matches) { // dark
    document.body.style.backgroundColor = "black";
    document.body.style.color = "white";
    document.getElementsByClassName("navbar")[0].style.borderBottom = "1px white solid"
    document.getElementsByClassName("footer")[0].style.borderTop = "1px white solid"
    document.getEle
    for(var i = 0; i < aTags.length; i++) {
        aTags[i].style.color = "lightblue";
    }
    mode = "dark";
}
else { // light
    for(var i = 0; i < buttons.length; i++) {
        buttons[i].style.backgroundColor = "black";
        buttons[i].style.color = "white";
    }
    document.getElementById("switcher").innerHTML = "День"
}

function changeTheme(mode) {
    if(mode == "dark"){
        document.body.style.backgroundColor = "white"
        document.body.style.color = "black";
        document.getElementsByClassName("navbar")[0].style.borderBottom = "1px black solid";
        document.getElementsByClassName("footer")[0].style.borderTop = "1px black solid";
        for(var i = 0; i < aTags.length; i++) {
            aTags[i].style.color = "blue";
        }
        for(var i = 0; i < buttons.length; i++) {
            buttons[i].style.backgroundColor = "black";
            buttons[i].style.color = "white";
        }
        mode = "light";
    }
    else if(mode == "light") {
        document.body.style.backgroundColor = "black";
        document.body.style.color = "white";
        document.getElementsByClassName("navbar")[0].style.borderBottom = "1px white solid";
        document.getElementsByClassName("footer")[0].style.borderTop = "1px white solid";
        for(var i = 0; i < aTags.length; i++) {
            aTags[i].style.color = "lightblue";
        }
        for(var i = 0; i < buttons.length; i++) {
            buttons[i].style.backgroundColor = "white";
            buttons[i].style.color = "black";
        }
        mode = "dark";
    }
    // if (buttonClicks >= 25) {
    //     document.getElementById("switcher").innerHTML = "Біла людина";
    // }
    // else {
    //     document.getElementById("switcher").innerHTML = "День";
    // }
    // buttonClicks++;
}

function changeAndSaveTheme(userId) {
    let mode = document.getElementById("theme").value;
    $.ajax({
        type: "POST",
        url: 'app/php/changeTheme.php',
        data: {MODE: mode, ID: userId},
        success: function(d){
            if(d == "success") {
                changeTheme(mode);
                $("body").overhang({
                    type: "success",
                    message: "Тему успішно змінено!",
                    duration: 3,
                    closeConfirm: true
                });
            }
        }
    });
}