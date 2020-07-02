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
                        <a href="module2.2_inicio.php" class="list-group-item active">Unidad 2</a>
                        <ul class="list-group-item">
                            <a href="module2.2_temas.php" class="list-group-item">Temas</a>
                            <a href="module2.2_act.php" class="list-group-item">Actividad</a>
                            <a href="#" class="list-group-item active">Evaluación</a>
                        </ul>
                        <a href="../modulo2.3/module2.3_inicio.php" class="list-group-item">Unidad 3</a>
                        <a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 4</a>
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
                <h1><br>Unidad 2: Libertad, ética y responsabilidad</h1>
              <form action="../../../../queries/evaluacion.php?id_und=m2u2" method="post">
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Evaluación</h4>
                        <p class="card-text">
                          <strong> ¿Qué es código de ética?  </strong><br> <br>
                          <input class="space" type="radio" name="pre1" id="resp1" value="1" required>
                          <label for="resp1">Mantener una línea de comportamiento uniforme </label> <br>

                          <input class="space" type="radio" name="pre1" id="resp2" value="1" required>
                          <label for="resp2">Tomar las decisiones más acertadas, dentro de lo que cabe en su profesión.</label> <br>

                          <input class="space" type="radio" name="pre1" id="resp3" value="5" required>
                          <label for="resp3"> Normas que regulan los comportamientos de las personas dentro de una empresa u organización</label> <br>

                          <strong> ¿Qué es actuar con libertad?  </strong><br> <br>
                          <label for="resp4">
                          <input class="space" type="radio" name="pre2" id="resp4" value="5" required>Actuar con libertad implica asumir la responsabilidad de nuestros actos, es decir estar comprometidos ante las consecuencias que surjan de las decisiones tomadas. </label> <br>


                          <input class="space" type="radio" name="pre2" id="resp5" value="1" required>
                          <label for="resp5">Es ser responsable para manifestar una respuesta ante cualquier circunstancia.</label> <br>

                          <input class="space" type="radio" name="pre2" id="resp6" value="1" required>
                          <label for="resp6">Es ser autónomos y conscientes de nuestras acciones.</label> <br>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module2.2_act2.php" class="btn btn-success">Anterior</a>
                    <!--a href="../modulo2.3/module2.3_inicio.php" class="btn btn-success">Siguiente</a-->
                    <button id="btn-siguiente"  class="btn btn-success" type="submit">Siguiente</button>
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
  <!-- /.container -->

  <?php $ruta="../../../../../assets"; include '../../../footer.php';?>

  <!-- Bootstrap core JavaScript -->
  <script src="../../../../../vendor/jquery/jquery.min.js"></script>
  <script src="../../../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
  <script src="../../../../../assets/js/script.js"></script>
</body>

</html>
