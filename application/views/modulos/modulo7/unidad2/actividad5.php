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
                                <a href="<?php echo base_url();?>modulo7/unidad2/contenidos"
                                    class="list-group-item">Contenidos</a>
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
                    <?php echo form_open('modulo7/unidad2/actividad6');$this->session->set_userdata('idAct','m7u2a5'); ?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="contenido">
                        
                        <div class="preguntas">
                            <!-- Pregunta 1 -->
                            <h4 class="subtEv">1) ¿Cuál es la herramienta que implementó <em>Google</em> que está orientada a la
                                búsqueda de referencias científicas?</h4>
                            <label class="container" id="p1-r1">
                                <input type="radio" name="preg1" id="opc1" value = 1 required>
                                a. Google tools
                            </label>
                            <label class="container" id="p1-r2">
                                <input type="radio" name="preg1" id="opc2" value = 1 required>
                                b. Google maps
                            </label>
                            <label class="container" id="p1-r3">
                                <input type="radio" name="preg1" id="opc3" value = 5 required>
                                c. Google Scholar (Google académico).
                            </label>
                            <!-- Pregunta 2 -->
                            <h4 class="subtEv">2) ¿Cómo se puede identificar quién administra un sitio web?</h4>
                            <label class="container" id="p2-r1">
                                <input type="radio" name="preg2" id="opc1" value = 5 required>
                                a. En algunas ocasiones, por medio de la dirección del sitio web (URL).
                            </label>
                            <label class="container" id="p2-r2">
                                <input type="radio" name="preg2" id="opc2" value = 1 required>
                                b. Por medio del título de la página. 
                            </label>
                            <label class="container" id="p2-r3">
                                <input type="radio" name="preg2" id="opc3" value = 1 required>
                                c. Llamando al número que aparece en la página web.
                            </label>
                            <label class="container" id="p2-r4">
                                <input type="radio" name="preg2" id="opc4" value = 1 required>
                                d. Ninguna de las anteriores.
                            </label>

                            <!-- Pregunta 3 -->
                            <h4 class="subtEv">3) ¿Puede usted reemplazar la consulta con un médico si encuentra la información que
                                estaba buscando?</h4>
                            <label class="container" id="p3-r1">
                                <input type="radio" name="preg3" id="opc1" value = 1 required>
                                a. Sí, siempre y cuando indiquen los medicamentos que debo tomar con
                                    dosis.
                            </label>
                            <label class="container" id="p3-r2">
                                <input type="radio" name="preg3" id="opc2" value = 5 required>
                                b. No, ninguna información debe reemplazar la consulta con un médico
                                    lo puede asesorar de acuerdo con su situación específica.
                            </label>
                            <label class="container" id="p3-r3">
                                <input type="radio" name="preg3" id="opc3" value = 1 required>
                                c. No porque de pronto la información no está actualizada.
                            </label>
                            <!--Pregunta 4 -->
                            <h4 class="subtEv">4) Seleccione cuál <strong>NO</strong> es una precaución que puede ayudarle a proteger
                                mejor su información</h4>
                            <label class="container" id="p4-r1">
                                <input type="radio" name="preg4" id="opc1" value = 1 required>
                                a. No abra enlaces inesperados. Use el sentido común al navegar
                                    Internet.
                            </label>
                            <label class="container" id="p4-r2">
                                <input type="radio" name="preg4" id="opc2" value = 1 required>
                                b. Utilice contraseñas seguras. Incluya números, letras y símbol
                                    cámbiela frecuentemente.
                            </label>
                            <label class="container" id="p4-r3">
                                <input type="radio" name="preg4" id="opc3" value = 5 required>
                                c. Si todas las personas recomiendan una página, entonces esa e
                                    indicada.
                            </label>
                        </div>

                        </div>
                    </div>
                </div>
            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo7/unidad2/actividad4" class="btn btn_navegacion">Anterior</a>
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
    <script src="<?php echo base_url();?>public/assets/modulos/mod7/js/u22script.js"></script>


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