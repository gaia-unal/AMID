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
  <link href="assets/css/check.css" rel="stylesheet">
  <link href="assets/css/preguntas.css" rel="stylesheet">
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
                    <a href="../../modulo4/module4.php" class="list-group-item">Módulo 4</a>
                    <a href="../../modulo5/module5.php" class="list-group-item">Módulo 5</a>
                    <a href="../../modulo6/module6.php" class="list-group-item">Módulo 6</a>
                    <a href="../module7.php" class="list-group-item active">Módulo 7</a>
                    <ul class="list-group-item">
                        <a href="../modulo7.1/mod7.1_inicio.php" class="list-group-item active">Unidad 1</a>
                        <ul class="list-group-item">
                            <a href="mod7.1_temas.php" class="list-group-item">Temas</a>
                            <a href="1Wiki/index.php" class="list-group-item">Actividades</a>
                            <a href="#" class="list-group-item active">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 2</a>
                    </ul>
                    <a href="../../modulo8/module8.php" class="list-group-item">Módulo 8</a>
                    <a href="../../modulo9/module9.php" class="list-group-item ">Módulo 9</a>
                    <a href="../../modulo10/module10.php" class="list-group-item ">Módulo 10</a>
                    <a href="../../modulo11/module11.php" class="list-group-item ">Módulo 11</a>
                    <a href="../../modulo12/module12.php" class="list-group-item ">Módulo 12</a>
                    <br />
                    <br />
                </div>
                <br /><br />
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <br>
                <h1>Unidad 1: Los jóvenes en el mundo virtual</h1>

                
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Evaluación Unidad 1</h4>
                        <p class="card-text">
                            <!-- Pregunta 1 -->
                            <h4> 1. ¿Cuáles son los principales intereses de los niños y adolescentes en
                                Internet?</h4>
                            <label class="container" id="p1-r1">
                                <input type="radio" name="preg1" id="opc1" onclick="incorrecto(1);">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp a. Jugar, usar redes sociales y ver vídeos.</p>
                            </label>
                            <label class="container" id="p1-r2">
                                <input type="radio" name="preg1" id="opc2" onclick="correcto(1);">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp b. Trabajos del colegio, escuchar musica y usar redes sociales.</p>
                            </label>
                            <label class="container" id="p1-r3">
                                <input type="radio" name="preg1" id="opc3" onclick="incorrecto(1);">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp c. Pasar tiempo en la un mundo virtual, usar redes sociales, hacer
                                    trabajos del colegio.</p>
                            </label>
                            <!-- Pregunta 2 -->
                            <h4> 2. ¿Qué conductas se pueden pasar por alto en aquellos que usan Internet?</h4>
                            <label class="container" id="p2-r1">
                                <input type="radio" name="preg2" id="opc1" onclick="incorrecto(2);">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp a. Tolerancia, diversión y buen juicio.</p>
                            </label>
                            <label class="container" id="p2-r2">
                                <input type="radio" name="preg2" id="opc2" onclick="incorrecto(2);">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp b. Síndrome de abstinencia, perdida de control y cambios de
                                    comportamiento.</p>
                            </label>
                            <label class="container" id="p2-r3">
                                <input type="radio" name="preg2" id="opc3" onclick="correcto(2);">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp c. Buen comportamiento, obediencia y acato de las normas y reglas.</p>
                            </label>
                            <!-- Pregunta 3 -->
                            <h4> 3. ¿Qué herramientas puede utilizar para inculcar un buen comportamiento en
                                Internet?</h4>
                            <label class="container" id="p3-r1">
                                <input type="radio" name="preg3" id="opc1" onclick="incorrecto(3);">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp a. Wikis, redes sociales y dispositivos moviles.</p>
                            </label>
                            <label class="container" id="p3-r2">
                                <input type="radio" name="preg3" id="opc2" onclick="incorrecto(3);">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp b. Facebook, wikis y correo electrónico.</p>
                            </label>
                            <label class="container" id="p3-r3">
                                <input type="radio" name="preg3" id="opc3" onclick="correcto(3);">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp c. Wikis.</p>
                            </label>
                            <!--Pregunta 4-->
                            <h4> 4. ¿Cuál corresponde al lugar más usado por los jóvenes para navegar en
                                Internet?</h4>
                            <label class="container" id="p4-r1">
                                <input type="radio" name="preg4" id="opc1" onclick="correcto(4);">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp a. Sala u otra habitación común.</p>
                            </label>
                            <label class="container" id="p4-r2">
                                <input type="radio" name="preg4" id="opc2" onclick="incorrecto(4);">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp b. Habitación privada.</p>
                            </label>
                            <label class="container" id="p4-r3">
                                <input type="radio" name="preg4" id="opc3" onclick="incorrecto(4);">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp c. Cualquier lugar que permita conexión a través de una plataforma
                                    movil.</p>
                            </label>
                            <!-- Pregunta 5 -->
                            <h4> 5. Segun las regulaciones de privacidad, ¿Cuál es la edad mínima para navegar
                                en Redes sociales?
                            </h4>
                            <label class="container" id="p5-r1">
                                <input type="radio" name="preg5" id="opc1" onclick="incorrecto(5);">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp a. 11 años.</p>
                            </label>
                            <label class="container" id="p5-r2">
                                <input type="radio" name="preg5" id="opc2" onclick="incorrecto(5);">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp b. 12 años.</p>
                            </label>
                            <label class="container" id="p5-r3">
                                <input type="radio" name="preg5" id="opc3" onclick="correcto(5);">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp c. 13 años.</p>
                            </label>
                            <!-- Pregunta 6 -->
                            <h4> 6. ¿Cuáles son los principales riesgos que se pueden encontrar en Internet?
                            </h4>
                            <label class="container" id="p6-r1">
                                <input type="radio" name="preg6" id="opc1" onclick="incorrecto(6);">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp a. Ciberbullying, Sexting y Grooming</p>
                            </label>
                            <label class="container" id="p6-r2">
                                <input type="radio" name="preg6" id="opc2" onclick="correcto(6);">
                                <span class="checkmark"></span>
                                <p>&nbsp;&nbsp; b. Sexting, Sextorsión, Ciberbullying y Grooming.</p>
                            </label>
                            <label class="container" id="p6-r3">
                                <input type="radio" name="preg6" id="opc3" onclick="incorrecto(6);">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp c. Sexting y Sextorsión.</p>
                            </label>
                        </p>
                        <center>
                            <a href="#" class="btn btn-outline-success" onclick="validar();">Validar</a>
                        </center>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="4Conducta/actividades.php" class="btn btn-success">Anterior</a>
                    <a href="mod7.1_eval2.php" class="btn btn-success btnSig retraso3">Siguiente</a>
                    
                </center>
                <?php
                    include '../../../../functions/paginacion.php';
                    pag(2);
                ?>
                <p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative
                            Commons Reconocimiento Compartir igual 4.0</a></p>
                <br /><br />
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
  <script src="assets/js/preguntas.js"></script>
  <!-- <script src="assets/js/actividad.js"></script> -->

</body>

</html>