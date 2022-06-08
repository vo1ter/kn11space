<?php 

session_start(); 
date_default_timezone_set("Europe/Kiev");
if (!isset($_SESSION["ID"])) {
    header("Location: 403");
}

if($_SESSION["PROFILE_STATUS"] == "1") {
    $status = "Підтверджено";
}
else {
    $status = "Не підтверджено";
}

?>
<!DOCTYPE html>
<html lang="en">
<?php readfile("app/html/meta.html"); ?>
<body>
<?php include("app/php/navbar.php"); ?>
<div class="container" style="flex-direction: row;">
    <div class="card" style="margin: 0">
        <p class="title" style="margin-top: 0;">Профіль <?php echo $_SESSION["NAME"]; ?></p>
        <p>
            ID: <?php echo $_SESSION["ID"];
            echo "<br>Статус профілю: ".$status."<br>";
            ?>
            <select name="theme" id="theme">
                <option value="light">Темна</option>
                <option value="dark">Світла</option>
            </select>
            <div class="button" onClick="changeAndSaveTheme(<?php echo "'".$_SESSION["ID"]."'" ?>)" style="margin-top: 10px;">Змінити тему</div>
        </p>
    </div>
</div>
<?php 

include('app/php/footer.php');
if ($status == "Не підтверджено") {
    echo '
    <script>
        $("body").overhang({
            type: "warn",
            message: "УВАГА! Ваш профіль має статус \"не підтверджено\"! Для доступу до всіх функцій сайту вам потрібно звернутися до адміністратора за активацією!",
            duration: 10,
            closeConfirm: true
        });
    </script>';
}

?>
</body>
</html>