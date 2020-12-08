<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AMID</title>

    <?php $this->load->view('initial/linkGenerico');?>

</head>

<body>
    <?php $this->load->view('initial/nav');?>

    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper"> 

            <div class="list-group list-group-flush">

                <a href="<?php echo base_url();?>modulo1" class="list-group-item list-group-item-action bg-light"><i
                        class="dropdown-menu"></i>Módulo 1<span class="arrow"></span></a>
                <ul class="list-group-item">
                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo1/unidad1" class="list-group-item list-group-item-action bg-light">Unidad 1</a>
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item ">
                                    <a href="<?php echo base_url();?>modulo1/unidad1/contenidos"
                                    class="list-group-item">Contenidos</a>
                                <a href="<?php echo base_url();?>modulo1/unidad1/evaluacion"
                                    class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>


                    <a href="#" onclick="inactivo(1)"
                        class="list-group-item list-group-item-action bg-light inactive">Unidad 2</a>
                    <a href="#" onclick="inactivo(1)"
                        class="list-group-item list-group-item-action bg-light inactive">Unidad 3</a>
                    <a href="#" onclick="inactivo(1)"
                        class="list-group-item list-group-item-action bg-light inactive">Unidad 4</a>
                </ul>


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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo1">Módulo 1</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo1/unidad1">Unidad 1</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contenido</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 1: Comprender la alfabetización mediática e informacional: Una
                        orientación</h1>
                </center>
                <br>

                <div class="card mt-4">
                    <div class="card-body">
                        <h4 class="subtitle">La importancia que tiene AMI para los ciudadanos</h4><br>
                        <div class="contenido">
                            <p class="card-text">

                                La Alfabetización Mediática e Informacional (AMI) une disciplinas que antes se mantenían
                                separadas y distintas. AMI se ocupa de que las personas comprendan la importancia de los
                                medios y otros proveedores de información a fin de que: <br>
                            <ol>
                                <li value="a">Tomen decisiones informadas</li>
                                <li>Aprendan sobre el mundo que les rodea</li>
                                <li>Construyan un sentido de comunidad</li>
                                <li>Mantengan un discurso público, y</li>
                                <li>Se comprometan a aprender a lo largo de toda la vida.</li>
                            </ol>
                            Más allá, AMI debería estimular a que los ciudadanos se conviertan en productores
                            activos de información e innovadores de los medios y productos de información, así como
                            que sean pensadores críticos. AMI debería incentivar que usen los medios nuevos y
                            tradicionales para la auto-expresión, creatividad y mayor participación en la democracia
                            de sus países y en la red de información a nivel global.

                            </p>
                            <img class="total"
                                src="<?php echo base_url();?>public/assets/modulos/mod1/img/importancia.png"
                                alt="importancia">
                        </div>
                    </div>
                </div>

            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo1/unidad1/actividad9" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo1/unidad1/evaluacion" class="btn btn_navegacion">Siguiente</a>
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


    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


</body>

</html>

<style>

.total{
    width: 900px;
    height: 500px;
    margin-left:auto;
    margin-right:auto;
}
</style>
