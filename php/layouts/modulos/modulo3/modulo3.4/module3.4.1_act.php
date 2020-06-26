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
                    <a href="../module3.php" class="list-group-item active">Módulo 3</a>
                    <ul class="list-group-item">
                        <a href="../modulo3.1/module3.1_inicio.php" class="list-group-item">Unidad 1</a>
                        <a href="../modulo3.2/module3.2_inicio.php" class="list-group-item">Unidad 2</a>
                        <a href="../modulo3.3/module3.3_inicio.php" class="list-group-item">Unidad 3</a>
                        <a href="module3.4_inicio.php" class="list-group-item active">Unidad 4</a>
                        <ul class="list-group-item">
                            <a href="module3.4_temas.php" class="list-group-item">Temas</a>
                            <a href="#" class="list-group-item active">Actividad</a>
                            <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(4)" class="list-group-item inactive">Unidad 5</a>
                    </ul>
                    <a href="../../modulo4/module4.php" class="list-group-item">Módulo 4</a>
                    <a href="../../modulo5/module5.php" class="list-group-item">Módulo 5</a>
                    <a href="../../modulo6/module6.php" class="list-group-item">Módulo 6</a>
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
                <h1><br>Unidad 4: Videos musicales y su representación</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Recursos para este módulo</h4>
                        <p class="card-text">
                            Las primeras seis fuentes que se citan a continuación son sólo ilustrativas y se han tomando
                            principalmente de Norteamérica. Puede que no sean apropiadas fuera de esta región así que
                            los capacitadores deberán desarrollar o investigar sus propios recursos
                            que se centren de manera preferente en su propia región.
                            <ul>
                                <li>Reconstrucciones, un sitio lanzado por los miembros de la comunidad de Medios
                                    Comparativos de MIT después de los sucesos que siguieron al 11 de septiembre 2001:
                                    <a href="http://web.mit.edu/cms/reconstructions" target="_blank">Enlace</a></li>
                                <li>Imob, gran rango de enlaces a música, grabaciones, películas, tecnología, cursos de
                                    producción: <a href="www.imob.com" target="_blank">Enlace</a></li>
                                <li>BIRTH archivos históricos de la televisión europea: <a
                                        href="http://www.birth-of-tv.org/birth" target="_blank">Enlace</a></li>
                                <li>Cynopsis (en inglés), noticias diarias gratuitas orientadas a la industria de la
                                    televisión – un número de ediciones están disponibles: <a
                                        href="http://www.cynopsis.com/" target="_blank">Enlace</a></li>
                                <li>Box office Guru, figuras Americanas e internacionales de la taquilla, tanto del
                                    pasado como del presente se encuentran enumeradas aquí: <a
                                        href="http://boxofficeguru.com" target="_blank">Enlace</a></li>
                                <li>Base de datos del las películas en Internet, el sitio más completo para investigar
                                    sobre películas y televisión. Hay una gran cantidad de información sobre títulos
                                    individuales, críticas, chats, actores, directores, géneros: <a href="www.imdb.com"
                                        target="_blank">Enlace</a></li>
                                <li>Cuarta Conferencia Mundial sobre las Mujeres de ONU, Declaración de Beijing y
                                    Plataforma de Acción (1995) en: <a
                                        href="http://www.un.org/womenwatch/daw/beijing/platform/"
                                        target="_blank">Enlace</a></li>
                                <li>Federación Internacional de Periodistas. (2009). Llegando al balance correcto:
                                    Equidad de Género en el Periodismo: Bruselas, Bélgica en: <a href="http://portal.unesco.org/ci/en/
                                    files/28397/12435929903gender_booklet_en.pdf/gender_booklet_en.pdf"
                                        target="_blank">Enlace</a></li>
                                <li>Asociación Mundial Cristiana para la Comunicación. (2010). Quien hace las noticias?
                                    Proyecto Global de Monitoreo de Medios: Toronto, Canadá en: <a
                                        href="www.whomakesthenews.org" target="_blank">Enlace</a></li>
                            </ul>
                            Utilizando Internet, examine los videos de los principales artistas de hoy. Analice los
                            mensajes y los valores de los videos musicales de su elección (dependiendo de la
                            disponibilidad de las letras de las canciones así como de los videos de
                            las canciones). El análisis debe incluir lo siguiente:
                            <ul>
                                <li>Examen del contenido de las letras, incluyendo una descripción de las formas en las
                                    cuales las imágenes del video se relacionan con las letras y la melodía de la
                                    canción, y cuál es la interpretación que el profesor da a las letras.</li>
                                <li>Examen de los componentes técnicos del video, considerando el uso del color, la
                                    iluminación, la edición (ritmo, yuxtaposición, cortar con el compás) los efectos
                                    especiales, y la conexión entre el audio y los componentes del video. </li>
                                <li>Examen de los temas sociales que se tratan en el video, tomando en cuenta cómo
                                    aquellos mensajes pueden cambiar si personas de diferentes clases sociales o razas
                                    se incluyen, o si los personajes masculinos y femeninos cambian de papeles
                                    Interpretación de los mensajes ideológicos y valores que se presentan en el video
                                </li>
                            </ul>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module3.4_temas.php" class="btn btn-success">Anterior</a>
                    <a href="module3.4.1_act2.php" class="btn btn-success">Siguiente</a>
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