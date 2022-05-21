<?php 

session_start();
session_destroy();

header("Location: ../ApitongFoodAndCateringServices/Login/index.php");

?>