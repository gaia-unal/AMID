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

                <ul class="list-group-item">

                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo10/unidad1"
                            class="list-group-item list-group-item-action bg-light">Unidad 1</a>

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo10/unidad1/contenidos"
                                    class="list-group-item">Contenidos</a>
                                <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>
                </ul>


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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo10">Módulo 10</a></li>
					<li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo10/unidad1">Unidad 1</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actividad 2</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 1: Audiencia</h1>
					<?php echo form_open('modulo10/unidad1/actividad3');$this->session->set_userdata('idAct','m10u1a2'); ?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <br>
                        <div class="contenido">
						<p class="card-text">
							Relaciona cada palabra con su respectiva justificación colocando frente a la palabra el número que
							corresponde a su justificación.
							<table class="w3-table w3-bordered">
								<tr>
									<th style="width: 30%;">Palabra</th>
									<th style="width: 30%;">Relación</th>
									<th style="width: 40%;">Justificación</th>
								</tr>
								<tr>
									<td>Diversión</td>
									<td><input type="number" name="resp1" id="resp1" min="1" max="4"></td>
									<td>1. El verse a usted conectado con un personaje de televisión o de la “familia”</td>
								</tr>
								<tr>
									<td>Relaciones personales</td>
									<td><input type="number" name="resp2" id="resp2" min="1" max="4"></td>
									<td>2. Utilizar los medios y los textos de información para aprender acerca de lo que sucede
										en nuestro mundo de alrededor</td>
								</tr>
								<tr>
									<td>Identidad personal</td>
									<td><input type="number" name="resp3" id="resp3" min="1" max="4"></td>
									<td>3. Un escape de la vida diaria</td>
								</tr>
								<tr>
									<td>Supervisión</td>
									<td><input type="number" name="resp4" id="resp4" min="1" max="4"></td>
									<td>4. Ser capaz de identificarse con y aprender de un comportamiento, actitud o valores que
										se reflejan en los textos mediáticos</td>
								</tr>
							</table>
							<br>
							<center>
								<a class="btn btn-outline-success" onclick="validar();">Validar</a>
							</center>
						</p>
                        </div>
                    </div>
                </div>
				<br>
				<input type="text" class="sr-only" id="pointsNota" name="pointsNota" value="1">
                <input type="text" class="sr-only" id="pointsGood" name="pointsGood" value="0">


            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo10/unidad1/actividad1" class="btn btn_navegacion">Anterior</a>
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
	<script src="<?php echo base_url();?>public/assets/modulos/mod10/js/act.js"></script>

    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


</body>

</html>