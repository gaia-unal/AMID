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
                    <a href="../module6.php" class="list-group-item active">Módulo 6</a>
                    <ul class="list-group-item">
                        <a href="../modulo6.1/module6.1_inicio.php" class="list-group-item">Unidad 1</a>
                        <a href="../modulo6.2/module6.2_inicio.php" class="list-group-item">Unidad 2</a>
                        <a href="module6.3_inicio.php" class="list-group-item active">Unidad 3</a>
                        <ul class="list-group-item">
                            <a href="module6.3_temas.php" class="list-group-item">Temas</a>
                            <a href="#" class="list-group-item active">Actividad</a>
                            <a href="module6.3_eval.php" class="list-group-item">Evaluación</a>
                        </ul>
                    </ul>
                    <a href="../../modulo7/module7.php" class="list-group-item">Módulo 7</a>
                    <a href="../../modulo8/module8.php" class="list-group-item">Módulo 8</a>
                    <a href="../../modulo9/module9.php" class="list-group-item">Módulo 9</a>
                    <a href="../../modulo10/module10.php" class="list-group-item">Módulo 10</a>
                    <a href="../../modulo11/module11.php" class="list-group-item">Módulo 11</a>
                    <a href="../../modulo12/module12.php" class="list-group-item">Módulo 12</a>
                </div>
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <h1><br>Unidad 3: Usos de las Herramientas Interactivas de Multimedia, incluyendo los Juegos Digitales en las
                    Aulas</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <p class="card-text">
                            Los recursos educativos abiertos (REAs) son materiales y herramientas de aprendizaje –
                            incluyendo cursos completos, módulos, materiales de curso, libros de texto, videos,
                            exámenes, software y cualquier otro material (interactivo y no-interactivo), o técnicas –
                            que se utilizan para apoyar el acceso al conocimiento, en un formato de documento abierto,
                            entregado con una licencia abierta, permitiendo el uso libre, re-uso y adecuación a las
                            necesidades específicas de un cierto grupo de usuarios (es decir, estudiantes, capacitadores
                            de capacitadores, facilitadores, etc.).
                        </p>
                        <h4>Principios de los REA</h4>
                        <p class="card-text">
                            David Wiley es uno de los pioneros de los REA. Él y sus colegas han sugerido (Hilton et al.,
                            2010) que hay cinco principios básicos en la publicación abierta:
                            <ul>
                                <li>Re-utilizable: el nivel básico de apertura. El material se puede utilizar completo o
                                    parte para sus propios fines (por ejemplo, descargar un video educativo para verlo
                                    más tarde);</li>
                                <li>Re-distribuible: el material se puede compartir con otros (por ejemplo, puede enviar
                                    por mail un artículo digital a un colega);</li>
                                <li>Revisable: el material se puede adaptar, modificar, traducir, o cambiar (por
                                    ejemplo, tomar un libro en inglés y convertirlo en un audio libro en castellano);
                                </li>
                                <li>Re-mixable: puede tomar dos o más partes del recurso y combinarlas para crear un
                                    nuevo recurso (por ejemplo, tomar algunos podcasts de un libro y combinarlos con las
                                    dispositivas de otro curso para crear un nuevo trabajo);</li>
                                <li>Retenible: o sonservable significa que no hay restricciones con los derechos del
                                    material digital (DRM), es decir puede conservar el contenido para su uso, ya sea
                                    usted el autor, un instructor o un estudiante. Obtenido de: <a
                                        href="https://cead.pressbooks.com/chapter/10-2-recursos-educativos-abiertos-rea/"
                                        target="_blank">Link</a> </li>
                            </ul>
                        </p>
                        <h4>Identificar el valor de las herramientas interactivas de multimedia, incluyendo sitios
                            interactivos en la red, presentaciones, discusiones en línea, blogs, Wiki, wikilibros,
                            libros electrónicos, podcasting, videocasting, vodcasting y juegos de enseñanza y
                            aprendizaje. </h4>
                        <p class="card-text">
                            <strong>Herramientas interactivas de multimedia:</strong> Piense en la materia que usted
                            enseña. Utilizando un motor de búsqueda, identifique y haga una lista de las herramientas
                            interactivas de multimedia, incluyendo juegos digitales, elementos que se podrían utilizar
                            al dar una lección (o lecciones) específicas a un grupo de profesores. Debe identificar un
                            número de dichas herramientas. Dé prioridad a estas herramientas en términos de utilidad
                            para sus necesidades específicas.
                            <ul>
                                <li>¿Qué criterio utilizó?</li>
                                <textarea name="preg1" id="p1-r" cols="100" rows="10"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                            </ul>
                            Investigue acerca de los criterios utilizados por expertos en el uso de herramientas
                            interactivas de multimedia en la educación. Ahora compare su criterio con aquel de los
                            expertos.
                            <ul>
                                <li>¿Cuáles son sus observaciones?</li>
                                <textarea name="preg2" id="p2-r" cols="100" rows="10"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>¿Está de acuerdo con el criterio de los expertos?</li>
                                <textarea name="preg3" id="p3-r" cols="100" rows="10"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>En su lista de herramientas interactivas de multimedia, ¿puede identificar
                                    herramientas que podrían alterar o facilitar de una manera importante la cooperación
                                    y discusión en el proceso de enseñanza-aprendizaje? ¿Por qué escogió esas
                                    herramientas?</li>
                                <textarea name="preg4" id="p4-r" cols="100" rows="10"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>¿Cómo cree usted que las tecnologías de multimedia podrían permitir a los
                                    estudiantes y profesores interactuar con la información de una nueva forma,
                                    cambiar el contenido, y crear su propio conocimiento?</li>
                                <textarea name="preg5" id="p5-r" cols="100" rows="10"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                            </ul>
                        </p>
                        <p class="card-text">
                            <h4>
                                <ol>
                                    <li>Desarrollar habilidades sociales, intelectuales y espacio-temporales utilizando
                                        herramientas interactivas de multimedia, especialmente juegos</li>
                                    <li>Aplicar las herramientas interactivas de multimedia, especialmente los juegos
                                        digitales, para la enseñanza y el aprendizaje</li>
                                    <li>Utilizar herramientas/juegos interactivos de multimedia de baja y alta
                                        tecnología para exponer conceptos de temas académicos (por Ej. matemáticas,
                                        ciencias, estudios sociales, etc.)</li>
                                </ol>
                            </h4>
                            <ul>
                                <li>¿De qué forma un juego de computadora le puede ayudar a pensar creativamente sobre
                                    temas globales?</li>
                                <textarea name="preg1" id="p1-r" cols="100" rows="10"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>¿Cuáles son los resultados de aprendizaje con estos juegos?</li>
                                <textarea name="preg1" id="p1-r" cols="100" rows="10"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                            </ul>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module6.3_temas.php" class="btn btn-success">Anterior</a>
                    <a href="module6.3_eval.php" class="btn btn-success">Siguiente</a>
                </center>
                <?php
                    include '../../../../functions/paginacion.php';
                    pag(2);
                ?>
                <p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative
                        Commons Reconocimiento Compartir igual 4.0</a></p>
                <br><br>
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
</body>

</html>