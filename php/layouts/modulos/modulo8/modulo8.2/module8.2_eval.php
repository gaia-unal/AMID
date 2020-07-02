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
    <link rel="stylesheet" href="../../../../../assets/css/animated.css">
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
                    <a href="../../modulo7/module7.php" class="list-group-item">Módulo 7</a>
                    <a href="../module8.php" class="list-group-item active">Módulo 8</a>
                    <ul class="list-group-item">
                        <a href="../modulo8.1/module8.1_inicio.php" class="list-group-item">Unidad 1</a>
                        <a href="module8.2_inicio.php" class="list-group-item active">Unidad 2</a>
                        <ul class="list-group-item">
                            <a href="module8.2_temas.php" class="list-group-item">Temas</a>
                            <a href="module8.2_act.php" class="list-group-item">Actividad</a>
                            <a href="#" class="list-group-item active">Evaluación</a>
                        </ul>
                        <a href="../modulo8.3/module8.3_inicio.php" class="list-group-item">Unidad 3</a>
                    </ul>
                    <a href="../../modulo9/module9.php" class="list-group-item">Módulo 9</a>
                    <a href="../../modulo10/module10.php" class="list-group-item">Módulo 10</a>
                    <a href="../../modulo11/module11.php" class="list-group-item">Módulo 11</a>
                    <a href="../../modulo12/module12.php" class="list-group-item">Módulo 12</a>
                </div>
                <br /><br />
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <h1><br>Unidad 2: Ambiente de Aprendizaje y Alfabetización Informacional</h1>

                <form action="../../../../queries/evaluacion.php?id_und=m8u2" method="post">

                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Evaluación</h4>
                        <p class="card-text">
                            <ol>
                                <li>¿Cuál de las siguientes es una etapa del Big6?</li>
                                <input type="radio" name="preg1" id="opc1" onclick="incorrecto(1);" value = "0"> a. Alfabetización
                                informacional. <br>
                                <input type="radio" name="preg1" id="opc2" onclick="correcto(1);" value = "1.67"> b. Definición de las
                                necesidad o problemas de información. <br>
                                <input type="radio" name="preg1" id="opc3" onclick="incorrecto(1);" value = "0"> c. Compartir
                                información de fuentes confliables.
                                <li>¿En qué consiste la etapa 4 del Big6?</li>
                                <input type="radio" name="preg2" id="opc1" onclick="correcto(2);" value = "1.67"> a. Evaluación crítica
                                de la información. <br>
                                <input type="radio" name="preg2" id="opc2" onclick="incorrecto(2);" value = "0"> b. Busqueda de la
                                información. <br>
                                <input type="radio" name="preg2" id="opc3" onclick="incorrecto(2);" value ="0"> c. Estrategias para
                                buscar información.
                                <li>¿Cuál corresponde a correcta fuente de información?</li>
                                <input type="radio" name="preg3" id="opc1" onclick="incorrecto(3);" value = "0"> a. Wikipedia
                                <input type="radio" name="preg3" id="opc2" onclick="incorrecto(3);" value = "0"> b. Slash
                                <input type="radio" name="preg3" id="opc3" onclick="correcto(3);" value = "1.67"> c. Asap
                            </ol>
                            <!--<center>
                                <a href="#" class="btn btn-outline-success btnSig" onclick="validar();">Validar</a>
                            </center>-->
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module8.2_act2.php" class="btn btn-success">Anterior</a>
                    <!--<a href="../modulo8.3/module8.3_inicio.php" class="btn btn-success">Siguiente</a>-->
                    <button id="btn-siguiente"  class="btn btn-success" type="submit" onclick="validar();evaluacion()">Siguiente</button>                    
                </center>
                </form>
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
    <script src="assets/js/eval.js"></script>
  <script src="../../../../../vendor/jquery/jquery.min.js"></script>
  <script src="../../../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="../../../../../assets/js/script.js"></script>
</body>

</html>