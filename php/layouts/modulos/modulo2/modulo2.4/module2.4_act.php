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
                    <a href="../module2.php" class="list-group-item active">Módulo 2</a>
                    <ul class="list-group-item">
                        <a href="../modulo2.1/module2.1_inicio.php" class="list-group-item">Unidad 1</a>
                        <a href="../modulo2.2/module2.2_inicio.php" class="list-group-item">Unidad 2</a>
                        <a href="../modulo2.3/module2.3_inicio.php" class="list-group-item">Unidad 3</a>
                        <a href="module2.4_inicio.php" class="list-group-item active">Unidad 4</a>
                        <ul class="list-group-item">
                            <a href="module2.4_temas.php" class="list-group-item">Temas</a>
                            <a href="#" class="list-group-item active">Actividad</a>
                            <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                        </ul>
                    </ul>
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
                <h1><br>Unidad 4: El proceso de desarrollo de las noticias: más allá de 5 por qués y 1 cómo (5ws y 1h en
                    inglés)</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <p class="card-text">
                            <blockquote>
                                <em>
                                    “A medida que llegan las noticias del día a la redacción del periódico se convierten
                                    en una asombrosa mezcla de hechos, propaganda, rumor, sospechas, pistas, miedos y
                                    esperanzas, y el trabajo de seleccionar y ordenar las noticias es realmente sagrado
                                    y sacerdotal en las oficinas en una democracia.” Walter Lippmann, in News Reporting
                                    and Writing
                                </em>
                            </blockquote>
                        </p>
                        <h4>Visita de estudio a una organización mediática</h4>
                        <p class="card-text">
                            Se puede realizar una visita de estudio a una oficina mediática para dialogar con el jefe o
                            el editor principal y observar de primera mano el proceso de desarrollo de noticias a nivel
                            de una oficina editorial
                        </p>
                        <h4>Proceso de indagación (un día en la vida de un reportero de noticias)</h4>
                        <p class="card-text">
                            En un acompañamiento al reportero de noticias a cubrir su trabajo, se debe documentar lo
                            siguiente:
                            <ul>
                                <li>Qué elementos de las noticias fueron identificados y qué se escribió sobre ellos, en
                                    comparación con lo que sucedió en el campo (o el proceso de depuración de la
                                    información recolectada);</li>
                                <li>Cómo y por qué el reportero contó la historia (dar significado a los datos) de la
                                    manera en la que lo hizo.</li>
                            </ul>
                        </p>
                        <h4>Análisis de textos</h4>
                        <p class="card-text">
                            Las noticias cuentan con los siguientes elementos:
                            <ul>
                                <li>¿Quién?</li>
                                <li>¿Qué?</li>
                                <li>¿Cuándo?</li>
                                <li>¿Dónde?</li>
                                <li>¿Por qué?</li>
                                <li>¿Cómo?</li>
                            </ul>
                            También se pueden entender como: quién es el sujeto, cuál es el argumento, dónde ocurre, por
                            qué es el motivo o la causa, cómo es la narración. <br> El periodismo como “el narrar una
                            historia con un propósito” se refiere a encontrar la información que las personas necesitan
                            para vivir sus vidas, hacer que tenga sentido, que sea relevante y que pueda crear
                            compromisos. Es necesario tener en cuenta los principios centrales de verificación: no
                            añadir, no engañar a la audiencia: ser lo más transparente posible en cuanto a métodos y
                            motivos; depender del propio reportaje original; ejercer la humildad.
                        </p>
                        <h4>Producción</h4>
                        <p class="card-text">
                            En los colegios se puede realizar de la siguiente manera: coordinar con el asesor de una
                            publicación escolar (o la estación de transmisión de la escuela/colegio) para permitir a los
                            estudiantes que desarrollen un plan sobre un tema para la próxima publicación/programa. El
                            plan sobre el tema debería incluir una serie de artículos o historias que serán escritas o
                            producidas y el sustento para su inclusión, ámbito de cada historia y el posible enfoque o
                            tratamiento de cada historia; de tal manera que los estudiantes puedan entender de primera
                            mano la necesidad que las noticias sean veraces y la influencia que estas tienen en la vida
                            de las personas.
                        </p>
                        <h4>Registro de medios</h4>
                        <p class="card-text">
                            Se refiere a la práctica de mantener un diario o un libro de registros donde se registren
                            (diariamente) las observaciones sobre el tema (por ejemplo: valores de noticias, juicios de
                            noticias, criterio de verificación, informes de ciudadanos) para luego hacer un resumen y
                            síntesis al final.
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module2.4_temas.php" class="btn btn-success">Anterior</a>
                    <a href="module2.4_act2.php" class="btn btn-success">Siguiente</a>
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