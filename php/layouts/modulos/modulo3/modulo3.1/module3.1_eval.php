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
  <link href="assets/css/estilo.css" rel="stylesheet">
</head>

<body>
<?php 
    require "../../../../queries/connectionDB.php";
    $newConn= new Connection;
    $newConn->connectionDB();
    require '../../../../queries/activeSession.php';
    $rutaSession="../../../../queries/"; include '../../../header.php'; 
?>


    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="my-4">Módulos AMID</h1>
                <div class="list-group">
                    <a href="../../modulo1/module1.php" class="list-group-item">Módulo 1</a>
                    <a href="../../modulo2/module2.php" class="list-group-item">Módulo 2</a>
                    <a href="../module3.php" class="list-group-item active">Módulo 3</a>
                    <ul class="list-group-item">
                        <a href="module3.1_inicio.php" class="list-group-item active">Unidad 1</a>
                        <ul class="list-group-item">
                            <a href="module3.1_temas.php" class="list-group-item">Temas</a>
                            <a href="module3.1.1_act.php" class="list-group-item">Actividad</a>
                            <a href="#" class="list-group-item active">Evaluación</a>
                        </ul>
                        <a href="../modulo3.2/module3.2_inicio.php" class="list-group-item">Unidad 2</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 4</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 5</a>
                    </ul>
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
                <h1><br>Unidad 1: Informes de noticias y el poder de las imágenes</h1>
                <form action="../../../../queries/evaluacion.php?id_und=m3u1" method="post">
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Evaluación</h4>
                        <p class="card-text">
                            <ul>
                                <li><strong> ¿Qué impacto podrían tener estas imágenes sobre las audiencias?</strong></li>

                                    <label><input type="radio" name="pre1" class="space" onclick="correcto()" value="5" required>Positivo porque permite que se genere conciencia sobre lo que pasa actualmente.</label> <br />
                                    <label><input type="radio" name="pre1" class="space" onclick="incorrecto()" value="1" required>Negativo porque nos induce a tener miedo.
                                        medio y sin importar las fronteras.</label><br />
                                    <label><input type="radio" name="pre1" class="space" onclick="incorrecto()" value="1" required>No se genera ningún tipo de impacto.
                                      </label><br />
                                <br>
                                <li><strong>¿Qué se intenta transmitir por medio de estas imágenes?</strong></li>

                                    <label><input type="radio" name="pre2" class="space" onclick="incorrecto()" value="1" required>Sentimientos asociados al dolor humano.</label><br />
                                    <label><input type="radio" name="pre2" class="space" onclick="correcto()" value="5" required>El enfoque y la cobertura de las noticias de una tragedia.</label><br />
                                    <label><input type="radio" name="pre2" class="space" onclick="incorrecto()" value="1" required>La desigualdad y olvido por parte del gobierno.</label><br />
                                <br>
                            </ul>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module3.1.1_act2.php" class="btn btn-success">Anterior</a>
                    <button id="btn-siguiente" class="btn btn-success" type="submit">Siguiente</button>
                    <!-- <a href="../modulo2.2/module2.2_inicio.php" class="btn btn-success">Siguiente</a> -->
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
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="../../../../../assets/js/script.js"></script>
</body>

</html>
