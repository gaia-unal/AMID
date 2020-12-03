<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>AMID</title>
    <?php $this->load->view('initial/linkGenerico');?>
    <link href="<?php echo base_url();?>public/assets/modulos/mod4/css/estilo.css" rel="stylesheet">
  <link href="<?php echo base_url();?>public/assets/modulos/mod1/css/partes.css" rel="stylesheet">
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
                <a href="<?php echo base_url();?>modulo4" class="list-group-item list-group-item-action bg-light">Módulo 4</a>
                <ul class="list-group-item">
                <a href="<?php echo base_url();?>modulo4/unidad1" class="list-group-item list-group-item-action bg-light">Unidad 1</a>
                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo4/unidad2" class="list-group-item">Unidad 2</a>
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo4/unidad2/actividad1" class="list-group-item">Actividades</a>
                                <a href="<?php echo base_url();?>modulo4/unidad2/evaluacion" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>
                    <a href="<?php echo base_url();?>modulo4/unidad3" class="list-group-item">Unidad 3</a>
                    <a href="<?php echo base_url();?>modulo4/unidad4" class="list-group-item">Unidad 4</a>
                </ul>
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo4">Módulo 4</a></li> 
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo4/unidad2">Unidad 2</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actividad 3</li>
                </ol>
            </nav>
            <div class="contenedor">
                <center>
                    <h1 class="first_title"><br>Unidad 2: El medio y el mensaje: noticias impresas y difundidas</h1>
                    <?php echo form_open('modulo4/unidad2/evaluacion');$this->session->set_userdata('idAct','m4u2a3'); ?>
                </center>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4 class="subtitle">Noticias Actuales</h4><br>
                        <div class="contenido">
                            <p class="card-text">
                                Lea el siguiente artículo y responda [1]:
                                <div id="parte1" style="display:block;"><img src="<?php echo base_url();?>public/assets/modulos/mod4/img/noti1.png" alt="Noticia 1" class="noti"></div>
                                <div id="parte2" style="display:none;"><img src="<?php echo base_url();?>public/assets/modulos/mod4/img/noti2.png" alt="Noticia 2" class="noti"></div>
                                <div id="parte3" style="display:none;"><img src="<?php echo base_url();?>public/assets/modulos/mod4/img/noti3.png" alt="Noticia 3" class="noti"></div>
                                <div id="parte4" style="display:none;"><img src="<?php echo base_url();?>public/assets/modulos/mod4/img/noti4.png" alt="Noticia 4" class="noti"></div>
                                <div id="parte5" style="display:none;"><img src="<?php echo base_url();?>public/assets/modulos/mod4/img/noti5.png" alt="Noticia 5" class="noti"></div>
                                <center>
                                    <div id="btnAtras">
                                        <a onclick="volver();"><img width=70 src="<?php echo base_url();?>public/assets/img/arrow_l.jpg"></a>
                                    </div>
                                    <div id="btnAdelante">
                                        <a onclick="avanzar();"><img width=70 src="<?php echo base_url();?>public/assets/img/arrow_r.jpg"></a>
                                    </div>
                                </center>
                                <br>
                                <ol>
                                    <li>¿Cómo los distintos medios afectan al tipo de cobertura y a la información que se puede dar?</li><br>
                                    <textarea name="preg1" style="width: 90%;" rows="6" minlength="1" maxlength="500" onkeypress="return check(event)"
                                        placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea><br>
                                    <br> <li>¿Qué códigos y convenciones se utilizan en el desarrollo de cada historia?</li><br>
                                    <textarea name="preg2" style="width: 90%;" rows="6" minlength="1" maxlength="500" onkeypress="return check(event)"
                                        placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br>
                                    <br> <li>¿De qué forma este ejercicio es un ejemplo de la frase “el medio es el mensaje”?
                                    </li><br>
                                    <textarea name="preg3" style="width: 90%;" rows="6" minlength="1" maxlength="500" onkeypress="return check(event)"
                                        placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                                </ol>
                            </p>
                        </div>
                        <h4 class="subtitle">Bibliografía:</h4>
                        <p>[1] La Guajira, "Intimidan y amenazan a dos candidatos a la alcaldía en La Guajira", en <em>El Tiempo</em>, 2019.
                            <a href="https://www.eltiempo.com/elecciones-colombia-2019/otras-ciudades/amenazas-a-dos-candidatos-a-la-alcaldia-en-la-guajira-426572" 
                                target="_blank" rel="noopener noreferrer">
                                https://www.eltiempo.com/elecciones-colombia-2019/otras-ciudades/amenazas-a-dos-candidatos-a-la-alcaldia-en-la-guajira-426572</a>
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <center>
                <a href="<?php echo base_url();?>modulo4/unidad2/actividad2" class="btn btn_navegacion">Anterior</a>
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
    <script src="<?php echo base_url();?>public/assets/modulos/mod4/js/arrows2.js"></script>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>