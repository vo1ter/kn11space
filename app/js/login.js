var login = document.getElementById("login");
var password = document.getElementById("password");
var telegram = document.getElementById("telegram");

document.addEventListener('keydown', function(event) {
    if(event.key != "Enter") return false
    
    if(document.location.href.includes("registration")) {
        reg()
    }
    else {
        auth()
    }
});

function auth() {
    if(login.value.length == 0 || password.value.length == 0) {
        $("body").overhang({
            type: "error",
            message: "Помилка! Ви ввели некоректні дані для входу!"
        });
    }
    else {
        $.ajax({
            type:'POST',
            url:'app/php/auth.php',
            data:{LOGIN: login.value, PASS: password.value},
            success: function(data) {
                if(data == "true") {
                    document.location.href = "profile";
                }
                else {
                    $("body").overhang({
                        type: "error",
                        message: "Помилка! Ви ввели некоректні дані для входу!"
                    });
                }
            }
        });
    }
    
}

function reg() {
    if(login.value.length == 0 || password.value.length == 0 || telegram.value.length == 0) {
        $("body").overhang({
            type: "error",
            message: "Помилка! Ви ввели некоректні дані для реєстрації!"
        });
    }
    else {
        $.ajax({
            type:'POST',
            url:'app/php/reg.php',
            data:{LOGIN: login.value, PASS: password.value, TELEGRAM: telegram.value},
            success: function(data) {
                if(data == "true") {
                    document.location.href = "profile";
                    $("body").overhang({
                        type: "success",
                        message: "Аккаунт успішно створено!"
                    });
                }
                else {
                    $("body").overhang({
                        type: "error",
                        message: "Помилка! Такий аккаунт вже існує!"
                    });
                }
            }
        });
    }
    
}