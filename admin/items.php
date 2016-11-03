<?php require 'src/items.php' ?>
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
      <h1>Items</h1>

      <div class="btn-group btn-group-justified btn-group-lg" role="group">
        <a href="disenadores.php" class="btn btn-default">Diseñadores</a>
        <a href="items.php" class="btn btn-default active">Items</a>
        <a href="imagenes.php" class="btn btn-default">Imagenes</a>
      </div>
      <br>
      <div class="btn-group btn-group-justified btn-group-lg" role="group">
        <a href="registroItems.php" class="btn btn-default">Insertar Items</a>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>Diseñador</th>
              <th>Descripcion</th>
              <th>Valor social</th>
              <th>Precio</th>
            </tr>
          </thead>
          <tbody>
            <?php if (count($data) === 0): ?>
              <tr>
                <td colspan="4"><p>No hay items a mostrar</p></td>
              </tr>
            <?php else: ?>
              <?php foreach ($data as $item):
                ?>
                <tr>
                  <td>
                    <?php echo $item['id'] ?>
                  </td>
                  <td>
                    <?php echo $item['disenador'] ?>
                  </td>
                  <td>
                    <?php echo $item['descripcion'] ?>
                  </td>
                  <td>
                    <?php echo $item['valor_social'] ?>
                  </td>
                  <td>
                    <?php echo $item['precio'] ?>
                  </td>
                  <td>
                    <a href="editarItems.php?id=<?php echo $item['id'] ?>" class="btn btn-link"><i class="glyphicon glyphicon-pencil"></i></a>
                    <a class="btn btn-link" data-toggle="modal" data-target="#<?php echo ($item['publicado'] == 1) ? 'unPublicModal' . $item['id'] : 'publicModal' . $item['id'] ?>"><i class="glyphicon glyphicon-<?php echo ($item['publicado'] == 1) ? 'cloud' : 'folder-open' ?>"></i></a>
                    <a class="btn btn-link" data-toggle="modal" data-target="#modal<?php echo $item['id'] ?>"><i class="glyphicon glyphicon-trash"></i></a><!-- Small modal -->
                    <a href="registroImagen.php?id=<?php echo $item['id'] ?>" class="btn btn-link"><i class="glyphicon glyphicon-picture"></i></a><!-- Small modal -->

                    <div id="unPublicModal<?php echo $item['id'] ?>" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                      <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                          <div class="modal-body">
                            <p style="text-align: center">¿Desea ocultar este item?</p>
                          </div>
                          <div class="modal-footer">
                            <a href="src/unpublicItem.php?id=<?php echo $item['id'] ?>" class="btn btn-primary btn-block">Ocultar</a>
                            <a data-dismiss="modal" class="btn btn-default btn-block">Cancelar</a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div id="publicModal<?php echo $item['id'] ?>" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                      <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                          <div class="modal-body">
                            <p style="text-align: center">¿Desea Publicar este item?</p>
                          </div>
                          <div class="modal-footer">
                            <a href="src/publicItem.php?id=<?php echo $item['id'] ?>" class="btn btn-primary btn-block">Publicar</a>
                            <a data-dismiss="modal" class="btn btn-default btn-block">Cancelar</a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div id="modal<?php echo $item['id'] ?>" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                      <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                          <div class="modal-body">
                            <p style="text-align: center">Desea Eliminar Este Items</p>
                          </div>
                          <div class="modal-footer">
                            <a href="src/deleteItem.php?id=<?php echo $item['id'] ?>" class="btn btn-danger btn-block">Eliminar</a>
                            <a data-dismiss="modal" class="btn btn-default btn-block">Cancelar</a>
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
        <a href="registroItems.php" class="btn btn-default">Insertar Items</a>
      </div>
    </div>

    <script src="../js/jquery-1.12.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/MiApp.js"></script>
  </body>
</html>