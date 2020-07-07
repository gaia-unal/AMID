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
                    <a href="../module3.php" class="list-group-item active">Módulo 3</a>
                    <ul class="list-group-item">
                        <a href="../modulo3.1/module3.1_inicio.php" class="list-group-item">Unidad 1</a>
                        <a href="../modulo3.2/module3.2_inicio.php" class="list-group-item">Unidad 2</a>
                        <a href="../modulo3.3/module3.3_inicio.php" class="list-group-item">Unidad 3</a>
                        <a href="../modulo3.4/module3.4_inicio.php" class="list-group-item">Unidad 4</a>
                        <a href="module3.5_inicio.php" class="list-group-item active">Unidad 5</a>
                        <ul class="list-group-item">
                            <a href="module3.5_temas.php" class="list-group-item">Temas</a>
                            <a href="module3.5.1_act.php" class="list-group-item active">Actividad</a>
                            <a href="module3.5_eval.php" class="list-group-item">Evaluación</a>
                        </ul>
                    </ul>
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
                <h1><br>Unidad 5: Edición digital y retoque en computadora</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <p class="card-text">1. Describa el tipo de cambios que esta tecnología puede hacer posible.</p>
                        <textarea name="preg1" id="p1-r" cols="100" rows="10" placeholder="Escriba su respuesta aquí"
                            spellcheck="true"></textarea><br>
                        <p class="card-text">2. Identifique y describa los ejemplos dónde se ha utilizado esta
                            tecnología en el mundo de la moda y en el reportaje de noticias. Explore la controversia que
                            existe en relación al uso de esta tecnología para las personas que trabajan en la industria
                            de la moda y de las noticias.</p>
                        <textarea name="preg2" id="p2-r" cols="100" rows="10" placeholder="Escriba su respuesta aquí"
                            spellcheck="true"></textarea> <br>
                        <p class="card-text">3. Discuta hasta qué punto el conocimiento de esta tecnología afecta la
                            forma en la que las personas responden a las fotos en los editoriales de moda y
                            fotoperiodismo. Describa los beneficios y responsabilidades de esta tecnología para las
                            personas y los eventos que se retratan y para las audiencias que ven estas imágenes
                        </p>
                        <textarea name="preg3" id="p3-r" cols="100" rows="10" placeholder="Escriba su respuesta aquí"
                            spellcheck="true"></textarea> <br>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module3.5.1_act.php" class="btn btn-success">Anterior</a>
                    <a href="module3.5_eval.php" class="btn btn-success">Siguiente</a>
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