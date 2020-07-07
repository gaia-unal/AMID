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
<?php require_once "../../../../queries/connectionDB.php"; 
  $newConn= new Connection;
  $newConn->connectionDB();
  ?>
  <?php require '../../../../queries/activeSession.php'; ?>  
  <?php $rutaSession="../../../../queries/"; include '../../../header.php'; ?>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <h1 class="my-4">Módulos AMID</h1>
        <div class="list-group">
          <a href="../module1.php" class="list-group-item active">Módulo 1</a>
          <ul class="list-group-item">
            <a href="../modulo1.1/module1.1_inicio.php" class="list-group-item">Unidad 1</a>
            <a href="../modulo1.2/module1.2_inicio.php" class="list-group-item">Unidad 2</a>
            <a href="#" class="list-group-item active">Unidad 3</a>
            <ul class="list-group-item">
              <a href="module1.3_temas.php" class="list-group-item">Temas</a>
              <a href="recurso/module1.3.1.php" class="list-group-item">Actividades</a>
              <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
            </ul>
            <a href="#" onclick="inactivo(3)" class="list-group-item inactive">Unidad 4</a>
          </ul>
          <a href="../../modulo2/module2.php" class="list-group-item">Módulo 2</a>
          <a href="../../modulo3/module3.php" class="list-group-item">Módulo 3</a>
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
        <h1><br>Unidad 3: Interactuándo con los medios y otros proveedores de información como las bibliotecas, los
          archivos y el
          internet</h1>
        <br />
        <div class="card mt-4">
          <div class="card-body">
            <h4>Objetivos de aprendizaje</h4>
            <ul>
              <li>Comprender y describir los conceptos claves que utilizan los medios y los otros proveedores de
                información.</li>
              <li>Comprender como el conocimiento de estos conceptos puede ayudar a los usuarios/ ciudadanos a
                interactuar de una manera crítica con los medios y los otros proveedores de información.</li>
            </ul>
          </div>
          <!-- /.card -->
        </div>
        <br>
        <center>
          <a href="../modulo1.2/module1.2_eval.php" class="btn btn-success">Siguiente</a>
          <a href="module1.3_temas.php" class="btn btn-success">Siguiente</a>
        </center>
        <?php
          include '../../../../functions/paginacion.php';
          pag(2);
        ?>
        <br />
        <p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative Commons
            Reconocimiento Compartir igual 4.0</a></p>
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