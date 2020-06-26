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
                            <a href="../1Phishing/index.php" class="list-group-item active">Actividades</a>
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
                <h1><br>Unidad 2: Retos y riesgos en el mundo virtual</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Información mediática en Internet</h4>
                        <p class="card-text">
                            <h4>Confiabilidad de la información que se encuentra en una página web sobre temas de salud
                                y medicina</h4>
                            <div id="texto">
                                En esta sección revisaremos un fragmento del artículo: "Acceso a información médica
                                actualizada en Internet: retos de la medicina actual". Haz clic en la flecha para
                                comenzar. <br>
                                <center>
                                    <a href="#" onclick="art();remove();">
                                        <img class="animated bounceIn" src="../../../../../../assets/img/flecha.png"
                                            alt="Inicio">
                                    </a></center>
                            </div>
                            <div class="animated bounceIn retraso5">
                                Ahora lee el siguiente texto para guiarse antes de confiar en un sitio web y luego
                                realiza el test. Haz clic en las flechas para navegar en el contenido.
                                <div id="img1">
                                    <img class="imagen" src="assets/img/img1.png">
                                </div>
                                <div id="img2">
                                    <img class="imagen" src="assets/img/img2.png">
                                </div>
                                <div id="img3">
                                    <img class="imagen" src="assets/img/img3.png">
                                </div>
                                <div id="img4">
                                    <img class="imagen" src="assets/img/img4.png">
                                </div>
                                <div id="img5">
                                    <img class="imagen" src="assets/img/img5.png">
                                </div>
                                <div id="img6">
                                    <img class="imagen" src="assets/img/img6.png">
                                </div>
                                <div id="img7">
                                    <img class="imagen" src="assets/img/img7.png">
                                </div>
                                <div id="img8">
                                    <img class="imagen" src="assets/img/img8.png">
                                </div>
                                <div id="btnAdelante">
                                    <a href="#" onclick="avanzar();">
                                        <img class="btnF" src="../../../../../../assets/img/flecha.png">
                                    </a>
                                </div>
                                <div id="btnAtras">
                                    <a href="#" onclick="volver();">
                                        <img class="btnA" src="../../../../../../assets/img/flecha1.png">
                                    </a>
                                </div>
                            </div>
                            <h4>Referencias</h4>
                            César Gamboa-Peñaranda Antón Zamora-Ilarionov Edén Galán-Rodas Acta Médica Costarricense
                            vol. 56 issue 4 (2014) pp: 186-187 Published by
                            http://creativecommons.org/licenses/by-nc-nd/3.0/
                        </p>
                        <center>
                            <!--
                            
                            
                            -->
                        </center>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="../1Phishing/index.php" class="btn btn-success">Anterior</a>
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