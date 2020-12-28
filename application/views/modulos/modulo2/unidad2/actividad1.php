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
                <a href="<?php echo base_url();?>modulo2" class="list-group-item list-group-item-action bg-light">
                    Módulo 2</a>
                <ul class="list-group-item">
                    <a href="modulo2/unidad1" class="list-group-item list-group-item-action bg-light">Unidad 1</a>
                    <div class="btn-group dropright">
                        <a href="modulo2/unidad2"  class="list-group-item list-group-item-action bg-light">Unidad 2</a>
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo2/unidad2/contenidos"
                                    class="list-group-item">Contenidos</a>
                                <a href="#"  class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>
                    <a href="<?php echo base_url();?>modulo2/unidad3" class="list-group-item">Unidad 3</a>
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo2/unidad2">Unidad 2</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contenido</li>
                </ol>
            </nav>
            <div class="contenedor">
                <center>
                    <h1 class="first_title"><br>Unidad 2: Libertad, ética y responsabilidad</h1>
                </center>
                <?php $this->session->set_userdata('ruta','modulo2/unidad2/actividad1'); ?>
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="contenido">
                            <p class="card-text">
                                [1] presenta que:
                                <blockquote>
                                    <blockquote>
                                        <em>
                                            “Al final el periodismo es un acto de carácter.” (Bill Kovach and Tom Rosenstiel,
                                            The Elements of Journalism).
                                        </em>
                                    </blockquote>
                                    Si el estado busca regular los medios, va a interferir en la independencia de los
                                    periodistas y en su habilidad de cubrir los eventos de la forma que a ellos les parezca más
                                    apropiada. Los medios son actores sociales que pueden ejercer gran poder en la sociedad,
                                    entonces, a fin de proteger su libertad de regulación y control, generalmente se cree que
                                    los periodistas necesitan regularse a sí mismos al adoptar códigos de conducta ética o
                                    establecer lineamientos profesionales de cómo las noticias o eventos deben ser cubiertos.<br>
                                </blockquote>
                                <h4 class="subtitle">Código de ética periodística</h4>
                                En Bogotá, el circulo de periodistas publicó un código de ética que tiene como finalidad
                                brindarle al periodista y a todas aquellas personas que transmiten información, las pautas
                                necesarias para llevar una conducta y una ética adecuada, de tal manera que la información
                                recolectada y compartida sea correcta y no cuente con insinuaciones, morbosidad u otros
                                factores de influencia. Así, [2] dice:
                                <blockquote>
                                    <em>
                                        “El compromiso del periodista consiste en servir y defender los intereses de la
                                        democracia, más allá de cualquier adhesión a gobiernos, partidos o instituciones”
                                    </em>
                                </blockquote>
                                En el siguiente enlace puede encontrar el documento: <a target="_blank"
                                    href="http://eticasegura.fnpi.org/2011/12/27/conozca-el-codigo-de-etica-del-circulo-de-periodistas-de-bogota/">
                                    Código de Etica del circulo de periodistas de Bogotá</a> <br>
                                Para profundizar, también compartimos el documento del Colegio Dominicano de Periodistas,
                                donde presentan el código de ética: <a target="_blank"
                                    href="http://www.unesco.org/new/fileadmin/MULTIMEDIA/HQ/CI/CI/images/wmn/code%20of%20Ethics%20Collegio%20de%20periodistas.pdf">
                                    Código de ética</a> <br>
                                <br> En latinoamerica, se pueden encontrar 4 códigos de ética [3]: <br>
                                <ul>
                                    <li>La “Declaración de principios del periodismo” del Centro Latinoamericano de
                                        Periodismo</li>
                                    <li>El Código latinoamericano de ética periodística de la Federación latinoamericana
                                        de periodistas</li>
                                    <li>Las Normas de ética y deontología profesional del Congreso Iberoamericano de
                                        periodistas técnicos y especializados.</li>
                                    <li>El código de ética de la Asociación Interamericana de Prensa, adoptado en la I
                                        Conferencia Panamericana de prensa</li>
                                </ul>
                                <br> <h4 class="subtitle">Código de ética profesional para los profesionales de la información</h4>
                                UNESCO [4] muestra que:
                                <blockquote>
                                    Los principios éticos de las sociedades del conocimiento derivan de la Declaración Universal
                                    de los Derechos Humanos e incluyen el derecho a la libertad de expresión, el acceso
                                    universal a la información –en particular la que está en el dominio público–, el derecho a
                                    la educación, el derecho a la privacidad y el derecho a participar en la vida cultural. El
                                    debate internacional en torno a la ética de la información (Infoética) aborda los aspectos
                                    éticos, legales y sociales del uso de las Tecnologías de la Información y la Comunicación
                                    (TIC).
                                </blockquote>
                                En [5] se encuentra que:
                                <blockquote>
                                    El concepto de ética de la información abarca todas las preguntas éticas relacionadas con la
                                    digitalización, es decir con la reconstrucción de todos los fenómenos posibles no
                                    restringidos estos al actuar humano y concebidos en el código 0 y 1 como información
                                    digital, así como también con respecto a los problemas éticos relacionados por el
                                    intercambio, la combinación y el uso de dicha información incluyendo su comunicación a
                                    través del medio digital.
                                </blockquote>
                                <br> Le invitamos a examinar el código de ética para Bibliotecarios y otros trabajadores de la
                                información: <a target="_blank"
                                    href="https://www.ifla.org/files/assets/faife/codesofethics/spanishcodeofethicsfull.pdf">
                                    Código de ética de la ifla para bibliotecarios y otros trabajadores de la información</a> <br><br>
                                A continuación le compartimos un artículo sobre la ética de la información que lo puede
                                ayudar a profundizar en el tema: <a
                                    href="http://isegoria.revistas.csic.es/index.php/isegoria/article/view/2/2"
                                    target="_blank">Ética de la información: su naturaleza y alcance</a> <br><br>
                                Lo invitamos a investigar acerca de la libertad de prensa en el índice de Freedom House
                                (www.freedomhouse.org) o en el índice mundial de libertad de prensa de Reporteros Sin
                                Fronteras, o una medida regional relevante, tal como el Afrobarómetro de los medios y
                                determinar la calificación que su país ha recibido. Esto le permitirá [1]:<br>
                                <blockquote>
                                    <ul>
                                        <li>Explicar si está o no de acuerdo con la calificación</li>
                                        <li>identificar y explicar los factores o variables que han afectado a la calificación
                                            de la libertad de prensa de su país. Los criterios cubiertos en estos índices
                                            incluyen:</li>
                                        <ol>
                                            <li>Grado de libertad de impresión, transmisión y medios en línea (por Ej. Internet)
                                            </li>
                                            <li>Ambiente legal para los medios</li>
                                            <li>Presiones políticas que influyen en los reportajes</li>
                                            <li>Factores económicos que afectan al acceso de la información</li>
                                            <li>Concentración de la propiedad de los medios</li>
                                            <li>Ataques directos a los periodistas y a los medios</li>
                                            <li>Presencia de monopolio estatal en los medios</li>
                                            <li>Presencia de la censura y la auto-censura en los medios</li>
                                            <li>Dificultades de los reporteros extranjeros</li>
                                        </ol>
                                    </ul>
                                    Existen muchas organizaciones en el mundo que hacen campaña para defender a los periodistas,
                                    algunas de estas son internacionales como Media Support en Dinamarca, Artículo 19 en Londres
                                    y el Comité para Proteger a los Periodistas en Nueva York
                                </blockquote>
                            </p>
                        </div>
                        <h4 class="subtitle">Bibliografía:</h4>
                        <p>[1] UNAOC, UNESCO, "Unidad 2: Libertad, ética y responsabilidad", en <em>Media Information Literacy for Teachers</em>, 2020.
                            <a href="http://unesco.mil-for-teachers.unaoc.org/modules/modulo-2-entendiendo-las-noticias-los-medios-y-la-etica-de-informacion/unidad-2-libertad-etica-y-responsabilidad/?lang=es" target="_blank" rel="noopener noreferrer">
                            http://unesco.mil-for-teachers.unaoc.org/modules/modulo-2-entendiendo-las-noticias-los-medios-y-la-etica-de-informacion/unidad-2-libertad-etica-y-responsabilidad/?lang=es</a>
                        </p>
                        <p>[2] Circulo de Periodistas de Bogotá, "Conozca el Código de Ética del Círculo de Periodistas de Bogotá", en <em>Ética Segura</em>
                            , 2011. <a href="http://eticasegura.fnpi.org/2011/12/27/conozca-el-codigo-de-etica-del-circulo-de-periodistas-de-bogota/" target="_blank">
                            http://eticasegura.fnpi.org/2011/12/27/conozca-el-codigo-de-etica-del-circulo-de-periodistas-de-bogota/</a></p>
                        <p>[3] López, A, "¿Qué códigos de ética periodística existen en Latinoamérica?", en <em>Consultorio ético</em>, 2011. <a target="_blank" 
                            href="https://fundaciongabo.org/es/consultorio-etico/consulta/647">https://fundaciongabo.org/es/consultorio-etico/consulta/647</a></p>
                        <p>[4] UNESCO, "Ética de la información", 2019. <a href="https://es.unesco.org/themes/etica-informacion" target="_blank">
                            https://es.unesco.org/themes/etica-informacion</a></p>
                        <p>[5] Capurro, R, "Ética de la Información. Un Intento de Ubicación", en <em>Códice</em>, 2005. <a target="_blank"
                            href="http://www.capurro.de/colombia.htm">http://www.capurro.de/colombia.htm</a></p>
                    </div>
                </div>
            </div>
            <br>
            <center>
                <a href="<?php echo base_url();?>modulo2/unidad2/contenidos" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo2/unidad2/actividad2" class="btn btn_navegacion">Siguiente</a>
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