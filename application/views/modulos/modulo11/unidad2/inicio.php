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

				<a href="<?php echo base_url();?>modulo11/unidad1"
                            class="list-group-item list-group-item-action bg-light">Unidad 1</a>

                    <div class="btn-group dropright">
                        

							<a href="<?php echo base_url();?>modulo11/unidad2"  class="list-group-item">Unidad 2</a>

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo11/unidad2/contenidos"
                                    class="list-group-item">Contenidos</a>
                               
                            </ul>
                        </div>
                    </div>

                    
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

                    <li class="breadcrumb-item active" aria-current="page">Unidad 2</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 2: Dimensiones Socio-Culturales y Políticas de los Medios Globalizados</h1>
                    <?php  $this->session->set_userdata('ruta','modulo11/unidad1'); ?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                    <p>La UNESCO [1] menciona en su metodología AMID para la unidad 2 del módulo 11 un conjunto 
                            de objetivos de aprendizaje que se deben alcanzar mediante la revisión de contenido y la realización de 
                            actividades acordes a unos temas establecidos; estos se pueden observar a continuación. </p>
                        <h4 class="subtitle">Objetivos de Aprendizaje</h4><br>

                        <div class="contenido">
						<p class="card-text">
						<ul>
							<li class="animated lightSpeedIn">Explicar e ilustrar cómo los medios influyen o definen la
								cultura popular</li>
							<li class="animated lightSpeedIn">Explicar la dinámica de lo que se ve como contra-procesos
								de homogeneidad cultural y localización</li>
							<li class="animated lightSpeedIn retraso3">Analice cómo los medios pueden ensanchar o limitar la
								esfera pública, democratizar el acceso y promover la participación política</li>
							<li class="animated lightSpeedIn retraso5">Hable cómo los medios globales (por Ej. la televisión
								por satélite o cable, Internet) pueden abordar temas de información que las comunidades de
								migrantes necesitan</li>
						</ul>
						</p>
                        </div>
                        <h4 class="subtitle">Temas Clave</h4>
                        <div class="contenido">
                            <ul>
                                <li>Dimensiones socio-culturales de los medios globales</li>
                                <li>Los medios y la cultura popular</li>
                                <li>Estereotipos culturales, prejuicios y sesgos</li>
                                <li>Amenaza que se percibe por la homogenización de la cultura</li>
                                <li>Promesa de una diversidad cultural y un pluralismo</li>
                                <li>Medios y tolerancia cultural, entendimiento y ciudadanía global</li>
                                <li>Impacto político de los medios</li>
                                <li>Proporcionar mecanismos para un flujo de dos vías de la información (por Ej. norte-sur, sur-sur)</li>
                                <li>Los medios como una plataforma para ampliar la esfera pública (discurso democrático)</li>
                                <li>Los medios como un mecanismo para la movilización política y social</li>
                                <li>El poder de los medios para dar forma a la opinión pública y a la agenda pública</li>
                                <li>Promover el buen gobierno a través de la transparencia y de la rendición de cuentas</li>
                                <li>Los medios y las comunidades de migrantes</li>
                                <li>Cómo los medios globales y la convergencia tecnológica abordan las necesidades de las comunidades de migrantes</li>
                                <li>Estudios de caso de los canales de medios de la diáspora/ comunidades de migrantes</li>
                            </ul>
                        </div>
                        <h4 class="subtitle">Bibliografía:</h4>
                                <p>[1] UNAOC, UNESCO, "Unidad 2: Dimensiones Socio-Culturales y Políticas de los Medios Globalizados", en <em>Media Information Literacy for
                                        Teachers</em>, 2020.
                                    <a href="http://unesco.mil-for-teachers.unaoc.org/modules/modulo-11-medios-tecnologia-y-el-mundo-global-global-village/unidad-2-dimensiones-socio-culturales-y-politicas-de-los-medios-globalizados/?lang=es"
                                        target="_blank" rel="noopener noreferrer">
                                        http://unesco.mil-for-teachers.unaoc.org/modules/modulo-11-medios-tecnologia-y-el-mundo-global-global-village/unidad-2-dimensiones-socio-culturales-y-politicas-de-los-medios-globalizados/?lang=es</a>
                                </p>
                    </div>
                </div>



            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo11/unidad1/actividad2" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo11/unidad2/contenidos" class="btn btn_navegacion">Siguiente</a>
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