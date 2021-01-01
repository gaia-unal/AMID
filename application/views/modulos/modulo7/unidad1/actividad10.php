<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AMID</title>
    <?php $this->load->view('initial/linkGenerico');?>
    <link href="<?php echo base_url();?>public/assets/modulos/mod7/css/u14juego.css" rel="stylesheet">
  <link href="<?php echo base_url();?>public/assets/modulos/mod7/css/u14animacion.css" rel="stylesheet">
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

                <a href="<?php echo base_url();?>modulo5" class="list-group-item list-group-item-action bg-light">
                    Módulo 5</a>

                <a href="<?php echo base_url();?>modulo6" class="list-group-item list-group-item-action bg-light">
                    Módulo 6</a>

                <a href="<?php echo base_url();?>modulo7" class="list-group-item list-group-item-action bg-light">
                    Módulo 7</a>

                <ul class="list-group-item">

                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo7/unidad1"
                            class="list-group-item list-group-item-action bg-light">Unidad 1</a>

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo7/unidad1/contenidos"
                                    class="list-group-item">Contenidos</a>
                                <a href="<?php echo base_url();?>modulo7/unidad1/evaluacion1"  class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>

                    <a href="<?php echo base_url();?>modulo7/unidad2" class="list-group-item">Unidad 2</a>



                </ul>

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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo7">Módulo 7</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo7/unidad1">Unidad 1</a></li>

                    <li class="breadcrumb-item active" aria-current="page">Actividad 6</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 1: Los jóvenes en el mundo virtual</h1>
                    <?php echo form_open('modulo7/unidad1/evaluacion1');$this->session->set_userdata('idAct','m7u1a10'); $this->session->set_userdata('ruta','modulo7/unidad1/actividad10');?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <br>
                        <h4 class="subtitle">Empareja cada palabra con su significado</h4><br>
                        <br>
                        <div class="contenido">
                        <a href="#" onclick="validar('3')"><img id="imagen3" src="<?php echo base_url();?>public/assets/modulos/mod7/img/palabra/3.png"
                                alt="p3"></a>
                        <a href="#" onclick="validar('7')"><img id="imagen7" src="<?php echo base_url();?>public/assets/modulos/mod7/img/definicion/1.png"
                                alt="d1"></a>
                        <a href="#" onclick="validar('1')"><img id="imagen1" src="<?php echo base_url();?>public/assets/modulos/mod7/img/palabra/1.png"
                                alt="p1"></a>
                        <a href="#" onclick="validar('10')"><img id="imagen10" src="<?php echo base_url();?>public/assets/modulos/mod7/img/definicion/4.png"
                                alt="d4"></a>
                        <a href="#" onclick="validar('4')"><img id="imagen4" src="<?php echo base_url();?>public/assets/modulos/mod7/img/palabra/4.png"
                                alt="p4"></a>
                        <a href="#" onclick="validar('6')"><img id="imagen6" src="<?php echo base_url();?>public/assets/modulos/mod7/img/palabra/6.png"
                                alt="p6"></a>
                        <a href="#" onclick="validar('8')"><img id="imagen8" src="<?php echo base_url();?>public/assets/modulos/mod7/img/definicion/2.png"
                                alt="d2"></a>
                        <a href="#" onclick="validar('2')"><img id="imagen2" src="<?php echo base_url();?>public/assets/modulos/mod7/img/palabra/2.png"
                                alt="p2"></a>
                        <a href="#" onclick="validar('9')"><img id="imagen9" src="<?php echo base_url();?>public/assets/modulos/mod7/img/definicion/3.png"
                                alt="d3"></a>
                        <a href="#" onclick="validar('11')"><img id="imagen11" src="<?php echo base_url();?>public/assets/modulos/mod7/img/definicion/5.png"
                                alt="d5"></a>
                        <a href="#" onclick="validar('12')"><img id="imagen12" src="<?php echo base_url();?>public/assets/modulos/mod7/img/definicion/6.png"
                                alt="d6"></a>
                        <a href="#" onclick="validar('5')"><img id="imagen5" src="<?php echo base_url();?>public/assets/modulos/mod7/img/palabra/5.png"
                                alt="p5"></a>
                        </div>
                    </div>
                </div>

            </div>
            <br>
                <input type="text" class="sr-only" id="pointsNota" name="pointsNota" value="1">
                <input type="text" class="sr-only" id="pointsGood" name="pointsGood" value="0">

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo7/unidad1/actividad9" class="btn btn_navegacion">Anterior</a>
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
    <script src="<?php echo base_url();?>public/assets/modulos/mod7/js/u14script.js"></script>

    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


</body>

</html>