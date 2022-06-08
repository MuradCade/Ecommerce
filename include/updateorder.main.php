<?php

include('../model/connection.php');

class updateorderform extends database
{
    public function update_order()
    {


        if (isset($_POST['update'])) {
            if (isset($_GET['update'])) {
                $id = $_GET['update'];
                $_SESSION['update'] = $id;
                $mainid = $_SESSION['update'];
                $pid = $_POST['pid'];
                $userid = $_POST['userid'];
                $order = $_POST['orderstatus'];
                $pmethod = $_POST['pmethod'];
                $ship = $_POST['ship'];

                $sql = "update orders set product_id = '$pid', user_id = '$userid', order_status = '$order', payment_method= '$pmethod', shipping_status = '$ship' where id = '$mainid'";
                $result = mysqli_query($this->connect, $sql);
                if ($result) {
                    header("location:../view/usersPages/order.admin.php?success=order-upated-successfully");
                    exit();
                } else {
                    header("location:../view/usersPages/order.admin.php?error=order-failed-to-upated");
                    exit();
                }
            } else {
                echo "failed to update";
            }
        } else {
            echo "failed";
        }
    }
    public function delete_order()
    {
        if (isset($_GET['del'])) {
            $id = $_GET['del'];
            $sql = "delete from orders where id = '$id'";
            $result = mysqli_query($this->connect, $sql);
            if ($result) {
                header("location:../view/usersPages/order.admin.php?success=order-deleted-successfully");
                exit();
            } else {
                header("location:../view/usersPages/order.admin.php?error=order-failed-to-delete");
                exit();
            }
        }
    }
}

$update = new updateorderform();
$update->update_order();
$update->delete_order();
