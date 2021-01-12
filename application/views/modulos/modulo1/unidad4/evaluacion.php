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
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="list-group list-group-flush">
                <a href="<?php echo base_url();?>modulo1" class="list-group-item list-group-item-action bg-light"><i
                        class="dropdown-menu"></i>Módulo 1<span class="arrow"></span></a>
                <ul class="list-group-item">
                    <a href="<?php echo base_url();?>modulo1/unidad1"
                        class="list-group-item list-group-item-action bg-light">Unidad 1</a>
                    <a href="<?php echo base_url();?>modulo1/unidad2" class="list-group-item list-group-item-action bg-light">Unidad 2</a>
                    <a href="<?php echo base_url();?>modulo1/unidad3" class="list-group-item list-group-item-action bg-light">Unidad 3</a>
                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo1/unidad4" class="list-group-item list-group-item-action bg-light">Unidad 4</a>
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo1/unidad4/contenidos"
                                    class="list-group-item">Contenidos</a>
                                <a href="#" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>
                </ul>
                <a href="<?php echo base_url();?>modulo2" class="list-group-item list-group-item-action bg-light">Módulo 2</a>
                <a href="<?php echo base_url();?>modulo3" class="list-group-item list-group-item-action bg-light">Módulo 3</a>
                <a href="<?php echo base_url();?>modulo4" class="list-group-item list-group-item-action bg-light">Módulo 4</a>
                <a href="<?php echo base_url();?>modulo5" class="list-group-item list-group-item-action bg-light">Módulo 5</a>
                <a href="<?php echo base_url();?>modulo6" class="list-group-item list-group-item-action bg-light">Módulo 6</a>
                <a href="<?php echo base_url();?>modulo7" class="list-group-item list-group-item-action bg-light">Módulo 7</a>
                <a href="<?php echo base_url();?>modulo8" class="list-group-item list-group-item-action bg-light">Módulo 8</a>
                <a href="<?php echo base_url();?>modulo9" class="list-group-item list-group-item-action bg-light">Módulo 9</a>
                <a href="<?php echo base_url();?>modulo10" class="list-group-item list-group-item-action bg-light">Módulo 10</a>
                <a href="<?php echo base_url();?>modulo11" class="list-group-item list-group-item-action bg-light">Módulo 11</a>
                <a href="<?php echo base_url();?>modulo12" class="list-group-item list-group-item-action bg-light">Módulo 12</a>
            </div>
        </div>
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom d-lg-none">
                <button class="btn " id="menu-toggle"><i class="fas fa-align-justify"></i></button>
            </nav>
            <nav class="bread-style" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>inicio/main">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo1">Módulo 1</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo1/unidad4">Unidad 4</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Evaluación</li>
                </ol>
            </nav>
            <div class="contenedor">
                <center>
                    <h1 class="first_title"><br>Unidad 4: AMI, enseñanza y aprendizaje</h1>
                    <?php 
                        $this->session->set_userdata('idAct','m1u4'); 
                        $this->session->set_userdata('ruta','modulo1/unidad4/evaluacion');
                        $var = $this->session->userdata('objeto')['controller']->consulta();
                        if(!$var){
                            echo form_open('modulo2');
                        ?>
                </center><br>
                <div class="card mt-4"><br>
                    <div class="card-body">
                    <h4 class="subtitle">Evaluación</h4><br>
                    <p class="card-text">
                        Si colocara a los estudiantes una variedad de material visual existente relacionado con la vida de una
                        persona y utilizar esto como punto de partida para hacer un documental corto sobre dicha persona. <br/><br/>
                        <strong>¿Qué enfoque pedagógico estaría utilizando para realizar esta actividad?</strong> <br/><br/>
                        <label ><input type="radio" name="pregunta_1" id="res1" class="space" onclick="Incorrecto()" value="1">Enfoque de enseñanza reflexiva </label><br/>
                        <label><input type="radio" name="pregunta_1" id="res2" class="space" onclick="Incorrecto()" value="1">Aprendizaje basado en problemas </label><br/>
                        <label><input type="radio" name="pregunta_1" id="res3" class="space" onclick="Incorrecto()" value="1">Interrogación científica </label><br/>
                        <label><input type="radio" name="pregunta_1" id="res4" class="space" onclick="Incorrecto()" value="1">Aprendizaje cooperativo </label><br/>
                        <label><input type="radio" name="pregunta_1" id="res5" class="space" onclick="Incorrecto()" value="1">Estudio de caso </label><br/>
                        <label><input type="radio" name="pregunta_1" id="res6" class="space" onclick="Incorrecto()" value="1">Análisis de texto </label><br/>
                        <label><input type="radio" name="pregunta_1" id="res7" class="space" onclick="Incorrecto()" value="1">Análisis contextual </label><br/>
                        <label><input type="radio" name="pregunta_1" id="res8" class="space" onclick="Correcto()" value="5">Traducciones </label><br/>
                        <label><input type="radio" name="pregunta_1" id="res9" class="space" onclick="Incorrecto()" value="1">Simulaciones </label><br/>
                    </p>
                </div>
            </div>
        </div>
        <br>
        <center>
            <a href="<?php echo base_url();?>modulo1/unidad4/actividad3" class="btn btn_navegacion">Anterior</a>
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
            <a href="<?php echo base_url();?>modulo1/unidad4/actividad3" class="btn btn_navegacion">Anterior</a>
            <a href="<?php echo base_url();?>modulo2" class="btn btn_navegacion">Siguiente</a>
        </center>
            <?php } ?>
        <?php $this->load->view('initial/paginacion');?>
        <p class="final_contenido">Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/">
            Licencia Creative Commons Reconocimiento Compartir igual 4.0</a></p><br>
        </div>
    </div>
    <?php $this->load->view('initial/footer');?>
    <?php $this->load->view('initial/scriptGenerico');?>
    <script src="<?php echo base_url();?>public/assets/modulos/mod1/js/und4script.js"></script>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>