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
            <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/flor1.jpg" alt="...">
                        <div class="carousel-caption">
                            <div class="TextOpaco">
                                <p>ExpoBordado 2016</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/flor2.jpg" alt="...">
                        <div class="carousel-caption">
                            <div class="TextOpaco">
                                <p>ExpoBordado 2015</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/flor3.jpg" alt="...">
                        <div class="carousel-caption">
                            <div class="TextOpaco">
                                <p>ExpoBordado 2014</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/flor4.jpg" alt="...">
                        <div class="carousel-caption">
                            <div class="TextOpaco">
                                <p>ExpoBordado 2013</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="contenedor2">
            <div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic1" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic1" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic1" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic1" data-slide-to="3"></li>
                    <li data-target="#carousel-example-generic1" data-slide-to="5"></li>
                    <li data-target="#carousel-example-generic1" data-slide-to="6"></li>
                    <br>
                    <li data-target="#carousel-example-generic1" data-slide-to="7"></li>
                    <li data-target="#carousel-example-generic1" data-slide-to="8"></li>
                    <li data-target="#carousel-example-generic1" data-slide-to="9"></li>
                    <li data-target="#carousel-example-generic1" data-slide-to="10"></li>
                    <li data-target="#carousel-example-generic1" data-slide-to="11"></li>
                    <li data-target="#carousel-example-generic1" data-slide-to="12"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">

                    <div class="item active">
                        <div class="div1">
                            <h1>ExpoBordado 2016</h1>
                        </div>
                        <div class="div2">
                            <p><img border="2" src="img/Patrocinador1.png" width="210" height="210" alt="..."></p>
                        </div>
                        <br>
                        <div class="carousel-caption">
                            <p>Lorem Ipsum ha sido el texto<br>
                                de relleno estándar de las<br>
                                Lorem Ipsum ha sido el texto<br>
                                Lorem Ipsum ha sido el texto<br>
                                de relleno estándar de las<br>
                                Lorem Ipsum ha sido el texto<br>
                                de relleno estándar de las
                            </p>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Video 1</button>
                        </div>
                    </div>

                    <div class="item">
                        <h1 style="text-align: center;">ExpoBordado 2016</h1>
                        <div class="div1" style="background-image: url('img/img2.jpg'); width: 300px; height: 300px;"></div>
                        <div class="carousel-caption">
                            Lorem Ipsum ha sido el texto<br>
                            de relleno estándar de las<br>
                            industrias desde el año 1500,
                        </div>
                        <!-- Large modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" id="btnVideo">Video</button>
                    </div>

                    <div class="item">
                        <h1 style="text-align: center;">ExpoBordado 2016</h1>
                        <div class="div1" style="background-image: url('img/img3.jpg'); width: 300px; height: 300px;"></div>
                        <div class="carousel-caption">
                            Lorem Ipsum ha sido el texto<br>
                            de relleno estándar de las<br>
                            industrias desde el año 1500,<br>
                            cuando un impresor (N. del T.<br>
                            persona que se dedica a la<br>
                            imprenta) desconocido usó una<br>
                            galería de textos y los mezcló<br>
                            de tal manera que logró hacer<br>
                            un libro de textos especimen.
                        </div>
                        <!-- Large modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" id="btnVideo">Video</button>
                    </div>

                    <div class="item">
                        <h1 style="text-align: center;">ExpoBordado 2016</h1>
                        <div class="div1" style="background-image: url('img/img4.jpg'); width: 300px; height: 300px;"></div>
                        <div class="carousel-caption">
                            Lorem Ipsum ha sido el texto<br>
                            de relleno estándar de las<br>
                            industrias desde el año 1500,<br>
                            cuando un impresor (N. del T.<br>
                            persona que se dedica a la<br>
                            imprenta
                        </div>
                        <!-- Large modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" id="btnVideo">Video</button>
                    </div>

                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic1" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic1" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="contenedor3">
            <div id="carousel-example-generic3" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox" id="carousel-inner3">
                    <div class="item active">
                        <a data-toggle="modal" data-target=".bs-example-modal-lg" ><img src="img/Diseñador1.jpg" alt="..."></a>
                        <a data-toggle="modal" data-target=".bs-example-modal-lg" ><img src="img/Diseñador2.jpg" alt="..."></a>
                        <a data-toggle="modal" data-target=".bs-example-modal-lg" ><img src="img/Diseñador3.png" alt="..."></a>
                        <a data-toggle="modal" data-target=".bs-example-modal-lg" ><img src="img/Diseñador4.jpg" alt="..."></a>
                        <div class="carousel-caption">
                        </div>
                    </div>

                    <div class="item">
                        <a data-toggle="modal" data-target=".bs-example-modal-lg" ><img src="img/Diseñador5.jpg" alt="..."></a>
                        <a data-toggle="modal" data-target=".bs-example-modal-lg" ><img src="img/Diseñador6.jpg" alt="..."></a>
                        <a data-toggle="modal" data-target=".bs-example-modal-lg" ><img src="img/Diseñador7.jpg" alt="..."></a>
                        <a data-toggle="modal" data-target=".bs-example-modal-lg" ><img src="img/Diseñador8.jpg" alt="..."></a>
                        <div class="carousel-caption">
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic3" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic3" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="contenedor4">
            <p><a data-toggle="modal" data-target=".bs-example-modal-lg"><img border="2" src="img/youtube.png" width="120" height="120" alt="..."></a></p>
            <p><a data-toggle="modal" data-target=".bs-example-modal-lg"><img border="2" src="img/instagram.png" width="120" height="120" alt="..."></a></p>
            <p><a data-toggle="modal" data-target=".bs-example-modal-lg"><img border="2" src="img/facebook.png" width="120" height="120" alt="..."></a></p>
            <p><a data-toggle="modal" data-target=".bs-example-modal-lg"><img border="2" src="img/twitter.png" width="120" height="120" alt="..."></a></p>
        </div>

        <div class="contenedor5">
            <p><a data-toggle="modal" data-target=".bs-example-modal-lg"><img border="2" src="img/Logo.png" width="120" height="120" alt="..."></a></p>
            <p>Dia/Mes/Año</p>
        </div>

        <div class="contenedor6">
            <p><a data-toggle="modal" data-target=".bs-example-modal-lg"><img border="2" src="img/Patrocinador1.png" width="210" height="210" alt="..."></a></p>
            <p><a data-toggle="modal" data-target=".bs-example-modal-lg"><img border="2" src="img/Patrocinador1.png" width="210" height="210" alt="..."></a></p>
        </div>

        <div class="contenedor7">
            <p>© Todos los derechos recervados</p>
        </div>

        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    ...
                </div>
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
