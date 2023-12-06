<?php
require "config.php";
$username = $_POST["username"];
$name = $_POST["name"];
$email = $_POST["email"];
$ph_no = $_POST["ph_no"];
$pass = hash('sha256', $_POST["pass"]);
$auth_token = hash("sha256", rand());

$query = "INSERT INTO `STRTjSSGl1`.`login_details` (username,auth_token,password,email,name,ph_no) VALUES ('$username','$auth_token','$pass','$email','$name',$ph_no);";
if ($conn->query($query)) {
    echo json_encode($auth_token);
} else {
    echo json_encode("failed");
}
