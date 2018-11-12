<?php

namespace Forteroche\blog;

class CommentManager{
 
    // database connection and table name
    private $conn;
    private $table_name = "comments";
 
   
 
    public function __construct($db){
        $this->conn = $db;
    }
 
function create(){
        //requête
        $query ="INSERT INTO" .$this->table_name." SET
        author=:author, comment=:comment, comment_date=:comment_date";
        
        $stmt=$this->conn->prepare($query);
        
        //les valeurs qui sont publiées
        $this->author=htmlspecialchars(strip_tags($this->author));
        $this->comment=htmlspecialchars(strip_tags($this->comment));
        
        //pour heure de création
        $this->timestamp=date('d-m-Y H:i:s');
        
        //lier les valeurs
        $stmt->bindParam(":author",$this->author);
        $stmt->bindParam(":comment",$this->comment);
        $stmt->bindParam(":created",$this->timestamp);

    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
  }
    
function readAll(){
     $query = "SELECT
                id, author, comment 
            FROM
                " . $this->table_name . "
            ORDER BY
                id"
 
    $stmt = $this->conn->prepare( $query );
    $stmt->execute();
 
    return $stmt;
} 
    
function report(){
    
}

 
}
?>