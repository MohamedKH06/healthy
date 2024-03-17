<?php
include '../config/functions.php';
session_destroy();
setcookie('email', '', time() - (86400 * 30));
header("location:login.php");
// redirect('login.php');
?>