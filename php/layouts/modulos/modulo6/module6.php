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
        require "../../../queries/connectionDB.php";
$newConn= new Connection;
$newConn->connectionDB();
        require '../../../queries/activeSession.php';
        $rutaSession="../../../queries/"; include '../../header.php'; 
        include '../../../queries/estadoMod.php'; estadoMod(6,1);
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
                    <a href="#" class="list-group-item active">Módulo 6</a>
                    <ul class="list-group-item">
                        <a href="modulo6.1/module6.1_inicio.php" class="list-group-item">Unidad 1</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 2</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
                    </ul>
                    <a href="../modulo7/module7.php" class="list-group-item">Módulo 7</a>
                    <a href="../modulo8/module8.php" class="list-group-item">Módulo 8</a>
                    <a href="../modulo9/module9.php" class="list-group-item">Módulo 9</a>
                    <a href="../modulo10/module10.php" class="list-group-item">Módulo 10</a>
                    <a href="../modulo11/module11.php" class="list-group-item">Módulo 11</a>
                    <a href="../modulo12/module12.php" class="list-group-item">Módulo 12</a>
                </div>
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <h1><br>Módulo 6: Medios nuevos y tradicionales</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Antecedentes y fundamento</h4>
                        <p class="card-text">
                            Este módulo presenta a los profesores el papel que las tecnologías nuevas y convergentes
                            desempeñan para la amplia participación de los ciudadanos en los cambios sociales,
                            económicos y políticos. Explica como las nuevas formas de medios digitales y electrónicos
                            (noticias en línea, blogs, Wikipedia, You Tube, aplicaciones de las redes sociales, video
                            juegos, etc.) han evolucionado desde los medios tradicionales y cómo ofrecen un mayor acceso
                            a la información y al conocimiento, a la libertad de expresión, al buen gobierno y a la
                            participación en un proceso democrático. La coexistencia de los medios impresos, los medios
                            de transmisión (radio y televisión) el Internet, los teléfonos móviles, etc. también hace
                            posible que el contenido de los medios fluya a través de varias plataformas, ampliando el
                            acceso a la información y creando una cultura de participación donde los ciudadanos no sólo
                            consumen la información, sino que también participan activamente en su producción y
                            distribución. Por ejemplo, las nuevas tecnologías de la información y la comunicación
                            (TICs), han abierto oportunidades para que las audiencias participen más compartiendo la
                            información y el conocimiento, y promueven que las personas participen de una manera más
                            activa en el proceso democrático, permitiendo que las sociedades se abran. En efecto, los
                            nuevos medios y tecnologías de convergencia están creando nuevos espacios de auto expresión
                            y participación en el discurso público en una amplia gama de temas sociales, económicos y
                            políticos. Las nuevas plataformas de medios permiten a los ciudadanos que se comprometan
                            conscientemente en el proceso democrático de sus sociedades, y ayuden a llevar las noticias
                            globales y los temas mucho más cerca de las sociedades locales.
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="../modulo4/module4.php" class="btn btn-success">Anterior</a>
                    <a href="modulo6.1/module6.1_inicio.php" class="btn btn-success">Siguiente</a>
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