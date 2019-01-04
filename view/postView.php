<?php $title = 'Episode'; ?>


<?php ob_start(); ?>

<div class='row back '>
    <div class="col-xs-12 box">
        <div class="row box">
            <div class="col-md-12">
            <?php if (empty($erreur)){?>
                <div class="chapter">
                    <h3 class="text-center">
                        <?= $post->title()?>
                    </h3>
                    <span class="pull-right"><i><?= $post->postDate() ?></i></span><br/>
                        <div class="allbackground">
                            <?= $post->content() ?><br/>
                            <?php  if (!isset($comments)){ ?>
                                <a href="index.php?action=displayComments&amp;id=<?= $post->id() ?>" class="pull-right" id="comment-link">Commentaires</a><br/>
                            <?php }?>
                        </div>
                    <br/>
                        <div class="row box">
                            <div class="col-xs-12">
                                <?php 
                                    include ('commentView.php');
                                ?>
                            </div>
                        </div>
                 </div>
            <?php } ?>
                <div  class="col-xs-12 col-sm-12  col-md-6 col-md-6 col-md-offset-3 formbox text-center">
                    <h2>Ajouter un commentaire</h2>
                    <form action="index.php?action=addComment&amp;id=<?= $post->id() ?>" method="post">
                        <label for="author">Pseudo*:</label><br />
                        <input type="text" id="author" name="author" <?php if (isset($erreur)){?>value="<?= htmlspecialchars($_POST['author'])?>"<?php }?> /><br/>
                        
                        <label for="comment">Commentaire*:</label><br />
                        <textarea id="comment" name="comment"><?php if (isset($erreur)){echo htmlspecialchars($_POST['comment']);}?></textarea><br/>
                        <?php if (isset($erreur)){?>
                        <span id="erreur">*<?= $erreur?></span><br/>
                        <?php } ?>
                        <button class="btn btn-primary" type="submit">Ajouter <span class="glyphicon glyphicon-comment" ></span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>


<?php require('template.php'); ?>