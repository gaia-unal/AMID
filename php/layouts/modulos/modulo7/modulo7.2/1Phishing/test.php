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
                        <a href="../modulo7.1/mod7.1_inicio.php" class="list-group-item">Unidad 1</a>
                        <a href="../mod7.2_inicio.php" class="list-group-item active">Unidad 2</a>
                        <ul class="list-group-item">
                            <a href="../mod7.2_temas.php" class="list-group-item">Temas</a>
                            <a href="index.php" class="list-group-item active">Actividades</a>
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
                <h1>Phishing</h1>
                <br />
                <div class="card mt-4">
                    <div class="card-body">
                        <!--Contenido!!!!-->
                        <div class="preguntas">
                            <!-- Pregunta 1 -->
                            <h4>1) ¿Qué es el <em>Phishing</em>?</h4>
                            <label class="container" id="p1-r1">
                                <input type="radio" name="preg1" id="opc1" onclick="correcto();">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp a. Es un delito cibernético en el que intentan adquirir información
                                    confidencial como números de tarjetas de crédito, contraseñas y otros datos
                                    personales, por medio de engaños.
                                </p>
                            </label>
                            <label class="container" id="p1-r2">
                                <input type="radio" name="preg1" id="opc2" onclick="incorrecto('a');">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp b. Es un estafador que intenta acceder a los correos electrónicos para
                                    enviar mensajes spam.</p>
                            </label>
                            <label class="container" id="p1-r3">
                                <input type="radio" name="preg1" id="opc3" onclick="incorrecto('a');">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp c. Es un delito cibernético en el que un estafador vende productos
                                    engañosos.</p>
                            </label>
                            <!-- Pregunta 2 -->
                            <h4>¿Cuál de las siguientes opciones <strong>NO</strong> es un tipo de <em>Phishing</em>?
                            </h4>
                            <label class="container" id="p2-r1">
                                <input type="radio" name="preg2" id="opc1" onclick="incorrecto('e');">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp a. Phishing tradicional.</p>
                            </label>
                            <label class="container" id="p2-r2">
                                <input type="radio" name="preg2" id="opc2" onclick="correcto('e');">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp b. Phishing steal. </p>
                            </label>
                            <label class="container" id="p2-r3">
                                <input type="radio" name="preg2" id="opc3" onclick="incorrecto('e');">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp c. Spear Phishing.</p>
                            </label>
                            <label class="container" id="p2-r4">
                                <input type="radio" name="preg2" id="opc4" onclick="incorrecto('e');">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp d. Vishing.</p>
                            </label>

                            <!-- Pregunta 3 -->
                            <h4>¿Es posible que realicen <em>Phishing</em> por medio de correos electrónicos?</h4>
                            <label class="container" id="p3-r1">
                                <input type="radio" name="preg3" id="opc1" onclick="incorrecto('b');">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp a. Sí, pero solo a las personas que tienen cuentas bancarias.</p>
                            </label>
                            <label class="container" id="p3-r2">
                                <input type="radio" name="preg3" id="opc2" onclick="correcto();">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp b. Sí, y es un método muy usado por los delincuentes.</p>
                            </label>
                            <label class="container" id="p3-r3">
                                <input type="radio" name="preg3" id="opc3" onclick="incorrecto('b');">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp c. No porque el correo electrónico es muy seguro y no permite que lleguen
                                    correos engañosos.</p>
                            </label>
                            <!--Pregunta 4 -->
                            <h4>Los delincuentes pueden hacer <em>Phishing</em> por mensajes de texto o llamadas?</h4>
                            <label class="container" id="p4-r1">
                                <input type="radio" name="preg4" id="opc1" onclick="incorrecto('b');">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp a. No, el Phishing sólo se refiere al robo de identidad por medio de
                                    correo electrónico.</p>
                            </label>
                            <label class="container" id="p4-r2">
                                <input type="radio" name="preg4" id="opc2" onclick="incorrecto();">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp b. No porque el Phishing solo es por internet</p>
                            </label>
                            <label class="container" id="p4-r3">
                                <input type="radio" name="preg4" id="opc3" onclick="correcto('b');">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp c. Sí, la intención de los delincuentes es robar información personal, por
                                    lo tanto, es posible que lo hagan por medio de mensajes, llamadas, correos y
                                    falsificación de páginas web.</p>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="actividad.php" class="btn btn-success">Anterior</a>
                    <a href="../2informacionMedica/index.php" class="btn btn-success">Siguiente</a>
                    
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