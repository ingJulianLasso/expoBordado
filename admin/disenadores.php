<?php require 'src/disenadores.php' ?>
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
  <body style="margin-bottom: 40px">

    <div class="container container-fluid">
      <h1>Diseñadores</h1>

      <div class="btn-group btn-group-justified btn-group-lg" role="group">
        <a href="disenadores.php" class="btn btn-default active"><i class="glyphicon glyphicon-user"></i></a>
        <a href="items.php" class="btn btn-default"><i class="glyphicon glyphicon-th-large"></i></a>
        <a href="imagenes.php" class="btn btn-default"><i class="glyphicon glyphicon-picture"></i></a>
      </div>
      <br>
      <div class="btn-group btn-group-justified btn-group-lg" role="group">
        <a href="registroDisenador.php" class="btn btn-default">Insertar Diseñador</a>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>Diseñador</th>
              <th>Opciones</th>
            </tr>
          </thead>
          <tbody>
            <?php if (is_array($data) === false): ?>
              <tr>
                <td colspan="2"><p>No hay diseñadores registrados</p></td>
              </tr>
            <?php else: ?>
              <?php foreach ($data as $disenador): ?>
                <tr>
                  <td>
                    <?php echo $disenador['nombre'] ?>
                  </td>
                  <td>
                    <a href="editarDisenador.php?id=<?php echo $disenador['id'] ?>" class="btn btn-link"><i class="glyphicon glyphicon-pencil"></i></a>
                    <a class="btn btn-link" data-toggle="modal" data-target="#modal<?php echo $disenador['id'] ?>"><i class="glyphicon glyphicon-trash"></i></a><!-- Small modal -->
                    <div id="modal<?php echo $disenador['id'] ?>" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                      <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                          <p style="text-align: center">Desea Eliminar Este Diseñador <?php echo $disenador['nombre'] ?></p>
                          <div class="btn-group btn-group-justified" role="group">
                            <a href="src/deleteDisenador.php?id=<?php echo $disenador['id'] ?>" class="btn btn-danger">Aceptar</a>
                            <a href="" class="btn btn-default">Cancelar</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              <?php endforeach ?>
            <?php endif ?>
          </tbody>
        </table>
      </div>

      <div class="btn-group btn-group-justified btn-group-lg" role="group">
        <a href="registroDisenador.php" class="btn btn-default">Insertar Diseñador</a>
      </div>
    </div>

    <script src="../js/jquery-1.12.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/MiApp.js"></script>
  </body>
</html>
