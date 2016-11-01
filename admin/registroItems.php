<?php require 'src/registroItems.php' ?>
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
              <h1>Registro de Items</h1>

              <form action="src/registrarItem.php" method="post">
                <div class="form-group">
                  <label class="control-label">Diseñadores</label>
                  <select name="id_disenador" class="form-control" required>
                    <option value="">Seleccione el diseñador</option>
                    <?php if (count($data) === 0) : ?>
                      <option value="">INSERTE PRIMERO LOS DISEÑADORES</option>
                    <?php else: ?>
                      <?php foreach ($data as $disenador): ?>
                        <option value="<?php echo $disenador['id'] ?>"><?php echo $disenador['nombre'] ?></option>
                      <?php endforeach ?>
                    <?php endif ?>
                  </select>
                </div>
                <div class="form-group">
                  <label class="control-label">Descripcion</label>
                  <textarea required maxlength="250" type="text" name="descripcion" id="user" class="form-control" cols="30" rows="5" placeholder="Digite Descripcion"></textarea>
                </div>
                <div class="form-group">
                  <label class="control-label">Valor Social</label>
                  <textarea required maxlength="250" type="text" name="valor_social" id="user" class="form-control" cols="30" rows="5" placeholder="Digite Valor Social"></textarea>
                </div>
                <div class="form-group">
                  <label class="control-label">Precio</label>
                  <input required type="number" name="precio" id="user" class="form-control" placeholder="Digite Precio">
                </div>
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