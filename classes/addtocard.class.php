<?php
require_once('../model/connection.php');

class addToCard extends database
{
    public function add_item_to_card($id)
    {

        $sql = "select * from product where product_id = '$id'";
        $result = mysqli_query($this->connect, $sql);
        if ($result) {

            $row = mysqli_fetch_assoc($result);
            $product_img = $row['product_img'];
            $product_name = $row['product_name'];
            $product_price = $row['product_price'];
            $product_quantity = $row['product_quantity'];
            $subtotal = $row['product_price'];

            $sql2 = "insert into card(product_id,product_img,product_name,product_price,product_quantity,subtotal)
                    values('$id','$product_img','$product_name','$product_price','$product_quantity','$subtotal')";

            $result2 = mysqli_query($this->connect, $sql2);

            if ($result2) {
                header("location:../index.php?success=item-saved-to-the-card-successfully");
                exit();
            } else {
                header("location:../index.php?error=item-failed-to-save");
                exit();
            }
        } else {

            header("location:../index.php?error=item-id-wasn't-found");
            exit();
        }
    }
}
