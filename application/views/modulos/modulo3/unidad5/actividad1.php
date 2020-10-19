<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AMID</title>
    <?php $this->load->view('initial/linkGenerico');?>
    <link href="<?php echo base_url();?>public/assets/modulos/mod3/css/u5estilo.css" rel="stylesheet">
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

                <ul class="list-group-item">

                    <a href="<?php echo base_url();?>modulo3/unidad1"
                        class="list-group-item list-group-item-action bg-light">Unidad 1</a>
                    <a href="<?php echo base_url();?>modulo3/unidad2" class="list-group-item list-group-item-action bg-light ">Unidad 2</a>
                    <a href="<?php echo base_url();?>modulo3/unidad3" class="list-group-item list-group-item-action bg-light ">Unidad 3</a>
                    <a href="<?php echo base_url();?>modulo3/unidad4" class="list-group-item list-group-item-action bg-light ">Unidad 4</a>
                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo3/unidad5"  class="list-group-item list-group-item-action bg-light">Unidad 5</a>
                       
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo3/unidad5/temas"
                                    class="list-group-item">Temas</a>
                                <a href="<?php echo base_url();?>modulo3/unidad5/actividad1"
                                    class="list-group-item">Actividades</a>
                                <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>


                   
                </ul>


                <a href="<?php echo base_url();?>modulo4" class="list-group-item list-group-item-action bg-light">
                    Módulo 4</a>
                <a href="<?php echo base_url();?>modulo5" class="list-group-item list-group-item-action bg-light">
                    Módulo 5</a>
                <a href="<?php echo base_url();?>modulo6" class="list-group-item list-group-item-action bg-light">
                    Módulo 6</a>
                <a href="<?php echo base_url();?>modulo7" class="list-group-item list-group-item-action bg-light">
                    Módulo 7</a>
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo3">Módulo 3</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo3/unidad5">Unidad 5</a></li>

                    <li class="breadcrumb-item active" aria-current="page">Actividad 1</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 5: Edición digital y retoque en computadora</h1>

                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <br>
                        <h4 class="subtitle">Temas claves</h4><br>
                        <div class="contenido">
                        <p class="card-text">
                            “Las computadoras han hecho que el retoque y la total re-creación de las fotos sea tan
                            rápida y eficiente que ahora los técnicos en fotografía se han juntado con los ingenieros de
                            video y grabación en la fraternidad de manipuladores modernos, cada uno capaz de ensamblar
                            pedazos de la realidad para lograr cualquier efecto.” (Marshall Blonsky). <br>
                            <blockquote cite="www.saffo.com/essays/texthotnewmedium.php" align="justify">
                                “Para el final de la década, miraremos hacia atrás, a 1992 y nos preguntaremos cómo
                                un video de un policía golpeando a un ciudadano pudo haber causado una revuelta en Los
                                Ángeles. La época de la inocencia de las videograbadoras se evaporará
                                a medida que los adolescentes manipulen rutinariamente las imágenes más prosaicas a
                                ficciones vividas y convincentes. Los robos inteligentes de las imágenes de la
                                publicidad y de los videos de las noticias se convertirán en una forma de arte. Ya no
                                podremos creer lo que verán nuestros ojos cuando observen un video – realidad mediática,
                                y buscaremos indicadores externos de confiabilidad.”
                            </blockquote>
                            La manipulación de las imágenes y los videos ha tenido graves implicaciones para la
                            veracidad de la información y no es aceptable en los medios de noticias.
                            Las imágenes manipuladas no deberían ser utilizadas en las historias de noticias o en
                            ninguna situación legal que pueda servir como evidencia.<br><br>

                            <h4 class="subtitle">Lea el siguente artículo y a continuación responda las preguntas de la Actividad</h4><br>
                            Retoque fotográfico antes de la existencia de Photoshop<br>
                            <div class="">
                            <br>
                                <img id="imagen" src="<?php echo base_url();?>public/assets/modulos/mod3/img/u5img1.png">
                                <img id="imagen" src="<?php echo base_url();?>public/assets/modulos/mod3/img/u5img2.png">
                            </div>
                        </p>
                        </div>
                    </div>
                </div>



            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo3/unidad5/temas" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo3/unidad5/actividad2" class="btn btn_navegacion">Siguiente</a>
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
    <script src="<?php echo base_url();?>public/assets/modulos/mod"></script>


    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


</body>

</html>