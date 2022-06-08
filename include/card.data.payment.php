<?php
require_once('../model/connection.php');
class cardData extends database
{
    public function card()
    {
        $sql = "select * from card";
        $result = mysqli_query($this->connect, $sql);

        $row = mysqli_fetch_assoc($result);
        $data[]  = $row;
        return $data;
    }
}
