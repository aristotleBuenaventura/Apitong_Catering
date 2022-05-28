<?php
    include "../Registration/connectionRegistration.php";

    error_reporting(0);

    session_start();
    
    if (isset($_SESSION['username'])) {
        header("Location: index.html");
    }

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        // $role = $_POST['role'];
        $result = getUserByEmail($conn, $email, $password);
        $user = mysqli_fetch_row($result);
        $user = $_POST['username'];
        if ($result->num_rows > 0) {
                    $row = mysqli_fetch_row($result);
                    $_SESSION['username'] = $row['username'];
                    header("Location: ../HomePage/index.html");
                } else {
                    echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
                }
        // $_SESSION['role'] = 'user';
    }
    
    function getUserByEmail($conn, $email, $password) {
        $sql = "SELECT * FROM registration WHERE email='$email' AND password= '$password'";
        return mysqli_query($conn, $sql);
    }

    include '../Login/login.html';

  

?>