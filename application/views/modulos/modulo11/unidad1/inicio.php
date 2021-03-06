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
                <a href="<?php echo base_url();?>modulo9" class="list-group-item list-group-item-action bg-light">
                    Módulo 9</a>
                <a href="<?php echo base_url();?>modulo10" class="list-group-item list-group-item-action bg-light">
                    Módulo 10</a>
                <a href="<?php echo base_url();?>modulo11" class="list-group-item list-group-item-action bg-light">
                    Módulo 11</a>

                <ul class="list-group-item">

                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo11/unidad1"
                            class="list-group-item list-group-item-action bg-light">Unidad 1</a>

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo11/unidad1/contenidos"
                                    class="list-group-item">Contenidos</a>
                               
                            </ul>
                        </div>
                    </div>

                    <a href="<?php echo base_url();?>modulo11/unidad2" class="list-group-item">Unidad 2</a>
                    <a href="<?php echo base_url();?>modulo11/unidad3" class="list-group-item">Unidad 3</a>
                    <a href="<?php echo base_url();?>modulo11/unidad4" class="list-group-item">Unidad 4</a>
                </ul>


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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo11">Módulo 11</a></li>

                    <li class="breadcrumb-item active" aria-current="page">Unidad 1</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 1: Propiedad de los Medios en el Mundo Global Actual</h1>
                    <?php  $this->session->set_userdata('ruta','modulo11/unidad1'); ?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                    <p>La UNESCO [1] menciona en su metodología AMID para la unidad 1 del módulo 11 un conjunto 
                            de objetivos de aprendizaje que se deben alcanzar mediante la revisión de contenido y la realización de 
                            actividades acordes a unos temas establecidos; estos se pueden observar a continuación. </p>
                        <h4 class="subtitle">Objetivos de Aprendizaje</h4><br>

                        <div class="contenido">
						<p class="card-text">
							<ul>
								<li class="animated lightSpeedIn">Describir los diferentes patrones de propiedad de los medios y
									su control</li>
								<li class="animated lightSpeedIn">Examinar el funcionamiento de la economía global, y el
									nacimiento de las nuevas tecnologías, y cómo estas afectan a las estructuras y a los patrones
									de la propiedad de los medios.</li>
								<li class="animated lightSpeedIn retraso3">Evaluar cómo la propiedad de los medios y el control
									afecta a las políticas de medios, a los procesos, a los contenidos y a la transmisión.</li>
								<li class="animated lightSpeedIn retraso5">Demostrar como la convergencia de los medios facilita
									nuevos enfoques de contenido (editorial) y de desarrollo (externalización de servicios,
									deslocalización y aprovisionamiento local)</li>
								<li class="animated lightSpeedIn retraso5">Comprender cómo las convenciones internacionales
									existentes y las leyes/políticas nacionales dan forma o regulan la estructura de la propiedad
									de medios</li>
							</ul>
						</p>
                        </div>
                        <h4 class="subtitle">Temas Clave</h4>
                        <div class="contenido">
                            <ul>
                                <li>La economía global, el comercio electrónico y la propiedad de los medios</li>
                                <li>Patrones de comunicación, propiedad de los medios y control</li>
                                <li>Medios privados (comerciales), medios controlados o de propiedad del gobierno, y organizaciones de medios públicos, por Ej. sistemas de difusión pública</li>
                                <li>Medios comunitarios</li>
                                <li>Convergencia de tecnologías (medios de masas, telecomunicaciones y computadoras) y el nacimiento de los conglomerados mediáticos</li>
                                <li>Pluralismo y concentración (por Ej. cadenas de medios y propiedad cruzada (cross ownership)</li>
                                <li>Adquisiciones, fusiones, sociedades conjuntas (joint ventures) y consorcios</li>
                                <li>Transnacionalización (corporaciones mediáticas globales)</li>
                                <li>Protocolos internacionales y nacionales sobre la propiedad de los medios</li>
                                <li>Leyes anti-monopolio</li>
                                <li>Limitaciones a la propiedad en el extranjero</li>
                                <li>Otras políticas regulatorias y mecanismos</li>
                                <li>Propiedad de los medios, desarrollo del contenido y programación</li>
                                <li>Contenido extranjero vs. contenido local</li>
                                <li>Externalización de servicios, deslocalización y aprovisionamiento local (home sourcing)</li>
                                <li>Tensiones entre la independencia editorial y los intereses de los propietarios</li>
                            </ul>
                        </div>
                        <h4 class="subtitle">Bibliografía:</h4>
                                <p>[1] UNAOC, UNESCO, "Unidad 1: Propiedad de los Medios en el Mundo Global Actual", en <em>Media Information Literacy for
                                        Teachers</em>, 2020.
                                    <a href="http://unesco.mil-for-teachers.unaoc.org/modules/modulo-11-medios-tecnologia-y-el-mundo-global-global-village/unidad-1-propiedad-de-los-medios-en-el-mundo-global-actual/?lang=es"
                                        target="_blank" rel="noopener noreferrer">
                                        http://unesco.mil-for-teachers.unaoc.org/modules/modulo-11-medios-tecnologia-y-el-mundo-global-global-village/unidad-1-propiedad-de-los-medios-en-el-mundo-global-actual/?lang=es</a>
                                </p>

                    </div>
                </div>



            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo11" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo11/unidad1/contenidos" class="btn btn_navegacion">Siguiente</a>
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