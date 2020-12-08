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

                <ul class="list-group-item">

                    <a href="<?php echo base_url();?>modulo5/unidad1"
                        class="list-group-item list-group-item-action bg-light">Unidad 1</a>

                    <div class="btn-group dropright">


                        <a href="<?php echo base_url();?>modulo5/unidad2"
                            class="list-group-item list-group-item-action bg-light">Unidad 2</a>

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo5/unidad2/contenidos"
                                    class="list-group-item">Contenidos</a>
                                <a href="<?php echo base_url();?>modulo5/unidad2/evaluacion"
                                    class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>



                    <a href="#" class="list-group-item">Unidad 3</a>
                    <a href="#" class="list-group-item">Unidad 4</a>
                    <a href="#" class="list-group-item">Unidad 5</a>

                </ul>


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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo5">Módulo 5</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo5/unidad2">Unidad 2</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actividad 1</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 2: Anuncios de bien público (ABP)</h1>
                    <?php echo form_open('modulo5/unidad2/evaluacion');$this->session->set_userdata('idAct','m5u2a1'); ?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="contenido">
                            <p class="card-text">
                                Periódicamente los gobiernos desean comunicarse con sus ciudadanos a través de los
                                medios
                                para alcanzar algún objetivo de política pública. Un ejemplo clásico son las campañas de
                                salud pública para limitar la propagación del SIDA y el VIH, campañas para incentivar a
                                los
                                habitantes que usen redes anti-mosquito para reducir la malaria o campañas de
                                alfabetización. Estos se conocen como <strong>de servicio público (ASP)</strong>.
                            </p>
                            <h4 class="subtitle">Lineamientos para un anuncio de servicio público</h4>
                            <p class="card-text">
                                Adaptado de Think Literacy www.edu.gov.on.ca/eng/…/thinkliteracy/library.html <br>
                            <ul>
                                <li><strong>Concepto:</strong> Diseñado por usted para alcanzar los objetivos de la
                                    organización/cliente y para explicar el propósito o la función de la campaña. </li>
                                <li><strong>Estrategias:</strong> Creativas (una explicación de sus ideas, incluyendo la
                                    descripción de cómo se pueden alcanzar los objetivos) y técnicas (qué medios se
                                    pueden utilizar, de qué forma, para alcanzar los objetivos del cliente). </li>
                                <li><strong>Audiencia:</strong> ¿Quién es su audiencia seleccionada? ¿A quién tiene que
                                    llegar? De una descripción detallada de su audiencia (por Ej. edad, género, raza,
                                    clase, nacionalidad, qué nivel de familiaridad tienen con esta forma de medio,
                                    etc.).</li>
                                <li><strong>Texto:</strong> El mensaje general de la campaña tiene que estar vinculado
                                    con los objetivos y con la estrategia creativa mencionada anteriormente (es decir,
                                    información clave que se incluye, el punto de vista, la trama, las imágenes de
                                    hombres y mujeres, el lenguaje, las costumbres y el comportamiento de los
                                    personajes). Considere el uso de afirmaciones específicas o un recurso emocional.
                                </li>
                                <li><strong>Producción: </strong>Un bosquejo de lo que se va a producir. Esto está
                                    vinculado con su estrategia técnica. Tome en cuenta las ubicaciones, trabajo de
                                    cámara, sonido, doblaje, efectos especiales, gráficas, animación, etc. Decida qué
                                    tecnologías pueden transmitir el mensaje que usted desea y complementen su mensaje.
                                </li>
                                <li><strong>Componente de la industria/negocio:</strong> Explique y defienda sus
                                    elecciones de dónde y cuándo usted quiere pasar el ASP. También un ASP de
                                    televisión, radio o Internet debe incluir los elementos de publicidad que se
                                    presentan en estos medios, como un eslogan/ jingle, recursos específicos o
                                    afirmaciones, un guión que incluya el escenario apropiado, accesorios y vestimenta,
                                    un storyboard que incluya un video adecuado y/o direcciones de audio. </li>
                            </ul>
                            <ul>Visite uno de los sitios de servicio público: (Estos sólo se incluyen como fuentes de
                                muestra para ilustrar la actividad que se describe a continuación. Se pueden utilizar
                                otras fuentes, apropiadas para las diversas regiones, en su lugar)
                                <li><a href="http://www.un.org.za/public-service-announcement-on-the-effects-of-drugs"
                                        target="_blank">United Nations in South Africa</a></li>
                                <li><a href="http://www.unodc.org/unodc/en/human-trafficking/human-trafficking-public-serviceannouncements.html"
                                        target="_blank">United Nations Office on Drugs and Crime</a></li>
                            </ul>
                            <ol>
                                <li>Explique los efectos que se crean a través del uso de la toma de cámara y los
                                    ángulos. Explique cómo se puede utilizar el sonido para transmitir un significado
                                </li>
                                <textarea name="preg1" style="width: 80%;" rows="6" minlength="1" maxlength="300"
                                    onkeypress="return check(event)" required placeholder="Escriba su respuesta aquí"
                                    spellcheck="true"></textarea>
                                <li>Desarrolle un plan original de un ASP para un tema social o cultural importante.
                                    Haga una lluvia de ideas de los posibles temas y utilícelo como la base para un ASP.
                                    Hable sobre el propósito y la audiencia. Esta discusión a su vez, ayudará a dar
                                    forma al mensaje que se quiere transmitir. Tome en cuenta la información importante
                                    y el mensaje principal que tienen que transmitir</li>
                                <textarea name="preg2" style="width: 80%;" rows="6" minlength="1" maxlength="300"
                                    onkeypress="return check(event)" required placeholder="Escriba su respuesta aquí"
                                    spellcheck="true"></textarea>
                            </ol>
                            Ahora tome en cuenta a quién usted quiere llegar y cómo. La información y el mensaje deben
                            estar dirigidos a una audiencia específica En un papel, describa un concepto y desarrolle
                            una lista de estrategias que se pueden utilizar para crear un ASP. Esto puede incluir
                            estrategias creativas (el contenido de las ideas de un ASP) y las estrategias técnicas (el
                            componente de producción). <br><br>
                            <ol>
                                <li value="3">Haga un diseño preliminar de un ASP, incluyendo una oración que describa
                                    el concepto, las estrategias técnicas y creativas y la audiencia.</li>
                                <textarea name="preg3" style="width: 80%;" rows="6" minlength="1" maxlength="300"
                                    onkeypress="return check(event)" required placeholder="Escriba su respuesta aquí"
                                    spellcheck="true"></textarea>
                            </ol>
                            </p>
                        </div>
                    </div>
                </div>



            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo5/unidad2/contenidos" class="btn btn_navegacion">Anterior</a>
                <button id="btn-siguiente" class="btn btn_navegacion" name="submit" type="submit">Siguiente</button>
            </center>
            <?php echo form_close(); ?>
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
    <script src="<?php echo base_url();?>public/assets/modulos/mod"></script>



    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


</body>

</html>