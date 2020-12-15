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
                    <a href="<?php echo base_url();?>modulo6/unidad1" class="list-group-item list-group-item-action bg-light">Unidad 1</a>
                    <a href="<?php echo base_url();?>modulo6/unidad2" class="list-group-item">Unidad 2</a>
                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo6/unidad3"  class="list-group-item">Unidad 3</a>
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo6/unidad3/contenidos" class="list-group-item">Contenidos</a>
                                <a href="<?php echo base_url();?>modulo6/unidad3/evaluacion" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo6/unidad3">Unidad 3</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actividad 1</li>
                </ol>
            </nav>
            <div class="contenedor">
                <center>
                    <h1 class="first_title">Unidad 3: Usos de las Herramientas Interactivas de Multimedia, incluyendo los Juegos Digitales en las
                    Aulas</h1>
                    <?php echo form_open('modulo6/unidad3/evaluacion');$this->session->set_userdata('idAct','m6u3a1'); ?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="contenido">
                            <p class="card-text">
                                En [1] se describe que
                                <blockquote>
                                    Los recursos educativos abiertos (REAs) son materiales y herramientas de aprendizaje –
                                    incluyendo cursos completos, módulos, materiales de curso, libros de texto, videos,
                                    exámenes, software y cualquier otro material (interactivo y no-interactivo), o técnicas –
                                    que se utilizan para apoyar el acceso al conocimiento, en un formato de documento abierto,
                                    entregado con una licencia abierta, permitiendo el uso libre, re-uso y adecuación a las
                                    necesidades específicas de un cierto grupo de usuarios (es decir, estudiantes, capacitadores
                                    de capacitadores, facilitadores, etc.).
                                </blockquote>
                            </p>
                            <h4 class="subtitle">Principios de los REA</h4>
                            <p class="card-text">
                                Según [2],
                                <blockquote>
                                    David Wiley es uno de los pioneros de los REA. Él y sus colegas han sugerido (Hilton et al.,
                                    2010) que hay cinco principios básicos en la publicación abierta:
                                    <ul>
                                        <li>Re-utilizable: el nivel básico de apertura. El material se puede utilizar completo o
                                            parte para sus propios fines (por ejemplo, descargar un video educativo para verlo
                                            más tarde);</li>
                                        <li>Re-distribuible: el material se puede compartir con otros (por ejemplo, puede enviar
                                            por mail un artículo digital a un colega);</li>
                                        <li>Revisable: el material se puede adaptar, modificar, traducir, o cambiar (por
                                            ejemplo, tomar un libro en inglés y convertirlo en un audio libro en castellano);
                                        </li>
                                        <li>Re-mixable: puede tomar dos o más partes del recurso y combinarlas para crear un
                                            nuevo recurso (por ejemplo, tomar algunos podcasts de un libro y combinarlos con las
                                            dispositivas de otro curso para crear un nuevo trabajo);</li>
                                        <li>Retenible: o sonservable significa que no hay restricciones con los derechos del
                                            material digital (DRM), es decir puede conservar el contenido para su uso, ya sea
                                            usted el autor, un instructor o un estudiante. </li>
                                    </ul>
                                </blockquote>
                            </p>
                            <p>
                                <h4 class="subtitle"> Objetivo:</h4>
                                [1] establece como objetivo
                                <blockquote>
                                    Identificar el valor de las herramientas interactivas de multimedia, incluyendo sitios
                                    interactivos en la red, presentaciones, discusiones en línea, blogs, Wiki, wikilibros,
                                    libros electrónicos, podcasting, videocasting, vodcasting y juegos de enseñanza y
                                    aprendizaje. 
                                </blockquote>
                            </p>
                            <p class="card-text">
                                Para lo cual, se menciona [1]:
                                <blockquote>
                                    <strong>Herramientas interactivas de multimedia:</strong> Piense en la materia que usted
                                    enseña. Utilizando un motor de búsqueda, identifique y haga una lista de las herramientas
                                    interactivas de multimedia, incluyendo juegos digitales, elementos que se podrían utilizar
                                    al dar una lección (o lecciones) específicas a un grupo de profesores. Debe identificar un
                                    número de dichas herramientas. Dé prioridad a estas herramientas en términos de utilidad
                                    para sus necesidades específicas.
                                    <ul>
                                        <li>¿Qué criterio utilizó?</li>
                                        <textarea name="preg1" style="width: 90%;" rows="8" minlength="1" maxlength="200" onkeypress="return check(event)"
                                            placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br/>
                                    </ul>
                                    Investigue acerca de los criterios utilizados por expertos en el uso de herramientas
                                    interactivas de multimedia en la educación. Ahora compare su criterio con aquel de los
                                    expertos.<br>
                                    <ul>
                                    <br>   <li>¿Cuáles son sus observaciones?</li>
                                        <textarea name="preg2" style="width: 90%;" rows="8" minlength="1" maxlength="200" onkeypress="return check(event)"
                                            placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br/><br>
                                        <br> <li>¿Está de acuerdo con el criterio de los expertos?</li>
                                        <textarea name="preg3" style="width: 90%;" rows="8" minlength="1" maxlength="200" onkeypress="return check(event)"
                                            placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br/><br>
                                        <br>   <li>En su lista de herramientas interactivas de multimedia, ¿puede identificar
                                            herramientas que podrían alterar o facilitar de una manera importante la cooperación
                                            y discusión en el proceso de enseñanza-aprendizaje? ¿Por qué escogió esas
                                            herramientas?</li><br>
                                            <br>    <textarea name="preg4" style="width: 90%;" rows="8" minlength="1" maxlength="200" onkeypress="return check(event)"
                                            placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br/>
                                        <br> <li>¿Cómo cree usted que las tecnologías de multimedia podrían permitir a los
                                            estudiantes y profesores interactuar con la información de una nueva forma,
                                            cambiar el contenido, y crear su propio conocimiento?</li>
                                        <textarea name="preg5" style="width: 90%;" rows="8" minlength="1" maxlength="200" onkeypress="return check(event)"
                                            placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br/>
                                    </ul>
                                </blockquote>
                            </p>
                            <p class="card-text">
                                <p>
                                    Por otra parte, [1] establece necesario:
                                    <blockquote>
                                        <h4 class="subtitle"> Objetivos:</h4>
                                        <ol>
                                            <li>Desarrollar habilidades sociales, intelectuales y espacio-temporales utilizando
                                                herramientas interactivas de multimedia, especialmente juegos</li>
                                            <li>Aplicar las herramientas interactivas de multimedia, especialmente los juegos
                                                digitales, para la enseñanza y el aprendizaje</li>
                                            <li>Utilizar herramientas/juegos interactivos de multimedia de baja y alta
                                                tecnología para exponer conceptos de temas académicos (por Ej. matemáticas,
                                                ciencias, estudios sociales, etc.)</li>
                                        </ol>
                                        <ul>
                                            <li>¿De qué forma un juego de computadora le puede ayudar a pensar creativamente sobre
                                                temas globales?</li>
                                            <textarea name="preg6" style="width: 90%;" rows="8" minlength="1" maxlength="200" onkeypress="return check(event)"
                                                placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br/>
                                            <li>¿Cuáles son los resultados de aprendizaje con estos juegos?</li>
                                            <textarea name="preg7" style="width: 90%;" rows="8" minlength="1" maxlength="200" onkeypress="return check(event)"
                                                placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br/>
                                        </ul>
                                    </blockquote>
                                </p>
                            </p>
                        </div>
                        <h4 class="subtitle">Bibliografía:</h4>
                        <p>[1] UNAOC, UNESCO, "Unidad 3: Usos de las Herramientas Interactivas de Multimedia, incluyendo los Juegos Digitales en las Aulas", en 
                        <em>Media Information Literacy for Teachers</em>, 2020.
                            <a href="http://unesco.mil-for-teachers.unaoc.org/modules/modulo-6-medios-nuevos-y-tradicionales/unidad-3-usos-de-las-herramientas-interactivas-de-multimedia-incluyendo-los-juegos-digitales-en-las-aulas/?lang=es" target="_blank" rel="noopener noreferrer">
                            http://unesco.mil-for-teachers.unaoc.org/modules/modulo-6-medios-nuevos-y-tradicionales/unidad-3-usos-de-las-herramientas-interactivas-de-multimedia-incluyendo-los-juegos-digitales-en-las-aulas/?lang=es</a>
                        </p>
                        <p>[2] Dr. A. W. Tony Bates "Teaching in a Digital Age" en <em>Presbooks</em>. <a href="https://cead.pressbooks.com/chapter/10-2-recursos-educativos-abiertos-rea/" 
                        target="_blank" rel="noopener noreferrer">https://cead.pressbooks.com/chapter/10-2-recursos-educativos-abiertos-rea/</a></p>
                    </div>
                </div>
            </div>
            <br>
            <center>
                <a href="<?php echo base_url();?>modulo6/unidad3/temas" class="btn btn_navegacion">Anterior</a>
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