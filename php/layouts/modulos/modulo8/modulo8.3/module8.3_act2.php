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
    <link href="../../../assets/css/shop-item.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../../../assets/css/sweetalert/sweetalert2.css">
    <link rel="stylesheet" href="../../../../../assets/css/animated.css">
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
                    <a href="../../modulo6/module6.php" class="list-group-item">Módulo 6</a>
                    <a href="../../modulo7/module7.php" class="list-group-item">Módulo 7</a>
                    <a href="../module8.php" class="list-group-item active">Módulo 8</a>
                    <ul class="list-group-item">
                        <a href="../modulo8.1/module8.1_inicio.php" class="list-group-item">Unidad 1</a>
                        <a href="../modulo8.2/module8.2_inicio.php" class="list-group-item">Unidad 2</a>
                        <a href="module8.3_inicio.php" class="list-group-item">Unidad 3</a>
                        <ul class="list-group-item">
                            <a href="module8.3_temas.php" class="list-group-item">Temas</a>
                            <a href="module8.3_act.php" class="list-group-item">Actividad</a>
                            <a href="#" class="list-group-item active">Evaluación</a>
                        </ul>
                    </ul>
                    <a href="../../modulo9/module9.php" class="list-group-item">Módulo 9</a>
                    <a href="../../modulo10/module10.php" class="list-group-item">Módulo 10</a>
                    <a href="../../modulo11/module11.php" class="list-group-item">Módulo 11</a>
                    <a href="../../modulo12/module12.php" class="list-group-item">Módulo 12</a>
                </div>
                <br /><br />
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <h1><br>Unidad 3: Alfabetización Informacional Digital</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Reflexión</h4>
                        <p class="card-text">
                            Cree un plan de actividades o un conjunto de actividades para que los estudiantes utilicen
                            varios recursos de los medios digitales para preparar un proyecto, evaluación o deber. Hable
                            sobre las características que las nuevas tecnologías brindan a las personas con discapacidad
                            para que tengan acceso a la información digital (por Ej. acceso a la red y la creación de
                            documentos digitales en formatos accesibles). <br> Escriba su plan a continuación <br>
                            <textarea name="preg1" id="p1-r" cols="80" rows="5" placeholder="Escriba su respuesta aquí"
                                spellcheck="true"></textarea> <br>
                            Experimente creando un blog sobre un tema relacionado con la educación en su país. Debería
                            ser un tema de actualidad que atraiga el interés y la capacidad de respuesta (por Ej.
                            mejorar el acceso a la educación primaria y secundaria para los más pobres de la sociedad,
                            diversificar el acceso a la información para los estudiantes de la escuelas secundarias para
                            que mejoren la calidad de la enseñanza, por qué los pobres se hacen cada vez más pobres en
                            una época de mayor conocimiento e información, etc.)
                            <ul>
                                <li>Identifique los instrumentos internacionales que están disponibles para la
                                    preservación de la información digital (por Ej. La Carta de la UNESCO sobre la
                                    Preservación del Patrimonio Digital, archivo digital y lineamientos de preservación)
                                </li>
                                <textarea name="preg2" id="p2-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                            </ul>
                            Visite el sitio en red de una Biblioteca Patrimonio de la Humanidad. Hable sobre la
                            importancia de la preservación y la promoción del patrimonio documental dentro del contexto
                            de un desastre natural, como el terremoto de Haití, y hable sobre el trabajo realizado por
                            los archivistas del Archivo Nacional de Haití. Encuentre el artículo que ilustra la
                            situación de Haití después del terremoto en enero del 2010. <br>
                            <textarea name="preg3" id="p3-r" cols="80" rows="5" placeholder="Escriba su respuesta aquí"
                                spellcheck="true"></textarea>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module8.3_act.php" class="btn btn-success">Anterior</a>
                    <a href="module8.3_eval.php" class="btn btn-success btnSig retraso3">Siguiente</a>
                    <p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative
                            Commons Reconocimiento Compartir igual 4.0</a></p>
                </center>
                <?php
                    include '../../../../functions/paginacion.php';
                    pag(2);
                ?>
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