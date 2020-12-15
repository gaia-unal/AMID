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

                    <a href="<?php echo base_url();?>modulo9/unidad1"
                        class="list-group-item list-group-item-action bg-light">Unidad 1</a>

                    <a href="<?php echo base_url();?>modulo9/unidad2" class="list-group-item">Unidad 2</a>

                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo9/unidad3" class="list-group-item">Unidad 3</a>

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo9/unidad3/contenidos"
                                    class="list-group-item">Contenidos</a>
                                <a href="<?php echo base_url();?>modulo9/unidad3/evaluacion" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo9">Módulo 9</a></li>

                    <li class="breadcrumb-item active" aria-current="page">Unidad 3</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 3: Manejando el Cambio Para Fomentar un Medio Ambiente Propicio para las Escuelas AMI</h1>

                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                    <p>La UNESCO [1] menciona en su metodología AMID para la unidad 3 del módulo 9 un conjunto 
                            de objetivos de aprendizaje que se deben alcanzar mediante la revisión de contenido y la realización de 
                            actividades acordes a unos temas establecidos; estos se pueden observar a continuación. </p>
                        <h4 class="subtitle">Objetivos de Aprendizaje</h4><br>

                        <div class="contenido">

                            <p class="card-text">
							<ul>
							<li class="animated lightSpeedIn">Identificar y describir las iniciativas AMI que se están
								implementado local y globalmente.</li>
							<li class="animated lightSpeedIn retraso3">Promover la alfabetización mediática e informacional
								dentro de los diferentes grupos de actores.</li>
							<li class="animated lightSpeedIn retraso5">Describir los temas claves que se deben tomar en cuenta
								cuando se planifica la integración de AMI en las escuelas/colegios.</li>
						</ul>
                            </p>
                        </div>
                        <h4 class="subtitle">Temas Clave</h4>
                        <div class="contenido">
                            <ul>
                                <li>Los medios de comunicación mundiales y el impulso de la alfabetización informacional: una visión general de las acciones en el mundo, desarrollo de políticas, etc.</li>
                                <li>El medio ambiente propicio que se requiere para adoptar AMI en las escuelas/colegios</li>
                                <li>Retos que hay que enfrentar al integrar AMI en las escuelas/colegios y el diseño de estrategias para sobrepasar estos retos</li>
                            </ul>
                        </div>
                        <h4 class="subtitle">Bibliografía:</h4>
                            <p>[1] UNAOC, UNESCO, "Unidad 3: Manejando el Cambio Para Fomentar un Medio Ambiente Propicio para las Escuelas AMI", en <em>Media Information Literacy for Teachers</em>, 2020.
                                <a href="http://unesco.mil-for-teachers.unaoc.org/modules/modulo-9-comunicacion-ami-y-aprendizaje-modulo-final/unidad-3-manejando-el-cambio-para-fomentar-un-medio-ambiente-propicio-para-las-escuelas-ami/?lang=es" target="_blank" rel="noopener noreferrer">
                                http://unesco.mil-for-teachers.unaoc.org/modules/modulo-9-comunicacion-ami-y-aprendizaje-modulo-final/unidad-3-manejando-el-cambio-para-fomentar-un-medio-ambiente-propicio-para-las-escuelas-ami/?lang=es</a>
                            </p>

                    </div>
                </div>



            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo9/unidad2/evaluacion" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo9/unidad3/contenidos" class="btn btn_navegacion">Siguiente</a>
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