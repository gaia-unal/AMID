<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AMID</title>

    <?php $this->load->view('initial/linkGenerico');?>
    <link href="<?php echo base_url();?>public/assets/modulos/mod8/css/u1estilo.css" rel="stylesheet">
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

                <ul class="list-group-item">

                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo8/unidad1"
                            class="list-group-item list-group-item-action bg-light">Unidad 1</a>

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo8/unidad1/contenidos"
                                    class="list-group-item">Contenidos</a>
                                <a href="<?php echo base_url(); ?>modulo8/unidad1/evaluacion1" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>

                    <a href="<?php echo base_url(); ?>modulo8/unidad2" class="list-group-item">Unidad 2</a>
                    <a href="<?php echo base_url(); ?>modulo8/unidad3" class="list-group-item">Unidad 3</a>
                </ul>

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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo8">Módulo 8</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo8/unidad1">Unidad 1</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actividad 1</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 1: Conceptos y Aplicación de la Alfabetización Informacional</h1>
                    <?php echo form_open('modulo8/unidad1/actividad2');$this->session->set_userdata('idAct','m8u1a1'); $this->session->set_userdata('ruta','modulo8/unidad1/actividad1');?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <br>
                        <div class="contenido">
                            <p class="card-text">
                            <div id="parte1">
                                <h4 class="subtitle">Definición de información</h4> <br>
                                <ul>
                                <p>La UNESCO [1] define</p>
                                    <li>La información son datos que han sido recolectados, procesados e interpretados
                                        de manera que puedan ser presentados de forma que puede ser utilizada</li>
                                    <li>Información es aquella conciencia del hombre y contribuye a su conocimiento”
                                        (Blokdjik y Blokdijk, 1987) </li>
                                    <li>"Información son los datos que han sido procesados en una forma que tienen
                                        sentido para el receptor y que es real o de un valor percibido en acciones o
                                        decisiones del presente o futuro” (Davis y Olsen, 1984) </li>
                                </ul>
                                ¿Qué tienen estas definiciones en común? ¿Cree usted que son relevantes en el siglo XXI?
                                Busque otras definiciones de información. ¿Puede encontrar otras definiciones que dan
                                una descripción más amplia del término? <br>
                               <br> <textarea name="preg1" style="width: 100%;" rows="5" minlength="1" maxlength="200"
                                    onkeypress="return check(event)" placeholder="Escriba su respuesta aquí"
                                    spellcheck="true"></textarea>
                            </div>
                            <div id="parte2">
                                <h4 class="subtitle">Definición de alfabetización informacional</h4> <br>
                                <ul>
                                    <li>La alfabetización informacional es un derecho humano básico en el mundo digital”
                                        (Proclamación de Alejandría, 2005)</li>
                                    <li>La alfabetización informacional es un conjunto de competencias individuales
                                        necesarias para identificar, evaluar y utilizar el uso de la información en la
                                        forma más ética, eficiente y eficaz a través de todos los campos, ocupaciones y
                                        profesiones</li>
                                    <li>La alfabetización informacional posibilita que las personas hagan un buen uso de
                                        la
                                        tecnología de la información y el comunicación Defina qué es el pensamiento
                                        crítico,
                                        hable sobre el papel del análisis, síntesis y evaluación de la información en el
                                        pensamiento crítico. Presente un caso que tenga significado y valor en el
                                        contexto
                                        de la vida diaria de los estudiantes. Las etapas/elementos de la alfabetización
                                        informacional incluyen: </li>
                                    <ul>
                                        <li>Identificar/reconocer las necesidades de información</li>
                                        <li>Determinar las fuentes de información</li>
                                        <li>Localizar y buscar la información</li>
                                        <li>Analizar y evaluar la calidad de la información</li>
                                        <li>Organizar, almacenar y archivar la información</li>
                                        <li>Utilizar la información de manera ética, eficaz y eficiente</li>
                                        <li>Crear y comunicar el nuevo conocimiento Hable, en general, sobre las
                                            etapas/elementos de la alfabetización informacional (ver Woody Horton Jr.,
                                            2007 Understanding Information Literacy – a Primer, UNESCO, páginas 9-13 y
                                            Anexo B).
                                        </li>
                                    </ul>
                                </ul>
                                ¿Cómo identificaría usted y definiría de una manera precisa la información que se
                                necesita para resolver un problema o tomar una decisión? (por Ej. un consejo financiero
                                para
                                manejar un problema financiero) <br>
                                <br>   <textarea name="preg2" style="width: 100%;" rows="5" minlength="1" maxlength="200"
                                    onkeypress="return check(event)" placeholder="Escriba su respuesta aquí"
                                    spellcheck="true"></textarea>
                            </div>
                            <div id="parte3">
                                <h4 class="subtitle">Sociedad de la información y el conocimiento</h4>

                                Hay un gran cambio en la forma de cómo el mundo funciona ahora. Llevados por el rápido
                                crecimiento tecnológico, la información y el conocimiento se han convertido en el motor
                                de
                                la vida económica, social, política y cultural. De este fenómeno nace lo que se ha
                                denominado las sociedades de la información o del conocimiento. <br>
                                Lleve a cabo una investigación en su biblioteca o en Internet sobre el término “sociedad
                                de
                                la información”. Describa cuáles son los supuestos claves que subyacen a la sociedad de
                                la
                                información. Hable sobre la importancia de estos supuestos de vivir y aprender en la
                                edad en
                                la que vivimos ahora. Haga la misma tarea con el término “sociedad del conocimiento”.
                                <br>
                                ¿Cuáles son las similitudes que se perciben entre los dos términos, puede observar
                                alguna
                                similitud? <br>
                                <textarea name="preg3" style="width: 100%;" rows="5" minlength="1" maxlength="200"
                                    onkeypress="return check(event)" placeholder="Escriba su respuesta aquí"
                                    spellcheck="true"></textarea> <br><br>
                                ¿Cómo el nivel de la alfabetización informacional se ha cambiado/incrementado en
                                nuestras
                                vidas, particularmente en los niveles universitarios hasta los niveles de post-grado y
                                de
                                profesionales (en el contexto del aprendizaje a lo largo de la vida)? Hable sobre el
                                círculo
                                de producción de información y conocimiento. Analice el papel, las funciones y las
                                responsabilidades de los proveedores de información en la sociedad. <br>Escriba sobre
                                cómo
                                se desarrollan las destrezas de alfabetización informacional utilizando las TICs <br>
                                <textarea name="preg4" style="width: 100%;" rows="5" minlength="1" maxlength="200"
                                    onkeypress="return check(event)" placeholder="Escriba su respuesta aquí"
                                    spellcheck="true"></textarea>
                                Describa qué es lo que hace que un estudiante sea alfabetizado en informática <br>
                                <textarea name="preg5" style="width: 100%;" rows="5" minlength="1" maxlength="200"
                                    onkeypress="return check(event)" placeholder="Escriba su respuesta aquí"
                                    spellcheck="true"></textarea>
                                ¿La alfabetización informacional requiere destrezas distintas a las de las TICs? Por
                                ejemplo, ¿pueden las personas ser alfabetizadas en información en ausencia de las TICs?
                                <br>
                                <textarea name="preg6" style="width: 100%;" rows="5" minlength="1" maxlength="200"
                                    onkeypress="return check(event)" placeholder="Escriba su respuesta aquí"
                                    spellcheck="true"></textarea>
                                Evalúe el valor de la información de los medios impresos (por Ej. periódicos, revistas,
                                etc.) y los costos asociados con su almacenamiento, recuperación y uso. La investigación
                                también debe tomar en cuenta los siguientes puntos: el valor de la información basada en
                                los
                                beneficios que genera, el valor real de la información basada en su disponibilidad o
                                no-disponibilidad, y las consecuencias para los usuarios si la información no está
                                disponible. <br>
                                ¿De qué manera las destrezas de la alfabetización informacional son relevantes para
                                combatir
                                las enfermedades, mejorar las oportunidades de empleo y mejorar las prácticas
                                pedagógicas de
                                los profesores en las clases? <br>
                                <textarea name="preg7" style="width: 100%;" rows="5" minlength="1" maxlength="200"
                                    onkeypress="return check(event)" placeholder="Escriba su respuesta aquí"
                                    spellcheck="true"></textarea>
                            </div>
                            <!-- <center>
                                <a href="#" id="btnS" class="btn btn-outline-success" onclick="sig();">Siguiente</a>
                            </center> -->

                            <center>
                                <div id="btnAtras" onclick="atr();">
                                    <img width=70 src="<?php echo base_url();?>public/assets/img/arrow_l.jpg">
                                </div>

                                <div id="btnAdelante" onclick="sig();">
                                    <img width=70 src="<?php echo base_url();?>public/assets/img/arrow_r.jpg">
                                </div>

                            </center>
                            </p>
                        </div>

                        <h4 class="subtitle">Bibliografía:</h4>
                            <p>[1] UNAOC, UNESCO, "Módulo 8: Alfabetización informacional y destrezas bibliotecarias", en <em>Media Information Literacy for Teachers</em>, 2020.
                                <a href="http://unesco.mil-for-teachers.unaoc.org/modules/modulo-8-alfabetizacion-informacional-y-destrezas-bibliotecarias/unidad-1-conceptos-y-aplicacion-de-la-alfabetizacion-informacional/?lang=es" target="_blank" rel="noopener noreferrer">
                                http://unesco.mil-for-teachers.unaoc.org/modules/modulo-8-alfabetizacion-informacional-y-destrezas-bibliotecarias/unidad-1-conceptos-y-aplicacion-de-la-alfabetizacion-informacional/?lang=es</a>
                            </p>
                    </div>
                </div>
            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo8/unidad1/contenidos" class="btn btn_navegacion">Anterior</a>
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
    <script src="<?php echo base_url();?>public/assets/modulos/mod8/js/u1script.js"></script>

    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


</body>

</html>