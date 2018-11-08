<?php
namespace Forteroche\blog;

use Forteroche\blog\Post;


class PostManager{
 
    // base de donnÃ©ee et nom de la table
    private $conn;
    private $table_name = "posts";
 
   
    
 
    public function __construct($db){
        $this->conn = $db;
    }

    public function create(){
    }

    public function readAll(){
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

        $posts[]=new Post($donnees);



    }

    return $posts;

    }

    public function read(){
    }

    public function update(){
    }

    public function delete(){
    }
 

   }
?>



