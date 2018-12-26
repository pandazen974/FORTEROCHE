<div id="contentbox" class="col-md-10">
<?php
if (!empty($line)){
foreach ($line as $key => $value) {
?>
    <div class="row col-xs-12 col-sm-12  col-md-6 col-md-6 col-md-offset-3  chapter">
        <div class="text-center">
            <h3>
                <?= nl2br(htmlspecialchars($value->author())) ?>
            </h3>
            <span>Ajouté le: <?= nl2br($value->commentDate()) ?></span>
            <p> 
                <?= nl2br($value->comment()) ?>
            </p>
            <br/>
            <div class="text-right" id="read">
                <a href="index.php?action=displayDashboard&amp;admin=returnReportedComment&amp;id=<?= $value->id() ?>" ><span class="glyphicon glyphicon-ok"></span> Valider</a><span>/</span>
                <a class="nav-link active" href="index.php?action=displayDashboard&admin=eraseComment&id=<?= $value->id(); ?>"><span class="glyphicon glyphicon-trash"></span> Supprimer</a>
            </div>
            <br/>
        </div>
    </div>

<?php
    }
}else{ ?>
    <div class="row col-xs-12 col-sm-12  col-md-6 col-md-6 col-md-offset-3  chapter">
        <div class="text-center">
            <span> Aucun Commentaire n'a été signalé</span>
        </div>
    </div>
 <?php          
}
?>
</div>

