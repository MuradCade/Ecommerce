<?php


include('../../model/connection.php');

class displayPaymenttable extends database
{
    public function displayPayment()
    {
        $sql = "select * from payment";
        $result = mysqli_query($this->connect, $sql);
        $fetch = mysqli_fetch_assoc($result);
        $data[] = $fetch;
        return $data;
    }
}
