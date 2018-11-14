<?php $title = 'Billet simple pour l\'Alaska'; ?>


<?php ob_start(); ?>
<div class="row back">
    <div class="col-xs-12">
        <div class="row">
            <div class="text-center jumbotron">
                <div class="container">
                    <h1>Billet Simple pour l'Alaska</h1>
                </div>
            </div>
        </div>

        <?php

foreach ($row as $key => $value) {
    



   
?>
            <div class="row col-xs-12 col-sm-12  col-md-6 col-md-6 col-md-offset-3  chapter">
                <div class="text-center">
                   
                    <h3>
                        <?= nl2br(htmlspecialchars($value->title())) ?>
                    </h3>

                    <p>
                        <?= nl2br(htmlspecialchars($value->content())) ?>

                    </p>
                    
                    

                </div>
                <div class="text-right">
                <a href="index.php?action=readPost&amp;id=<?= $value->id() ?>" >Commentaires</a>
                </div>
            </div>



            <?php

}


?>
      
    </div>
   
  
</div>
<?php $content = ob_get_clean(); ?>


<?php require('template.php'); ?>