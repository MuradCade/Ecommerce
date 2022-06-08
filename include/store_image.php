<?php

require_once('../model/connection.php');

class image extends database
{

    public function insert()
    {
        $digits_needed = 8;

        $random_number = ''; // set up a blank string

        $count = 0;

        while ($count < $digits_needed) {
            $random_digit = mt_rand(0, 4);

            $random_number .= $random_digit;
            $count++;
        }
        if (isset($_POST['submit'])) {
            $filename = $_POST['file'];
            $name = $_POST['pname'];
            $price = $_POST['pprice'];
            $quantity = $_POST['pquan'];
            $desc = $_POST['pdesc'];
            $sql = "insert into product(product_id,product_img,product_name,product_price,product_quantity,product_desc) 
            values('$random_number','$filename','$name','$price','$quantity','$desc')";
            $result = mysqli_query($this->connect, $sql);
            if ($result) {
                header("location:../view/usersPages/product.admin.php?success=item-saved");
                exit();
            } else {
                header("location:../view/usersPages/product.admin.php?error=item-failed-to-save");
                exit();
            }
        }
    }
}

$obj = new image();

$obj->insert();
