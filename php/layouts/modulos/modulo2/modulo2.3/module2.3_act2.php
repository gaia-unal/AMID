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
  <link href="assets/css/animacion.css" rel="stylesheet">
  <link href="assets/css/juego.css" rel="stylesheet">
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
                            <a href="module2.3_act.php" class="list-group-item active">Actividad</a>
                            <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(3)" class="list-group-item inactive">Unidad 4</a>
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
                        <h4>Refuerzo</h4>
                        <p class="card-text">
                            Investigue y a continuación empareje cada palabra con su respectivo significado
                            <img id="imagen3" src="assets/img/palabra/3.png" onclick="validar('3')"alt="p3">
                            <img id="imagen7" src="assets/img/definicion/1.png" onclick="validar('7')" alt="d1">
                            <img id="imagen1" src="assets/img/palabra/1.png" onclick="validar('1')" alt="p1">
                            <img id="imagen10" src="assets/img/definicion/4.png" onclick="validar('10')" alt="d4">
                            <img id="imagen4" src="assets/img/palabra/4.png" onclick="validar('4')" alt="p4">
                            <img id="imagen6" src="assets/img/palabra/6.png" onclick="validar('6')" alt="p6">
                            <img id="imagen8" src="assets/img/definicion/2.png" onclick="validar('8')" alt="d2">
                            <img id="imagen2" src="assets/img/palabra/2.png" onclick="validar('2')" alt="p2">
                            <img id="imagen9" src="assets/img/definicion/3.png" onclick="validar('9')" alt="d3">
                            <img id="imagen11" src="assets/img/definicion/5.png" onclick="validar('11')" alt="d5">
                            <img id="imagen12" src="assets/img/definicion/6.png" onclick="validar('12')" alt="d6">
                            <img id="imagen5" src="assets/img/palabra/5.png" onclick="validar('5')" alt="p5">
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module2.3_act.php" class="btn btn-success">Anterior</a>
                    <a href="module2.3_act3.php" class="btn btn-success">Siguiente</a>
                </center>
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
  <script src="assets/js/script.js"></script>
  <!-- <script src="../../assets/js/script.js"></script> -->
</body>

</html>