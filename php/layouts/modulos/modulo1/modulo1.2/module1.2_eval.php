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
    <!-- <link href="assets/css/estilo.css" rel="stylesheet"> -->
</head>

<body>
    <?php require_once "../../../../queries/connectionDB.php"; 
    $newConn= new Connection;
    $newConn->connectionDB();
    ?>
    <?php require '../../../../queries/activeSession.php'; ?>
    <?php $rutaSession="../../../../queries/"; include '../../../header.php'; ?>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="my-4">Módulos AMID</h1>
                <div class="list-group">
                    <a href="../module1.php" class="list-group-item active"><i class="dropdown-menu"></i>Módulo 1<span
                            class="arrow"></span></a>
                    <ul class="list-group-item">
                        <a href="../modulo1.1/module1.1_inicio.php" class="list-group-item">Unidad 1</a>
                        <a href="module1.2_inicio.php" class="list-group-item active">Unidad 2</a>
                        <ul class="list-group-item">
                            <a href="module1.2_temas.php" class="list-group-item ">Temas</a>
                            <a href="recurso/module1.2.1.php" class="list-group-item">Actividades</a>
                            <a href="#" class="list-group-item active">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(2)" class="list-group-item inactive" id="unid-sgte">Unidad 3</a>
                        <a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 4</a>
                    </ul>
                    <a href="../../modulo2/module2.php" class="list-group-item">Módulo 2</a>
                    <a href="../../modulo3/module3.php" class="list-group-item">Módulo 3</a>
                    <a href="../../modulo4/module4.php" class="list-group-item">Módulo 4</a>
                    <a href="../../modulo5/module5.php" class="list-group-item">Módulo 5</a>
                    <a href="../../modulo6/module6.php" class="list-group-item">Módulo 6</a>
                    <a href="../../modulo7/module7.php" class="list-group-item">Módulo 7</a>
                    <a href="../../modulo8/module8.php" class="list-group-item">Módulo 8</a>
                    <a href="../../modulo9/module9.php" class="list-group-item">Módulo 9</a>
                    <a href="../../modulo10/module10.php" class="list-group-item">Módulo 10</a>
                    <a href="../../modulo11/module11.php" class="list-group-item">Módulo 11</a>
                    <a href="../../modulo12/module12.php" class="list-group-item">Módulo 12</a>
                </div>
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <h1><br>Unidad 2: AMI y la participación cívica</h1>
                
                <form action="../../../../queries/evaluacion.php?id_und=m1u2" method="post">

                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Evaluación</h4>
                        <p class="card-text">
                            Considere la siguiente frase: <em>"Los lideres están en la obligación de mantener la
                                neutralidad de la información, manteniendo una mentalidad abierta con el fin de que el
                                ciudadano de bien tome buenas decisiones evitando las conveniencias particulares"</em>
                            <br> <br>
                            ¿Cuál de las siguientes afirmaciones apoya en mejor medida lo expresado por la frase
                            anterior? <br> <br>

                            <label><input type="radio" name="opc1" id="op1" onclick="incorrecto()" value="1" required>
                            La información debe ser un medio a través del cual los ciudadanos deben ser influidos a actuar de una mejor manera...
                            </label>
                            <br>
                            <label><input type="radio" name="opc1" id="op2" onclick="incorrecto()" value="1" required>
                            La sociedad civil y los diferentes actores que en ella se ivolucran deben ser el parámetro para tomar decisiones según la cultura y sociedad en que viven.
                            </label>
                            <br>
                            <label><input type="radio" name="opc1" id="op3" onclick="incorrecto()" value="1" required>
                            Siempre hay una mejor decisión y es la que debe partir de la información de quien más sabe acerca de una temática en particular.
                            </label>
                            <br>
                            <label><input type="radio" name="opc1" id="op4" onclick="incorrecto()" value="1" required>
                            No me quedo con la opinión de uno, siempre analizo de forma personal las diferentes posiciones para hacer una síntesis de las ideas más importantes. 
                            </label>
                            <br>
                            <label><input type="radio" name="opc1" id="op5" onclick="correcto()" value="5" required>
                            Cuando lidero un grupo procuro poner en perspectiva las diferentes posiciones y compartir en diferentes medios los análisis de forma general sin posturas apasionadas. 
                            </label>
                            <br><br>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="recurso/module1.2.5.php" class="btn btn-success">Anterior</a>
                    <button id="btn-siguiente"  class="btn btn-success" type="submit" onclick="evaluacion()">Siguiente</button>
                </center>
                </form>
                <?php
                    include '../../../../functions/paginacion.php';
                    pag(2);
                ?>
                <p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative
                        Commons Reconocimiento Compartir igual 4.0</a></p>
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

    <script src="script.js"></script>
</body>

</html>