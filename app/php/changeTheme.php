<?php

include("dbconn.php");

if(!$_POST["MODE"] || !$_POST["ID"] || $_POST["MODE"] == "" || $_POST["ID"] == "" || $_POST["MODE"] == null || $_POST["ID"] == null) {
    echo "fxkc off.<br>";
    $usersIp = $_SERVER['REMOTE_ADDR'];
    $time = time();
    $rowset = $con->query("SELECT * FROM `hackers`");
    if($row = mysqli_fetch_assoc($rowset)){
        $sql = "INSERT INTO `hackers`(`time`, `ip`) VALUES ('".$time."', '".$usersIp."')";
        if(mysqli_query($con, $sql)) {
            exit();
        }
    }
}
else {
    if(mysqli_query($con, "UPDATE `users` SET `theme` = '".$_POST["MODE"]."' WHERE `id` = '".$_POST["ID"]."'")) {
        echo "success";
    }
    else {
        echo "fail";
    }
}