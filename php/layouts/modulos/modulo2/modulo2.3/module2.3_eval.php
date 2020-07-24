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
          <a href="../module2.php" class="list-group-item active">Módulo 2</a>
          <ul class="list-group-item">
            <a href="../modulo2.1/module2.1_inicio.php" class="list-group-item">Unidad 1</a>
            <a href="../modulo2.2/module2.2_inicio.php" class="list-group-item">Unidad 2</a>
            <a href="module2.3_inicio.php" class="list-group-item active">Unidad 3</a>
            <ul class="list-group-item">
              <a href="module2.3_temas.php" class="list-group-item">Temas</a>
              <a href="module2.3_act.php" class="list-group-item">Actividad</a>
              <a href="#" class="list-group-item active">Evaluación</a>
            </ul>
            <a href="../modulo2.4/module2.4_inicio.php" class="list-group-item">Unidad 4</a>
          </ul>
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
        <br />
        <br />
      </div>
      <!-- /.col-lg-3 -->
      <div class="col-lg-9">
        <h1><br>Unidad 3: Lo que genera noticias – explorando los criterios</h1>
        <div class="card mt-4">
          <div class="card-body">
            <h4>Evaluación</h4>
            <form action="../../../../queries/evaluacion.php?id_und=m2u3" method="post">
              <div class="card-body">
                <p class="card-text">
                  <strong> ¿Una oportunidad es? </strong><br> <br>
                  <input class="space" type="radio" name="pre1" id="resp1" value="1" required>
                  <label for="resp1">Idea inesperada para realizar algo de manera repentina. </label> <br>

                  <input class="space" type="radio" name="pre1" id="resp2" value="5" required>
                  <label for="resp2">Momento oportuno para realizar una acción determinada. </label> <br>

                  <input class="space" type="radio" name="pre1" id="resp3" value="1" required>
                  <label for="resp3">Acuerdo al que llegan dos personas en un momento determinado.</label> <br>

                  <strong>¿Qué es un conflicto?</strong><br> <br>
                  <label for="resp4">
                    <input class="space" type="radio" name="pre2" id="resp4" value="5" required>Posición contraria entre
                    2 o más personas.</label> <br>

                  <input class="space" type="radio" name="pre2" id="resp5" value="1" required>
                  <label for="resp5">Discusión que está basada en elementos de la misma naturaleza pero con
                    características diferentes.</label> <br>

                  <input class="space" type="radio" name="pre2" id="resp6" value="1" required>
                  <label for="resp6">Necesidad que tiene un grupo de personas de generar un ambiente de
                    bienestar.</label> <br>
                </p>
              </div>
          </div>
          <!-- /.card -->
          <br>
          <center>
            <a href="module2.3_act2.php" class="btn btn-success">Anterior</a>
            <button id="btn-siguiente" class="btn btn-success" type="submit">Siguiente</button>
          </center>
          </form>
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
  </div>
  <!-- /.container -->

  <?php $ruta="../../../../../assets"; include '../../../footer.php';?>

  <!-- Bootstrap core JavaScript -->
  <script src="../../../../../vendor/jquery/jquery.min.js"></script>
  <script src="../../../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
  <script src="../../../../../assets/js/script.js"></script>
</body>

</html>