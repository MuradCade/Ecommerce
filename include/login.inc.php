<?php

include_once('../classes/login.class.php');

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    if (empty($username)) {
        header("location:../view/login.php?error=Empty Username Field");
        exit();
    } else if (empty($pwd)) {
        header("location:../view/login.php?error=Empty Password Field");
        exit();
    } else {
        $userAouth = new checkUserIdentity();
        $userAouth->login($username, $pwd);
    }
} else {
    header("location:../view/login.php");
    exit();
}
