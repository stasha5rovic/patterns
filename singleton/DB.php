<?php

class SingletonDB {

    private static $instance = null;

    private $conn;
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbName = "tasks123";

    private function __construct()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbName);
    }

    public static function getInstance(){
        if(self::$instance == null){
            self::$instance = new SingletonDB();
        }
        return self::$instance;
    }


    public function getConnection()
    {
        return $this->conn;
    }


}


?>