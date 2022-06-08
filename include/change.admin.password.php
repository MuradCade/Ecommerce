<?php
session_start();
include('../model/connection.php');
class change_userspassword extends database
{
    public function password()
    {
        if (isset($_POST["submit"])) {
            echo $pwd = $_POST['pwd'];
            $userid = $_SESSION['id'];
            $sql = "update login set pwd = '$pwd' where userid = '$userid'";
            $result = mysqli_query($this->connect, $sql);
            session_regenerate_id();
            if ($result) {
                header("location:../view/home.php?success=password-changed");
                exit();
            } else {
                header("location:../view/home.php?success=password-failed-to-change");
                exit();
            }
        } else {
            header("location:../view/home.php");
            exit();
        }
    }
}


$change_password = new change_userspassword();
$change_password->password();
