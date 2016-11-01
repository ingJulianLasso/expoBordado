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
                            <h1>Registro</h1>  
                            <form action="src/nuevoUsuario.php" method="post">
                                <div class="form-group">
                                    <label class="control-label">Usuario</label>
                                    <input type="text" name="user" id="user" class="form-control" placeholder="Digite Usuario">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Contraseña</label>
                                    <input type="password" name="password1" id="password1" class="form-control" placeholder="Digite Contraseña">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Confirme Contraseña</label>
                                    <input type="password" name="password2" id="password2" class="form-control" placeholder="Digite Contraseña">
                                </div>
                                <button type="submit" class="btn btn-primary">Registrar</button>
                                <a href="index.php" class="btn btn-default" >Cancelar</a>
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
