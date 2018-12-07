<?php

namespace Forteroche\model\admin;

use Forteroche\model\admin\User;

Class UserManager{
    
    // base de donnÃ©ee et nom de la table
    private $conn;
    private $table_name = "users";
 
    public function __construct($db){
        $this->conn = $db;
    }
    
}