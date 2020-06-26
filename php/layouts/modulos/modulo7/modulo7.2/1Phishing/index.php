<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AMID</title>
  <!-- Bootstrap core CSS -->
  <link href="../../../../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../../../../../../assets/css/shop-item.css" rel="stylesheet">
  <link rel="stylesheet" href="../../../../../../assets/css/sweetalert/sweetalert2.css">
  <link rel="stylesheet" href="../../../../../../assets/css/animated.css">
  <link rel="stylesheet" href="../../../../../../assets/css/style.css">
  <link rel="stylesheet" href="assets/css/estilo.css">
</head>

<body>
  <?php require "../../../../../queries/connectionDB.php";
$newConn= new Connection;
$newConn->connectionDB(); ?>
  <?php require '../../../../../queries/activeSession.php'; ?>  
  <?php $rutaSession="../../../../../queries/"; include '../../../../header.php'; ?>


    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="my-4">Módulos AMID</h1>
                <div class="list-group">
                    <a href="../../../modulo1/module1.php" class="list-group-item">Módulo 1</a>
                    <a href="../../../modulo2/module2.php" class="list-group-item">Módulo 2</a>
                    <a href="../../../modulo3/module3.php" class="list-group-item">Módulo 3</a>
                    <a href="../../../modulo4/module4.php" class="list-group-item">Módulo 4</a>
                    <a href="../../../modulo5/module5.php" class="list-group-item">Módulo 5</a>
                    <a href="../../../modulo6/module6.php" class="list-group-item">Módulo 6</a>
                    <a href="../../module7.php" class="list-group-item active">Módulo 7</a>
                    <ul class="list-group-item">
                        <a href="../modulo7.1/mod7.1_inicio.php" class="list-group-item">Unidad 1</a>
                        <a href="../mod7.2_inicio.php" class="list-group-item active">Unidad 2</a>
                        <ul class="list-group-item">
                            <a href="../mod7.2_temas.php" class="list-group-item">Temas</a>
                            <a href="#" class="list-group-item active">Actividades</a>
                            <a href="../mod7.2_eval.php" class="list-group-item">Evaluación</a>
                        </ul>
                    </ul>
                    <a href="../../../modulo8/module8.php" class="list-group-item">Módulo 8</a>
                    <a href="../../../modulo9/module9.php" class="list-group-item">Módulo 9</a>
                    <a href="../../../modulo10/module10.php" class="list-group-item ">Módulo 10</a>
                    <a href="../../../modulo11/module11.php" class="list-group-item ">Módulo 11</a>
                    <a href="../../../modulo12/module12.php" class="list-group-item ">Módulo 12</a>
                </div>
                <br /><br />
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <h1><br>Unidad 2: Retos y riesgos en el mundo virtual </h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Phishing</h4>
                        <h4>¿Qué es Phishing?</h4>
                        <blockquote
                            cite="http://web.icam.es/bucket/Faustino%20Gudín%20-%20Nuevos%20delitos%20informáticos.pdf"
                            align="justify"></blockquote>
                        <p class="card-text">
                            <ul class="content">
                                <li><a href="#" onclick="preg1();">
                                        <h4>¿Qué es Phishing?</h4>
                                    </a></li>
                                <li><a href="#" onclick="preg2();">
                                        <h4>Phishing tradicional</h4>
                                    </a></li>
                                <li><a href="#" onclick="preg3();">
                                        <h4>Spear phishing</h4>
                                    </a></li>
                                <li><a href="#" onclick="preg4();">
                                        <h4>Smishing (SMS)</h4>
                                    </a></li>
                                <li><a href="#" onclick="preg5();">
                                        <h4>Vishing</h4>
                                    </a></li>
                            </ul>
                            <h4>Referencias</h4>
                            Fuente: Paus,L (2015). Phishing tradicional en Paypal [Imagen]. Recuperado de:
                            https://www.welivesecurity.com/la-es/2015/05/08/5-tipos-de-phishing/f <br>
                            Fuente: Paus,L (2015). Mishing vía whatsapp [Imagen]. Recuperado de:
                            https://www.welivesecurity.com/la-es/2015/05/08/5-tipos-de-phishing/
                        </p>
                        </blockquote>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="../mod7.2_temas.php" class="btn btn-success">Anterior</a>
                    <a href="actividad.php" class="btn btn-success btnSig retraso3">Siguiente</a>
                    
                </center>
                <?php
                    include '../../../../../functions/paginacion.php';
                    pag(3);
                ?>
                <p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative
                            Commons Reconocimiento Compartir igual 4.0</a></p>
                <br /><br />
            </div>
            <!-- /.col-lg-9 -->
        </div>
    </div>
  <!-- /.container -->

  <?php $ruta="../../../../../../assets"; include '../../../../footer.php';?>

<!-- Bootstrap core JavaScript -->
    <script src="../../../../../../vendor/jquery/jquery.min.js"></script>
    <script src="../../../../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="../../../../js/script.js"></script> -->
    <script src="../../../../../../assets/js/script.js"></script>
    <script src="../../../../../../assets/js/sweetalert/sweetalert2.js"></script>
    <script src="assets/js/info.js"></script>
</body>

</html>