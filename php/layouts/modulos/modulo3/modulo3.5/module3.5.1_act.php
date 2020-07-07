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
                        <a href="../modulo3.4/module3.4_inicio.php" class="list-group-item">Unidad 4</a>
                        <a href="module3.5.1_act.php" class="list-group-item active">Unidad 5</a>
                        <ul class="list-group-item">
                            <a href="module3.5_inicio.php" class="list-group-item">Temas</a>
                            <a href="#" class="list-group-item active">Actividad</a>
                            <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                        </ul>
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
                <h1><br>Unidad 5: Edición digital y retoque en computadora</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <p class="card-text">
                            “Las computadoras han hecho que el retoque y la total re-creación de las fotos sea tan
                            rápida y eficiente que ahora los técnicos en fotografía se han juntado con los ingenieros de
                            video y grabación en la fraternidad de manipuladores modernos, cada uno capaz de ensamblar
                            pedazos de la realidad para lograr cualquier efecto.” (Marshall Blonsky). <br>
                            <blockquote cite="www.saffo.com/essays/texthotnewmedium.php" align="justify">
                                “Para el final de la década, miraremos hacia atrás, a 1992 y nos preguntaremos cómo
                                un video de un policía golpeando a un ciudadano pudo haber causado una revuelta en Los
                                Ángeles. La época de la inocencia de las videograbadoras se evaporará
                                a medida que los adolescentes manipulen rutinariamente las imágenes más prosaicas a
                                ficciones vividas y convincentes. Los robos inteligentes de las imágenes de la
                                publicidad y de los videos de las noticias se convertirán en una forma de arte. Ya no
                                podremos creer lo que verán nuestros ojos cuando observen un video – realidad mediática,
                                y buscaremos indicadores externos de confiabilidad.”
                            </blockquote>
                            La manipulación de las imágenes y los videos ha tenido graves implicaciones para la
                            veracidad de la información y no es aceptable en los medios de noticias.
                            Las imágenes manipuladas no deberían ser utilizadas en las historias de noticias o en
                            ninguna situación legal que pueda servir como evidencia.

                            <h4>Lea el siguente artículo y a continuación responda las preguntas de la Actividad</h4>
                            Retoque fotográfico antes de la existencia de Photoshop
                            <div class="">
                                <img id="imagen" src="assets/img/img1.png">
                                <img id="imagen" src="assets/img/img2.png">
                            </div>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module3.5_temas.php" class="btn btn-success">Anterior</a>
                    <a href="module3.5.1_act2.php" class="btn btn-success">Siguiente</a>
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