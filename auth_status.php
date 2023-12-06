<?php
require "config.php";

$username = $_POST["username"];
$auth_token = $_POST["auth_token"];
$sql = "SELECT `username`,`auth_token`,`email`,`name`,`ph_no` from `STRTjSSGl1`.`login_details` WHERE username = '$username'";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
$validAuthToken = $row["auth_token"];

if ($auth_token === $validAuthToken) {
    echo json_encode($row);
} else {
    echo json_encode("false");
}
$conn->close();
