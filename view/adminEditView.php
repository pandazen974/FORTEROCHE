<div id="edit-content" class="col-md-10 text-center">
       <form action="index.php?action=displayDashboard&amp;admin=editPost" method="post">
           
        <?php if (isset($post)){?> <input type='hidden' name='id' value=<?= $post->id()?>> 
                        <button id="edit-button" class="btn btn-primary pull-right" type="submit"><span class="glyphicon glyphicon-edit" ></span> Editer</span></button>
        <?php }else{?>  <button id="edit-button" class="btn btn-primary pull-right" type="submit"><span class="glyphicon glyphicon-pencil" ></span> Ajouter</span></button><?php } ?>  
               <br/>
       <label for="title" class="edit-menu">Votre titre:</label>
       <input type="text" id="title" name="title" style="width:400px"  value="<?php if(isset($post)){echo $post->title();} ?>" /><br/>  
       
       <label for="content" class="edit-menu">Votre épisode:</label><br/>
       <textarea name="content" id="edit" > <?php if(isset($post)){echo $post->content();} ?></textarea><br/>
       
       </form>
</div>
