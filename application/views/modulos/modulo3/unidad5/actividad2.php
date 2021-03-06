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
                <a href="<?php echo base_url();?>modulo3" class="list-group-item list-group-item-action bg-light">Módulo 3</a>
                <ul class="list-group-item">
                    <a href="<?php echo base_url();?>modulo3/unidad1" class="list-group-item list-group-item-action bg-light">Unidad 1</a>
                    <a href="<?php echo base_url();?>modulo3/unidad2" class="list-group-item list-group-item-action bg-light">Unidad 2</a>
                    <a href="<?php echo base_url();?>modulo3/unidad3" class="list-group-item list-group-item-action bg-light">Unidad 3</a>
                    <a href="<?php echo base_url();?>modulo3/unidad4" class="list-group-item list-group-item-action bg-light">Unidad 4</a>
                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo3/unidad5" class="list-group-item list-group-item-action bg-light">Unidad 5</a>
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo3/unidad5/contenidos"
                                    class="list-group-item">Contenidos</a>
                                <a href="<?php echo base_url();?>modulo3/unidad5/evaluacion"
                                    class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>
                </ul>
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo3">Módulo 3</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo3/unidad5">Unidad 5</a></li>

                    <li class="breadcrumb-item active" aria-current="page">Actividad 1</li>
                </ol>
            </nav>
            <div class="contenedor">
                <center>
                    <h1 class="first_title"><br>Unidad 5: Edición digital y retoque en computadora</h1>
                    <?php echo form_open('modulo3/unidad5/evaluacion');$this->session->set_userdata('idAct','m3u5a2'); $this->session->set_userdata('ruta','modulo3/unidad5/actividad2'); ?>
                </center>
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="contenido">
                        <p class="card-text">1. Describa el tipo de cambios que esta tecnología puede hacer posible.</p>
                        <textarea name="preg1" style="width: 90%;" rows="6" minlength="1" maxlength="500" onkeypress="return check(event)"
                            placeholder="Escriba su respuesta aquí" spellcheck="true" autofocus></textarea>
                        <p class="card-text">2. Identifique y describa los ejemplos dónde se ha utilizado esta
                            tecnología en el mundo de la moda y en el reportaje de noticias. Explore la controversia que
                            existe en relación al uso de esta tecnología para las personas que trabajan en la industria
                            de la moda y de las noticias.</p>
                        <textarea name="preg2" style="width: 90%;" rows="6" minlength="1" maxlength="500" onkeypress="return check(event)"
                            placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                        <p class="card-text">3. Discuta hasta qué punto el conocimiento de esta tecnología afecta la
                            forma en la que las personas responden a las fotos en los editoriales de moda y
                            fotoperiodismo. Describa los beneficios y responsabilidades de esta tecnología para las
                            personas y los eventos que se retratan y para las audiencias que ven estas imágenes
                        </p>
                        <textarea name="preg3" style="width: 90%;" rows="6" minlength="1" maxlength="500" onkeypress="return check(event)"
                            placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea> <br>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <center>
                <a href="<?php echo base_url();?>modulo3/unidad5/actividad1" class="btn btn_navegacion">Anterior</a>
                <button id="btn-siguiente" class="btn btn_navegacion" name="submit" type="submit">Siguiente</button>
            </center>
            <?php echo form_close(); ?>
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