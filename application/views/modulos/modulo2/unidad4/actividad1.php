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
                <a href="<?php echo base_url();?>modulo2" class="list-group-item list-group-item-action bg-light">
                    Módulo 2</a>
                <ul class="list-group-item">
                    <a href="<?php echo base_url();?>modulo2/unidad1" class="list-group-item list-group-item-action bg-light">Unidad 1</a>
                    <a href="<?php echo base_url();?>modulo2/unidad2" class="list-group-item list-group-item-action bg-light">Unidad 2</a>
                    <a href="<?php echo base_url();?>modulo2/unidad3" class="list-group-item list-group-item-action bg-light">Unidad 3</a>
                    <div class="btn-group dropright">
                    <a href="<?php echo base_url();?>modulo2/unidad4" class="list-group-item">Unidad 4</a>
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo2/unidad4/contenido"
                                    class="list-group-item">Contenidos</a>
                                <a href="<?php echo base_url(); ?>modulo2/unidad4/evaluacion" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo2/unidad4">Unidad 4</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contenido</li>
                </ol>
            </nav>
            <div class="contenedor">
                <center>
                    <h1 class="first_title"><br>Unidad 4: El proceso de desarrollo de las noticias: más allá de 5 por qués y 1 cómo (5ws y 1h en
                    inglés)</h1>
                </center><br>
                <?php $this->session->set_userdata('ruta','modulo2/unidad4/actividad1'); ?>
                <div class="card mt-4">
                    <div class="card-body">
                        <p class="card-text">
                            [1] en su enfoque pedagógico y actividades expone que:
                            <blockquote>
                                “A medida que llegan las noticias del día a la redacción del periódico se convierten
                                en una asombrosa mezcla de hechos, propaganda, rumor, sospechas, pistas, miedos y
                                esperanzas, y el trabajo de seleccionar y ordenar las noticias es realmente sagrado
                                y sacerdotal en las oficinas en una democracia.” Walter Lippmann, in News Reporting
                                and Writing
                            </blockquote>
                        </p>
                        <h4 class="subtitle">Visita de estudio a una organización mediática</h4>
                        <p class="card-text">
                            A su vez, [1] menciona que:
                            <blockquote>
                                Se puede realizar una visita de estudio a una oficina mediática para dialogar con el jefe o
                                el editor principal y observar de primera mano el proceso de desarrollo de noticias a nivel
                                de una oficina editorial
                            </blockquote>
                        </p>
                        <h4 class="subtitle">Proceso de indagación (un día en la vida de un reportero de noticias)</h4>
                        <p class="card-text">
                            [1] también dice que:
                            <blockquote>
                                En un acompañamiento al reportero de noticias a cubrir su trabajo, se debe documentar lo
                                siguiente:
                                <ul>
                                    <li>Qué elementos de las noticias fueron identificados y qué se escribió sobre ellos, en
                                        comparación con lo que sucedió en el campo (o el proceso de depuración de la
                                        información recolectada);</li>
                                    <li>Cómo y por qué el reportero contó la historia (dar significado a los datos) de la
                                        manera en la que lo hizo.</li>
                                </ul>
                            </blockquote>
                        </p>
                        <h4 class="subtitle">Análisis de textos</h4>
                        <p class="card-text">
                            Para el análisis de textos, [1] establece que:
                            <blockquote>
                                Las noticias cuentan con los siguientes elementos:
                                <ul>
                                    <li>¿Quién?</li>
                                    <li>¿Qué?</li>
                                    <li>¿Cuándo?</li>
                                    <li>¿Dónde?</li>
                                    <li>¿Por qué?</li>
                                    <li>¿Cómo?</li>
                                </ul>
                                También se pueden entender como: quién es el sujeto, cuál es el argumento, dónde ocurre, por
                                qué es el motivo o la causa, cómo es la narración. <br> El periodismo como “el narrar una
                                historia con un propósito” se refiere a encontrar la información que las personas necesitan
                                para vivir sus vidas, hacer que tenga sentido, que sea relevante y que pueda crear
                                compromisos. Es necesario tener en cuenta los principios centrales de verificación: no
                                añadir, no engañar a la audiencia: ser lo más transparente posible en cuanto a métodos y
                                motivos; depender del propio reportaje original; ejercer la humildad.
                            </blockquote>
                        </p>
                        <h4 class="subtitle">Producción</h4>
                        <p class="card-text">
                            En cuanto a la producción, [1] menciona como actividad:
                            <blockquote>
                                En los colegios se puede realizar de la siguiente manera: coordinar con el asesor de una
                                publicación escolar (o la estación de transmisión de la escuela/colegio) para permitir a los
                                estudiantes que desarrollen un plan sobre un tema para la próxima publicación/programa. El
                                plan sobre el tema debería incluir una serie de artículos o historias que serán escritas o
                                producidas y el sustento para su inclusión, ámbito de cada historia y el posible enfoque o
                                tratamiento de cada historia; de tal manera que los estudiantes puedan entender de primera
                                mano la necesidad que las noticias sean veraces y la influencia que estas tienen en la vida
                                de las personas.
                            </blockquote>
                        </p>
                        <h4 class="subtitle">Registro de medios</h4>
                        <p class="card-text">
                            [1] la define como:
                            <blockquote>
                                La práctica de mantener un diario o un libro de registros donde se registren
                                (diariamente) las observaciones sobre el tema (por ejemplo: valores de noticias, juicios de
                                noticias, criterio de verificación, informes de ciudadanos) para luego hacer un resumen y
                                síntesis al final.
                            </blockquote>
                        </p>
                        <h4 class="subtitle">Bibliografía:</h4>
                        <p>[1] UNAOC, UNESCO, "Unidad 4: El proceso de desarrollo de las noticias: más allá de 5 por qués y 1 cómo (5ws y 1h en
                            inglés)", en <em>Media Information Literacy for Teachers</em>, 2020.
                            <a href="http://unesco.mil-for-teachers.unaoc.org/modules/modulo-2-entendiendo-las-noticias-los-medios-y-la-etica-de-informacion/unidad-4-el-proceso-de-desarrollo-de-las-noticias-mas-alla-de-5-por-ques-y-1-como-5ws-y-1h-en-ingles/?lang=es" 
                                target="_blank" rel="noopener noreferrer">
                            http://unesco.mil-for-teachers.unaoc.org/modules/modulo-2-entendiendo-las-noticias-los-medios-y-la-etica-de-informacion/unidad-4-el-proceso-de-desarrollo-de-las-noticias-mas-alla-de-5-por-ques-y-1-como-5ws-y-1h-en-ingles/?lang=es</a>
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <center>
                <a href="<?php echo base_url();?>modulo2/unidad4/contenidos" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo2/unidad4/actividad2" class="btn btn_navegacion">Siguiente</a>
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