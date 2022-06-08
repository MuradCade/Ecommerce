<?php

include('../../model/connection.php');
// admin dashboard
class displayOrder extends database
{
    public function orders($key)
    {
        $sql = "select * from orders";
        $result = mysqli_query($this->connect, $sql);
        while ($row = mysqli_fetch_assoc($result))
            echo $row[$key];
    }
}
