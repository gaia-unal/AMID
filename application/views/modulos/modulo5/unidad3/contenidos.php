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


                <a href="<?php echo base_url(); ?>modulo2" class="list-group-item list-group-item-action bg-light">
                    Módulo 2</a>

                <a href="<?php echo base_url(); ?>modulo3" class="list-group-item list-group-item-action bg-light">
                    Módulo 3</a>

                <a href="<?php echo base_url(); ?>modulo4" class="list-group-item list-group-item-action bg-light">
                    Módulo 4</a>

                <a href="<?php echo base_url(); ?>modulo5" class="list-group-item list-group-item-action bg-light">
                    Módulo 5</a>

                <ul class="list-group-item">

                    <a href="<?php echo base_url(); ?>modulo5/unidad1" class="list-group-item list-group-item-action bg-light">Unidad 1</a>

                    <div class="btn-group dropright">


                        <a href="<?php echo base_url(); ?>modulo5/unidad2" class="list-group-item list-group-item-action bg-light">Unidad 2</a>

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url(); ?>modulo5/unidad2/contenidos" class="list-group-item">Contenidos</a>
                                <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>



                    <a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 3</a>
                    <a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 4</a>
                    <a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 5</a>

                </ul>


                <a href="<?php echo base_url(); ?>modulo6" class="list-group-item list-group-item-action bg-light">
                    Módulo 6</a>
                <a href="<?php echo base_url(); ?>modulo7" class="list-group-item list-group-item-action bg-light">
                    Módulo 7</a>
                <a href="<?php echo base_url(); ?>modulo8" class="list-group-item list-group-item-action bg-light">
                    Módulo 8</a>
                <a href="<?php echo base_url(); ?>modulo9" class="list-group-item list-group-item-action bg-light">
                    Módulo 9</a>
                <a href="<?php echo base_url(); ?>modulo10" class="list-group-item list-group-item-action bg-light">
                    Módulo 10</a>
                <a href="<?php echo base_url(); ?>modulo11" class="list-group-item list-group-item-action bg-light">
                    Módulo 11</a>
                <a href="<?php echo base_url(); ?>modulo12" class="list-group-item list-group-item-action bg-light">
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>inicio/main">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>modulo5">Módulo 5</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>modulo5/unidad2">Unidad 2</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contenidos</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->

                <br>
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="contenido ">
                            <h1 class="first_title"><br>Contenidos unidad 2. Anuncios de bien público (ABP)</h1>
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
                                    <a href="<?php echo base_url(); ?>modulo5/unidad2/actividad1" type="button" class="btn btn-info" style="width: 100%;">Anuncios de bien público (ABP)</a><br><br>
                                </div>
                                <div class="col-6">
                                    <a href="<?php echo base_url(); ?>modulo5/unidad2/actividad1" type="button" class="btn btn-info" style="width: 100%;">Actividad: Anuncios de bien público (ABP)</a><br><br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                </div>
                                <div class="col-6">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                </div>
                                <div class="col-6">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
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
                <a href="<?php echo base_url(); ?>modulo5/unidad2/inicio" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url(); ?>modulo5/unidad2/actividad1" class="btn btn_navegacion">Siguiente</a>
            </center>
            <?php $this->load->view('initial/paginacion'); ?>


            <p class="final_contenido">Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/">
                    Licencia Creative
                    Commons
                    Reconocimiento Compartir igual 4.0</a></p>
            <br>
            <!-- /#page-content-wrapper -->
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