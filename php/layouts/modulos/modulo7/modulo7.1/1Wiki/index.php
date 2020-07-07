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
                        <a href="../mod7.1_inicio.php" class="list-group-item active">Unidad 1</a>
                        <ul class="list-group-item">
                            <a href="../mod7.1_temas.php" class="list-group-item">Temas</a>
                            <a href="#" class="list-group-item active">Actividades</a>
                            <a href="../mod7.1_eval.php" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 2</a>
                    </ul>
                    <a href="../../../modulo8/module8.php" class="list-group-item">Módulo 8</a>
                    <a href="../../../modulo9/module9.php" class="list-group-item ">Módulo 9</a>
                    <a href="../../../modulo10/module10.php" class="list-group-item ">Módulo 10</a>
                    <a href="../../../modulo11/module11.php" class="list-group-item ">Módulo 11</a>
                    <a href="../../../modulo12/module12.php" class="list-group-item ">Módulo 12</a>
                </div>
                <br /><br />
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <br>
                <h1>Unidad 1: Los jóvenes en el mundo virtual</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h3>Wiki</h3>
                        <div class="img"><img onclick="preg1();" class="bounceInUp animated" id="wiki"
                                src="assets/img/wiki.png" alt="Wiki"></div>
                        <pre>                Fuente: https://es.wikipedia.org/wiki/Archivo:WIKI.gif</pre>
                        <p class="card-text">
                            Da clic en los títulos para navegar en el contenido.
                            <ul class="content">
                                <li>
                                    <a href="#" onclick="preg1();">
                                        <h4>¿Qué es?</h4>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onclick="preg2();">
                                        <h4>¿Cómo editar?</h4>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onclick="preg3();">
                                        <h4>Tipos</h4>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onclick="preg4();">
                                        <h4>Ventajas</h4>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onclick="preg5();">
                                        <h4>Desventajas</h4>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onclick="preg6();">
                                        <h4>Ejemplos</h4>
                                    </a>
                                </li>
                            </ul>
                            <h4>Referencias</h4>
                            [1] Autores: Julián Pérez Porto y Ana Gardey. Publicado: 2010. Actualizado: 2013.
                            Definicion.de: Definición de wiki (https://definicion.de/wiki/) <br> [2] Ejemplos de wikis.
                            https://ejemplos.net/ejemplos-de-wikis/ <br> [3] ¿Qué es un wiki?
                            http://www.maestrosdelweb.com/queeswiki/
                            <br> [4] - Tipos de wikis.
                            http://cca.org.mx/cca/cursos/hcaw20/Obj02/web/media/vtn/tipos_wikis.htm
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="../mod7.1_temas.php" class="btn btn-success">Anterior</a>
                    <a href="actividades.php" class="btn btn-success btnSig retraso3">Siguiente</a>
                    
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