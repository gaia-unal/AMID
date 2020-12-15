<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AMID</title>
    <?php $this->load->view('initial/linkGenerico');?>
    <link href="<?php echo base_url();?>public/assets/modulos/mod7/css/u13estilo.css" rel="stylesheet">
</head>

<body>
    <?php $this->load->view('initial/nav');?>



    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">

            <div class="list-group list-group-flush">

                <a href="<?php echo base_url();?>modulo1" class="list-group-item list-group-item-action bg-light"><i
                        class="dropdown-menu"></i>Módulo 1<span class="arrow"></span></a>


                <a href="<?php echo base_url();?>modulo2" class="list-group-item list-group-item-action bg-light">
                    Módulo 2</a>

                <a href="<?php echo base_url();?>modulo3" class="list-group-item list-group-item-action bg-light">
                    Módulo 3</a>

                <a href="<?php echo base_url();?>modulo4" class="list-group-item list-group-item-action bg-light">
                    Módulo 4</a>

                <a href="<?php echo base_url();?>modulo5" class="list-group-item list-group-item-action bg-light">
                    Módulo 5</a>

                <a href="<?php echo base_url();?>modulo6" class="list-group-item list-group-item-action bg-light">
                    Módulo 6</a>

                <a href="<?php echo base_url();?>modulo7" class="list-group-item list-group-item-action bg-light">
                    Módulo 7</a>

                <ul class="list-group-item">

                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo7/unidad1"
                            class="list-group-item list-group-item-action bg-light">Unidad 1</a>

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo7/unidad1/contenidos"
                                    class="list-group-item">Contenidos</a>
                                <a href="<?php echo base_url();?>modulo7/unidad1/evaluacion1" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>

                    <a href="<?php echo base_url();?>modulo7/unidad2" class="list-group-item">Unidad 2</a>



                </ul>

                <a href="<?php echo base_url();?>modulo8" class="list-group-item list-group-item-action bg-light">
                    Módulo 8</a>
                <a href="<?php echo base_url();?>modulo9" class="list-group-item list-group-item-action bg-light">
                    Módulo 9</a>
                <a href="<?php echo base_url();?>modulo10" class="list-group-item list-group-item-action bg-light">
                    Módulo 10</a>
                <a href="<?php echo base_url();?>modulo11" class="list-group-item list-group-item-action bg-light">
                    Módulo 11</a>
                <a href="<?php echo base_url();?>modulo12" class="list-group-item list-group-item-action bg-light">
                    Módulo 12</a>

            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom d-lg-none">
                <button class="btn " id="menu-toggle"><i class="fas fa-align-justify"></i></button>

            </nav>


            <!--breadcrumbs-->

            <nav class="bread-style" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>inicio/main">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo7">Módulo 7</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo7/unidad1">Unidad 1</a></li>

                    <li class="breadcrumb-item active" aria-current="page">Contenido</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 1: Los jóvenes en el mundo virtual</h1>
                    
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <br>
                        <h4 class="subtitle">Web</h4><br>

                        <div class="contenido">

                        <div>
                            <center>
                                <img class="bounceIn animated" id="web" src="<?php echo base_url();?>public/assets/modulos/mod7/img/web.png" alt="web">
                                <p>Fuente: https://sergioescriba.com/tipos-clasificacion-paginas-web/</p>
                            </center>
                        </div>
                        <p class="card-text">
                            <ul class="content">
                                <a href="#" onclick="preg1();">
                                        <li><h4>¿Qué es?</h4></li>
                                    </a>
                                <a href="#" onclick="preg2();">
                                        <li><h4>Web 2.0</h4></li>
                                    </a>
                                <a href="#" onclick="preg3();">
                                        <li><h4>Ventajas</h4></li>
                                    </a>
                                <a href="#" onclick="preg4();">
                                        <li><h4>Ejemplos Web 2.0</h4></li>
                                    </a>
                                <a href="#" onclick="preg5();">
                                        <li><h4>Usos</h4></li>
                                    </a>
                                <a href="#" onclick="preg6();">
                                        <li><h4>Navegadores</h4></li>
                                    </a>
                            </ul>
                            <h4>Diferencia entre Web e Internet</h4>
                            <p>Puedes dar clic a la imagen para verla más amplia</p>
                            <div class="img"><a href="<?php echo base_url();?>public/assets/modulos/mod7/img/diferencias.png" target="_blank"> <img id="diferencias"
                                        src="<?php echo base_url();?>public/assets/modulos/mod7/img/diferencias.png" alt="diferencias"></a></div>
                            <center>
                                <p>Fuente: https://www.diferenciador.com/diferencia-entre-internet-y-web/</p>
                            </center>
                            <h4>Referencias</h4>
                            [1]Autores: Julián Pérez Porto y María Merino. Publicado: 2010. Actualizado: 2013.
                            Definicion.de: Definición de web (https://definicion.de/web/) <br>[2] Autor: María Estela
                            Raffino. Para: Concepto.de. Disponible en: https://concepto.de/internet/. Consultado: 14 de
                            julio de 2019. Fuente: https://concepto.de/internet/#ixzz5tgGI0wGw <br> [3]
                            http://recursostic.educacion.es/observatorio/web/es/internet/web-20/1060-la-web-20-recursos-educativos
                            <br>[4] Fuente imagen Web 2.0: https://diferencias.eu/entre-web-1-0-y-web-2-0/
                        </p>
                        

                        </div>
                    </div>
                </div>



            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo7/unidad1/actividad6" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo7/unidad1/actividad8" class="btn btn_navegacion btnSig Retraso5">Siguiente</a>
            </center>
            
            <?php $this->load->view('initial/paginacion');?>


            <p class="final_contenido">Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/">
                    Licencia Creative
                    Commons
                    Reconocimiento Compartir igual 4.0</a></p>
            <br>
            <!-- /#page-content-wrapper -->
        </div>

    </div>


    <?php $this->load->view('initial/footer');?>
    <?php $this->load->view('initial/scriptGenerico');?>
    <script src="<?php echo base_url();?>public/assets/modulos/mod7/js/u13info.js"></script>

    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


</body>

</html>