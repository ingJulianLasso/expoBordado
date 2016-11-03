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
        <a href="disenadores.php" class="btn btn-default">Diseñadores</a>
        <a href="items.php" class="btn btn-default">Items</a>
        <a href="imagenes.php" class="btn btn-default active">Imagenes</a>
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

            <tr>
              <td>
                Cristhian
              </td>
              <td>
                <img src="imagenes/No Llores Mas.jpg" width="100" height="120" class="img1">
                <a id="icon1" class="btn btn-link" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="glyphicon glyphicon-trash"></i></a><!-- Small modal -->
                <img src="imagenes/Amor En Practica.jpg" width="100" height="120">
                <a id="icon2" class="btn btn-link" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="glyphicon glyphicon-trash"></i></a><!-- Small modal -->
                <img src="imagenes/No Llores Mas.jpg" width="100" height="120">
                <a id="icon3" class="btn btn-link" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="glyphicon glyphicon-trash"></i></a><!-- Small modal -->
                <img src="imagenes/Amor En Practica.jpg" width="100" height="120">
                <img src="imagenes/No Llores Mas.jpg" width="100" height="120">
                <img src="imagenes/Amor En Practica.jpg" width="100" height="120">
              </td>
              <td>
                <a href="registroImagen.php" class="btn btn-default" id="btnAgregarImg"><i class="glyphicon glyphicon-plus"></i></a>
              </td>
            </tr>

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
