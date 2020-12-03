<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AMID</title>
    <?php $this->load->view('initial/linkGenerico');?>
    <link href="<?php echo base_url();?>public/assets/modulos/mod7/css/u22estilo.css" rel="stylesheet">
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

                <a href="<?php echo base_url();?>modulo5" class="list-group-item list-group-item-action bg-light">
                    Módulo 5</a>

                <a href="<?php echo base_url();?>modulo6" class="list-group-item list-group-item-action bg-light">
                    Módulo 6</a>

                <a href="<?php echo base_url();?>modulo7" class="list-group-item list-group-item-action bg-light">
                    Módulo 7</a>

                <ul class="list-group-item">

                    <a href="<?php echo base_url();?>modulo7/unidad1"
                        class="list-group-item list-group-item-action bg-light">Unidad 1</a>

                    <div class="btn-group dropright">


                        <a href="<?php echo base_url();?>modulo7/unidad2" class="list-group-item">Unidad 2</a>

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo7/unidad2/temas"
                                    class="list-group-item">Temas</a>
                                <a href="<?php echo base_url();?>modulo7/unidad2/actividad1"
                                    class="list-group-item">Actividades</a>
                                <a href="#" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo7/unidad 2">Unidad 2</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actividad 2</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 2: Retos y riesgos en el mundo virtual</h1>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <br>
                        <h4 class="subtEv">Lea el siguiente caso real de <em>Phishing</em> para realizar la actividad.</h4>
                        <br>

                        <div class="contenido">
                        <div id="parte1" style="display:block;">
                            <img class="img" id="imagen" src="<?php echo base_url();?>public/assets/modulos/mod7/img/bancolombia1.png">
                        </div>
                        <div id="parte2" style="display:none;">
                            <img class="img" id="imagen" src="<?php echo base_url();?>public/assets/modulos/mod7/img/bancolombia2.png">
                        </div>
                        <div id="parte3" style="display:none;">
                            <img class="img" id="imagen" src="<?php echo base_url();?>public/assets/modulos/mod7/img/bancolombia3.png">
                        </div>
                        <div id="parte4" style="display:none;">
                            <img class="img" id="imagen" src="<?php echo base_url();?>public/assets/modulos/mod7/img/bancolombia4.png">
                        </div>
                        <div id="parte5" style="display:none;">
                            <img class="img" id="imagen" src="<?php echo base_url();?>public/assets/modulos/mod7/img/bancolombia5.png">
                        </div>
                        <div id="parte6" style="display:none;">
                            <img class="img" id="imagen" src="<?php echo base_url();?>public/assets/modulos/mod7/img/bancolombia6.png">
                        </div>
                        <div id="parte7" style="display:none;">
                            <img class="img" id="imagen" src="<?php echo base_url();?>public/assets/modulos/mod7/img/bancolombia7.png">
                        </div>
                        <div id="parte8" style="display:none;">
                            <img class="img" id="imagen" src="<?php echo base_url();?>public/assets/modulos/mod7/img/bancolombia8.png">
                        </div>
                        <div id="parte9" style="display:none;">
                            <img class="img" id="imagen" src="<?php echo base_url();?>public/assets/modulos/mod7/img/bancolombia9.png">
                        </div>
                        </div>
                    </div>
                </div>
                <center>
                <br>
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


            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo7/unidad2/actividad1" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo7/unidad2/actividad3" class="btn btn_navegacion">Siguiente</a>
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
    <script src="<?php echo base_url();?>public/assets/modulos/mod7/js/arrows.js"></script>


    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


</body>

</html>

<style>
.subtEv {
    font-size: 1.2em;
    font-family: 'Roboto', sans-serif;

    font-weight: 500;
}
</style>