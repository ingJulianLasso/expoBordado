<?php require 'src/lookbook.php' ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <?php require 'src/header.php' ?>
  </head>
  <body>
    <?php require 'src/menuTop.php' ?>
    <div class="container container-fluid contenedorLookBook">
      <div class="row">
        <div class="col-lg-offset-4 col-lg-4 col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-4 col-xs-12">
          <select class="form-control" id="disenadores">
            <?php foreach($disenadores as $disenador): ?>
            <option value="<?php echo $disenador['id'] ?>"><?php echo $disenador['nombre'] ?></option>
            <?php $historia = $disenador['historia'] ?>
            <?php endforeach ?>
          </select>
        </div>
      </div>
      <div class="row descripcionDisenador">
        <div id="breveHistoria" class="col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-12"><?php echo $historia ?></div>
      </div>
      
      <?php $x = 1 ?>
      <?php foreach ($data as $id => $item): ?>
      
      <?php if($x%2 == 0): ?>
      
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div id="carrusel<?php echo $id ?>" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <?php $y = 1 ?>
              <?php foreach($item['imagen'] as $img): ?>
              <div class="item <?php echo ($y == 1) ? 'active' : null ?>">
                <img src="uploads/<?php echo $img ?>" class="img-responsive">
                <div class="carousel-caption">
                  Precio: <?php echo $item['precio'] ?>
                </div>
              </div>
              <?php $y++ ?>
              <?php endforeach ?>
            </div>
            <?php if($y-1 > 1): ?>
            <a class="left carousel-control" href="#carrusel<?php echo $id ?>" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carrusel<?php echo $id ?>" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            <?php endif ?>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <h1 class="text-center">Descripcion</h1>
          <p><?php echo $item['descripcion'] ?></p>
          <br>
          <h1 class="text-center">Valor Social</h1>
          <p><?php echo $item['valor_social'] ?></p>
          <br>
          <div class="text-center">
            <a href="<?php echo $item['tienda'] ?>" target="_new" class="btn btn-default btn-lg">Comprar</a>
          </div>
          <br>
        </div>
      </div>
      
      <?php elseif($x%2 != 0 and $x == count($data)): ?>
    
      <div class="row descripcionDisenador">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div id="carrusel<?php echo $id ?>" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <?php $y = 1 ?>
              <?php foreach($item['imagen'] as $img): ?>
              <div class="item <?php echo ($y == 1) ? 'active' : null ?>">
                <img src="uploads/<?php echo $img ?>" class="img-responsive">
                <div class="carousel-caption">
                  Precio: <?php echo $item['precio'] ?>
                </div>
              </div>
              <?php $y++ ?>
              <?php endforeach ?>
            </div>
            <?php if($y-1 > 1): ?>
            <a class="left carousel-control" href="#carrusel<?php echo $id ?>" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carrusel<?php echo $id ?>" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            <?php endif ?>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <h1 class="text-center">Descripcion</h1>
          <p><?php echo $item['descripcion'] ?></p>
          <br>
          <h1 class="text-center">Valor Social</h1>
          <p><?php echo $item['valor_social'] ?></p>
          <br>
          <div class="text-center">
            <a href="<?php echo $item['tienda'] ?>" target="_new" class="btn btn-default btn-lg">Comprar</a>
          </div>
          <br>
        </div>
      </div>
    
      <?php else: ?>
    
      <div class="row descripcionDisenador">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div id="carrusel<?php echo $id ?>" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <?php $y = 1 ?>
              <?php foreach($item['imagen'] as $img): ?>
              <div class="item <?php echo ($y == 1) ? 'active' : null ?>">
                <img src="uploads/<?php echo $img ?>" class="img-responsive">
                <div class="carousel-caption">
                  Precio: <?php echo $item['precio'] ?>
                </div>
              </div>
              <?php $y++ ?>
              <?php endforeach ?>
            </div>
            <?php if($y-1 > 1): ?>
            <a class="left carousel-control" href="#carrusel<?php echo $id ?>" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carrusel<?php echo $id ?>" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            <?php endif ?>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <h1 class="text-center">Descripcion</h1>
          <p><?php echo $item['descripcion'] ?></p>
          <br>
          <h1 class="text-center">Valor Social</h1>
          <p><?php echo $item['valor_social'] ?></p>
          <br>
          <div class="text-center">
            <a href="<?php echo $item['tienda'] ?>" target="_new" class="btn btn-default btn-lg">Comprar</a>
          </div>
          <br>
        </div>
    
      <?php endif ?>
      <?php $x++ ?>
      <?php endforeach ?>

    </div>
    <?php require 'src/footer.php' ?>
    <script>
      $(document).ready(function(){
        $('.carousel').carousel();
        $('#disenadores').change(function(){
          $.ajax({
            url: 'getHistoria.php',
            type: 'GET',
            data: {
              id: $('#disenadores').val()
            },
            dataType: 'json',
            success: function(data){
              $('#breveHistoria').text(data.historia);
            }
          });
        });
      });
    </script>
  </body>
</html>
