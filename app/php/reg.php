<?php

include("dbconn.php");
session_start();

if(!$_POST || !$_POST["LOGIN"] || !$_POST["PASS"] || $_POST["LOGIN"] == "" || $_POST["PASS"] == "" || $_POST["LOGIN"] == null || $_POST["PASS"] == null || $_POST["TELEGRAM"] == "" || !$_POST["TELEGRAM"] || $_POST["TELEGRAM"] == null) {
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
    $rowset = $con->query("SELECT * FROM `users`");
    if($row = mysqli_fetch_assoc($rowset)){
        $sql = "SELECT * FROM `users` WHERE `login` = '".$_POST["LOGIN"]."'";
        if($row = mysqli_fetch_array(mysqli_query($con, $sql))) { // true
            echo "false";
        }
        else { // false
            $sql = "INSERT INTO `users`(`login`, `pass`, `telegram`, `status`, `lastip`) VALUES ('".$_POST["LOGIN"]."','".md5($_POST["PASS"])."','".$_POST["TELEGRAM"]."','0','".$_SERVER["REMOTE_ADDR"]."')";
            $_SESSION["ID"] = $row["id"];
            $_SESSION["NAME"] = $_POST["LOGIN"];
            $_SESSION["PROFILE_STATUS"] = "0";
            mysqli_query($con, $sql);
            echo "true";
        }
    }
    mysqli_close($con);
}

?>