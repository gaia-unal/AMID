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
                        <a href="../modulo6.1/module6.1_inicio.php" class="list-group-item">Unidad 1</a>
                        <a href="../modulo6.2/module6.2_inicio.php" class="list-group-item">Unidad 2</a>
                        <a href="module6.3_inicio.php" class="list-group-item active">Unidad 3</a>
                        <ul class="list-group-item">
                            <a href="module6.3_temas.php" class="list-group-item">Temas</a>
                            <a href="module6.3.1_act.php" class="list-group-item">Actividad</a>
                            <a href="#" class="list-group-item active">Evaluación</a>
                        </ul>
                    </ul>
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
                <h1><br>Unidad 3: Usos de las Herramientas Interactivas de Multimedia, incluyendo los Juegos Digitales
                    en las Aulas</h1>
<<<<<<< HEAD
                <form action="../../../../queries/evaluacion.php?id_und=m6u3" method="post">
=======
>>>>>>> 2ef1147925e598054693ff02b58bf2938d33532c
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Evaluación</h4>
                        <p class="card-text">
<<<<<<< HEAD
                        <br />
                        <strong> ¿Cuáles son los principios básicos en la publicación abierta?</strong></li>
                        <br /><br />
                        <label><input type="radio" name="pre1" class="space"  value="5" required>Reutilizable, redistribuible, revisable, remixable, retenible.</label> <br/>
                        <label><input type="radio" name="pre1" class="space"  value="1" required>Repetible, universalidad, reversible.</label><br/>
                        <label><input type="radio" name="pre1" class="space"  value="1" required>Irrepetible, sostenible, responsable.</label><br/>
=======
                            <ol>
                                <li>Haga un estudio de caso de juegos electrónicos en materias específicas (por Ej.
                                    lenguaje, matemáticas, geografía, etc.) y haga un piloto sobre el uso de uno o dos
                                    juegos de contenido de aprendizaje específico. Escriba cómo se utilizó el juego y
                                    cómo ayudó a alcanzar los objetivos de la lección </li>
                                <textarea name="preg1" id="p1-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Planifique una lección utilizando un juego electrónico como parte de la enseñanza
                                    y el aprendizaje, para crear conciencia sobre temas globales, tales como el hambre,
                                    el conflicto y la paz. Dicte esta lección y escriba un pequeño informe anotando las
                                    preguntas que se hicieron y cómo los juegos ayudaron a abordar los temas Recursos
                                    educativos abiertos (REAs) </li>
                                <textarea name="preg2" id="p2-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Analice cómo se crean los REAs, se utilizan, se distribuyen y se adaptan a los
                                    distintos tipos de enseñanza, a los ambientes de aprendizaje y a las necesidades
                                </li>
                                <textarea name="preg3" id="p3-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Analizar cómo, por ejemplo, se puede transformar los juegos digitales en REA, y
                                    entender lo que se debe hacer para cumplir con los requisitos REA, incluyendo leyes
                                    de propiedad intelectual, Investigación bibliotecaria y discusión de clase</li>
                                <textarea name="preg4" id="p4-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                            </ol>
>>>>>>> 2ef1147925e598054693ff02b58bf2938d33532c
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module6.3.1_act.php" class="btn btn-success">Anterior</a>
<<<<<<< HEAD
                    <button id="btn-siguiente" class="btn btn-success" type="submit">Siguiente</button>
                    <!-- <a href="../../modulo7/module7.php" class="btn btn-success">Siguiente</a> -->
                </center>
                </form>
=======
                    <a href="../../modulo7/module7.php" class="btn btn-success">Siguiente</a>
                </center>
>>>>>>> 2ef1147925e598054693ff02b58bf2938d33532c
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