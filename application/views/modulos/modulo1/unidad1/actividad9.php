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
                                <a href="<?php echo base_url();?>modulo1/unidad1/temas"
                                    class="list-group-item">Temas</a>
                                <a href="<?php echo base_url();?>modulo1/unidad1/actividad1"
                                    class="list-group-item">Actividades</a>
                                <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
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
                    <li class="breadcrumb-item active" aria-current="page">Actividad 9</li>
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
                <?php echo form_open('modulo1/unidad1/actividad10');$this->session->set_userdata('idAct','m1u1a9'); ?>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4 class="subtitle">Reflexión</h4><br>
                        <div class="contenido">
                            <p class="card-text">

                                <strong>Tema:</strong> Importancia de los medios y otrosp roveedores de información.
                                <br><strong>Propósito de la actividad:</strong> Explorar el papel de los medios y otros
                                proveedores de información tales como bibliotecas, archivos e internet. <br><br>
                                <i class="fas fa-question-circle"></i>
                                Haga una inspección de algunas bibliotecas de colegios/universidades o bibliotecas
                                públicas
                                para encontrar libros y otros recursos disponibles que según su criterio provean
                                información
                                sobre democracia, sobre otros lugares del mundo, sobre distintas culturas o sobre la
                                vida
                                social y económica, etc. <br>
                                Para estas bibliotecas inspeccionadas, consulte y responda las siguientes preguntas:
                                <br><br>
                            <ul>
                                <li>¿Quién decide qué libros deben ser incluidos en la bibliteca y cuáles deben ser
                                    excluidos?</li><br>
                                <textarea name="preg1" style="width: 100%;" rows="5" minlength="1" maxlength="200"
                                    onkeypress="return check(event)" required placeholder="Escriba su respuesta aquí"
                                    spellcheck="true" autofocus></textarea><br>
                                    <br>  <li>¿Quién decide que recursos y con qué nivel deben ser asignados a las bibliotecas?<br>
                                </li>
                                <textarea name="preg2" style="width: 100%;" rows="5" minlength="1" maxlength="200"
                                    onkeypress="return check(event)" required placeholder="Escriba su respuesta aquí"
                                    spellcheck="true"></textarea><br>
                                    <br> <li>¿Quién decide qué libros son más importantes que otros?</li><br>
                                <textarea name="preg3" style="width: 100%;" rows="5" minlength="1" maxlength="200"
                                    onkeypress="return check(event)" required placeholder="Escriba su respuesta aquí"
                                    spellcheck="true"></textarea><br>
                                    <br> <li>¿Las bibliotecas cumplen sus propositos?</li><br>
                                <textarea name="preg4" style="width: 100%;" rows="5" minlength="1" maxlength="200"
                                    onkeypress="return check(event)" required placeholder="Escriba su respuesta aquí"
                                    spellcheck="true"></textarea><br>
                            </ul>
                            <i class="fas fa-info"></i>
                            Note que se podría organizar una actividad de inspección similar para sitios de
                            Internet, museos, archivos, etc.

                            </p>


                        </div>
                    </div>
                </div>

            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo1/unidad1/actividad8" class="btn btn_navegacion">Anterior</a>
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


    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


</body>

</html>


