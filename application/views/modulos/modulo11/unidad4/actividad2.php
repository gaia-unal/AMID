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

                    <a href="<?php echo base_url();?>modulo11/unidad1"
                        class="list-group-item list-group-item-action bg-light">Unidad 1</a>
                    <a href="<?php echo base_url();?>modulo11/unidad2" class="list-group-item">Unidad 2</a>
                    <a href="<?php echo base_url();?>modulo11/unidad3" class="list-group-item">Unidad 3</a>

                    <div class="btn-group dropright">

                        <a href="<?php echo base_url();?>modulo11/unidad4" class="list-group-item">Unidad 4</a>

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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo11/unidad4">Unidad 4</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actividad 2</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 4: El nacimiento de medios alternativos</h1>
                    <?php echo form_open('modulo12');$this->session->set_userdata('idAct','m11u4a2'); ?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
					<br>
					<h4 class="subtitle">Actividad</h4>
                        <div class="contenido">
						<p class="card-text">
                            Completa las frases usando las palabras que aparecen a continuación: <br>
                        <ul style="columns: 2;">
                            <li>empresas</li>
                            <li>masivos</li>
                            <li>agencia</li>
                            <li>emisor</li>
                            <li>interactivos</li>
                            <li>independiente</li>
                            <li>informacion</li>
                            <li>comunicacion</li>
                            <li>valores</li>
                            <li>institucion</li>
                            <li>transparencia</li>
                            <li>publico</li>
                            <li>departamentales</li>
                        </ul>
                        <div class="auto">
                            <b>Nota: </b> Las palabras pueden ser escritas en más de un espacio. <br><br>
                            Es un <input type="text" name="emisor" id="opc1"> de <input type="text" name="informacion"
                                id="opc2"> <input type="text" name="independiente" id="opc3"> que no constituye una
                            <input type="text" name="agencia" id="opc4"> de <input type="text" name="informacion"
                                id="opc5"> ni
                            de los medios <input type="text" name="masivos" id="opc6"> de <input type="text"
                                name="comunicacion" id="opc7"> organizados como <input type="text" name="empresas"
                                id="opc8">.
                            <br><br>
                            Las relaciones con el <input type="text" name="publico" id="opc9"> deben respetar los mismos
                            <input type="text" name="valores" id="opc10"> y normas que se siguen dentro de la <input
                                type="text" name="institucion" id="opc11">, particularmente los de <input type="text"
                                name="transparencia" id="opc12">, diálogo, y <input type="text" name="comunicacion"
                                id="opc13"> general.
                            <br><br>
                            Kioscos <input type="text" name="interactivos" id="opc14"> en tiendas <input type="text"
                                name="departamentales" id="opc15">.
                        </div>
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
                <a href="<?php echo base_url();?>modulo11/unidad4/actividad1" class="btn btn_navegacion">Anterior</a>
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
    <script src="<?php echo base_url();?>public/assets/modulos/mod11/js/u4preguntas.js"></script>


    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


</body>

</html>