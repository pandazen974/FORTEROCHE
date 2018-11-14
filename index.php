<?php

use \Forteroche\Autoloader;
use\Forteroche\controllers\post\PostController;

require'Autoloader.php';

Autoloader::register();



try { // On essaie de faire des choses
    if (isset($_GET['action'])) {

        if ($_GET['action'] == 'display') {
        
            $postController->display();

        }
        
        elseif ($_GET['action']=='goToLogIn'){
            goToLogIn();
        }
        
        

    }

    else {
        $postController=new PostController();
       $postController->display();

    }

}

catch(Exception $e) { // S'il y a eu une erreur, alors...

    echo 'Erreur : ' . $e->getMessage();

}
