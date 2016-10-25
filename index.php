<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title></title>
    <?php require 'src/header.php' ?>
  </head>
  <body>

    <?php require 'src/menuTop.php' ?>

    <div class="contenedor">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="img/flor1.jpg" alt="...">
            <div class="carousel-caption">
              hola
            </div>
          </div>
          <div class="item">
            <img src="img/flor2.jpg" alt="...">
            <div class="carousel-caption">
              ...
            </div>
          </div>
          <div class="item">
            <img src="img/flor3.jpg" alt="...">
            <div class="carousel-caption">
              ...
            </div>
          </div>
          <div class="item">
            <img src="img/flor4.jpg" alt="...">
            <div class="carousel-caption">
              ...
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    
    <div class="contenedor2">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <h1>ExpoBordado</h1>
            <div class="div1" style="background-image: url('img/img1.jpg'); width: 300px; height: 300px;">
              
            </div>
            <div class="carousel-caption">cristhian
            </div>
          </div>
          <div class="item">
            <img src="img/img2.jpg" alt="...">
            <div class="carousel-caption">
              ...
            </div>
          </div>
          <div class="item">
            <img src="img/img3.jpg" alt="...">
            <div class="carousel-caption">
              ...
            </div>
          </div>
          <div class="item">
            <img src="img/img4.jpg" alt="...">
            <div class="carousel-caption">
              ...
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <?php require 'src/footer.php' ?>
    <script>
      $(document).ready(function () {
        $('.carousel').carousel();
      });
    </script>
  </body>
</html>
