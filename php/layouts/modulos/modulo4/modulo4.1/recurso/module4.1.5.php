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
                <form action="../../../../../queries/actividad.php?id_act=m4u1a5" method="post">
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Refuerzo y reflexión</h4>
                        <p class="card-text">
                            Seleccione aquellos que corresponden a un elemento, formato o característica del lenguaje
                            televisivo
                            <ul>
                            <label><li><input type="checkbox" name="opc1" id="opc1">No utilizar repeticiones</li></label> <br/>
                                <label><li><input type="checkbox" name="opc2" id="opc2">Contiene grandes bloques
                                    de publicidad</li></label> <br/>
                                <label><li><input type="checkbox" name="opc3" id="opc3">Estudio</li></label> <br/>
                                <label><li><input type="checkbox" name="opc4" id="opc4">Preparación y
                                    planeación</li></label> <br/>
                                <label><li><input type="checkbox" name="opc5" id="opc5">Documental</li></label> <br/>
                                <label><li><input type="checkbox" name="opc6" id="opc6">Pocos decorados</li></label> <br/>
                                <label><li><input type="checkbox" name="opc7" id="opc7">Léxico avanzado</li></label> <br/>
                                <label><li><input type="checkbox" name="opc8" id="opc8">Poco superficial</li></label> <br/>
                                <label><li><input type="checkbox" name="opc9" id="opc9">Guión</li></label> <br/>
                                <label><li><input type="checkbox" name="opc10" id="opc10">Telenovelas</li></label>
                            </ul>
                            <center>
                                <a class="btn btn-outline-success" onclick="termino()">Validar</a>
                            </center>
                            <ol>
                                <li>¿Qué son los medios audiovisuales?</li>
                                <textarea name="preg1" style="width: 90%;" rows="6" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                                <li>¿Cómo se pueden usar los medios audiovisuales en el aula de clase?</li>
                                <textarea name="preg2" style="width: 90%;" rows="6" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                            </ol>
                            <input type="text" class="sr-only" id="pointsNota" name="pointsNota" value="1">
                            <input type="text" class="sr-only" id="pointsGood" name="pointsGood" value="0">
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module4.1.4.php" class="btn btn-success">Anterior</a>
                    <button id="btn-siguiente" class="btn btn-success" type="submit">Siguiente</button>
                    <!-- <a href="module4.1.6.php" class="btn btn-success">Siguiente</a> -->
                </center>
                </form>
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