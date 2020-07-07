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
  <link href="../../../../../../assets/css/style.css" rel="stylesheet">
  
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
                    <a href="../../module4.php" class="list-group-item active">Módulo 4</a>
                    <ul class="list-group-item">
                        <a href="../module4.1_inicio.php" class="list-group-item active">Unidad 1</a>
                        <ul class="list-group-item">
                            <a href="../module4.1_temas.php" class="list-group-item">Temas</a>
                            <a href="module4.1.1.php" class="list-group-item active">Actividad</a>
                            <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 2</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 4</a>
                    </ul>
                    <a href="../../../modulo5/module5.php" class="list-group-item">Módulo 5</a>
                    <a href="../../../modulo6/module6.php" class="list-group-item">Módulo 6</a>
                    <a href="../../../modulo7/module7.php" class="list-group-item">Módulo 7</a>
                    <a href="../../../modulo8/module8.php" class="list-group-item">Módulo 8</a>
                    <a href="../../../modulo9/module9.php" class="list-group-item">Módulo 9</a>
                    <a href="../../../modulo10/module10.php" class="list-group-item">Módulo 10</a>
                    <a href="../../../modulo11/module11.php" class="list-group-item">Módulo 11</a>
                    <a href="../../../modulo12/module12.php" class="list-group-item">Módulo 12</a>
                </div>
                <br />
                <br />
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <h1><br>Unidad 1: Lectura de medios y textos de información</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Refuerzo y reflexión</h4>
                        <p class="card-text">
                            Seleccione aquellos que corresponden a un elemento, formato o característica del lenguaje
                            televisivo
                            <ul>
                                <li><input type="checkbox" name="" id="" onclick="incorrecto(0)">No utilizar
                                    repeticiones</li>
                                <li><input type="checkbox" name="" id="" onclick="correcto(1)">Contiene grandes bloques
                                    de publicidad</li>
                                <li><input type="checkbox" name="" id="" onclick="correcto(2)">Estudio</li>
                                <li><input type="checkbox" name="" id="" onclick="incorrecto(3)">Preparación y
                                    planeación</li>
                                <li><input type="checkbox" name="" id="" onclick="correcto(4)">Documental</li>
                                <li><input type="checkbox" name="" id="" onclick="correcto(5)">Pocos decorados</li>
                                <li><input type="checkbox" name="" id="" onclick="incorrecto(6)">Léxico avanzado</li>
                                <li><input type="checkbox" name="" id="" onclick="incorrecto(7)">Poco superficial</li>
                                <li><input type="checkbox" name="" id="" onclick="correcto(8)">Guión</li>
                                <li><input type="checkbox" name="" id="" onclick="correcto(9)">Telenovelas</li>
                            </ul>
                            <ol>
                                <li>¿Qué son los medios audiovisuales?</li>
                                <textarea name="" id="" cols="80" rows="5"></textarea>
                                <li>¿Cómo se pueden usar los medios audiovisuales en el aula de clase?</li>
                                <textarea name="" id="" cols="80" rows="5"></textarea>
                            </ol>
                            <center>
                                <button class="btn btn-outline-success" onclick="termino()">Validar</button>
                            </center>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module4.1.4.php" class="btn btn-success">Anterior</a>
                    <a href="module4.1.6.php" class="btn btn-success">Siguiente</a>
                </center>
                <?php
                    include '../../../../../functions/paginacion.php';
                    pag(3);
                ?>
        <p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative Commons
            Reconocimiento Compartir igual 4.0</a></p>
        <br><br>
      </div>
      <!-- /.col-lg-9 -->
    </div>
  </div>
  <!-- /.container -->

  <?php $ruta="../../../../../../assets"; include '../../../../footer.php';?>

  <!-- Bootstrap core JavaScript -->
  <script src="../../../../../../vendor/jquery/jquery.min.js"></script>
  <script src="../../../../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="../../../../../../assets/js/script.js"></script>
  <script src="assets/script5.js"></script>
</body>

</html>