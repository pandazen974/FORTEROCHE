<div id="contentbox" class="col-md-10">
    <div class="row col-md-6 col-md-6 col-md-offset-3  chapter">
        <div class="text-center edit-view">
<?php
foreach ($row as $key => $value) {
?>
    
            <p>
                <?= nl2br(htmlspecialchars($value->title())) ?><br/>
                <a href="index.php?action=displayDashboard&amp;admin=erasePost&AMP;id=<?= $value->id() ?>" class="edit-link" ><span class="glyphicon glyphicon-trash"></span> Supprimer</a>
            </p>
            <br/>
                
       
<?php
}
?>
        </div>
  </div>
</div>