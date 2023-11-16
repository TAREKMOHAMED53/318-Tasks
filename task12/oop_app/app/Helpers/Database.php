<?php

namespace App\Helpers;
use Exception;
use mysqli;

class Database
{
    private $hostname = DB_HOST;
    private $username = DB_USER;
    private $password = DB_PASSWORD;
    private $database = DB_NAME;

    private $conn;

    public function __construct()
    {
        $this->connect();
    }


    public function query(string $query)
    {
       return $this->conn->query($query);
    }   

    private function connect()
    {
        if(!$this->conn) {
            $this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->database);

            if(!$this->conn) {
                throw new Exception('Error During Databse Connection!');
            }
        }
    }

    public function __destruct()
    {
        $this->conn->close();
    }
}

