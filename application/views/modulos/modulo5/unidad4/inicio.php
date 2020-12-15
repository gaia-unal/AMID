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
                <ul class="list-group-item">
                    <a href="<?php echo base_url();?>modulo5/unidad1" class="list-group-item list-group-item-action bg-light">Unidad 1</a>
                    <a href="<?php echo base_url();?>modulo5/unidad2" class="list-group-item list-group-item-action bg-light">Unidad 2</a>
                    <a href="<?php echo base_url();?>modulo5/unidad3"  class="list-group-item">Unidad 3</a>
                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo5/unidad4"  class="list-group-item">Unidad 4</a>
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo5/unidad4/contenidos" class="list-group-item">Contenidos</a>
                                <a href="<?php echo base_url();?>modulo5/unidad4/evaluacion" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>
                    <a href="<?php echo base_url();?>modulo5/unidad5"  class="list-group-item">Unidad 5</a>
                </ul>
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo5">Módulo 5</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Unidad 4</li>
                </ol>
            </nav>
            <div class="contenedor">
                <center>
                    <h1 class="first_title"><br>Unidad 4: Publicidad y el campo político</h1>
                </center>
                <div class="card mt-4">
                    <div class="card-body">
                        <p>La UNESCO [1] menciona en su metodología AMID para la unidad 4 del módulo 5 un conjunto 
                            de objetivos de aprendizaje que se deben alcanzar mediante la revisión de contenido y la realización de 
                            actividades acordes a unos temas establecidos; estos se pueden observar a continuación. </p>
                        <h4 class="subtitle">Objetivos de aprendizaje</h4>
                        <div class="contenido">
                            <p class="card-text">
                                <ul>
                                    <li>Evaluar la propaganda política y electoral</li>
                                    <li>Evaluar los lineamientos existentes para la propaganda electoral</li>
                                    <li>Analizar los recursos emocionales en la propaganda política y electoral</li>
                                    <li>Recomendar estrategias para mantener a la ciudadanía informada, dados los recursos
                                        emocionales en la propaganda política</li>
                                    <li>Explicar los procedimientos que están disponibles para los ciudadanos que desean
                                        solicitar un ente regulatorio durante una elección</li>
                                </ul>
                            </p>
                        </div>
                        <h4 class="subtitle">Temas Clave</h4>
                        <div class="contenido">
                            <ul>
                                <li>Análisis de la propaganda política para elecciones</li>
                                <li>Evaluación de los lineamientos para la propaganda política</li>
                                <li>Evaluación de los entes reguladores para la propaganda en elecciones</li>
                                <li>Regulaciones aplicables a los medios durante elecciones nacionales</li>
                            </ul>
                        </div>
                    </div>
                    <h4 class="subtitle">Bibliografía:</h4>
                    <p>[1] UNAOC, UNESCO, "Unidad 4: Publicidad y el campo político", en <em>Media Information Literacy for Teachers</em>, 2020.
                        <a href="http://unesco.mil-for-teachers.unaoc.org/modules/modulo-5-publicidad/unidad-4-publicidad-y-el-campo-politico/?lang=es" 
                        target="_blank" rel="noopener noreferrer">
                        http://unesco.mil-for-teachers.unaoc.org/modules/modulo-5-publicidad/unidad-4-publicidad-y-el-campo-politico/?lang=es</a>
                    </p>
                </div>
            </div>
            <br>
            <center>
                <a href="<?php echo base_url();?>modulo5/unidad3/evaluacion" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo5/unidad4/contenidos" class="btn btn_navegacion">Siguiente</a>
            </center>
            <?php $this->load->view('initial/paginacion');?>
            <p class="final_contenido">Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/">
                Licencia Creative Commons Reconocimiento Compartir igual 4.0</a></p>
            <br>
        </div>
    </div>
    <?php $this->load->view('initial/footer');?>
    <?php $this->load->view('initial/scriptGenerico');?>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>