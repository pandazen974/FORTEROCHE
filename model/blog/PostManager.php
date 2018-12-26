<?php
namespace Forteroche\model\blog;

use Forteroche\model\blog\Post;


class PostManager{
 
    // base de donnÃ©ee et nom de la table
    private $conn;
    private $table_name = "posts";
 
   
    
 
    public function __construct($db){
        $this->conn = $db;
    }

    public function create(Post $post){
    $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                 title=:title, content=:content, postDate= NOW()";
 
    $stmt = $this->conn->prepare($query);
    $title=$post->title();
    $content=$post->content();
    $stmt->bindParam(':title',$title);
    $stmt->bindParam(':content',$content);
    $stmt->execute();
    }

    public function readAll(){
    $query = "SELECT *,DATE_FORMAT(postDate, 'publié le %d/%m/%Y à %H:%i:%s') as postDate

            FROM
                " . $this->table_name . "
            ORDER BY
                id
           ";

    $stmt = $this->conn->prepare( $query );
    $stmt->execute();

    while($donnees=$stmt->fetch(\PDO::FETCH_ASSOC))
    {

        $posts[]=new Post($donnees);



    }

    return $posts;

    }

    public function readSelectedPost($id){
    $query = "SELECT *,DATE_FORMAT(postDate, 'publié le %d/%m/%Y à %H:%i:%s') as postDate
            FROM
                " . $this->table_name . "
            WHERE
                id = :id
            LIMIT
                0,1";
   
    $stmt = $this->conn->prepare( $query );
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $row = $stmt->fetch(\PDO::FETCH_ASSOC);
    $post=new Post($row);
    return $post;
    }

    public function updatePost(Post $post){
    $query = "UPDATE posts
                    SET title=:title, content=:content
                    WHERE id = :id";
    $stmt = $this->conn->prepare($query);
    $id=$post->id();
    $title=$post->title();
    $content=$post->content();
    $stmt->bindParam(':id',$id);
    $stmt->bindParam(':title',$title);
    $stmt->bindParam(':content',$content);
    $stmt->execute();    
    }

    public function deletePost(Post $post){
    $query = "DELETE FROM posts WHERE id = :id";
    $stmt = $this->conn->prepare($query);
    $id=$post->id();
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    }
 

   }




