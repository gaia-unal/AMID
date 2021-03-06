<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AMID</title>

    <?php $this->load->view('initial/linkGenerico');?>
    <link href="<?php echo base_url();?>public/assets/modulos/mod11/css/estilo.css" rel="stylesheet">
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
                    <<li class="breadcrumb-item"><a href="<?php echo base_url();?>inicio/main">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo11">Módulo 11</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo11/unidad1">Unidad 1</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Actividad 2</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 1: Propiedad de los Medios en el Mundo Global Actual</h1>
                    <?php echo form_open('modulo11/unidad2/inicio');$this->session->set_userdata('idAct','m11u1a2'); $this->session->set_userdata('ruta','modulo11/unidad1/actividad2'); ?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4 class="subtitle">Retroalimentación</h4>
                        <div class="contenido">
						<p class="card-text">
							Completa el crucigrama con las palabras que hacen referencia a las pistas que encuentras en
							la parte de abajo.
						</p>
						<table class="crossword" cellspacing="0">
							<tbody>
								<tr>
									<td class="nb cuadro" title="0,0"></td>
									<td class="nb cuadro" title="0,1"></td>
									<td class="nb cuadro" title="0,2"></td>
									<td class="nb cuadro" title="0,3"></td>
									<td class="nb cuadro" title="0,4"></td>
									<td class="b cuadro" title="0,5">
										<input type="text" name="t" id="opc1" placeholder="1">
									</td>
									<td class="nb cuadro" title="0,6"></td>
									<td class="nb cuadro" title="0,7"></td>
									<td class="nb cuadro" title="0,8"></td>
									<td class="nb cuadro" title="0,9"></td>
									<td class="nb cuadro" title="0,10"></td>
									<td class="nb cuadro" title="0,11"></td>
								</tr>
								<tr>
									<td class="nb cuadro" title="1,0"></td>
									<td class="nb cuadro" title="1,1"></td>
									<td class="nb cuadro" title="1,2"></td>
									<td class="nb cuadro" title="1,3"></td>
									<td class="nb cuadro" title="1,4"></td>
									<td class="b cuadro" title="1,5">
										<input type="text" name="r" id="opc2">
									</td>
									<td class="nb cuadro" title="1,6"></td>
									<td class="nb cuadro" title="1,7"></td>
									<td class="nb cuadro" title="1,8"></td>
									<td class="nb cuadro" title="1,9"></td>
									<td class="nb cuadro" title="1,10"></td>
									<td class="nb cuadro" title="1,11"></td>
								</tr>
								<tr>
									<td class="nb cuadro" title="2,0"></td>
									<td class="nb cuadro" title="2,1"></td>
									<td class="nb cuadro" title="2,2"></td>
									<td class="nb cuadro" title="2,3"></td>
									<td class="nb cuadro" title="2,4"></td>
									<td class="b cuadro" title="2,5">
										<input type="text" name="a" id="opc3" placeholder="2">
									</td>
									<td class="b cuadro" title="2,6">
										<input type="text" name="n" id="opc4">
									</td>
									<td class="b cuadro" title="2,7">										
										<input type="text" name="g" id="opc5">
									</td>
									<td class="b cuadro" title="2,8">
										<input type="text" name="u" id="opc6">
									</td>
									<td class="b cuadro" title="2,9">
										<input type="text" name="l" id="opc7">
									</td>
									<td class="b cuadro" title="2,10">
										<input type="text" name="o" id="opc8">
									</td>
									<td class="b cuadro" title="2,11">
										<input type="text" name="s" id="opc9">
									</td>
								</tr>
								<tr>
									<td class="nb cuadro" title="3,0"></td>
									<td class="nb cuadro" title="3,1"></td>
									<td class="nb cuadro" title="3,2"></td>
									<td class="nb cuadro" title="3,3"></td>
									<td class="nb cuadro" title="3,4"></td>
									<td class="b cuadro" title="3,5">
										<input type="text" name="t" id="opc10">
									</td>
									<td class="nb cuadro" title="3,6"></td>
									<td class="nb cuadro" title="3,7"></td>
									<td class="nb cuadro" title="3,8"></td>
									<td class="nb cuadro" title="3,9"></td>
									<td class="nb cuadro" title="3,10"></td>
									<td class="nb cuadro" title="3,11"></td>
								</tr>
								<tr>
									<td class="b cuadro" title="4,0">
										<input type="text" name="r" id="opc11" placeholder="3">
									</td>
									<td class="b cuadro" title="4,1">
										<input type="text" name="e" id="opc12">
									</td>
									<td class="b cuadro" title="4,2">
										<input type="text" name="g" id="opc13">
									</td>
									<td class="b cuadro" title="4,3">
										<input type="text" name="u" id="opc14">
									</td>
									<td class="b cuadro" title="4,4">
										<input type="text" name="l" id="opc15">
									</td>
									<td class="b cuadro" title="4,5">
										<input type="text" name="a" id="opc16">
									</td>
									<td class="b cuadro" title="4,6">
										<input type="text" name="c" id="opc17">
									</td>
									<td class="b cuadro" title="4,7">
										<input type="text" name="i" id="opc18">
									</td>
									<td class="b cuadro" title="4,8">
										<input type="text" name="o" id="opc19">
									</td>
									<td class="b cuadro" title="4,9">
										<input type="text" name="n" id="opc20">
									</td>
									<td class="nb cuadro" title="4,10"></td>
									<td class="nb cuadro" title="4,11"></td>
								</tr>
								<tr>
									<td class="nb cuadro" title="5,0"></td>
									<td class="nb cuadro" title="5,1"></td>
									<td class="nb cuadro" title="5,2"></td>
									<td class="nb cuadro" title="5,3"></td>
									<td class="nb cuadro" title="5,4"></td>
									<td class="b cuadro" title="5,5">
										<input type="text" name="m" id="opc21">
									</td>
									<td class="nb cuadro" title="5,6"></td>
									<td class="nb cuadro" title="5,7"></td>
									<td class="nb cuadro" title="5,8"></td>
									<td class="nb cuadro" title="5,9"></td>
									<td class="nb cuadro" title="5,10"></td>
									<td class="nb cuadro" title="5,11"></td>
								</tr>
								<tr>
									<td class="nb cuadro" title="6,0"></td>
									<td class="nb cuadro" title="6,1"></td>
									<td class="nb cuadro" title="6,2"></td>
									<td class="nb cuadro" title="6,3"></td>
									<td class="nb cuadro" title="6,4"></td>
									<td class="b cuadro" title="6,5">
										<input type="text" name="i" id="opc22">
									</td>
									<td class="nb cuadro" title="6,6"></td>
									<td class="nb cuadro" title="6,7"></td>
									<td class="nb cuadro" title="6,8"></td>
									<td class="nb cuadro" title="6,9"></td>
									<td class="nb cuadro" title="6,10"></td>
									<td class="nb cuadro" title="6,11"></td>
								</tr>
								<tr>
									<td class="nb cuadro" title="7,0"></td>
									<td class="nb cuadro" title="7,1"></td>
									<td class="nb cuadro" title="7,2"></td>
									<td class="nb cuadro" title="7,3"></td>
									<td class="nb cuadro" title="7,4"></td>
									<td class="b cuadro" title="7,5">
										<input type="text" name="e" id="opc23">
									</td>
									<td class="nb cuadro" title="7,6"></td>
									<td class="nb cuadro" title="7,7"></td>
									<td class="nb cuadro" title="7,8"></td>
									<td class="nb cuadro" title="7,9"></td>
									<td class="nb cuadro" title="7,10"></td>
									<td class="nb cuadro" title="7,11"></td>
								</tr>
								<tr>
									<td class="b cuadro" title="8,0">
										<input type="text" name="a" id="opc24" placeholder="4">
									</td>
									<td class="b cuadro" title="8,1">
										<input type="text" name="m" id="opc25">
									</td>
									<td class="b cuadro" title="8,2">
										<input type="text" name="b" id="opc26">
									</td>
									<td class="b cuadro" title="8,3">
										<input type="text" name="i" id="opc27">
									</td>
									<td class="b cuadro" title="8,4">
										<input type="text" name="e" id="opc28">
									</td>
									<td class="b cuadro" title="8,5">
										<input type="text" name="n" id="opc29">
									</td>
									<td class="b cuadro" title="8,6">
										<input type="text" name="t" id="opc30">
									</td>
									<td class="b cuadro" title="8,7">
										<input type="text" name="e" id="opc31">
									</td>
									<td class="b cuadro" title="8,8">
										<input type="text" name="s" id="opc32">
									</td>
									<td class="nb cuadro" title="8,9"></td>
									<td class="nb cuadro" title="8,10"></td>
									<td class="nb cuadro" title="8,11"></td>
								</tr>
								<tr>
									<td class="nb cuadro" title="9,0"></td>
									<td class="nb cuadro" title="9,1"></td>
									<td class="nb cuadro" title="9,2"></td>
									<td class="nb cuadro" title="9,3"></td>
									<td class="nb cuadro" title="9,4"></td>
									<td class="b cuadro" title="9,5">
										<input type="text" name="t" id="opc33">
									</td>
									<td class="nb cuadro" title="9,6"></td>
									<td class="nb cuadro" title="9,7"></td>
									<td class="nb cuadro" title="9,8"></td>
									<td class="nb cuadro" title="9,9"></td>
									<td class="nb cuadro" title="9,10"></td>
									<td class="nb cuadro" title="9,11"></td>
								</tr>
								<tr>
									<td class="b cuadro" title="10,0">
										<input type="text" name="m" id="opc34" placeholder="5">
									</td>
									<td class="b cuadro" title="10,1">
										<input type="text" name="o" id="opc35">
									</td>
									<td class="b cuadro" title="10,2">
										<input type="text" name="n" id="opc36">
									</td>
									<td class="b cuadro" title="10,3">
										<input type="text" name="o" id="opc37">
									</td>
									<td class="b cuadro" title="10,4">
										<input type="text" name="p" id="opc38">
									</td>
									<td class="b cuadro" title="10,5">
										<input type="text" name="o" id="opc39">
									</td>
									<td class="b cuadro" title="10,6">
										<input type="text" name="l" id="opc40">
									</td>
									<td class="b cuadro" title="10,7">
										<input type="text" name="i" id="opc41">
									</td>
									<td class="b cuadro" title="10,8">
										<input type="text" name="o" id="opc42">
									</td>
									<td class="nb cuadro" title="10,9"></td>
									<td class="nb cuadro" title="10,10"></td>
									<td class="nb cuadro" title="10,11"></td>
								</tr>
							</tbody>
						</table>
						<p class="card-text">
						<ol>
							<b>Vertical</b>
							<li>Reporte o manipulación</li>
							<b>Horizontal</b>
							<li>Puntos de vista particulares o perspectivas</li>
							<li>Restringe los monopolios</li>
							<li>Sectario, no sectario, privado, propiedad de gobierno</li>
							<li>Amenaza para la diversidad y pluralismo de medios</li>
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
                <a href="<?php echo base_url();?>modulo11/unidad1/actividad1" class="btn btn_navegacion">Anterior</a>
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
    <script src="<?php echo base_url();?>public/assets/modulos/mod11/js/crucigrama.js"></script>



    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


</body>

</html>