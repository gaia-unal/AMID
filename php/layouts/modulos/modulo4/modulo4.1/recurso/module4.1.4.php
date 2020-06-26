<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AMID</title>
  <!-- Bootstrap core CSS -->
  <link href="../../../../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../../../../../../assets/css/shop-item.css" rel="stylesheet">
  <link href="../../../../../../assets/css/style.css" rel="stylesheet">
  <!-- <link href="assets/css/estilo.css" rel="stylesheet"> -->
</head>

<body>
  <?php require "../../../../../queries/connectionDB.php";
$newConn= new Connection;
$newConn->connectionDB(); ?>
  <?php require '../../../../../queries/activeSession.php'; ?>  
  <?php $rutaSession="../../../../../queries/"; include '../../../../header.php'; ?>


    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="my-4">Módulos AMID</h1>
                <div class="list-group">
                    <a href="../../../modulo1/module1.php" class="list-group-item">Módulo 1</a>
                    <a href="../../../modulo2/module2.php" class="list-group-item">Módulo 2</a>
                    <a href="../../../modulo3/module3.php" class="list-group-item">Módulo 3</a>
                    <a href="../../module4.php" class="list-group-item active">Módulo 4</a>
                    <ul class="list-group-item">
                        <a href="../module4.1_inicio.php" class="list-group-item active">Unidad 1</a>
                        <ul class="list-group-item">
                            <a href="../module4.1_temas.php" class="list-group-item">Temas</a>
                            <a href="module4.1.1.php" class="list-group-item active">Actividad</a>
                            <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 2</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 4</a>
                    </ul>
                    <a href="../../../modulo5/module5.php" class="list-group-item">Módulo 5</a>
                    <a href="../../../modulo6/module6.php" class="list-group-item">Módulo 6</a>
                    <a href="../../../modulo7/module7.php" class="list-group-item">Módulo 7</a>
                    <a href="../../../modulo8/module8.php" class="list-group-item">Módulo 8</a>
                    <a href="../../../modulo9/module9.php" class="list-group-item">Módulo 9</a>
                    <a href="../../../modulo10/module10.php" class="list-group-item">Módulo 10</a>
                    <a href="../../../modulo11/module11.php" class="list-group-item">Módulo 11</a>
                    <a href="../../../modulo12/module12.php" class="list-group-item">Módulo 12</a>
                </div>
                <br />
                <br />
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <h1><br>Unidad 1: Lectura de medios y textos de información</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Medios audiovisuales</h4>
                        <p class="card-text">
                            Se definen como "los medios técnicos de representación que permiten ampliar las capacidades
                            propias de los sentidos de la vista y el oído. Amplían estos sentidos en sus dimensiones
                            espacial y temporal" (Mónclus, n.d.). <br>
                            El trabajo en el aula puede estar potenciado por herramientas didácticas que favorezcan el
                            proceso de enseñanza‑aprendizaje. Los medios audiovisuales ofrecen una visión de la realidad
                            diferente a otros medios y el profesor puede uti­lizarlos como "vehículo" transmisor de
                            informa­ción y como elemento específico de organizar la realidad.
                            Considerado como un medio didáctico más, cada medio audiovisual proporcionará al pro­fesor
                            una alternativa que él mismo ha de valorar según la situación y circunstancia determina­da.
                            Enriquecerá el trabajo del aula siempre y cuando el profesor lo integre en su trabajo, y se
                            justificará, al menos, por ofrecer una forma más de acceso a las realidades, por tener un
                            código es­pecífico y una manera de representar diferente a otro medio (Mónclus, n.d.). <br>
                            Sobre las tendencias de utilización de los medios audiovisuales, se pueden resaltar tres
                            momentos (Mónclus, n.d.):
                        </p>
                        <ul>
                            <li>Un primer momento de utilización masiva de los medios técnicos audiovisuales, con un
                                gran optimismo que pretendía relacionar directamen­te el uso de los medios con la mejora
                                en el apren­dizaje. La "tecnología educativa" que llega direc­tamente de los Estados
                                Unidos, llenó nuestra aulas de equipos que en muchos de los casos fueron
                                infrautilizados. Se ofrecían estadísticas sobre contenidos memorizados y uso de los
                                medios.</li>
                            <li>A principios de los años sesenta, surge una tendencia que alerta sobre "efectos nocivos"
                                de los medios de comunicación de masas, y trata de ofrecer antídotos a los niños y
                                jóvenes introdu­ciendo actividades de enseñanza directa de "códigos" y presuntas
                                manipulaciones a los alumnos. En Francia tiene una gran importancia su relación con
                                estudios que vinculan y comparan los medios audiovisuales al lenguaje. Realizan estudios
                                sobre publicidad y televisión, con esta­dísticas que se interpretan automáticamente.
                            </li>
                            <li>A partir de los años setenta se plantea una postura escéptica sobre el conocimiento de
                                los efectos de los medios de comunicación de masas. El vídeo surge como medio de gran
                                potencia que permite un acceso rápido y cómodo a múltiples programas, sonidos, imágenes,
                                etc. La rápida im­plantación de medios cada vez más eficaces (videodisco, satélite, alta
                                definición, interactivos, etc.) hace imprevisible la futura utilización de estos medios.
                                Con todo esto existe una gran sen­sibilidad entre los profesionales de la educación,
                                para renovar ésta y que no se quede rezagada respecto al aprendizaje directo y sumamente
                                variado que obtiene el alumno de los medios de comunicación.</li>
                        </ul>
                        <strong>Referencias: </strong>Mónclus, A. G. (n.d.). Los medios audiovisuales. Concepto y
                        tendencia de uso en el aula. Retrieved from Grupo Logo-Madrid website:
                        http://www.quadernsdigitals.net/datos_web/articles/zeus/zeus14/z14medios.htm
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module4.1.3.php" class="btn btn-success">Anterior</a>
                    <a href="module4.1.5.php" class="btn btn-success">Siguiente</a>
                </center>
                <?php
                    include '../../../../../functions/paginacion.php';
                    pag(3);
                ?>
        <p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative Commons
            Reconocimiento Compartir igual 4.0</a></p>
        <br><br>
      </div>
      <!-- /.col-lg-9 -->
    </div>
  </div>
  <!-- /.container -->

  <?php $ruta="../../../../../../assets"; include '../../../../footer.php';?>

  <!-- Bootstrap core JavaScript -->
  <script src="../../../../../../vendor/jquery/jquery.min.js"></script>
  <script src="../../../../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="../../../../../../assets/js/script.js"></script>
  <script src="assets/script.js"></script>
</body>

</html>