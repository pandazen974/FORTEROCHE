<?php

namespace Forteroche\controllers\admin;
use\Forteroche\model\config\Database;
use Forteroche\model\admin\UserManager;
use Forteroche\model\admin\User;

class UserController{
    
    public function goToLogin(){
      require_once('view/loginView.php');    
    }
    
    public function goToSignOn(){
      require_once('view/signOnView.php');
    }
    
    public function registerUser(){
    $database = new Database();
    $db = $database->getConnection();
    $userManager=new UserManager($db);
    $user=$userManager->verifyUserExistence($_POST['pseudo']);
    if(!empty($_POST['pseudo']) AND !empty($_POST['pass']) AND !empty($_POST['pass2']) AND !empty($_POST['email'])){
                 if (is_null($user)){
                    if(($_POST['pass'])===(($_POST['pass2']))){
                   $user=new User(['pseudo'=>$_POST['pseudo'],'pass'=>$_POST['pass'],'email'=>$_POST['email']]);
                        $newUser=$userManager->createUser($user);
                        $confirmation="Votre inscription est enregistrée, vous pouvez vous connecter maintenant.";
                        require_once ("view/loginView.php");
                    }else{
                        $erreur="Vos mots de passe ne sont pas identiques";   
                    }
                 }else{
                    $erreur="Veuillez choisir un autre pseudo";
                }
    }else{
            $erreur="Tous les champs doivent être complétés";
    }
        
    if(isset($erreur)){
        require_once ("view/signOnView.php");
    }
        
    }
    
   
}
