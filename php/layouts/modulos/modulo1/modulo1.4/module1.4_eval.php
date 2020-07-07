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
    <!-- <link href="assets/css/estilo.css" rel="stylesheet"> -->
</head>

<body>
<?php require_once "../../../../queries/connectionDB.php"; 
  $newConn= new Connection;
  $newConn->connectionDB();
  ?>
    <?php require '../../../../queries/activeSession.php'; ?>
    <?php $rutaSession="../../../../queries/"; include '../../../header.php'; 
    ?>

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
            <a href="../modulo1.3/module1.3_inicio.php" class="list-group-item">Unidad 3</a>
            <a href="module1.4_inicio.php" class="list-group-item active">Unidad 4</a>
            <ul class="list-group-item">
              <a href="module1.4_temas.php" class="list-group-item">Temas</a>
              <a href="recurso/module1.4.1.php" class="list-group-item">Actividades</a>
              <a href="#" class="list-group-item active">Evaluación</a>
            </ul>
          </ul>
          <a href="../../modulo2/module2.php" class="list-group-item">Módulo 2</a>
          <a href="../../modulo3/modulo3.php" class="list-group-item">Módulo 3</a>
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
        <br />
        <br />
      </div>
      <!-- /.col-lg-3 -->
      <div class="col-lg-9">
        <h1><br>Unidad 4: AMI, enseñanza y aprendizaje</h1>

        <form action="../../../../queries/evaluacion.php?id_und=m1u4" method="post">

        <div class="card mt-4">
          <div class="card-body">
            <h4>Evaluación</h4>
            <p class="card-text">
              Si colocara a los estudiantes una variedad de material visual existente relacionado con la vida de una
              persona y utilizar esto como punto de partida para hacer un documental corto sobre dicha persona. <br/><br/>
              <strong>¿Qué enfoque pedagógico estaría utilizando para realizar esta actividad?</strong> <br/><br/>
              <label ><input type="radio" name="pregunta_1" id="res1" class="space" onclick="Incorrecto()" value="1" required>Enfoque de enseñanza reflexiva </label><br/>
              <label><input type="radio" name="pregunta_1" id="res2" class="space" onclick="Incorrecto()" value="1" required>Aprendizaje basado en problemas </label><br/>
              <label><input type="radio" name="pregunta_1" id="res3" class="space" onclick="Incorrecto()" value="1" required>Interrogación científica </label><br/>
              <label><input type="radio" name="pregunta_1" id="res4" class="space" onclick="Incorrecto()" value="1" required>Aprendizaje cooperativo </label><br/>
              <label><input type="radio" name="pregunta_1" id="res5" class="space" onclick="Incorrecto()" value="1" required>Estudio de caso </label><br/>
              <label><input type="radio" name="pregunta_1" id="res6" class="space" onclick="Incorrecto()" value="1" required>Análisis de texto </label><br/>
              <label><input type="radio" name="pregunta_1" id="res7" class="space" onclick="Incorrecto()" value="1" required>Análisis contextual </label><br/>
              <label><input type="radio" name="pregunta_1" id="res8" class="space" onclick="Correcto()" value="5" required>Traducciones </label><br/>
              <label><input type="radio" name="pregunta_1" id="res9" class="space" onclick="Incorrecto()" value="1" required>Simulaciones </label><br/>
            </p>
          </div>
          <br>
        </div>
        <!-- /.card -->
        <br>
        <center>
          <a href="recurso/module1.4.3.php" class="btn btn-success">Anterior</a>
          <!-- <a href="../../modulo2/module2.php" class="btn btn-success">Siguiente</a> -->
          <button id="btn-siguiente"  class="btn btn-success" type="submit" onclick="evaluacion()">Siguiente</button>
        </center>
        </form>
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
    <!-- <script src="script.js"></script> -->
</body>

</html>