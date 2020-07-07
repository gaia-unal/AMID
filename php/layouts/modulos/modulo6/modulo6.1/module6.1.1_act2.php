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
                    <a href="../module6.php" class="list-group-item active">Módulo 6</a>
                    <ul class="list-group-item">
                        <a href="module6.1_inicio.php" class="list-group-item active">Unidad 1</a>
                        <ul class="list-group-item">
                            <a href="module6.1_temas.php" class="list-group-item">Temas</a>
                            <a href="module6.1.1_act.php" class="list-group-item active">Actividad</a>
                            <a href="module6.1_eval.php" class="list-group-item ">Evaluación</a>
                        </ul>
                        <a href="../modulo6.2/module6.2_inicio.php" class="list-group-item">Unidad 2</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
                    </ul>
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
                <h1><br>Unidad 1: De Los Medios Tradicionales a las Nuevas Tecnologías Mediáticas</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <p class="card-text">
                            1. Según lo leído en <strong>La breve historia de la comunicación</strong>
                            ¿Cuál considera usted que es la medida en la cual el conocimiento y la información
                            han cambiado o han permanecido iguales a medida que los nuevos medios y las nuevas
                            tecnologías mediáticas han emergido en nuestra sociedad?
                            <textarea name="preg1" id="p1-r" cols="100" rows="10"
                                placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea> <br>
                            2. ¿Cómo la emergencia de los nuevos medios ha tenido impacto sobre la forma en cómo
                            las personas interactúan y cómo esto las beneficia?
                            <textarea name="preg2" id="p2-r" cols="100" rows="10"
                                placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea> <br>
                            3. Una característica de los medios tradicionales es que el contenido de los medios va a
                            través de un proceso editorial organizado, diseñado para autentificar las noticias y
                            entregarlas a una organización mediática de noticias en lugar de darlas a un individuo. El
                            periodista en línea no trabaja a través de este proceso. <br> Discuta sobre la diferencia
                            entre los temas de noticia de opinión de un bloguero individual y un reportaje noticioso que
                            aparece en la versión en línea de un periódico.
                            <textarea name="preg3" id="p3-r" cols="100" rows="10"
                                placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module6.1.1_act.php" class="btn btn-success">Anterior</a>
                    <a href="module6.1_eval.php" class="btn btn-success">Siguiente</a>
                </center>
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
  <script src="../../../../../vendor/jquery/jquery.min.js"></script>
  <script src="../../../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="../../../../../assets/js/script.js"></script>
</body>

</html>