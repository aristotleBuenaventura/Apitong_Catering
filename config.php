<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "apitong_login_signup";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>