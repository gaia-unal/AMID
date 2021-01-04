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
                <ul class="list-group-item">
                    <a href="<?php echo base_url();?>modulo1/unidad1"
                        class="list-group-item list-group-item-action bg-light">Unidad 1</a>
                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo1/unidad2" class="list-group-item list-group-item-action bg-light">Unidad 2</a>
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo1/unidad2/contenidos"
                                    class="list-group-item">Contenidos</a>
                                <a href="<?php echo base_url(); ?>modulo1/unidad2/evaluacion"  class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>
                    <a href="<?php echo base_url();?>modulo1/unidad3" class="list-group-item">Unidad 3</a>
                    <a href="<?php echo base_url();?>modulo1/unidad4" class="list-group-item">Unidad 4</a>
                </ul>
                <a href="<?php echo base_url();?>modulo2" class="list-group-item list-group-item-action bg-light">Módulo 2</a>
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo1">Módulo 1</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo1/unidad2">Unidad 2</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contenido</li>
                </ol>
            </nav>
            <div class="contenedor">
                <center>
                    <h1 class="first_title"><br>Unidad 2: AMI y la participación cívica</h1>
                </center>
                <?php $this->session->set_userdata('ruta','modulo1/unidad2/actividad1');?>
                <div class="card mt-4">
                    <div class="card-body">
                        <p class="card-text">
                            Segun [1]:
                            <blockquote>
                                El periodismo y las fuentes de los medios son muy importantes en cada sociedad. Sin los periodistas y
                                las noticias de los medios no habría “una ventana al mundo” –sabríamos muy poco de lo que sucede en
                                nuestras comunidades o en el mundo más allá de una inmediata experiencia. <br>
                                Existen varios factores claves que las prácticas periodísticas deben respetar y que                                    los ciudadanos esperan del periodismo: <br>
                                <ul>
                                    <li><strong>Organizar el conocimiento:</strong> hacer que la información caótica esté organizada y sea
                                        comprensible, e ir detrás de las posiciones oficiales para destapar intereses especiales.</li>
                                    <li><strong>Verdad:</strong> que las fuentes de información en los medios, estén
                                        claramente identificadas para que los ciudadanos puedan juzgar la relevancia, la
                                        fiabilidad y los posibles prejuicios; se deberían anotar las preguntas importantes que no han sido
                                        respondidas a la espera de un seguimiento, en caso de que existiesen controversias.</li>
                                    <li><strong>Interés público:</strong> en el trabajo que realizan los periodistas
                                        pueden hacer mucho para defender el interés público al dotar a los ciudadanos de la información
                                        necesaria para que puedan tomar parte en los asuntos públicos.</li>
                                    <li><strong>Independencia:</strong> debe estar claro que el debate ciudadano
                                        debe realizarse más allá de los sesgos personales; los comentaristas deben examinar “los dos lados de
                                        la moneda” (es decir, discutir las ideas con las cuales ellos están de acuerdo o en desacuerdo);
                                        los periodistas deben demostrar un pensamiento independiente en su trabajo.</li>
                                    <li><strong>Foro de la crítica pública y la resolución de problemas:</strong>
                                        los medios deberían ofrecen varios canales para la interacción del público (cartas, correo
                                        electrónico, teléfonos de contacto o un foro público); los ciudadanos también esperan que los medios
                                        les den acceso a espacios o tiempo-aire para tener conversaciones en su propio “idioma” con sus
                                        colegas ciudadanos; más aún, ellos esperan que esté presente una amplia representación de las visiones y
                                        valores en la cobertura de las noticias.</li>
                                    <li><strong>Rendición de cuentas:</strong> los medios deben monitorear todos los
                                        ejercicios de poder, no sólo de los gobiernos, sino también de importantes entidades públicas y
                                        privadas; al hacer que los poderosos rindan cuentas, los medios pueden proveer de información al
                                        pensamiento comunitario.
                                    </li>
                                    <li><strong>Noticias proporcionales y relevantes:</strong> los ciudadanos necesitan un conocimiento
                                        oportuno de los temas importantes y tendencias; los informes no deben exagerar o subestimar la
                                        verdadera naturaleza de las amenazas o riesgos.</li>
                                    <li><strong>Equilibrando la privacidad y el derecho a saber:</strong> los profesionales de los medios encuentren un equilibrio entre el derecho
                                        público a saber y el derecho personal a la privacidad (cf. Fackson Banda, UNESCO, 2009)</li>
                                </ul>
                            </blockquote>
                            <i class="fas fa-info info-icon"></i>   Para ver un resumen de los factores, pulse las flechas <br><br>
                            <div>
                                <center>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <button  class="btn-arrow" onclick="plusDivs(-1)"><i class="fas fa-angle-left"></i></button>
                                        </div>
                                        <div class="col-md-8">
                                            <table width="80%" border="1" bordercolor="#0000FF" cellspacing="10" cellpadding="10">
                                                <tr>
                                                    <img class="mySlides" src="<?php echo base_url();?>public/assets/modulos/mod1/img/accesoInformacion.png">
                                                    <img class="mySlides"src="<?php echo base_url();?>public/assets/modulos/mod1/img/foroCritica.png">
                                                    <img class="mySlides"src="<?php echo base_url();?>public/assets/modulos/mod1/img/independencia.png">
                                                    <img class="mySlides"src="<?php echo base_url();?>public/assets/modulos/mod1/img/interesPublico.png">
                                                    <img class="mySlides"src="<?php echo base_url();?>public/assets/modulos/mod1/img/noticias.png">
                                                    <img class="mySlides"src="<?php echo base_url();?>public/assets/modulos/mod1/img/organizarConocimiento.png">
                                                    <img class="mySlides"src="<?php echo base_url();?>public/assets/modulos/mod1/img/rendicionCuentas.png">
                                                    <img class="mySlides"src="<?php echo base_url();?>public/assets/modulos/mod1/img/verdad.png">
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn-arrow" onclick="plusDivs(1)"> <i class="fas fa-angle-right"></i></button>
                                        </div>
                                    </div>
                                    <p class="card-text titImg">Fig. Enfoques pedagógicos y actividades.</p>
                                </center>
                            </div>
                            <br><br>                   
                        </p>
                        <h4 class="subtitle">Acceso a la información</h4><br>   
                        <p class="card-text">Se menciona en [1] que: </p>    
                        <blockquote>
                            El acceso a la información es esencial tanto para la democracia como para el desarrollo. Los ciudadanos
                            tienen el derecho a la libertad de palabra y el derecho de acceso a la información pública. Esta
                            información es también propiedad de los ciudadanos. Los medios y los otros proveedores de información
                            como bibliotecas, archivos y el Internet deben ayudar a garantizar la libertad de información para cada
                            ciudadano. <br>
                            El papel de los medios y de los otros proveedores de información cambia con el rápido esparcimiento de
                            las tecnologías como las tecnologías de información y comunicación (TICs). <br>
                            Las TICs proveen acceso a la información y al conocimiento casi instantáneamente. Los medios y los
                            proveedores de información como las bibliotecas, archivos e Internet, son capaces de proveer nuevos
                            servicios y se están convirtiendo en más que centros de recursos o proveedores de información. Estas
                            nuevas posibilidades ofrecen nuevas oportunidades para cubrir las necesidades de los ciudadanos que
                            tengan un aprendizaje a lo largo de la vida que sea eficiente y eficaz, y cubra las necesidades de
                            investigación y entretenimiento, y conecte a las comunidades. <br>
                            Los medios y los proveedores de información tienen varias funciones claves, que incluyen: <br><br>
                            <ul>
                                <li>Proveer acceso abierto a las fuentes de información sin ninguna restricción
                                    racial, de género, ocupacional o religiosa; en especial que las bibliotecas públicas provean el
                                    libre acceso.</li>
                                <li>Proteger la privacidad de los lectores y la confidencialidad en términos del
                                    contenido consultado en lo local o en línea.</li>
                                <li>Proveer acceso a las fuentes de información diversas y plurales, basándose en el
                                    profesionalismo y sin sesgos políticos, religiosos o morales.</li>
                                <li>Recolectar y preservar la información para futuras generaciones</li>
                            </ul>
                        </blockquote>
                        <h4 class="subtitle">Bibliografía:</h4>
                        <p>[1] UNAOC, UNESCO, "Unidad 2: AMI y la participación cívica", 
                            en <em>Media Information Literacy for Teachers</em>, 2020. <a target="_blank" rel="noopener noreferrer" 
                            href="http://unesco.mil-for-teachers.unaoc.org/modules/modulo-1/unidad-2-ami-y-la-participacion-civica/?lang=es"> 
                            http://unesco.mil-for-teachers.unaoc.org/modules/modulo-1/unidad-2-ami-y-la-participacion-civica/?lang=es</a></p>
                    </div>
                </div>
            </div>
            <br>
            <center>
                <a href="<?php echo base_url();?>modulo1/unidad2/contenidos" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo1/unidad2/actividad2" class="btn btn_navegacion">Siguiente</a>
            </center>
            <?php $this->load->view('initial/paginacion');?>
            <p class="final_contenido">Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/">
                    Licencia Creative Commons Reconocimiento Compartir igual 4.0</a></p>
            <br>
        </div>
    </div>
    <?php $this->load->view('initial/footer');?>
    <?php $this->load->view('initial/scriptGenerico');?>
    <script src="<?php echo base_url();?>public/assets/modulos/mod1/js/und2script.js"></script>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>