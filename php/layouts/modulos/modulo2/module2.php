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
        include '../../../queries/estadoMod.php'; estadoMod(2,1);
    ?>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="my-4">Módulos AMID</h1>
                <div class="list-group">
                    <a href="../modulo1/module1.php" class="list-group-item">Módulo 1</a>
                    <a href="#" class="list-group-item active">Módulo 2</a>
                    <ul class="list-group-item">
                        <a href="modulo2.1/module2.1_inicio.php" class="list-group-item">Unidad 1</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 2</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 4</a>
                    </ul>
                    <a href="../modulo3/module3.php" class="list-group-item">Módulo 3</a>
                    <a href="../modulo4/module4.php" class="list-group-item">Módulo 4</a>
                    <a href="../modulo5/module5.php" class="list-group-item">Módulo 5</a>
                    <a href="../modulo6/module6.php" class="list-group-item">Módulo 6</a>
                    <a href="../modulo7/module7.php" class="list-group-item">Módulo 7</a>
                    <a href="../modulo8/module8.php" class="list-group-item">Módulo 8</a>
                    <a href="../modulo9/module9.php" class="list-group-item">Módulo 9</a>
                    <a href="../modulo10/module10.php" class="list-group-item">Módulo 10</a>
                    <a href="../modulo11/module11.php" class="list-group-item">Módulo 11</a>
                    <a href="../modulo12/module12.php" class="list-group-item">Módulo 12</a>
                </div>
                <br />
                <br />
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <h1><br>Módulo 2: Entendiendo las noticias, los medios y la ética de información</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Antedecendes y fundamento</h4>
                        <p class="card-text">
                            <blockquote>
                                <em>
                                    Con el advenimiento de las nuevas tecnologías de información y comunicación, el
                                    alcance e impacto de los medios tradicionales (radio, televisión y periódicos) se ha
                                    multiplicado, por lo tanto, la información y las noticias están mucho más
                                    disponibles que antes. En esta edad de la información, los periodistas, los
                                    profesionales de la información y los medios de noticias ( nuevos y viejos) juegan
                                    un papel central al darnos acceso a la información más allá de nuestra experiencia
                                    inmediata, y al facilitar la participación de los ciudadanos para el buen gobierno y
                                    sociedades abiertas, democráticas y estables. Este módulo explorará el papel y la
                                    función de los medios de noticias (nuevos y tradicionales) y otros proveedores de
                                    información en nuestras vidas personales y en las sociedades democráticas, también
                                    cómo mejorar la libertad democrática y la ética de información, construyendo
                                    responsabilidad cívica y ciudadanía, requiriendo y promoviendo la transparencia y la
                                    rendición de cuentas. Este módulo también dará una visión general del camino de
                                    evolución de los medios, desde ser prácticamente un espejo de la sociedad a ser el
                                    guardián de la información, representará un sistema de control, facilitador del
                                    debate público y facilitador de la participación ciudadana. El módulo permitirá que
                                    los profesores exploren temas como libertad de información y libertad de expresión,
                                    así como la importancia de la exactitud, rendición de cuentas y transparencia en los
                                    informes de noticias. Gracias a las nuevas tecnologías, también estamos viendo un
                                    incremento en el contenido generado por los usuarios, como ejemplo tenemos los
                                    testimonios presenciales de los ciudadanos. Este fenómeno nos da una gran diversidad
                                    de voces y perspectivas, también refuerza la necesidad de evaluar de una manera
                                    critica muchas fuentes de noticias e información que están disponibles ahora.
                                </em>
                            </blockquote>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="../modulo1/module1.php" class="btn btn-success">Anterior</a>
                    <a href="modulo2.1/module2.1_inicio.php" class="btn btn-success">Siguiente</a>
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

<?php $ruta="../../../../assets"; include '../../footer.php';?>

<!-- Bootstrap core JavaScript -->
<script src="../../../vendor/jquery/jquery.min.js"></script>
<script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../../../../assets/js/script.js"></script>
</body>

</html>