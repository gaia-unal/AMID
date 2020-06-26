<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>AMID</title>
  <!-- Bootstrap core CSS -->
  <link href="../../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../../../../assets/css/shop-item.css" rel="stylesheet">
  <link href="../../../../assets/css/style.css" rel="stylesheet">
</head>

<body>
  <?php 
    require_once "../../../queries/connectionDB.php"; 
    $newConn= new Connection;
    $newConn->connectionDB();
    
    require '../../../queries/activeSession.php';
    $rutaSession="../../../queries/"; include '../../header.php'; 
    include '../../../queries/estadoMod.php'; estadoMod(11,1);
  ?>


    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="my-4">Módulos AMID</h1>
                <div class="list-group">
                    <a href="../modulo1/module1.php" class="list-group-item">Módulo 1</a>
                    <a href="../modulo2/module2.php" class="list-group-item">Módulo 2</a>
                    <a href="../modulo3/module3.php" class="list-group-item">Módulo 3</a>
                    <a href="../modulo4/module4.php" class="list-group-item">Módulo 4</a>
                    <a href="../modulo5/module5.php" class="list-group-item">Módulo 5</a>
                    <a href="../modulo6/module6.php" class="list-group-item">Módulo 6</a>
                    <a href="../modulo7/module7.php" class="list-group-item">Módulo 7</a>
                    <a href="../modulo8/module8.php" class="list-group-item">Módulo 8</a>
                    <a href="../modulo9/module9.php" class="list-group-item">Módulo 9</a>
                    <a href="../modulo10/module10.php" class="list-group-item">Módulo 10</a>
                    <a href="../modulo11/module11.php" class="list-group-item">Módulo 11</a>
                    <a href="#" class="list-group-item active">Módulo 12</a>
                    <ul class="list-group-item">
                        <a href="module12_act.php" class="list-group-item">Actividad</a>
                    </ul>
                </div>
                <br /><br />
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <h1><br>Módulo 12: Libertad de expresión</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <p class="card-text">
                            Sabemos que la libertad de expresión es un elemento crítico para la democracia, el
                            desarrollo y el diálogo – sin ella ninguna de estas palabras podría funcionar o prosperar.
                            La libertad de expresión es un derecho universal que todo el mundo debe gozar. Todos tienen
                            el derecho a la libertad de opinión y de expresión; este derecho incluye el derecho a
                            mantener una opinión sin interferencias y a buscar, recibir y difundir información e ideas a
                            través de cualquier medio de difusión sin limitación de fronteras, tal como lo establece la
                            Declaración Universal de los Derechos Humanos. <br>
                            La UNESCO es la Agencia de las Naciones Unidas con el mandato especializado de promover la
                            libertad de expresión y sus corolarios, la libertad de prensa y la libertad de información.
                            Durante décadas la UNESCO ha trabajado para promover estos derechos humanos fundamentales
                            alrededor del mundo, entre profesionales de los medios de comunicación, formuladores de
                            políticas, políticos, gobiernos, organizaciones no gubernamentales, el mundo académico y
                            otros. La Caja de Herramientas para la Libertad de Expresión: una Guía acerca de los
                            Conceptos y Temas, es una continuación de este permanente esfuerzo. <br>
                            Todos deberían disponer de las herramientas y los mecanismos necesarios para permitir la
                            libre circulación de la información. Se ha escrito mucho acerca de la libertad de expresión,
                            de hecho es uno de los conceptos o temas más discutidos en nuestros tiempos. Sin embargo,
                            son pocas las publicaciones elaboradas que tengan a los jóvenes como lectores meta, en
                            especial las y los adolescentes y jóvenes a nivel de estudiantes de secundaria o
                            pre-universitarios. Se debe empoderar y alfabetizar a las y los jóvenes acerca de los temas
                            y conceptos de libertad de expresión para que puedan convertirse en ciudadanos con
                            discernimiento en una democracia.
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="../modulo11/modulo11.1/module11.1_inicio.php" class="btn btn-success">Anterior</a>
                    <a href="module12_act.php" class="btn btn-success btnSig retraso3">Siguiente</a>
                    
                </center>
                <?php
                    include '../../../functions/paginacion.php';
                    pag(1);
                ?>
                <p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative
                        Commons Reconocimiento Compartir igual 4.0</a></p>
                <br><br>
            </div>
            <!-- /.col-lg-9 -->
        </div>
    </div>
  <!-- /.container -->
  <?php $ruta="../../../../assets"; include '../../footer.php';?>

<!-- Bootstrap core JavaScript menu-->
<script src="../../../../vendor/jquery/jquery.min.js"></script>
<script src="../../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- script unidad/evaluación inactiva -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../../../../assets/js/script.js"></script>
</body>

</html>