<?php

namespace Forteroche\model\blog;
use Forteroche\model\blog\Comment;

class CommentManager{
 
    // database connection and table name
    private $conn;
    private $table_name = "comments";
 
   
 
public function __construct($db){
        $this->conn = $db;
}
 
function createOneComment(Comment $comment){ 
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
    $query = "SELECT*, DATE_FORMAT(commentDate, ' %d/%m/%Y à %H:%i:%s') as commentDate
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
    if (empty($comments)){
        $comments=null;
    }
    return $comments;
}

public function readSelectedComment($id){
    $query = "SELECT *
        
            FROM
                " . $this->table_name . "
            WHERE
                id = :id
            LIMIT
                0,1";
   
    $stmt = $this->conn->prepare( $query );
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $line = $stmt->fetch(\PDO::FETCH_ASSOC);
    $comment=new Comment($line);
    return $comment;
}

public function readReportedComments(){
    $query = "SELECT *, DATE_FORMAT(commentDate, ' %d/%m/%Y à %H:%i:%s') as commentDate

            FROM
                " . $this->table_name . "
                    
            WHERE
            report=1;
            
            ORDER BY
                id";

    $stmt = $this->conn->prepare( $query );
    $stmt->execute();
   
    while($donnees=$stmt->fetch(\PDO::FETCH_ASSOC))
    {
        
        $line[]=new Comment($donnees);



    }
   if (empty($line)){
       $line=null;
   }
   
   return $line;
}

public function reportComment(Comment $comment){
    $query = "UPDATE comments
            SET report=:report
            WHERE id = :id";
    $stmt = $this->conn->prepare($query);
    $id=$comment->id();
    $stmt->bindParam(':id',$id);
    $stmt->bindValue(':report',1);
    $stmt->execute();
        
}  

public function deleteComment(Comment $comment){
    $query = "DELETE FROM comments WHERE id = :id";
    $stmt = $this->conn->prepare($query);
    $id=$comment->id();
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}

}

