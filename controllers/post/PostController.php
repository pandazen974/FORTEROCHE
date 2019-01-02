<?php
namespace Forteroche\controllers\post;
use\Forteroche\model\config\Database;
use \Forteroche\model\blog\PostManager;
use \Forteroche\model\blog\Post;

class PostController{

public function displayPosts(){
    $database = new Database();
    $db = $database->getConnection();
    $postManager= new PostManager($db);
    // page given in URL parameter, default page is one
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    // set number of records per page
    $records_per_page = 5;
    // calculate for the query LIMIT clause
    $from_record_num = ($records_per_page * $page) - $records_per_page;
    $row = $postManager->readAllByPage($from_record_num, $records_per_page);
    $total_rows = $postManager->countAll();
        if (empty($row)){
          $erreur="Aucun article n'a été publié!";
        }
    require_once('view/listPostsView.php');
}

public function readOnePost(){
    $database = new Database();
    $db = $database->getConnection();
    $postManager= new PostManager($db);
    $post=$postManager->readSelectedPost($_GET['id']);
    if(!empty($post)){
    require_once('view/postView.php');
    }
}

public function goToEditView(){    
    if (isset($_GET['id'])){
        $database = new Database();
        $db = $database->getConnection();
        $postManager= new PostManager($db);    
        $post=$postManager->readSelectedPost($_GET['id']);
        return $post;
    }
}

public function editPost(){
    $database = new Database();
    $db = $database->getConnection();
    $postManager= new PostManager($db);
    if (isset($_POST['id'])){
        $post=new Post(['id'=>$_POST['id'],'title'=>$_POST['title'],'content'=>$_POST['content']]);
        $newPost=$postManager->updatePost($post);
    }
    else{
        $post=new Post(['title'=>$_POST['title'],'content'=>$_POST['content']]);
        $newPost=$postManager->createPost($post);
    }
     header("Location: http://www.pandazen.net/Projet_4/index.php?action=displayPosts");
}

public function getAdminList(){
    $database = new Database();
    $db = $database->getConnection();
    $postManager= new PostManager($db);
    $row = $postManager->readAll();
    return $row;
}

public function erasePost(){
    $database = new Database();
    $db = $database->getConnection();
    $postManager= new PostManager($db);
    $post=$postManager->readSelectedPost($_GET['id']);
    $postManager->deletePost($post);
    header("Location: http://www.pandazen.net/Projet_4/index.php?action=displayPosts");
    
}

}



