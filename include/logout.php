<?php

session_start();
class logout
{
    public function logout_user()
    {
        session_unset();
        session_destroy();
        header("location:../view/login.php");
        exit();
    }
}

$loguserout = new logout();
$loguserout->logout_user();
