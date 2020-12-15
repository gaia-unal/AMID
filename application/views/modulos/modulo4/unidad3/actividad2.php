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
                <ul class="list-group-item">

                    <a href="<?php echo base_url();?>modulo4/unidad1"
                        class="list-group-item list-group-item-action bg-light">Unidad 1</a>

                    <a href="<?php echo base_url();?>modulo4/unidad2" class="list-group-item list-group-item-action bg-light">Unidad 2</a>

                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo4/unidad3" class="list-group-item">Unidad 3</a>
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo4/unidad3/contenidos"
                                    class="list-group-item">Contenidos</a>
                                <a href="#"  class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo4/unidad3">Unidad 3</a></li>  
                    <li class="breadcrumb-item active" aria-current="page">Contenido</li>
                </ol>
            </nav>
            <div class="contenedor">
                <center>
                    <h1 class="first_title"><br>Unidad 3: Géneros de películas y de cuentos</h1>
                </center>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4 class="subtitle">Storyboard</h4>
                        <div class="contenido">
                            <p class="card-text">
                                <blockquote>
                                    Un storyboard, en castellano guión gráfico, es una secuencia de imágenes o
                                    ilustraciones que hacen de guía al argumento de una historia y que permiten
                                    previsualizar un resultado. Es una técnica utilizada, por ejemplo, en cómics (...) La
                                    utilización del storyboard en la escuela puede tener como objetivos fomentar la
                                    creatividad, la animación a la lectura, la organización y secuenciación de ideas a
                                    través de un guión y la utilización de las nuevas tecnologías para la creación de un
                                    producto, en este caso de un cómic [1].
                                </blockquote>
                                A continuación se listarán herramientas online que permiten la creación de storyboards:
                                <ul>
                                    <li><a href="https://www.storyboardthat.com/" target="_blank">StoryboardThat</a></li>
                                    <li><a href="https://www.makebeliefscomix.com/" target="_blank">Make Beliefs Comix</a>
                                    </li>
                                    <li><a href="https://www.pixton.com/es/" target="_blank">Pixton</a></li>
                                    <li><a href="http://www.comicmaster.org.uk/" target="_blank">Comic Master</a></li>
                                    <li><a href="https://storybird.com/" target="_blank">Storybird</a></li>
                                    <li><a href="https://chogger.com/" target="_blank">Chogger</a></li>
                                    <li><a href="http://writecomics.com/" target="_blank">Write Comics</a></li>
                                    <li><a href="http://www.wittycomics.com/" target="_blank">Witty Comics</a></li>
                                </ul>
                                <strong>Nota:</strong> Algunas de las herramientas listadas se encuentran en inglés. <br>
                            </p>
                        </div>
                        <h4 class="subtitle">Bibliografía:</h4>
                        <p>[1] A. Gómez-Chacón, "Herramientas on-line para crear guiones gráficos o storyboards", en <em>Psicología y Arte</em>, 2015. 
                            <a href="https://parapnte.educacion.navarra.es/2015/11/16/herramientas-on-line-para-crear-guiones-graficos-o-storyboards/" target="_blank" 
                            rel="noopener noreferrer">https://parapnte.educacion.navarra.es/2015/11/16/herramientas-on-line-para-crear-guiones-graficos-o-storyboards/</a>
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <center>
                <a href="<?php echo base_url();?>modulo4/unidad3/actividad1" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo4/unidad3/actividad3" class="btn btn_navegacion">Siguiente</a>
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