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
                    <a href="../module5.php" class="list-group-item active">Módulo 5</a>
                    <ul class="list-group-item">
                        <a href="module5.1_inicio.php" class="list-group-item active">Unidad 1</a>
                        <ul class="list-group-item">
                            <a href="module5.1_temas.php" class="list-group-item">Temas</a>
                            <a href="#" class="list-group-item active">Actividad</a>
                            <a href="module5.1_eval.php" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 2</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 4</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 5</a>
                    </ul>
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
                <h1><br>Unidad 1: Publicidad, ingresos y regulaciones</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Examine y evalúe el objetivo y eficacia de las regulaciones en la industria de la publicidad
                        </h4>
                        <p class="card-text">
                            Utilizando Internet o una biblioteca, investigue las regulaciones que existen en su región
                            sobre la industria de la publicidad. Identifique dónde se colocan estás regulaciones para
                            los ciudadanos que necesitan tener acceso a esta información. Identifique qué individuos o
                            grupos han creado estas regulaciones. <br> Identifique dónde se colocan estás regulaciones
                            para los ciudadanos que necesitan tener acceso a esta información. Identifique qué
                            individuos o grupos han creado estas regulaciones.
                            <textarea name="preg1" id="p1-r" cols="80" rows="5" placeholder="Escriba su respuesta aquí"
                                spellcheck="true"></textarea>
                        </p>
                        <h4>Aplique las regulaciones existentes a los ejemplos actuales de publicidad</h4>
                        <p class="card-text">
                            Aplique las regulaciones a una variedad de anuncios que se encuentran en los medios locales.
                            En instancias en las cuales la publicidad viola las regulaciones, investigue qué recursos
                            tienen disponibles los consumidores. <br> Investigue qué recursos tienen disponibles los
                            consumidores.
                            <textarea name="preg2" id="p2-r" cols="100" rows="10"
                                placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                        </p>
                        <h4>Investigar la publicidad como una fuente importante de ingresos para la televisión</h4>
                        <p class="card-text">
                            Investigue si las necesidades de los anunciantes han afectado el tipo o la calidad de
                            programación o cobertura en los medios.
                            <ul>
                                <li>Explique cuál es la razón detrás de colocar estos anuncios durante esos programas
                                    específicos. También anote cualquier anuncio o colocación de productos que ocurra
                                    durante los programas en si. Evalúe la eficacia de las estrategias de publicidad que
                                    se utilizan en este marco de tiempo para llegar a las audiencias seleccionadas</li>
                                <textarea name="preg3" id="p3-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>¿Dado que la publicidad es la principal fuente de ingresos de los medios: se debería
                                    sacrificar la libertad de expresión, la libertad de prensa y la libertad de acceso a
                                    la información para satisfacer a los publicistas, grandes compañías o al gobierno?
                                </li>
                                <textarea name="preg4" id="p4-r" cols="100" rows="10"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                            </ul>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module5.1_temas.php" class="btn btn-success">Anterior</a>
                    <a href="module5.1_eval.php" class="btn btn-success">Siguiente</a>
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