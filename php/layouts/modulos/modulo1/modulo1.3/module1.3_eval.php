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
                    <a href="../module1.php" class="list-group-item active">Módulo 1</a>
                    <ul class="list-group-item">
                        <a href="../modulo1.1/module1.1_inicio.php" class="list-group-item">Unidad 1</a>
                        <a href="../modulo1.2/module1.2_inicio.php" class="list-group-item ">Unidad 2</a>
                        <a href="module1.3_inicio.php" class="list-group-item active">Unidad 3</a>
                        <ul class="list-group-item">
                            <a href="module1.3_temas.php" class="list-group-item">Temas</a>
                            <a href="recurso/module1.3.1.php" class="list-group-item">Actividades</a>
                            <a href="#" class="list-group-item active">Evaluación</a>
                        </ul>
                        <a href="../modulo1.4/module1.4_inicio.php" class="list-group-item">Unidad 4</a>
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
                <br />
                <br />
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <h1><br>Unidad 3: Interactuándo con los medios y otros proveedores de información</h1>
                
                <form action="../../../../queries/evaluacion.php?id_und=m1u3" method="post">
                
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Evaluación<br></h4>
                        <p class="card-text">
                            <p>
                            Utilice la biblioteca o el Internet, investigue sobre los principales programas de
                            televisión o radio, películas o propagandas del año pasado. ¿Cuáles de los siguientes
                            temas fueron importantes para el éxito?</p>
                            <input  type="checkbox" name="temas_1" id="ans1" value="5" >
                            <label for="ans1" clase="space">Forma en que los medios transmiten el significado.</label><br>

                            <label for="ans2" clase="space"><input type="checkbox" name="temas_2" id="ans2" value="5" >
                            Cómo los medios y otros proveedores de
                            información presentan la información, las personas, las culturas, las imágenes, los
                            lugares, etc. </label><br>

                            <input type="checkbox" name="temas_3" id="ans3" value="1" >
                            <label for="ans3" clase="space">El rol de los usuarios, los ciudadanos y las
                            audiencias.</label><br>

                            <input type="checkbox" name="temas_4" id="ans4" value="1" >
                            <label for="ans4" clase="space">Comprometiéndose con los medios a través de la
                            producción de contenidos generados por los usuarios.</label><br>
                            <!-- <p>
                            ¿Por qué los periodistas deben tener el derecho a no revelar las fuentes de su
                                información?, sólo a sus editores
                            </p>
                            <textarea name="" id="" cols="100" rows="10"
                                placeholder="Escriba su respuesta aquí"></textarea> -->
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="recurso/module1.3.3.php" class="btn btn-success">Anterior</a>
                    <!-- onclick="evaluacion()" -->
                    <button id="btn-siguiente"  class="btn btn-success" type="submit" >Siguiente</button>
                </center>
                </form>
                <?php
                    include '../../../../functions/paginacion.php';
                    pag(2);
                ?>
                <br />
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
    <!-- <script src="assets/js/script.js"></script>    -->
    <!-- <script src="script.js"></script> -->
</body>

</html>