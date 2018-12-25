<?php
session_start();
use \Forteroche\Autoloader;
use\Forteroche\controllers\post\PostController;
use\Forteroche\controllers\comment\CommentController;
use\Forteroche\controllers\admin\UserController;

require'Autoloader.php';

Autoloader::register();



try { // Cherche la page
    if (isset($_GET['action'])) {
        
//      ACCUEIL
        if ($_GET['action'] == 'goToHome') {
           require_once('view/home.php');
        }

//      ADMIN
        if ($_GET['action'] == 'displayDashboard') {
            if(isset($_GET['admin'])){        
                if ($_GET['admin'] == 'editPost') {
                $postController=new PostController();
                $postController->editPost();
                }
        
        //Va à la page édition
                if ($_GET['admin'] == 'goToEditView') {
                $postController=new PostController();
                $post=$postController->goToEditView();
                }
        
        //Va à la page pour suppression
                if ($_GET['admin'] == 'goToDeleteView') {
                $postController=new PostController();
                $row=$postController->getAdminList();
                }
        
        //suppression d'une publication
                if ($_GET['admin'] == 'erasePost') {
                $postController=new PostController();
                $postController->erasePost();
                }
        
        //suppression d'un commentaire
                if ($_GET['admin'] == 'eraseComment') {
                $commentController=new commentController();
                $commentController->eraseComment();
                $line=$commentController->displayReportedComments();
                }
        
        //réintègre un commentaire
                if ($_GET['admin'] == 'returnReportedComment') {
                $commentController=new commentController();
                $commentController->returnReportedComment();
                $line=$commentController->displayReportedComments();
                }
        
        //liste les commentaires signalés
                if ($_GET['admin'] == 'displayReportedComments'){
                $commentController=new CommentController();
                $line=$commentController->displayReportedComments();
                }
        }//sinon affiche la liste des épisodes
             else{
                $postController=new PostController();
                $row=$postController->getAdminList();
            }
        require_once('view/dashboard.php');
        }
        
        
//      all users
//      PUBLICATIONS
        //Affiche les publications
        if ($_GET['action'] == 'displayPosts') {
            $postController=new PostController();
            $postController->displayPosts();

        }
        
        //Affiche une seule publication
        if ($_GET['action'] == 'readOnePost') {
            $postController=new PostController();
            $postController->readOnePost();

        }
        
//      COMMENTAIRES
        //Affiche les commentaires d'une publication
        if ($_GET['action'] == 'displayComments') {
            $commentController=new CommentController();
            $commentController->displayComments();

        }
        
        //Ajout d'un commentaire
        if ($_GET['action'] == 'addComment') {
            $commentController=new CommentController();
            $commentController->addComment();
            
        }
        
        //Signaler un Commentaire
        if ($_GET['action'] == 'flagComment') {
            $commentController=new CommentController();
            $commentController->flagComment();   
        }
        
//      MEMBRES
        //Créer 
        if ($_GET['action'] == 'registerUser') {
            $userController=new UserController();
            $userController->registerUser();
            
        }
   
        //Va à la page connexion
        if ($_GET['action']=='goToLogIn'){
            $userController=new UserController();
            $userController->goToLogIn();
        }
        
        //Va à la page s'enregistrer
        if ($_GET['action']=='goToSignOn'){
            $userController=new UserController();
            $userController->goToSignOn();
        }
        
        //Ouvrir une session
        if ($_GET['action']=='openSession'){
            $userController=new UserController();
            $userController->openSession();
            require_once('view/home.php');
        }
        
        //Fermer une session
        if ($_GET['action']=='shutSession'){
            $userController=new UserController();
            $userController->shutSession();
            
        }

    }

    else {
       require_once('view/home.php');
    }

}

catch(Exception $e) { // S'il y a eu une erreur, alors...

    echo 'Erreur : ' . $e->getMessage();

}
