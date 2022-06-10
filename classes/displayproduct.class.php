<?php

require_once('../model/connection.php');

class Display extends database
{
    public function getname($key)
    {
        $sql = "select product_name from product where id = '$key'";
        $result = mysqli_query($this->connect, $sql);
        while ($row = mysqli_fetch_assoc($result))
            echo  $row['product_name'];
    }
    public function getPrice($key)
    {
        $sql = "select product_price from product where id = '$key'";
        $result = mysqli_query($this->connect, $sql);
        while ($row = mysqli_fetch_assoc($result))
            echo "Price : $" . $row['product_price'];
    }
    public function product_one($key)
    {
        $sql = "SELECT * FROM product where id = '$key' limit 1";
        $result = mysqli_query($this->connect, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['product_img'];
        }
    }
    public function product_two($key)
    {
        $sql = "SELECT * FROM product where id = '$key' limit 1";

        $result = mysqli_query($this->connect, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['product_img'];
        }
    }
    public function product_three($key)
    {
        $sql = "SELECT * FROM product where id = '$key' limit 1";

        $result = mysqli_query($this->connect, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['product_img'];
        }
    }
    public function product_four($key)
    {
        $sql = "SELECT * FROM product where id = '$key' limit 1";

        $result = mysqli_query($this->connect, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['product_img'];
        }
    }
    public function product_five($key)
    {
        $sql = "SELECT * FROM product where id = '$key' limit 1";

        $result = mysqli_query($this->connect, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['product_img'];
        }
    }
    public function product_six($key)
    {
        $sql = "SELECT * FROM product where id = '$key' limit 1";

        $result = mysqli_query($this->connect, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['product_img'];
        }
    }
    public function product_seven($key)
    {
        $sql = "SELECT * FROM product where id = '$key' limit 1";

        $result = mysqli_query($this->connect, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['product_img'];
        }
    }
    public function product_eight($key)
    {
        $sql = "SELECT * FROM product where id = '$key' limit 1";

        $result = mysqli_query($this->connect, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['product_img'];
        }
    }


    // get the id of products

    public function getId($id)
    {
        $sql = "select product_id from product where id = '$id'";
        $result = mysqli_query($this->connect, $sql);
        while ($row = mysqli_fetch_assoc($result))
            echo $row['product_id'];
    }
}
