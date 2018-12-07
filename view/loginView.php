<?php $title = 'Connexion'; ?>

<?php ob_start(); ?>

<div id="connexion" class='row'>
    <div id="formbox" class="col-xs-12 col-sm-12  col-md-6 col-md-6 col-md-offset-3">
        <div class="text-center">
                <h2>CONNEXION</h2>
            <hr>
            
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <form action="index.php?action=connection" method="post">
                    <?php if(isset($confirmation)){?>
                    <p id="confirmation"><?= $confirmation ?></p><?php } ?>
                    <label for="pseudo">Pseudo:</label><br/>
                    <input type="text" id="pseudo" name="pseudo" /><br/>

                    <label for=""pass>Mot de passe:</label><br/>
                    <input type="password" id="pass" name="pass" pattern=".{11,}" required title="11 caracteres minimum"><br/>
                    
                    <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok-sign" ></span> Se connecter</button><br/>
                    <span>Vous n'avez pas de compte? <a href="index.php?action=goToSignOn">S'inscrire</a></span>
                </form>
            </div>
        </div>
    </div>

</div>


<?php $content = ob_get_clean(); ?>


<?php require_once('template.php'); ?>
