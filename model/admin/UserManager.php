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
    
    public function createUser(User $user){
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    pseudo=:pseudo, pass=:pass, email=:email";
 
        $stmt = $this->conn->prepare($query);
        $pseudo= htmlspecialchars($user->pseudo());
        $pass= htmlspecialchars($user->pass());
        $email= htmlspecialchars($user->email());
        $protected=password_hash($pass,PASSWORD_DEFAULT);
        $stmt->bindParam(':pseudo',$pseudo);
        $stmt->bindParam(':pass',$protected);
        $stmt->bindParam(':email',$email);
        $stmt->execute();
        
    }
    public function verifyUserExistence($pseudo){
        $query = "SELECT*
            FROM
                " . $this->table_name . "
            WHERE
                pseudo = :pseudo";
   
    $stmt = $this->conn->prepare( $query );
    $stmt->bindParam(':pseudo', $pseudo);
    $stmt->execute();
    $theUser = $stmt->fetch(\PDO::FETCH_ASSOC);
    if ($theUser===false){
        $user=null;
    }else{
    $user=new User($theUser);
    }
    return $user;
    }
    
    public function getHashedPassword(User $user){
        $hash=$user->pass();
        return $hash;
    }
    
    public function startSession($pseudo){ 
         $_SESSION['pseudo']= $pseudo; 
    }
    
    public function endSession(){
        session_destroy(); 
    }
    
}