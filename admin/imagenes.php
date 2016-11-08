<?php require 'src/imagenes.php' ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
    <style>
      .img50 {
        min-height: 50px; max-height: 50px;
      }
    </style>
  </head>
  <body style="margin-bottom: 40px">

    <div class="container container-fluid">
      <h1>Diseñadores</h1>

      <div class="btn-group btn-group-justified btn-group-lg" role="group">
        <a href="disenadores.php" class="btn btn-default"><i class="glyphicon glyphicon-user"></i></a>
        <a href="items.php" class="btn btn-default"><i class="glyphicon glyphicon-th-large"></i></a>
        <a href="imagenes.php" class="btn btn-default active"><i class="glyphicon glyphicon-picture"></i></a>
      </div>
      <br>
      <div class="btn-group btn-group-justified btn-group-lg" role="group">
        <a href="registroImagen.php" class="btn btn-default">Insertar imágenes</a>
      </div>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Diseñador</th>
              <th>Imagenes</th>
            </tr>
          </thead>
          <tbody>

            <?php foreach ($newData as $imagen): ?>
              <tr>
                <td style="min-width: 30%; min-width: 30%">
                  <?php echo $imagen['item'] . ' - ' . $imagen['disenador'] ?>
                </td>
                <td style="min-width: 70%; min-width: 70%">
                  <div class="btn-group btn-group-lg" role="group">
                    <?php foreach ($imagen['imagen'] as $img): ?>
                      <a data-toggle="modal" data-target="#deleteModal<?php echo $img['id'] ?>" class="btn btn-default" role="group">
                        <img src="../uploads/<?php echo $img['nombre'] ?>" class="img50">
                      </a>

                      <div id="deleteModal<?php echo $img['id'] ?>" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                        <div class="modal-dialog modal-sm" role="document">
                          <div class="modal-content">
                            <div class="modal-body">
                              <p style="text-align: center">¿Desea borrar la imagen indicada?</p>
                            </div>
                            <div class="modal-footer">
                              <a href="src/deleteImagen.php?id=<?php echo $img['id'] ?>&img=<?php echo $img['nombre'] ?>" class="btn btn-danger btn-block">Borrar</a>
                              <a data-dismiss="modal" class="btn btn-default btn-block">Cancelar</a>
                            </div>
                          </div>
                        </div>
                      </div>

                    <?php endforeach ?>
                    <a href="registroImagen.php?id=<?php echo $imagen['item'] ?>" class="btn btn-default" role="group"><span class="glyphicon glyphicon-plus img50" aria-hidden="true"></span></a>
                  </div>
                </td>
              </tr>
            <?php endforeach ?>

          </tbody>
        </table>
      </div>
      <div class="btn-group btn-group-justified btn-group-lg" role="group">
        <a href="registroImagen.php" class="btn btn-default">Insertar imágenes</a>
      </div>

      <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <p style="text-align: center">Desea Eliminar Esta Imagen</p>
            <div class="btn-group btn-group-justified" role="group">
              <a href="home.php" class="btn btn-primary">Eliminar</a>
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
