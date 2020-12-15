<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AMID</title>

    <?php $this->load->view('initial/linkGenerico');?>

</head>

<body>
    <link href="<?php echo base_url();?>public/assets/css/style.css" rel="stylesheet">
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

                <a href="<?php echo base_url();?>modulo8" class="list-group-item list-group-item-action bg-light">
                    Módulo 8</a>

                <ul class="list-group-item">

                <a href="<?php echo base_url();?>modulo8/unidad1"
                            class="list-group-item list-group-item-action bg-light">Unidad 1</a>

                    <div class="btn-group dropright">
                       
                        <a href="<?php echo base_url();?>modulo8/unidad2" class="list-group-item">Unidad 2</a>

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo8/unidad2/contenidos"
                                    class="list-group-item">Contenidos</a>
                                <a href="<?php echo base_url(); ?>modulo8/unidad2/evaluacion" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>


                    <a href="<?php echo base_url(); ?>modulo8/unidad3" class="list-group-item">Unidad 3</a>
                </ul>

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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo8">Módulo 8</a></li>

                    <li class="breadcrumb-item active" aria-current="page">Unidad 2</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 2: Ambiente de Aprendizaje y Alfabetización Informacional</h1>

                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <p>La UNESCO [1] menciona en su metodología AMID para la unidad 2 del módulo 8 un conjunto 
                            de objetivos de aprendizaje que se deben alcanzar mediante la revisión de contenido y la realización de 
                            actividades acordes a unos temas establecidos; estos se pueden observar a continuación. </p>
                        <h4 class="subtitle">Objetivos de Aprendizaje</h4>
                        <div class="contenido">
                            <p class="card-text">
                                <ul>
                                    <li class="animated lightSpeedIn">Entender las diferencias entre la transmisión de
                                        información y la información para el aprendizaje</li>
                                    <li class="animated lightSpeedIn">Describir y demostrar un entendimiento de los aspectos
                                        claves para organizar la información, es decir utilizar esquemas de clasificación
                                        para localizar información y conocimiento (por Ej. clasificaciones de colecciones
                                        bibliotecarias, índices, abstractos, bibliografías, bases de datos, etc.)</li>
                                    <li class="animated lightSpeedIn retraso3">Utilizar una biblioteca de una manera eficaz
                                        para el aprendizaje – evaluar las oportunidades que una biblioteca presenta para
                                        investigar un tema de actualidad</li>
                                    <li class="animated lightSpeedIn retraso5">Aplicar las seis etapas del Big6 sobre la
                                        resolución de problemas en información
                                    </li>
                                </ul>
                            </p>
                        </div>
                        <h4 class="subtitle">Temas Clave</h4>
                        <div class="contenido">
                            <ul>
                                <li>El Big6 (Gran6) – una guía a la resolución de problemas en información en seis etapas</li>
                                <li>Uso de las bibliotecas</li>
                                <li>Ambientes de aprendizaje y proveedores de información</li>
                            </ul>
                        </div>
                        <h4 class="subtitle">Bibliografía:</h4>
                        <p>[1] UNAOC, UNESCO, "Unidad 2: Ambiente de Aprendizaje y Alfabetización Informacional", en <em>Media Information
                            Literacy for Teachers</em>, 2020.
                            <a href="http://unesco.mil-for-teachers.unaoc.org/modules/modulo-8-alfabetizacion-informacional-y-destrezas-bibliotecarias/unidad-2-ambiente-de-aprendizaje-y-alfabetizacion-informacional/?lang=es"
                                target="_blank" rel="noopener noreferrer">
                            http://unesco.mil-for-teachers.unaoc.org/modules/modulo-8-alfabetizacion-informacional-y-destrezas-bibliotecarias/unidad-2-ambiente-de-aprendizaje-y-alfabetizacion-informacional/?lang=es</a>
                        </p>
                    </div>
                </div>



            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo8/unidad1/evaluacion1" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo8/unidad2/contenidos" class="btn btn_navegacion">Siguiente</a>
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


    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


</body>

</html>