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
                <a href="<?php echo base_url();?>modulo2" class="list-group-item list-group-item-action bg-light">Módulo 2</a>
                <a href="<?php echo base_url();?>modulo3" class="list-group-item list-group-item-action bg-light">Módulo 3</a>
                <a href="<?php echo base_url();?>modulo4" class="list-group-item list-group-item-action bg-light">Módulo 4</a>
                <a href="<?php echo base_url();?>modulo5" class="list-group-item list-group-item-action bg-light">Módulo 5</a>
                <ul class="list-group-item">
                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo5/unidad1" class="list-group-item list-group-item-action bg-light">Unidad 1</a>
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo5/unidad1/contenidos" class="list-group-item">Contenidos</a>
                                <a href="<?php echo base_url();?>modulo5/unidad1/evaluacion" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>
                    <a href="<?php echo base_url();?>modulo5/unidad2" class="list-group-item">Unidad 2</a>
                    <a href="<?php echo base_url();?>modulo5/unidad3" class="list-group-item">Unidad 3</a>
                    <a href="<?php echo base_url();?>modulo5/unidad4" class="list-group-item">Unidad 4</a>
                    <a href="<?php echo base_url();?>modulo5/unidad5" class="list-group-item">Unidad 5</a>
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
                    <li class="breadcrumb-item active" aria-current="page">Unidad 1</li>
                </ol>
            </nav>
            <div class="contenedor">
                <center>
                    <h1 class="first_title"><br>Unidad 1: Publicidad, ingresos y regulaciones</h1>
                </center>
                <?php $this->session->set_userdata('ruta','modulo5/unidad1'); ?>
                <div class="card mt-4">
                    <div class="card-body">
                        <p>La UNESCO [1] menciona en su metodología AMID para la unidad 1 del módulo 5 un conjunto 
                            de objetivos de aprendizaje que se deben alcanzar mediante la revisión de contenido y la realización de 
                            actividades acordes a unos temas establecidos; estos se pueden observar a continuación. </p>
                        <h4 class="subtitle">Objetivos de Aprendizaje</h4>
                        <div class="contenido">
                            <ul>
                                <li>Investigar la publicidad como una fuente importante de ingresos para la televisión
                                </li>
                                <li>Examine y evalúe el objetivo y eficacia de las regulaciones en la industria de la
                                    publicidad</li>
                                <li>Aplique las regulaciones existentes a los ejemplos actuales de publicidad</li>
                                <li>Evalué el impacto de la publicidad en la programación y el contenido mediático</li>
                            </ul>
                        </div>
                        <h4 class="subtitle">Temas Clave</h4>
                        <div class="contenido">
                            <ul>
                                <li>Análisis de las regulaciones de publicidad</li>
                                <li>Aplicación de las regulaciones a las publicidades actuales</li>
                                <li>La publicidad como un modelo de ingresos</li>
                            </ul>
                        </div>
                        <h4 class="subtitle">Bibliografía:</h4>
                        <p>[1] UNAOC, UNESCO, "Unidad 1: Publicidad, ingresos y regulaciones", en 
                            <em>Media Information Literacy for Teachers</em>, 2020.
                            <a href="http://unesco.mil-for-teachers.unaoc.org/modules/modulo-5-publicidad/unidad-1-publicidad-ingresos-y-regulaciones/?lang=es" 
                            target="_blank" rel="noopener noreferrer">
                            http://unesco.mil-for-teachers.unaoc.org/modules/modulo-5-publicidad/unidad-1-publicidad-ingresos-y-regulaciones/?lang=es</a>
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <center>
                <a href="<?php echo base_url();?>modulo5" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo5/unidad1/contenidos" class="btn btn_navegacion">Siguiente</a>
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