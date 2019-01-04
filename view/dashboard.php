<?php $title = 'Tableau de bord'; ?>


<?php ob_start(); ?>
<div id="home" class='row'>
    <div id="homebox" class="col-xs-12 col-sm-12  col-md-2 text-center">
        <hr>
            <h3> Tableau de bord</h3>
            <hr>
  <ul class="nav">
    <li class="nav-item">
       <a class="nav-link active" href="index.php?action=displayDashboard"><span class="glyphicon glyphicon glyphicon-th-list"></span> Lister Episodes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="index.php?action=displayDashboard&admin=displayEditMenu" ><span class="glyphicon glyphicon-pencil"></span> Créer un article</a>
     </li>
    <li class="nav-item">
       <a class="nav-link disabled" href="index.php?action=displayDashboard&admin=goToDeleteView"><span class="glyphicon glyphicon-trash"></span> Suppression articles</a>
    </li>
    <li class="nav-item">
       <a class="nav-link disabled" href="index.php?action=displayDashboard&admin=displayReportedComments"><span class="glyphicon glyphicon-comment"></span> Gérer Commentaires</a>
    </li>
  </ul>
                       
    </div>
    
<?php 
    if(isset($_GET['admin'])){
        if ($_GET['admin'] == 'displayEditMenu') {
            include_once('adminEditView.php');
        }
        if ($_GET['admin'] == 'goToDeleteView') {
            include_once('adminDeleteView.php');
        }
        if($_GET['admin'] == 'displayReportedComments'){
            include_once('adminCommentView.php');
        }
        if($_GET['admin'] == 'eraseComment'){
            include_once('adminCommentView.php');
        }
        if($_GET['admin'] == 'returnReportedComment'){
            include_once('adminCommentView.php');
        }
    
    }else{
       include_once('adminListView.php');
    }
?>            
      
</div>

<?php $content = ob_get_clean(); ?>


<?php require_once('template.php'); ?>

