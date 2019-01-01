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
        elseif ($_GET['action'] == 'displayDashboard') {
            if(isset($_GET['admin'])){        
                if ($_GET['admin'] == 'editPost') {
                $postController=new PostController();
                $postController->editPost();
                }
        
        //Va à la page édition
                elseif ($_GET['admin'] == 'goToEditView') {
                $postController=new PostController();
                $post=$postController->goToEditView();
                }
        
        //Va à la page pour suppression
                elseif ($_GET['admin'] == 'goToDeleteView') {
                $postController=new PostController();
                $row=$postController->getAdminList();
                }
        
        //suppression d'une publication
                elseif ($_GET['admin'] == 'erasePost') {
                $postController=new PostController();
                $postController->erasePost();
                }
        
        //suppression d'un commentaire
                elseif ($_GET['admin'] == 'eraseComment') {
                $commentController=new commentController();
                $commentController->eraseComment();
                $line=$commentController->displayReportedComments();
                }
        
        //réintègre un commentaire
                elseif ($_GET['admin'] == 'returnReportedComment') {
                $commentController=new commentController();
                $commentController->returnReportedComment();
                $line=$commentController->displayReportedComments();
                }
        
        //liste les commentaires signalés
                elseif ($_GET['admin'] == 'displayReportedComments'){
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
        elseif ($_GET['action'] == 'displayPosts') {
            $postController=new PostController();
            $postController->displayPosts();

        }
        
        //Affiche une seule publication
        elseif ($_GET['action'] == 'readOnePost') {
            $postController=new PostController();
            $postController->readOnePost();
            if(empty($post)){
               throw new Exception('Cette page est inexistante');
            }else{
                throw new Exception('Cette page est inexistante');
            }
        }
        
//      COMMENTAIRES
        //Affiche les commentaires d'une publication
        elseif ($_GET['action'] == 'displayComments') {
            $commentController=new CommentController();
            $commentController->displayComments();

        }
        
        //Ajout d'un commentaire
        elseif ($_GET['action'] == 'addComment') {
            $commentController=new CommentController();
            $commentController->addComment();
            
        }
        
        //Signaler un Commentaire
        elseif ($_GET['action'] == 'flagComment') {
            $commentController=new CommentController();
            $commentController->flagComment();   
        }
        
//      MEMBRES
        //Créer 
        elseif ($_GET['action'] == 'registerUser') {
            $userController=new UserController();
            $userController->registerUser();
            
        }
   
        //Va à la page connexion
        elseif ($_GET['action']=='goToLogIn'){
            $userController=new UserController();
            $userController->goToLogIn();
        }
        
        //Va à la page s'enregistrer
        elseif ($_GET['action']=='goToSignOn'){
            $userController=new UserController();
            $userController->goToSignOn();
        }
        
        //Ouvrir une session
        elseif ($_GET['action']=='openSession'){
            $userController=new UserController();
            $userController->openSession();
            require_once('view/home.php');
        }
        
        //Fermer une session
        elseif ($_GET['action']=='shutSession'){
            $userController=new UserController();
            $userController->shutSession();
            
        }else{
         throw new Exception('Cette page est inexistante');
        }

    }

    else {
       require_once('view/home.php');
    }

}

catch(Exception $e) { // S'il y a eu une erreur, alors...

   $errorMessage = $e->getMessage();
   require('view/errorView.php');

}
