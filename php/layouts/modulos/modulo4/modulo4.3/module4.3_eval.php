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
                    <a href="../../modulo2/module2.php" class="list-group-item">Módulo 2</a>
                    <a href="../../modulo3/module3.php" class="list-group-item">Módulo 3</a>
                    <a href="../module4.php" class="list-group-item active">Módulo 4</a>
                    <ul class="list-group-item">
                        <a href="../modulo4.1/module4.1_inicio.php" class="list-group-item">Unidad 1</a>
                        <a href="../modulo4.2/module4.2_inicio.php" class="list-group-item">Unidad 2</a>
                        <a href="module4.3_inicio.php" class="list-group-item active">Unidad 3</a>
                        <ul class="list-group-item">
                            <a href="module4.3_temas.php" class="list-group-item">Temas</a>
                            <a href="recurso/module4.3.1.php" class="list-group-item">Actividad</a>
                            <a href="#" class="list-group-item active">Evaluación</a>
                        </ul>
                        <a href="../modulo4.4/module4.4_inicio.php" class="list-group-item">Unidad 4</a>
                    </ul>
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
                <h1><br>Unidad 3: Géneros de películas y de cuentos</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Evaluación</h4>
                        <p class="card-text">
                            <ul>
                                <li>¿Qué análisis puede realizar a partir de la modificación de los carteles de las
                                    películas?</li>
                                <textarea name="" id="" cols="80" rows="5"
                                    placeholder="Escriba aquí su respuesta"></textarea>
                                <li>¿Considera que las películas pueden hacer parte de los medios audiovisuales usados
                                    en el aula?¿Por qué?</li>
                                <textarea name="" id="" cols="80" rows="5"
                                    placeholder="Escriba aquí su respuesta"></textarea>
                                <li>¿Cómo cree que las películas influyen en la vida de los estudiantes?</li>
                                <textarea name="" id="" cols="80" rows="5"
                                    placeholder="Escriba aquí su respuesta"></textarea>
                                <li>¿Cuáles de los siguientes no hacen parte de los géneros de las películas?</li>
                                1. <input type="checkbox" name="" id="opc1" onclick="correcto(0)"> Infantil <br>
                                2. <input type="checkbox" name="" id="opc2" onclick="incorrecto(1)"> De canciones <br>
                                3. <input type="checkbox" name="" id="opc3" onclick="incorrecto(2)"> Melancólicas <br>
                                4. <input type="checkbox" name="" id="opc4" onclick="correcto(3)"> Mudas <br>
                                5. <input type="checkbox" name="" id="opc5" onclick="correcto(4)"> Bélicas <br>
                            </ul>
                            &nbsp &nbsp &nbsp <button class="btn btn-outline-success"
                                onclick="termino()">Validar</button>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="recurso/module4.3.4.php" class="btn btn-success">Anterior</a>
                    <a href="../modulo4.4/module4.4_inicio.php" class="btn btn-success">Siguiente</a>
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
</body>

</html>