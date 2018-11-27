<?php $title = 'Billet simple pour l\'Alaska'; ?>


<?php ob_start(); ?>

<div class='row back '>
    <div class="col-xs-12 box">

        <div class="row">
            <div class="col-xs-12">
                <a href="index.php">Retour aux épisodes</a>
            </div>
        </div>

        <div class="row box">
            <div class="col-lg-12">

                <h3>

                    <?= nl2br(htmlspecialchars($post->title())) ?>
                </h3>



                <p>

                    <?= nl2br(htmlspecialchars($post->content())) ?><br/>
                    <?php if (!isset($comments)){ ?>
                    <a href="index.php?action=displayComments&amp;id=<?= $post->id() ?>" class="pull-right" id="comment-link">Commentaires</a>
                    <?php
    }
                    ?>
                        <?php if (isset($_COOKIE['identifiant'])) // Si il exite un cookie
    { 
    // On affiche les liens
                    ?>
                    

                            <a href="index.php?action=updatePost&amp;id=<?= $post->id() ?>"><span class="glyphicon glyphicon-edit"></span>Modifier</a>
                            <a href="index.php?action=deletePost&amp;id=<?= $post->id() ?>"><span class="glyphicon glyphicon-trash"></span>Supprimer</a>
  <?php                          
} ?>
                </p>
                
                 

            </div>



        <div class="row box">
            <div class="col-xs-12 ">
              <?php 
                include ('commentView.php');
              ?>
            </div>
            
            <div id="comentbox" class="col-lg-12 text-center ">
                <h2>Ajouter un commentaire</h2>
                <form action="index.php?action=addComment&amp;id=<?= $post->id() ?>" method="post">



                    <label for="author">Pseudo:</label><br />
                    <input type="text" id="author" name="author" /><br/>


                    <label for="comment">Commentaire:</label><br />
                    <textarea id="comment" name="comment"></textarea><br/>

                    <button class="btn btn-primary" type="submit">Ajouter <span class="glyphicon glyphicon-comment" ></span></button>
                </form>
            </div>
        </div>
            

        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>


<?php require('template.php'); ?>
