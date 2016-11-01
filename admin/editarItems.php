<?php require 'src/editItem.php' ?>
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
              <h1>Editar Items</h1>

              <form action="src/updateItem.php" method="post">
                <div class="form-group">
                  <label class="control-label">Diseñadores</label>
                  <select name="disenador" class="form-control" required>
                    <option value="">Seleccione el diseñador</option>
                    <?php if (count($dataDisenadores) === 0): ?>
                      <option value="">INSERTE PRIMERO LOS DISEÑADORES</option>
                    <?php else: ?>
                      <?php foreach ($dataDisenadores as $disenador): ?>
                      <option <?php echo ($disenador['id'] === $data['disenador_id']) ? 'selected' : null ?> value="<?php echo $disenador['id'] ?>"><?php echo $disenador['nombre'] ?></option>
                      <?php endforeach ?>
                    <?php endif ?>
                  </select>
                </div>
                <div class="form-group">
                  <label class="control-label">Descripcion</label>
                  <textarea maxlength="250" type="text" name="descripcion" id="user" class="form-control" cols="30" rows="5">
                    <?php echo $data['descripcion'] ?>
                  </textarea>
                </div>
                <div class="form-group">
                  <label class="control-label">Valor Social</label>
                  <textarea maxlength="250" type="text" name="valor_social" id="user" class="form-control" cols="30" rows="5">
                    <?php echo $data['valor_social'] ?>
                  </textarea>
                </div>
                <div class="form-group">
                  <label class="control-label">Precio</label>
                  <input value="<?php echo $data['precio'] ?>" type="number" name="precio" id="user" class="form-control">
                </div>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <button type="submit" class="btn btn-primary">Registrar</button>
                <a href="items.php" class="btn btn-default" >Cancelar</a>
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
