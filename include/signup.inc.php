<?php

include_once('../classes/signup.class.php');

if (isset($_POST['signup'])) {
    function senitaize_input($user)
    {
        $user = trim($user);
        $user = str_replace(' ', '', $user);
        $user = strip_tags($user, "<html>");
        return $user;
    }

    $username = senitaize_input($_POST['username']);
    $pwd = senitaize_input($_POST['pwd']);
    $email = senitaize_input($_POST['email']);

    if (empty($username)) {
        header("location:../view/signup.php?error=Empty Username Field");
        exit();
    } else if (empty($pwd)) {
        header("location:../view/signup.php?error=Empty Password Field");
        exit();
    } else if (empty($email)) {
        header("location:../view/signup.php?error=Empty Email Field");
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("location:../view/signup.php?error=Please Enter Proper Email Address");
        exit();
    } else {
        // $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);
        $userSignup = new Addnewuser();
        $userSignup->Signup($username, $pwd, $email);
        header('location:../view/login.php');
        exit();
    }
} else {
    header("location:../view/signup.php");
    exit();
}
