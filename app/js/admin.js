var login = document.getElementById("login");
var login1 = document.getElementById("login1");
var login2 = document.getElementById("login2");
var password = document.getElementById("password");
var profileStatus = document.getElementById("status");

function deleteUser() {
    if(login.value.length == 0) {
        $("body").overhang({
            type: "error",
            message: "0 in cred"
        });
    }
    $.ajax({
        type:'POST',
        url:'app/php/adminActs.php',
        data:{LOGIN: login.value, ACT: "delete"},
        success: function(data) {
            if(data == "true") {
                $("body").overhang({
                    type: "success",
                    message: "User \"" + login.value + "\" successfully deleted from DB!"
                });
            }
            else {
                $("body").overhang({
                    type: "error",
                    message: "Incorrect user creds"
                });
            }
        }
    });
}

function addUser() {
    if(login1.value.length == 0 || password.value.length == 0) {
        $("body").overhang({
            type: "error",
            message: "0 in cred"
        });
    }
    $.ajax({
        type:'POST',
        url:'app/php/adminActs.php',
        data:{LOGIN: login1.value, PASS: password.value, ACT: "add"},
        success: function(data) {
            if(data == "true") {
                $("body").overhang({
                    type: "success",
                    message: "User \"" + login1.value + "\" successfully added from DB!"
                });
            }
            else {
                $("body").overhang({
                    type: "error",
                    message: "Incorrect user creds"
                });
            }
        }
    });
}

function changeUser() {
    if(login2.value.length == 0 || profileStatus.value.length == 0) {
        $("body").overhang({
            type: "error",
            message: "0 in cred"
        });
    }
    console.log(profileStatus.value);
    $.ajax({
        type:'POST',
        url:'app/php/adminActs.php',
        data:{LOGIN: login2.value, PROFILE_STATUS: profileStatus.value, ACT: "change"},
        success: function(data) {
            if(data == "true") {
                $("body").overhang({
                    type: "success",
                    message: "User \"" + login2.value + "\" successfully activated!"
                });
            }
            else {
                $("body").overhang({
                    type: "error",
                    message: "Incorrect user creds"
                });
            }
        }
    });
}