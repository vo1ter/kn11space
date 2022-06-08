<?php 

session_start(); 
if($_SESSION["ID"] != "3") {
    header("Location: 404");
} 

?>
<!DOCTYPE html>
<html lang="en">
<?php readfile("app/html/meta.html"); ?>
<body>
<?php include("app/php/navbar.php"); ?>
<div class="container">
    <div class="card">
        <p class="title">Видалити користувача</p>
        <input class="admin" placeholder="Логін" type="text" id="login"/>
        <div class="button" onClick="deleteUser()">Видалити</div>
    </div>
    <div class="card">
        <p class="title">Створити користувача</p>
        <input class="admin" placeholder="Логін" type="text" id="login1"/>
        <input class="admin" placeholder="Пароль" type="password" id="password"/>
        <div class="button" onClick="addUser()">Створити</div>
    </div>
    <div class="card">
        <p class="title">Активувати профіль</p>
        <input class="admin" placeholder="Логін" type="text" id="login2"/>
        <input class="admin" placeholder="Статус" type="number" id="status"/>
        <div class="button" onClick="changeUser()">Активувати</div>
    </div>
    <div class="card" style="display: flex; flex-direction: column;">
        <p class="title">Редагування розкладу</p>
        День:
        <select id="day">
            <option value="monday">Monday</option>
            <option value="tuesday">Tuesday</option>
            <option value="wednesday">Wednesday</option>
            <option value="thursday">Thursday</option>
            <option value="friday">Friday</option>
        </select>
        Порядковий номер пари:
        <select id="id">
            <option value="monday">Monday</option>
            <option value="tuesday">Tuesday</option>
            <option value="wednesday">Wednesday</option>
            <option value="thursday">Thursday</option>
            <option value="friday">Friday</option>
        </select>
        День:
        <input class="admin" placeholder="Назва пари" type="text"/>
        <input class="admin" placeholder="Кабінет" type="text"/>
        <div class="button" onClick="changeUser()">Activate</div>
    </div>
</div>
<script src="app/js/admin.js"></script>
<?php include("app/php/footer.php"); ?>
</body>
</html>