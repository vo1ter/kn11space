<?php 

session_start(); 
if(isset($_SESSION["ID"])) {
    header("Location: https://kn11.space/");
}

?>
<!DOCTYPE html>
<html lang="en">
<?php readfile("app/html/meta.html"); ?>
<body>
<?php include("app/php/navbar.php"); ?>
<div class="container">
    <input class="login" placeholder="Логін" type="text" id="login"/>
    <input class="login" placeholder="Пароль" type="password" id="password"/>
    <div class="button" onClick="auth()">Увійти</div>
    <p><br>Ще не зареєстровані? <a href="registration" id="changeColors">Годі чекати!</a></p>
</div>
<script src="app/js/login.js"></script>
<?php include('app/php/footer.php') ?>
</body>
</html>