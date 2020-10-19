<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AMID</title>

    <?php $this->load->view('initial/linkGenerico');?>
    <link href="<?php echo base_url();?>public/assets/modulos/mod9/css/u1juego.css" rel="stylesheet">
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

                <ul class="list-group-item">

                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo9/unidad1"
                            class="list-group-item list-group-item-action bg-light">Unidad 1</a>

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo9/unidad1/temas"
                                    class="list-group-item">Temas</a>
                                <a href="<?php echo base_url();?>modulo9/unidad1/actividad1"
                                    class="list-group-item">Actividades</a>
                                <a href="#" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>

                    <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 2</a>
                    <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
                </ul>


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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo9/unidad1">Unidad 1</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Evaluación</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 1: Comunicación, enseñanza y aprendizaje</h1>
                    <?php echo form_open('modulo9/unidad2/inicio');$this->session->set_userdata('idAct','m9u1'); ?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <br>
                        <h4 class="subtitle">Evaluación</h4><br>
                        <div class="contenido">
						<p class="card-text">
							Empareja cada palabra con su significado <br>
							<img id="imagen6" src="<?php echo base_url();?>public/assets/modulos/mod9/img/palabra/6.png"     alt="p6" onclick="validar('6')">
							<img id="imagen12" src="<?php echo base_url();?>public/assets/modulos/mod9/img/definicion/6.png" alt="d6" onclick="validar('12')">
							<img id="imagen3" src="<?php echo base_url();?>public/assets/modulos/mod9/img/palabra/3.png"     alt="p3" onclick="validar('3')">
							<img id="imagen8" src="<?php echo base_url();?>public/assets/modulos/mod9/img/definicion/2.png"  alt="d2" onclick="validar('8')">
							<img id="imagen1" src="<?php echo base_url();?>public/assets/modulos/mod9/img/palabra/1.png"     alt="p1" onclick="validar('1')">
							<img id="imagen11" src="<?php echo base_url();?>public/assets/modulos/mod9/img/definicion/5.png" alt="d5" onclick="validar('11')">
							<img id="imagen4" src="<?php echo base_url();?>public/assets/modulos/mod9/img/palabra/4.png"     alt="p4" onclick="validar('4')">
							<img id="imagen10" src="<?php echo base_url();?>public/assets/modulos/mod9/img/definicion/4.png" alt="d4" onclick="validar('10')">
							<img id="imagen5" src="<?php echo base_url();?>public/assets/modulos/mod9/img/palabra/5.png"     alt="p5" onclick="validar('5')">
							<img id="imagen7" src="<?php echo base_url();?>public/assets/modulos/mod9/img/definicion/1.png"  alt="d1" onclick="validar('7')">
							<img id="imagen2" src="<?php echo base_url();?>public/assets/modulos/mod9/img/palabra/2.png"     alt="p2" onclick="validar('2')">
							<img id="imagen9" src="<?php echo base_url();?>public/assets/modulos/mod9/img/definicion/3.png"  alt="d3" onclick="validar('9')">

							<input type="text" name="preg" id="preg" value = 1 style="display:none;">
						</p>
                        </div>
                    </div>
                </div>



            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo9/unidad1/actividad2" class="btn btn_navegacion">Anterior</a>
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
    <script src="<?php echo base_url();?>public/assets/modulos/mod9/js/juego.js"></script>

    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


</body>

</html>