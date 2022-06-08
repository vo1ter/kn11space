<?php http_response_code(404); session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<?php readfile("app/html/meta.html"); ?>
<body>
<?php include("app/php/navbar.php"); ?>
<div class="container">
<p class="title">403!</p>
<p>У вас немає доступу до цієї сторінки!</p><br>
<a class="button" href="/">Повернутися на головну</a>
</div>
<?php
include("app/php/footer.php");
?>
</body>
</html>