<?php $title = 'Accueil'; ?>

<?php ob_start(); ?>

<div id="home" class='row'>
    <div class=col-md-12 text-center>
            <div id="book" class="chapter">
                <div class="col-md-6 col-md-offset-3 text-center allbackground">
                    <div class="text-center">
                    <img src="/Projet_4/public/images/huskey.png" alt="couverture livre">
                    <div>
                    <div>
                    <h3 class="text-center">Introduction</h3>
                    <p class=''> Bienvenue dans cette aventure unique. Voyagez dans mon dernier roman "Billet Simple pour l'Alaska", vous aurez l'occasion de découvrir mon oeuvre
                    épisode par épisode. Couvrez vous bien l'hiver sera au rendez-vous et le froid ne fera pas de quartier aux sensibles. Je vous souhaite une bonne dose de courage et une bonne lecture à tous!
                    </p><a class="pull-right" href="index.php?action=displayPosts"><span class="glyphicon glyphicon-book"></span> Commencer</a>
                    <br/>
                    
                    </div>
                </div>
            </div>
       </div>
</div>
         

<?php $content = ob_get_clean(); ?>


<?php require_once('template.php'); ?>