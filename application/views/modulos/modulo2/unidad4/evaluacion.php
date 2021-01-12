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
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="list-group list-group-flush">
                <a href="<?php echo base_url();?>modulo1" class="list-group-item list-group-item-action bg-light"><i
                    class="dropdown-menu"></i>Módulo 1<span class="arrow"></span></a>
                <a href="<?php echo base_url();?>modulo2" class="list-group-item list-group-item-action bg-light">Módulo 2</a>
                <ul class="list-group-item">
                    <a href="<?php echo base_url();?>modulo2/unidad1" class="list-group-item list-group-item-action bg-light">Unidad 1</a>
                    <a href="<?php echo base_url();?>modulo2/unidad2" class="list-group-item list-group-item-action bg-light">Unidad 2</a>
                    <a href="<?php echo base_url();?>modulo2/unidad3" class="list-group-item list-group-item-action bg-light">Unidad 3</a>
                    <div class="btn-group dropright">
                    <a href="<?php echo base_url();?>modulo2/unidad4" class="list-group-item">Unidad 4</a>
                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo2/unidad4/contenidos"
                                    class="list-group-item">Contenidos</a>
                                <a href="#" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>
                </ul>
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo2">Módulo 2</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo2/unidad4">Unidad 4</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Evaluación</li>
                </ol>
            </nav>
            <div class="contenedor">
                <center>
                    <h1 class="first_title"><br>Unidad 4: El proceso de desarrollo de las noticias: más allá de 5 por qués y 1 cómo (5ws y 1h en
                    inglés)</h1>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                    <?php 
                        $this->session->set_userdata('idAct','m2u4'); 
                        $this->session->set_userdata('ruta','modulo2/unidad4/evaluacion');
                        $var = $this->session->userdata('objeto')['controller']->consulta();
                        if(!$var){
                            echo form_open('modulo3');
                            ?>
                        <br>
                        <div class="contenido">
                            <p class="card-text">
                                <strong>¿Qué es el registro de medios?  </strong><br> <br>
                                <input class="space" type="radio" name="pre1" id="resp1" value= 5>
                                <label for="resp1">Es registrar los medios de comunicación para su correcto funcionamiento </label> <br>
                                <label for="resp2"><input class="space" type="radio" name="pre1" id="resp2" value= 1>
                                Son los medios que cuentan con instalaciones, equipo, estructura organizacional y una variedad de medios de comunicación.  </label> <br>
                                <input class="space" type="radio" name="pre1" id="resp3" value= 1>
                                <label for="resp3">Es registrar el nombre de los medios de comunicación ante una entidad superior.</label> <br>
                                <strong>¿A qué se refiere la producción?</strong><br> <br>
                                <label for="resp4">
                                <input class="space" type="radio" name="pre2" id="resp4" value= 1>La cantidad de dinero que produce el medio de comunicación en un tiempo determinado.</label> <br>
                                <input class="space" type="radio" name="pre2" id="resp5" value= 1>
                                <label for="resp5">Son las instalaciones propias del medio de comunicación para realizar producciones.</label> <br>
                                <label for="resp6"><input class="space" type="radio" name="pre2" id="resp6" value= 5>
                                La producción es a lo que se dedica el medio de comunicación, por ejemplo, radio, televisión, periódico, revista, producción de documental, etc.</label> <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <center>
                <a href="<?php echo base_url();?>modulo2/unidad4/actividad2" class="btn btn_navegacion">Anterior</a>
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
            <a href="<?php echo base_url();?>modulo2/unidad4/actividad2" class="btn btn_navegacion">Anterior</a>
            <a href="<?php echo base_url();?>modulo3" class="btn btn_navegacion">Siguiente</a>
        </center>
            <?php } ?>
            <?php $this->load->view('initial/paginacion');?>
            <p class="final_contenido">Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/">
                Licencia Creative Commons Reconocimiento Compartir igual 4.0</a></p>
            <br>
        </div>
    </div>
    <?php $this->load->view('initial/footer');?>
    <?php $this->load->view('initial/scriptGenerico');?>
    <script src="<?php echo base_url();?>public/assets/modulos/mod"></script>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>