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
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                    
                    <div class="panel panel-default">
                        <div class="panel panel-body">
                            <h1>Editar Items</h1>
                            
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label class="control-label">Descripcion</label>
                                    <textarea type="text" name="user" id="user" class="form-control" cols="30" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Valor Social</label>
                                    <textarea type="text" name="user" id="user" class="form-control" cols="30" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Precio</label>
                                    <input type="number" name="precio" id="user" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Registrar</button>
                                <a href="items.php" class="btn btn-default" >Cancelar</a>
                            </form>
                            
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
