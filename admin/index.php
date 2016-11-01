<?php session_start() ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
    </head>
    <body>

        <div class="container container-fluid">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4">

                    <div class="panel panel-default">
                        <div class="panel panel-body">
                            <h1>Identificación</h1>

                            <?php if (isset($_SESSION['success']['nuevoUsuario']) === true): ?>
                                <div class="alert alert-success"> El Ususario fue Registrado</div>
                                <?php unset($_SESSION['success']['nuevoUsuario']) ?>
                            <?php endif ?>

                            <?php if (isset($_SESSION['errors']['usuarioInvalido']) === true): ?>
                                <div class="alert alert-danger">Usuario Invalido</div>
                                <?php unset($_SESSION['errors']['usuarioInvalido']) ?>
                            <?php endif ?>

                            <form action="src/login.php" method="post">
                                <div class="form-group">
                                    <label class="control-label">Usuario</label>
                                    <input type="text" name="user" id="user" class="form-control" placeholder="Digite Usuario">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Contraseña</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Digite Contraseña">
                                </div>
                                <button type="submit" class="btn btn-primary">Entrar</button>
                                <a href="registro.php" class="btn btn-default" >Registrar</a>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <script src="../js/jquery-1.12.4.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/MiApp.js"></script>
    </body>
</html>
