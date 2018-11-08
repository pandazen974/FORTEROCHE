<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8"/>
    <title>
        <?= $title ?>
    </title>
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/Projet_4/public/css/style.css" rel="stylesheet" />
</head>



<body>
    <div class="container-fluid">
        <!-- Navigation
      ================================================== -->

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                    <a class="navbar-brand" href="#page-top">Jean Forteroche</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="hidden"><a href="#page-top"></a></li>
                        <li><a href="../../index.php"><span class="glyphicon glyphicon-book"></span> Episodes</a></li>
                        <li><a href="index.php?action=goToLogIn"><span class="glyphicon glyphicon-log-in"></span> S'identifier</a></li>
                    </ul>
                </div>
            </div>
        </nav>


        <?= $content ?>
            <footer class="row text-center ">
                <div class="col-xs-12">
                    <a class="btn btn-default" href="#"><i class="fa fa-twitter fa-2x"></i></a>
                    <a class="btn btn-default" href="#"><i class="fa fa-facebook fa-2x"></i></a>
                    <a class="btn btn-default" href="#"><i class="fa fa-google-plus fa-2x"></i></a>
                    <a class="btn btn-default" href="#"><i class="fa fa-spotify fa-2x"></i></a>
                </div>
            </footer>
    </div>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Javascript de Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>

</html>
