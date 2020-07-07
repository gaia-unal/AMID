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
                        <a href="../../modulo4.1/module4.1_inicio.php" class="list-group-item">Unidad 1</a>
                        <a href="../../modulo4.2/module4.2_inicio.php" class="list-group-item">Unidad 2</a>
                        <a href="../module4.3_inicio.php" class="list-group-item active">Unidad 3</a>
                        <ul class="list-group-item">
                            <a href="../module4.3_temas.php" class="list-group-item">Temas</a>
                            <a href="module4.3.1.php" class="list-group-item active">Actividad</a>
                            <a href="../module4.3_eval.php" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(3)" class="list-group-item inactive">Unidad 4</a>
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
                <h1><br>Unidad 3: Géneros de películas y de cuentos</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Carteles</h4>
                        <p class="card-text">
                            Los carteles de las películas se personalizan de acuerdo a los países. A continuación se
                            presentarán los carteles y las modificaciones realizadas para estrenarse la película en los
                            diferentes paises. Al lado izquierdo se observa el cartel original, y al lado derecho el
                            cartel adaptado en los diferentes paises.
                            <ul>
                                <li>Japón</li>
                                <div><img src="assets/img/cartel1.png" alt="wolverine" class="cartel"></div><br><br>
                                <li>México</li>
                                <div><img src="assets/img/cartel2.png" alt="mayordomo" class="cartel"></div><br><br>
                                <li>Corea del Sur</li>
                                <div><img src="assets/img/cartel3.png" alt="slave" class="cartel"></div><br><br>
                                <li>Australia</li>
                                <div><img src="assets/img/cartel4.png" alt="awkward" class="cartel"></div><br><br>
                                <li>Tailandia</li>
                                <div><img src="assets/img/cartel5.png" alt="TFIOS" class="cartel"></div><br><br>
                                <li>China</li>
                                <div><img src="assets/img/cartel6.png" alt="amazingSpidy" class="cartel"></div><br><br>
                                <li>Francia</li>
                                <div><img src="assets/img/cartel7.png" alt="snowpiercer" class="cartel"></div>
                            </ul>
                            En los siguientes enlaces puede encontrar más ejemplos:
                            <a href="https://www.buzzfeed.com/adambvary/14-carteles-de-peliculas-internacionales-que-son-m"
                                target="_blank">Ejemplos 1</a> &nbsp - &nbsp <a
                                href="https://www.rinconabstracto.com/2011/11/posters-de-peliculas-de-hollywood.html"
                                target="_blank">Ejemplos 2</a>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module4.3.2.php" class="btn btn-success">Anterior</a>
                    <a href="module4.3.4.php" class="btn btn-success">Siguiente</a>
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
  <!-- <script src="assets/js/script.js"></script> -->
</body>

</html>