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
    if (!empty($row)){
        foreach ($row as $key => $value) {   
?>
    <div class="row col-xs-12 col-sm-12  col-md-6 col-md-6 col-md-offset-3  chapter">
        <div class="text-center">
            <h3>
                <?= nl2br(htmlspecialchars($value->title())) ?>
            </h3>
            <span class="pull-right"><i><?= nl2br(htmlspecialchars($value->postDate())) ?></i></span><br/>
            <div class="allbackground">
                <?= substr($value->content(), 0,500 ).'...'; ?>
                <div class="text-right" id="read">
                    <a href="index.php?action=readOnePost&amp;id=<?= $value->id() ?>" >Lire la suite</a>
                </div>
            </div><br/>
        </div>
    </div>

<?php
        }
    }else{ ?>
        <div class="row col-xs-12 col-sm-12  col-md-6 col-md-6 col-md-offset-3  chapter">
                <div class="text-center">
                    <span><?php echo $erreur ?></span>
                </div>
        </div>
<?php
        }
?>
    </div>
</div>

<?php $content = ob_get_clean(); ?>


<?php require('template.php'); ?>