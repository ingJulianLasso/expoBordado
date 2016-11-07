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
              <h1>Registro de Diseñador</h1>

              <form action="src/nuevoDisenador.php" method="post">
                <div class="form-group">
                  <label class="control-label">Nombre Diseñador</label>
                  <input type="text" name="disenador" id="user" class="form-control" placeholder="Digite Diseñador">
                </div>
                <div class="form-group">
                  <label class="control-label">Breve historia (500)</label>
                  <textarea maxlength="500" name="historia" class="form-control"></textarea>
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
