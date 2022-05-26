<?php
//$link=mysqli_connect("localhost", "root", "") or die (mysqli_error($link));
//mysqli_select_db($link,"login_register") or die (mysqli_error($link));


$server = "localhost";
$user = "root";
$pass = "";
$database = "apitong";

$conn1 = mysqli_connect($server, $user, $pass, $database);

if (!$conn1) {
    die("<script>alert('Connection Failed.')</script>");
}

include '../Inquiry/Inquiry.html';
?>