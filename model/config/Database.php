<?php

namespace Forteroche\model\config;

class Database{
  
    // specify your own database credentials
    private $host = "db767077655.hosting-data.io";
    private $db_name = "db767077655";
    private $username = "dbo767077655";
    private $password = "Alaska01-MYSQL";
    public $conn;
  
    // get the database connection
    public function getConnection(){
  
        $this->conn = null;
  
        try{
            $this->conn = new \PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
  
        return $this->conn;
    }
}
