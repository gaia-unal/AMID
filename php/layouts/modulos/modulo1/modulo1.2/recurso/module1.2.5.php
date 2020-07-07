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
                        <a href="../../modulo1.1/module1.1_inicio.php" class="list-group-item">Unidad 1</a>
                        <a href="../module1.2_inicio.php" class="list-group-item active">Unidad 2</a>
                        <ul class="list-group-item">
                            <a href="../module1.2_temas.php" class="list-group-item">Temas</a>
                            <a href="module1.2.1.php" class="list-group-item active">Actividad</a>
                            <a href="../module1.2_eval.php" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 3</a>
                        <a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 4</a>
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
                <h1><br>Unidad 2: AMI y la participación cívica</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Libertad de expresión, independencia editorial, pluralidad y diversidad</h4>
                        <p class="card-text">
                            <strong>Tema: </strong>AMI y su importancia en la democracia y el buen gobierno. Libertad de
                            expresión, independencia editorial de los medios, pluralidad y diversidad de los medios y
                            los otros proveedores de información. <br>
                            <strong>Primera Parte</strong> <br>
                            Identifique un medio alternativo o independiente en su ámbito local o regional y conteste
                            las siguientes preguntas:
                            <ul>
                                <li>¿Qué es lo que hace a este medio independiente?</li>
                                <textarea name="" id="" cols="100" rows="10"
                                    placeholder="Escriba aquí su respuesta"></textarea>
                                <li>¿De qué forma permite que las personas participen en el proceso democratico?</li>
                                <textarea name="" id="" cols="100" rows="10"
                                    placeholder="Escriba aquí su respuesta"></textarea>
                                <li>¿Qué hace a este medio diferente de losmedios principales o no independientes?</li>
                                <textarea name="" id="" cols="100" rows="10"
                                    placeholder="Escriba aquí su respuesta"></textarea>
                            </ul>
                            Aspi mismo identifique un medio que usted no considere alternativo o independiente en su
                            ámbito local o regional y conteste preguntas equivalentes a las anteriores, utilizando los
                            conceptos tratados en la lectura <em>Libertad de expresión, independencia editorial,
                                pluralidad y diversidad</em> de esta unidad:
                            <ul>
                                <li>¿Qué considera usted que hace a este medio no independiente</li>
                                <textarea name="" id="" cols="100" rows="10"
                                    placeholder="Escriba aquí su respuesta"></textarea>
                                <li>¿De qué forma impide que las personas participen en el proceso democrático?</li>
                                <textarea name="" id="" cols="100" rows="10"
                                    placeholder="Escriba aquí su respuesta"></textarea>
                                <li>¿Qué hace a este medio diferente de los medios alternativos o independientes?</li>
                                <textarea name="" id="" cols="100" rows="10"
                                    placeholder="Escriba aquí su respuesta"></textarea>
                            </ul>
                            <strong>Segunda parte</strong> <br>
                            <ul>
                                <li>Escriba un pequeño texto argumentando sobre la obligación de los líderes respecto a
                                    enfocar las noticias con una mentalidad abierta y no solo con el deseo de que las
                                    noticias sirvan para reforzar las opiniones existentes.</li>
                                <textarea name="" id="" cols="100" rows="10"
                                    placeholder="Escriba su respuesta aquí"></textarea>
                                <li>¿Esta usted de acuerdo con que un ciudadano bien informado está mejor preparado para
                                    tomar decisiones y para participar en una sociedad democrática y por qué? Escriba un
                                    editorial expresando su opinión.</li>
                                <textarea name="" id="" cols="100" rows="10"
                                    placeholder="Escriba su respuesta aquí"></textarea>
                            </ul>
                            Comparta sus escritos con otra persona que esté realizando las actividades de este Objeto
                            Virtual. Pídale que le evalúe su escrito considerando la fuerza con la que argumenta las
                            ideas centrales de su texto
                            <strong>Actividades opcionales</strong> <br>
                            Para una mayor información sobre los tema relacionados con esta unidad puede leer el
                            articulo: <a href="https://dialnet.unirioja.es/servlet/articulo?codigo=4759634"
                                target="_blank" rel="noopener noreferrer">El derecho, la sociedad de la información y el
                                principio de la neutralidad de red: cosndieraciones sobre el mercado y el acceso a la
                                información</a> de Thiago Lopes Matsushita.
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module1.2.4.php" class="btn btn-success">Anterior</a>
                    <a href="../module1.2_eval.php" class="btn btn-success">Siguiente</a>
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
  <script src="assets/js/script.js"></script>
</body>

</html>