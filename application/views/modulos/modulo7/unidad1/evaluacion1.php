<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AMID</title>
    <?php $this->load->view('initial/linkGenerico');?>
    <link href="<?php echo base_url();?>public/assets/modulos/mod7/css/u14juego.css" rel="stylesheet">
  <link href="<?php echo base_url();?>public/assets/modulos/mod7/css/u14animacion.css" rel="stylesheet">
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
                                <a href="<?php echo base_url();?>modulo7/unidad1/contenidos"
                                    class="list-group-item">Contenidos</a>
                                <a href="#"  class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>

                    <a href="<?php echo base_url();?>modulo7/unidad2" class="list-group-item">Unidad 2</a>



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

                    <li class="breadcrumb-item active" aria-current="page">Evaluación 1</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 1: Los jóvenes en el mundo virtual</h1>
                    <?php 
                    $this->session->set_userdata('idAct','m7u11'); 
        $this->session->set_userdata('ruta','modulo7/unidad1/evaluacion1');
        $var = $this->session->userdata('objeto')['controller']->consulta();
        if(!$var){
            echo form_open('modulo7/unidad1/evaluacion2');
?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <br>
                        <h4 class="subtitle">Evaluación unidad 1</h4><br>
                        <br>
                        <div class="contenido">
                        <p class="card-text">
                            <!-- Pregunta 1 -->
                            <h4 class="subtEv"> 1. ¿Cuáles son los principales intereses de los niños y adolescentes en
                                Internet?</h4>
                            <label class="container" id="p1-r1">
                                <input type="radio" name="preg1" id="opc1" value = 1>
                                a. Jugar, usar redes sociales y ver vídeos.
                            </label>
                            <label class="container" id="p1-r2">
                                <input type="radio" name="preg1" id="opc2" value = 5>
                                b. Trabajos del colegio, escuchar musica y usar redes sociales.
                            </label>
                            <label class="container" id="p1-r3">
                                <input type="radio" name="preg1" id="opc3" value = 1>
                                c. Pasar tiempo en la un mundo virtual, usar redes sociales, h
                                    trabajos del colegio.</p>
                            </label>
                            <!-- Pregunta 2 -->
                            <h4 class="subtEv"> 2. ¿Qué conductas se pueden pasar por alto en aquellos que usan Internet?</h4>
                            <label class="container" id="p2-r1">
                                <input type="radio" name="preg2" id="opc1" value = 1>
                                a. Tolerancia, diversión y buen juicio.
                            </label>
                            <label class="container" id="p2-r2">
                                <input type="radio" name="preg2" id="opc2" value = 1>
                                b. Síndrome de abstinencia, perdida de control y cambio
                                    comportamiento.</p>
                            </label>
                            <label class="container" id="p2-r3">
                                <input type="radio" name="preg2" id="opc3" value = 5>
                                c. Buen comportamiento, obediencia y acato de las normas y reglas.
                            </label>
                            <!-- Pregunta 3 -->
                            <h4 class="subtEv"> 3. ¿Qué herramientas puede utilizar para inculcar un buen comportamiento en
                                Internet?</h4>
                            <label class="container" id="p3-r1">
                                <input type="radio" name="preg3" id="opc1" value = 1>
                                a. Wikis, redes sociales y dispositivos moviles.
                            </label>
                            <label class="container" id="p3-r2">
                                <input type="radio" name="preg3" id="opc2" value = 1>
                                b. Facebook, wikis y correo electrónico.
                            </label>
                            <label class="container" id="p3-r3">
                                <input type="radio" name="preg3" id="opc3" value = 5>
                                c. Wikis.
                            </label>
                            <!--Pregunta 4-->
                            <h4 class="subtEv"> 4. ¿Cuál corresponde al lugar más usado por los jóvenes para navegar en
                                Internet?</h4>
                            <label class="container" id="p4-r1">
                                <input type="radio" name="preg4" id="opc1" value = 5>
                                a. Sala u otra habitación común.
                            </label>
                            <label class="container" id="p4-r2">
                                <input type="radio" name="preg4" id="opc2" value = 1>
                                b. Habitación privada.
                            </label>
                            <label class="container" id="p4-r3">
                                <input type="radio" name="preg4" id="opc3" value = 1>
                                c. Cualquier lugar que permita conexión a través de una plataf
                                    movil.</p>
                            </label>
                            <!-- Pregunta 5 -->
                            <h4 class="subtEv"> 5. Segun las regulaciones de privacidad, ¿Cuál es la edad mínima para navegar
                                en Redes sociales?
                            </h4>
                            <label class="container" id="p5-r1">
                                <input type="radio" name="preg5" id="opc1" value = 1>
                                a. 11 años.
                            </label>
                            <label class="container" id="p5-r2">
                                <input type="radio" name="preg5" id="opc2" value = 1>
                                b. 12 años.
                            </label>
                            <label class="container" id="p5-r3">
                                <input type="radio" name="preg5" id="opc3" value = 5>
                                c. 13 años.
                            </label>
                            <!-- Pregunta 6 -->
                            <h4 class="subtEv"> 6. ¿Cuáles son los principales riesgos que se pueden encontrar en Internet?
                            </h4>
                            <label class="container" id="p6-r1">
                                <input type="radio" name="preg6" id="opc1" value = 1>
                                a. Ciberbullying, Sexting y Grooming.
                            </label>
                            <label class="container" id="p6-r2">
                                <input type="radio" name="preg6" id="opc2" value = 5>
                                b. Sexting, Sextorsión, Ciberbullying y Grooming.
                            </label>
                            <label class="container" id="p6-r3">
                                <input type="radio" name="preg6" id="opc3" value = 1>
                                c. Sexting y Sextorsión.
                            </label>
                        </p>
                        <!-- <center>
                            <a href="#" class="btn btn-outline-success" onclick="validar();">Validar</a>
                        </center> -->
                        </div>
                    </div>
                </div>

            </div>
            
            <center>
                <a href="<?php echo base_url();?>modulo7/unidad1/actividad10" class="btn btn_navegacion">Anterior</a>
                <button id="btn-siguiente" class="btn btn_navegacion" name="submit" type="submit">Siguiente</button>
            </center>
			<?php echo form_close(); }
                else {
                    ?>
            <div class="card mt-4">
                <div class="card-body">
                    <h4 class="subtitle">Evaluación</h4><br>
                    <div class="contenido">
                        <p class="card-text">
                            Solo puedes realizar la evaluación 2 veces. Recuerda que puedes ver tus resultados en los reportes.
                            <center><h4 class="subtitle">¡Continúa aprendiendo!</h4></center>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <center>
            <a href="<?php echo base_url();?>modulo7/unidad1/actividad10" class="btn btn_navegacion">Anterior</a>
            <a href="<?php echo base_url();?>modulo7/unidad1/evaluacion2" class="btn btn_navegacion">Siguiente</a>
        </center>
            <?php } ?>
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
    <script src="<?php echo base_url();?>public/assets/modulos/mod7/js/u1preguntas.js"></script>

    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


</body>

</html>

<style>
.subtEv{
    font-size: 1.2em;
    font-family: 'Roboto', sans-serif;
    
    font-weight: 500;
}
</style>