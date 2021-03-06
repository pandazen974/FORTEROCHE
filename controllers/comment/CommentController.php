<?php
namespace Forteroche\controllers\comment;
use\Forteroche\model\config\Database;
use \Forteroche\model\blog\CommentManager;
use\Forteroche\model\blog\Comment;
use\Forteroche\model\blog\PostManager;

class CommentController{
    
public function displayComments(){
    $database = new Database();
    $db = $database->getConnection();
    
    $postManager= new PostManager($db);
    $post=$postManager->readSelectedPost($_GET['id']);
    if(!empty($post)){
    $commentManager= new CommentManager($db);
    $comments = $commentManager->readCommentsFromPost($_GET['id']);
    if(empty($comments)){
            $info="Aucun commentaire";
    }
    require_once('view/postView.php'); 
    }
}
        
public function addComment(){
    $database = new Database();
    $db = $database->getConnection();
    $postManager= new PostManager($db);
    $post=$postManager->readSelectedPost($_GET['id']);
    if(!empty($post)){
    if(!empty($_POST['author']) AND !empty($_POST['comment'])){
    $commentManager=new CommentManager($db);
    $comment=new Comment(['postId'=>$_GET['id'],'author'=>$_POST['author'],'comment'=>$_POST['comment']]);
    $newComment=$commentManager->createOneComment($comment);
    $comments = $commentManager->readCommentsFromPost($_GET['id']);
    }else{
        $author=$_POST['author'];
        $comment=$_POST['comment'];
        $erreur="Veuillez compléter tous les champs";
    }
    require_once('view/postView.php');
    }
}

public function flagComment(){
    $database = new Database();
    $db = $database->getConnection();
    $commentManager=new CommentManager($db);
    $comment=$commentManager->readSelectedComment($_GET['id']);
    $postManager= new PostManager($db);
    $post=$postManager->readSelectedPost($_GET['postId']);
    if(!empty($post)AND(!empty($comment))){
    $commentManager->reportComment($comment);
    $comments = $commentManager->readCommentsFromPost($_GET['postId']);
    require_once('view/postView.php');
    }
}

public function displayReportedComments(){
    $database = new Database();
    $db = $database->getConnection();
    $commentManager=new CommentManager($db);
    $line = $commentManager->readReportedComments();
    return $line;
}

public function returnReportedComment(){
    $database = new Database();
    $db = $database->getConnection();
    $commentManager=new CommentManager($db);
    $comment=$commentManager->readSelectedComment($_GET['id']);
    $commentManager->reinstateComment($comment);
    $line = $commentManager->readReportedComments();
    return $line;   
}

public function eraseComment(){
    $database = new Database();
    $db = $database->getConnection();
    $commentManager=new CommentManager($db);
    $comment=$commentManager->readSelectedComment($_GET['id']);
    $commentManager->deleteComment($comment);
    $line = $commentManager->readReportedComments();
    return $line;
}

}



