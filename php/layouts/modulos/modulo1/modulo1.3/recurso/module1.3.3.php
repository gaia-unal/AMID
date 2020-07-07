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
  <!-- <link href="assets/css/estilo.css" rel="stylesheet"> -->
</head>

<body>
<?php require_once "../../../../../queries/connectionDB.php"; 
  $newConn= new Connection;
  $newConn->connectionDB();
  ?>
  <?php require '../../../../../queries/activeSession.php'; ?>  
  <?php $rutaSession="../../../../../queries/"; include '../../../../header.php'; ?>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="my-4">Módulos AMID</h1>
                <div class="list-group">
                    <a href="../../module1.php" class="list-group-item active">Módulo 1</a>
                    <ul class="list-group-item">
                        <a href="../../modulo1.1/module1.1_inicio.php" class="list-group-item">Unidad 1</a>
                        <a href="../../modulo1.2/module1.2_inicio.php" class="list-group-item">Unidad 2</a>
                        <a href="../module1.3_inicio.php" class="list-group-item active">Unidad 3</a>
                        <ul class="list-group-item">
                            <a href="../module1.3_temas.php" class="list-group-item">Temas</a>
                            <a href="module1.3.1.php" class="list-group-item active">Actividad</a>
                            <a href="../module1.3_eval.php" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(3)" class="list-group-item inactive">Unidad 4</a>
                    </ul>
                    <a href="../../../modulo2/module2.php" class="list-group-item">Módulo 2</a>
                    <a href="../../../modulo3/module3.php" class="list-group-item">Módulo 3</a>
                    <a href="../../../modulo4/module4.php" class="list-group-item">Módulo 4</a>
                    <a href="../../../modulo5/module5.php" class="list-group-item">Módulo 5</a>
                    <a href="../../../modulo6/module6.php" class="list-group-item">Módulo 6</a>
                    <a href="../../../modulo7/module7.php" class="list-group-item">Módulo 7</a>
                    <a href="../../../modulo8/module8.php" class="list-group-item">Módulo 8</a>
                    <a href="../../../modulo9/module9.php" class="list-group-item">Módulo 9</a>
                    <a href="../../../modulo10/module10.php" class="list-group-item">Módulo 10</a>
                    <a href="../../../modulo11/module11.php" class="list-group-item">Módulo 11</a>
                    <a href="../../../modulo12/module12.php" class="list-group-item">Módulo 12</a>
                </div>
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <h1><br>Unidad 3: Interactuando con los medios y otros proveedores de información</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Reflexión</h4>
                        <p class="card-text">
                            <ul>
                                <li>Seleccione un texto mediático e informacional de su elección y aplique las preguntas
                                    claves enumeradas anteriormente. ¿Qué es lo que puede aprender sobre la producción
                                    de medios e industrias, los mensajes que se transmiten, así como la audiencia
                                    seleccionada?</li>
                                <textarea name="" id="" cols="100" rows="10"
                                    placeholder="Escriba su respuesta aquí"></textarea> <br>
                                Piense sobre una actividad personal o económica que a usted le gustaría emprender y
                                responda:
                                <li>¿Cuáles son mis necesidades de información?</li>
                                <textarea name="" id="" cols="100" rows="10"
                                    placeholder="Escriba su respuesta aquí"></textarea>
                                <li>¿Cómo puedo identificar y definir esta necesidad?</li>
                                <textarea name="" id="" cols="100" rows="10"
                                    placeholder="Escriba su respuesta aquí"></textarea>
                                <li>¿Acaso la información que yo necesito existe de la manera en que la necesito? ¿De lo
                                    contrario, que acción puedo tomar?</li>
                                <textarea name="" id="" cols="100" rows="10"
                                    placeholder="Escriba su respuesta aquí"></textarea>
                                <li>¿Cómo entender, organizar y valorar la información hallada?</li>
                                <textarea name="" id="" cols="100" rows="10"
                                    placeholder="Escriba su respuesta aquí"></textarea>
                                <li>¿Cómo puedo presentar esta información en formatos que se puedan utilizar?</li>
                                <textarea name="" id="" cols="100" rows="10"
                                    placeholder="Escriba su respuesta aquí"></textarea>
                                <li>¿Cómo puedo preservar, almacenar y reutilizar, grabar y archivar la información?
                                </li>
                                <textarea name="" id="" cols="100" rows="10"
                                    placeholder="Escriba su respuesta aquí"></textarea>
                                Liste actividades que usted hace durante el día, desde el momento en que se despierta en
                                la mañana hasta cuando se acuesta por la noche. <br>
                                1. <input type="text" name="medios" id="m1"><br><br>
                                2. <input type="text" name="medios" id="m2"><br><br>
                                3. <input type="text" name="medios" id="m3"><br><br>
                                4. <input type="text" name="medios" id="m4"><br><br>
                                5. <input type="text" name="medios" id="m5"><br><br>
                                Con base en la lista, responda:
                                <li>¿Necesita información para participar en estas actividades?</li>
                                <textarea name="" id="" cols="100" rows="10"
                                    placeholder="Escriba su respuesta aquí"></textarea>
                                <li>Seleccione una de las actividades listads, ¿qué información necesita para su
                                    realización? Por ejemplo, necesita saber a qué temperatura está afuera para poder
                                    vestirse; necesita saber la situación del tránsito antes de tomar el bus; necesita
                                    saber acerca de la economía si es que va a solicitar un préstamo.</li>
                                <textarea name="" id="" cols="100" rows="10"
                                    placeholder="Escriba su respuesta aquí"></textarea>
                                <li>¿Qué tan importante es la información en su vida diaria? ¿Cuántas decisiones serían
                                    difíciles de tomar sin tener la información?</li>
                                <textarea name="" id="" cols="100" rows="10"
                                    placeholder="Escriba su respuesta aquí"></textarea>
                            </ul>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module1.3.2.php" class="btn btn-success">Anterior</a>
                    <a href="../module1.3_eval.php" class="btn btn-success">Siguiente</a>
                </center>
                <?php
                    include '../../../../../functions/paginacion.php';
                    pag(3);
                ?>
                <p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative
                        Commons Reconocimiento Compartir igual 4.0</a></p>
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
  <script src="assets/js/script.js"></script>
</body>

</html>