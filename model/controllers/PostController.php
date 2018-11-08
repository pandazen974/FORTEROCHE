<?php
namespace Forteroche\controllers;
use\Forteroche\config\Database;
use \Forteroche\blog\PostManager;



class PostController{
	public function display(){
    $database = new Database();
    $db = $database->getConnection();
    $postManager= new PostManager($db);
    $row = $postManager->readAll();
    require_once('view/listPostsView.php');
   

	}


}



