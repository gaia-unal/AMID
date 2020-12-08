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
                <ul class="list-group-item">
                    <a href="<?php echo base_url();?>modulo2/unidad1" class="list-group-item list-group-item-action bg-light">Unidad 1</a>
                    <a href="<?php echo base_url();?>modulo2/unidad2"  class="list-group-item list-group-item-action bg-light">Unidad 2</a>
                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo2/unidad3"  class="list-group-item">Unidad 3</a>
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo2/unidad3/contenidos"
                                    class="list-group-item">Contenidos</a>
                                <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>
                    <a href="<?php echo base_url();?>modulo2/unidad4" class="list-group-item">Unidad 4</a>
                </ul>
                <a href="<?php echo base_url();?>modulo3" class="list-group-item list-group-item-action bg-light">Módulo 3</a>
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo2">Módulo 2</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo2/unidad3">Unidad 3</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contenido</li>
                </ol>
            </nav>
            <div class="contenedor">
                <center>
                    <h1 class="first_title"><br>Unidad 3: Lo que genera noticias – explorando los criterios</h1>
                </center>
                <div class="card mt-4">
                    <div class="card-body">
                        <div id="parte1" style="display:block;">
                            <h4 class="subtitle">Análisis</h4>
                            <p class="card-text">
                                [1] en su enfoque pedagógico y actividades muestra que:
                                <blockquote>
                                    <em>
                                        “La teoría del periodismo que hemos heredado... forma la base del periodismo en el
                                        nuevo siglo, un periodismo que hace sentido basado en la síntesis, verificación y
                                        feroz independencia.”, (Bill Kovach and Tom Rosenstiel, The Elements of Journalism).
                                    </em>
                                </blockquote>
                                <blockquote>
                                    Los periodistas tienen que dar sentido a una gran cantidad de información y considerar como
                                    organizarla de manera que destaquen los temas que son más importantes para que la audiencia,
                                    que tiene diferentes niveles de comprensión sobre los temas, de manera que ésta sea capaz de
                                    comprender. Los juicios que se hagan incluirán la selección de aquellas historias que se
                                    consideran de valor noticioso y decidirán cómo presentar la información. Sin lugar a dudas,
                                    la forma de la presentación (a veces conocida como el “enmarque”) reflejará la experiencia y
                                    la perspectiva del periodista. Es importante que la audiencia entienda estos enmarques y que
                                    piense de una manera crítica.
                                </blockquote>
                            </p>
                        </div>
                        <div id="parte2" style="display:none;">
                            <h4 class="subtitle">Análisis de textos</h4>
                            <p class="card-text">
                                En [1]: 
                                <blockquote>
                                    Analizar el interés periodístico de los artículos de cada primera página de los principales
                                    periódicos (o su versión en línea), basado en el criterio para evaluar el valor de la
                                    noticia de un artículo. Esto generalmente incluye factores como:
                                    <ul>
                                        <li>Oportunidad</li>
                                        <li>Impacto e importancia</li>
                                        <li>Prominencia</li>
                                        <li>Proximidad</li>
                                        <li>Conflicto</li>
                                        <li>Inusual / interés humano</li>
                                        <li>Ocurrencia</li>
                                        <li>Necesidad </li>
                                    </ul>
                                    Además, también se deben analizar los artículos basados en los factores que se toman en
                                    cuenta cuando se hacen juicios sobre las noticias o para dar forma. Estos son:
                                    <ul>
                                        <li>Veracidad: precisión (que los hechos sean correctos) y coherencia (que los hechos
                                            tengan sentido)</li>
                                        <li>Dedicado al interés público</li>
                                        <li>Información en lugar de manipulación al público</li>
                                        <li>Que esté completo / amplitud</li>
                                        <li>Diversidad (inclusión de noticias de todas las comunidades, no sólo para las
                                            audiencias escogidas). </li>
                                    </ul>
                                    También se debe prestar atención a cómo se ubican los artículos, los titulares y el tamaño
                                    de letra utilizada, las fotografías y las leyendas que incluyen.
                                </blockquote>
                            </p>
                        </div>
                        <div id="parte3" style="display:none;">
                            <h4 class="subtitle">Análisis de contexto</h4>
                            <p class="card-text">
                                [1] indica que:
                                <blockquote>
                                    CNN y Al Jazeera (al igual que otras organizaciones de medios de elección/relevancia)
                                    realizan coberturas de noticias sobre un tema en particular, un día en particular y comparan
                                    y contrastan los puntos de vista (es decir, la presentación de un punto de vista o
                                    perspectiva en particular) y tratamiento (es decir, información que se provee, fuentes
                                    citadas, entrevistas dadas y cualquier apoyo visual de las noticias). Cada uno lo hace de
                                    manera diferente y haciendo énfasis en unas cosas más que otras.
                                </blockquote>
                            </p>
                        </div>
                        <div id="parte4" style="display:none;">
                            <h4 class="subtitle">Análisis de noticias</h4>
                            <p class="card-text">
                                La UNESCO [1] menciona que <em>"Aunque dos medios u organizaciones tomen una misma noticia y la 
                                transmitan, es de resaltarque una puede tener más fuerza que la otra, al igual que contener más 
                                información."</em>
                            </p>
                        </div>
                        <center>
                            <div id="btnAtras">
                                <a onclick="volver();">
                                    <img width=70 src="<?php echo base_url();?>public/assets/img/arrow_l.jpg">
                                </a>
                            </div>
                            <div id="btnAdelante">
                                <a onclick="avanzar();">
                                    <img width=70 src="<?php echo base_url();?>public/assets/img/arrow_r.jpg">
                                </a>
                            </div>
                        </center>
                        <h4 class="subtitle">Bibliografía:</h4>
                        <p>[1] UNAOC, UNESCO, "Unidad 3: Lo que genera noticias – explorando los criterios", en <em>Media Information Literacy for Teachers</em>, 2020.
                            <a href="http://unesco.mil-for-teachers.unaoc.org/modules/modulo-2-entendiendo-las-noticias-los-medios-y-la-etica-de-informacion/unidad-3-lo-que-genera-noticias-explorando-los-criterios/?lang=es" 
                            target="_blank" rel="noopener noreferrer">
                            http://unesco.mil-for-teachers.unaoc.org/modules/modulo-2-entendiendo-las-noticias-los-medios-y-la-etica-de-informacion/unidad-3-lo-que-genera-noticias-explorando-los-criterios/?lang=es</a>
                        </p>

                    </div>
                </div>
            </div>
            <br>
            <center>
                <a href="<?php echo base_url();?>modulo2/unidad3/contenidos" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo2/unidad3/actividad2" class="btn btn_navegacion">Siguiente</a>
            </center>
            <?php $this->load->view('initial/paginacion');?>
            <p class="final_contenido">Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/">
                Licencia Creative Commons Reconocimiento Compartir igual 4.0</a></p>
            <br>
        </div>
    </div>
    <?php $this->load->view('initial/footer');?>
    <?php $this->load->view('initial/scriptGenerico');?>
    <script src="<?php echo base_url();?>public/assets/modulos/mod2/js/arrows.js"></script>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>