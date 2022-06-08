<?php

class database
{
    private $hostname = "localhost";
    private $username = "root";
    private $pwd = "";
    private $dbname = "ecomerce";
    public $connect;
    public function __construct()
    {
        $this->connect = new mysqli(
            $this->hostname,
            $this->username,
            $this->pwd,
            $this->dbname
        );
        if (!$this->connect) {
            echo "connection to databse failed";
        }
    }
}
