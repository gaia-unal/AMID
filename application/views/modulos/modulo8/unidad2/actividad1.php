<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AMID</title>

    <?php $this->load->view('initial/linkGenerico');?>
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

                <ul class="list-group-item">

                <a href="<?php echo base_url();?>modulo8/unidad1"
                            class="list-group-item list-group-item-action bg-light">Unidad 1</a>

                    <div class="btn-group dropright">
                       
                        <a href="<?php echo base_url();?>modulo8/unidad2" class="list-group-item">Unidad 2</a>

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo8/unidad2/contenidos"
                                    class="list-group-item">Contenidos</a>
                                <a href="#" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>


                    <a href="#" class="list-group-item">Unidad 3</a>
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo8/unidad2">Unidad 2</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actividad 1</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 2: Ambiente de Aprendizaje y Alfabetización Informacional</h1>

                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <br>
                        <h4 class="subtitle">El Big6 (Gran6): Marco de seis etapas para la alfabetización informacional y la resolución
                            de problemas de información</h4><br>

                        <div class="contenido">
                        <p class="card-text">
                        <div id="parte1" style="display:block;">
                                <dt>Etapa 1</dt>
                                <dd>Definición de las necesidades o problemas de información ¿Qué es lo
                                    que quiero conocer? ¿Qué problema estoy tratando de resolver? ¿Entiendo la
                                    naturaleza del problema o el tema que estoy investigando? ¿Puedo definir claramente
                                    mis necesidades de información o el problema? ¿Qué conocimiento previo tengo sobre
                                    el tema? ¿Cuánta información quiero sobre el tema?</dd>
                            </div>
                            <div id="parte2" style="display:none;">
                                <dt>Etapa 2</dt>
                                <dd>Estrategias para buscar información ¿Cuánto tiempo tengo para encontrar esta
                                    información? ¿Dónde debo buscar la información? Se debe guiar a los profesores hacia
                                    los mejores recursos para ciertos tipos de información y el por qué. Dependiendo del
                                    contexto, esto puede incluir:
                                    <ul>
                                        <li>Recursos primarios, que son las fuentes originales, en lugares en los que la
                                            información no se interpreta, tales como informes de investigación, recibos
                                            de venta, discursos, correos electrónicos, piezas de arte original,
                                            manuscritos, fotos, diarios, cartas personales, historias orales/entrevistas
                                            o informes diplomáticos;</li>
                                        <li>Fuentes secundarias, que son producidas por los proveedores de información,
                                            donde la información ha sido interpretada, analizada o resumida ( por Ej.
                                            libros académicos, revistas, críticas o interpretaciones); y</li>
                                        <li>Fuentes terciarias, que incluyen compilaciones, índices y otras fuentes
                                            organizadas (por Ej. abstractos, bibliografías, libros de referencia,
                                            enciclopedias, índices, cronologías, bases de datos, etc.) ¿Dónde busco, en
                                            la biblioteca física, Internet (incluyendo las bibliotecas digitales),
                                            museos, archivos, etc.? ¿A quién puedo solicitar ayuda?</li>
                                    </ul>
                                </dd>
                            </div>
                            <div id="parte3" style="display:none;">
                                <dt>Etapa 3</dt>
                                <dd>Localización y acceso Aquí se debe guiar a los profesores a buscar la información de
                                    una manera eficiente en las fuentes antes mencionadas en la Etapa 2. Esto debería
                                    incluir:
                                    <ol>
                                        <li>Consejos para buscar en Internet, incluyendo una búsqueda general y una
                                            búsqueda especializada en un campo en especial (por Ej. el país de los
                                            estudiantes); entender los nombres de los dominios (por Ej. edu.,gov., org.
                                            etc.), buscar en la red fotos y sonido (audio y video) y buscar en sitos
                                            académicos en la red (por Ej. Googlescholar); </li>
                                        <li>Usar el índice y la lista de contenidos para buscar eficazmente en un libro,
                                            y buscar dentro de los archivos electrónicos en PDF, etc. </li>
                                        <li>Utilizar las bibliotecas (buscar catálogos de bibliotecas, publicaciones
                                            periódicas, índices y abstractos y libros de referencia) </li>
                                        <li>Investigar bases de datos (ejemplos de bases de datos populares como
                                            AGRICOLA, AGRIS7CARIS, EBSCO o Expanded Academic ASAP, y otras en el país y
                                            la región de los estudiantes); consejos para búsqueda de bases de datos (
                                            búsquedas por palabras claves, identificación de sinónimos y variaciones de
                                            ortografía, búsqueda por tema o autor, combinar palabras claves como “y”,
                                            “o” y “no”, uso del truncamiento y caracteres comodín, y buscar por límites,
                                            tales como fecha, idioma, tipo de publicación y trabajos revisados por
                                            pares; y </li>
                                        <li>Utilizar la alimentación de RSS para recibir la información que usted
                                            necesita automáticamente.</li>
                                    </ol>
                                </dd>
                            </div>
                            <div id="parte4" style="display:none;">
                                <dt>Etapa 4</dt>
                                <dd>Evaluación crítica Criterio de evaluación necesario para valorar/validar la
                                    confiabilidad, autenticidad o calidad de la información en los libros, sitios en
                                    red, otros recursos en línea, etc.</dd>
                            </div>
                            <div id="parte5" style="display:none;">
                                <dt>Etapa 5</dt>
                                <dd>Síntesis ¿Qué es una tesis? ¿Cuál es mi tesis? ¿De qué forma se relaciona con el
                                    problema que quiero resolver? ¿Cómo puedo organizar la información relevante que
                                    proviene de múltiples fuentes de una manera eficaz? ¿Cómo presento la información?
                                    ¿Qué herramientas están disponibles? ¿Qué herramientas necesito?</dd>
                            </div>
                            <div id="parte6" style="display:none;">
                                <dt>Etapa 6</dt>
                                <dd>Uso de la información, compartir y distribución Aplicar la información que he
                                    localizado para resolver mi problema. Fuentes de referencia/rastreo, uso de la
                                    bibliografía/herramientas de referencia disponibles como zotex, refwork, etc.
                                    Herramientas que están disponibles para compartir, distribuir y cooperar con otros
                                    que tienen necesidades de información similares o problemas (por Ej. Google
                                    Documents, Wikis, Slash, etc.) Entendimiento de los derechos de autor y el plagio
                                </dd>
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
                        </p>
                        </div>
                    </div>
                </div>



            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo8/unidad2/contenidos" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo8/unidad2/actividad2" class="btn btn_navegacion">Siguiente</a>
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
    <script src="<?php echo base_url();?>public/assets/modulos/mod8/js/arrows.js"></script>

    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


</body>

</html>