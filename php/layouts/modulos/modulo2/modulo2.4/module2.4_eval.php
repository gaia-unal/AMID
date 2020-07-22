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
                        <a href="../modulo2.3/module2.3_inicio.php" class="list-group-item">Unidad 3</a>
                        <a href="module2.4_inicio.php" class="list-group-item active">Unidad 4</a>
                        <ul class="list-group-item">
                            <a href="module2.4_temas.php" class="list-group-item">Temas</a>
                            <a href="module2.4_act.php" class="list-group-item">Actividad</a>
                            <a href="#" class="list-group-item active">Evaluación</a>
                        </ul>
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
                <h1><br>Unidad 4: El proceso de desarrollo de las noticias: más allá de 5 por qués y 1 cómo (5ws y 1h en
                    inglés)</h1>
                <div class="card mt-4">
                    <div class="card-body">
                      <form action="../../../../queries/evaluacion.php?id_und=m2u4" method="post">
                          <div class="card-body">
                            <p class="card-text">
<<<<<<< HEAD
                              <strong>¿Qué es el registro de medios?  </strong><br> <br>
                              <input class="space" type="radio" name="pre1" id="resp1" value="5" required>
                              <label for="resp1">Es registrar los medios de comunicación para su correcto funcionamiento </label> <br>

                              <label for="resp2"><input class="space" type="radio" name="pre1" id="resp2" value="1" required>
                              Son los medios que cuentan con instalaciones, equipo, estructura organizacional y una variedad de medios de comunicación.  </label> <br>
=======
                              <strong>1. ¿Qué es el registro de medios?  </strong><br> <br>
                              <input class="space" type="radio" name="pre1" id="resp1" value="5" required>
                              <label for="resp1">Es registrar los medios de comunicación para su correcto funcionamiento </label> <br>

                              <input class="space" type="radio" name="pre1" id="resp2" value="1" required>
                              <label for="resp2">Son los medios que cuentan con instalaciones, equipo, estructura organizacional y una variedad de medios de comunicación.  </label> <br>
>>>>>>> 2ef1147925e598054693ff02b58bf2938d33532c

                              <input class="space" type="radio" name="pre1" id="resp3" value="1" required>
                              <label for="resp3">Es registrar el nombre de los medios de comunicación ante una entidad superior.</label> <br>

<<<<<<< HEAD
                              <strong>¿A qué se refiere la producción?</strong><br> <br>
=======
                              <strong>2. ¿A qué se refiere la producción?</strong><br> <br>
>>>>>>> 2ef1147925e598054693ff02b58bf2938d33532c
                              <label for="resp4">
                              <input class="space" type="radio" name="pre2" id="resp4" value="1" required>La cantidad de dinero que produce el medio de comunicación en un tiempo determinado.</label> <br>

                              <input class="space" type="radio" name="pre2" id="resp5" value="1" required>
                              <label for="resp5">Son las instalaciones propias del medio de comunicación para realizar producciones.</label> <br>

<<<<<<< HEAD
                              <label for="resp6"><input class="space" type="radio" name="pre2" id="resp6" value="5" required>
                              La producción es a lo que se dedica el medio de comunicación, por ejemplo, radio, televisión, periódico, revista, producción de documental, etc.</label> <br>
=======
                              <input class="space" type="radio" name="pre2" id="resp6" value="5" required>
                              <label for="resp6">La producción es a lo que se dedica el medio de comunicación, por ejemplo, radio, televisión, periódico, revista, producción de documental, etc.</label> <br>
>>>>>>> 2ef1147925e598054693ff02b58bf2938d33532c
                            </p>
                        </div>
                    </div>
                     <!-- /.card -->
                     <br>
                      <center>
                          <a href="module2.4_act2.php" class="btn btn-success">Anterior</a>
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
