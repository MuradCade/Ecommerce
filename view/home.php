<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
    if ($_SESSION['role'] == 'admin') {
        header("location:usersPages/Admindash.php");
        exit();
    } else if ($_SESSION['role'] == 'customer') {
        header("location:usersPages/Userdash.php");
        exit();
    } else {
        header("location:login.php?error-role-un-specified");
        exit();
    }
} else {
    header("location:login.php?error=enter-your-info-to-login");
    exit();
}
