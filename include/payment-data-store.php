<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;

include("../model/connection.php");

class Payment extends database
{
    public function payment_method()
    {
        if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
            if (isset($_POST['submit'])) {
                $iduser = $_SESSION['id'];
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $country = $_POST['country'];
                $payment = $_POST['payment'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                if ($fname == "") {
                    header("location:../view/payment.php?error-empty-fname-field");
                    exit();
                } else if ($lname == "") {
                    header("location:../view/payment.php?error-empty-lname-field");
                    exit();
                } else if ($country == "") {
                    header("location:../view/payment.php?error-empty-city-field");
                    exit();
                } else if ($phone == "") {
                    header("location:../view/payment.php?error-empty-phone-field");
                    exit();
                } else if ($email == "") {
                    header("location:../view/payment.php?error-empty-email-field");
                    exit();
                } else {
                    $msg = "verified";
                    $status = "Deliver In 2 Days";
                    $payment_status = 'unverified';
                    $product_id = rand(20, 1000);


                    $sql = "insert into payment(payment_id,user_id,f_name,l_name,country,payment_method,payment_status,phone,email)
                    values('$product_id','$iduser','$fname','$lname','$country','$payment','$payment_status','$phone','$email')";
                    $result = mysqli_query($this->connect, $sql);

                    if ($result) {

                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            $sql2 = "insert into orders(product_id,user_id,order_status,payment_method,shipping_status,email)
                            values('$product_id','$iduser','$msg','$payment','$status','$email');";
                            $result2 = mysqli_query($this->connect, $sql2);
                        }
                        header("location:../view/payment.php?success=payment-process-successfully-excuted");
                        exit();
                    } else {
                        header("location:../view/payment.php?error=payment-process-failed");
                        exit();
                    }
                }
            }
        } else {
            header("location:../view/login.php");
            exit();
        }
    }


    public function sendIdemailOforder()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "select * from orders where user_id = '$id'";
            $result = mysqli_query($this->connect, $sql);
            $row = mysqli_fetch_assoc($result);
            if ($row['order_status'] === 'verified') {
                // generate token then check for token
                $token = openssl_random_pseudo_bytes(16);

                //Convert the binary data into hexadecimal representation.
                $token = bin2hex($token);
                // $email = $row['email'];
                // $name = "Product Purches On Greatness Online Shopping";
                // echo "<br>";
                // $subject = "Get 20% discount on your second purches";
                // $body = "Hello Dear Customer Your Product Id Is : $token";




                // require_once "../PHPMailer/PHPMailer.php";
                // require_once "../PHPMailer/SMTP.php";
                // require_once "../PHPMailer/Exception.php";

                // // to send message using php mailer  you should proved your gmail account and password
                // $mail = new PHPMailer();

                // //SMTP Settings
                // $mail->isSMTP();
                // $mail->Host = "smtp.gmail.com";
                // $mail->SMTPAuth = true;
                // $mail->Username = "king12murad@gmail.com";
                // $mail->Password = "mkbhdMKBHD0909";
                // $mail->Port = 465; //587
                // $mail->SMTPSecure = "ssl"; //tls

                // //Email Settings
                // $mail->isHTML(true);
                // $mail->setFrom($email, $name);
                // $mail->addAddress($email);
                // $mail->Subject = $subject;
                // $mail->Body = $body;

                // if ($mail->send()) {

                //     header("location:../view/checkout.php?secuess=emil-send");
                //     exit();
                // } else {
                $sql2 = "update  orders set  e_status = '$token' where user_id = '$id'";
                $result2 = mysqli_query($this->connect, $sql2);
                if ($result2) {
                    header("location:../view/checkout.php?success=Email-successfully-To-send");
                    exit();
                } else {
                    header("location:../view/checkout.php?error=Email-failed-To-send");
                    exit();
                }
                // header("location:../view/checkout.php?error=Email-Failed-To-send");
                // exit();
                // }
            }
        } else {
            echo "failed";
        }
    }
}

$payment = new Payment();
$payment->payment_method();
$payment->sendIdemailOforder();
