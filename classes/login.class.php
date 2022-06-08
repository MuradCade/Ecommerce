<?php

require_once('../model/connection.php');

class checkUserIdentity extends database
{
    public function login($username, $pwd)
    {

        //hashing password in registration form usid md5 example provided below
        // $pwdhash = md5($pwd);

        //created a sql template
        $sql = "SELECT * FROM login where username = ? and pwd = ? ;";

        //create prepared statement
        $stmt = mysqli_stmt_init($this->connect);

        // prepare the prepared statement 
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location:../view/login.php?errors=sql-statement-failed");
            exit();
        } else {
            //bind the parameters to the placeholder
            //means replace ?? to the actual data that we gets from the user
            //param stands for parameter
            mysqli_stmt_bind_param($stmt, "ss", $username, $pwd);
            //run parameters inside database
            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result)  > 0) {
                $row = mysqli_fetch_assoc($result);
                $verified = password_verify($row['pwd'], $pwd);
                if ($row['username'] === $username && $row['pwd'] === $pwd) {
                    session_start();
                    session_regenerate_id();

                    $_SESSION['id'] = $row['userid'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['role'] = $row['role'];


                    header("location:../view/home.php");
                    exit();
                } else {
                    header("Location:../view/login.php?error=incorrect-username-and-password");
                    exit();
                }
            } else {
                header("Location:../view/login.php?error=incorrect-username-and-password");
                exit();
            }
        }
    }
}
