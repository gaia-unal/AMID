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
                        <a href="../module1.1_inicio.php" class="list-group-item active">Unidad 1</a>
                        <ul class="list-group-item">
                            <a href="../module1.1_temas.php" class="list-group-item">Temas</a>
                            <a href="module1.1.1.php" class="list-group-item active">Actividad</a>
                            <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 2</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 4</a>
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
                <h1><br>Unidad 1: Comprender la alfabetización mediática e informacional: una orientación</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Reflexión</h4>
                        <p class="card-text">
                            <strong>Tema:</strong> Importancia de los medios y otrosp roveedores de información.
                            <br><strong>Propósito de la actividad:</strong> Explorar el papel de los medios y otros
                            proveedores de información tales como bibliotecas, archivos e internet. <br><br>
                            Haga una inspección de algunas bibliotecas de colegios/universidades o bibliotecas públicas
                            para encontrar libros y otros recursos disponibles que según su criterio provean información
                            sobre democracia, sobre otros lugares del mundo, sobre distintas culturas o sobre la vida
                            social y económica, etc. <br>
                            Para estas bibliotecas inspeccionadas, consulte y responda las siguientes preguntas:
                            <ul>
                                <li>¿Quién decide qué libros deben ser incluidos en la bibliteca y cuáles deben ser
                                    excluidos?</li>
                                <textarea name="respuesta" id="" cols="100" rows="10"
                                    placeholder="Escriba su respuesta aquí" autofocus></textarea>
                                <li>¿Quién decide que recursos y con qué nivel deben ser asignados a las bibliotecas?
                                </li>
                                <textarea name="respuesta" id="" cols="100" rows="10"
                                    placeholder="Escriba su respuesta aquí"></textarea>
                                <li>¿Quién decie qué libros son más importantes que otros?</li>
                                <textarea name="respuesta" id="" cols="100" rows="10"
                                    placeholder="Escriba su respuesta aquí"></textarea>
                                <li>¿Las bibliotecas cumplen sus propositos?</li>
                                <textarea name="respuesta" id="" cols="100" rows="10"
                                    placeholder="Escriba su respuesta aquí"></textarea>
                            </ul>
                            Note que se podría organizar una actividad de inspección similar para sitios de
                            Internet, museos, archivos, etc.
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module1.1.8.php" class="btn btn-success">Anterior</a>
                    <a href="module1.1.10.php" class="btn btn-success">Siguiente</a>
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
  <!-- <script src="assets/js/script.js"></script> -->
</body>

</html>