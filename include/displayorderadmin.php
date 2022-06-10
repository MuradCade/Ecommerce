<?php

include('../../model/connection.php');
// admin dashboard
class displayOrder extends database
{
    public function orders()
    {
        $sql = "select * from orders";
        $result = mysqli_query($this->connect, $sql);
        while ($row = mysqli_fetch_assoc($result))
            $data[] = $row;

        return $data;
    }
}
