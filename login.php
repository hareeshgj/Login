<?php
require "config.php";
$username = $_POST["username"];
$pass = hash('sha256', $_POST["pass"]);

$check =  "EXISTS(SELECT username FROM `STRTjSSGl1`.`login_details` WHERE username = '$username' or email='$username' or ph_no='$username')";
$condition = $conn->query("SELECT " . $check . ";");
$check_array = $condition->fetch_assoc();
if ($check_array[$check] == 1) {
    $check =  "SELECT username,password FROM `STRTjSSGl1`.`login_details` WHERE username = '$username' or email='$username' or ph_no='$username'";
    $tab = $conn->query($check);
    $row = mysqli_fetch_assoc($tab);
    if ($row['password'] === $pass) {
        $user = $row['username'];
        $auth_token = hash("sha256", rand());
        $updt = "UPDATE `STRTjSSGl1`.`login_details` SET `auth_token` = '$auth_token' WHERE (`username` = '$user');";
        $conn->query($updt);
        echo json_encode($auth_token);
    } else {
        echo json_encode("failed");
    }
} else {
    echo json_encode("false");
}
