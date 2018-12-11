<?php
session_start();

use \Forteroche\Autoloader;
use\Forteroche\controllers\post\PostController;
use\Forteroche\controllers\comment\CommentController;
use\Forteroche\controllers\admin\UserController;

require'Autoloader.php';

Autoloader::register();



try { // On essaie de faire des choses
    if (isset($_GET['action'])) {
        
        if ($_GET['action'] == 'goToHome') {
           require_once('view/accueil.php');
        }

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
        
        if ($_GET['action'] == 'registerUser') {
            $userController=new UserController();
            $userController->registerUser();
            
        }
   
        
        if ($_GET['action']=='goToLogIn'){
            $userController=new UserController();
            $userController->goToLogIn();
        }
        
        if ($_GET['action']=='goToSignOn'){
            $userController=new UserController();
            $userController->goToSignOn();
        }
        
         if ($_GET['action']=='openSession'){
            $userController=new UserController();
            $userController->openSession();
            require_once('view/accueil.php');
        }
        
        if ($_GET['action']=='shutSession'){
            $userController=new UserController();
            $userController->shutSession();
            
        }

    }

    else {
       require_once('view/accueil.php');

    }
}

catch(Exception $e) { // S'il y a eu une erreur, alors...

    echo 'Erreur : ' . $e->getMessage();

}
