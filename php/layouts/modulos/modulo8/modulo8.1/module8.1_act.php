<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AMID</title>
  <!-- Bootstrap core CSS -->
  <link href="../../../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../../../../../assets/css/shop-item.css" rel="stylesheet">
  <link href="../../../../../assets/css/style.css" rel="stylesheet">
  <link href="assets/css/estilo.css" rel="stylesheet">
</head>

<body>
  <?php require "../../../../queries/connectionDB.php";
$newConn= new Connection;
$newConn->connectionDB(); ?>
  <?php require '../../../../queries/activeSession.php'; ?>  
  <?php $rutaSession="../../../../queries/"; include '../../../header.php'; ?>



    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="my-4">Módulos AMID</h1>
                <div class="list-group">
                    <a href="../../modulo1/module1.php" class="list-group-item">Módulo 1</a>
                    <a href="../../modulo2/module2.php" class="list-group-item">Módulo 2</a>
                    <a href="../../modulo3/module3.php" class="list-group-item">Módulo 3</a>
                    <a href="../../modulo4/module4.php" class="list-group-item">Módulo 4</a>
                    <a href="../../modulo5/module5.php" class="list-group-item">Módulo 5</a>
                    <a href="../../modulo6/module6.php" class="list-group-item">Módulo 6</a>
                    <a href="../../modulo7/module7.php" class="list-group-item">Módulo 7</a>
                    <a href="../module8.php" class="list-group-item active">Módulo 8</a>
                    <ul class="list-group-item">
                        <a href="module8.1_inicio.php" class="list-group-item active">Unidad 1</a>
                        <ul class="list-group-item">
                            <a href="module8.1_temas.php" class="list-group-item">Temas</a>
                            <a href="#" class="list-group-item active">Actividad</a>
                            <a href="module8.1_eval.php" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 2</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
                    </ul>
                    <a href="../../modulo9/module9.php" class="list-group-item">Módulo 9</a>
                    <a href="../../modulo10/module10.php" class="list-group-item">Módulo 10</a>
                    <a href="../../modulo11/module11.php" class="list-group-item">Módulo 11</a>
                    <a href="../../modulo12/module12.php" class="list-group-item">Módulo 12</a>
                </div>
                <br /><br />
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <h1><br>Unidad 1: Conceptos y Aplicación de la Alfabetización Informacional</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <p class="card-text">
                            <div id="parte1">
                                <h4>Definición de información</h4>
                                <ul>
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
                                <textarea name="preg1" id="p1-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                            </div>
                            <div id="parte2">
                                <h4>Definición de alfabetización informacional</h4>
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
                                <textarea name="preg2" id="p2-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                            </div>
                            <div id="parte3">
                                <h4>Sociedad de la información y el conocimiento</h4>

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
                                <textarea name="preg3" id="p3-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea> <br><br>
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
                                <textarea name="preg4" id="p4-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea> <br><br>
                                Describa qué es lo que hace que un estudiante sea alfabetizado en informática <br>
                                <textarea name="preg5" id="p5-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea> <br><br>
                                ¿La alfabetización informacional requiere destrezas distintas a las de las TICs? Por
                                ejemplo, ¿pueden las personas ser alfabetizadas en información en ausencia de las TICs?
                                <br>
                                <textarea name="preg4" id="p4-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea> <br><br>
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
                                <textarea name="preg2" id="p2-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                            </div>
                            <center>
                                <a href="#" id="btnS" class="btn btn-outline-success" onclick="sig();">Siguiente</a>
                            </center>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module8.1_temas.php" class="btn btn-success">Anterior</a>
                    <a href="module8.1_act2.php" class="btn btn-success btnSig retraso5">Siguiente</a>
                    
                </center>
                <?php
                    include '../../../../functions/paginacion.php';
                    pag(2);
                ?>
                <p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative
                            Commons Reconocimiento Compartir igual 4.0</a></p>
                <br /><br />
      </div>
      <!-- /.col-lg-9 -->
    </div>
  </div>
  <!-- /.container -->

  <?php $ruta="../../../../../assets"; include '../../../footer.php';?>

  <!-- Bootstrap core JavaScript -->
  <script src="../../../../../vendor/jquery/jquery.min.js"></script>
  <script src="../../../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="../../../../../assets/js/script.js"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>