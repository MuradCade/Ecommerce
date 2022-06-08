<?php

include('../../model/connection.php');

class displayoder extends database
{
    public function order()
    {
        $id = $_SESSION['id'];
        $sql = "select * from orders where user_id = '$id'";
        $result = mysqli_query($this->connect, $sql);

        $fetch = mysqli_fetch_assoc($result);
        $data[] = $fetch;
        return $data;
    }
}
