<?php
session_start();
include('../model/connection.php');
class change_userspassword extends database
{
    public function password()
    {
        if (isset($_POST["submit"])) {
            $userid = $_SESSION['id'];
            $pwd = $_POST['pwd'];
            $username = $_POST['username'];

            if ($username != "" && $pwd == "") {
                $sql = "update login set username = '$username' where userid = '$userid'";
                $result = mysqli_query($this->connect, $sql);
                $_SESSION['username'] = $username;
            } else if ($username == "" && $pwd != "") {
                $sql = "update login set pwd = '$pwd' where userid = '$userid'";
                $result = mysqli_query($this->connect, $sql);
            } else if ($username != "" && $pwd != "") {
                $sql = "update login set username = '$username', pwd = '$pwd' where userid = '$userid'";
                $result = mysqli_query($this->connect, $sql);
                $_SESSION['username'] = $username;
            } else {
                header("../view/home.php");
            }
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
