<?php

include("dbconn.php");
session_start();

if(!$_POST || !$_POST["LOGIN"] || !$_POST["PASS"] || $_POST["LOGIN"] == "" || $_POST["PASS"] == "" || $_POST["LOGIN"] == null || $_POST["PASS"] == null) {
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
            $sql = "UPDATE `users` SET `lastip`='".$_SERVER['REMOTE_ADDR']."' WHERE `login`='".$_POST["LOGIN"]."'";
            mysqli_query($con, $sql);
            if($row["pass"] == md5($_POST["PASS"])) {
                $_SESSION["ID"] = $row["id"];
                $_SESSION["NAME"] = $row["login"];
                $_SESSION["PROFILE_STATUS"] = $row["status"];
                echo "true";
            }
            else {
                echo "false pass";
            }
        }
        else { // false
            echo "false login";
        }
    }
    mysqli_close($con);
}

?>