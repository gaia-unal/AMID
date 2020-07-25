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
                        <a href="../modulo5.1/module5.1_inicio.php" class="list-group-item">Unidad 1</a>
                        <a href="../modulo5.2/module5.2_inicio.php" class="list-group-item">Unidad 2</a>
                        <a href="../modulo5.3/module5.3_inicio.php" class="list-group-item">Unidad 3</a>
                        <a href="module5.4_inicio.php" class="list-group-item">Unidad 4</a>
                        <ul class="list-group-item">
                            <a href="module5.4_temas.php" class="list-group-item">Temas</a>
                            <a href="module5.4_act.php" class="list-group-item">Actividad</a>
                            <a href="module5.4_eval.php" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(4)" class="list-group-item inactive">Unidad 5</a>
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
                <h1><br>Unidad 4: Publicidad y el campo político</h1>
                <form action="../../../../queries/actividad.php?id_act=m5u4a1" method="post">
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>La publicidad y el auspicio – ubicación, mensajes y audiencia</h4>
                        <p class="card-text">
                            Recolecte ejemplos de la propaganda política en su región. Si es necesario, haga una
                            investigación en la biblioteca local. Tome en consideración las razones por las que el
                            ciudadano promedio podría estar interesado en la propaganda política. Evalúe la eficacia de
                            cada anuncio, tomando en cuenta el propósito, la información y el mensaje que se transmite,
                            y la audiencia seleccionada. <br>
                            Explique cómo el diseño/forma de los anuncios se utiliza para reforzar el contenido <br>
                            <textarea name="preg1" style="width: 80%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" autofocus></textarea><br/>
                        </p>
                        <h4>Evaluación de los lineamientos para la propaganda política</h4>
                        <p class="card-text">Revise varios anuncios de la misma campaña política. Evalúe la eficacia de
                            la campaña en general en el uso de gráficos unificados, imágenes, eslóganes y mensajes.
                            Utilizando el Internet y/o recursos bibliotecarios, investigue los entes reguladores que han
                            establecido el monitoreo de la propaganda política. Examine los lineamientos establecidos
                            para monitorear la publicidad que los candidatos han utilizado durante las elecciones. <br>
                            Evalúe hasta qué punto los anuncios elegidos se adhieren a estos lineamientos y escríbalo a
                            continuación <br>
                            <textarea name="preg2" style="width: 80%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br/>
                        </p>
                        <h4>Evaluación de los entes reguladores para la propaganda en elecciones</h4>
                        <p class="card-text">
                            Investigue cómo estos entes regulatorios representan los intereses de los ciudadanos.
                            Examine el papel que los ciudadanos pueden tener para asegurar que la propaganda política
                            sea verdadera, justa y precisa <br>
                            Anote cualquier sugerencia que usted le haría al ente regulatorio en relación a la
                            propaganda política <br>
                            <textarea name="preg3" style="width: 80%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br/>
                        </p>
                        <h4>Regulaciones aplicables a los medios durante elecciones nacionales</h4>
                        <p class="card-text">
                            Haga un listado de las regulaciones mediáticas (establecidas por la comisión nacional de
                            elecciones) sobre el informe de las elecciones. Vea si existen lineamientos para informar
                            sobre las encuestas de opinión, si los medios nacionales dan tiempo-aire a los diferentes
                            partidos políticos, transmitiendo los resultados de las elecciones, etc. <br>
                            El consultor político Frank Luntz les dice a sus clientes políticos que el “80 % de nuestras
                            vidas es emoción y sólo el 20 % es intelecto. Me interesa más qué es lo que sientes que lo
                            que piensas”. <br>Examine la propaganda política a la luz de este comentario. Explique hasta
                            qué punto los anuncios políticos se basan en el recurso emocional. Examine el lenguaje que
                            se utiliza para “vender” al candidato y a sus ideas o políticas. Evalué si el lenguaje que
                            se utiliza es preciso o engañoso. <br>
                            Dado el uso del recurso emocional en la propaganda política, sugiera estrategias para
                            mantener a la ciudadanía informada <br>
                            <textarea name="preg4" style="width: 80%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br/>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module5.4_temas.php" class="btn btn-success">Anterior</a>
                    <button id="btn-siguiente" class="btn btn-success" type="submit">Siguiente</button>
                    <!-- <a href="module5.4_eval.php" class="btn btn-success">Siguiente</a> -->
                </center>
                </form>
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