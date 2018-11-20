<?php

namespace Forteroche\model\blog;

class CommentManager{
 
    // database connection and table name
    private $conn;
    private $table_name = "comments";
 
   
 
    public function __construct($db){
        $this->conn = $db;
    }
 
function create(){      
  }
    
 public function readCommentsFromPost($postId){
        $query = "SELECT *
            FROM
                " . $this->table_name . "
            WHERE
                postId = :postId";
   
    $stmt = $this->conn->prepare( $query );
    $stmt->bindParam(':postId', $postId);
    $stmt->execute();
    while($commentRow = $stmt->fetch(\PDO::FETCH_ASSOC)){
    $comments[]=new Comment($commentRow);
    }
    return $comments;
    }
    
function report(){
    
}

 
}

