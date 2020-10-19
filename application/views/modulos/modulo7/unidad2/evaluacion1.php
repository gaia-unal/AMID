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


                        <a href="<?php echo base_url();?>modulo7/unidad2" class="list-group-item inactive">Unidad 2</a>

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
                    <li class="breadcrumb-item active" aria-current="page">Evaluación 1</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 2: Retos y riesgos en el mundo virtual</h1>
                    <?php echo form_open('modulo7/unidad2/evaluacion2');$this->session->set_userdata('idAct','m7u21'); ?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4 class="subtitle">Evaluación Unidad 2</h4>
                        <br>
                        <div class="contenido">
                        <p class="card-text">
                            <!-- Pregunta 1 -->
                            <h4 class="subtEv"> 1. ¿Qué es el Phishing?</h4>
                            <label class="container" id="p1-r1">
                                <input type="radio" name="preg1" id="opc1" value = 1 required>
                                
                                a. Es un estafador que intenta acceder a los correos electrónicos para
                                    enviar
                                    mensajes spam.
                            </label>
                            <label class="container" id="p1-r2">
                                <input type="radio" name="preg1" id="opc2" value = 5 required>
                                
                                b. Es un delito cibernético en el que intentan adquirir información
                                    confidencial
                                    como números de
                                    tarjetas de crédito, contraseñas y otros datos personales, por medio de engaños.
                                
                            </label>
                            <label class="container" id="p1-r3">
                                <input type="radio" name="preg1" id="opc3" value = 1 required>
                                
                                c. Es un delito cibernético en el que un estafador vende productos
                                    engañosos.
                            </label>
                            <!-- Pregunta 2 -->
                            <h4 class="subtEv"> 2. ¿ Los delincuentes pueden hacer Phishing por mensajes de texto o llamadas?
                            </h4>
                            <label class="container" id="p2-r1">
                                <input type="radio" name="preg2" id="opc1" value = 5 required>
                                
                                a. Sí, la intención de los delincuentes es robar información personal,
                                    por lo
                                    tanto, es posible que
                                    lo hagan por medio de mensajes, llamadas, correos y falsificación de páginas
                                    web.
                            </label>
                            <label class="container" id="p2-r2">
                                <input type="radio" name="preg2" id="opc2" value = 1 required>
                                
                                b. No porque las personas no suelen contestar llamadas de números
                                    desconocidos.
                                
                            </label>
                            <label class="container" id="p2-r3">
                                <input type="radio" name="preg2" id="opc3" value = 1 required>
                                
                                c. No, porque el Phishing solo es por internet y llega únicamente a
                                    los correos
                                    electrónicos.
                            </label>
                            <!-- Pregunta 3 -->
                            <h4 class="subtEv"> 3. Con respecto a la información médica encontrada en internet, ¿puede usted
                                reemplazar la consulta
                                con un médico si encuentra la información que está buscando?</h4>
                            <label class="container" id="p3-r1">
                                <input type="radio" name="preg3" id="opc1" value = 1 required>
                                
                                a. Sí, siempre y cuando indiquen los medicamentos que debo tomar con
                                    sus dosis.
                                
                            </label>
                            <label class="container" id="p3-r2">
                                <input type="radio" name="preg3" id="opc2" value = 1 required>
                                
                                b. No porque de pronto la información no está actualizada.
                            </label>
                            <label class="container" id="p3-r3">
                                <input type="radio" name="preg3" id="opc3" value = 5 required>
                                
                                c. No, ninguna información debe reemplazar la consulta con un médico
                                    que lo puede
                                    asesorar de acuerdo
                                    con su situación específica.
                            </label>
                            <!-- Pregunta 4 -->
                            <h4 class="subtEv"> 4. Si un sitio web ofrece soluciones rápidas y fáciles para sus problemas de
                                salud y promete curas
                                milagrosas ¿debe confiar en ella?</h4>
                            <label class="container" id="p4-r1">
                                <input type="radio" name="preg4" id="opc1" value = 1 required>
                                
                                a. Sí, siempre y cuando tenga buenas referencias y buenos comentarios
                                    de las
                                    personas.
                            </label>
                            <label class="container" id="p4-r2">
                                <input type="radio" name="preg4" id="opc2" value = 5 required>
                                
                                b. No, se debe desconfiar de los sitios web que proclaman la cura a
                                    muchas
                                    enfermedades.
                            </label>
                            <label class="container" id="p4-r3">
                                <input type="radio" name="preg4" id="opc3" value = 1 required>
                                
                                c. Sí porque es muy bueno encontrar tanta información en un solo
                                    lugar.
                            </label>
                            <!-- Pregunta 5 -->
                            <h4 class="subtEv"> 5. ¿Qué es la violación del derecho de autor?</h4>
                            <label class="container" id="p5-r1">
                                <input type="radio" name="preg5" id="opc1" value = 1 required>
                                
                                a. Es un conjunto de normas jurídicas que plantean los derechos
                                    morales y
                                    patrimoniales que tienen
                                    los autores
                            </label>
                            <label class="container" id="p5-r2">
                                <input type="radio" name="preg5" id="opc2" value = 1 required>
                                
                                b. Se da cuando una persona copia y pega un texto de otra sin cambiar
                                    absolutamente nada y no le da
                                    los créditos.
                            </label>
                            <label class="container" id="p5-r3">
                                <input type="radio" name="preg5" id="opc3" value = 5 required>
                                
                                c. Es un fraude relacionado con la conducta de los usuarios que no
                                    tienen en
                                    cuenta el derecho de
                                    autor, ya sea a propósito o accidentalmente y pone al violador en riesgo de ser
                                    sancionado
                            </label>
                            <!-- Pregunta 6 -->
                            <h4 class="subtEv"> 6. ¿Cuál de las siguientes opciones <strong>NO</strong> es un delito que viola
                                los derechos de
                                autor?</h4>
                            <label class="container" id="p6-r1">
                                <input type="radio" name="preg6" id="opc1" value = 5 required>
                                
                                a. Inscribir en el registro de autor el nombre del autor real, con el
                                    título
                                    adecuado y sin alterar
                                    el texto.
                            </label>
                            <label class="container" id="p6-r2">
                                <input type="radio" name="preg6" id="opc2" value = 1 required>
                                
                                b. Publicar, total o parcialmente, sin autorización previa del titular
                                    del
                                    derecho, una obra inédita.
                                
                            </label>
                            <label class="container" id="p6-r3">
                                <input type="radio" name="preg6" id="opc3" value = 1 required>
                                
                                c. Suprimir o alterar la información esencial para la gestión
                                    electrónica de
                                    derechos o importe,
                                    distribuya o comunique ejemplares con la información suprimida o alterada.
                            </label>
                        </p>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo7/unidad2/actividad6" class="btn btn_navegacion">Anterior</a>
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
    <script src="<?php echo base_url();?>public/assets/modulos/mod7/js/u21preguntas.js"></script>


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