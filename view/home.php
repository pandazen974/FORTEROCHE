<?php $title = 'Accueil'; ?>

<?php ob_start(); ?>

<div id="home" class='row'>
    <div class=col-md-4 col-md-offset-8>
        <div id="contenant">
            <div id="book">
                <div id="front-cover" class="cover">
                    <h2>BILLET<br/>
                        SIMPLE<br/>
                        POUR<br/>
                        l'ALASKA<br/>
                    </h2>
                    <h3> Jean Forteroche</h3>
                </div>
                <div id="arriere" class="external"></div>
                <div id="sommet" class="others"></div>
                <div id="dessous" class="others"></div>
                <div id="droite" class="side"></div>
                <div id="gauche" class="side"></div>
                <div id="devant" class="external">
                    <h3>Introduction</h3>
                    <p class='text-justify intro'> Bienvenue dans cette aventure unique. Voyagez dans mon dernier roman "Billet Simple pour l'Alaska", vous aurez l'occasion de découvrir mon oeuvre
                    épisode par épisode. Couvrez vous bien l'hiver sera au rendez-vous et le froid ne fera pas de quartier aux sensibles. Je vous souhaite une bonne dose de courage et une bonne lecture à tous!
                    </p>
                    <br/>
                    <a href="index.php?action=displayPosts"><span class="glyphicon glyphicon-book"></span> Episodes</a>
                </div>
                <div id="back-cover" class="cover"></div>
            </div>
           <div id="boutons">
                <div id="retour" class="book-buttons text-center"><span class="glyphicon glyphicon-arrow-left"></span>
                    Fermer</div>
                <div id="continuer" class="book-buttons text-center"><span class="glyphicon glyphicon-arrow-right"></span>Ouvrir</span></i></div>
            </div>
       </div>
    </div>
</div>
         
                
            
        
    <div class='row'>
       <div class='col-md-12 '>
        
    </div>
        
  
</div>  



<?php $content = ob_get_clean(); ?>


<?php require_once('template.php'); ?>