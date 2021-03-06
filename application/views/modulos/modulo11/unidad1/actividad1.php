<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AMID</title>

    <?php $this->load->view('initial/linkGenerico');?>
    <link href="<?php echo base_url();?>public/assets/modulos/mod11/css/estilo.css" rel="stylesheet">
    <link href="<?php echo base_url();?>public/assets/modulos/mod1/css/partes.css" rel="stylesheet">
</head>

<body>
    <link href="<?php echo base_url();?>public/assets/css/style.css" rel="stylesheet">
    <?php $this->load->view('initial/nav');?>



    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">

            <div class="list-group list-group-flush">

                <a href="<?php echo base_url();?>modulo1" class="list-group-item list-group-item-action bg-light"><i
                        class="dropdown-menu"></i>Módulo 1<span class="arrow"></span></a>


                <a href="<?php echo base_url();?>modulo2" class="list-group-item list-group-item-action bg-light">
                    Módulo 2</a>

                <a href="<?php echo base_url();?>modulo3" class="list-group-item list-group-item-action bg-light">
                    Módulo 3</a>

                <a href="<?php echo base_url();?>modulo4" class="list-group-item list-group-item-action bg-light">
                    Módulo 4</a>

                <a href="<?php echo base_url();?>modulo5" class="list-group-item list-group-item-action bg-light">
                    Módulo 5</a>

                <a href="<?php echo base_url();?>modulo6" class="list-group-item list-group-item-action bg-light">
                    Módulo 6</a>

                <a href="<?php echo base_url();?>modulo7" class="list-group-item list-group-item-action bg-light">
                    Módulo 7</a>

                <a href="<?php echo base_url();?>modulo8" class="list-group-item list-group-item-action bg-light">
                    Módulo 8</a>
                <a href="<?php echo base_url();?>modulo9" class="list-group-item list-group-item-action bg-light">
                    Módulo 9</a>
                <a href="<?php echo base_url();?>modulo10" class="list-group-item list-group-item-action bg-light">
                    Módulo 10</a>
                <a href="<?php echo base_url();?>modulo11" class="list-group-item list-group-item-action bg-light">
                    Módulo 11</a>

                <ul class="list-group-item">

                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo11/unidad1"
                            class="list-group-item list-group-item-action bg-light">Unidad 1</a>

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo11/unidad1/contenidos"
                                    class="list-group-item">Contenidos</a>

                            </ul>
                        </div>
                    </div>

                    <a href="<?php echo base_url();?>modulo11/unidad2" class="list-group-item">Unidad 2</a>
                    <a href="<?php echo base_url();?>modulo11/unidad3" class="list-group-item">Unidad 3</a>
                    <a href="<?php echo base_url();?>modulo11/unidad4" class="list-group-item">Unidad 4</a>
                </ul>


                <a href="<?php echo base_url();?>modulo12" class="list-group-item list-group-item-action bg-light">
                    Módulo 12</a>

            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom d-lg-none">
                <button class="btn " id="menu-toggle"><i class="fas fa-align-justify"></i></button>

            </nav>


            <!--breadcrumbs-->

            <nav class="bread-style" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <<li class="breadcrumb-item"><a href="<?php echo base_url();?>inicio/main">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo11">Módulo 11</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo11/unidad1">Unidad 1</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contenido</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 1: Propiedad de los Medios en el Mundo Global Actual</h1>
                    <?php $this->session->set_userdata('ruta','modulo11/unidad1/actividad1'); ?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="contenido">
                            <div id="parte1" style="display:block;">
                                <p class="card-text">

                                <p>Según la UNESCO [1]</p>

                                “El monopolio de los medios, así como el control del estado, puede representar una
                                gran amenaza para la diversidad y el pluralismo de los medios, y por tanto para la
                                libertad de expresión. La regulación de la competencia es una parte importante para
                                restringir los monopolios como también lo es el profesionalismo y la independencia
                                periodística. La diversidad de puntos de vista también se alimenta a través de una
                                variedad de formas de propiedad (público, privado y sin fines de lucro), así como
                                por la disponibilidad de diferentes tipos de medios (impresos, radio, televisión,
                                Internet, etc.) Para dialogar: es esencial tener la diseminación más amplia posible
                                de información que provenga de fuentes diversas y antagónicas para el bienestar de
                                las personas. Mientras que los diferentes propietarios de periódicos y aquellos que
                                hacen transmisiones generalmente critican los contenidos de los otros, la
                                concentración de los medios bajo un propietario común puede prevenir cualquier tipo
                                de crítica mutua y dar como resultado la auto-promoción.”
                                </p>
                            </div>
                            <div id="parte2" style="display:none;">
                                <p class="card-text">
                                <h4 class="subtitle">Cómo la propiedad de los medios y el control afecta a las políticas
                                    de medios,
                                    a los procesos, a los contenidos y a la transmisión</h4><br>

                                <p>Según Bernadette Califano[2]</p>
                                En este sentido, Rodrigo Alsina afirma que la producción de la noticia es un
                                proceso que se inicia con un acontecimiento. Pero no todo acontecimiento se
                                transforma en noticia, ni toda noticia representa un acontecimiento para la
                                sociedad. Entender esto es importante para comprender una de las aristas de
                                la relación entre medios de comunicación y sociedad: “los medios utilizan como
                                materia prima unos acontecimientos sociales y, a su vez, construyen y transmiten
                                un producto que puede llegar a convertirse en acontecimiento social”. Por su parte,
                                Borrat sostiene que cada medio fabrica “una actualidad periodística que le es propia,
                                característica, autónoma e irrepetible”,porque supone un proceso de producción en
                                función de decisiones, acciones, recursos y señas de identidad propias de cada
                                organización informativa.<br><br>
                                En La fabricación de la noticia, Fishman demostró el modo en que los medios de
                                comunicación no sólo influyen en nuestra percepción del mundo, sino que también
                                pueden “construir realidades”. El autor explicó de qué modo una ola de crímenes
                                producida contra ancianos en Nueva York fue un hecho construido por los medios de
                                comunicación, no porque la hayan “inventado”, sino porque fueron “los instrumentos
                                en virtud de los cuales esa ola de crímenes fue montada”, al otorgar “una forma y
                                un contenido determinantes a todos los incidentes sobre los que informaron”. En
                                este caso, los medios de comunicación crearon un acontecimiento (“la ola de crímenes”)
                                que trascendió una serie de hechos individuales (algunos crímenes de ancianos),
                                que adquirió presencia en la conciencia pública y organizó la percepción de las
                                personas (temor, inseguridad) acerca de un aspecto de la comunidad en que vivían.
                                Por lo tanto, la “ola de crímenes” fue real por las consecuencias que provocó
                                (mudanzas a otro barrio, mayor número de agentes de la policía en las calles,
                                implementación de leyes contra el delito, etc.), pese a que las estadísticas
                                policiales de la época señalaban una disminución en el número de delitos cometidos
                                contra ancianos en comparación con otros años. De esta forma, en el proceso de
                                producción de las noticias se crean nuevos acontecimientos que adquieren el carácter
                                de “sucesos públicos” al ser transmitidos por los medios institucionalizados de
                                comunicación. (Califano, 2015)
                                </p>
                            </div>
                            <div id="parte3" style="display:none;">
                                <p class="card-text">
                                <h4 class="subtitle">Cómo las convenciones internacionales existentes y las
                                    leyes/políticas nacionales
                                    dan forma o regulan la estructura de la propiedad de medios </h4>

                                <p>Davis y Owen dicen que [3]</p>

                                Da clic en las imagenes para verla más grande.
                                <div><a href="<?php echo base_url();?>public/assets/modulos/mod11/img/2-img1.png"
                                        target="_blank" rel="noopener noreferrer"><img
                                            src="<?php echo base_url();?>public/assets/modulos/mod11/img/2-img1.png"
                                            alt="" class="noti"></a></div>
                                <br>
                                <div><a href="<?php echo base_url();?>public/assets/modulos/mod11/img/2-img2.png"
                                        target="_blank" rel="noopener noreferrer"><img
                                            src="<?php echo base_url();?>public/assets/modulos/mod11/img/2-img2.png"
                                            alt="" class="noti"></a></div>
                                </p>
                            </div>
                            <div id="parte4" style="display:none;">
                                <p class="card-text">
                                <h4 class="subtitle">Funcionamiento de la economía global, y el nacimiento de las nuevas
                                    tecnologías, y
                                    cómo estas afectan a las estructuras y a los patrones de la propiedad de los medios.
                                </h4>
                                Los observadores políticos y los eruditos contemplaron la llegada de un «populismo de
                                los nuevos medios» que implicaría a los ciudadanos desinteresados y facilitaría un papel
                                más activo al público en el discurso político. Los nuevos medios tenían el potencial de
                                mejorar el acceso de la gente a la información política, facilitar un discurso político
                                de mayor alcance y fomentar la participación. Al principio, el público respondió
                                positivamente a los canales de comunicación más accesibles, llamando a programas de
                                opinión,
                                debate y entrevistas políticos y participando en foros de discusión de los ayuntamientos
                                por
                                internet. Sin embargo, el verdadero potencial populista de los nuevos medios se vio
                                socavado
                                por el hecho de que el sistema de los nuevos medios políticos evolucionó anárquicamente,
                                sin
                                principios rectores ni objetivos. Estaba muy dominado por los intereses comerciales y
                                por
                                aquellos que ya ocupaban puestos privilegiados en la política y la industria de la
                                información. El entusiasmo público acabó dando lugar a la ambivalencia y el cinismo,
                                especialmente a medida que la novedad de la primera fase de los nuevos medios
                                desapareció
                                (Davis y Owen, 1998).<br><br>
                                La siguiente fase en el desarrollo de los nuevos medios se desplegó junto con la
                                aplicación
                                a la política de tecnologías emergentes de comunicación digital que hicieron posible
                                canales
                                completamente nuevos y revolucionarios sistemas de envío de contenidos. El entorno
                                digital y
                                las plataformas a las que sostiene transformaron profundamente el sistema de los medios
                                políticos. Empezando a mediados de la década de 1990, nuevas plataformas de medios
                                políticos
                                progresaron rápidamente desde la rudimentaria página web de «folletos» sin capacidad de
                                interacción usada por la campaña presidencial de Bill Clinton en 1992 hasta abarcar
                                sitios
                                web con características interactivas, foros de discusión, blogs, plataformas online para
                                la
                                recaudación de fondos, páginas web para el reclutamiento de voluntarios y reuniones. El
                                público se implicó más en la producción y distribución real de contenidos políticos. Los
                                «periodistas ciudadanos» estaban siendo testigos de eventos que los periodistas
                                profesionales no cubrían. La gente no perteneciente a las élites aportaba sus puntos de
                                vista sobre cualquier asunto a los propios líderes políticos. Los miembros del público
                                también eran responsables de la grabación y la publicación de vídeos que podían volverse
                                virales e influir en el desarrollo de los acontecimientos (Wallsten, 2010). En 2006, por
                                ejemplo, la campaña para la reelección del senador republicano George Allen se vio
                                arruinada
                                por un vídeo viral en el que utilizaba el término «macaco» (un insulto racista) para
                                referirse a una joven de origen indio que estaba asistiendo a su mitin electoral (Craig
                                y
                                Shear, 2006).
                                </p>
                            </div>
                            <br>
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
                        </div>
                        <br><br>

                        <h3 class="subtitle">Bibliografía</h3>
                        <p>[1] UNAOC,UNESCO,"Unidad 11: MEDIOS, TECNOLOGÍA Y EL MUNDO GLOBAL (GLOBAL VILLAGE), en
                            <i>"Media Information Literacy for Teachers </i>, 2020"
                            http://unesco.mil-for-teachers.unaoc.org/modules/module-11/?lang=es
                        </p>


                        <p>[2] Califano, Bernadette. (2015). Los medios de comunicación, las noticias y su influencia
                            sobre el sistema político. Revista mexicana de opinión pública, (19), 61-78.
                            https://doi.org/10.1016/j.rmop.2015.02.001</p>


                        <p>[3] W. H. Dutton, “New Media and American Politics. By Richard Davis and Diana Owen. Oxford
                            and New York: Oxford University Press, 1998. 304p. $45.00 cloth, $19.95 paper.,” American
                            Political Science Review, vol. 93, no. 4, pp. 973–974, 1999.</p>
                    </div>
                </div>



            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo11/unidad1/contenidos" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo11/unidad1/actividad2" class="btn btn_navegacion">Siguiente</a>
            </center>
            <?php $this->load->view('initial/paginacion');?>


            <p class="final_contenido">Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/">
                    Licencia Creative
                    Commons
                    Reconocimiento Compartir igual 4.0</a></p>
            <br>
            <!-- /#page-content-wrapper -->
        </div>

    </div>


    <?php $this->load->view('initial/footer');?>
    <?php $this->load->view('initial/scriptGenerico');?>
    <script src="<?php echo base_url();?>public/assets/modulos/mod11/js/arrows.js"></script>



    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


</body>

</html>