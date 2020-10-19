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
                        

							<a href="<?php echo base_url();?>modulo11/unidad2"  class="list-group-item inactive">Unidad 2</a>

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo11/unidad2/temas"
                                    class="list-group-item">Temas</a>
                                <a href="<?php echo base_url();?>modulo11/unidad2/actividad1"
                                    class="list-group-item">Actividades</a>
                               
                            </ul>
                        </div>
                    </div>

                    
                    <a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 3</a>
                    <a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 4</a>
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
					<li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo11/unidad2">Unidad 2</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Temas</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 2: Dimensiones Socio-Culturales y Políticas de los Medios Globalizados</h1>

                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <br>
                        <h4 class="subtitle">Temas Clave</h4><br>

                        <div class="contenido">
						<p class="card-text">
						<ul>
							<li class="animated lightSpeedIn">Dimensiones socio-culturales de los medios globales</li>
							<li class="animated lightSpeedIn">Los medios y la cultura popular</li>
							<li class="animated lightSpeedIn">Estereotipos culturales, prejuicios y sesgos</li>
							<li class="animated lightSpeedIn">Amenaza que se percibe por la homogenización de la cultura
							</li>
							<li class="animated lightSpeedIn">Promesa de una diversidad cultural y un pluralismo</li>
							<li class="animated lightSpeedIn retraso3">Medios y tolerancia cultural, entendimiento y
								ciudadanía global</li>
							<li class="animated lightSpeedIn retraso3">Impacto político de los medios</li>
							<li class="animated lightSpeedIn retraso3">Proporcionar mecanismos para un flujo de dos vías
								de la información (por Ej. norte-sur, sur-sur)</li>
							<li class="animated lightSpeedIn retraso3">Los medios como una plataforma para ampliar la
								esfera pública (discurso democrático)</li>
							<li class="animated lightSpeedIn retraso3">Los medios como un mecanismo para la movilización
								política y social</li>
							<li class="animated lightSpeedIn retraso5">El poder de los medios para dar forma a la
								opinión pública y a la agenda pública</li>
							<li class="animated lightSpeedIn retraso5">Promover el buen gobierno a través de la
								transparencia y de la rendición de cuentas</li>
							<li class="animated lightSpeedIn retraso5">Los medios y las comunidades de migrantes</li>
							<li class="animated lightSpeedIn retraso5">Cómo los medios globales y la convergencia
								tecnológica abordan las necesidades de las comunidades de migrantes</li>
							<li class="animated lightSpeedIn retraso5">Estudios de caso de los canales de medios de la
								diáspora/ comunidades de migrantes</li>
						</ul>
						</p>
                        </div>
                    </div>
                </div>



            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo11/unidad2" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo11/unidad2/actividad1" class="btn btn_navegacion">Siguiente</a>
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