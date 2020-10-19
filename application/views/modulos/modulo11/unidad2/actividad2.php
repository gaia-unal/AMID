<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AMID</title>

    <?php $this->load->view('initial/linkGenerico');?>
	<link href="<?php echo base_url();?>public/assets/modulos/mod1/css/estilo.css" rel="stylesheet">

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
                    <li class="breadcrumb-item active" aria-current="page">Actividad 2</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 2: Dimensiones Socio-Culturales y Políticas de los Medios Globalizados</h1>
					<?php echo form_open('modulo11/unidad3/inicio');$this->session->set_userdata('idAct','m11u2a2'); ?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
					<h4 class="subtitle">Actividad</h4>
                        <div class="contenido">
						<p class="card-text">
							Examina la letra de la canción y responde
							<center>
								<h5>La canción. J Balvin, Bad Bunny</h5>
								Pensaba que te había olvida'o, eh <br>
								Pero pusieron la canción, eh, eh, eh<br>
								Que cantamo' bien borracho'<br>
								Que bailamo' bien borracho'<br>
								Nos besamo' bien borracho' los dos<br>
								Pensaba que te había olvida'o<br>
								Justo cuando creía<br>
								Que por comerme a do' o diez, te olvidaría' (yeh)<br>
								Cogí un respiro y me salí de la vía<br>
								Y como un pendejo, no sabía lo que hacía<br>
								Nunca lo superé, nunca te superé (no, no)<br>
								Hasta me aprendí to'a la' balada' en inglé' (yeh)<br>
								Respiré y conté hasta tres (uno, dos, tres)<br>
								Ere' la fantasía oscura de Kanye West, bebé, ey<br>
								Hace tiempo lo barato me salió caro (yih)<br>
								Yo sólo twitteo, bala' loca'…
							</center>
						<ol>
							<li>¿Los valores expuestos son apropiados?</li>
							<input type="radio" name="preg1" id="opc1" onclick="correcto(1);"> Si<br>
							<input type="radio" name="preg1" id="opc2" onclick="incorrecto(1)"> No<br>
							<li>¿Crea un estereotipo?</li>
							<input type="radio" name="preg2" id="opc3" onclick="correcto(2);"> Si<br>
							<input type="radio" name="preg2" id="opc4" onclick="incorrecto(2)"> No<br>
							<li>¿Qué elementos reflejan sesgo o prejuicio?</li>
							<input type="checkbox" name="opc5" id="opc5" onclick="incorrecto(3)"> Pensaba que te había
							olvida'o<br>
							<input type="checkbox" name="opc6" id="opc6" onclick="correcto(4);"> Que cantamo' bien
							borracho'<br>
							<input type="checkbox" name="opc7" id="opc7" onclick="correcto(5);"> Que por comerme a do' o
							diez, te olvidaría'<br>
							<input type="checkbox" name="opc8" id="opc8" onclick="correcto(6);"> Nos besamo' bien
							borracho'<br>
							<input type="checkbox" name="opc9" id="opc9" onclick="correcto(7);"> Que bailamo' bien
							borracho' <br>
							<input type="checkbox" name="opc10" id="opc10" onclick="incorrecto(8)"> Yo sólo twitteo, bala'
							loca'… <br>
							<input type="checkbox" name="opc11" id="opc11" onclick="correcto(9);"> Ere' la fantasía
							oscura de Kanye West, bebé, ey
						</ol>
						</p>
						<center>
							<a class="btn btn-outline-success" onclick="validar();">Validar</a>
						</center>
                        </div>
                    </div>
                </div>
				<br>
				<input type="text" class="sr-only" id="pointsNota" name="pointsNota" value="1">
                <input type="text" class="sr-only" id="pointsGood" name="pointsGood" value="0">
            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo11/unidad2/actividad1" class="btn btn_navegacion">Anterior</a>
                <button id="btn-siguiente" class="btn btn_navegacion" name="submit" type="submit">Siguiente</button>
            </center>
			<?php echo form_close(); ?>
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
	<script src="<?php echo base_url();?>public/assets/modulos/mod11/js/u2preguntas.js"></script>

    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


</body>

</html>