<div id="contentbox" class="col-md-10">
    <?php
        foreach ($row as $key => $value) {
    ?>
        <div class="row col-xs-12 col-sm-12  col-md-6 col-md-6 col-md-offset-3  chapter">
            <div class="text-center">
                <h3>
                    <?= nl2br(htmlspecialchars($value->title())) ?>
                </h3>
                <br/>
                <a href="index.php?action=displayDashboard&amp;admin=goToEditView&AMP;id=<?= $value->id() ?>" ><span class="glyphicon glyphicon-edit"></span> Editer</a>
                <br/>
            </div>
        </div>
    <?php
    }
    ?>
</div>