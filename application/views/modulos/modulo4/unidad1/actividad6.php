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
                        <h4 class="subtitle">Lenguajes de los medios</h4><br>
                        <div class="contenido">
                            <p class="card-text">
                                En vista de la gran cantidad de tecnología que nos rodea, se afirma que "Los medios de
                                comunicación (...) han creado un nuevo concepto de lectura y escritura y un nuevo concepto
                                de comunicación" [1]. Por esto a continuación expondremos los principales
                                medios de comunicación y la función con la que cumple [1, pp. 165-168]:
                                <blockquote>
                                    <ul>
                                        <li>La <strong>prensa</strong> es el medio de comunicación de masas más antiguo, utiliza
                                            el lenguaje gráfico, fundamentalmente verbal, con sus propias convenciones y usos
                                            retóricos, pragmáticos y gramaticales, pero también se sirve de códigos no verbales
                                            que desempeñan un papel fundamental en el proceso de comunicación a través de este
                                            medio (...) Cumple con las funciones de: <br> • Informar: con noticias de interés
                                            general sobre la actualidad. <br> • Opinar y orientar: con comentarios sobre esa
                                            actualidad que sirven de orientación al lector para formar su propia opinión sobre
                                            la misma. <br> • Entretener: con pasatiempos y otros recursos para divertir al
                                            lector. <br> • Hacer publicidad: mediante anuncios por palabras y ofertas varias con
                                            anuncios breves ofreciendo servicios, o publicidad con módulos o espacios en
                                            páginas de diversa extensión con fines comerciales.</li>
                                        <li>La <strong>radio</strong> es el medio más rápido y ágil para la difusión de la
                                            información, pero también el más fugaz. Su canal de comunicación es el aire y está
                                            basado en la utilización de la lengua oral, además de otros sistemas de comunicación
                                            acústicos no verbales. (...) Su finalidad fundamental es informar y entretener, con
                                            unos géneros y tipología textual similar a la prensa, que requieren una programación
                                            previa y la elaboración de un guión escrito.</li>
                                        <li>La <strong>televisión</strong> es el medio de comunicación de masas que mayor
                                            impacto está causando en la sociedad actual (...) Es el medio de comunicación que
                                            cuenta con un mayor número de audiencia (...) Su lenguaje se basa en la imagen en mo
                                            vimiento, que es lo que le confiere un mayor atractivo respecto a otros medios. Por
                                            eso, destaca en primer lugar la utilización de: <br>
                                            • Códigos iconográficos: imágenes, dibujos, emblemas, mapas... y otros códigos
                                            visuales: color, luminosidad, formas, tamaños... <br>
                                            • Códigos espaciales: encuadre, planos, angulación... <br>
                                            • Códigos verbales orales: la voz articulada y todos los códigos paralingüísticos
                                            que acompañan a ésta, comentados anteriormente en el lenguaje radiofónico:
                                            pronunciación, entonación, ritmo, acento e intensidad; y verbales escritos: rótulos,
                                            títulos, créditos, pies de foto, con todas las convenciones tipográficas indicadas
                                            en el lenguaje de la prensa. <br>
                                            • Además de otros códigos no verbales: sonoros, como música, sintonías de programa,
                                            de apertura y cierre, de separación entre espacios, sonidos ambientales y efectos
                                            acústicos diversos; gestuales y proxémicos: movimientos, posturas, gestos; y
                                            escenográficos: decoración, ambientación, vestuario.</li>
                                    </ul>
                                    <h4 class="subtitle">Utilización didáctica y sus objetivos</h4>
                                    Algunos de los objetivos específicos que se pueden plantear en el aula relacionados con la
                                    alfabetización en el discurso y lenguaje de los medios son [1, p. 168]: <br>
                                    • Conocer los mecanismos lingüísticos, paralingüísticos, iconográficos y acústicos del
                                    lenguaje de los diferentes medios. <br>
                                    • Reconocer los diversos géneros periodísticos y su tipología textual y valorar su finalidad
                                    comunicativa. <br>
                                    • Distinguir las distintas variedades, registros y usos lingüísticos que se dan en estos
                                    medios, así como los recursos no lingüísticos utilizados en función de la temática de las
                                    secciones, espacios y programas y el público al que van dirigidos. <br>
                                    • Desarrollar una actitud crítica y analítica ante los usos estereotipados, persuasivos,
                                    ideológicos y manipuladores de sus contenidos. <br>
                                </blockquote>
                                Para profundizar en el tema le recomendamos leer el siguiente artículo:
                                <a href="https://www.revistacomunicar.com/indice/articulo.php?numero=16-2001-22"
                                    target="_blank">Hacia un nuevo concepto de alfabetización: el lenguaje de los medios</a>
                                <br>
                            </p>
                            <h4 class="subtitle">El collage</h4>
                            <p class="card-text">
                                Se define como "una técnica artística, consistente en el pegado de diversos fragmentos de
                                materiales sobre una superficie" [2]. Su función es realizar
                                una representación gráfica al combinar diferentes imágenes para transmitir el significado de
                                un tema. A continuación encontrará 2 plataformas que permiten la creación de collages
                                online.
                                <ul>
                                    <li><a href="https://www.fotojet.com/es/features/photo-collage/" target="_blank">Photo
                                            collage</a></li>
                                    <li><a href="https://www.photofancy.es/funciones/collage-de-fotos.html"
                                            target="_blank">Photo Fancy</a></li>
                                </ul>
                            </p>
                        </div>
                        <p class="card-text">[1]Prado-Aragonés, H. "Hacia un nuevo concepto de alfabetización: el lenguaje de los 
                            medios" en <em>Comunicar</em> vol. 8, pp. 161–170, mar. 2001. https://doi.org/10.3916/C16-2001-22. 
                            <a href="https://www.revistacomunicar.com/indice/articulo.php?numero=16-2001-22"
                                target="_blank">https://www.revistacomunicar.com/indice/articulo.php?numero=16-2001-22</a></p>
                        <p class="card-text">[2] (2012) Artesanias y Manualidades Website [online]. Disponible en: <a target="_blank" 
                            rel="noopener noreferrer" href="http://www.artesaniasymanualidades.com/tecnicas/que-es-el-collage.php">
                            http://www.artesaniasymanualidades.com/tecnicas/que-es-el-collage.php</a></p>
                    </div>
                </div>
            </div>
            <br>
            <center>
                <a href="<?php echo base_url();?>modulo4/unidad1/actividad5" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo4/unidad1/actividad7" class="btn btn_navegacion">Siguiente</a>
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