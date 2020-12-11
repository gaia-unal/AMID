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
                    <li class="breadcrumb-item active" aria-current="page">Actividad 1</li>
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
                        <h4 class="subtitle">Evaluación
                        </h4>
                        <?php echo form_open('modulo7/unidad2/actividad4');$this->session->set_userdata('idAct','m7u2a3'); ?>
                   

                        <div class="contenido">
                        <div class="preguntas">
                            <!-- Pregunta 1 -->
                            <br>   <h4 class="subtEv">1) ¿Qué es el <em>Phishing</em>?</h4>
                            <label class="container" id="p1-r1">
                                <input type="radio" name="preg1" id="opc1" value = 5 required>
                                
                                a. Es un delito cibernético en el que intentan adquirir información
                                    confidencial como números de tarjetas de crédito, contraseñas y otros datos
                                    personales, por medio de engaños.
                                
                            </label>
                            <label class="container" id="p1-r2">
                                <input type="radio" name="preg1" id="opc2" value = 1 required>
                                
                                b. Es un estafador que intenta acceder a los correos electrónicos para
                                    enviar mensajes spam.
                            </label>
                            <label class="container" id="p1-r3">
                                <input type="radio" name="preg1" id="opc3" value = 1 required>
                                
                                c. Es un delito cibernético en el que un estafador vende productos
                                    engañosos.
                            </label>
                            <!-- Pregunta 2 -->
                            <br>  <h4 class="subtEv">¿Cuál de las siguientes opciones <strong>NO</strong> es un tipo de <em>Phishing</em>?
                            </h4>
                            <label class="container" id="p2-r1">
                                <input type="radio" name="preg2" id="opc1" value = 1 required>
                                
                                a. Phishing tradicional.
                            </label>
                            <label class="container" id="p2-r2">
                                <input type="radio" name="preg2" id="opc2" value = 5 required>
                                
                                b. Phishing steal. 
                            </label>
                            <label class="container" id="p2-r3">
                                <input type="radio" name="preg2" id="opc3" value = 1 required>
                                
                                c. Spear Phishing.
                            </label>
                            <label class="container" id="p2-r4">
                                <input type="radio" name="preg2" id="opc4" value = 1 required>
                                
                                d. Vishing.
                            </label>

                            <!-- Pregunta 3 -->
                            <br>  <h4 class="subtEv">¿Es posible que realicen <em>Phishing</em> por medio de correos electrónicos?</h4>
                            <label class="container" id="p3-r1">
                                <input type="radio" name="preg3" id="opc1" value = 1 required>
                                
                                a. Sí, pero solo a las personas que tienen cuentas bancarias.
                            </label>
                            <label class="container" id="p3-r2">
                                <input type="radio" name="preg3" id="opc2" value = 5 required>
                                
                                b. Sí, y es un método muy usado por los delincuentes.
                            </label>
                            <label class="container" id="p3-r3">
                                <input type="radio" name="preg3" id="opc3" value = 1 required>
                                
                                c. No porque el correo electrónico es muy seguro y no permite que lleguen
                                    correos engañosos.
                            </label>
                            <!--Pregunta 4 -->
                          <br>  <h4 class="subtEv">Los delincuentes pueden hacer <em>Phishing</em> por mensajes de texto o llamadas?</h4>
                            <label class="container" id="p4-r1">
                                <input type="radio" name="preg4" id="opc1" value = 1 required>
                                
                                a. No, el Phishing sólo se refiere al robo de identidad por medio de
                                    correo electrónico.
                            </label>
                            <label class="container" id="p4-r2">
                                <input type="radio" name="preg4" id="opc2" value = 1 required>
                                
                                b. No porque el Phishing solo es por internet
                            </label>
                            <label class="container" id="p4-r3">
                                <input type="radio" name="preg4" id="opc3" value = 5 required>
                                
                                c. Sí, la intención de los delincuentes es robar información personal, por
                                    lo tanto, es posible que lo hagan por medio de mensajes, llamadas, correos y
                                    falsificación de páginas web.
                            </label>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo7/unidad2/actividad2" class="btn btn_navegacion">Anterior</a>
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