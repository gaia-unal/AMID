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
                        <a href="../mod7.1_inicio.php" class="list-group-item active">Unidad 1</a>
                        <ul class="list-group-item">
                            <a href="../mod7.1_temas.php" class="list-group-item">Temas</a>
                            <a href="index.php" class="list-group-item active">Actividades</a>
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
                        <h4>Preguntas de opción múltiple</h4>
                        <div class="preguntas">
                            <!-- Pregunta 1 -->
                            <h4>¿Qué es wiki?</h4>
                            <label class="content" id="p1-r1">
                                <input type="radio" name="preg1" id="opc1" onclick="correcto();">
                                <span class="checkmark"></span>
                                <p>&nbsp &nbsp &nbsp a. Es una página web donde varias personas pueden editar su contenido
                                </p>
                            </label>
                            <label class="content" id="p1-r2">
                                <input type="radio" name="preg1" id="opc2" onclick="incorrecto('a');">
                                <span class="checkmark"></span>
                                <p>&nbsp &nbsp &nbsp b. Es un término que quiere decir rapido</p>
                            </label>
                            <label class="content" id="p1-r3">
                                <input type="radio" name="preg1" id="opc3" onclick="incorrecto('a');">
                                <span class="checkmark"></span>
                                <p>&nbsp &nbsp &nbsp c. Es una estructura web sencilla de manejar</p>
                            </label>
                            <!-- Pregunta 2 -->
                            <h4>¿Qué tipos de Wikis hay?</h4>
                            <label class="content" id="p2-r1">
                                <input type="radio" name="preg2" id="opc1" onclick="incorrecto('e');">
                                <span class="checkmark"></span>
                                <p>&nbsp &nbsp &nbsp a. Publico</p>
                            </label>
                            <label class="content" id="p2-r2">
                                <input type="radio" name="preg2" id="opc2" onclick="incorrecto('e');">
                                <span class="checkmark"></span>
                                <p>&nbsp &nbsp &nbsp b. Privado y protegido </p>
                            </label>
                            <label class="content" id="p2-r3">
                                <input type="radio" name="preg2" id="opc3" onclick="incorrecto('e');">
                                <span class="checkmark"></span>
                                <p>&nbsp &nbsp &nbsp c. Publico y protegido</p>
                            </label>
                            <label class="content" id="p2-r4">
                                <input type="radio" name="preg2" id="opc4" onclick="incorrecto('e');">
                                <span class="checkmark"></span>
                                <p>&nbsp &nbsp &nbsp d. Privado</p>
                            </label>
                            <label class="content" id="p2-r5">
                                <input type="radio" name="preg2" id="opc5" onclick="correcto();">
                                <span class="checkmark"></span>
                                <p>&nbsp &nbsp &nbsp e. Todas son correctas menos la b</p>
                            </label>
                            <!-- Pregunta 3 -->
                            <h4>¿Para qué sirve?</h4>
                            <label class="content" id="p3-r1">
                                <input type="radio" name="preg3" id="opc1" onclick="incorrecto('b');">
                                <span class="checkmark"></span>
                                <p>&nbsp &nbsp &nbsp a. Permite diseñar páginas web</p>
                            </label>
                            <label class="content" id="p3-r2">
                                <input type="radio" name="preg3" id="opc2" onclick="correcto();">
                                <span class="checkmark"></span>
                                <p>&nbsp &nbsp &nbsp b. Para crear contenido en páginas web de forma sencilla, el cual puede
                                    ser compartido y modificado de forma permanente</p>
                            </label>
                            <label class="content" id="p3-r3">
                                <input type="radio" name="preg3" id="opc3" onclick="incorrecto('b');">
                                <span class="checkmark"></span>
                                <p>&nbsp &nbsp &nbsp c. Subir archivos y cambiarlos cuando se desee</p>
                            </label>
                            <!--Pregunta 4 -->
                            <h4>¿Cómo se crea el contenido?</h4>
                            <label class="content" id="p4-r1">
                                <input type="radio" name="preg4" id="opc1" onclick="incorrecto('b');">
                                <span class="checkmark"></span>
                                <p>&nbsp &nbsp &nbsp a. Con una sintaxis especial</p>
                            </label>
                            <label class="content" id="p4-r2">
                                <input type="radio" name="preg4" id="opc2" onclick="correcto();">
                                <span class="checkmark"></span>
                                <p>&nbsp &nbsp &nbsp b. Dando clic en editar dentro de la pagina que desee modificar</p>
                            </label>
                            <label class="content" id="p4-r3">
                                <input type="radio" name="preg4" id="opc3" onclick="incorrecto('b');">
                                <span class="checkmark"></span>
                                <p>&nbsp &nbsp &nbsp c. Borrando el contenido anteriormente publicado y agregando uno nuevo</p>
                            </label>
                            <!--Pregunta 5 -->
                            <h4>Teniendo en cuenta la población a la que va dirigida y la materia que dicta, ¿qué
                                contenido agregaría a la wiki?</h4>
                            <textarea name="preg5" id="p5-r" cols="90" rows="10" placeholder="..."></textarea>
                            <br>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="index.php" class="btn btn-success">Anterior</a>
                    <a href="../2Internet/index.php" class="btn btn-success btnSig Retraso5">Siguiente</a>
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
    <script src="assets/js/script.js"></script>
</body>

</html>