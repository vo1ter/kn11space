<div class="footer">
    <div class="footer-list">
        <p class="footer-list-title">Мапа сайту</p>
        <a class="footer-element" href="#rings">Розклад дзвінків</a>
        <a class="footer-element" href="#lessons">Розклад пар</a>
        <a class="footer-element" href="#fum">Важливі освітні матеріали (ВОМ)</a>
        <a class="footer-element" href="http://stats.vo1ternotdeveloper.ru:3001/status">Статус сервісів</a>
        <?php
        
        if($_SESSION) {
            if($_SESSION["ID"] == "3") {
                echo '<a class="footer-element" href="admin">Адмін-панель</a>';
            }
            echo '<a class="footer-element" href="app/php/logout">Вийти</a>';
        }
        else {
            echo '<a class="footer-element" href="login">Авторизація</a>';
        }
        
        ?>
        <div class="footer-element">
            <span id="hotlog_counter"></span>
            <span id="hotlog_dyn"></span>
            <script type="text/javascript"> var hot_s = document.createElement('script');
            hot_s.type = 'text/javascript'; hot_s.async = true;
            hot_s.src = 'https://js.hotlog.ru/dcounter/2598616.js';
            hot_d = document.getElementById('hotlog_dyn');
            hot_d.appendChild(hot_s);
            </script>
            <noscript>
            <a href="https://click.hotlog.ru/?2598616" target="_blank">
            <img src="https://hit5.hotlog.ru/cgi-bin/hotlog/count?s=2598616&im=457" border="0"
            title="HotLog" alt="HotLog"></a>
            </noscript>
        </div>
    </div>
    <div class="footer-list">
        <p class="footer-list-title">Контакти</p>
        <a class="footer-element" href="https://vo1ternotdeveloper.ru">Розробник</a>
    </div>
</div>
<script src="app/js/theme.js"></script>
<?php

if(isset($_SESSION["NAME"]) == 1) {
    include_once("dbconn.php");
    $result = $con->query("SELECT * FROM `users` WHERE `id` = '".$_SESSION["ID"]."'");
    if($row = $result->fetch_assoc()) {
        echo "<script> changeTheme(\"".$row["theme"]."\") </script>";
    }
    mysqli_close($con);
    
}

?>
<script src="app/js/mobile.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.13.0-rc.3/jquery-ui.min.js" integrity="sha256-R6eRO29lbCyPGfninb/kjIXeRjMOqY3VWPVk6gMhREk=" crossorigin="anonymous"></script>
<script src="app/js/overhang.min.js"></script>
