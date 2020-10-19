<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AMID</title>
    <?php $this->load->view('initial/linkGenerico');?>
    <link href="<?php echo base_url();?>public/assets/modulos/mod2/css/juego.css" rel="stylesheet">
  <link href="<?php echo base_url();?>public/assets/modulos/mod2/css/animacion.css" rel="stylesheet">
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

                <ul class="list-group-item">
                    <a href="<?php echo base_url();?>modulo2/unidad1" class="list-group-item list-group-item-action bg-light">Unidad 1</a>
                    <a href="<?php echo base_url();?>modulo2/unidad2"  class="list-group-item list-group-item-action bg-light">Unidad 2</a>
                    <div class="btn-group dropright">
                    <a href="<?php echo base_url();?>modulo2/unidad3"  class="list-group-item inactive">Unidad 3</a>

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo2/unidad3/temas"
                                    class="list-group-item">Temas</a>
                                <a href="<?php echo base_url();?>modulo2/unidad3/actividad1"
                                    class="list-group-item">Actividades</a>
                                <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>



                    
                    <a href="#" onclick="inactivo(3)" class="list-group-item inactive">Unidad 4</a>
                </ul>



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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo2">Módulo 2</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo2/unidad3">Unidad 3</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actividad 2</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 3: Lo que genera noticias – explorando los criterios</h1>
                    <?php echo form_open('modulo2/unidad3/actividad3');$this->session->set_userdata('idAct','m2u3a2'); ?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <br>
                        <h4 class="subtitle">Refuerzo</h4><br>
                        <div class="contenido">
                            <p class="card-text">

                            Investigue y a continuación empareje cada palabra con su respectivo significado<br><br>
                            <img id="imagen3" src="<?php echo base_url();?>public/assets/modulos/mod2/img/palabra3.png" onclick="validar('3')"alt="p3">
                            <img id="imagen7" src="<?php echo base_url();?>public/assets/modulos/mod2/img/definicion1.png" onclick="validar('7')" alt="d1">
                            <img id="imagen1" src="<?php echo base_url();?>public/assets/modulos/mod2/img/palabra1.png" onclick="validar('1')" alt="p1">
                            <img id="imagen10" src="<?php echo base_url();?>public/assets/modulos/mod2/img/definicion4.png" onclick="validar('10')" alt="d4">
                            <img id="imagen4" src="<?php echo base_url();?>public/assets/modulos/mod2/img/palabra4.png" onclick="validar('4')" alt="p4">
                            <img id="imagen6" src="<?php echo base_url();?>public/assets/modulos/mod2/img/palabra6.png" onclick="validar('6')" alt="p6">
                            <img id="imagen8" src="<?php echo base_url();?>public/assets/modulos/mod2/img/definicion2.png" onclick="validar('8')" alt="d2">
                            <img id="imagen2" src="<?php echo base_url();?>public/assets/modulos/mod2/img/palabra2.png" onclick="validar('2')" alt="p2">
                            <img id="imagen9" src="<?php echo base_url();?>public/assets/modulos/mod2/img/definicion3.png" onclick="validar('9')" alt="d3">
                            <img id="imagen11" src="<?php echo base_url();?>public/assets/modulos/mod2/img/definicion5.png" onclick="validar('11')" alt="d5">
                            <img id="imagen12" src="<?php echo base_url();?>public/assets/modulos/mod2/img/definicion6.png" onclick="validar('12')" alt="d6">
                            <img id="imagen5" src="<?php echo base_url();?>public/assets/modulos/mod2/img/palabra5.png" onclick="validar('5')" alt="p5">
                            </p>

                        </div>
                    </div>
                </div>

                <input type="text" class="sr-only" id="pointsNota" name="pointsNota" value="1">
                <input type="text" class="sr-only" id="pointsGood" name="pointsGood" value="0">

            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo2/unidad3/actividad1" class="btn btn_navegacion">Anterior</a>
                <button id="btn-siguiente"  class="btn btn_navegacion" name="submit" type="submit">Siguiente</button>
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
    <script src="<?php echo base_url();?>public/assets/modulos/mod2/js/und3script.js"></script>

    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


</body>

</html>