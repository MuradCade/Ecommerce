<?php
require_once('../model/connection.php');
class dislayCrad extends database
{
    public function cardtable()
    {
        $sql = "select * from card";
        $result = mysqli_query($this->connect, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result))
                if ($row) {
                    $data[] = $row;
                } else {
                    echo " ";
                }
        } else {
            echo "data coudn't be fetched";
        }
        return $data;
    }

    public function deleteItem()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $query = "DELETE FROM card WHERE id = '$id'";
            $result =  mysqli_query($this->connect, $query);
            if ($result) {
                header("location:../view/checkout.php?success=item-deleted-successfully");
                exit();
            } else {
                header("location:../view/checkout.php?error=item-failed-to-delete");
                exit();
            }
        } else {
            header("location:../view/checkout.php?error=product-to-delete-wasn't-found");
            exit();
        }
    }
}
