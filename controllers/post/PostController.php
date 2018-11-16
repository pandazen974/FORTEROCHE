<?php
namespace Forteroche\controllers\post;
use\Forteroche\model\config\Database;
use \Forteroche\model\blog\PostManager;



class PostController{
    
public function display(){
    $database = new Database();
    $db = $database->getConnection();
    $postManager= new PostManager($db);
    $row = $postManager->readAll();
    require_once('view/listPostsView.php');
    
}

public function readOnePost(){
    $database = new Database();
    $db = $database->getConnection();
    $postManager= new PostManager($db);
    $post=$postManager->readSelectedPost($_GET['id']);
    require_once('view/postView.php');
}

}



