<?php

// admin product page

use dislayCrad as GlobalDislayCrad;

require_once('../model/connection.php');
class dislayCrad extends database
{
    public function deleteItem()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $query = "DELETE FROM product WHERE id = '$id'";
            $result =  mysqli_query($this->connect, $query);
            if ($result) {
                header("location:../view/usersPages/product.admin.php?success=item-deleted-successfully");
                exit();
            } else {
                header("location:../view/usersPages/product.admin.php??error=item-failed-to-delete");
                exit();
            }
        } else {
            header("location:../view/usersPages/product.admin.php??error=product-to-delete-wasn't-found");
            exit();
        }
    }
}

$delete = new GlobalDislayCrad();
$delete->deleteItem();
