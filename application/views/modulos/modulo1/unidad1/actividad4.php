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
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">

            <div class="list-group list-group-flush">

                <a href="<?php echo base_url();?>modulo1" class="list-group-item list-group-item-action bg-light"><i
                        class="dropdown-menu"></i>Módulo 1<span class="arrow"></span></a>
                <ul class="list-group-item">
                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo1/unidad1" class="list-group-item list-group-item-action bg-light">Unidad 1</a>
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item ">
                                <a href="<?php echo base_url();?>modulo1/unidad1/temas"
                                    class="list-group-item">Temas</a><a href="<?php echo base_url();?>modulo1/unidad1/contenidos"
                                    class="list-group-item">Contenido</a>
                                <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>


                    <a href="#" onclick="inactivo(1)"
                        class="list-group-item list-group-item-action bg-light inactive">Unidad 2</a>
                    <a href="#" onclick="inactivo(1)"
                        class="list-group-item list-group-item-action bg-light inactive">Unidad 3</a>
                    <a href="#" onclick="inactivo(1)"
                        class="list-group-item list-group-item-action bg-light inactive">Unidad 4</a>
                </ul>


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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>inicio/main">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo1">Módulo 1</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo1/unidad1">Unidad 1</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contenido</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 1: Comprender la alfabetización mediática e informacional: Una
                        orientación</h1>
                </center>
                <br>
                
                <div class="card mt-4">
                    <div class="card-body">
                    <h4 class="subtitle">Los múltiples papeles de los medios</h4><br>
                        <div class="contenido">
                            <p class="card-text">
                              
                            
                                La tecnología está tan presente en nuestras vidas que parece que siempre ha estado con
                                nosotros. Mis hijos, de siete y ocho años, no han vivido otra cosa que en un mundo
                                tecnológico, controlado por máquinas y aparatos electrónicos y donde la información, de
                                un lado a otro del mundo, es inmediata. <br><br>
                                Para ellos, es difícil de comprender que antes no había televisión, ni teléfono y que el
                                simple hecho de hablar con sus primos a través de Skype, donde se pueden ver y hablar en
                                directo con solo apretar un botón del iPad o el teléfono, algunos años atrás era poco
                                menos que impensable. <br>
                                Los avances tecnológicos llevan consigo un desarrollo de los medios de información; por
                                lo tanto, una sociedad como la nuestra necesita una educación actualizada acorde con los
                                tiempos que vivimos, con medios tecnológicos adecuados; pero, sobre todo, con la
                                preparación actualizada del profesorado. Todavía, nos encontramos a muchos docentes en
                                nuestros centros educativos que son reticentes a utilizar las tecnologías de la
                                información y la comunicación en el aula, bien porque no creen en su utilidad, bien
                                porque son «analfabetos digitales». <br><br>
                                A todos se nos ha dado el caso, en más de una ocasión, que son nuestros propios hijos o
                                alumnos los que nos solucionan problemas técnicos con el móvil, tableta u ordenador. O
                                son los que, en muchas ocasiones, nos indican los pasos a seguir a la hora de usar o
                                descargar cualquier programa. Partiendo de esto, lo que está claro es que no podemos dar
                                la espalda a la realidad y la Educación del Siglo XXI tiene que ir en consonancia con la
                                sociedad del S. XXI. <br><br>
                                La UNESCO en su Programa de formación en alfabetización mediática e informacional
                                destinado a los docentes habla de la alfabetización mediática e informacional, que une
                                diferentes disciplinas que hasta ahora estaban separadas. La alfabetización mediática e
                                informacional, según recoge este programa de la UNESCO: <br><br>
                                <center>
                                    <em>
                                    «Trata de dotar a los ciudadanos de los conocimientos básicos sobre el papel de los
                                    medios de comunicación y los dispositivos de información en las sociedades
                                    democráticas, siempre que esa función esté correctamente desempeñada y los
                                    ciudadanos puedan evaluar de forma crítica la calidad de los contenidos que se
                                    transmiten. Además, la alfabetización mediática e informacional abarca un conjunto
                                    de competencias y conocimientos esenciales para los ciudadanos del siglo XXI: les
                                    dará, en efecto, la posibilidad de participar en el sistema mediático, desarrollar
                                    su espíritu crítico y adquirir conocimientos a lo largo de la vida para participar
                                    en el desarrollo de la sociedad y convertirse en ciudadanos activos».</em>
                                </center>
                                <br>
                                Está muy de moda la enseñanza virtual o educación virtual que son las enseñanzas en las
                                que los estudiantes participan en un entorno digital donde llevan a cabo su formación
                                tutorizados online. En esta línea están los MOOC o cursos abiertos y masivos online,
                                donde instituciones públicas y privadas, sobre todo universidades, diseñan cursos
                                masivos donde participan miles y miles de estudiantes de distintas partes del mundo.
                                También están los cursos online, entre otros, donde se tiene un trato maás
                                personificado, con tutores con los que puedes interactuar. <br><br>
                                Lo que está claro es que los entornos de aprendizaje están cambiando a pasos
                                agigantados. Esto nos lleva a plantearnos la siguiente pregunta: ¿estará llegando el
                                final del centro educativo tal y como lo conocemos en la actualidad? No debemos olvidar
                                que la principal función del docente debe ser la de hacer de guía y acompañante del
                                alumnado en el proceso de enseñanza aprendizaje. Al docente no lo podrá sustituir ni la
                                enseñanza virtual ni los grandes avances de la tecnología en materia educativa. Por ello
                                pienso que en esta sociedad de la información y las TIC, la formación hay que
                                humanizarla, hacerla cercana al consumidor, de la información y la formación, y esto no
                                hay máquina que pueda suplirlo. <br><br>
                                La escuela debe estar abierta a los cambios que la sociedad de la información y la
                                comunicación nos está ofreciendo día a día. Aquí juegan un papel relevante las redes
                                sociales que también se están haciendo un hueco, no solo como visibilizadora de los
                                proyectos que se desarrollan en los centros sino como una manera de compartir y obtener
                                información de otros centros y tener un feedback actualizado de lo que estamos haciendo
                                en las aulas. <br><br>
                                Finalizo con el Artículo 19 de la Declaración Universal de Derechos Humanos que afirma:
                                <br><br>
                                <center><em>
                                    «Todo individuo tiene derecho a la libertad de opinión y de expresión; este derecho
                                    incluye el de no ser molestado a causa de sus opiniones, el de investigar y recibir
                                    informaciones y opiniones, y el de difundirlas, sin limitación de fronteras, por
                                    cualquier medio de expresión».</em>
                                </center>
                                <br>
                                Por ello, y así lo contempla la UNESCO, la alfabetización mediática e informacional es
                                fundamental para permitir a los pueblos de todo el mundo valerse de este derecho
                                fundamental y fomentar el diálogo social. <br><br>
                            
                            Santana Cabrera, E. (marzo 5 de 2018). la Alfabetización Mediática e Informacional. INED21.
                            Recuperado desde <a href="https://ined21.com/la-alfabetizacion-mediatica-e-informacional/"
                                target="_blank">https://ined21.com/la-alfabetizacion-mediatica-e-informacional/</a>

                            </p>
                            
                        </div>
                    </div>
                </div>

            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo1/unidad1/actividad3" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo1/unidad1/actividad5" class="btn btn_navegacion">Siguiente</a>
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
    

    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


</body>

</html>

