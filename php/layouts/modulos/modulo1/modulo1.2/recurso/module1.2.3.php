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
    <link href="assets/css/estilo.css" rel="stylesheet">
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
                        <a href="../module1.2_inicio.php" class="list-group-item active">Unidad 2</a>
                        <ul class="list-group-item">
                            <a href="../module1.2_temas.php" class="list-group-item">Temas</a>
                            <a href="module1.2.1.php" class="list-group-item active">Actividad</a>
                            <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 3</a>
                        <a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 4</a>
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
                <h1><br>Unidad 2: AMI y la participación cívica</h1>
                <form action="../../../../../queries/actividad.php?id_act=m1u2a3" method="post">
                <div class="card mt-4">
                    <div class="card-body">
                        <p class="card-text">
                            <strong>Tema: </strong>Funciones de los medios y otros proveedores de información, y lo que
                            los ciudadanos deberían esperar de ellos. <br> En el marco del acceso a la información y al
                            conocimiento, ¿Qué significan para usted los siguientes términos y a quién se aplican (a la
                            información, al lector, etc.)?
                            <ul>
                                <li>Proteger la privacidad</li>
                                <textarea name="preg1" style="width: 100%;" rows="5" minlength="1" maxlength="200"
                                    required placeholder="Escriba su respuesta aquí" spellcheck="true"
                                    autofocus></textarea>
                                <li>Recolección y preservación</li>
                                <textarea name="preg2" style="width: 100%;" rows="5" minlength="1" maxlength="200"
                                    required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Proveer acceso sin sesgos</li>
                                <textarea name="preg3" style="width: 100%;" rows="5" minlength="1" maxlength="200"
                                    required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Proveer acceso abierto</li>
                                <textarea name="preg4" style="width: 100%;" rows="5" minlength="1" maxlength="200"
                                    required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                            </ul>
                        </p>
                    </div>
                </div>

                <!-- /.card -->
                <br>
                <center>
                    <a href="module1.2.2.php" class="btn btn-success">Anterior</a>
                    <button id="btn-siguiente" class="btn btn-success" type="submit">Siguiente</button>
                    <!-- <a href="module1.2.4.php" class="btn btn-success">Siguiente</a> -->
                </center>
                </form>
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
    <!-- <script src="assets/js/script.js"></script> -->
</body>

</html>