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
            <h1>Items</h1>

            <div class="btn-group btn-group-justified" role="group">
                <a href="home.php" class="btn btn-default">Home</a>
                <a href="disenadores.php" class="btn btn-default">Diseñadores</a>
                <a href="items.php" class="btn btn-default">Items</a>
                <a href="imagenes.php" class="btn btn-default">Imagenes</a>
            </div>
            <br>

            <table class="table">
                <thead>
                    <tr>
                        <th>&nbsp;</th>
                        <th>Descripcion</th>
                        <th>Valor social</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type="radio" value="" name="id">
                        </td>
                        <td>
                            Have a bunch of buttons that all trigger the same modal, 
                            just with slightly different contents? Use event.relatedTarget 
                            and HTML data-* attributes (possibly via jQuery) to vary the 
                            contents of the modal depending on which button was clicked. 
                            See the Modal Events docs for details on relatedTarget,
                        </td>
                        <td>
                            To take advantage of the Bootstrap grid system within a modal, 
                            just nest .rows within the .modal-body and then use the normal 
                            grid system classes.
                        </td>
                        <td>
                            $180.000
                        </td>
                        <td>
                            <a href="editarItems.php" class="btn btn-link"><i class="glyphicon glyphicon-pencil"></i></a>
                            <a class="btn btn-link" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="glyphicon glyphicon-trash"></i></a><!-- Small modal -->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" value="" name="id">
                        </td>
                        <td>
                            Have a bunch of buttons that all trigger the same modal, 
                            just with slightly different contents? Use event.relatedTarget 
                            and HTML data-* attributes (possibly via jQuery) to vary the 
                            contents of the modal depending on which button was clicked. 
                            See the Modal Events docs for details on relatedTarget,
                        </td>
                        <td>
                            To take advantage of the Bootstrap grid system within a modal, 
                            just nest .rows within the .modal-body and then use the normal 
                            grid system classes.
                        </td>
                        <td>
                            $180.000
                        </td>
                        <td>
                            <a href="editarItems.php" class="btn btn-link"><i class="glyphicon glyphicon-pencil"></i></a>
                            <a class="btn btn-link" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="glyphicon glyphicon-trash"></i></a><!-- Small modal -->
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="btn-group btn-group-justified" role="group">
                <a href="registroItems.php" class="btn btn-default">Insertar Items</a>
            </div>



            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <p style="text-align: center">Desea Eliminar Este Items</p>
                        <div class="btn-group btn-group-justified" role="group">
                            <a href="home.php" class="btn btn-primary">Eliminar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/MiApp.js"></script>
    </body>
</html>