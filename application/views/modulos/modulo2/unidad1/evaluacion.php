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
                <a href="<?php echo base_url();?>modulo2" class="list-group-item list-group-item-action bg-light">
                    Módulo 2</a>
                <ul class="list-group-item">
                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo2/unidad1" class="list-group-item list-group-item-action bg-light">Unidad 1</a>
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo2/unidad1/contenidos"
                                    class="list-group-item">Contenidos</a>
                                <a href="" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>
                    <a href="<?php echo base_url();?>modulo2/unidad2" class="list-group-item">Unidad 2</a>
                    <a href="<?php echo base_url();?>modulo2/unidad3" class="list-group-item">Unidad 3</a>
                    <a href="<?php echo base_url();?>modulo2/unidad4" class="list-group-item">Unidad 4</a>
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo2/unidad1">Unidad 1</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Evaluación</li>
                </ol>
            </nav>
            <div class="contenedor">
                <center>
                    <h1 class="first_title"><br>Unidad 1: Periodismo y sociedad</h1>
                    <?php 
                        $this->session->set_userdata('idAct','m2u1'); 
                        $this->session->set_userdata('ruta','modulo2/unidad1/evaluacion');
                        $var = $this->session->userdata('objeto')['controller']->consulta();
                        if(!$var){
                            echo form_open('modulo2/unidad2/inicio');
                        ?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                    <h4 class="subtitle">Evaluación</h4><br>
                        <div class="contenido">
                            <p class="card-text">
                                <ul>
                                    <li><strong> ¿Qué es la libertad de expresión?</strong></li>
                                        <label><input type="radio" name="p1" class="space" value= 5>Es el derecho
                                            internacional de los derechos humanos en el Pacto Internacional de Derechos
                                            Civiles y Políticos.</label> <br />
                                        <label><input type="radio" name="p1" class="space"  value= 1>Es la libertad de
                                            mantener opiniones como difamación, calumnia, obscenidad, a través de cualquier
                                            medio y sin importar las fronteras.</label><br />
                                        <label><input type="radio" name="p1" class="space"  value= 1>Es el deber más preciado
                                            del hombre.</label><br />
                                    <br>
                                    <li><strong>¿Qué es la libertad de prensa?</strong></li>
                                        <label><input type="radio" name="p2" class="space"  value= 1>Es la celebración que se
                                            realiza el día 3 de mayo en Colombia.</label><br />
                                        <label><input type="radio" name="p2" class="space" value= 5>Es el derecho a que toda
                                            persona pueda publicar sus ideas libremente y sin censura previa.</label><br />
                                        <label><input type="radio" name="p2" class="space"  value= 1>Es la propaganda crítica
                                            para mantener la base de poder político actual y suprimir cualquier intento
                                            significativo de los medios de desafiar el gobierno.</label><br />
                                    <br>
                                    <li><strong>¿Cuál de los siguientes titulares hacer parte de un evento de movimientos
                                        democráticos en Colombia en donde los medios y los reportes de noticias han tenido
                                        un papel significante?</strong></li>
                                        <label><input type="radio" name="p3" class="space" value= 5>Partidos firmaron pacto
                                            político en favor de la libertad de prensa para las elecciones de octubre - El
                                            Espectador</label><br />
                                        <label><input type="radio" name="p3" class="space"  value= 1>Colombia Ley 130-94</label><br />
                                        <label><input type="radio" name="p3" class="space"  value= 1>Separación de poderes -
                                            Revista Semana</label><br />
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <center>
                <a href="<?php echo base_url();?>modulo2/unidad1/actividad1" class="btn btn_navegacion">Anterior</a>
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
            <a href="<?php echo base_url();?>modulo2/unidad1/actividad1" class="btn btn_navegacion">Anterior</a>
            <a href="<?php echo base_url();?>modulo2/unidad2" class="btn btn_navegacion">Siguiente</a>
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