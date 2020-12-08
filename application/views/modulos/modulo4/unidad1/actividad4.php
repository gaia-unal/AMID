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
                                <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
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
                        <h4 class="subtitle">Medios audiovisuales</h4><br>
                        <div class="contenido">
                            <p class="card-text">
                                Se definen como <em>"los medios técnicos de representación que permiten ampliar las capacidades
                                propias de los sentidos de la vista y el oído. Amplían estos sentidos en sus dimensiones
                                espacial y temporal"</em> [1]. A su vez, Mónclus [1] dice que: 
                            </p>
                            <blockquote>
                                El trabajo en el aula puede estar potenciado por herramientas didácticas que favorezcan el
                                proceso de enseñanza‑aprendizaje. Los medios audiovisuales ofrecen una visión de la realidad
                                diferente a otros medios y el profesor puede uti­lizarlos como "vehículo" transmisor de
                                informa­ción y como elemento específico de organizar la realidad.
                                Considerado como un medio didáctico más, cada medio audiovisual proporcionará al pro­fesor
                                una alternativa que él mismo ha de valorar según la situación y circunstancia determina­da.
                                Enriquecerá el trabajo del aula siempre y cuando el profesor lo integre en su trabajo, y se
                                justificará, al menos, por ofrecer una forma más de acceso a las realidades, por tener un
                                código es­pecífico y una manera de representar diferente a otro medio <br>
                                Sobre las tendencias de utilización de los medios audiovisuales, se pueden resaltar tres
                                momentos:
                                <ul>
                                    <li>Un primer momento de utilización masiva de los medios técnicos audiovisuales, con un
                                        gran optimismo que pretendía relacionar directamen­te el uso de los medios con la mejora
                                        en el apren­dizaje. La "tecnología educativa" que llega direc­tamente de los Estados
                                        Unidos, llenó nuestra aulas de equipos que en muchos de los casos fueron
                                        infrautilizados. Se ofrecían estadísticas sobre contenidos memorizados y uso de los
                                        medios.</li>
                                    <li>A principios de los años sesenta, surge una tendencia que alerta sobre "efectos nocivos"
                                        de los medios de comunicación de masas, y trata de ofrecer antídotos a los niños y
                                        jóvenes introdu­ciendo actividades de enseñanza directa de "códigos" y presuntas
                                        manipulaciones a los alumnos. En Francia tiene una gran importancia su relación con
                                        estudios que vinculan y comparan los medios audiovisuales al lenguaje. Realizan estudios
                                        sobre publicidad y televisión, con esta­dísticas que se interpretan automáticamente.
                                    </li>
                                    <li>A partir de los años setenta se plantea una postura escéptica sobre el conocimiento de
                                        los efectos de los medios de comunicación de masas. El vídeo surge como medio de gran
                                        potencia que permite un acceso rápido y cómodo a múltiples programas, sonidos, imágenes,
                                        etc. La rápida im­plantación de medios cada vez más eficaces (videodisco, satélite, alta
                                        definición, interactivos, etc.) hace imprevisible la futura utilización de estos medios.
                                        Con todo esto existe una gran sen­sibilidad entre los profesionales de la educación,
                                        para renovar ésta y que no se quede rezagada respecto al aprendizaje directo y sumamente
                                        variado que obtiene el alumno de los medios de comunicación.</li>
                                </ul>
                            </blockquote>
                        </div>
                        <h4 class="subtitle">Bibliografía:</h4>
                        <p class="card-text">[1] Mónclus, A. G. "Los medios Audiovisuales. Concepto y uso en el aula", en 
                            <em>Grupo Logo-Madrid</em>, n.d. <a target="_blank" rel="noopener noreferrer" 
                                href="http://www.quadernsdigitals.net/datos_web/articles/zeus/zeus14/z14medios.htm">
                                http://www.quadernsdigitals.net/datos_web/articles/zeus/zeus14/z14medios.htm</a></p>
                    </div>
                </div>
            </div>
            <br>
            <center>
                <a href="<?php echo base_url();?>modulo4/unidad1/actividad3" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo4/unidad1/actividad5" class="btn btn_navegacion">Siguiente</a>
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