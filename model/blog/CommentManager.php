<?php

namespace Forteroche\model\blog;

class CommentManager{
 
    // database connection and table name
    private $conn;
    private $table_name = "comments";
 
   
 
    public function __construct($db){
        $this->conn = $db;
    }
 
function createOneComment(Comment $comment){ 
    //write query
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    postId=:postId, author=:author, comment=:comment, commentDate= NOW(), report=0";
 
        $stmt = $this->conn->prepare($query);
        $postId=$comment->postId();
        $author=$comment->author();
        $content=$comment->comment();
        
        $stmt->bindParam(':postId', $postId);
        $stmt->bindParam(':author', $author);
        $stmt->bindParam(':comment',$content);
        $stmt->execute();
        
        
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

