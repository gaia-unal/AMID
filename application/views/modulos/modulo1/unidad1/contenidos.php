<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>AMID</title>
    <?php $this->load->view('initial/linkGenerico'); ?>
</head>

<body>
    <?php $this->load->view('initial/nav'); ?>
    <link href="<?php echo base_url(); ?>public/assets/css/style.css" rel="stylesheet">
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="list-group list-group-flush">
                <a href="<?php echo base_url(); ?>modulo1" class="list-group-item list-group-item-action bg-light"><i class="dropdown-menu"></i>Módulo 1<span class="arrow"></span></a>
                <ul class="list-group-item">
                    <div class="btn-group dropright">
                        <a href="<?php echo base_url(); ?>modulo1/unidad1" class="list-group-item list-group-item-action bg-light">Unidad 1</a>
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item ">
                                <a href="<?php echo base_url(); ?>modulo1/unidad1/contenidos" class="list-group-item">Contenidos</a>
                                <a href="<?php echo base_url(); ?>modulo1/unidad1/evaluacion"  class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>
                    <a href="<?php echo base_url(); ?>modulo1/unidad2" class="list-group-item list-group-item-action bg-light inactive">Unidad 2</a>
                    <a href="<?php echo base_url(); ?>modulo1/unidad3" class="list-group-item list-group-item-action bg-light inactive">Unidad 3</a>
                    <a href="<?php echo base_url(); ?>modulo1/unidad4" class="list-group-item list-group-item-action bg-light inactive">Unidad 4</a>
                </ul>
                <a href="<?php echo base_url(); ?>modulo2" class="list-group-item list-group-item-action bg-light">Módulo 2</a>
                <a href="<?php echo base_url(); ?>modulo3" class="list-group-item list-group-item-action bg-light">Módulo 3</a>
                <a href="<?php echo base_url(); ?>modulo4" class="list-group-item list-group-item-action bg-light">Módulo 4</a>
                <a href="<?php echo base_url(); ?>modulo5" class="list-group-item list-group-item-action bg-light">Módulo 5</a>
                <a href="<?php echo base_url(); ?>modulo6" class="list-group-item list-group-item-action bg-light">Módulo 6</a>
                <a href="<?php echo base_url(); ?>modulo7" class="list-group-item list-group-item-action bg-light">Módulo 7</a>
                <a href="<?php echo base_url(); ?>modulo8" class="list-group-item list-group-item-action bg-light">Módulo 8</a>
                <a href="<?php echo base_url(); ?>modulo9" class="list-group-item list-group-item-action bg-light">Módulo 9</a>
                <a href="<?php echo base_url(); ?>modulo10" class="list-group-item list-group-item-action bg-light">Módulo 10</a>
                <a href="<?php echo base_url(); ?>modulo11" class="list-group-item list-group-item-action bg-light">Módulo 11</a>
                <a href="<?php echo base_url(); ?>modulo12" class="list-group-item list-group-item-action bg-light">Módulo 12</a>
            </div>
        </div>
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom d-lg-none">
                <button class="btn " id="menu-toggle"><i class="fas fa-align-justify"></i></button>
            </nav>
            <nav class="bread-style" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>inicio/main">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>modulo1">Módulo 1</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>modulo1/unidad1">Unidad 1</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contenidos</li>
                </ol>
            </nav>
            <div class="contenedor">
                <br><?php $this->session->set_userdata('ruta','modulo1/unidad1/contenidos');?>
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="contenido ">
                            <h1 class="first_title"><br>Contenidos unidad 1. Comprender la alfabetización mediática e informacional: Una
                                orientación</h1>
                            <br>
                            <p class="m-b-10">
                                A continuación encuentras los enlaces para acceder a los diferentes contenidos y al frente
                                se encuentra su respectiva actividades
                            </p>
                            <div class="row">
                                <div class="col-6">
                                    <h2 class="second_title">Contenidos</h2>
                                </div>
                                <div class="col-6">
                                    <h2 class="second_title">Actividades</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <a href="<?php echo base_url(); ?>modulo1/unidad1/actividad1" type="button" class="btn btn-info" style="width: 100%;">Parte 1: Los múltiples papeles de los medios
                                    </a> <br><br>
                                </div>
                                <div class="col-6">
                                    <a href="<?php echo base_url(); ?>modulo1/unidad1/actividad2" type="button" class="btn btn-info" style="width: 100%;">Actividad 1: Definición de "información" y "medios".
                                    </a> <br><br>
                                    <a href="<?php echo base_url(); ?>modulo1/unidad1/actividad3" type="button" class="btn btn-info" style="width: 100%;">Actividad 2: Definición de "información" y "medios".
                                    </a> <br><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <a href="<?php echo base_url(); ?>modulo1/unidad1/actividad4" type="button" class="btn btn-info" style="width: 100%;">Parte 2: Los múltiples papeles de los medios </a>
                                    <br><br>
                                </div>
                                <div class="col-6">
                                    <a href="<?php echo base_url(); ?>modulo1/unidad1/actividad5" type="button" class="btn btn-info" style="width: 100%;">Actividad 3: La Alfabetización mediática e informacional </a>
                                    <br><br>
                                    <a href="<?php echo base_url(); ?>modulo1/unidad1/actividad6" type="button" class="btn btn-info" style="width: 100%;">Actividad 4: La Alfabetización mediática e informacional </a>
                                    <br><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <a href="<?php echo base_url(); ?>modulo1/unidad1/actividad7" type="button" class="btn btn-info" style="width: 100%;">Información sobre los proveedores</a>
                                    <br><br>
                                </div>
                                <div class="col-6">
                                    <a href="<?php echo base_url(); ?>modulo1/unidad1/actividad8" type="button" class="btn btn-info" style="width: 100%;">Actividad 5: Definición de "información" y "medios"</a>
                                    <br><br>
                                    <a href="<?php echo base_url(); ?>modulo1/unidad1/actividad9" type="button" class="btn btn-info" style="width: 100%;">Actividad 6: Importancia de los medios y otros proveedores de información.</a>
                                    <br><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <a type="button" class="btn btn-info" style="width: 100%;" href="<?php echo base_url(); ?>modulo1/unidad1/actividad10">La importancia que tiene AMI para los ciudadanos</a>
                                </div>
                                <div class="col-6">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <center>
                <a href="<?php echo base_url(); ?>modulo1/unidad1/inicio" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url(); ?>modulo1/unidad1/actividad1" class="btn btn_navegacion">Siguiente</a>
            </center>
            <?php $this->load->view('initial/paginacion'); ?>
            <p class="final_contenido">Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/">
                Licencia Creative Commons Reconocimiento Compartir igual 4.0</a></p>
            <br>
        </div>
    </div>
    <?php $this->load->view('initial/footer'); ?>
    <?php $this->load->view('initial/scriptGenerico'); ?>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>

<style>
    .papeles_media {
        width: 800px;
    }

    .second_title {
        font-size: 1.1em;
        font-weight: bold;
        font-family: 'Roboto', sans-serif;
    }
</style>