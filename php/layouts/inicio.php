<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AMID</title>
  <!-- Bootstrap core CSS -->
  <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../../assets/css/shop-item.css" rel="stylesheet">
  <link href="../../assets/css/style.css" rel="stylesheet">
  <link href="../../fonts/css/all.css" rel="stylesheet">

</head>

<body id="body">
  <?php
    require_once ("../queries/connectionDB.php");
    $newConn= new Connection;
    $newConn->connectionDB();
    require '../queries/activeSession.php';
    $rutaSession="../queries/"; include 'header.php';
  ?>
  
  <!-- Page Content -->
 
  <div class="container">

    <div class="row">
      <div class="col-lg-3">
        <h1 class="my-4">Módulos AMID</h1>
        <div class="list-group">
          <a href="modulos/modulo1/module1.php" class="list-group-item">Módulo 1</a>
          <a href="modulos/modulo2/module2.php" class="list-group-item">Módulo 2</a>
          <a href="modulos/modulo3/module3.php" class="list-group-item">Módulo 3</a>
          <a href="modulos/modulo4/module4.php" class="list-group-item">Módulo 4</a>
          <a href="modulos/modulo5/module5.php" class="list-group-item">Módulo 5</a>
          <a href="modulos/modulo6/module6.php" class="list-group-item">Módulo 6</a>
          <a href="modulos/modulo7/module7.php" class="list-group-item">Módulo 7</a>
          <a href="modulos/modulo8/module8.php" class="list-group-item">Módulo 8</a>
          <a href="modulos/modulo9/module9.php" class="list-group-item">Módulo 9</a>
          <a href="modulos/modulo10/module10.php" class="list-group-item">Módulo 10</a>
          <a href="modulos/modulo11/module11.php" class="list-group-item">Módulo 11</a>
          <a href="modulos/modulo12/module12.php" class="list-group-item">Módulo 12</a>
        </div>
        <br />
        <br />
      </div>
      <!-- /.col-lg-3 -->
      <div class="col-lg-9">
        <div class="card mt-4">
          <div class="card-body">
            <a href="https://www.youtube.com/watch?v=baJ4FDVgCbU">Introducción al programa AMI (Sugerido video)</a>
            <ul>
              <li>Audiencia </li>
              <li>Características del programa</li>
              <li>Adaptación del programa</li>
              <li>Integración</li>
            </ul>
            <a href="https://www.youtube.com/watch?v=baJ4FDVgCbU">Presentación del Objeto Virtual (Sugerido video)</a>
            <ul>
              <li>Texto y video de presentación </li>
              <li>Descripción del Objeto Virtual</li>
              <li>Vínculos a los módulos de Contenido</li>
            </ul>
            <center>
              <h2>Textos de Créditos y reconocimiento a las instituciones y entidades aportantes || licencias || Otros
              </h2>
            </center>
          </div>
        </div>
        <?php 
          include '../functions/paginacion.php';
          pag(0);
        ?>
        <p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative Commons
            Reconocimiento Compartir igual 4.0<a /></p>
        <br>
        <center><a href="modulos/modulo1/module1.php" class="btn btn-success">Siguiente</a></center>
        <!-- /.card -->
        <br><br>
        <!-- /.card -->
      </div>
      <!-- /.col-lg-9 -->
    </div>
  </div>
  <?php $ruta="../../assets"; include 'footer.php';?>
  <!-- Bootstrap core JavaScript -->
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>