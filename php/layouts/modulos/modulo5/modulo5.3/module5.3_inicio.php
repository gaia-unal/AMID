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
                    <a href="../module5.php" class="list-group-item active">Módulo 5</a>
                    <ul class="list-group-item">
                        <a href="../modulo5.1/module5.1_inicio.php" class="list-group-item">Unidad 1</a>
                        <a href="../modulo5.2/module5.2_inicio.php" class="list-group-item">Unidad 2</a>
                        <a href="#" class="list-group-item active">Unidad 3</a>
                        <ul class="list-group-item">
                            <a href="module5.3_temas.php" class="list-group-item">Temas</a>
                            <a href="module5.3_act.php" class="list-group-item">Actividad</a>
                            <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(3)" class="list-group-item inactive">Unidad 4</a>
                        <a href="#" onclick="inactivo(3)" class="list-group-item inactive">Unidad 5</a>
                    </ul>
                    <a href="../../modulo6/module6.php" class="list-group-item">Módulo 6</a>
                    <a href="../../modulo7/module7.php" class="list-group-item">Módulo 7</a>
                    <a href="../../modulo8/module8.php" class="list-group-item">Módulo 8</a>
                    <a href="../../modulo9/module9.php" class="list-group-item">Módulo 9</a>
                    <a href="../../modulo10/module10.php" class="list-group-item">Módulo 10</a>
                    <a href="../../modulo11/module11.php" class="list-group-item">Módulo 11</a>
                    <a href="../../modulo12/module12.php" class="list-group-item">Módulo 12</a>
                </div>
                <br />
                <br />
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <h1><br>Unidad 3: Publicidad: El proceso creativo</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Objetivos de aprendizaje</h4>
                        <p class="card-text">
                            <ul>
                                <li>Analizar el proceso de publicidad como una forma de comunicar la información</li>
                                <li>Explorar el concepto de desarrollo en la publicidad, incluyendo las estrategias
                                    técnicas y creativas</li>
                                <li>Analizar y desmenuzar los principales ingredientes que entran en la publicidad y en
                                    el recurso emocional</li>
                                <li>Evaluar el impacto de los mensajes de publicidad sobre las audiencias seleccionadas
                                </li>
                                <li>Explicar cómo el concepto de audiencias “activas” se aplica a la publicidad, o más
                                    específicamente, cómo las audiencias negocian el significado (es decir: cómo
                                    explicamos el éxito de algunos anuncios y de otros no)</li>
                                <li>Identificar las últimas tendencias en publicidad</li>
                                <li>Identificar el posicionamiento de productos en los programas como publicidad
                                    indirecta (mezclar el contenido editorial y comercial)</li>
                            </ul>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="../modulo5.2/module5.2_inicio.php" class="btn btn-success">Anterior</a>
                    <a href="module5.3_temas.php" class="btn btn-success">Siguiente</a>
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