<?php session_start() ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/MiEstilo.css">
    </head>
    <body>

        <div class="container container-fluid">
            <h1>Bienvenido a la BdExpoBordados<small><a href="src/logout.php" class="btn btn-link"><i class="glyphicon glyphicon-log-out"></i></a></small></h1>

            <div class="btn-group btn-group-justified" role="group">
                <a href="home.php" class="btn btn-default">Home</a>
                <a href="disenadores.php" class="btn btn-default">Diseñadores</a>
                <a href="items.php" class="btn btn-default">Items</a>
                <a href="imagenes.php" class="btn btn-default">Imagenes</a>
            </div>
            
        </div>

        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/MiApp.js"></script>

    </body>
</html>
