<?php $title = 'Erreur'; ?>

<?php ob_start(); ?>

<div id="error-page" class='row'>
    <div class="col-md-12 text-center">
                <div class="col-md-6 col-md-offset-3 text-center chapter">
                    <div class="col-md-12 text-center allbackground">
                                <h2 class="text-center">Erreur</h2>
                                <h4 class="text-center"><?= $errorMessage ?>
                                </h4>
                                <br/>
                    </div>       
                </div>
    </div>        
</div>


<?php $content = ob_get_clean(); ?>


<?php require_once('template.php'); 

