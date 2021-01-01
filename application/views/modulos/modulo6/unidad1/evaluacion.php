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
                <a href="<?php echo base_url();?>modulo4" class="list-group-item list-group-item-action bg-light">Módulo 4</a>
                <a href="<?php echo base_url();?>modulo5" class="list-group-item list-group-item-action bg-light">Módulo 5</a>
                <a href="<?php echo base_url();?>modulo6" class="list-group-item list-group-item-action bg-light">Módulo 6</a>
                <ul class="list-group-item">
                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo6/unidad1" class="list-group-item list-group-item-action bg-light">Unidad 1</a>
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo6/unidad1/actividad1" class="list-group-item">Actividades</a>
                                <a href="#" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>
                    <a href="<?php echo base_url();?>modulo6/unidad2" class="list-group-item">Unidad 2</a>
                    <a href="<?php echo base_url();?>modulo6/unidad3" class="list-group-item">Unidad 3</a>
                </ul>
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo6">Módulo 6</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo6/unidad1">Unidad 1</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Evaluación</li>
                </ol>
            </nav>
            <div class="contenedor">
                <center>
                    <h1 class="first_title"><br>Unidad 1: De Los Medios Tradicionales a las Nuevas Tecnologías
                        Mediáticas</h1>
                    <?php echo form_open('modulo6/unidad2/inicio');$this->session->set_userdata('idAct','m6u1a3'); $this->session->set_userdata('ruta','modulo6/unidad1/evaluacion');?>
                </center>
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="contenido">
                            <p class="card-text">
                                <ul>
                                    <li>1. Cómo se utilizó Internet en sus inicios y cómo se ha ido utilizando ahora?</li><br>
                                    <br><textarea name="preg1" style="width: 95%;" rows="5" minlength="1" maxlength="200"
                                        onkeypress="return check(event)" required placeholder="Escriba su respuesta aquí"
                                        spellcheck="true"></textarea><br>
                                        <br><li>2. Evalúe las aplicaciones y beneficios del uso de los medios en la educación, la
                                        sociedad cívica y la gobernabilidad</li><br>
                                        <br><textarea name="preg2" style="width: 95%;" rows="5" minlength="1" maxlength="200"
                                        onkeypress="return check(event)" required placeholder="Escriba su respuesta aquí"
                                        spellcheck="true"></textarea><br>
                                        <br><li>3. Investigue cómo los medios digitales presentan oportunidades para la libertad de
                                        palabra en su sociedad y su alcance. Preste atención a cómo las personas utilizan
                                        los nuevos medios para la auto-expresión. También debe anotar cómo los medios
                                        tradicionales (periódicos, radio y televisión) convergen con los nuevos medios (por
                                        Ej. sitios de noticias en línea con acceso de multimedia) en sus sociedades. </li><br>
                                        <br><textarea name="preg3" style="width: 95%;" rows="5" minlength="1" maxlength="200"
                                        onkeypress="return check(event)" required placeholder="Escriba su respuesta aquí"
                                        spellcheck="true"></textarea><br>
                                        <br><li>4. Investigue hasta qué punto los nuevos medios son un reto para los medios
                                        tradicionales de noticias en su sociedad, los distintos tipos de medios que las
                                        personas en su sociedad están utilizando para expresar sus propios puntos de vista
                                        en temas de noticias importantes, y los usuarios de las diferentes plataformas
                                        mediáticas, junto con los temas/tópicos que están discutiendo. </li><br>
                                        <br><textarea name="preg4" style="width: 95%;" rows="5" minlength="1" maxlength="200"
                                        onkeypress="return check(event)" required placeholder="Escriba su respuesta aquí"
                                        spellcheck="true"></textarea><br>
                                        <br><li>5. Escriba párrafo sobre las principales diferencias entre los medios tradicionales
                                        y los nuevos, discutiendo hasta qué punto las diferencias son reales o artificiales.
                                        En el párrafo, evalúe las similitudes y diferencias entre los medios tradicionales y
                                        los electrónicos o digitales. Se deberán resaltar temas como responsabilidad
                                        editorial, verificación y otros principios del periodismo. </li><br>
                                        <br><textarea name="preg5" style="width: 95%;" rows="5" minlength="1" maxlength="200"
                                        onkeypress="return check(event)" required placeholder="Escriba su respuesta aquí"
                                        spellcheck="true"></textarea>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <center>
                <a href="<?php echo base_url();?>modulo6/unidad1/actividad2" class="btn btn_navegacion">Anterior</a>
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