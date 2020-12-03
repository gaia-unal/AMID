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
                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo3/unidad4" class="list-group-item list-group-item-action bg-light ">Unidad 4</a>
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo3/unidad4/actividad1" class="list-group-item">Actividades</a>
                                <a href="<?php echo base_url();?>modulo3/unidad4/evaluacion" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>
                    <a href="<?php echo base_url();?>modulo3/unidad5" class="list-group-item">Unidad 5</a>
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo3/unidad4">Unidad 4</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actividad 2</li>
                </ol>
            </nav>
            <div class="contenedor">
                <center>
                    <h1 class="first_title"><br>Unidad 4: Videos musicales y su representación</h1>
                    <?php echo form_open('modulo3/unidad4/evaluacion');$this->session->set_userdata('idAct','m3u4a2'); ?>
                </center>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4 class="subtitle">Teniendo en cuenta lo leído en la actividad anterior, responda las siguientes preguntas:</h4><br>
                        <div class="contenido">
                            <p class="card-text">
                                1. Presenta el video las creencias de un grupo en particular?<br>
                                <br><textarea name="preg1" style="width: 90%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true" autofocus></textarea><br>
                                <br>2. Describa las representaciones de hombres y mujeres en el video.</h4><br>
                                <br><textarea name="preg2" style="width: 90%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br>
                                <br>3. ¿Se usa alguna clase de estereotipo? ¿Si es así, con qué propósito?</h4><br>
                                <br> <textarea name="preg3" style="width: 90%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br>
                                <br>4. ¿Quién está en la posición de poder? ¿Quién no? ¿Quién se beneficia como
                                resultado?<br>
                                <br> <textarea name="preg4" style="width: 90%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br>
                                <br>5. ¿El video excluye a algún grupo de personas o a sus creencias?</h4><br>
                                <br><textarea name="preg5" style="width: 90%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br>
                                <br>6. ¿Qué definiciones de felicidad, éxito o moralidad están implícitas?</h4><br>
                                <br><textarea name="preg6" style="width: 90%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <center>
                <a href="<?php echo base_url();?>modulo3/unidad4/actividad1" class="btn btn_navegacion">Anterior</a>
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