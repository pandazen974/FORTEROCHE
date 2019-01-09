<?php
if(isset($comments)){
        foreach ($comments as $key => $value) {
        ?>
                     
                    <p>
                        <i>
                        Le <?= nl2br(htmlspecialchars($value->commentDate())) ?>
                       </i><br/>
                        <strong><?= nl2br(htmlspecialchars($value->author())) ?></strong>:
                        <?php $report=$value->report();
                        if($report==='0'){?>
                        <?= nl2br(htmlspecialchars($value->comment())) ?><br/>
                            <a href="index.php?action=flagComment&amp;id=<?=$value->id() ?>&amp;postId=<?=$value->postId() ?>"> <span class="glyphicon glyphicon-flag"></span>Signaler</a>
                        <?php 
                        }else{?>
                            <span class="report">"Ce commentaire a été signalé et est en attente de modération."</span>
                        <?php } ?>
                    </p>

                    <?php
        }
}
?>
            

