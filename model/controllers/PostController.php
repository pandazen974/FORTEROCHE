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
OBOBOBOBOBOBOAOAOAOAOAOBOBOBOBOB[3~[3~[3~i[200~<?php
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
^[OB^[OB^[OB^[OB^[OB^[OB^[OA^[OA^[OA^[OA^[OA^[OB^[OB^[OB^[OB^[OB^?^?^?^?^?^?^?^?
^?^?^?^?^?^?^?^?^?^?^?^?^?^?^?^?^[[3~^[[3~^[[3~i^?^?
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

