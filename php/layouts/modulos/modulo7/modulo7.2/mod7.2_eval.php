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
                        <a href="../modulo7.1/mod7.1_inicio.php" class="list-group-item">Unidad 1</a>
                        <a href="../modulo7.2/mod7.2_inicio.php" class="list-group-item active">Unidad 2</a>
                        <ul class="list-group-item">
                            <a href="mod7.2_temas.php" class="list-group-item">Temas</a>
                            <a href="1Phishing/index.php" class="list-group-item">Actividades</a>
                            <a href="#" class="list-group-item active">Evaluación</a>
                        </ul>
                    </ul>
                    <a href="../../modulo8/module8.php" class="list-group-item">Módulo 8</a>
                    <a href="../../modulo9/module9.php" class="list-group-item ">Módulo 9</a>
                    <a href="../../modulo10/module10.php" class="list-group-item ">Módulo 10</a>
                    <a href="../../modulo11/module11.php" class="list-group-item ">Módulo 11</a>
                    <a href="../../modulo12/module12.php" class="list-group-item ">Módulo 12</a>
                </div>
                <br /><br />
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <br>
                <h1>Unidad 2: Retos y riesgos en el mundo virtual</h1>

                <form action="../../../../queries/evaluacion.php?id_und=m7u21" method="post">

                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Evaluación Unidad 2</h4>
                        <p class="card-text">
                            <!-- Pregunta 1 -->
                            <h4> 1. ¿Qué es el Phishing?</h4>
                            <label class="container" id="p1-r1">
                                <input type="radio" name="preg1" id="opc1" onclick="incorrecto(1);" value = "0">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp a. Es un estafador que intenta acceder a los correos electrónicos para
                                    enviar
                                    mensajes spam.</p>
                            </label>
                            <label class="container" id="p1-r2">
                                <input type="radio" name="preg1" id="opc2" onclick="correcto(1);" value = "0.83">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp b. Es un delito cibernético en el que intentan adquirir información
                                    confidencial
                                    como números de
                                    tarjetas de crédito, contraseñas y otros datos personales, por medio de engaños.
                                </p>
                            </label>
                            <label class="container" id="p1-r3">
                                <input type="radio" name="preg1" id="opc3" onclick="incorrecto(1);" value = "0">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp c. Es un delito cibernético en el que un estafador vende productos
                                    engañosos.</p>
                            </label>
                            <!-- Pregunta 2 -->
                            <h4> 2. ¿ Los delincuentes pueden hacer Phishing por mensajes de texto o llamadas?
                            </h4>
                            <label class="container" id="p2-r1">
                                <input type="radio" name="preg2" id="opc1" onclick="correcto(2);" value = "0.83">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp a. Sí, la intención de los delincuentes es robar información personal,
                                    por lo
                                    tanto, es posible que
                                    lo hagan por medio de mensajes, llamadas, correos y falsificación de páginas
                                    web.</p>
                            </label>
                            <label class="container" id="p2-r2">
                                <input type="radio" name="preg2" id="opc2" onclick="incorrecto(2);" value = "0">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp b. No porque las personas no suelen contestar llamadas de números
                                    desconocidos.
                                </p>
                            </label>
                            <label class="container" id="p2-r3">
                                <input type="radio" name="preg2" id="opc3" onclick="incorrecto(2);" value = "0">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp c. No, porque el Phishing solo es por internet y llega únicamente a
                                    los correos
                                    electrónicos.</p>
                            </label>
                            <!-- Pregunta 3 -->
                            <h4> 3. Con respecto a la información médica encontrada en internet, ¿puede usted
                                reemplazar la consulta
                                con un médico si encuentra la información que está buscando?</h4>
                            <label class="container" id="p3-r1">
                                <input type="radio" name="preg3" id="opc1" onclick="incorrecto(3);" value = "0">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp a. Sí, siempre y cuando indiquen los medicamentos que debo tomar con
                                    sus dosis.
                                </p>
                            </label>
                            <label class="container" id="p3-r2">
                                <input type="radio" name="preg3" id="opc2" onclick="incorrecto(3);" value = "0">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp b. No porque de pronto la información no está actualizada.</p>
                            </label>
                            <label class="container" id="p3-r3">
                                <input type="radio" name="preg3" id="opc3" onclick="correcto(3);" value = "0.83">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp c. No, ninguna información debe reemplazar la consulta con un médico
                                    que lo puede
                                    asesorar de acuerdo
                                    con su situación específica.</p>
                            </label>
                            <!-- Pregunta 4 -->
                            <h4> 4. Si un sitio web ofrece soluciones rápidas y fáciles para sus problemas de
                                salud y promete curas
                                milagrosas ¿debe confiar en ella?</h4>
                            <label class="container" id="p4-r1">
                                <input type="radio" name="preg4" id="opc1" onclick="incorrecto(4);" value = "0">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp a. Sí, siempre y cuando tenga buenas referencias y buenos comentarios
                                    de las
                                    personas.</p>
                            </label>
                            <label class="container" id="p4-r2">
                                <input type="radio" name="preg4" id="opc2" onclick="correcto(4);" value = "0.83">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp b. No, se debe desconfiar de los sitios web que proclaman la cura a
                                    muchas
                                    enfermedades.</p>
                            </label>
                            <label class="container" id="p4-r3">
                                <input type="radio" name="preg4" id="opc3" onclick="incorrecto(4);" value = "0">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp c. Sí porque es muy bueno encontrar tanta información en un solo
                                    lugar.</p>
                            </label>
                            <!-- Pregunta 5 -->
                            <h4> 5. ¿Qué es la violación del derecho de autor?</h4>
                            <label class="container" id="p5-r1">
                                <input type="radio" name="preg5" id="opc1" onclick="incorrecto(5);" value = "0">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp a. Es un conjunto de normas jurídicas que plantean los derechos
                                    morales y
                                    patrimoniales que tienen
                                    los autores</p>
                            </label>
                            <label class="container" id="p5-r2">
                                <input type="radio" name="preg5" id="opc2" onclick="incorrecto(5);" value = "0">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp b. Se da cuando una persona copia y pega un texto de otra sin cambiar
                                    absolutamente nada y no le da
                                    los créditos.</p>
                            </label>
                            <label class="container" id="p5-r3">
                                <input type="radio" name="preg5" id="opc3" onclick="correcto(5);" value = "0.83">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp c. Es un fraude relacionado con la conducta de los usuarios que no
                                    tienen en
                                    cuenta el derecho de
                                    autor, ya sea a propósito o accidentalmente y pone al violador en riesgo de ser
                                    sancionado</p>
                            </label>
                            <!-- Pregunta 6 -->
                            <h4> 6. ¿Cuál de las siguientes opciones <strong>NO</strong> es un delito que viola
                                los derechos de
                                autor?</h4>
                            <label class="container" id="p6-r1">
                                <input type="radio" name="preg6" id="opc1" onclick="correcto(6);" value = "0.83">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp a. Inscribir en el registro de autor el nombre del autor real, con el
                                    título
                                    adecuado y sin alterar
                                    el texto. </p>
                            </label>
                            <label class="container" id="p6-r2">
                                <input type="radio" name="preg6" id="opc2" onclick="incorrecto(6);" value = "0">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp b. Publicar, total o parcialmente, sin autorización previa del titular
                                    del
                                    derecho, una obra inédita.
                                </p>
                            </label>
                            <label class="container" id="p6-r3">
                                <input type="radio" name="preg6" id="opc3" onclick="incorrecto(6);" value = "0">
                                <span class="checkmark"></span>
                                <p>&nbsp&nbsp c. Suprimir o alterar la información esencial para la gestión
                                    electrónica de
                                    derechos o importe,
                                    distribuya o comunique ejemplares con la información suprimida o alterada.</p>
                            </label>
                        </p>
                        <!--<center>
                            <a href="#" class="btn btn-outline-success" onclick="validar();">Validar</a>
                        </center>-->
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="../modulo7.2/3derechosAutor/index.php" class="btn btn-success">Anterior</a>
                    <!--<a href="mod7.2_eval2.php" class="btn btn-success btnSig retraso3">Siguiente</a>-->
                    <button id="btn-siguiente"  class="btn btn-success" type="submit" onclick="validar(); evaluacion()">Siguiente</button>
                </center>
                </form>
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
  <!-- <script src="assets/js/script.js"></script> -->

</body>

</html>