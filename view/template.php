<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8"/>
    <meta name="description" content="Bienvenue sur le site de Jean Forteroche, ici vous pouvez découvrir son dernier roman en ligne Bille simple pour l'Alaska" />
    <meta property="og:title" content="Jean Forteroche" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.pandazen.net/Projet_4/" />
    <meta property="og:image" content="http://www.pandazen.net/Projet_4/public/images/jeanforteroche.png" />
    <meta property="og:description" content="Bienvenue sur le site de Jean Forteroche, ici vous pouvez découvrir son dernier roman en ligne Bille simple pour l'Alaska" />
    <meta name="twitter:card" content="Billet Simple pour l'Alaska de Jean Forteroche">
    <meta name="twitter:site" content="@JeanForteroche">
    <meta name="twitter:title" content="JeanForteroche">
    <meta name="twitter:description" content="Bienvenue sur le site de Jean Forteroche, ici vous pouvez découvrir son dernier roman en ligne Bille simple pour l'Alaska"">
    <meta name="twitter:creator" content="@Kevin_Ahpine">
    <meta name="twitter:image:src" content="http://www.pandazen.net/Projet_4/public/images/forteroche.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <link rel="icon" type="image/ico" href="http://www.pandazen.net/Projet_4/public/images/forteroche.png"/>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Sofia|Source+Sans+Pro" rel="stylesheet"> 
    <link href="/Projet_4/public/css/style.css" rel="stylesheet" />
    <title>
        <?= $title ?>
    </title>
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
                        <?php if((isset($_SESSION['pseudo'])) AND ($_SESSION['pseudo'])==='forteroche'){?>
                        <li><a href="index.php?action=displayDashboard"><span class="glyphicon glyphicon-plus"></span> Mon tableau de bord</a></li>
                         <?php }?>
                        <li><a href="index.php?action=displayPosts"><span class="glyphicon glyphicon-book"></span> Episodes</a></li>
                        <li><a href="#contact"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>
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
                    <p id="user" class="pull-right"><span class="glyphicon glyphicon-user "></span> Bienvenue <span id="name"><?=$_SESSION['pseudo']?></span></p>
                        <?php } ?>
                </div>
            </div>
        </nav>
        


        <?= $content ?>
        
        <footer class="row">
         
                <div  class="col-md-4 text-justify">  
                    
                <div class="thumbnail">
                     <h3 class="text-center">Qui suis je?</h3>
                     <img src="/Projet_4/public/images/jeanforteroche.png" alt="Jean Forteroche" class="img-rounded">
                     <span>Né à Nîmes en 1957 dans un petit village, je me passionne pour la littérature dès mon plus jeune âge. Ayant étudié dans la prestigieuse université 
                        de la Sorbonne,je décide d'écrire mon premier sur ma vie mouvementée d'étudiant. Mon père était un grand voyageur et c'est grâce à lui que j'ai pu me rendre
                    en Alaska dont mon inspiration se fera grandement ressentir à travers cet ouvrage en ligne.</span>
                 </div>
                 </div>
             
                <div id="contact" class="col-md-4 form-group">
                    <h3 class="text-center">Contactez moi:</h3><br/>
                    <form>
                      <label for="nom">Nom:</label><br/>
                    <input class="form-control" type="text" id="nom" name="nom" /><br/>
                    <label for="adresse">Email:</label><br/>
                    <input class="form-control" type="email" id="adresse" name="adresse" /><br/>
                    <label for="message">Message:</label><br/>
                    <textarea class="form-control" name="message"></textarea><br/>
                    <button class="btn btn-primary pull-right" type="submit"><span class="glyphicon glyphicon-ok-sign" ></span> Envoyer</button><br/>
                    </form>
     <?php
        if (isset($_POST['message'])) {
                $position_arobase = strpos($_POST['email'], '@');
                if($position_arobase === false){
                    echo '<p>Votre email doit comporter un arobase.</p>';
                }else {
                    $retour=mail('onzola@msn.com','Envoi depuis page Contact', $_POST['message'], 'From : ' . $_POST['email']);
                    if($retour){
                         echo '<p>Votre message a été envoyé.</p>';
                    }else{
                         echo '<p>Erreur.</p>';
                    }
                }
        }
    ?>   
                </div>
             
                 <div class="col-md-4">
                    <h3>A propos:</h3><br/>
                    <a class="footer-link" href="#">Mentions légales</a><br/>
                    <a class="footer-link" href="#">Mes autres romans</a><br/>
                    <a class="footer-link" href="#">Publicités</a><br/>
           
                     <h3>Suivez moi:</h3><br/>
                    <a class="btn btn-default" href="#"><i class="fa fa-twitter fa-2x"></i></a>
                    <a class="btn btn-default" href="#"><i class="fa fa-facebook fa-2x"></i></a>
                    <a class="btn btn-default" href="#"><i class="fa fa-google-plus fa-2x"></i></a>
                    <a class="btn btn-default" href="#"><i class="fa fa-spotify fa-2x"></i></a>
                </div>
             <hr>
        <div class="row">
                <div  class="col-md-12 ">
                    <span> ©2018 -Un blog de Jean Forteroche-Tous droits réservés </span>
                </div>
             
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
    <script src="public/javascript/book.js"></script>
    
   
</body>

</html>