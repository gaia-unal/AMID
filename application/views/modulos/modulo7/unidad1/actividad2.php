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

                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo7/unidad1"
                            class="list-group-item list-group-item-action bg-light">Unidad 1</a>

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo7/unidad1/temas"
                                    class="list-group-item">Temas</a>
                                <a href="<?php echo base_url();?>modulo7/unidad1/actividad1"
                                    class="list-group-item">Actividades</a>
                                <a href="#" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>

                    <a href="#" class="list-group-item">Unidad 2</a>



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

                    <li class="breadcrumb-item active" aria-current="page">Actividad 2</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 1: Los jóvenes en el mundo virtual</h1>
                    <?php echo form_open('modulo7/unidad1/actividad3');$this->session->set_userdata('idAct','m7u1a2'); ?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <br>
                        <h4 class="subtitle">Preguntas de opción múltiple</h4><br>

                        <div class="contenido">
                            <div class="preguntas">
                                <!-- Pregunta 1 -->
                                <h4 class="subtEv">¿Qué es wiki?</h4>
                                <label id="p1-r1">
                                    <input type="radio" name="preg1" id="opc1" onclick="correcto();">
                                    a. Es una página web donde varias personas pueden editar su contenido
                                </label> <br>
                                <label id="p1-r2">
                                    <input type="radio" name="preg1" id="opc2" onclick="incorrecto('a');">
                                    b. Es un término que quiere decir rapido
                                </label> <br>
                                <label id="p1-r3">
                                    <input type="radio" name="preg1" id="opc3" onclick="incorrecto('a');">
                                    c. Es una estructura web sencilla de manejar
                                </label> <br>
                                <!-- Pregunta 2 -->
                                <h4 class="subtEv">¿Qué tipos de Wikis hay?</h4>
                                <label id="p2-r1">
                                    <input type="radio" name="preg2" id="opc1" onclick="incorrecto('e');">
                                    a. Publico
                                </label> <br>
                                <label id="p2-r2">
                                    <input type="radio" name="preg2" id="opc2" onclick="incorrecto('e');">
                                    b. Privado y protegido
                                </label> <br>
                                <label id="p2-r3">
                                    <input type="radio" name="preg2" id="opc3" onclick="incorrecto('e');">
                                    c. Publico y protegido
                                </label> <br>
                                <label id="p2-r4">
                                    <input type="radio" name="preg2" id="opc4" onclick="incorrecto('e');">
                                    d. Privado
                                </label> <br>
                                <label id="p2-r5">
                                    <input type="radio" name="preg2" id="opc5" onclick="correcto();">
                                    e. Todas son correctas menos la b
                                </label> <br>
                                <!-- Pregunta 3 -->
                                <h4 class="subtEv">¿Para qué sirve?</h4>
                                <label id="p3-r1">
                                    <input type="radio" name="preg3" id="opc1" onclick="incorrecto('b');">
                                    a. Permite diseñar páginas web
                                </label> <br>
                                <label id="p3-r2">
                                    <input type="radio" name="preg3" id="opc2" onclick="correcto();">
                                    b. Para crear contenido en páginas web de forma sencilla, el cual puede
                                    ser compartido y modificado de forma permanente
                                </label> <br>
                                <label id="p3-r3">
                                    <input type="radio" name="preg3" id="opc3" onclick="incorrecto('b');">
                                    c. Subir archivos y cambiarlos cuando se desee
                                </label> <br>
                                <!--Pregunta 4 -->
                                <h4 class="subtEv">¿Cómo se crea el contenido?</h4>
                                <label id="p4-r1">
                                    <input type="radio" name="preg4" id="opc1" onclick="incorrecto('b');">
                                    a. Con una sintaxis especial
                                </label> <br>
                                <label id="p4-r2">
                                    <input type="radio" name="preg4" id="opc2" onclick="correcto();">
                                    b. Dando clic en editar dentro de la pagina que desee modificar
                                </label> <br>
                                <label id="p4-r3">
                                    <input type="radio" name="preg4" id="opc3" onclick="incorrecto('b');">
                                    c. Borrando el contenido anteriormente publicado y agregando uno nuevo
                                </label> <br>
                                <!--Pregunta 5 -->
                                <h4 class="subtEv">Teniendo en cuenta la población a la que va dirigida y la materia que
                                    dicta, ¿qué
                                    contenido agregaría a la wiki?</h4>
                                <textarea name="preg5" style="width: 100%;" rows="7" minlength="1" maxlength="500"
                                    onkeypress="return check(event)" required placeholder="Escriba su respuesta aquí"
                                    spellcheck="true"></textarea>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo7/unidad1/actividad1" class="btn btn_navegacion">Anterior</a>
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
    <script src="<?php echo base_url();?>public/assets/modulos/mod7/js/u11scriptWiki.js"></script>

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