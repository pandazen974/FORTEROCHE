<?php

use \Forteroche\Autoloader;
use\Forteroche\controllers\post\PostController;
use\Forteroche\controllers\comment\CommentController;

require'Autoloader.php';

Autoloader::register();



try { // On essaie de faire des choses
    if (isset($_GET['action'])) {

        if ($_GET['action'] == 'displayPosts') {
            $postController=new PostController();
            $postController->displayPosts();

        }
        
        if ($_GET['action'] == 'readOnePost') {
            $postController=new PostController();
            $postController->readOnePost();

        }
        
        if ($_GET['action'] == 'displayComments') {
            $postController=new CommentController();
            $postController->displayComments();

        }
        
        if ($_GET['action'] == 'addComment') {
            $postController=new CommentController();
            $postController->addComment();
            
        }
        
        if ($_GET['action']=='goToLogIn'){
            goToLogIn();
        }
        
        

    }

    else {
        $postController=new PostController();
       $postController->displayPosts();

    }

}

catch(Exception $e) { // S'il y a eu une erreur, alors...

    echo 'Erreur : ' . $e->getMessage();

}
