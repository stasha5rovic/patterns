<?php

class DBshort{

    private static $conn = null;
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbName = "tasks123";

    private function __construct()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbName);
    }


    public static function konektuj(){
        if(self::$conn == null){
            self::$conn = new DBshort();
        }
        return self::$conn;
    }
}




?>