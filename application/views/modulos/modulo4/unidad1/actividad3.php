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
                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo4/unidad1" class="list-group-item list-group-item-action bg-light">Unidad 1</a>
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo4/unidad1/contenidos"
                                    class="list-group-item">Contenidos</a>
                                <a href="#"  class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>
                    <a href="<?php echo base_url();?>modulo4/unidad2" class="list-group-item">Unidad 2</a>
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo4/unidad1">Unidad 1</a></li>

                    <li class="breadcrumb-item active" aria-current="page">Contenido</li>
                </ol>
            </nav>
            <div class="contenedor">
                <center>
                    <h1 class="first_title"><br>Unidad 1: Lectura de medios y textos de información</h1>
                </center>
                <div class="card mt-4">
                    <div class="card-body">
                        <br>
                        <h4 class="subtitle">Lenguaje televisivo</h4><br>
                        <div class="contenido">
                            En [1] se expone que:
                            <blockquote>
                                <ul>
                                    <li>La televisión es un medio de comunicación masivo que utiliza para la transmisión de
                                        información un lenguaje específico, constituido por la imagen y el sonido.</li>
                                    <li>En televisión, el lenguaje no solo se caracteriza por el texto, sino también por la
                                        imagen, el sonido, la voz y otros elementos que lo convierten en un vehículo del
                                        pensamiento más complejo y que merece una mayor coordinación para transmitir un
                                        resultado: el mensaje audiovisual.</li>
                                    <li>El mensaje transmitido por la televisión no puede ser releído, a no ser que previamente
                                        el usuario haya decidido su grabación, por tanto, su lenguaje se caracterizará por:
                                        <ul>
                                            <li>Emplear frases sencillas con un léxico común, para llegar a todo el mundo</li>
                                            <li>Utilizar repeticiones</li>
                                            <li>Evitar términos ofensivos o discriminatorios.</li>
                                            <li>Mantener la atención del televidente mediante el empleo de recursos orales.</li>
                                            <li>Cuidar la vocalización y el tono adecuado.</li>
                                            <li>Enriquecer el contenido con la utilización del sonido ambiente y la música.</li>
                                            <li>Utilizar como tiempo verbal preferente el presente, y para dirigirse a hechos
                                                pasados el pretérito perfecto.</li>
                                            <li>Los programas están divididos por grandes bloques de publicidad.</li>
                                            <li>Los mensajes son muy llamativos para mantener el interés.</li>
                                            <li>Falsean la realidad como consecuencia de la tendencia a la superficialidad que
                                                tiene el medio televisivo.</li>
                                        </ul>
                                    </li>
                                    <li>Básicamente, la televisión consiste en la transmisión de sonido e imágenes en movimiento y 
                                        utiliza códigos muy parecidos al cine. Su transmisión está gestionada por empresas y necesita ser 
                                        rentable, por lo que uno de los objetivos de los programadores es captar y mantener las audiencias.</li>
                                </ul>
                                Este lenguaje contiene unos elementos que lo caracterizan, los cuales son:
                                <ul>
                                    <li>El <strong>estudio</strong> es el espacio donde toda cadena de televisión, organiza y ejecuta los 
                                        elementos que componen su producción. En los estudios se siguen paso a paso las escenas de los 
                                        programas y series, se graba todo lo que emiten las cámaras y se edita el material grabado.</li>
                                    <li>La <strong>producción</strong> hace referencia a los procesos de realización del
                                        programa. De esta manera, el equipo de producción engloba a todo el personal de un
                                        programa organizados entorno a las figuras del realizador y del productor</li>
                                    <li>El <strong>guión</strong> es el texto escrito que se presenta todo lo que conforma una obra 
                                        audiovisual En la televisión, la coexistencia de tan variada cantidad de formatos y géneros obligan a 
                                        aplicar distintos modelos de guión</li>
                                    <li>La <strong>realización</strong> en TV es lo mismo que la dirección en el cine.</li>
                                </ul>
                                Además hay unos formatos específicos que hacen parte del lenguaje televisivo:
                                <ul>
                                    <li><strong>Documental:</strong> es un género que intenta describir aspectos de la realidad y el entorno. 
                                        Sus objetivos principales son enseñar, informar,describir o denunciar</li>
                                    <li><strong>Entretenimiento:</strong> los programas de entretenimiento basan sus contenidos en cuatro grandes 
                                        conceptos: la sorpresa, el humor, elsentimiento y la emoción (concursos, galas, variedades, reality shows, 
                                        magacines…)</li>
                                    <li><strong>Ficción:</strong> incluye géneros como series, miniseries, telenovela,
                                        telefilmes, etc. Se caracteriza por:
                                        <ul>
                                            <li>Un grupo reducido de personajes fijos</li>
                                            <li>Pocos decorados</li>
                                            <li>Están realizados en Estudio, lo que conlleva un absoluto control de los efectos, la iluminación 
                                                o el posicionamiento de las cámaras</li>
                                            <li>La estructura de las tramas se amolda a los cortes publicitarios (Guevara,
                                                2011).</li>
                                        </ul>
                                    </li>
                                </ul>
                            </blockquote>
                        </div>
                        <h4 class="subtitle">Bibliografía:</h4>
                        <p class="card-text">[1] Guevara, P. P. "Lenguaje Televisivo", 2011. <a target="_blank" rel="noopener noreferrer"
                            href="https://es.slideshare.net/adurbecondita/el-lenguaje-televisivo-8007635">https://es.slideshare.net/adurbecondita/
                            el-lenguaje-televisivo-800763</a></p>
                    </div>
                </div>
            </div>
            <br>
            <center>
                <a href="<?php echo base_url();?>modulo4/unidad1/actividad2" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo4/unidad1/actividad4" class="btn btn_navegacion">Siguiente</a>
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