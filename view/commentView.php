<?php
if(isset($comments)){
        foreach ($comments as $key => $value) {
        ?>

                    <p>
                        <i>
                        Le <?= nl2br(htmlspecialchars($value->commentDate())) ?>
                       </i><br/>
                       
                        <strong><?= nl2br(htmlspecialchars($value->author())) ?></strong>:
                        <?= nl2br(htmlspecialchars($value->comment())) ?><br/>
                            <a href="index.php?action=reportComment&amp;id=<?=$value->id() ?>"> <span class="glyphicon glyphicon-flag"></span>Signaler</a>

                    </p>

                    <?php

        }
}

?>

            

