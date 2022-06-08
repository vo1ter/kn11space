<?php

include("dbconn.php");

if(!$_POST || !$_POST["LOGIN"] || $_POST["LOGIN"] == "" || $_POST["LOGIN"] == null || !$_POST["ACT"] || $_POST["ACT"] == "" || $_POST["ACT"] == null) {
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
    if($_POST["ACT"] == "delete") {
        if ($_POST["LOGIN"] == "root") {
            echo "no.";
        }
        else {
            $rowset = $con->query("SELECT * FROM `users`");
            if($row = mysqli_fetch_assoc($rowset)){
                $sql = "SELECT * FROM `users` WHERE `login` = '".$_POST["LOGIN"]."'";
                if($row = mysqli_fetch_array(mysqli_query($con, $sql))) { // true
                    $sql = "DELETE FROM `users` WHERE `login` = '".$_POST["LOGIN"]."'";
                    mysqli_query($con, $sql);
                    echo "true";
                }
                else { // false
                    echo "false login";
                }
            }
        }
    }
    else if ($_POST["ACT"] == "add") {
        if (!$_POST["PASS"] || $_POST["PASS"] == "" || $_POST["PASS"] == null) {
            echo "fxkc off.";
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
                    echo "user exists";
                }
                else { // false
                    $sql = "INSERT INTO `users`(`login`, `pass`, `telegram`, `status`, `lastip`) VALUES ('".$_POST["LOGIN"]."','".md5($_POST["PASS"])."','none','0','123')";
                    mysqli_query($con, $sql);
                    echo "true";
                }
            }
        }
    }
    else if ($_POST["ACT"] == "change") {
        $rowset = $con->query("SELECT * FROM `users`");
        if($row = mysqli_fetch_assoc($rowset)){
            $sql = "SELECT * FROM `users` WHERE `login` = '".$_POST["LOGIN"]."'";
            if($row = mysqli_fetch_array(mysqli_query($con, $sql))) { // true
                $sql = "UPDATE `users` SET `status` = '".$_POST["PROFILE_STATUS"]."' WHERE `login` = '".$_POST["LOGIN"]."'";
                mysqli_query($con, $sql);
                echo "true";
            }
            else { // false
                echo "false";
            }
        }
    }
    mysqli_close($con);
}

?>