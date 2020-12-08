<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AMID</title>
    <?php $this->load->view('initial/linkGenerico');?>
    <link href="<?php echo base_url();?>public/assets/modulos/mod1/css/partes.css" rel="stylesheet">

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

                <ul class="list-group-item">

                    <a href="<?php echo base_url();?>modulo4/unidad1"
                        class="list-group-item list-group-item-action bg-light">Unidad 1</a>

                    <a href="<?php echo base_url();?>modulo4/unidad2" class="list-group-item inactive">Unidad 2</a>

                    <div class="btn-group dropright">

                        <a href="<?php echo base_url();?>modulo4/unidad3" class="list-group-item inactive">Unidad 3</a>

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo4/unidad3/contenidos"
                                    class="list-group-item">Contenidos</a>
                                <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>




                    <a href="#" onclick="inactivo(3)" class="list-group-item inactive">Unidad 4</a>

                </ul>

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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo4">Módulo 4</a></li>  
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo4/unidad3">Unidad 3</a></li>  
                    <li class="breadcrumb-item active" aria-current="page">Contenido</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 3: Géneros de películas y de cuentos</h1>
                   
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <br>
                        <h4 class="subtitle">Carteles</h4><br>
                        <div class="contenido">
						<p class="card-text">
							Los carteles de las películas se personalizan de acuerdo a los países. A continuación se
							presentarán los carteles y las modificaciones realizadas para estrenarse la película en los
							diferentes paises. Al lado izquierdo se observa el cartel original, y al lado derecho el
							cartel adaptado en los diferentes paises.


							<div id="parte1" style="display:block;">
							<br><h2 class="subtitle">Japón</h2>
								<img src="<?php echo base_url();?>public/assets/modulos/mod4/img/cartel1.png"
									alt="wolverine" class="cartel">
							</div>

							<div id="parte2" style="display:none;">
							<br><h2 class="subtitle">México</h2>
								<img src="<?php echo base_url();?>public/assets/modulos/mod4/img/cartel2.png"
									alt="mayordomo" class="cartel">
							</div>

							<div id="parte3" style="display:none;">
							<br>	<h2 class="subtitle">Corea del Sur</h2>
								<img src="<?php echo base_url();?>public/assets/modulos/mod4/img/cartel3.png"
									alt="slave" class="cartel">
							</div>

							<div id="parte4" style="display:none;">
							<br><h2 class="subtitle">Australia</h2>
								<img src="<?php echo base_url();?>public/assets/modulos/mod4/img/cartel4.png"
									alt="awkward" class="cartel">
							</div>

							<div id="parte5" style="display:none;">
								<h2 class="subtitle">Tailandia</h2>
								<img src="<?php echo base_url();?>public/assets/modulos/mod4/img/cartel5.png"
									alt="TFIOS" class="cartel">
							</div>

							<div id="parte6" style="display:none;">
								<br><h2 class="subtitle">China</h2>
								<img src="<?php echo base_url();?>public/assets/modulos/mod4/img/cartel6.png"
									alt="amazingSpidy" class="cartel">
							</div>

							<div id="parte7" style="display:none;">
							<br><h2 class="subtitle">Francia</h2>
								<img src="<?php echo base_url();?>public/assets/modulos/mod4/img/cartel7.png"
									alt="snowpiercer" class="cartel">
							</div>
                            <br>
							<center>
								<div id="btnAtras">

									<a onclick="volver();">
										<img width=70 src="<?php echo base_url();?>public/assets/img/arrow_l.jpg">
									</a>
								</div>
								<div id="btnAdelante">
									<a onclick="avanzar();">
										<img width=70 src="<?php echo base_url();?>public/assets/img/arrow_r.jpg">
									</a>
								</div>
							</center>
                            <br>
							En los siguientes enlaces puede encontrar más ejemplos:
							<a href="https://www.buzzfeed.com/adambvary/14-carteles-de-peliculas-internacionales-que-son-m"
								target="_blank">Ejemplos 1</a> &nbsp - &nbsp <a
								href="https://www.rinconabstracto.com/2011/11/posters-de-peliculas-de-hollywood.html"
								target="_blank">Ejemplos 2</a>
						</p>
                        </div>
                    </div>
                </div>



            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo4/unidad3/actividad2" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo4/unidad3/actividad4" class="btn btn_navegacion">Siguiente</a>

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
    <script src="<?php echo base_url();?>public/assets/modulos/mod4/js/arrows4.js"></script>
    



    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


</body>

</html>