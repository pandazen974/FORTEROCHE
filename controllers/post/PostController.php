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


}



