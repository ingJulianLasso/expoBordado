<?php require 'src/resitroImagen.php' ?>
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
              <h1>Registro de Imagen</h1>

              <form action="src/uploadImagen.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="control-label">Seleccione el ítem</label>
                  <select class="form-control" name="item_id" required>
                    <option value="">Seleccione item por código</option>
                    <?php foreach ($data as $item): ?>
                    <option <?php echo ($id == $item['id']) ? 'selected' : null ?> value="<?php echo $item['id'] ?>"><?php echo $item['id'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
                <div class="form-group">
                  <label class="control-label">Seleccionar Imagen</label>
                  <input accept=".jpg,.gif,.png" required type="file" name="imagen" id="imagen" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Registrar</button>
                <a href="imagenes.php" class="btn btn-default" >Cancelar</a>
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
