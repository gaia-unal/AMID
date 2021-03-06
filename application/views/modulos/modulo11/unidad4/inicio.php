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
                    <a href="<?php echo base_url();?>modulo11/unidad2" class="list-group-item">Unidad 2</a>
					<a href="<?php echo base_url();?>modulo11/unidad3" class="list-group-item">Unidad 3</a>

                    <div class="btn-group dropright">

						<a href="<?php echo base_url();?>modulo11/unidad4"  class="list-group-item">Unidad 4</a>

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo11/unidad4/contenidos"
                                    class="list-group-item">Contenidos</a>

                            </ul>
                        </div>
                    </div>
                    
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

                    <li class="breadcrumb-item active" aria-current="page">Unidad 4</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 4: El nacimiento de medios alternativos</h1>
                    <?php  $this->session->set_userdata('ruta','modulo11/unidad4'); ?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                    <p>La UNESCO [1] menciona en su metodología AMID para la unidad 4 del módulo 11 un conjunto 
                            de objetivos de aprendizaje que se deben alcanzar mediante la revisión de contenido y la realización de 
                            actividades acordes a unos temas establecidos; estos se pueden observar a continuación. </p>
                        <h4 class="subtitle">Objetivos de Aprendizaje</h4><br>

                        <div class="contenido">
						<p class="card-text">
						<ul>
							<li class="animated lightSpeedIn">Definir los medios alternativos – sus fundamentos,
								características y aplicaciones</li>
							<li class="animated lightSpeedIn">Analizar los ejemplos de medios alternativos utilizando
								varios formatos – impresión, transmisión y electrónicos – qué está de por medio y qué
								distingue a los medios alternativos de los principales medios</li>
							<li class="animated lightSpeedIn retraso3">Evalúe el impacto de los medios alternativos
								sobre comunidades específicas (incluyendo comunidades virtuales), especialmente en
								relación a la cobertura de los temas y las preocupaciones de las audiencias marginadas y
								el darles una voz</li>
							<li class="animated lightSpeedIn retraso5">Planifique la creación de un medio alternativo
								para una comunidad o en el contexto de una escuela/colegio</li>
						</ul>
						</p>
                        </div>
                        <h4 class="subtitle">Temas Clave</h4>
                        <div class="contenido">
                            <ul>
                                <li>Medios alternativos: por qué han surgido</li>
                                <li>Credibilidad pública de los principales medios</li>
                                <li>Aparición de la tecnología de la información y las la comunicación</li>
                                <li>Cambios en los hábitos mediáticos y las preferencias del consumidor</li>
                                <li>Definición de medios alternativos (en contraste con los medios principales)</li>
                                <li>Propiedad y control de los medios alternativos (es decir; democratizar la propiedad y el control)</li>
                                <li>Audiencias de los medios alternativos: distintos sectores (mujeres, jóvenes, niños, obreros/ trabajadores, etc.) grupos marginados (comunidades culturales, migrantes, etc.)</li>
                                <li>Contenido de los medios alternativos (por Ej. perspectivas de la comunidad, enfoque de participación e interactividad)</li>
                                <li>El papel de los medios alternativos en la sociedad (por Ej. transparencia, diversidad y libertad de expresión)</li>
                                <li>Planificación, administración y mantenimiento de un medio alternativo en distintos escenarios</li>
                                <li>Medios alternativos en un ambiente de escuela/colegio</li>
                                <li>Medios alternativos en una comunidad</li>
                                <li>Modelos de ingresos para los medios alternativos.</li>
                            </ul>
                        </div>
                        <h4 class="subtitle">Bibliografía:</h4>
                                <p>[1] UNAOC, UNESCO, "Unidad 4: El nacimiento de medios alternativos", en <em>Media Information Literacy for
                                        Teachers</em>, 2020.
                                    <a href="http://unesco.mil-for-teachers.unaoc.org/modules/modulo-11-medios-tecnologia-y-el-mundo-global-global-village/unidad-4-el-nacimiento-de-medios-alternativos/?lang=es"
                                        target="_blank" rel="noopener noreferrer">
                                        http://unesco.mil-for-teachers.unaoc.org/modules/modulo-11-medios-tecnologia-y-el-mundo-global-global-village/unidad-4-el-nacimiento-de-medios-alternativos/?lang=es</a>
                                </p>
                    </div>
                </div>



            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo11/unidad3/actividad2" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo11/unidad4/contenidos" class="btn btn_navegacion">Siguiente</a>
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