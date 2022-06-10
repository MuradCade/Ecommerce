<?php

session_start();

use MessageBird\Objects\Recipient;

require '../vendor/autoload.php';
include("../model/connection.php");

class Payment extends database
{
    public function payment_method()
    {
        if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
            if (isset($_POST['submit'])) {
                $sql = "select * from card";
                $result = mysqli_query($this->connect, $sql);
                $row = mysqli_fetch_assoc($result);
                $products = $row['product_id'];
                $iduser = $_SESSION['id'];
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $country = $_POST['country'];
                $payment = $_POST['payment'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $streetname = $_POST['street'];
                $zipcode = $_POST['zipcode'];
                $c_number = $_POST['number'];
                $token = openssl_random_pseudo_bytes(16);

                //Convert the binary data into hexadecimal representation.
                $token = bin2hex($token);
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
                } else if ($streetname == "") {
                    header("location:../view/payment.php?error-empty-streetname-field");
                    exit();
                } else if ($zipcode == "") {
                    header("location:../view/payment.php?error-empty-zipcode-field");
                    exit();
                } else {
                    if (isset($_GET['id'])) {
                        $product_id = $_GET['id'];
                        $msg = "pending";
                        $status = "Please Wait Second To Verify Your Order";
                        $payment_status = 'unverified';
                        $product_id = rand(20, 1000);


                        $sql = "insert into payment(payment_id,product_id,user_id,f_name,l_name,country,street_name,zipcode,company_number,payment_method,payment_status,phone,email)
                    values('$product_id','$product_id','$iduser','$fname','$lname','$country','$streetname','$zipcode','$c_number','$payment','$payment_status','$phone','$email')";
                        $result = mysqli_query($this->connect, $sql);

                        if ($result) {

                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                $sql2 = "insert into orders(product_id,user_id,order_status,payment_method,shipping_status,email,e_status)
                            values('$products','$iduser','$msg','$payment','$status','$email','$token');";
                                $result2 = mysqli_query($this->connect, $sql2);


                                if ($result2) {
                                    $sql = "TRUNCATE `ecomerce`.`card";
                                    $result = mysqli_query($this->connect, $sql);
                                    $msg = "Macmiil $fname,$lname Waxad Ka Iibsatay Allab Website Ka Greate Online Shop Fadlan Si aad Ula Socoto Order Kaga 
                                    id geli trackorder page ku taala website kayaga Mahadsanid. id:$token";
                                    $recever = $phone;
                                    $messagebird = new \MessageBird\Client('beZdq1xtcVLk18cOJtlFA0w8A');

                                    $message = new \MessageBird\Objects\Message();
                                    try {
                                        $message->header = "Greatness Online Shop";
                                        $message->originator = "+252633558027";
                                        $message->recipients = [$recever];
                                        $message->body = $msg;
                                        $response = $messagebird->messages->create($message);
                                    } catch (Exception $e) {
                                        echo $e;
                                    }
                                }
                            }
                            header("location:../view/home.php");
                            exit();
                        } else {
                            header("location:../view/payment.php?error=payment-process-failed");
                            exit();
                        }
                    }
                }
            }
        } else {
            header("location:../view/login.php");
            exit();
        }
    }
}

$payment = new Payment();
$payment->payment_method();
