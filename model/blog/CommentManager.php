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
  }
    
public function readAll(Comment $post_id){
     $query = "SELECT *

            FROM
                " . $this->table_name . "
            ORDER BY
                id
           ";

    $stmt = $this->conn->prepare( $query );
    $stmt->execute();

    while($donnees=$stmt->fetch(\PDO::FETCH_ASSOC))
    {

        $comments[]=new Comment($donnees);



    }
}
    
function report(){
    
}

 
}
