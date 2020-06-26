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
  <link rel="stylesheet" href="../../../../../../assets/css/sweetalert/sweetalert2.css">
  <link rel="stylesheet" href="../../../../../../assets/css/animated.css">
  <link rel="stylesheet" href="../../../../../../assets/css/style.css">
  <link rel="stylesheet" href="assets/css/estilo.css">
  
</head>

<body>
  <?php require "../../../../../queries/connectionDB.php";
$newConn= new Connection;
$newConn->connectionDB(); ?>
  <?php require '../../../../../queries/activeSession.php'; ?>  
  <?php $rutaSession="../../../../../queries/"; include '../../../../header.php'; ?>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="my-4">Módulos AMID</h1>
                <div class="list-group">
                    <a href="../../../modulo1/module1.php" class="list-group-item">Módulo 1</a>
                    <a href="../../../modulo2/module2.php" class="list-group-item">Módulo 2</a>
                    <a href="../../../modulo3/module3.php" class="list-group-item">Módulo 3</a>
                    <a href="../../../modulo4/module4.php" class="list-group-item">Módulo 4</a>
                    <a href="../../../modulo5/module5.php" class="list-group-item">Módulo 5</a>
                    <a href="../../../modulo6/module6.php" class="list-group-item">Módulo 6</a>
                    <a href="../../module7.php" class="list-group-item active">Módulo 7</a>
                    <ul class="list-group-item">
                        <a href="../modulo7.1/mod7.1_inicio.php" class="list-group-item">Unidad 1</a>
                        <a href="../mod7.2_inicio.php" class="list-group-item active">Unidad 2</a>
                        <ul class="list-group-item">
                            <a href="../mod7.2_temas.php" class="list-group-item">Temas</a>
                            <a href="../1Phishing/index.php" class="list-group-item active">Actividades</a>
                            <a href="../mod7.2_eval.php" class="list-group-item">Evaluación</a>
                        </ul>
                    </ul>
                    <a href="../../../modulo8/module8.php" class="list-group-item">Módulo 8</a>
                    <a href="../../../modulo9/module9.php" class="list-group-item">Módulo 9</a>
                    <a href="../../../modulo10/module10.php" class="list-group-item ">Módulo 10</a>
                    <a href="../../../modulo11/module11.php" class="list-group-item ">Módulo 11</a>
                    <a href="../../../modulo12/module12.php" class="list-group-item ">Módulo 12</a>
                </div>
                <br /><br />
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <h1><br>Unidad 2: Retos y riesgos en el mundo virtual </h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Derechos de autor</h4>
                        <blockquote cite="http://creativecommons.org/licenses/by-nc-nd/3.0/" align="justify">
                            <p class="card-text">
                                "La violación del derecho de autor es un riesgo que está relacionado en su mayoría con
                                la conducta de los usuarios, sin tomar en cuenta
                                que el derecho de autor haya sido violado a propósito o accidentalmente, la violación se
                                le considera como un fraude y pone al violador
                                en riesgo de ser sancionado." Riesgos relacionados con el contacto en línea. Adaptado de
                                Youth Protection Roundtable Tool Kit – Stiftung
                                Digitale Chancen 2009<br>
                        </blockquote>
                        </p>
                        <h4>Código Penal Capitulo VIII de los delitos contra los derechos de autor</h4>
                        <p class="card-text">
                            El código penal en su capítulo VIII menciona los delitos y las sanciones
                            para aquellos que violen los derechos de autor, a continuación se mencionan algunos: <br>
                            <strong>Incurrirá en prisión de dos (2) a cinco (5) años y multa de veinte (20) a doscientos
                                (200) salarios mínimos legales
                                mensuales vigentes quien:</strong>
                            <ul>
                                <li>Publique, total o parcialmente, sin autorización previa y expresa del titular del
                                    derecho, una obra inédita de carácter
                                    literario, artístico, científico, cinematográfico, audiovisual o fonograma, programa
                                    de ordenador o soporte lógico.</li>
                                <li>Inscriba en el registro de autor con nombre de persona distinta del autor verdadero,
                                    o con título cambiado o suprimido, o
                                    con el texto alterado, deformado, modificado o mutilado, o mencionando falsamente el
                                    nombre del editor o productor de una
                                    obra de carácter literario, artístico, científico, audiovisual o fonograma, programa
                                    de ordenador o soporte lógico.</li>
                            </ul>
                            <strong> Incurrirá en prisión de dos (2) a cinco (5) años y multa de veinte (20) a mil
                                (1.000) salarios mínimos legales mensuales
                                vigentes quien, salvo las excepciones previstas en la ley: </strong>
                            <ul>
                                <li>Por cualquier medio o procedimiento, sin autorización previa y expresa del titular,
                                    reproduzca una obra de carácter literario,
                                    científico, artístico o cinematográfico, fonograma, videograma, soporte lógico o
                                    programa de ordenador, o transporte, almacene,
                                    conserve, distribuya, importe, venda, ofrezca, adquiera para la venta o
                                    distribución, o suministre a cualquier título dichas reproducciones.</li>
                                <li>Represente, ejecute o exhiba públicamente obras teatrales, musicales, fonogramas,
                                    videogramas, obras cinematográficas, o cualquier otra obra de
                                    carácter literario o artístico sin autorización previa y expresa del titular de los
                                    derechos correspondientes.</li>
                            </ul>
                            <strong> Incurrirá en multa quien:</strong>
                            <ul>
                                <li>Suprima o altere la información esencial para la gestión electrónica de derechos, o
                                    importe, distribuya o comunique ejemplares con la
                                    información suprimida o alterada.</li>
                                <li>Fabrique, importe, venda, arriende o de cualquier forma distribuya al público un
                                    dispositivo o sistema que permita descifrar una señal
                                    de satélite cifrada portadora de programas, sin autorización del distribuidor
                                    legítimo de esa señal, o de cualquier forma de eludir, evadir,
                                    inutilizar o suprimir un dispositivo o sistema que permita a los titulares del
                                    derecho controlar la utilización de sus obras o producciones,
                                    o impedir o restringir cualquier uso no autorizado de éstos.</li>
                            </ul>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="../informacionMedica/actividad.php" class="btn btn-success">Anterior</a>
                    <a href="../mod7.2_eval.php" class="btn btn-success btnSig retraso3">Siguiente</a>
                
                </center>
                <?php
                    include '../../../../../functions/paginacion.php';
                    pag(3);
                ?>
                <p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative
                            Commons Reconocimiento Compartir igual 4.0</a></p>
                <br /><br />
            </div>
            <!-- /.col-lg-9 -->
        </div>
    </div>
  <!-- /.container -->

  <?php $ruta="../../../../../../assets"; include '../../../../footer.php';?>

<!-- Bootstrap core JavaScript -->
    <script src="../../../../../../vendor/jquery/jquery.min.js"></script>
    <script src="../../../../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="../../../../js/script.js"></script> -->
    <script src="../../../../../../assets/js/script.js"></script>
    <script src="../../../../../../assets/js/sweetalert/sweetalert2.js"></script>
    <script src="assets/js/info.js"></script>
</body>

</html>