<?php
require_once('../model/connection.php');
class Addnewuser extends database
{
    public function Signup($username, $pwd, $email)
    {


        $usersql = "select username from login";
        $result  = mysqli_query($this->connect, $usersql);

        // check if username is taken
        $row = mysqli_fetch_assoc($result);
        if ($row['username'] == $username) {
            header("location:../view/signup.php?error=The Username That You Entered Is AlreadyTaken");
            exit();
        } else {
            $digits_needed = 8;

            $random_number = ''; // set up a blank string

            $count = 0;

            while ($count < $digits_needed) {
                $random_digit = mt_rand(0, 9);

                $random_number .= $random_digit;
                $count++;
            }
            $role = "customer";
            $sql = "INSERT Into login (userid,username,pwd,role,email)value('$random_number','$username','$pwd','$role','$email')";
            $result2  = mysqli_query($this->connect, $sql);
        }
    }
}
