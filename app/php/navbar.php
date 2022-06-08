<div class="navbar">
    <a class="navbar-element" href="/">КН-11.info</a>
    <a class="navbar-element" href="#lessons">Розклад пар</a>
    <a class="navbar-element" href="#rings">Розклад дзвінків</a>
    <a class="navbar-element" href="#fum">ВОМ</a>
    <!-- <a class="navbar-element" href="https://t.me/kn11info_bot">Telegram бот</a> -->
    <?php 
    if ($_SESSION) {
        echo '<div class="user-section right"><a class="navbar-element" href="profile"><span class="iconify" data-icon="uil:user-circle"></span>'.$_SESSION["NAME"].'</a><a class="navbar-element" style="padding:0;" href="app/php/logout.php"><span class="iconify" data-icon="uil:exit"></span></a></div>';
    }
    else {
        echo '<a class="navbar-element right" href="login">Увійти</a>';
    }
    ?>
    <!-- <div class="navbar-element" id="switcher" onClick="changeTheme()">Ніч</div> -->
    <a id="menuBtn"></a>
</div>