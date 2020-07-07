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
  <link rel="stylesheet" href="assets/css/preguntas.css">
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
                        <a href="../../modulo7.1/mod7.1_inicio.php" class="list-group-item">Unidad 1</a>
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
                <br>
                <h1>Unidad 2: Retos y riesgos en el mundo virtual</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="preguntas">
                            <!-- Pregunta 1 -->
                            <h4>1) ¿Cuál es la herramienta que implementó <em>Google</em> que está orientada a la
                                búsqueda de referencias científicas?</h4>
                            <label class="container" id="p1-r1">
                                <input type="radio" name="preg1" id="opc1" onclick="incorrecto();">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp a. Google tools</p>
                            </label>
                            <label class="container" id="p1-r2">
                                <input type="radio" name="preg1" id="opc2" onclick="incorrecto('a');">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp b. Google maps</p>
                            </label>
                            <label class="container" id="p1-r3">
                                <input type="radio" name="preg1" id="opc3" onclick="correcto('a');">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp c. Google Scholar (Google académico).</p>
                            </label>
                            <!-- Pregunta 2 -->
                            <h4>2) ¿Cómo se puede identificar quién administra un sitio web?</h4>
                            <label class="container" id="p2-r1">
                                <input type="radio" name="preg2" id="opc1" onclick="correcto('e');">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp a. En algunas ocasiones, por medio de la dirección del sitio web (URL).
                                </p>
                            </label>
                            <label class="container" id="p2-r2">
                                <input type="radio" name="preg2" id="opc2" onclick="incorrecto('e');">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp b. Por medio del título de la página. </p>
                            </label>
                            <label class="container" id="p2-r3">
                                <input type="radio" name="preg2" id="opc3" onclick="incorrecto('e');">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp c. Llamando al número que aparece en la página web.</p>
                            </label>
                            <label class="container" id="p2-r4">
                                <input type="radio" name="preg2" id="opc4" onclick="incorrecto('e');">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp d. Ninguna de las anteriores.</p>
                            </label>

                            <!-- Pregunta 3 -->
                            <h4>3) ¿Puede usted reemplazar la consulta con un médico si encuentra la información que
                                estaba buscando?</h4>
                            <label class="container" id="p3-r1">
                                <input type="radio" name="preg3" id="opc1" onclick="incorrecto('b');">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp a. Sí, siempre y cuando indiquen los medicamentos que debo tomar con sus
                                    dosis.</p>
                            </label>
                            <label class="container" id="p3-r2">
                                <input type="radio" name="preg3" id="opc2" onclick="correcto();">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp b. No, ninguna información debe reemplazar la consulta con un médico que
                                    lo puede asesorar de acuerdo con su situación específica.</p>
                            </label>
                            <label class="container" id="p3-r3">
                                <input type="radio" name="preg3" id="opc3" onclick="incorrecto('b');">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp c. No porque de pronto la información no está actualizada.</p>
                            </label>
                            <!--Pregunta 4 -->
                            <h4>Seleccione cuál <strong>NO</strong> es una precaución que puede ayudarle a proteger
                                mejor su información</h4>
                            <label class="container" id="p4-r1">
                                <input type="radio" name="preg4" id="opc1" onclick="incorrecto('b');">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp a. No abra enlaces inesperados. Use el sentido común al navegar por
                                    Internet.</p>
                            </label>
                            <label class="container" id="p4-r2">
                                <input type="radio" name="preg4" id="opc2" onclick="incorrecto();">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp b. Utilice contraseñas seguras. Incluya números, letras y símbolos y
                                    cámbiela frecuentemente.</p>
                            </label>
                            <label class="container" id="p4-r3">
                                <input type="radio" name="preg4" id="opc3" onclick="correcto('b');">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp c. Si todas las personas recomiendan una página, entonces esa es la
                                    indicada.</p>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="index.php" class="btn btn-success">Anterior</a>
                    <a href="../3derechosAutor/index.php" class="btn btn-success btnSig retraso3">Siguiente</a>
                    
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
    <script src="assets/js/script.js"></script>
</body>

</html>