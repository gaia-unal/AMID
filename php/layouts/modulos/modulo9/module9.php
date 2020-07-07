<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>AMID</title>
  <!-- Bootstrap core CSS -->
  <link href="../../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../../../../assets/css/shop-item.css" rel="stylesheet">
  <link href="../../../../assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="../../../../assets/css/sweetalert/sweetalert2.css">
  <link rel="stylesheet" href="../../../../assets/css/animated.css">
</head>

<body>
<?php 
    require "../../../queries/connectionDB.php";
$newConn= new Connection;
$newConn->connectionDB();
    require '../../../queries/activeSession.php';
    $rutaSession="../../../queries/"; include '../../header.php'; 
    include '../../../queries/estadoMod.php'; estadoMod(9,1);
?>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <h1 class="my-4">Módulos AMID</h1>
        <div class="list-group">
          <a href="../modulo1/module1.php" class="list-group-item">Módulo 1</a>
          <a href="../modulo2/module2.php" class="list-group-item">Módulo 2</a>
          <a href="../modulo3/module3.php" class="list-group-item">Módulo 3</a>
          <a href="../modulo4/module4.php" class="list-group-item">Módulo 4</a>
          <a href="../modulo5/module5.php" class="list-group-item">Módulo 5</a>
          <a href="../modulo6/module6.php" class="list-group-item">Módulo 6</a>
          <a href="../modulo7/module7.php" class="list-group-item">Módulo 7</a>
          <a href="../modulo8/module8.php" class="list-group-item">Módulo 8</a>
          <a href="#" class="list-group-item active">Módulo 9</a>
          <ul class="list-group-item">
            <a href="modulo9.1/module9.1_inicio.php" class="list-group-item">Unidad 1</a>
            <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 2</a>
            <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
          </ul>
          <a href="../modulo10/module10.php" class="list-group-item">Módulo 10</a>
          <a href="../modulo11/module11.php" class="list-group-item">Módulo 11</a>
          <a href="../modulo12/module12.php" class="list-group-item">Módulo 12</a>
        </div>
        <br /><br />
      </div>
      <!-- /.col-lg-3 -->
      <div class="col-lg-9">
        <br>
        <h1>Módulo 9: Comunicación, AMI y aprendizaje</h1>
        <div class="card mt-4">
          <div class="card-body">
            <h4>Antecedentes y fundamento</h4>
            <p class="card-text">
              Da clic en la <b>flecha</b> para conocer los antecedentes y el fundamento para este módulo
              <br>
              <div class="imgF">
                <center>
                  <a href="#" onclick="opc1();">
                    <img class="animated bounceIn" src="../../../../assets/img/flecha.png" alt="Inicio">
                  </a>
                </center>
              </div>
               <br>
              Referencias: <a
                href="http://unesco.mil-for-teachers.unaoc.org/modules/modulo-7-oportunidades-y-retos-en-internet/?lang=es">AMID</a>
            </p>
          </div>
        </div>
        <!-- /.card -->
        <br>
        <center>
          <a href="../modulo8/modulo8.3/module8.3_inicio.php" class="btn btn-success">Anterior</a>
          <a href="modulo9.1/module9.1_inicio.php" class="btn btn-success btnSig retraso3">Siguiente</a>
          
        </center>
        <?php
                    include '../../../functions/paginacion.php';
                    pag(1);
                ?>
        <p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative Commons
            Reconocimiento Compartir igual 4.0</a></p>
        <br /><br />
      </div>
      <!-- /.col-lg-9 -->
    </div>
  </div>
  <!-- /.container -->
  <?php $ruta="../../../../assets"; include '../../footer.php';?>

<!-- Bootstrap core JavaScript menu-->
<script src="../../../../vendor/jquery/jquery.min.js"></script>
<script src="../../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- script unidad/evaluación inactiva -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../../../assets/js/sweetalert/sweetalert2.js"></script>
<script src="../../../../assets/js/script.js"></script>
<script src="assets/js/info.js"></script>
</body>

</html>