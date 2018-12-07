

<?php $title = 'Inscription'; ?>


<?php ob_start(); ?>


<div id="connexion" class='row'>
    <div id="formbox" class="col-xs-12 col-sm-12  col-md-6 col-md-6 col-md-offset-3">
        <div class="text-center">
                <h2>INSCRIPTION</h2>
            <hr>
            
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <form action="index.php?action=registerUser" method="post">

                    <label for="pseudo">Pseudo:</label><br/>
                    <input type="text" id="pseudo" name="pseudo" /><br/>

                    <label for=""pass>Mot de passe:</label><br/>
                    <input type="password" id="pass" name="pass" pattern=".{11,}" required title="11 caracteres minimum"><br/>
                    
                    <label for=""pass>Confirmer le mot de passe:</label><br/>
                    <input type="password" id="pass2" name="pass2" pattern=".{11,}" required title="11 caracteres minimum"><br/>
                    
                    <label for="email">Email:</label><br/>
                    <input type="email" id="email" name="email"><br/>
                    
                    <button class="btn btn-primary" type="submit" name="suscribe"><span class="glyphicon glyphicon-ok-sign" ></span> S'inscrire</button><br/>
                    <span>Vous avez déjà un compte? <a href="index.php?action=goToLogIn">Se Connecter</a></span>
                    <?php if (isset($erreur)){
                        ?>
                    <p id="erreur"><?= $erreur ?></p>
                    <?php } ?>
                    
                </form>
            </div>
        </div>
    </div>

</div>


<?php $content = ob_get_clean(); ?>


<?php require_once('template.php'); ?>
