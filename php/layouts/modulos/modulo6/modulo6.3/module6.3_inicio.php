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
                        <a href="#" class="list-group-item active">Unidad 3</a>
                        <ul class="list-group-item">
                            <a href="module6.3_temas.php" class="list-group-item">Temas</a>
                            <a href="module6.3.1_act.php" class="list-group-item">Actividad</a>
                            <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
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
                        <h4>Objetivos de aprendizaje</h4>
                        <ul>
                            <li>Identificar el valor de las herramientas interactivas de multimedia, incluyendo sitios
                                interactivos en la red, presentaciones, discusiones en línea, blogs, Wiki, wikilibros,
                                libros electrónicos, podcasting, videocasting, vodcasting y juegos de enseñanza y
                                aprendizaje.</li>
                            <li>Desarrollar habilidades sociales, intelectuales y espacio-temporales utilizando
                                herramientas interactivas de multimedia, especialmente juegos</li>
                            <li>Aplicar las herramientas interactivas de multimedia, especialmente los juegos digitales,
                                para la enseñanza y el aprendizaje</li>
                            <li>Utilizar herramientas/juegos interactivos de multimedia de baja y alta tecnología para
                                exponer conceptos de temas académicos (por Ej. matemáticas, ciencias, estudios sociales,
                                etc.)</li>
                            <li>Analizar las distintas herramientas interactivas de multimedia utilizando fuentes
                                abiertas y gratuitas o software con licencia, y evaluar las implicaciones de y el
                                impacto en la enseñanza y el aprendizaje</li>
                            <li>Evaluar el impacto y las oportunidades que las fuentes abiertas de recursos educativos
                                pueden tener sobre los procesos de enseñanza y aprendizaje</li>
                        </ul>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="../modulo6.2/module6.2.1_act.php" class="btn btn-success">Anterior</a>
                    <a href="module6.3_temas.php" class="btn btn-success">Siguiente</a>
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