<?php require 'src/editDisenador.php' ?>
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
              <h1>Editar Diseñador</h1>

              <form action="src/updateDisenador.php" method="post">
                <div class="form-group">
                  <label class="control-label">Nombre a Modificar</label>
                  <input type="text" name="disenador" id="disenador" class="form-control" value="<?php echo $data['nombre'] ?>">
                  <input type="hidden" name="id" id="id" value="<?php echo filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT) ?>">
                </div>
                <button type="submit" class="btn btn-primary">Registrar</button>
                <a href="disenadores.php" class="btn btn-default" >Cancelar</a>
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
