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
                <a href="<?php echo base_url();?>modulo6" class="list-group-item list-group-item-action bg-light">Módulo 6</a>
                <ul class="list-group-item">
                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo6/unidad1" class="list-group-item list-group-item-action bg-light">Unidad 1</a>
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo6/unidad1/contenidos" class="list-group-item">Contenidos</a>
                                <a href="<?php echo base_url();?>modulo6/unidad1/evaluacion" class="list-group-item">Evaluación</a>
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
                    <li class="breadcrumb-item active" aria-current="page">Contenido</li>
                </ol>
            </nav>
            <div class="contenedor">
                <center>
                    <h1 class="first_title"><br>Unidad 1: De Los Medios Tradicionales a las Nuevas Tecnologías
                        Mediáticas</h1>
                </center>
                <?php $this->session->set_userdata('ruta','modulo6/unidad1/actividad1'); ?>
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="contenido">
                            [1] presenta que
                            <blockquote>Ha existido un importante desarrollo en el crecimiento de los medios
                                digitales lo que ha dado el paso de un modelo de comunicación tradicional centrado en “uno
                                para muchos” característico de los medios impresos y de transmisión, hacia un modelo de “par
                                en par” que facilita la colaboración creativa y el compartir los conocimientos. A medida que
                                el contenido es digitalizado, este se vuelve accesible para una multitud de dispositivos,
                                incluyendo la radio, televisión, computadores personales y quizá, lo más importante, los
                                teléfonos celulares, que están emergiendo como una plataforma dominante de entrega de
                                contenido de todo tipo. La digitalización de la voz, la imagen, el sonido y los datos –
                                conocido como convergencia – está creando nuevas oportunidades de interacción<br> Lea la
                                breve historia de los medios de comunicación y responda las preguntas de la Actividad.
                            </blockquote>
                            <div>
                                <img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod6/img/img1.png"><br>
                                <img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod6/img/img2.png"><br>
                                <img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod6/img/img3.png">
                            </div>
                        </div>
                        <h4 class="subtitle">Bibliografía:</h4>
                        <p>[1] UNAOC, UNESCO, "Unidad 1: De Los Medios Tradicionales a las Nuevas Tecnologías Mediáticas", en <em>Media Information Literacy for Teachers</em>, 2020.
                            <a href="http://unesco.mil-for-teachers.unaoc.org/modules/modulo-6-medios-nuevos-y-tradicionales/unidad-1-de-los-medios-tradicionales-a-las-nuevas-tecnologias-mediaticas/?lang=es" target="_blank" rel="noopener noreferrer">
                            http://unesco.mil-for-teachers.unaoc.org/modules/modulo-6-medios-nuevos-y-tradicionales/unidad-1-de-los-medios-tradicionales-a-las-nuevas-tecnologias-mediaticas/?lang=es</a>
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <center>
                <a href="<?php echo base_url();?>modulo6/unidad1/contenidos" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo6/unidad1/actividad2" class="btn btn_navegacion">Siguiente</a>
            </center>
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