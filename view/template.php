<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8"/>
    <title>
        <?= $title ?>
    </title>
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Sofia|Source+Sans+Pro" rel="stylesheet"> 
    <link href="/Projet_4/public/css/style.css" rel="stylesheet" />
</head>



<body>
    <div class="container-fluid">
        <!-- Navigation
      ================================================== -->

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                    <a class="navbar-brand" href="index.php?action=goToHome"><span class="glyphicon glyphicon-home"></span>  Jean Forteroche</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav nav nav-tabs">
                        <li><a href="index.php?action=displayPosts"><span class="glyphicon glyphicon-book"></span> Episodes</a></li>
                        <li class="dropdown"><a data-toggle="dropdown" href="index.php?action=goToEditView<?php if(isset($post)){echo '&id=' . $post->id();} ?>" ><span class="glyphicon glyphicon-edit"></span> Tableau de bord<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="www.arsenal.com" >Policiers</a></li>
                                <li><a href="#romans" >Romans</a></li>
                                <li><a href="#contes" >Contes</a></li>
                            </ul>
                        </li>
                        <li><a href="index.php?action=displayPosts"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>
                        <li class="dropdown"><a data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Connexion<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <?php if(empty($_SESSION['pseudo'])){?>
                                <li><a href="index.php?action=goToLogIn"><span class="glyphicon glyphicon-log-in"></span> S'identifier</a></li>
                                <li><a href="index.php?action=goToSignOn"><span class="glyphicon glyphicon-check"></span> Nouveau compte</a></li>
                                <?php }else{?>
                                <li><a href="index.php?action=shutSession"><span class="glyphicon glyphicon-log-out"></span> Deconnexion</a></li>
                                <?php };?>
                            </ul>
                        </li>
                        
                    </ul>
                    <?php if(!empty($_SESSION['pseudo'])){?>
                        <p id="user" class="pull-right"><span class="glyphicon glyphicon-user "></span> Bienvenue <?=$_SESSION['pseudo']?></p>
                        <?php } ?>
                </div>
            </div>
        </nav>
        


        <?= $content ?>
        
        <footer class="row text-center ">
                <div class="col-lg-12">
                    <a class="btn btn-default" href="#"><i class="fa fa-twitter fa-2x"></i></a>
                    <a class="btn btn-default" href="#"><i class="fa fa-facebook fa-2x"></i></a>
                    <a class="btn btn-default" href="#"><i class="fa fa-google-plus fa-2x"></i></a>
                    <a class="btn btn-default" href="#"><i class="fa fa-spotify fa-2x"></i></a>
                </div>
    </footer>
            
    </div>
     <!-- tinymce-->
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({mode : "exact", elements :"edit" , height : "380" });</script>
        <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Javascript de Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

   
</body>

</html>