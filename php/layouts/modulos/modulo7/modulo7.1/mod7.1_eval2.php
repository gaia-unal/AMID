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
  <link href="assets/css/estilos.css" rel="stylesheet">
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
                    <a href="../../modulo5/module5.php" class="list-group-item">Módulo 5</a>
                    <a href="../../modulo6/module6.php" class="list-group-item">Módulo 6</a>
                    <a href="../module7.php" class="list-group-item active">Módulo 7</a>
                    <ul class="list-group-item">
                        <a href="../modulo7.1/mod7.1_inicio.php" class="list-group-item active">Unidad 1</a>
                        <ul class="list-group-item">
                            <a href="mod7.1_temas.php" class="list-group-item">Temas</a>
                            <a href="1Wiki/index.php" class="list-group-item">Actividades</a>
                            <a href="mod7.1_eval.php" class="list-group-item active">Evaluación</a>
                        </ul>
                        <a href="../modulo7.2/mod7.2_inicio.php" class="list-group-item">Unidad 2</a>
                    </ul>
                    <a href="../../modulo8/module8.php" class="list-group-item">Módulo 8</a>
                    <a href="../../modulo9/module9.php" class="list-group-item ">Módulo 9</a>
                    <a href="../../modulo10/module10.php" class="list-group-item ">Módulo 10</a>
                    <a href="../../modulo11/module11.php" class="list-group-item ">Módulo 11</a>
                    <a href="../../modulo12/module12.php" class="list-group-item ">Módulo 12</a>
                </div>
                <br /><br />
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <br>
                <h1>Unidad 1: Los jóvenes en el mundo virtual</h1>

                <form action="../../../../queries/evaluacion.php?id_und=m7u12" method="post">

                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Evaluación Unidad 1</h4>
                        <p class="card-text">Frente a cada palabra, escribe la letra que corresponde a la definición
                            correcta </p>
                        <div>
                            <img class="fondo" src="assets/img/fondo.png" alt="fondo">
                        </div>
                        </center>
                        <input class="respuesta" id="resp1" type="text" autofocus />
                        <input class="respuesta" id="resp2" type="text" autofocus />
                        <input class="respuesta" id="resp3" type="text" autofocus />
                        <input class="respuesta" id="resp4" type="text" autofocus />
                        <input class="respuesta" id="resp5" type="text" autofocus />
                        <input class="respuesta" id="resp6" type="text" autofocus />
                        <br>

                        <input type="text" name="preg" id="preg" value="" style="display: none">

                        <center>
                            <button class="btn btn-outline-success" onclick="termino()">Validar</button>
                        </center>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="mod7.1_eval.php" class="btn btn-success">Anterior</a>
                    <!--<a href="../modulo7.2/mod7.2_inicio.php" class="btn btn-success btnSig retraso3">Siguiente</a>-->
                    <button id="btn-siguiente"  class="btn btn-success" type="submit">Siguiente</button>                    
                    <!-- onclick="evaluacion()" -->
                </center>
                </form>
                <?php
                    include '../../../../functions/paginacion.php';
                    pag(2);
                ?>
                <p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative
                            Commons Reconocimiento Compartir igual 4.0</a></p>
                <br /><br />
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
  <!-- <script src="assets/js/preguntas.js"></script> -->
  <script src="assets/js/actividad.js"></script>
  
</body>

</html>