<?php

// admin product page update


require_once('../model/connection.php');
class dislayCrad extends database
{
    public function fetchItem($key)
    {

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $query = "select * FROM product WHERE id = '$id'";
            $result =  mysqli_query($this->connect, $query);
            $row = mysqli_fetch_assoc($result);
            echo $row[$key];
        }
    }

    public function storedata($id)
    {
        if (isset($_POST['submit'])) {
            $product_name = $_POST['pname'];
            $product_price = $_POST['pprice'];
            $product_quantity = $_POST['pquan'];
            $product_desc = $_POST['pdesc'];

            $sql = "update product set product_name = '$product_name', product_price = '$product_price', product_quantity = '$product_quantity',
            product_desc = '$product_desc' where id = '$id'";
            $result = mysqli_query($this->connect, $sql);
            if ($result) {
                header("location:../view/usersPages/product.admin.php?success=item-updated");
                exit();
            } else {
                header("location:../view/usersPages/product.admin.php?error=item-fail-update");
                exit();
            }
        }
    }
}
