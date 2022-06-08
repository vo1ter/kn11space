<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<?php readfile("app/html/meta.html"); ?>
<body>
<?php include("app/php/navbar.php"); ?>
<div class="container">
    <input class="login" placeholder="Логін" type="text" id="login"/>
    <input class="login" placeholder="Пароль" type="password" id="password"/>
    <input class="login" placeholder="Логін Telegram" type="text" id="telegram"/>
    <div class="button" onClick="reg()">Створити аккаунт</div>
    <p><br>Вже зареєстровані? <a href="login" id="changeColors">Увійти</a>.</p>
</div>
<script src="app/js/login.js"></script>
<?php include('app/php/footer.php') ?>
</body>
</html>