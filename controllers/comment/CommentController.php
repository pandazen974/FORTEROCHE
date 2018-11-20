<?php
namespace Forteroche\controllers\comment;
use\Forteroche\model\config\Database;
use \Forteroche\model\blog\CommentManager;
use\Forteroche\model\blog\PostManager;



class CommentController{
	public function displayComments(){
    $database = new Database();
    $db = $database->getConnection();
    $postManager= new PostManager($db);
    $post=$postManager->readSelectedPost($_GET['id']);
    $commentManager= new CommentManager($db);
    $comments = $commentManager->readCommentsFromPost($_GET['id']);
    require_once('view/postView.php');
	}
}



