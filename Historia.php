<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php require 'src/header.php' ?>
    </head>
    <body>
        <?php require 'src/menuTop.php' ?>

        <div class=" container-fluid contenedorPagHist visible-lg visible-md">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="col-lg-1 col-md-1">
                        hola
                    </div>
                    <div class="col-lg-10 col-md-10">
                        <h1 class="tit">Historia</h1>
                        <div class="cont1VistaMonitor">
                            <div class="divCircular"><p>2016</p></div>
                        </div>
                        <div class="cont2VistaMonitor">
                            <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. 
                                Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año
                                1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una g
                                alería de textos y los mezcló de tal manera que logró hacer un librode textos especimen. 
                                No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos 
                                electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la 
                                creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente 
                                con software deautoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
                        </div>
                        <div id="carousel-example-generic02" class="carousel slide" data-ride="carousel">

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox" id="contCarruselVistaMonitor">
                                <div class="item active">
                                    <img src="img/flor1.jpg" alt="..." width="25%" height="200px;">
                                    <div class="carousel-caption">
                                        ...
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/flor2.jpg" alt="..." width="25%" height="200px;">
                                    <div class="carousel-caption">
                                        ...
                                    </div>
                                </div>
                                ...
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic02" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic02" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-1">
                        hola
                    </div>
                </div>
            </div>
        </div>
        <div class="footerVistaMonitor visible-lg visible-md" >
            <p>© Todos los derechos reservados</p>
        </div>

        <div class="contenedorPagHistoria visible-xs">
            <div class="contenedor1PagHist">
                <h1>Historia</h1>
            </div>
            <div class="contenedor2PagHist">
                <h1>2016</h1>
            </div>
            <div class="contenedor3PagHist">
                <p>Lorem Ipsum es simplemente el texto de
                    relleno de las imprentas y archivos de
                    texto. Lorem Ipsum ha sido el texto de
                    relleno estándar de las industrias desde el
                    año 1500, cuando un impresor (N. del T.
                    persona que se dedica a la imprenta)
                    desconocido usó una galería de textos y los
                    mezcló de tal manera que logró hacer un
                    libro de textos especimen. No sólo
                    sobrevivió 500 años, sino que tambien
                    ingresó como texto de relleno en
                    documentos electrónicos, quedando
                    esencialmente igual al original. Fue
                    popularizado en los 60s con la creación de
                    las hojas "Letraset", las cuales contenian
                    pasajes de Lorem Ipsum, y más
                    recientemente con software de
                    autoedición, como por ejemplo Aldus
                    PageMaker, el cual incluye versiones de
                    Lorem Ipsum.</p>
            </div>
            <div id="carousel-example-generic01" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox" id="contCarrusel">
                    <div class="item active">
                        <img src="img/flor1.jpg" alt="..." width="100%" height="200px;">
                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/flor2.jpg" alt="..." width="100%" height="200px;">
                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                    ...
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic01" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic01" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="contenedor4PagHist visible-xs">
            <p>© Todos los derechos reservados</p>
        </div>

        <?php require 'src/footer.php' ?>
    </body>
</html>
