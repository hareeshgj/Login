<?php
require "config.php";
$name = $_POST["username"];

$check =  "EXISTS(SELECT username FROM `STRTjSSGl1`.`login_details` WHERE username = '$name')";
$condition = $conn->query("SELECT " . $check . ";");
$check_array = $condition->fetch_assoc();
if ($check_array[$check] == 1) {
    echo json_encode("failed");
} else {
    echo json_encode("success");
}
